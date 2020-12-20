using Microsoft.AspNetCore.Authorization;
using Microsoft.AspNetCore.Identity;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using System;
using System.Diagnostics;
using System.Linq;
using System.Threading.Tasks;
using VetBooking.Areas.Identity.Data;
using VetBooking.Data;
using VetBooking.Models;

namespace VetBooking.Controllers
{
    [Authorize]
    public class HomeController : Controller
    {
        private readonly VetDbContext _context;
        private UserManager<VetBookingUser> _userManager;

        public HomeController(VetDbContext context, UserManager<VetBookingUser> userManager)
        {
            _context = context;
            _userManager = userManager;
        }

        public async Task<IActionResult> Index()
        {
            return View();
        }

        public IActionResult AdminView()
        {
            return View();
        }

        public IActionResult Privacy()
        {
            return View();
        }

        public async Task<IActionResult> Meeting()
        {
            VetBookingUser user = await _userManager.FindByIdAsync(_userManager.GetUserId(this.User));
            if (user == null)
            {
                return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
            }

            if (user.IsAdmin)
            {
                // show admin meeting panel
                return View("AdminView", await _context.Meetings.ToListAsync());
            }

            return View(await _context.Meetings.Where(m => m.User == user).ToListAsync());
        }

        [HttpPost]
        public async Task<IActionResult> Create(NewMeetingForm model)
        {
            if (!ModelState.IsValid)
            {
                return View("Bad model");
            }

            VetBookingUser user = await _userManager.FindByIdAsync(_userManager.GetUserId(this.User));

            await _context.Meetings.AddAsync(new Meeting() { Name = model.Name, Description = model.Description, Date = model.Date.Add(model.Time), User = user });
            await _context.SaveChangesAsync();
            return View();
        }

        public async Task<IActionResult> Delete(Meeting meeting)
        {
            _context.Meetings.Remove(meeting);
            await _context.SaveChangesAsync();
            return View();
        }

        public async Task<IActionResult> MoveToHistory(Meeting meeting)
        {
            // moves meeting to already due meetings
            _context.MeetingsHistory.Add(new OldMeeting(meeting) { Cancelled = false, Annotation = "Completed by Admin" });
            _context.Meetings.Remove(meeting);
            await _context.SaveChangesAsync();
            return View();
        }

        public async Task<IActionResult> ConfirmEmail(string userId)
        {
            Console.WriteLine(userId);
            return View();
        }

        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}

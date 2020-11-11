using System;
using Microsoft.AspNetCore.Hosting;
using Microsoft.AspNetCore.Identity;
using Microsoft.AspNetCore.Identity.UI;
using Microsoft.EntityFrameworkCore;
using Microsoft.Extensions.Configuration;
using Microsoft.Extensions.DependencyInjection;
using VetBooking.Areas.Identity.Data;
using VetBooking.Data;

[assembly: HostingStartup(typeof(VetBooking.Areas.Identity.IdentityHostingStartup))]
namespace VetBooking.Areas.Identity
{
    public class IdentityHostingStartup : IHostingStartup
    {
        public void Configure(IWebHostBuilder builder)
        {
            builder.ConfigureServices((context, services) => {
                services.AddDbContext<VetDbContext>(options =>
                    options.UseSqlServer(
                        context.Configuration.GetConnectionString("VetDbContextConnection")));

                services.AddDefaultIdentity<VetBookingUser>(options => options.SignIn.RequireConfirmedAccount = true)
                    .AddEntityFrameworkStores<VetDbContext>();
            });
        }
    }
}
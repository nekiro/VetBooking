using System;
using System.ComponentModel.DataAnnotations;

namespace VetBooking.Areas.Identity.Data
{
    public class NewMeetingForm
    {
        [Required]
        public string Name { get; set; }
        [Required]
        public string Description { get; set; }
        [Required]        
        public DateTime Date { get; set; }
        [Required]
        public TimeSpan Time { get; set; }
    }
}

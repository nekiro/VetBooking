using System;

namespace VetBooking.Areas.Identity.Data
{
    public class NewMeetingForm
    {
        public string Name { get; set; }
        public string Description { get; set; }
        public DateTime Date { get; set; }
        public TimeSpan Time { get; set; }
    }
}

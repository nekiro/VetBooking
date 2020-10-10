using System;

namespace VetBooking.Models
{
    public class Meeting
    {
        public string Name { get; set; }
        public string Description { get; set; }
        public DateTime Date { get; set; }

        public User User { get; set; }
    }
}

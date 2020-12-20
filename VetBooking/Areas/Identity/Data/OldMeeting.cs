using System;

namespace VetBooking.Areas.Identity.Data
{
    public class OldMeeting
    {
        public OldMeeting() { } // default
        public OldMeeting(Meeting meeting)
        {
            ID = meeting.ID;
            Name = meeting.Name;
            Description = meeting.Description;
            Date = meeting.Date;
            User = meeting.User;
        }

        public int ID { get; set; }

        public string Name { get; set; }
        public string Description { get; set; }
        public DateTime Date { get; set; }
        public bool Cancelled { get; set; }
        public string Annotation { get; set; }

        public VetBookingUser User { get; set; }
    }
}

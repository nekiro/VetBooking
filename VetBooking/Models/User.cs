using System;
using System.Collections.Generic;

namespace VetBooking.Models
{
    public class User
    {
        public int UserID { get; set; }
        public string Email { get; set; }
        public string Password { get; set; }
        public string FirstName { get; set; }
        public string LastName { get; set; }
        public string PhoneNumber { get; set; }
        public bool IsAdmin { get; set; }

        public ICollection<Meeting> Meetings { get; set; }
    }
}

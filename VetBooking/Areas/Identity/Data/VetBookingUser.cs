using Microsoft.AspNetCore.Identity;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations.Schema;

namespace VetBooking.Areas.Identity.Data
{
    // Add profile data for application users by adding properties to the VetBookingUser class
    public class VetBookingUser : IdentityUser
    {
        [PersonalData]
        [Column(TypeName ="nvarchar(100)")]
        public string FirstName { get; set; }
        [PersonalData]
        [Column(TypeName = "nvarchar(100)")]
        public string LastName { get; set; }

        public ICollection<Meeting> Meetings { get; set; }
    }
}

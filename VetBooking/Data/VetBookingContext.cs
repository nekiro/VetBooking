using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using VetBooking.Models;

namespace VetBooking.Data
{
    public class VetBookingContext : DbContext
    {
        public VetBookingContext (DbContextOptions<VetBookingContext> options)
            : base(options)
        {
        }

        public DbSet<VetBooking.Models.Meeting> Meeting { get; set; }
    }
}

﻿using System;

namespace VetBooking.Areas.Identity.Data
{
    public class Meeting
    {
        public int ID { get; set; }

        public string Name { get; set; }
        public string Description { get; set; }
        public DateTime Date { get; set; }

       public VetBookingUser User { get; set; }
    }
}
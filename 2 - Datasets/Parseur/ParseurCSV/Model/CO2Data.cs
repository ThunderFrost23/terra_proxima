using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ParseurCSV.Model
{
    internal class CO2Data
    {
        public int ObjectID { get; set; }
        public int Year { get; set; }
        public string Month { get; set; }
        public float Value { get; set; }
    }
}

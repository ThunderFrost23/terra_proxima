using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ParseurCSV.Model
{
    public class TemperatureData
    {
        public string Country { get; set; }
        public Dictionary<int, float> TemperatureByYear { get; set; } = new Dictionary<int, float>();

    }
}

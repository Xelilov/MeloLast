using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace WebApplication2.SimpleModel
{
    public class ArtezianWell
    {
        public int OBJECTID { get; set; }
        public string SHAPE { get; set; }
        public int Municipality_id { get; set; }
        public int Region_ID { get; set; }
    }
}
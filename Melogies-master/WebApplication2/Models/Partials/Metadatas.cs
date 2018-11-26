using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations;

namespace WebApplication2.Models.Partials
{
    public class CHANNELS_1Metadatas
    {
        [Display(Name = "Tip")]
        public string TYPE { get; set; }

        [Display(Name = "Ad")]
        public string NAME { get; set; }
    }

    public class CHANNELS_2Metadatas
    {
        public string TYPE { get; set; }

        [Display(Name = "Ad")]
        public string NAME { get; set; }
    }
}
//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated from a template.
//
//     Manual changes to this file may cause unexpected behavior in your application.
//     Manual changes to this file will be overwritten if the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

namespace WebApplication2.Models
{
    using System;
    using System.Collections.Generic;
    
    public partial class a46
    {
        public int OBJECTID { get; set; }
        public string NAME { get; set; }
        public string REGION_CODE { get; set; }
        public string RAYON_CODE { get; set; }
        public string MUNICIPALITY_CODE { get; set; }
        public string MUNICIPALITY_ID { get; set; }
        public Nullable<short> DATASTATUS { get; set; }
        public Nullable<System.DateTime> CHANGEDATE { get; set; }
        public Nullable<int> USERID { get; set; }
        public System.Data.Entity.Spatial.DbGeometry SHAPE { get; set; }
        public long SDE_STATE_ID { get; set; }
    }
}

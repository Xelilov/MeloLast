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
    
    public partial class DEPARTMENT
    {
        public int OBJECTID { get; set; }
        public Nullable<decimal> ID { get; set; }
        public string AD { get; set; }
        public Nullable<int> Region_ID { get; set; }
        public Nullable<int> Municipality_ID { get; set; }
        public System.Data.Entity.Spatial.DbGeometry SHAPE { get; set; }
        public Nullable<int> USER_ADMIN_ID { get; set; }
    }
}

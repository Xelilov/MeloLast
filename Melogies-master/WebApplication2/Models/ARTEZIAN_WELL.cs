﻿//------------------------------------------------------------------------------
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
    using System.ComponentModel.DataAnnotations;

    public partial class ARTEZIAN_WELL
    {
        public int OBJECTID { get; set; }
        [Display(Name = "Yerləşdiyi yer")]
        public string LOCATED_AREA { get; set; }
        [Display(Name = "Reper nömrəsi")]
        public string REPER_NO { get; set; }
        [Display(Name = "Tipi")]
        public string WELL_TYPE { get; set; }
        [Display(Name = "Təyinatı")]
        public string ASSIGMENT { get; set; }
        public Nullable<decimal> PRODUCTIVITY { get; set; }
        [Display(Name = "Aid olduğu SİB")]
        public string SIB { get; set; }
        [Display(Name = "İstismara verildiyi tarix")]
        public string EXPLONATION_DATE { get; set; }
        public string ACTIVITY { get; set; }
        public Nullable<decimal> IRRIGATED_AREA { get; set; }
        [Display(Name = "Mülkiyyətçi")]
        public string PROPERTY { get; set; }
        [Display(Name = "Mülkiyyət növü")]
        public string PROPERTY_TYPE { get; set; }
        public Nullable<decimal> DEPTH { get; set; }
        public Nullable<decimal> NUMBER_ { get; set; }
        public Nullable<decimal> X { get; set; }
        public Nullable<decimal> Y { get; set; }
        public Nullable<decimal> WATER_CAPABILITY { get; set; }
        public Nullable<int> Region_ID { get; set; }
        public Nullable<int> Municipality_ID { get; set; }
        public System.Data.Entity.Spatial.DbGeometry SHAPE { get; set; }
        public Nullable<int> USER_ADMIN_ID { get; set; }
    }
}

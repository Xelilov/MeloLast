using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using WebApplication2.Models;

namespace WebApplication2.Areas.Admin.Controllers
{
    public class DEVICEsController : Controller
    {
        private MelogisEntities db = new MelogisEntities();


        [AdminAuthenticationController]
        public ActionResult Index()
        {
            int logUser = (int)Session["UserAdmin"];
            return View(db.DEVICEs.Where(s => s.USER_ADMIN_ID == logUser).ToList());
        }


        [HttpPost]
        public ActionResult Index(List<DEVICE> dev)
        {
            foreach (var item in dev)
            {
                db.Entry(item).State = EntityState.Modified;
                db.Entry(item).Property(c => c.SHAPE).IsModified = false;
                db.SaveChanges();
            }
            return RedirectToAction("Index");
        }


        public ActionResult Device()
        {
            return View(db.DEVICEs.ToList());
        }





        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}

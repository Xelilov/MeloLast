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
    public class DRENAJ_1Controller : Controller
    {
        private MelogisEntities db = new MelogisEntities();

        [AdminAuthenticationController]
        public ActionResult Index()
        {
            int logUser = (int)Session["UserAdmin"];
            return View(db.DRENAJ_1.Where(s => s.USER_ADMIN_ID == logUser).ToList());
        }

        [HttpPost]
        public ActionResult Index(List<DRENAJ_1> drn)
        {
            foreach (var item in drn)
            {
                db.Entry(item).State = EntityState.Modified;
                db.Entry(item).Property(c => c.SHAPE).IsModified = false;
                db.SaveChanges();
            }
            return RedirectToAction("Index");
        }

        public ActionResult Drenaj()
        {
            return View(db.DRENAJ_1.ToList());
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

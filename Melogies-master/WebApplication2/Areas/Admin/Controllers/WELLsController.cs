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
    public class WELLsController : Controller
    {
        private MelogisEntities db = new MelogisEntities();
        
        [AdminAuthenticationController]
        public ActionResult Index()
        {
            int logUser = (int)Session["UserAdmin"];
            return View(db.WELLs.Where(s => s.USER_ADMIN_ID == logUser).ToList());
        }


        [HttpPost]
        public ActionResult Index(List<WELL> wll)
        {
            foreach (var item in wll)
            {
                db.Entry(item).State = EntityState.Modified;
                db.Entry(item).Property(c => c.SHAPE).IsModified = false;
                db.SaveChanges();
            }
            return RedirectToAction("Index");
        }

        public ActionResult WeLL()
        {
            return View(db.WELLs.ToList());
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

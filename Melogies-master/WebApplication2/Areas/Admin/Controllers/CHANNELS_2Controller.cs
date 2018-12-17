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
    public class CHANNELS_2Controller : Controller
    {
        private MelogisEntities db = new MelogisEntities();

        [AdminAuthenticationController]
        public ActionResult Index()
        {
            int logUser = (int)Session["UserAdmin"];
            return View(db.CHANNELS_2.Where(s => s.USER_ADMIN_ID == logUser).ToList());
        }

        [HttpPost]
        public ActionResult Index(List<CHANNELS_2> chn)
        {

            foreach (var item in chn)
            {
                db.Entry(item).State = EntityState.Modified;
                db.Entry(item).Property(c => c.SHAPE).IsModified = false;
                db.SaveChanges();
            }
            return RedirectToAction("Index");
        }

        public ActionResult Channels()
        {
            return View(db.CHANNELS_2.ToList());
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

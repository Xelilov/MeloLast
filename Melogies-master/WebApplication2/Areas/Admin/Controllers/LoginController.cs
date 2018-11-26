﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using WebApplication2.Models;


namespace WebApplication2.Areas.Admin.Controllers
{
    public class LoginController : Controller
    {
        MelogisEntities db = new MelogisEntities();
                
        public ActionResult Index()
        {
            return View();
        }

        public ActionResult LogIn(string username, string password)
        {
            try
            {
                USERADMIN user = db.USERADMINs.Where(s => s.NAME == username && s.PASSWORD == password).First();
                if (user!= null)
                {
                    Session["UserAdmin"] = user.OBJECTID;
                    return RedirectToAction("Index","Admin");
                }
            }
            catch
            {
                return RedirectToAction("Index");
            }

            return RedirectToAction("Index");
        }
    }
}
﻿using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using WebApplication2.Models;
using WebApplication2.Models.ViewModels;
using WebApplication2.SimpleModel;

namespace WebApplication2.Controllers
{
    public class HomeController : Controller
    {
        MelogisEntities db = new MelogisEntities();
        static List<Regions> RegionList = new List<Regions>();
        static List<Village> VillageList = new List<Village>();
        static List<Channels> ChannelList = new List<Channels>();
        static List<Drenaj> DrenajList = new List<Drenaj>();
        static List<Riverbandcs> RiverbandList = new List<Riverbandcs>();
        static List<ArtezianWell> ArtezianWellList = new List<ArtezianWell>();
        static List<Device> DeviceList = new List<Device>();
        static List<Wells> WellList = new List<Wells>();
        static List<Departments> DepartmentsList = new List<Departments>();
        static List<Pumpstation> PumpstationList = new List<Pumpstation>();
        static List<Buildings> buildinglist = new List<Buildings>();
        static List<Exploitationroad> exploitationroadList = new List<Exploitationroad>();
        static List<WinterPasture> winterpaslist = new List<WinterPasture>(); 
        static List<ChannelType> ChTypeList = new List<ChannelType>();
        static List<DrenajType> drejTypeList = new List<DrenajType>();






        static List<SearchName> src = new List<SearchName>();




        static List<CHANNELS_1> kanal1 = new List<CHANNELS_1>();
        static List<CHANNELS_2> kanal2 = new List<CHANNELS_2>();
        static List<CHANNELS_3> kanal3 = new List<CHANNELS_3>();
        static List<CHANNELS_M> kanalm = new List<CHANNELS_M>();
        static List<CHANNELS_D> kanald = new List<CHANNELS_D>();
        static List<DRENAJ_1> drenaj1 = new List<DRENAJ_1>();
        static List<DRENAJ_2> drenaj2 = new List<DRENAJ_2>();
        static List<DRENAJ_3> drenaj3 = new List<DRENAJ_3>();
        static List<DRENAJ_M> drenajm = new List<DRENAJ_M>();
        static List<DRENAJ_D> drenajd = new List<DRENAJ_D>();

        public ActionResult Login()
        {
            using (Context con = new Context())
            {
                RegionList = con.Region.QueryStringAsList("select * from Meloregions").ToList();
                VillageList = con.village.QueryStringAsList($"select * from RESIDENTIALAREA").ToList();
                ChannelList = con.Channel.QueryStringAsList("select SHAPE.STAsText() as shape,FACTICAL_LENGTH, TYPE, NAME,OBJECTID,Municipality_id,Region_ID,WATER_CAPABILITY from CHANNELS").ToList();
                DrenajList = con.Drenaj.QueryStringAsList($"select SHAPE.STAsText() as shape,NAME,TYPE,OBJECTID,FACTICAL_LENGTH, Region_ID,Municipality_id,WATER_CAPABILITY from DRENAJ").ToList();
                RiverbandList = con.riverband.QueryStringAsList("select SHAPE.STAsText() as shape,NAME,TYPE,OBJECTID,LENGTH,Region_ID,Municipality_id from RIVERBAND").ToList();
                ArtezianWellList = con.artwell.QueryStringAsList("select SHAPE.STAsText() as shape,OBJECTID,Region_ID,Municipality_id from ARTEZIAN_WELL ").ToList();
                DeviceList = con.Device.QueryStringAsList("select SHAPE.STAsText() as shape, NAME,OBJECTID,Municipality_id,Region_ID,WATER_CAPABILITY from DEVICE").ToList();
                WellList = con.Well.QueryStringAsList("select SHAPE.STAsText() as shape,OBJECTID,NAME ,Region_ID,WELL_TYPE,Municipality_id from WELL").ToList();
                DepartmentsList = con.department.QueryStringAsList("select SHAPE.STAsText() as shape,OBJECTID,AD,Region_ID from DEPARTMENTS").ToList();
                PumpstationList = con.pumpstation.QueryStringAsList("select SHAPE.STAsText() as shape,OBJECTID,NAME,Region_ID,Municipality_id from PUMPSTATION").ToList();
                buildinglist = con.building.QueryStringAsList("select SHAPE.STAsText() as shape,OBJECTID,NAME,Region_ID,Municipality_id from BUILDINGS").ToList();
                exploitationroadList = con.exploitationroad.QueryStringAsList("select SHAPE.STAsText() as shape,OBJECTID,NAME,Region_ID,LENGHT,Municipality_id from EXPLOITATION_ROAD").ToList();
                winterpaslist = con.winterpas.QueryStringAsList("select SHAPE.STAsText() as shape,OBJECTID,Region_ID,Municipality_id from WINTERPASTURES ").ToList();


                ChTypeList = con.channeltype.QueryStringAsList("select distinct type from CHANNELS").ToList();
                drejTypeList = con.drenajtype.QueryStringAsList("select distinct type from DRENAJ").ToList();
            }



            return View();
        }

        [HttpPost]
        public ActionResult Login(string username,string pass)
        {
            try
            {
                USER user = db.USERS.Where(s => s.USERNAME == username && s.PASSWORD == pass).First();
                if (db.tblUsers.Where(s => s.UserName == username && s.Password == pass).First() != null)
                {
                    Session["UserLogin"] = true;
            return RedirectToAction("Index");
                }
            }
            catch
            {
                return RedirectToAction("Login");
            }

            return RedirectToAction("Login");
        }
        [UserAuthenticationController]
        public ActionResult Index()
        { 
            IndexViewModel IndexVM = new IndexViewModel();
            using (Context con=new Context())
            {               
                IndexVM.Regions = con.Region.QueryStringAsList("select * from Meloregions").ToList();                
                IndexVM.Channels = ChTypeList;
                IndexVM.drejtype = drejTypeList;
            }


            kanal1 = db.CHANNELS_1.ToList();
            kanal2 = db.CHANNELS_2.ToList();
            kanal3 = db.CHANNELS_3.ToList();
            kanalm = db.CHANNELS_M.ToList();
            kanald = db.CHANNELS_D.ToList();
            drenaj1 = db.DRENAJ_1.ToList();
            drenaj2 = db.DRENAJ_2.ToList();
            drenaj3 = db.DRENAJ_3.ToList();
            drenajm = db.DRENAJ_M.ToList();
            drenajd = db.DRENAJ_D.ToList();


            if (src.Count==0)
            {
                foreach (var item in db.CHANNELS_1)
                {
                    src.Add(new SearchName
                    {
                        Id = item.OBJECTID,
                        Name = item.NAME,
                        Type = "CHANNELS_1"
                    });
                }
                foreach (var item in db.CHANNELS_2)
                {
                    src.Add(new SearchName
                    {
                        Id = item.OBJECTID,
                        Name = item.NAME,
                        Type = "CHANNELS_2"
                    });
                }
                foreach (var item in db.CHANNELS_3)
                {
                    src.Add(new SearchName
                    {
                        Id = item.OBJECTID,
                        Name = item.NAME,
                        Type = "CHANNELS_3"
                    });
                }
                foreach (var item in db.CHANNELS_M)
                {
                    src.Add(new SearchName
                    {
                        Id = item.OBJECTID,
                        Name = item.NAME,
                        Type = "CHANNELS_M"
                    });
                }
                foreach (var item in db.DRENAJ_1)
                {
                    src.Add(new SearchName
                    {
                        Id = item.OBJECTID,
                        Name = item.NAME,
                        Type = "DRENAJ_1"
                    });
                }
                foreach (var item in db.DRENAJ_2)
                {
                    src.Add(new SearchName
                    {
                        Id = item.OBJECTID,
                        Name = item.NAME,
                        Type = "DRENAJ_2"
                    });
                }
                foreach (var item in db.DRENAJ_3)
                {
                    src.Add(new SearchName
                    {
                        Id = item.OBJECTID,
                        Name = item.NAME,
                        Type = "DRENAJ_3"
                    });
                }
                foreach (var item in db.DRENAJ_M)
                {
                    src.Add(new SearchName
                    {
                        Id = item.OBJECTID,
                        Name = item.NAME,
                        Type = "DRENAJ_M"
                    });
                }
                foreach (var item in db.ARTEZIAN_WELL)
                {
                    src.Add(new SearchName
                    {
                        Id = item.OBJECTID,
                        Name = item.REPER_NO,
                        Type = "ARTEZIAN_WELL"
                    });
                }
                foreach (var item in db.RIVERBANDs)
                {
                    src.Add(new SearchName
                    {
                        Id = item.OBJECTID,
                        Name = item.NAME,
                        Type = "RIVERBANDs"
                    });
                }
                foreach (var item in db.WELLs)
                {
                    src.Add(new SearchName
                    {
                        Id = item.OBJECTID,
                        Name = item.NAME,
                        Type = "WELLs"
                    });
                }
                foreach (var item in db.BUILDINGS)
                {
                    src.Add(new SearchName
                    {
                        Id = item.OBJECTID,
                        Name = item.NAME,
                        Type = "BUILDINGS"
                    });
                }
                foreach (var item in db.DEVICEs)
                {
                    src.Add(new SearchName
                    {
                        Id = item.OBJECTID,
                        Name = item.NAME,
                        Type = "DEVICEs"
                    });
                }
                foreach (var item in DepartmentsList)
                {
                    src.Add(new SearchName
                    {
                        Id = item.OBJECTID,
                        Name = item.AD,
                        Type = "DEPARTMENTS"
                    });
                }
                foreach (var item in PumpstationList)
                {
                    src.Add(new SearchName
                    {
                        Id = item.OBJECTID,
                        Name = item.NAME,
                        Type = "PUMPSTATIONs"
                    });
                }
                foreach (var item in exploitationroadList)
                {
                    src.Add(new SearchName
                    {
                        Id = item.OBJECTID,
                        Name = item.NAME,
                        Type = "EXPLOITATION_ROAD"
                    });
                }
            }

            return View(IndexVM);
        }

        public ActionResult Search(string name)
        {
            //List<SearchName> src = this.HttpContext.Application["searchResult"] as List<SearchName>;
            
            if (false)
            {
                //src = new List<SearchName>();
                //#region Search
                //foreach (var item in db.CHANNELS_1)
                //{
                //    src.Add(new SearchName
                //    {
                //        Id = item.OBJECTID,
                //        Name = item.NAME,
                //        Type = "Channel"
                //    });
                //}
                //foreach (var item in db.CHANNELS_2)
                //{
                //    src.Add(new SearchName
                //    {
                //        Id = item.OBJECTID,
                //        Name = item.NAME,
                //        Type = "Channel"
                //    });
                //}
                //foreach (var item in db.CHANNELS_3)
                //{
                //    src.Add(new SearchName
                //    {
                //        Id = item.OBJECTID,
                //        Name = item.NAME,
                //        Type = "Channel"
                //    });
                //}
                //foreach (var item in db.CHANNELS_M)
                //{
                //    src.Add(new SearchName
                //    {
                //        Id = item.OBJECTID,
                //        Name = item.NAME,
                //        Type = "Channel"
                //    });
                //}
                //foreach (var item in db.DRENAJ_1)
                //{
                //    src.Add(new SearchName
                //    {
                //        Id = item.OBJECTID,
                //        Name = item.NAME,
                //        Type = "Drenaj"
                //    });
                //}
                //foreach (var item in db.DRENAJ_2)
                //{
                //    src.Add(new SearchName
                //    {
                //        Id = item.OBJECTID,
                //        Name = item.NAME,
                //        Type = "Drenaj"
                //    });
                //}
                //foreach (var item in db.DRENAJ_3)
                //{
                //    src.Add(new SearchName
                //    {
                //        Id = item.OBJECTID,
                //        Name = item.NAME,
                //        Type = "Drenaj"
                //    });
                //}
                //foreach (var item in db.DRENAJ_M)
                //{
                //    src.Add(new SearchName
                //    {
                //        Id = item.OBJECTID,
                //        Name = item.NAME,
                //        Type = "Drenaj"
                //    });
                //}
                //foreach (var item in RiverbandList)
                //{
                //    src.Add(new SearchName
                //    {
                //        Id = item.OBJECTID,
                //        Name = item.NAME,
                //        Type = "Riverband"
                //    });
                //}
                //foreach (var item in WellList)
                //{
                //    src.Add(new SearchName
                //    {
                //        Id = item.OBJECTID,
                //        Name = item.NAME,
                //        Type = "well"
                //    });
                //}
                //foreach (var item in buildinglist)
                //{
                //    src.Add(new SearchName
                //    {
                //        Id = item.OBJECTID,
                //        Name = item.NAME,
                //        Type = "Build"
                //    });
                //}
                //foreach (var item in DeviceList)
                //{
                //    src.Add(new SearchName
                //    {
                //        Id = item.OBJECTID,
                //        Name = item.NAME,
                //        Type = "Device"
                //    });
                //}
                //foreach (var item in DepartmentsList)
                //{
                //    src.Add(new SearchName
                //    {
                //        Id = item.OBJECTID,
                //        Name = item.AD,
                //        Type = "Department"
                //    });
                //}
                //foreach (var item in PumpstationList)
                //{
                //    src.Add(new SearchName
                //    {
                //        Id = item.OBJECTID,
                //        Name = item.NAME,
                //        Type = "Pumpstation"
                //    });
                //}
                //foreach (var item in exploitationroadList)
                //{
                //    src.Add(new SearchName
                //    {
                //        Id = item.OBJECTID,
                //        Name = item.NAME,
                //        Type = "ExploitationRoad"
                //    });
                //}
                //#endregion
                //this.HttpContext.Application.Add("searchResult", src);
            }
           

            var srcResult= src.Where(x =>x.Name!=null && x.Name.ToLower().StartsWith(name.ToLower()));
            var jsonResult = Json(new { data = srcResult}, JsonRequestBehavior.AllowGet);
            jsonResult.MaxJsonLength = int.MaxValue;
            return jsonResult;
        }


        public ActionResult Attributes(int[] id, int[] idVil, string[] Attr, int min, int max)
        {
            List<ChannelMultiSelectList> ChanelsAttribute = new List<ChannelMultiSelectList>();
            List<Channels> AllChannels = new List<Channels>();
            List<ChannelAttr> AttributList = new List<ChannelAttr>();

            AttributList.Add(new ChannelAttr
            {
                TypeName = "Magistral Kanallar",
                TypeTitle= "tych-Magistral",
                TypeCount = 0,
                TypeLength = 0

            });
            AttributList.Add(new ChannelAttr
            {
                TypeName = "1-ci dərəcəli Kanallar",
                TypeTitle = "tych-1",
                TypeCount = 0,
                TypeLength = 0
            });
            AttributList.Add(new ChannelAttr
            {
                TypeName = "2-ci dərəcəli Kanallar",
                TypeTitle = "tych-2",
                TypeCount = 0,
                TypeLength = 0

            });
            AttributList.Add(new ChannelAttr
            {
                TypeName = "3-ci dərəcəli Kanallar",
                TypeTitle = "tych-3",
                TypeCount = 0,
                TypeLength = 0
            });
            AttributList.Add(new ChannelAttr
            {
                TypeName = "Qapalı Kanallar",
                TypeTitle = "tych-Qapalı-Kanallar",
                TypeCount = 0,
                TypeLength = 0
            });
            AttributList.Add(new ChannelAttr
            {
                TypeName = "Magistral kollektorlar",
                TypeTitle = "tydj-magistral",
                TypeCount = 0,
                TypeLength = 0
            });
            AttributList.Add(new ChannelAttr
            {
                TypeName = "1-ci dərəcəli kollektorlar",
                TypeTitle = "tydj-1",
                TypeCount = 0,
                TypeLength = 0
            });
            AttributList.Add(new ChannelAttr
            {
                TypeName = "2-ci dərəcəli yığıcı kollektorlar",
                TypeTitle = "tydj-2",
                TypeCount = 0,
                TypeLength = 0
            });
            AttributList.Add(new ChannelAttr
            {
                TypeName = "3-ci dərəcəli ilkin drenlər",
                TypeTitle = "tydj-3",
                TypeCount = 0,
                TypeLength = 0
            });
            AttributList.Add(new ChannelAttr
            {
                TypeName = "Qapalı drenlər",
                TypeTitle = "tydj-Qapalı-drenlər",
                TypeCount = 0,
                TypeLength = 0
            });
            AttributList.Add(new ChannelAttr
            {
                TypeName = "Mühafizə Bəndləri",
                TypeTitle = "type-2",
                TypeCount = 0,
                TypeLength = 0
            });
            AttributList.Add(new ChannelAttr
            {
                TypeName = "Artezian Quyuları",
                TypeTitle = "type-Artezian-Quyuları",
                TypeCount = 0,
                TypeLength = 0
            });
            AttributList.Add(new ChannelAttr
            {
                TypeName = "Müşahidə Quyuları",
                TypeTitle = "type-3",
                TypeCount = 0,
                TypeLength = 0
            });
            AttributList.Add(new ChannelAttr
            {
                TypeName = "Hidrotexniki Qurğular",
                TypeTitle = "type-4",
                TypeCount = 0,
                TypeLength = 0
            });
            AttributList.Add(new ChannelAttr
            {
                TypeName = "İdarələr",
                TypeTitle = "type-5",
                TypeCount = 0,
                TypeLength = 0
            });
            AttributList.Add(new ChannelAttr
            {
                TypeName = "Nasos Stansiyaları",
                TypeTitle = "type-6",
                TypeCount = 0,
                TypeLength = 0
            });
            AttributList.Add(new ChannelAttr
            {
                TypeName = "Binalar ve tikintilər",
                TypeTitle = "type-7",
                TypeCount = 0,
                TypeLength = 0
            });
            AttributList.Add(new ChannelAttr
            {
                TypeName = "İstismar yolları",
                TypeTitle = "type-8",
                TypeCount = 0,
                TypeLength = 0
            });
            AttributList.Add(new ChannelAttr
            {
                TypeName = "Qış otlaqları",
                TypeTitle = "type-9",
                TypeCount = 0,
                TypeLength = 0
            });

            if (id != null && idVil==null)
            {
                for (int i = 0; i < id.Length; i++)
                {
                    if (id[i]==0)
                    {
                        var chnls = db.CHANNELS_M.Where(c =>c.TYPE == "Magistral" && c.WATER_CAPABILITY >= min && c.WATER_CAPABILITY <= max).ToList();
                        var test = AttributList.Where(s => s.TypeName == "Magistral Kanallar").First();
                        test.TypeCount += chnls.Count;
                        for (int c = 0; c < chnls.Count; c++)
                        {
                            if (chnls[c].TYPE == "Magistral")
                            {
                                test.TypeLength += (decimal)chnls[c].FACTICAL_LENGTH;
                            }
                        }
                        test.TypeLength= System.Math.Round(test.TypeLength, 2);
                        var chnls1 = ChannelList.Where(c =>c.TYPE == "1" && c.WATER_CAPABILITY >= min && c.WATER_CAPABILITY <= max).ToList();
                        var test1 = AttributList.Where(s => s.TypeName == "1-ci dərəcəli Kanallar").First();
                        test1.TypeCount += chnls1.Count;
                        for (int c = 0; c < chnls1.Count; c++)
                        {
                            test1.TypeLength += (decimal)chnls1[c].FACTICAL_LENGTH;
                        }
                        test1.TypeLength = System.Math.Round(test1.TypeLength, 2);
                        var chnls2 = ChannelList.Where(c =>c.TYPE == "2" && c.WATER_CAPABILITY >= min && c.WATER_CAPABILITY <= max).ToList();
                        var test2 = AttributList.Where(s => s.TypeName == "2-ci dərəcəli Kanallar").First();
                        test2.TypeCount += chnls2.Count;
                        for (int c = 0; c < chnls2.Count; c++)
                        {
                            test2.TypeLength += chnls2[c].FACTICAL_LENGTH;
                        }
                        test2.TypeLength = System.Math.Round(test2.TypeLength, 2);
                        var chnls3 = ChannelList.Where(c =>c.TYPE == "3" && c.WATER_CAPABILITY >= min && c.WATER_CAPABILITY <= max).ToList();
                        var test3 = AttributList.Where(s => s.TypeName == "3-ci dərəcəli Kanallar").First();
                        test3.TypeCount += chnls3.Count;
                        for (int c = 0; c < chnls3.Count; c++)
                        {
                            test3.TypeLength += chnls3[c].FACTICAL_LENGTH;
                        }
                        test3.TypeLength = System.Math.Round(test3.TypeLength, 2);
                        var chnls4 = ChannelList.Where(c => c.TYPE == "Qapali" && c.WATER_CAPABILITY >= min && c.WATER_CAPABILITY <= max).ToList();
                        var test4 = AttributList.Where(s => s.TypeName == "Qapalı Kanallar").First();
                        test4.TypeCount += chnls4.Count;
                        for (int c = 0; c < chnls4.Count; c++)
                        {
                            test4.TypeLength += chnls4[c].FACTICAL_LENGTH;
                        }
                        var drejmagistral = DrenajList.Where(d => d.TYPE == "Magistral" && d.WATER_CAPABILITY >= min && d.WATER_CAPABILITY <= max).ToList();
                        var listdrejmagis = AttributList.Where(s => s.TypeName == "Magistral kollektorlar").First();
                        listdrejmagis.TypeCount += drejmagistral.Count;
                        for (int d = 0; d < drejmagistral.Count; d++)
                        {
                            listdrejmagis.TypeLength += drejmagistral[d].FACTICAL_LENGTH;
                        }
                        var drej1 = DrenajList.Where(d =>d.TYPE == "1" && d.WATER_CAPABILITY >= min && d.WATER_CAPABILITY <= max).ToList();
                        var listdrej1 = AttributList.Where(s => s.TypeName == "1-ci dərəcəli kollektorlar").First();
                        listdrej1.TypeCount += drej1.Count;
                        for (int d = 0; d < drej1.Count; d++)
                        {
                            listdrej1.TypeLength += drej1[d].FACTICAL_LENGTH;
                        }
                        var drej2 = DrenajList.Where(d =>d.TYPE == "2" && d.WATER_CAPABILITY >= min && d.WATER_CAPABILITY <= max).ToList();
                        var listdrej2 = AttributList.Where(s => s.TypeName == "2-ci dərəcəli yığıcı kollektorlar").First();
                        listdrej2.TypeCount += drej2.Count;
                        for (int d = 0; d < drej2.Count; d++)
                        {
                            listdrej2.TypeLength += drej2[d].FACTICAL_LENGTH;
                        }
                        listdrej2.TypeLength = System.Math.Round(listdrej2.TypeLength, 2);
                        var drej3 = DrenajList.Where(d =>d.TYPE == "3" && d.WATER_CAPABILITY >= min && d.WATER_CAPABILITY <= max).ToList();
                        var listdrej3 = AttributList.Where(s => s.TypeName == "3-ci dərəcəli ilkin drenlər").First();
                        listdrej3.TypeCount += drej3.Count;
                        for (int d = 0; d < drej3.Count; d++)
                        {
                            listdrej3.TypeLength += drej3[d].FACTICAL_LENGTH;
                        }
                        listdrej3.TypeLength = System.Math.Round(listdrej3.TypeLength, 2);
                        var drej4 = DrenajList.Where(d => d.TYPE == "Qapalidren" && d.WATER_CAPABILITY >= min && d.WATER_CAPABILITY <= max).ToList();
                        var listdrej4 = AttributList.Where(s => s.TypeName == "Qapalı drenlər").First();
                        listdrej4.TypeCount += drej4.Count;
                        for (int d = 0; d < drej4.Count; d++)
                        {
                            listdrej4.TypeLength += drej4[d].FACTICAL_LENGTH;
                        }

                        var riverband = RiverbandList;
                        var listriver = AttributList.Where(l => l.TypeName == "Mühafizə Bəndləri").First();
                        listriver.TypeCount += riverband.Count;
                        for (int r = 0; r < riverband.Count; r++)
                        {
                            listriver.TypeLength += riverband[r].LENGTH;
                        }
                        var well = WellList;
                        var listwell = AttributList.Where(l => l.TypeName == "Müşahidə Quyuları").First();
                        listwell.TypeCount += well.Count;

                        var artwell = ArtezianWellList;
                        var listartwell = AttributList.Where(l => l.TypeName == "Artezian Quyuları").First();
                        listartwell.TypeCount += artwell.Count;

                        var device = DeviceList;
                        for (int q = 0; q < device.Count; q++)
                        {
                            decimal number;
                            bool success = decimal.TryParse(device[q].WATER_CAPABILITY, out number);
                            if (success && number >= min && number <= max)
                            {
                                var listdevice = AttributList.Where(l => l.TypeName == "Hidrotexniki Qurğular").First();
                                listdevice.TypeCount += 1;
                            }
                        }

                        var departments = DepartmentsList;
                        var listdepar = AttributList.Where(l => l.TypeName == "İdarələr").First();
                        listdepar.TypeCount += departments.Count;

                        var pumpstation = PumpstationList;
                        var listpump = AttributList.Where(l => l.TypeName == "Nasos Stansiyaları").First();
                        listpump.TypeCount += pumpstation.Count;

                        var buildings = buildinglist;
                        var listbuild = AttributList.Where(l => l.TypeName == "Binalar ve tikintilər").First();
                        listbuild.TypeCount += buildings.Count;

                        var road = exploitationroadList;
                        var listroad = AttributList.Where(l => l.TypeName == "İstismar yolları").First();
                        listroad.TypeCount += road.Count;
                        for (int r = 0; r < road.Count; r++)
                        {
                            listroad.TypeLength += road[r].LENGHT;
                        }
                        var winterpas = winterpaslist;
                        var listwp = AttributList.Where(l => l.TypeName == "Qış otlaqları").First();
                        listwp.TypeCount += winterpas.Count;
                        break;
                    }
                    else
                    {
                        int rayonid = id[i];
                        var chnls = kanalm.Where(c => c.Region_ID == rayonid && c.TYPE== "Magistral" && c.WATER_CAPABILITY >= min && c.WATER_CAPABILITY <= max).ToList();
                        var test = AttributList.Where(s => s.TypeName == "Magistral Kanallar").First();
                        test.TypeCount += chnls.Count;
                        for (int c = 0; c < chnls.Count; c++)
                        {
                            if (chnls[c].TYPE== "Magistral")
                            {                                
                                test.TypeLength += (decimal)chnls[c].FACTICAL_LENGTH;
                            }
                        }
                        var chnls1 = kanal1.Where(c => c.Region_ID == rayonid && c.TYPE == "1" && c.WATER_CAPABILITY >= min && c.WATER_CAPABILITY <= max).ToList();
                        var test1 = AttributList.Where(s => s.TypeName == "1-ci dərəcəli Kanallar").First();
                        test1.TypeCount += chnls1.Count;
                        for (int c = 0; c < chnls1.Count; c++)
                        {
                                test1.TypeLength += (decimal)chnls1[c].FACTICAL_LENGTH;
                        }
                        var chnls2 = kanal2.Where(c => c.Region_ID == rayonid && c.TYPE == "2" && c.WATER_CAPABILITY >= min && c.WATER_CAPABILITY <= max).ToList();
                        var test2 = AttributList.Where(s => s.TypeName == "2-ci dərəcəli Kanallar").First();
                        test2.TypeCount += chnls2.Count;
                        for (int c = 0; c < chnls2.Count; c++)
                        {
                            test2.TypeLength += (decimal)chnls2[c].FACTICAL_LENGTH;
                        }
                        var chnls3 = kanal3.Where(c => c.Region_ID == rayonid && c.TYPE == "3" && c.WATER_CAPABILITY >= min && c.WATER_CAPABILITY <= max).ToList();
                        var test3 = AttributList.Where(s => s.TypeName == "3-ci dərəcəli Kanallar").First();
                        test3.TypeCount += chnls3.Count;
                        for (int c = 0; c < chnls3.Count; c++)
                        {
                            test3.TypeLength += (decimal)chnls3[c].FACTICAL_LENGTH;
                        }
                        var chnls4 = kanald.Where(c => c.Region_ID == rayonid && c.TYPE == "Qapali" && c.WATER_CAPABILITY >= min && c.WATER_CAPABILITY <= max).ToList();
                        var test4 = AttributList.Where(s => s.TypeName == "Qapalı Kanallar").First();
                        test4.TypeCount += chnls4.Count;
                        for (int c = 0; c < chnls4.Count; c++)
                        {
                            test4.TypeLength += (decimal)chnls4[c].FACTICAL_LENGTH;
                        }

                        var drejmagistral = drenajm.Where(d => d.Region_ID == rayonid && d.TYPE == "Magistral" && d.WATER_CAPABILITY >= min && d.WATER_CAPABILITY <= max).ToList();
                        var listdrejmagis = AttributList.Where(s => s.TypeName == "Magistral kollektorlar").First();
                        listdrejmagis.TypeCount += drejmagistral.Count;
                        for (int d = 0; d < drejmagistral.Count; d++)
                        {
                            listdrejmagis.TypeLength += (decimal)drejmagistral[d].FACTICAL_LENGTH;
                        }
                        var drej1 = drenaj1.Where(d => d.Region_ID == rayonid && d.TYPE == "1" && d.WATER_CAPABILITY >= min && d.WATER_CAPABILITY <= max).ToList();
                        var listdrej1= AttributList.Where(s => s.TypeName == "1-ci dərəcəli kollektorlar").First();
                        listdrej1.TypeCount += drej1.Count;
                        for (int d = 0; d < drej1.Count; d++)
                        {
                            listdrej1.TypeLength += (decimal)drej1[d].FACTICAL_LENGTH;
                        }
                        var drej2 = drenaj2.Where(d => d.Region_ID == rayonid && d.TYPE == "2" && d.WATER_CAPABILITY >= min && d.WATER_CAPABILITY <= max).ToList();
                        var listdrej2 = AttributList.Where(s => s.TypeName == "2-ci dərəcəli yığıcı kollektorlar").First();
                        listdrej2.TypeCount += drej2.Count;
                        for (int d = 0; d < drej2.Count; d++)
                        {
                            listdrej2.TypeLength += (decimal)drej2[d].FACTICAL_LENGTH;
                        }
                        var drej3 = drenaj3.Where(d => d.Region_ID == rayonid && d.TYPE == "3" && d.WATER_CAPABILITY >= min && d.WATER_CAPABILITY <= max).ToList();
                        var listdrej3 = AttributList.Where(s => s.TypeName == "3-ci dərəcəli ilkin drenlər").First();
                        listdrej3.TypeCount += drej3.Count;
                        for (int d = 0; d < drej3.Count; d++)
                        {
                            listdrej3.TypeLength += (decimal)drej3[d].FACTICAL_LENGTH;
                        }

                        var drej4 = drenajd.Where(d => d.Region_ID == rayonid && d.TYPE == "qapalidren" && d.WATER_CAPABILITY >= min && d.WATER_CAPABILITY <= max).ToList();
                        var listdrej4 = AttributList.Where(s => s.TypeName == "Qapalı drenlər").First();
                        listdrej4.TypeCount += drej4.Count;
                        for (int d = 0; d < drej4.Count; d++)
                        {
                            listdrej4.TypeLength += (decimal)drej4[d].FACTICAL_LENGTH;
                        }
                        var riverband = RiverbandList.Where(r => r.Region_ID == id[i]).ToList();
                        var listriver = AttributList.Where(l => l.TypeName == "Mühafizə Bəndləri").First();
                        listriver.TypeCount += riverband.Count;
                        for (int r = 0; r < riverband.Count; r++)
                        {
                            listriver.TypeLength += riverband[r].LENGTH;
                        }
                        var well = WellList.Where(r => r.Region_ID == id[i]).ToList();
                        var listwell = AttributList.Where(l => l.TypeName == "Müşahidə Quyuları").First();
                        listwell.TypeCount += well.Count;

                        var artwell = ArtezianWellList.Where(r => r.Region_ID == id[i]).ToList();
                        var listartwell = AttributList.Where(l => l.TypeName == "Artezian Quyuları").First();
                        listartwell.TypeCount += artwell.Count;

                        var device = DeviceList.Where(r => r.Region_ID == id[i]).ToList();
                        for (int q = 0; q < device.Count; q++)
                        {
                            decimal number;
                            bool success = decimal.TryParse(device[q].WATER_CAPABILITY, out number);
                            if (success && number >= min && number <= max)
                            {
                                var listdevice = AttributList.Where(l => l.TypeName == "Hidrotexniki Qurğular").First();
                                listdevice.TypeCount += 1;
                            }
                        }

                        var departments = DepartmentsList.Where(r => r.Region_ID == id[i]).ToList();
                        var listdepar = AttributList.Where(l => l.TypeName == "İdarələr").First();
                        listdepar.TypeCount += departments.Count;

                        var pumpstation = PumpstationList.Where(r => r.Region_ID == id[i]).ToList();
                        var listpump = AttributList.Where(l => l.TypeName == "Nasos Stansiyaları").First();
                        listpump.TypeCount += pumpstation.Count;

                        var buildings = buildinglist.Where(r => r.Region_ID == id[i]).ToList();
                        var listbuild = AttributList.Where(l => l.TypeName == "Binalar ve tikintilər").First();
                        listbuild.TypeCount += buildings.Count;

                        var road = exploitationroadList.Where(r => r.Region_ID == id[i]).ToList();
                        var listroad = AttributList.Where(l => l.TypeName == "İstismar yolları").First();
                        listroad.TypeCount += road.Count;
                        for (int r = 0; r < road.Count; r++)
                        {
                            listroad.TypeLength += road[r].LENGHT;
                        }

                        var winterpas = winterpaslist.Where(r => r.Region_ID == id[i]).ToList();
                        var listwp= AttributList.Where(l => l.TypeName == "Qış otlaqları").First();
                        listwp.TypeCount += winterpas.Count;
                    }
                }
            }
            if (idVil != null)
            {
                for (int i = 0; i < idVil.Length; i++)
                {
                    int kendid = idVil[i];
                    var chnls = db.CHANNELS_M.Where(c => c.Municipality_ID == kendid && c.TYPE == "Magistral" && c.WATER_CAPABILITY >= min && c.WATER_CAPABILITY <= max).ToList();
                    var test = AttributList.Where(s => s.TypeName == "Magistral Kanallar").First();
                    test.TypeCount += chnls.Count;
                    for (int c = 0; c < chnls.Count; c++)
                    {
                        if (chnls[c].TYPE == "Magistral")
                        {
                            test.TypeLength += (decimal)chnls[c].FACTICAL_LENGTH;
                        }
                    }
                    var chnls1 = kanal1.Where(c => c.Municipality_ID == kendid && c.TYPE == "1" && c.WATER_CAPABILITY >= min && c.WATER_CAPABILITY <= max).ToList();
                    var test1 = AttributList.Where(s => s.TypeName == "1-ci dərəcəli Kanallar").First();
                    test1.TypeCount += chnls1.Count;
                    for (int c = 0; c < chnls1.Count; c++)
                    {
                        test1.TypeLength += (decimal)chnls1[c].FACTICAL_LENGTH;
                    }
                    var chnls2 = db.CHANNELS_2.Where(c => c.Municipality_ID == kendid && c.TYPE == "2" && c.WATER_CAPABILITY >= min && c.WATER_CAPABILITY <= max).ToList();
                    var test2 = AttributList.Where(s => s.TypeName == "2-ci dərəcəli Kanallar").First();
                    test2.TypeCount += chnls2.Count;
                    for (int c = 0; c < chnls2.Count; c++)
                    {
                        test2.TypeLength += (decimal)chnls2[c].FACTICAL_LENGTH;
                    }
                    var chnls3 = db.CHANNELS_3.Where(c => c.Municipality_ID == kendid && c.TYPE == "3" && c.WATER_CAPABILITY >= min && c.WATER_CAPABILITY <= max).ToList();
                    var test3 = AttributList.Where(s => s.TypeName == "3-ci dərəcəli Kanallar").First();
                    test3.TypeCount += chnls3.Count;
                    for (int c = 0; c < chnls3.Count; c++)
                    {
                        test3.TypeLength += (decimal)chnls3[c].FACTICAL_LENGTH;
                    }
                    var chnls4 = db.CHANNELS_D.Where(c => c.Municipality_ID == kendid && c.TYPE == "qapali" && c.WATER_CAPABILITY >= min && c.WATER_CAPABILITY <= max).ToList();
                    var test4 = AttributList.Where(s => s.TypeName == "Qapalı Kanallar").First();
                    test4.TypeCount += chnls4.Count;
                    for (int c = 0; c < chnls4.Count; c++)
                    {
                        test4.TypeLength += (decimal)chnls4[c].FACTICAL_LENGTH;
                    }
                    var drejmagistral = db.DRENAJ_M.Where(d => d.TYPE == "Magistral" && d.Municipality_ID == kendid && d.WATER_CAPABILITY >= min && d.WATER_CAPABILITY <= max).ToList();
                    var listdrejmagis = AttributList.Where(s => s.TypeName == "Magistral kollektorlar").First();
                    listdrejmagis.TypeCount += drejmagistral.Count;
                    for (int d = 0; d < drejmagistral.Count; d++)
                    {
                        listdrejmagis.TypeLength += (decimal)drejmagistral[d].FACTICAL_LENGTH;
                    }
                    var drej1 = db.DRENAJ_1.Where(d => d.Municipality_ID == kendid && d.TYPE == "1" && d.WATER_CAPABILITY >= min && d.WATER_CAPABILITY <= max).ToList();
                    var listdrej1 = AttributList.Where(s => s.TypeName == "1-ci dərəcəli kollektorlar").First();
                    listdrej1.TypeCount += drej1.Count;
                    for (int d = 0; d < drej1.Count; d++)
                    {
                        listdrej1.TypeLength += (decimal)drej1[d].FACTICAL_LENGTH;
                    }
                    var drej2 = db.DRENAJ_2.Where(d => d.Municipality_ID == kendid && d.TYPE == "2" && d.WATER_CAPABILITY >= min && d.WATER_CAPABILITY <= max).ToList();
                    var listdrej2 = AttributList.Where(s => s.TypeName == "2-ci dərəcəli yığıcı kollektorlar").First();
                    listdrej2.TypeCount += drej2.Count;
                    for (int d = 0; d < drej2.Count; d++)
                    {
                        listdrej2.TypeLength += (decimal)drej2[d].FACTICAL_LENGTH;
                    }
                    var drej3 = db.DRENAJ_3.Where(d => d.Municipality_ID == kendid && d.TYPE == "3" && d.WATER_CAPABILITY >= min && d.WATER_CAPABILITY <= max).ToList();
                    var listdrej3 = AttributList.Where(s => s.TypeName == "3-ci dərəcəli ilkin drenlər").First();
                    listdrej3.TypeCount += drej3.Count;
                    for (int d = 0; d < drej3.Count; d++)
                    {
                        listdrej3.TypeLength += (decimal)drej3[d].FACTICAL_LENGTH;
                    }
                    var drej4 = db.DRENAJ_D.Where(d => d.Municipality_ID == kendid && d.TYPE == "qapalidren" && d.WATER_CAPABILITY >= min && d.WATER_CAPABILITY <= max).ToList();
                    var listdrej4 = AttributList.Where(s => s.TypeName == "Qapalı drenlər").First();
                    listdrej4.TypeCount += drej4.Count;
                    for (int d = 0; d < drej4.Count; d++)
                    {
                        listdrej4.TypeLength += (decimal)drej4[d].FACTICAL_LENGTH;
                    }

                    var riverband = RiverbandList.Where(r => r.Municipality_id == idVil[i]).ToList();
                    var listriver = AttributList.Where(l => l.TypeName == "Mühafizə Bəndləri").First();
                    listriver.TypeCount += riverband.Count;
                    for (int r = 0; r < riverband.Count; r++)
                    {
                        listriver.TypeLength += riverband[r].LENGTH;
                    }
                    var well = WellList.Where(r => r.Municipality_id == idVil[i]).ToList();
                    var listwell = AttributList.Where(l => l.TypeName == "Müşahidə Quyuları").First();
                    listwell.TypeCount += well.Count;

                    var artwell = ArtezianWellList.Where(r => r.Municipality_id == idVil[i]).ToList();
                    var listartwell = AttributList.Where(l => l.TypeName == "Artezian Quyuları").First();
                    listartwell.TypeCount += artwell.Count;

                    var device = DeviceList.Where(r => r.Municipality_id == idVil[i]).ToList();
                    for (int q = 0; q < device.Count; q++)
                    {
                        decimal number;
                        bool success = decimal.TryParse(device[q].WATER_CAPABILITY, out number);
                        if (success && number >= min && number <= max)
                        {
                            var listdevice = AttributList.Where(l => l.TypeName == "Hidrotexniki Qurğular").First();
                            listdevice.TypeCount += 1;
                        }
                    }

                    var departments = DepartmentsList.Where(r => r.Region_ID == idVil[i]).ToList();
                    var listdepar = AttributList.Where(l => l.TypeName == "İdarələr").First();
                    listdepar.TypeCount += departments.Count;

                    var pumpstation = PumpstationList.Where(r => r.Municipality_id == idVil[i]).ToList();
                    var listpump = AttributList.Where(l => l.TypeName == "Nasos Stansiyaları").First();
                    listpump.TypeCount += departments.Count;

                    var buildings = buildinglist.Where(r => r.Municipality_id == idVil[i]).ToList();
                    var listbuild = AttributList.Where(l => l.TypeName == "Binalar ve tikintilər").First();
                    listbuild.TypeCount += buildings.Count;

                    var road = exploitationroadList.Where(r => r.Municipality_id == idVil[i]).ToList();
                    var listroad = AttributList.Where(l => l.TypeName == "İstismar yolları").First();
                    listroad.TypeCount += road.Count;
                    for (int r = 0; r < road.Count; r++)
                    {
                        listroad.TypeLength += road[r].LENGHT;
                    }

                    var winterpas = winterpaslist.Where(r => r.Municipality_id == id[i]).ToList();
                    var listwp = AttributList.Where(l => l.TypeName == "Qış otlaqları").First();
                    listwp.TypeCount += winterpas.Count;

                }
            }
            List<ChannelAttr> attr = new List<ChannelAttr>();
            if (Attr != null)
            {
                for (int i = 0; i < Attr.Length; i++)
                {
                    if (Attr[i]== "type-0")
                    {
                        attr = AttributList;
                        break;
                    }
                    else
                    {
                        attr.Add(AttributList.Where(s => s.TypeTitle == Attr[i]).First());
                    }
                }

            }
            else
            {
                attr = AttributList;
            }

            var jsonResult = Json(new { data = attr }, JsonRequestBehavior.AllowGet);
            jsonResult.MaxJsonLength = int.MaxValue;
            return jsonResult;

        }
               

        public ActionResult Village(int[] id)
        {            
            List<MutlySelect> ms = new List<MutlySelect>();
            for (int i = 0; i < id.Length; i++)
            {
                if (id[i]==0)
                {
                    ms.Add(new MutlySelect
                    {
                        Villages = VillageList
                    });
                    break;
                }
                else
                {
                    ms.Add(new MutlySelect
                    {
                        Villages = VillageList.Where(s => s.REGION_ID == id[i]).ToList()
                    });
                    
                }
            }
            var jsonResult = Json(new { data = ms }, JsonRequestBehavior.AllowGet);
            jsonResult.MaxJsonLength = int.MaxValue;
            return jsonResult;
        }


        public ActionResult Laylar(int? id)
        {            
            LaylarViewModel laylarViewModel = new LaylarViewModel();
            laylarViewModel.Device = DeviceList.Where(s=>s.Municipality_id==id).ToList();
            laylarViewModel.Channels = ChannelList.Where(s=>s.Municipality_id==id).ToList();
            var jsonResult = Json(new { data = laylarViewModel }, JsonRequestBehavior.AllowGet);
            jsonResult.MaxJsonLength = int.MaxValue;
            return jsonResult;
        }

        
        public ActionResult MapShow(int[] id, string[] networkselectlist)
        {
            SebekelerViewModel sbwm = new SebekelerViewModel();
            List<Channels> MsChannel = new List<Channels>();
            List<Drenaj> MsDrenaj = new List<Drenaj>();
            List<Riverbandcs> MsRiverband = new List<Riverbandcs>();
            List<Wells> MsWell = new List<Wells>();
            List<Device> MsDevice = new List<Device>();
            List<Departments> MSDepartments = new List<Departments>();
            List<Pumpstation> MsPumpstation = new List<Pumpstation>();
            List<Buildings> MsBuilding = new List<Buildings>();
            List<Exploitationroad> MsExploitationroad = new List<Exploitationroad>();

            for (int i = 0; i < id.Length; i++)
            {
                if (id[i]==0000)
                {
                    for (int n = 0; n < networkselectlist.Length; n++)
                    {
                        if (networkselectlist[n].Contains("channel"))
                        {
                            string x = networkselectlist[n];
                            var channeltype = x.Substring(8);
                            var slctChannel = ChannelList.Where(c =>c.TYPE == channeltype).ToList();
                            foreach (var item in slctChannel)
                            {
                                MsChannel.Add(item);
                            }
                            sbwm.SelectedChannels = MsChannel;
                        }
                        if (networkselectlist[n].Contains("drenaj"))
                        {
                            string x = networkselectlist[n];
                            var drenajtype = x.Substring(7);
                            var slctDrenaj = DrenajList.Where(d =>d.TYPE == drenajtype).ToList();
                            foreach (var item in slctDrenaj)
                            {
                                MsDrenaj.Add(item);
                            }
                            sbwm.SelectedDrenajs = MsDrenaj;
                        }
                        if (networkselectlist[n].Contains("network-12"))
                        {
                            sbwm.SelectedRiverband = RiverbandList;
                        }
                        if (networkselectlist[n].Contains("network-16"))
                        {
                            sbwm.SelectedWell = WellList;
                        }
                        if (networkselectlist[n].Contains("network-17"))
                        {
                            sbwm.SelectedDevice = DeviceList;
                        }
                        if (networkselectlist[n].Contains("network-18"))
                        {
                            sbwm.SelectedDepartments = DepartmentsList;
                        }
                        if (networkselectlist[n].Contains("network-19"))
                        {
                            sbwm.SelectedPumpstation = PumpstationList;
                        }
                        if (networkselectlist[n].Contains("network-20"))
                        {
                            sbwm.SelectedBuilding = buildinglist;
                        }
                        if (networkselectlist[n].Contains("network-21"))
                        {
                            sbwm.SelectedExploitationroad = exploitationroadList;
                        }
                    }
                    break;
                }
                else
                {
                    for (int n = 0; n < networkselectlist.Length; n++)
                    {
                        if (networkselectlist[n].Contains("channel"))
                        {
                            string x = networkselectlist[n];
                            var channeltype = x.Substring(8);
                            var slctChannel = ChannelList.Where(c => c.Region_ID == id[i] && c.TYPE == channeltype).ToList();
                            foreach (var item in slctChannel)
                            {
                                MsChannel.Add(item);
                            }
                            sbwm.SelectedChannels = MsChannel;
                        }
                        if (networkselectlist[n].Contains("drenaj"))
                        {
                            string x = networkselectlist[n];
                            var drenajtype = x.Substring(7);
                            var slctDrenaj = DrenajList.Where(d => d.Region_ID == id[i] && d.TYPE == drenajtype).ToList();
                            foreach (var item in slctDrenaj)
                            {
                                MsDrenaj.Add(item);
                            }
                            sbwm.SelectedDrenajs = MsDrenaj;
                        }
                        if (networkselectlist[n].Contains("network-12"))
                        {
                            var slctRiverband = RiverbandList.Where(r => r.Region_ID == id[i]).ToList();
                            foreach (var item in slctRiverband)
                            {
                                MsRiverband.Add(item);
                            }
                            sbwm.SelectedRiverband = MsRiverband;
                        }
                        if (networkselectlist[n].Contains("network-16"))
                        {
                            var slctWell = WellList.Where(w => w.Region_ID == id[i]).ToList();
                            foreach (var item in slctWell)
                            {
                                MsWell.Add(item);
                            }
                            sbwm.SelectedWell = MsWell;
                        }
                        if (networkselectlist[n].Contains("network-17"))
                        {
                            var slctDevide = DeviceList.Where(d => d.Region_ID == id[i]).ToList();
                            foreach (var item in slctDevide)
                            {
                                MsDevice.Add(item);
                            }
                            sbwm.SelectedDevice = MsDevice;
                        }
                        if (networkselectlist[n].Contains("network-18"))
                        {
                            var scltDepartmant = DepartmentsList.Where(dp => dp.Region_ID == id[i]).ToList();
                            foreach (var item in scltDepartmant)
                            {
                                MSDepartments.Add(item);
                            }                            
                            sbwm.SelectedDepartments = MSDepartments;
                        }
                        if (networkselectlist[n].Contains("network-19"))
                        {
                            var slctPumpstation = PumpstationList.Where(p => p.Region_ID == id[i]).ToList();
                            foreach (var item in slctPumpstation)
                            {
                                MsPumpstation.Add(item);
                            }
                            sbwm.SelectedPumpstation = MsPumpstation;
                        }
                        if (networkselectlist[n].Contains("network-20"))
                        {
                            var slctBuilding = buildinglist.Where(b => b.Region_ID == id[i]).ToList();
                            foreach (var item in slctBuilding)
                            {
                                MsBuilding.Add(item);
                            }
                            sbwm.SelectedBuilding = MsBuilding;
                        }
                        if (networkselectlist[n].Contains("network-21"))
                        {
                            var slctExploitationroad = exploitationroadList.Where(e => e.Region_ID == id[i]).ToList();
                            foreach (var item in slctExploitationroad)
                            {
                                MsExploitationroad.Add(item);
                            }
                            sbwm.SelectedExploitationroad = MsExploitationroad;
                        }
                    }
                }
            }
            var jsonResult = Json(new { data = sbwm }, JsonRequestBehavior.AllowGet);
            jsonResult.MaxJsonLength = int.MaxValue;
            return jsonResult;
        }

        
    }
}
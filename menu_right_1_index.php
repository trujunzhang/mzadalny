<div class="col-xs-12  col-sm-3 col-md-3 col-lg-3" id="firstDiv">

    <p class="moreoptions showhideside" style="display: none;width:30%;margin-right:10px">إظهار الخيارات</p>
    <div class="side-col  ">


        <form class="form-horizontal  bs-example-control-sizing" name="drop_list" method="post"
              action="process-more-models.php">


            <select name="ads_tags_R" class="form-control " onchange="showUser(this.value)">
                <option value="marka">أختر ماركة السيارة</option>


                <option value="24						">نيسان</option>

                <option value="55						">مرسيدس</option>

                <option value="70						">بورش</option>

                <option value="79						">فورد</option>

                <option value="103						">ايسوزو</option>

                <option value="106						">شيفروليه</option>

                <option value="137						">جي ام سي</option>

                <option value="149						">بي ام دبليو</option>

                <option value="159						">جيب</option>

                <option value="164						">هونداي</option>

                <option value="183						">هوندا</option>

                <option value="192						">همر</option>

                <option value="196						">انفنيتي</option>

                <option value="202						">لاند روفر</option>

                <option value="209						">مازدا</option>

                <option value="221						">ميركوري</option>

                <option value="223						">فولكس واجن</option>

                <option value="230						">ميتسوبيشي</option>

                <option value="240						">لنكولن</option>

                <option value="245						">اوبل</option>

                <option value="248						">كيا</option>

                <option value="260						">مازيراتي</option>

                <option value="264						">بنتلي</option>

                <option value="271						">استون مارتن</option>

                <option value="272						">كاديلاك</option>

                <option value="281						">كرايزلر</option>

                <option value="290						">سيتروين</option>

                <option value="298						">دايو</option>

                <option value="303						">ديهاتسو</option>

                <option value="307						">دودج</option>

                <option value="320						">فيراري</option>

                <option value="321						">فيات</option>

                <option value="322						">جاكوار</option>

                <option value="328						">لامبورجيني</option>

                <option value="329						">رولز رويس</option>

                <option value="332						">بيجو</option>

                <option value="340						">سوبارو</option>

                <option value="345						">سوزوكي</option>

                <option value="351						">فولفو</option>

                <option value="361						">سكودا</option>

                <option value="362						">اودي</option>

                <option value="373						">رينو</option>

                <option value="379						">بيوك</option>

                <option value="380						">ساب</option>

                <option value="381						">سيات</option>

                <option value="382						">MG</option>

                <option value="383						">بروتون</option>

                <option value="387						">سانج يونج</option>

                <option value="391						">تشيري</option>

                <option value="398						">جيلي</option>

                <option value="402						">ZXAUTO</option>

                <option value="405						">دبابات</option>

                <option value="414						">قطع غيار وملحقات</option>

                <option value="421						">شاحنات ومعدات ثقيلة</option>

            </select>

            <script>
                function showUser(str) {
                    if (str == "") {
                        document.getElementById("txtHint").innerHTML = "";
                        return;
                    }
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else { // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET", "section_s.php?type=&q=" + str, true);
                    xmlhttp.send();
                }
            </script>


            <div id="txtHint">
                <select name="subcity" id="model" class="form-control ">
                    <option value="">أختر نوع السيارة</option>
                </select>
            </div>

            <select name="model" id="year" class="form-control ">
                <option value="">كل الموديلات</option>

                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
            </select>

            <select name="startmodel" class="form-control moreelementsinmain" id="startmodel" style="display: none;">
                <option value="">من موديل</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
            </select>


            <select name="endmodel" class="form-control moreelementsinmain" id="endmodel" style="display: none;">
                <option value="">إلى موديل</option>
            </select>

            <select name="cities" class="form-control moreelementsinmain" id="cities" style="display: none;">
                <option value="">كل المدن</option>


                <option value="2">الرياض</option>

                <option value="3">جده</option>

                <option value="4">مكه</option>

                <option value="5">الشرقيه</option>

                <option value="6">حائل</option>

                <option value="7">القصيم</option>

                <option value="8">البحرين</option>

                <option value="9">الإمارات</option>

                <option value="10">الكويت</option>

                <option value="11">عرعر</option>

                <option value="12">الجوف</option>

                <option value="13">نجران</option>

                <option value="14">ينبع</option>

                <option value="15">حفر الباطن</option>

                <option value="16">جيزان</option>

                <option value="17">الباحة</option>

                <option value="18">تبوك</option>

                <option value="19">الطايف</option>

                <option value="20">أبها</option>

                <option value="21">المدينة</option>


            </select>

            <button type="submit" class="btn  btn-success form-control  "><i class="fa fa-search"></i></button>


            <div class="pull-left"><p class="showmoreoptions moreoptions">خيارات أكثر</p></div>


        </form>


        <br>

        <hr>

        <form action="search.php" method="get" class="visible-xs">


            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8"><input type="search" class="form-control "
                                                                        placeholder="ابحث عن سلعه ..." name="key"></div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <button type="submit" class="btn btn-success  "><i class="fa fa-search"></i></button>
                </div>
            </div>

        </form>
        <br class="visible-xs">


        <form action="search.php" method="get" novalidate="">


            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8"><input type="text" class="form-control "
                                                                        placeholder="ادخل رقم الاعلان" name="key"
                                                                        pattern="[0-9]*"></div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <button type="submit" class="btn btn-primary ">انتقال</button>
                </div>
            </div>

        </form>


        <hr>


        <div class="bs-example bs-example-tabs">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a data-toggle="tab" href="http://www.mzadalny.com/#home">سيارات</a></li>
                <li class=""><a data-toggle="tab" href="http://www.mzadalny.com/#profile">سيارات بالصور</a></li>

            </ul>
            <div class="tab-content" id="myTabContent">
                <div id="home" class="tab-pane fade active in">


                    <!-- start img cats-->


                    <a class="gallerypic" href="http://www.mzadalny.com/tags/1/تويوتا">
                        <img class="car_cont sprite-toyota" title="سيارات تويوتا"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="سيارات تويوتا">
                    </a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/24/نيسان">
                        <img class="car_cont sprite-nissan" title="نسيان"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="نسيان"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/79/فورد">
                        <img class="car_cont sprite-ford" title="سيارات فورد"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="سيارات فورد"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/46/لكزس">
                        <img class="car_cont sprite-lexus" title="لكزس"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="لكزس"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/106/شيفروليه">
                        <img class="car_cont sprite-chevrolet" title="سيارات شفروليه للبيع"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif"
                             alt="سيارات شفروليه للبيع"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/55/مرسيدس">
                        <img class="car_cont sprite-benz" title="سيارات مرسيدس"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="سيارات مرسيدس"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/137/جي ام سي">
                        <img class="car_cont sprite-GMC" title="جي ام سي"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="جي ام سي"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/149/بي ام دبليو">
                        <img class="car_cont sprite-bmw" title="بي ام دبليو"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="بي ام دبليو"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/307/دودج">
                        <img class="car_cont sprite-dodge" title="سيارات دودج"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="سيارات دوج"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/192/همر">
                        <img class="car_cont sprite-mini" title="سيارات همر"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="سيارات همر"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/272/كاديلاك">
                        <img class="car_cont sprite-cadillac" title="سيارات كاديلاك"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="سيارات كاديلاك"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/362/اودي">
                        <img class="car_cont sprite-audi" title="اودي"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="اودي"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/183/هوندا">
                        <img class="car_cont sprite-honda" title="هوندا"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="هوندا"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/202/لاند روفر">
                        <img class="car_cont sprite-landrover" title="لاندروفر"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="لاندروفر"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/202/فولكس واجن">
                        <img class="car_cont sprite-volkswagen" title="فولكس واجن"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="فولكس واجن"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/209/مازدا">
                        <img class="car_cont sprite-mazda" title="مازدا"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="مازدا"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/230/ميتسوبيشي">
                        <img class="car_cont sprite-mitsubishi" title="ميتسوبيشي"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="ميتسوبيشي"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/164/هونداي">
                        <img class="car_cont sprite-hyundai" title="هونداي"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="هونداي"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/159/جيب">
                        <img class="car_cont sprite-jeep" title="جيب"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="جيب"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/196/انفنيتي">
                        <img class="car_cont sprite-infiniti" title="انفنيتي"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="انفنيتي"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/345/سوزوكي">
                        <img class="car_cont sprite-suzuki" title="سوزوكي"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="سوزوكي"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/248/كيا">
                        <img class="car_cont sprite-kia" title="كيا"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="كيا"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/281/كرايزلر">
                        <img class="car_cont sprite-chrysler" title="كرايزلر"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="كرايزلر"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/70/بورش">
                        <img class="car_cont sprite-porsche" title="بورش"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="بورش"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/414/قطع غيار وملحقات">
                        <img class="car_cont sprite-parts" title="قطع غيار وملحقات"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif"
                             alt="قطع غيار وملحقات"></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/tags/421/شاحنات ومعدات ثقيلة">
                        <img class="car_cont sprite-trucks" title="شاحنات ومعدات ثقيلة"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif"
                             alt="شاحنات ومعدات ثقيلة"></a>

                    <a class="gallerypic" href="http://www.mzadalny.com/tags/405/دبابات">
                        <img class="car_cont sprite-bikes" title="دبابات"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="دبابات"></a>

                    <a class="gallerypic" href="http://www.mzadalny.com/search.php?key=سيارات+تراثية&amp;city=">
                        <img class="car_cont sprite-classic" title="سيارات تراثية"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="سيارات تراثية"></a>

                    <a class="gallerypic" href="http://www.mzadalny.com/search.php?key=سيارات+مصدومه&amp;city=">
                        <img class="car_cont sprite-damaged" title="سيارات مصدومه"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="سيارات مصدومه"></a>

                    <a class="gallerypic" href="http://www.mzadalny.com/search.php?key=سيارات+للتنازل&amp;city=">
                        <img class="car_cont sprite-tanazul" title="سيارات للتنازل"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="سيارات للتنازل"></a>

                    <!-- end-->


                </div>
                <div id="profile" class="tab-pane fade ">


                    <!-- start img cats-->


                    <a class="gallerypic" href="http://www.mzadalny.com/pic/1/تويوتا">
                        <img class="car_cont sprite-toyota" title="سيارات تويوتا"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="سيارات تويوتا">
                        <span class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/24/نيسان">
                        <img class="car_cont sprite-nissan" title="نسيان"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="نسيان"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/79/فورد">
                        <img class="car_cont sprite-ford" title="سيارات فورد"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="سيارات فورد"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/46/لكزس">
                        <img class="car_cont sprite-lexus" title="لكزس"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="لكزس"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/106/شيفروليه">
                        <img class="car_cont sprite-chevrolet" title="سيارات شفروليه للبيع"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif"
                             alt="سيارات شفروليه للبيع"><span class="pic-icon"><i
                                class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/55/مرسيدس">
                        <img class="car_cont sprite-benz" title="سيارات مرسيدس"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="سيارات مرسيدس"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/137/جي ام سي">
                        <img class="car_cont sprite-GMC" title="جي ام سي"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="جي ام سي"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/149/بي ام دبليو">
                        <img class="car_cont sprite-bmw" title="بي ام دبليو"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="بي ام دبليو"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/307/دودج">
                        <img class="car_cont sprite-dodge" title="سيارات دودج"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="سيارات دوج"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/192/همر">
                        <img class="car_cont sprite-mini" title="سيارات همر"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="سيارات همر"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/272/كاديلاك">
                        <img class="car_cont sprite-cadillac" title="سيارات كاديلاك"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif"
                             alt="سيارات كاديلاك"><span class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/362/اودي">
                        <img class="car_cont sprite-audi" title="اودي"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="اودي"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/183/هوندا">
                        <img class="car_cont sprite-honda" title="هوندا"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="هوندا"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/202/لاند روفر">
                        <img class="car_cont sprite-landrover" title="لاندروفر"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="لاندروفر"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/202/فولكس واجن">
                        <img class="car_cont sprite-volkswagen" title="فولكس واجن"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="فولكس واجن"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/209/مازدا">
                        <img class="car_cont sprite-mazda" title="مازدا"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="مازدا"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/230/ميتسوبيشي">
                        <img class="car_cont sprite-mitsubishi" title="ميتسوبيشي"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="ميتسوبيشي"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/164/هونداي">
                        <img class="car_cont sprite-hyundai" title="هونداي"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="هونداي"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/159/جيب">
                        <img class="car_cont sprite-jeep" title="جيب"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="جيب"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/196/انفنيتي">
                        <img class="car_cont sprite-infiniti" title="انفنيتي"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="انفنيتي"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/345/سوزوكي">
                        <img class="car_cont sprite-suzuki" title="سوزوكي"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="سوزوكي"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/248/كيا">
                        <img class="car_cont sprite-kia" title="كيا"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="كيا"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/281/كرايزلر">
                        <img class="car_cont sprite-chrysler" title="كرايزلر"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="كرايزلر"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/70/بورش">
                        <img class="car_cont sprite-porsche" title="بورش"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="بورش"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/414/قطع غيار وملحقات">
                        <img class="car_cont sprite-parts" title="قطع غيار وملحقات"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif"
                             alt="قطع غيار وملحقات"><span class="pic-icon"><i
                                class="fa fa-camera-retro  "></i></span></a>
                    <a class="gallerypic" href="http://www.mzadalny.com/pic/421/شاحنات ومعدات ثقيلة">
                        <img class="car_cont sprite-trucks" title="شاحنات ومعدات ثقيلة"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif"
                             alt="شاحنات ومعدات ثقيلة"><span class="pic-icon"><i
                                class="fa fa-camera-retro  "></i></span></a>

                    <a class="gallerypic" href="http://www.mzadalny.com/pic/405/دبابات">
                        <img class="car_cont sprite-bikes" title="دبابات"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="دبابات"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>

                    <a class="gallerypic"
                       href="http://www.mzadalny.com/search.php?key=سيارات+تراثية&amp;city=&amp;image=yes">
                        <img class="car_cont sprite-classic" title="سيارات تراثية"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="سيارات تراثية"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>

                    <a class="gallerypic"
                       href="http://www.mzadalny.com/search.php?key=سيارات+مصدومه&amp;city=&amp;image=yes">
                        <img class="car_cont sprite-damaged" title="سيارات مصدومه"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif" alt="سيارات مصدومه"><span
                            class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>

                    <a class="gallerypic"
                       href="http://www.mzadalny.com/search.php?key=سيارات+للتنازل&amp;city=&amp;image=yes">
                        <img class="car_cont sprite-tanazul" title="سيارات للتنازل"
                             src="http://www.mzadalny.com/templates/default/images2/clear.gif"
                             alt="سيارات للتنازل"><span class="pic-icon"><i class="fa fa-camera-retro  "></i></span></a>

                    <!-- end-->


                </div>

            </div>
        </div>

        <hr>


        <ul class="nav nav-tabs">
            <li class="active"><a href="http://www.mzadalny.com/tags/">أجهزة</a></li>

        </ul>
        <br>
        <div>


            <div class="glyph">

                <a href="http://www.mzadalny.com/tags/451/ابل Apple"> <i class="fa fa-apple fa-3x"></i> </a>


            </div>

            <div class="glyph">

                <a href="http://www.mzadalny.com/tags/457/سامسونج Samsung" class="tag-cat"><i
                        class="icon-Samsung fa-3x"></i></a>
            </div>

            <div class="glyph">
                <a href="http://www.mzadalny.com/tags/479/بلاك بيري BlackBerry" class="tag-cat"><i
                        class="icon-BlackBerry fa-3x"></i></a>
            </div>

            <div class="glyph">
                <a href="http://www.mzadalny.com/tags/472/مايكروسوفت Microsoft" class="tag-cat"><i
                        class="icon-Microsoft fa-3x"></i></a>
            </div>

            <div class="glyph">

                <a href="http://www.mzadalny.com/tags/465/اوليمبوس Olympus" class="tag-cat"><i
                        class="icon-Olympus fa-3x"></i></a>
            </div>
            <div class="glyph">
                <a href="http://www.mzadalny.com/tags/471/فوجي فيلم fujifilm" class="tag-cat"><i
                        class="icon-Fujifilm fa-3x"></i></a>
            </div>
            <div class="glyph">
                <a href="http://www.mzadalny.com/tags/470/باناسونيك Panasonic" class="tag-cat"><i
                        class="icon-Panasonic fa-3x"></i></a>
            </div>
            <div class="glyph">
                <a href="http://www.mzadalny.com/tags/468/توشيبا Toshiba" class="tag-cat"><i
                        class="icon-Toshiba fa-3x"></i></a>
            </div>
            <div class="glyph">
                <a href="http://www.mzadalny.com/tags/473/اسوس Asus" class="tag-cat"><i class="icon-Asus fa-3x"></i></a>
            </div>
            <div class="glyph">
                <a href="http://www.mzadalny.com/tags/456/نوكيا Nokia" class="tag-cat"><i class="icon-Nokia fa-3x"></i></a>
            </div>

            <div class="glyph">

                <a href="http://www.mzadalny.com/tags/464/كانون Canon" class="tag-cat"><i class="icon-Canon fa-3x"></i></a>
            </div>
            <div class="glyph">

                <a href="http://www.mzadalny.com/tags/466/سوني Sony" class="tag-cat"><i class="icon-Sony fa-3x"></i></a>
            </div>
            <div class="glyph">

                <a href="http://www.mzadalny.com/tags/469/ال جي LG" class="tag-cat"><i class="icon-LG fa-3x"></i></a>
            </div>
            <div class="glyph">
                <a href="http://www.mzadalny.com/tags/478/هيتاشي Hitachi" class="tag-cat"><i
                        class="icon-Hitachi fa-3x"></i></a>
            </div>
            <div class="glyph">
                <a href="http://www.mzadalny.com/tags/481/اتش تي سي htc" class="tag-cat"><i class="icon-HTC fa-3x"></i></a>
            </div>


            <br> <br> <br>
        </div>

        <div class="clear"></div>
        <hr>


        <ul class="nav nav-tabs">
            <li class="active"><a href="http://www.mzadalny.com/#">أقسام أخرى</a></li>

        </ul>
        <br>
        <div>
            <div class="glyph">

                <a href="http://www.mzadalny.com/tags/486/أبل"><i class="icon-camel fa-3x"></i> </a>
            </div>

            <div class="glyph">
                <a href="http://www.mzadalny.com/tags/485/غنم"><i class="icon-sheep2 fa-3x"></i> </a>
            </div>

            <div class="glyph">
                <a href="http://www.mzadalny.com/tags/489/دجاج"><i class="icon-chicken fa-3x"></i> </a>
            </div>

            <div class="glyph">
                <a href="http://www.mzadalny.com/tags/491/قطط"><i class="icon-cat fa-3x"></i> </a>
            </div>

            <div style="clear:both;"></div>


            <a title="مواشي وحيوانات وطيور" href="http://www.mzadalny.com/tags/484/مواشي وحيوانات وطيور" class="tag">مواشي
                وحيوانات وطيور</a><br>


            <a title="خدمات" href="http://www.mzadalny.com/tags/493/خدمات" class="tag">خدمات</a><br>


            <a title="اثاث" href="http://www.mzadalny.com/tags/501/اثاث" class="tag">اثاث</a><br>


            <a title="مستلزمات شخصية" href="http://www.mzadalny.com/tags/502/مستلزمات شخصية" class="tag">مستلزمات
                شخصية</a><br>


            <a title="قسم غير مصنف" href="http://www.mzadalny.com/tags/503/قسم غير مصنف" class="tag">قسم غير
                مصنف</a><br>


        </div>


        <div class="clear"></div>
        <hr>


        <ul class="nav nav-tabs">
            <li class="active"><a href="http://www.mzadalny.com/#">عقارات</a></li>

        </ul>
        <br>
        <div>


            <a title="اراضي للبيع" href="http://www.mzadalny.com/tags/436/اراضي للبيع" class="tag">اراضي للبيع</a><br>


            <a title="اراضي تجارية للبيع" href="http://www.mzadalny.com/tags/437/اراضي تجارية للبيع" class="tag">اراضي
                تجارية للبيع</a><br>


            <a title="شقق للايجار" href="http://www.mzadalny.com/tags/438/شقق للايجار" class="tag">شقق للايجار</a><br>


            <a title="شقق للبيع" href="http://www.mzadalny.com/tags/439/شقق للبيع" class="tag">شقق للبيع</a><br>


            <a title="فلل للبيع" href="http://www.mzadalny.com/tags/440/فلل للبيع" class="tag">فلل للبيع</a><br>


            <a title="فلل للايجار" href="http://www.mzadalny.com/tags/441/فلل للايجار" class="tag">فلل للايجار</a><br>


            <a title="عماره للايجار" href="http://www.mzadalny.com/tags/442/عماره للايجار" class="tag">عماره للايجار</a><br>


            <a title="محلات للتقبيل" href="http://www.mzadalny.com/tags/443/محلات للتقبيل" class="tag">محلات للتقبيل</a><br>


            <a title="محلات للايجار" href="http://www.mzadalny.com/tags/444/محلات للايجار" class="tag">محلات للايجار</a><br>


            <a title="مزارع للبيع" href="http://www.mzadalny.com/tags/445/مزارع للبيع" class="tag">مزارع للبيع</a><br>


            <a title="استراحات للبيع" href="http://www.mzadalny.com/tags/446/استراحات للبيع" class="tag">استراحات
                للبيع</a><br>


            <a title="استراحات للايجار" href="http://www.mzadalny.com/tags/447/استراحات للايجار" class="tag">استراحات
                للايجار</a><br>


            <a title="بيوت للبيع" href="http://www.mzadalny.com/tags/448/بيوت للبيع" class="tag">بيوت للبيع</a><br>


            <a title="بيوت للايجار" href="http://www.mzadalny.com/tags/449/بيوت للايجار" class="tag">بيوت
                للايجار</a><br>


            <a title="ادوار للايجار" href="http://www.mzadalny.com/tags/450/ادوار للايجار" class="tag">ادوار للايجار</a><br>


        </div>
        <div class="clear"></div>


        <hr>


        <!--<h3><a href="http://www.mzadalny.com/">منتدى السيارات </a></h3>-->


    </div>
</div>
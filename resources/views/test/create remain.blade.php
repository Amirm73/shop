

@extends('layouts.master')

@section('content')
    <div class="">

        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>طرح فرم
                            <small>عناصر فرم های مختلف</small>
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">تنظیمات 1</a>
                                    </li>
                                    <li><a href="#">تنظیمات 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form class="form-horizontal form-label-left input_mask">

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2"
                                       placeholder="نام">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control" id="inputSuccess3"
                                       placeholder="نام خانوادگی">
                                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess4"
                                       placeholder="ایمیل">
                                <span class="fa fa-envelope form-control-feedback left"
                                      aria-hidden="true"></span>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control" id="inputSuccess5" placeholder="تلفن">
                                <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">ورودی پیش فرض</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" placeholder="ورودی پیش فرض">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">ورودی غیر فعال </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" disabled="disabled"
                                           placeholder="ورودی غیر فعال">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">ورودی فقط
                                    خواندنی</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" readonly="readonly"
                                           placeholder="ورودی فقط خواندنی">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">تاریخ تولد <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="date-picker form-control col-md-7 col-xs-12"
                                           required="required" type="text">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">انصراف</button>
                                    <button type="submit" class="btn btn-success">ارسال</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="x_panel">
                    <div class="x_title">
                        <h2>امتیاز ستاره ای</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">تنظیمات 1</a>
                                    </li>
                                    <li><a href="#">تنظیمات 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <h4>امتیاز ستاره ای
                            <small> بر روی یک ستاره نگاه دارید و کلیک نمایید</small>
                        </h4>
                        <div>
                            <div class="starrr stars"></div>
                            شما یک امتیاز از <span class="stars-count">0</span> ستاره(ها)
                        </div>

                        <p>همچنین شما می توانید یک امتیاز پیش فرض با اضافه کردن ویژگی data-rating بدهید</p>
                        <div class="starrr stars-existing" data-rating='4'></div>
                        شما یک امتیاز از <span class="stars-count-existing">4</span> ستاره(ها)
                    </div>
                </div>

                <div class="x_panel">
                    <div class="x_title">
                        <h2>فرم ثبت نام
                            <small>برای اعتبار سنجی کلیک کنید</small>
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">تنظیمات 1</a>
                                    </li>
                                    <li><a href="#">تنظیمات 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <!-- start form for validation -->
                        <form id="demo-form" data-parsley-validate>
                            <label for="fullname">نام کامل <span class="required">*</span> :</label>
                            <input type="text" id="fullname" class="form-control" name="fullname" required/>

                            <label for="email">ایمیل <span class="required">*</span> :</label>
                            <input type="email" id="email" class="form-control" name="email"
                                   data-parsley-trigger="change" required/>

                            <label>جنسیت <span class="required">*</span>:</label>
                            <p>
                                مذکر:
                                <input type="radio" class="flat" name="gender" id="genderM" value="M" checked=""
                                       required/> مونث:
                                <input type="radio" class="flat" name="gender" id="genderF" value="F"/>
                            </p>

                            <label>سرگرمی (2 حداقل):</label>
                            <p style="padding: 5px;">
                                <input type="checkbox" name="hobbies[]" id="hobby1" value="ski"
                                       data-parsley-mincheck="2" required class="flat"/> اسکی
                                <br/>

                                <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat"/>
                                دویدن
                                <br/>

                                <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat"/>
                                خوردن
                                <br/>

                                <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat"/>
                                خوابیدن
                                <br/>
                            <p>

                                <label for="heard">شنیده ایم با <span class="required">*</span>:</label>
                                <select id="heard" class="form-control" required>
                                    <option value="">انتخاب..</option>
                                    <option value="press">اخبار</option>
                                    <option value="net">اینترنت</option>
                                    <option value="mouth">دهان به دهان</option>
                                </select>

                                <label for="message">پیام (20 کاراکتر حداقل، 100 حداکثر):</label>
                                <textarea id="message" required="required" class="form-control" name="message"
                                          data-parsley-trigger="keyup" data-parsley-minlength="20"
                                          data-parsley-maxlength="100"
                                          data-parsley-minlength-message="بیا دیگه! شما نیاز به وارد کردن حداقل 20 کاراکتر از نظر طول دارید..."
                                          data-parsley-validation-threshold="10"></textarea>

                                <br/>
                                <span class="btn btn-primary">اعتبار سنجی فرم</span>

                        </form>
                        <!-- end form for validations -->

                    </div>
                </div>


            </div>

            <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>عناصر فرم اولیه
                            <small>عناصر فرم های مختلف</small>
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">تنظیمات 1</a>
                                    </li>
                                    <li><a href="#">تنظیمات 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">ورودی پیش فرض</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" placeholder="ورودی پیش فرض">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">ورودی غیر فعال </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" disabled="disabled"
                                           placeholder="ورودی غیر فعال">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">ورودی فقط
                                    خواندنی</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" readonly="readonly"
                                           placeholder="ورودی فقط خواندنی">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">تاریخ تولد <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea class="form-control" rows="3" placeholder='تاریخ تولد'></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">رمز ورود</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="password" class="form-control" value="passwordonetwo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">تکمیل خودکار</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" name="country" id="autocomplete-custom-append"
                                           class="form-control col-md-10"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">انتخاب</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control">
                                        <option>انتخاب گزینه</option>
                                        <option>گزینه اول</option>
                                        <option>گزینه دوم</option>
                                        <option>گزینه سوم</option>
                                        <option>گزینه چهارم</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" dir="rtl">انتخاب شخصی سازی
                                    شده</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="select2_single form-control" tabindex="-1">
                                        <option></option>
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">انتخاب گروه بندی
                                    شده</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="select2_group form-control">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">انتخاب چندگانه</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="select2_multiple form-control" multiple="multiple">
                                        <option>انتخاب گزینه</option>
                                        <option>گزینه اول</option>
                                        <option>گزینه دوم</option>
                                        <option>گزینه سوم</option>
                                        <option>گزینه چهارم</option>
                                        <option>گزینه پنجم</option>
                                        <option>گزینه ششم</option>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">ورودی برچسب</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input id="tags_1" type="text" class="tags form-control"
                                           value="اجتماعی, تبلیغات, فروش"/>
                                    <div id="suggestions-container"
                                         style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-sm-3 col-xs-12 control-label">چک باکس و رادیو
                                    <br>
                                    <small class="text-navy">پیش فرض بوت استرپ</small>
                                </label>

                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">گزینه اول. انتخاب بیشتر از یک گزینه
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value=""> گزینه دوم. انتخاب بیشتر از یک گزینه
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" checked="" value="option1" id="optionsRadios1"
                                                   name="optionsRadios"> گزینه اول. انتخاب تنها یک گزینه
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="option2" id="optionsRadios2"
                                                   name="optionsRadios"> گزینه دوم. انتخاب تنها یک گزینه
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-sm-3 col-xs-12 control-label">چک باکس و رادیو
                                    <br>
                                    <small class="text-navy">پیش فرض بوت استرپ</small>
                                </label>

                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="flat" checked="checked"> انتخاب شده
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="flat"> انتخاب نشده
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="flat" disabled="disabled"> غیر فعال
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="flat" disabled="disabled"
                                                   checked="checked"> غیر فعال و انتخاب شده
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" class="flat" checked name="iCheck"> انتخاب شده
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" class="flat" name="iCheck"> انتخاب نشده
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" class="flat" name="iCheck" disabled="disabled">
                                            غیر فعال
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" class="flat" name="iCheck3" disabled="disabled"
                                                   checked> غیر فعال و انتخاب شده
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Switch</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="">
                                        <label>
                                            <input type="checkbox" class="js-switch" checked/> انتخاب شده
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            <input type="checkbox" class="js-switch"/> انتخاب نشده
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            <input type="checkbox" class="js-switch" disabled="disabled"/> غیر
                                            فعال
                                        </label>
                                    </div>
                                    <div class="">
                                        <label>
                                            <input type="checkbox" class="js-switch" disabled="disabled"
                                                   checked="checked"/> غیر فعال انتخاب شده
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">انصراف</button>
                                    <button type="submit" class="btn btn-success">ارسال</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>



        </div>

    </div>
@endsection
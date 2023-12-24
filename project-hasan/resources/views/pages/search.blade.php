<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>search</title>
</head>
<body dir="rtl">
<div class=" mx-auto -mt-16 border-b-2 fixed w-full pt-10 text-center bg-white ">
    
    <nav class="border-gray-200 mr-[35rem] mb-4">
    <div class="container mx-auto flex flex-wrap items-center justify-between">
       
        <div class="hidden md:block w-full md:w-auto" id="mobile-menu">
        <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
            <li>
            <a href="/search" class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:text-blue-700 md:p-0 rounded focus:outline-none" aria-current="page">البحث </a>
            </li>
            <li class=" mr-10">
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-gray-700 mr-10 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">الحساب <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y  divide-gray-100 rounded shadow my-4 w-44">
                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="/account" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">اعدادات الحساب</a>
                    </li>
                    <li>
                        <a href="/passwordpage" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">كلمة المرور</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">احصائيات</a>
                    </li>
                    </ul>
                    <div class="py-1">
                    <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">تسجيل الخروج</a>
                    </div>
                </div>
                
            </li>
         
            <li>
            <a href="#" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">اضافة طلب</a>
            </li>
            <li>
            <a href="#" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">طلباتي</a>
            </li>
            
        </ul>
        </div>
    </div>
    </nav>

</div>

<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    
      <div class="  rounded-lg border-4 border-sky-100 bg-white mt-14 p-10 w-6/12 mx-auto ">


<h1 class=" text-3xl mb-6">  تصفح و ابحث عن العديد من الخدمات و العاملين  </h1>






<div class=" inline-block">
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">المدينة</label>
<select id="countries" class="bg-gray-50 w-44 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block  p-2.5 d">
  <option selected>اختر مدينة</option>
  <option value="US">United States</option>
  <option value="CA">Canada</option>
  <option value="FR">France</option>
  <option value="DE">Germany</option>
</select>
</div>
<div class=" inline-block mr-10">
<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">    نوع الخدمة  </label>
<select id="countries" class="bg-gray-50 border w-44 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block  p-2.5  ">
  <option selected>اختر الخدمة</option>
  <option value="US">United States</option>
  <option value="CA">Canada</option>
  <option value="FR">France</option>
  <option value="DE">Germany</option>
</select>
</div>
<div class=" inline-block mr-4">
<label  class=" block mb-2 text-sm font-medium text-gray-900 "> خانة البحث</label>
<input type="search" class=" border-2 rounded-lg w-56 h-10 bg-gray-50  p-4 focus:outline-sky-700" name="search" >


</div>
<div class="  mt-10">
  <button
  class="middle none center mr-3 rounded-lg bg-sky-700 py-3 px-6 font-sans text-md font-bold uppercase text-white shadow-md shadow-sky-500/20 transition-all hover:shadow-lg hover:shadow-sky-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
  data-ripple-light="true"
>
<span class="material-symbols-outlined">
  search
  </span>
</button>
</div>
      </div>



<section class=" grid grid-cols-2">




<div class=" bg-white w-10/12 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10 grid grid-cols-3 grid-rows-3 col-span-1">
  
 <div class=" col-span-1  grid grid-cols-2 grid-rows-2 ">
 <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4  ">
person
</span>
<div class=" col-span-1 ">
  اسم الناشر
</div>
<div class="col-span-1">
أمجد شبانة
</div>
 </div>
<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
handyman
</span>
<div class="col-span-1">
   الخدمة
</div>
<div class="col-span-1">
   كهرباء
</div>
</div>

<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4">
location_on
</span>
<div class="col-span-1">
  الموقع
</div>
<div class="col-span-1">
   الخليل
</div>
</div>



<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
  تاريخ النشر
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>
<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
موعد العمل
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>

<button class=" col-span-1 bg-sky-700 text-white rounded p-1 text-sm h-10 w-20 mx-auto mt-6">تقديم عرض</button>
</div>


<div class=" bg-white w-10/12 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10 grid grid-cols-3 grid-rows-3 col-span-1">
 <div class=" col-span-1  grid grid-cols-2 grid-rows-2 ">
 <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4  ">
person
</span>
<div class=" col-span-1 ">
  اسم الناشر
</div>
<div class="col-span-1">
أمجد شبانة
</div>
 </div>
<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
handyman
</span>
<div class="col-span-1">
   الخدمة
</div>
<div class="col-span-1">
   كهرباء
</div>
</div>

<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4">
location_on
</span>
<div class="col-span-1">
  الموقع
</div>
<div class="col-span-1">
   الخليل
</div>
</div>



<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
  تاريخ النشر
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>
<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
موعد العمل
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>

<button class=" col-span-1 bg-sky-700 text-white rounded p-1 text-sm h-10 w-20 mx-auto mt-6">تقديم عرض</button>
</div>
<div class=" bg-white w-10/12 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10 grid grid-cols-3 grid-rows-3 col-span-1">
 <div class=" col-span-1  grid grid-cols-2 grid-rows-2 ">
 <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4  ">
person
</span>
<div class=" col-span-1 ">
  اسم الناشر
</div>
<div class="col-span-1">
أمجد شبانة
</div>
 </div>
<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
handyman
</span>
<div class="col-span-1">
   الخدمة
</div>
<div class="col-span-1">
   كهرباء
</div>
</div>

<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4">
location_on
</span>
<div class="col-span-1">
  الموقع
</div>
<div class="col-span-1">
   الخليل
</div>
</div>



<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
  تاريخ النشر
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>
<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
موعد العمل
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>

<button class=" col-span-1 bg-sky-700 text-white rounded p-1 text-sm h-10 w-20 mx-auto mt-6">تقديم عرض</button>
</div>
<div class=" bg-white w-10/12 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10 grid grid-cols-3 grid-rows-3 col-span-1">
 <div class=" col-span-1  grid grid-cols-2 grid-rows-2 ">
 <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4  ">
person
</span>
<div class=" col-span-1 ">
  اسم الناشر
</div>
<div class="col-span-1">
أمجد شبانة
</div>
 </div>
<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
handyman
</span>
<div class="col-span-1">
   الخدمة
</div>
<div class="col-span-1">
   كهرباء
</div>
</div>

<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4">
location_on
</span>
<div class="col-span-1">
  الموقع
</div>
<div class="col-span-1">
   الخليل
</div>
</div>



<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
  تاريخ النشر
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>
<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
موعد العمل
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>

<button class=" col-span-1 bg-sky-700 text-white rounded p-1 text-sm h-10 w-20 mx-auto mt-6">تقديم عرض</button>
</div>
<div class=" bg-white w-10/12 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10 grid grid-cols-3 grid-rows-3 col-span-1">
 <div class=" col-span-1  grid grid-cols-2 grid-rows-2 ">
 <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4  ">
person
</span>
<div class=" col-span-1 ">
  اسم الناشر
</div>
<div class="col-span-1">
أمجد شبانة
</div>
 </div>
<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
handyman
</span>
<div class="col-span-1">
   الخدمة
</div>
<div class="col-span-1">
   كهرباء
</div>
</div>

<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4">
location_on
</span>
<div class="col-span-1">
  الموقع
</div>
<div class="col-span-1">
   الخليل
</div>
</div>



<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
  تاريخ النشر
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>
<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
موعد العمل
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>

<button class=" col-span-1 bg-sky-700 text-white rounded p-1 text-sm h-10 w-20 mx-auto mt-6">تقديم عرض</button>
</div>
<div class=" bg-white w-10/12 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10 grid grid-cols-3 grid-rows-3 col-span-1">
 <div class=" col-span-1  grid grid-cols-2 grid-rows-2 ">
 <span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4  ">
person
</span>
<div class=" col-span-1 ">
  اسم الناشر
</div>
<div class="col-span-1">
أمجد شبانة
</div>
 </div>
<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
handyman
</span>
<div class="col-span-1">
   الخدمة
</div>
<div class="col-span-1">
   كهرباء
</div>
</div>

<div class=" col-span-1  grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4">
location_on
</span>
<div class="col-span-1">
  الموقع
</div>
<div class="col-span-1">
   الخليل
</div>
</div>



<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
  تاريخ النشر
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>
<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 ">
schedule
</span>
<div class=" col-span-1 ">
موعد العمل
</div>

<div class="col-span-1  ">
  27/1/2004
</div>
</div>

<button class=" col-span-1 bg-sky-700 text-white rounded p-1 text-sm h-10 w-20 mx-auto mt-6">تقديم عرض</button>
</div>

</section>










</body>
</html>
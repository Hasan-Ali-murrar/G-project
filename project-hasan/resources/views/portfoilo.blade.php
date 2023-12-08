<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body dir="rtl">
<nav class="sticky inset-0 z-10 block h-max w-full max-w-full rounded-none border border-white/80 bg-white bg-opacity-80 py-2 px-4 text-white shadow-md backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
    <div class="flex items-center text-gray-900">
      <a
        href="#"
        class="mr-4 block cursor-pointer py-1.5 font-sans text-base font-medium leading-relaxed text-inherit antialiased"
      >
        Material Tailwind
      </a>
      <ul class="ml-auto mr-auto hidden items-center gap-6 lg:flex">
        <li class="block p-1 font-sans text-lg font-bold leading-normal text-inherit antialiased hover:text-sky-700 duration-700">
          <a class="flex items-center" href="#">
            تواصل معنا
          </a>
        </li>
        <li class="block p-1 font-sans text-lg font-bold leading-normal text-inherit antialiased  hover:text-sky-700 duration-700">
          <a class="flex items-center" href="#">
            الرئيسية
          </a>
        </li>
        <li class="block p-1 font-sans text-lg font-bold leading-normal text-inherit antialiased  hover:text-sky-700 duration-700">
          <a class="flex items-center" href="#">
            من نحن
          </a>
        </li>
        <li class="block p-1 font-sans text-lg font-bold leading-normal text-inherit antialiased  hover:text-sky-700 duration-700">
          <a class="flex items-center" href="#">
            خدماتنا
          </a>
        </li>
      </ul>
      
      <div class="flex">
        <button
          class="middle none center mr-3 rounded-lg bg-sky-700 py-3 px-6 font-sans text-md font-bold uppercase text-white shadow-md shadow-sky-500/20 transition-all hover:shadow-lg hover:shadow-sky-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
          data-ripple-light="true"
        >
          إنشاء حساب
        </button>
        <a href="/login">
      <button
      class="middle none center mr-3 rounded-lg border border-sky-700 py-3 px-6 font-sans text-md font-bold uppercase text-sky-700 transition-all hover:opacity-75 focus:ring focus:ring-sky-400 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
      data-ripple-dark="true"
    >
      تسجيل الدخول
    </button>
  </a>
      <button
        class="middle none relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] rounded-lg text-center font-sans text-xs font-medium uppercase text-blue-gray-500 transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden"
        data-collapse-target="sticky-navar"
      >
        <span class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 transform">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            stroke="currentColor"
            strokeWidth="2"
          >
            <path
              strokeLinecap="round"
              strokeLinejoin="round"
              d="M4 6h16M4 12h16M4 18h16"
            ></path>
          </svg>
        </span>
      </button>
    </div>
</div>
   
  </nav>


  <div class=" bg-sky-600 h-44 m-0  ">



</div>

<div class=" bg-sky-200 rounded-full h-40 w-40 -mt-28 mr-16 text-center ">
<span class="material-symbols-outlined text-8xl mt-5 text-sky-100">
person
</span>
<h1 class=" text-white text-3xl -mt-24 mr-44 absolute">
  اسم العامل
</h1>
<h1 class=" text-white text-xl -mt-14 mr-44 absolute">
  التخصص
</h1>
</div>
  

<div class=" border-b-4 w-3/4 mx-auto mt-10 ">
<a href="/profile">
<div class=" text-2xl border-b-4  text-gray-400  -mb-1 w-6/12  -mr-2  p-2 text-center inline-block hover:border-sky-400 hover:text-sky-400 transition-all duration-1000">
  
التفاصيل
</div>
</a>
<div class="text-2xl border-b-4 border-sky-700  text-center  -mb-1 w-6/12 p-2 font-bold inline-block ">


الأعمال المنجزة


</div>

<div>

</div>
</div>

<div>

  
</div>








<div class="grid grid-cols-3 w-9/12 mx-auto text-center mt-12">
  <div class=" "> <span class="text-2xl block mb-5">الأعمال المنجزة</span> <span class="text-6xl text-sky-700"> 7 </span> </div>
  <div class=" border-x-4"><span class="text-2xl block mb-5 ">  العروض المقدم لها </span> <span class="text-6xl text-sky-700"> 10 </span></div>
  <div class="  "><span class="text-2xl block mb-5">  التقييم النهائي  </span> <span class="text-6xl text-sky-700"> 83 </span></div>
</div>





<div class=" mr-24"> 


<div class=" bg-white w-5/12 inline-grid mb-10 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10  grid-cols-3 grid-rows-3 col-span-1">
  
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


<div class="  mt-3 grid grid-cols-2 grid-rows-2 ">
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

<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 text-yellow-400">
star
</span>
<div class=" col-span-1 text-sky-500 ">
تقييم الزبون
</div>

<div class="col-span-1 text-sky-500 ">
  100
</div>
</div>



</div>

<div class=" bg-white w-5/12 inline-grid mb-10 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10  grid-cols-3 grid-rows-3 col-span-1">
  
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


<div class="  mt-3 grid grid-cols-2 grid-rows-2 ">
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

<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 text-yellow-400">
star
</span>
<div class=" col-span-1 text-sky-500 ">
تقييم الزبون
</div>

<div class="col-span-1 text-sky-500 ">
  100
</div>
</div>



</div>

<div class=" bg-white w-5/12 inline-grid mb-10 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10  grid-cols-3 grid-rows-3 col-span-1">
  
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


<div class="  mt-3 grid grid-cols-2 grid-rows-2 ">
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

<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 text-yellow-400">
star
</span>
<div class=" col-span-1 text-sky-500 ">
تقييم الزبون
</div>

<div class="col-span-1 text-sky-500 ">
  100
</div>
</div>



</div>

<div class=" bg-white w-5/12 inline-grid mb-10 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10  grid-cols-3 grid-rows-3 col-span-1">
  
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


<div class="  mt-3 grid grid-cols-2 grid-rows-2 ">
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

<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 text-yellow-400">
star
</span>
<div class=" col-span-1 text-sky-500 ">
تقييم الزبون
</div>

<div class="col-span-1 text-sky-500 ">
  100
</div>
</div>



</div>

<div class=" bg-white w-5/12 inline-grid mb-10 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10  grid-cols-3 grid-rows-3 col-span-1">
  
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


<div class="  mt-3 grid grid-cols-2 grid-rows-2 ">
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

<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 text-yellow-400">
star
</span>
<div class=" col-span-1 text-sky-500 ">
تقييم الزبون
</div>

<div class="col-span-1 text-sky-500 ">
  100
</div>
</div>



</div>

<div class=" bg-white  w-5/12 inline-grid mb-10 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10  grid-cols-3 grid-rows-3 col-span-1">
  
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


<div class="  mt-3 grid grid-cols-2 grid-rows-2 ">
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

<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 text-yellow-400">
star
</span>
<div class=" col-span-1 text-sky-500 ">
تقييم الزبون
</div>

<div class="col-span-1 text-sky-500 ">
  100
</div>
</div>



</div>

<div class=" bg-white w-5/12 inline-grid mb-10 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10  grid-cols-3 grid-rows-3 col-span-1">
  
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


<div class="  mt-3 grid grid-cols-2 grid-rows-2 ">
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

<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 text-yellow-400">
star
</span>
<div class=" col-span-1 text-sky-500 ">
تقييم الزبون
</div>

<div class="col-span-1 text-sky-500 ">
  100
</div>
</div>



</div>
<div class=" bg-white w-5/12 inline-grid mb-10 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10  grid-cols-3 grid-rows-3 col-span-1">
  
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


<div class="  mt-3 grid grid-cols-2 grid-rows-2 ">
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

<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 text-yellow-400">
star
</span>
<div class=" col-span-1 text-sky-500 ">
تقييم الزبون
</div>

<div class="col-span-1 text-sky-500 ">
  100
</div>
</div>



</div>

<div class=" bg-white w-5/12 inline-grid mb-10 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10  grid-cols-3 grid-rows-3 col-span-1">
  
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


<div class="  mt-3 grid grid-cols-2 grid-rows-2 ">
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

<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 text-yellow-400">
star
</span>
<div class=" col-span-1 text-sky-500 ">
تقييم الزبون
</div>

<div class="col-span-1 text-sky-500 ">
  100
</div>
</div>



</div>

<div class=" bg-white w-5/12 inline-grid mb-10 shadow-2xl rounded-lg border-2 text-slate-500 p-4 pt-10 mr-10 mt-10  grid-cols-3 grid-rows-3 col-span-1">
  
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


<div class="  mt-3 grid grid-cols-2 grid-rows-2 ">
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

<div class=" col-span-1 mt-3 grid grid-cols-2 grid-rows-2">
<span class="material-symbols-outlined row-span-2 col-span-1 text-4xl ml-4 text-yellow-400">
star
</span>
<div class=" col-span-1 text-sky-500 ">
تقييم الزبون
</div>

<div class="col-span-1 text-sky-500 ">
  100
</div>
</div>



</div>

</div>



</body>
</html>
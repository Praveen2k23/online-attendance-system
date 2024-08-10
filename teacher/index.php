<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Attendance Management System</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles.css">

</head>

<body>
<div class="app-container">
        <div class="app-header">
        <div class="app-header-left">
        <span class="app-icon"></span>
        <p class="app-name">Teacher's Dashboard</p>
        <div class="search-wrapper">
        <input class="search-input" type="text" placeholder="Search">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search" viewBox="0 0 24 24">
        <defs></defs>
        <circle cx="11" cy="11" r="8"></circle>
        <path d="M21 21l-4.35-4.35"></path>
        </svg>
        </div>
        </div>


        <!-- dark mooode -->
        <div class="app-header-right">
        <button class="mode-switch" title="Switch Theme">
        <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
        <defs></defs>
        <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
        </div>


        
        <button class="messages-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" /></svg>
        </button>
        </div>


<!--------------------------------------------------------------------------------------------------------------------------->

        
<div class="app-content">
        <div class="app-sidebar">
        <a href="index.php" class="app-sidebar-link active">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
        <polyline points="9 22 9 12 15 12 15 22" /></svg>
        </a>

<!--------------------------------------------------------------------------------------------------------------------------->

        
        <a href="attendance.php" class="app-sidebar-link">
        <svg width="64px" height="64px" viewBox="0 0 1024.00 1024.00" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" stroke="#000000" stroke-width="51.2"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M687.542857 965.485714H182.857143c-87.771429 0-160.914286-73.142857-160.914286-160.914285V256c0-87.771429 73.142857-160.914286 160.914286-160.914286h336.457143V146.285714H182.857143C124.342857 146.285714 73.142857 197.485714 73.142857 256v541.257143c0 58.514286 51.2 109.714286 109.714286 109.714286h504.685714c58.514286 0 109.714286-51.2 109.714286-109.714286V533.942857h58.514286v263.314286c-7.314286 95.085714-80.457143 168.228571-168.228572 168.228571z" fill="#100f0f"></path><path d="M877.714286 95.085714l109.714285 138.971429c7.314286 7.314286 0 14.628571-7.314285 21.942857L629.028571 526.628571c-7.314286 7.314286-160.914286-7.314286-160.914285-7.314285s29.257143-146.285714 36.571428-153.6l351.085715-270.628572c7.314286-7.314286 14.628571-7.314286 21.942857 0z" fill="#1a1919"></path><path d="M607.085714 555.885714c-21.942857 0-65.828571 0-138.971428-7.314285H438.857143V512c29.257143-160.914286 36.571429-160.914286 43.885714-168.228571L833.828571 73.142857c21.942857-14.628571 43.885714-14.628571 58.514286 7.314286L1002.057143 219.428571c14.628571 14.628571 7.314286 43.885714-7.314286 58.514286L643.657143 548.571429c-7.314286 7.314286-7.314286 7.314286-36.571429 7.314285z m-109.714285-58.514285c51.2 0 95.085714 7.314286 117.028571 7.314285L950.857143 241.371429l-87.771429-117.028572-336.457143 263.314286c-7.314286 14.628571-14.628571 58.514286-29.257142 109.714286z" fill="#100f0f"></path></g></svg>
        </a>

        <a href="students.php" class="app-sidebar-link">
       <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 496 496" xml:space="preserve" width="64px" height="64px" stroke="#000000" stroke-width="21.824"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M440.184,356.76L392,345.632v-20.12c11.696-10.496,19.928-24.72,22.808-40.824C435.592,268.096,448,242.664,448,216 v-30.312c0-12.44-8.888-22.84-20.648-25.192c-19.704-34.536-58.752-53.464-98.568-47.312 c-34.368,5.296-63.24,30.136-75.024,62.232c-3.328-7.56-10.12-13.264-18.408-14.92c-19.696-34.536-58.728-53.464-98.568-47.312 c-41.752,6.44-75.464,41.68-80.168,83.8c-3.032,27.08,5.544,53.88,23.384,74.2V272c0,21.256,9.312,40.328,24,53.512v20.12 L55.816,356.76C22.952,364.336,0,393.184,0,426.912V496h296h8h192v-69.088C496,393.184,473.048,364.336,440.184,356.76z M400,272 c0,30.872-25.128,56-56,56s-56-25.128-56-56v-37.328c10.456,2.44,28.616,5.328,56,5.328c27.384,0,45.544-2.888,56-5.328V272z M385.976,360.672l5.168,1.192l-11.536,40.376l-22.8-18.24L385.976,360.672z M344,373.76l-32-25.608V336.4 c9.656,4.816,20.496,7.6,32,7.6c11.504,0,22.344-2.776,32-7.6v11.752L344,373.76z M264.52,198.76 c3.912-35.072,31.96-64.408,66.696-69.768c34.496-5.328,68.192,11.832,83.968,42.648l2.24,4.36h4.888 c5.344,0,9.688,4.344,9.688,9.688V216c0,16.512-5.824,32.448-16.008,45.136l-0.04-49.08l-11.056,4.568 C404.72,216.704,386.552,224,344,224s-60.72-7.296-60.848-7.352L272,211.872v30.696C265.528,229.12,262.816,214,264.52,198.76z M80,242.568C73.528,229.12,70.816,214,72.52,198.76c3.912-35.072,31.96-64.408,66.696-69.768 c34.496-5.328,68.2,11.832,83.968,42.648l2.24,4.36h4.888c5.344,0,9.688,4.344,9.688,9.688V216c0,16.504-5.824,32.44-16,45.12 V216h-8c-7.336,0-14.152-3.648-18.216-9.752l-12.536-18.808l-22.144,22.144c-4.144,4.136-9.632,6.416-15.488,6.416H80V242.568z M96,272v-40h51.616c10.128,0,19.64-3.944,26.8-11.104l8.344-8.344l1.712,2.568c5.528,8.304,14,13.976,23.528,16.024V272 c0,30.872-25.128,56-56,56S96,302.872,96,272z M184,336.4V352v6.368V368c0,17.648-14.352,32-32,32s-32-14.352-32-32v-9.632V352 v-15.6c9.656,4.824,20.496,7.6,32,7.6C163.504,344,174.344,341.224,184,336.4z M288,480h-32v-32h-16v32H64v-32H48v32H16v-53.088 c0-26.232,17.848-48.672,43.408-54.56L104,362.056V368c0,26.472,21.528,48,48,48s48-21.528,48-48v-5.944l44.592,10.288 C270.152,378.24,288,400.68,288,426.912V480z M272.664,367.488l8.584-1.992l3.52,12.32 C281.16,373.944,277.088,370.504,272.664,367.488z M296,345.632l-47.992,11.08L200,345.632v-20.12 c11.696-10.496,19.928-24.72,22.808-40.824c14.856-11.856,25.376-28.216,30.176-46.344C257,250.352,263.48,261.48,272,271.184 V272c0,21.256,9.312,40.328,24,53.512V345.632z M302.032,360.68l29.16,23.32l-22.808,18.24l-11.528-40.36L302.032,360.68z M480,480h-32v-32h-16v32H304v-53.088c0-0.216-0.024-0.432-0.024-0.648L344,394.24l44.392,35.512l18.368-64.288l29.832,6.888 C462.152,378.24,480,400.68,480,426.912V480z"></path> <rect x="96" y="32" width="16" height="16"></rect> <path d="M357.656,2.344l-11.312,11.312L364.688,32h-66.304C289.176,12.696,269.68,0,248,0s-41.176,12.696-50.384,32H128v16 h275.312L357.656,2.344z M216.08,32c7.424-9.872,19.168-16,31.92-16s24.496,6.128,31.92,16H216.08z"></path> <rect x="384" y="64" width="16" height="16"></rect> <path d="M149.656,98.344L131.312,80h66.304c9.2,19.304,28.696,32,50.384,32s41.176-12.696,50.384-32H368V64H92.688l45.656,45.656 L149.656,98.344z M279.928,80c-7.432,9.872-19.176,16-31.928,16s-24.496-6.128-31.92-16H279.928z"></path> </g> </g> </g> </g></svg>
        </a>

        <a href="teachers.php" class="app-sidebar-link">
        <svg fill="#000000" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.2 -51.2 614.40 614.40" xml:space="preserve" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <circle cx="392.353" cy="42.318" r="42.124"></circle> </g> </g> <g> <g> <path d="M499.406,338.088c0-4.626-3.75-8.376-8.376-8.376h-3.545v-18.347c1.476-1.116,2.794-2.423,3.918-3.893 c2.634-3.446,4.206-7.746,4.183-12.421l-0.751-149.322c-0.131-26.391-21.709-47.859-48.098-47.859h-20.833 c-2.662,6.956-22.34,58.364-25.196,65.825l5.941-27.984c0.417-1.966,0.115-4.015-0.853-5.775l-8.158-14.837l7.252-13.19 c1.08-1.964-0.343-4.375-2.588-4.375h-19.905c-2.24,0-3.669,2.408-2.588,4.375l7.252,13.19l-8.188,14.893 c-0.95,1.727-1.259,3.733-0.875,5.667l5.194,28.037c-2.635-6.759-22.113-58.59-24.936-65.825h-20.637 c-26.39,0-47.966,21.469-48.099,47.859l-0.75,149.323c-0.057,11.226,8.998,20.371,20.223,20.427c0.034,0,0.07,0,0.105,0 c11.178,0,20.267-9.033,20.324-20.223l0.75-149.323c0-0.018,0-0.036,0-0.053c0.027-2.158,1.79-3.89,3.948-3.877 c2.158,0.013,3.9,1.767,3.9,3.926l0.01,341.681c0,13.47,10.92,24.391,24.391,24.391s24.391-10.92,24.391-24.391V292.654h10.531 v194.955c0,13.47,10.92,24.391,24.391,24.391s24.391-10.92,24.391-24.391v-41.545c-9.727-5.136-16.375-15.352-16.375-27.095 v-80.881c0-11.744,6.648-21.959,16.375-27.096c0-17.223-0.332-133.71-0.421-164.837c-0.007-2.306,1.828-4.195,4.133-4.255 c2.305-0.06,4.238,1.729,4.352,4.031c0,0.001,0,0.001,0,0.002l0.751,149.323c0.023,4.611,1.598,8.841,4.201,12.237 c1.315,1.715,2.883,3.224,4.67,4.445v17.773h-3.436c-4.626,0-8.376,3.75-8.376,8.376v80.881c0,4.626,3.75,8.376,8.376,8.376 h30.661c4.626,0,8.376-3.75,8.376-8.376v-80.881H499.406z"></path> </g> </g> <g> <g> <circle cx="147.601" cy="42.141" r="42.141"></circle> </g> </g> <g> <g> <path d="M228.266,326.652l-14.438-74.548l-33.6,21.448c-8.458,5.399-18.895,7.18-29.115,4.347l-28.103,8.151 c-1.903,0.552-3.868,0.832-5.839,0.832c-9.257,0-17.523-6.213-20.104-15.109l-11.701-40.339l-15.815,81.65 c7.688,5.569,12.702,14.612,12.702,24.81v2.214c3.401,0,7.183,0,11.275,0v147.493c0,13.475,10.924,24.4,24.4,24.4 c13.475,0,24.4-10.923,24.4-24.4V340.108c3.508,0,7.027,0,10.535,0v147.493c0,13.475,10.924,24.4,24.4,24.4s24.4-10.923,24.4-24.4 V340.108c5.883,0,11.137,0,15.516,0C224.267,340.108,229.619,333.638,228.266,326.652z"></path> </g> </g> <g> <g> <path d="M89.881,171.841c15.619-4.53,31.144-9.033,47.057-13.649c-1.828-4.688-4.328-11.098-23.582-60.478h-0.987 c-21.762,0-37.58,13.919-47.014,41.37c-14.619,42.544-47.82,133.38-48.153,134.292c-3.199,8.75,0.002,18.261,7.203,23.455 c0,17.067,0,14.407,0,32.686h-3.436c-4.626,0-8.376,3.75-8.376,8.377v80.881c0,4.626,3.75,8.376,8.376,8.376h30.659 c4.626,0,8.376-3.75,8.376-8.376v-80.881c0-4.627-3.75-8.377-8.376-8.377h-3.545c0-11.744,0-20.903,0-32.6 c3.238-2.301,5.844-5.565,7.311-9.577c0.204-0.557,12.634-34.566,25.658-70.777l-5.448-18.781 C72.388,186.695,78.793,175.057,89.881,171.841z"></path> </g> </g> <g> <g> <path d="M161.315,130.855l-8.158-14.837l7.252-13.19c1.08-1.964-0.343-4.375-2.588-4.375h-19.905c-2.24,0-3.669,2.409-2.588,4.375 l7.252,13.19l-8.188,14.893c-0.95,1.727-1.259,3.733-0.876,5.667l4.244,21.375c6.251-1.813,8.135-2.556,11.783-2.556 c2.904,0,5.709,0.613,8.273,1.727l4.35-20.492C162.587,134.666,162.283,132.616,161.315,130.855z"></path> </g> </g> <g> <g> <path d="M153.622,175.154c-0.633-2.184-2.949-3.573-5.268-2.898l-53.824,15.611c-2.252,0.653-3.552,3.017-2.899,5.267 l21.462,73.991c0.635,2.19,3.023,3.551,5.268,2.898l14.357-4.164c-0.855-1.056-1.67-2.158-2.417-3.331 c-10.744-16.83-5.809-39.185,11.021-49.928l19.544-12.475L153.622,175.154z"></path> </g> </g> <g> <g> <path d="M248.639,192.318c-4.153-11.54-7.283-20.289-10.049-28.103c-3.074-8.688-5.694-16.219-8.756-25.129 c-9.434-27.452-25.252-41.37-47.014-41.37h-0.985c-4.458,11.646-18.727,48.924-22.939,59.927 c5.095,2.566,9.097,7.159,10.751,12.865l5.877,20.261l23.896-15.253l0.026-0.017c1.652,4.682,3.416,9.643,5.44,15.299 l-55.051,35.142c-9.466,6.043-12.24,18.614-6.199,28.078c6.042,9.466,18.614,12.243,28.08,6.199l68.732-43.873 C248.455,211.231,251.856,201.256,248.639,192.318z"></path> </g> </g> </g></svg>
        </a>

        <a href="qr.php" class="app-sidebar-link">
        <svg fill="#000000" width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="0.696"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16.1666667,6 C16.0746192,6 16,6.07461921 16,6.16666667 L16,7.83333333 C16,7.92538079 16.0746192,8 16.1666667,8 L17.8333333,8 C17.9253808,8 18,7.92538079 18,7.83333333 L18,6.16666667 C18,6.07461921 17.9253808,6 17.8333333,6 L16.1666667,6 Z M16,18 L16,17.5 C16,17.2238576 16.2238576,17 16.5,17 C16.7761424,17 17,17.2238576 17,17.5 L17,18 L18,18 L18,17.5 C18,17.2238576 18.2238576,17 18.5,17 C18.7761424,17 19,17.2238576 19,17.5 L19,18.5 C19,18.7761424 18.7761424,19 18.5,19 L14.5,19 C14.2238576,19 14,18.7761424 14,18.5 L14,17.5 C14,17.2238576 14.2238576,17 14.5,17 C14.7761424,17 15,17.2238576 15,17.5 L15,18 L16,18 L16,18 Z M13,11 L13.5,11 C13.7761424,11 14,11.2238576 14,11.5 C14,11.7761424 13.7761424,12 13.5,12 L11.5,12 C11.2238576,12 11,11.7761424 11,11.5 C11,11.2238576 11.2238576,11 11.5,11 L12,11 L12,10 L10.5,10 C10.2238576,10 10,9.77614237 10,9.5 C10,9.22385763 10.2238576,9 10.5,9 L13.5,9 C13.7761424,9 14,9.22385763 14,9.5 C14,9.77614237 13.7761424,10 13.5,10 L13,10 L13,11 Z M18,12 L17.5,12 C17.2238576,12 17,11.7761424 17,11.5 C17,11.2238576 17.2238576,11 17.5,11 L18,11 L18,10.5 C18,10.2238576 18.2238576,10 18.5,10 C18.7761424,10 19,10.2238576 19,10.5 L19,12.5 C19,12.7761424 18.7761424,13 18.5,13 C18.2238576,13 18,12.7761424 18,12.5 L18,12 Z M13,14 L12.5,14 C12.2238576,14 12,13.7761424 12,13.5 C12,13.2238576 12.2238576,13 12.5,13 L13.5,13 C13.7761424,13 14,13.2238576 14,13.5 L14,15.5 C14,15.7761424 13.7761424,16 13.5,16 L10.5,16 C10.2238576,16 10,15.7761424 10,15.5 C10,15.2238576 10.2238576,15 10.5,15 L13,15 L13,14 L13,14 Z M16.1666667,5 L17.8333333,5 C18.4776655,5 19,5.52233446 19,6.16666667 L19,7.83333333 C19,8.47766554 18.4776655,9 17.8333333,9 L16.1666667,9 C15.5223345,9 15,8.47766554 15,7.83333333 L15,6.16666667 C15,5.52233446 15.5223345,5 16.1666667,5 Z M6.16666667,5 L7.83333333,5 C8.47766554,5 9,5.52233446 9,6.16666667 L9,7.83333333 C9,8.47766554 8.47766554,9 7.83333333,9 L6.16666667,9 C5.52233446,9 5,8.47766554 5,7.83333333 L5,6.16666667 C5,5.52233446 5.52233446,5 6.16666667,5 Z M6.16666667,6 C6.07461921,6 6,6.07461921 6,6.16666667 L6,7.83333333 C6,7.92538079 6.07461921,8 6.16666667,8 L7.83333333,8 C7.92538079,8 8,7.92538079 8,7.83333333 L8,6.16666667 C8,6.07461921 7.92538079,6 7.83333333,6 L6.16666667,6 Z M6.16666667,15 L7.83333333,15 C8.47766554,15 9,15.5223345 9,16.1666667 L9,17.8333333 C9,18.4776655 8.47766554,19 7.83333333,19 L6.16666667,19 C5.52233446,19 5,18.4776655 5,17.8333333 L5,16.1666667 C5,15.5223345 5.52233446,15 6.16666667,15 Z M6.16666667,16 C6.07461921,16 6,16.0746192 6,16.1666667 L6,17.8333333 C6,17.9253808 6.07461921,18 6.16666667,18 L7.83333333,18 C7.92538079,18 8,17.9253808 8,17.8333333 L8,16.1666667 C8,16.0746192 7.92538079,16 7.83333333,16 L6.16666667,16 Z M13,6 L10.5,6 C10.2238576,6 10,5.77614237 10,5.5 C10,5.22385763 10.2238576,5 10.5,5 L13.5,5 C13.7761424,5 14,5.22385763 14,5.5 L14,7.5 C14,7.77614237 13.7761424,8 13.5,8 C13.2238576,8 13,7.77614237 13,7.5 L13,6 Z M10.5,8 C10.2238576,8 10,7.77614237 10,7.5 C10,7.22385763 10.2238576,7 10.5,7 L11.5,7 C11.7761424,7 12,7.22385763 12,7.5 C12,7.77614237 11.7761424,8 11.5,8 L10.5,8 Z M5.5,14 C5.22385763,14 5,13.7761424 5,13.5 C5,13.2238576 5.22385763,13 5.5,13 L7.5,13 C7.77614237,13 8,13.2238576 8,13.5 C8,13.7761424 7.77614237,14 7.5,14 L5.5,14 Z M9.5,14 C9.22385763,14 9,13.7761424 9,13.5 C9,13.2238576 9.22385763,13 9.5,13 L10.5,13 C10.7761424,13 11,13.2238576 11,13.5 C11,13.7761424 10.7761424,14 10.5,14 L9.5,14 Z M11,18 L11,18.5 C11,18.7761424 10.7761424,19 10.5,19 C10.2238576,19 10,18.7761424 10,18.5 L10,17.5 C10,17.2238576 10.2238576,17 10.5,17 L12.5,17 C12.7761424,17 13,17.2238576 13,17.5 C13,17.7761424 12.7761424,18 12.5,18 L11,18 Z M9,11 L9.5,11 C9.77614237,11 10,11.2238576 10,11.5 C10,11.7761424 9.77614237,12 9.5,12 L8.5,12 C8.22385763,12 8,11.7761424 8,11.5 L8,11 L7.5,11 C7.22385763,11 7,10.7761424 7,10.5 C7,10.2238576 7.22385763,10 7.5,10 L8.5,10 C8.77614237,10 9,10.2238576 9,10.5 L9,11 Z M5,10.5 C5,10.2238576 5.22385763,10 5.5,10 C5.77614237,10 6,10.2238576 6,10.5 L6,11.5 C6,11.7761424 5.77614237,12 5.5,12 C5.22385763,12 5,11.7761424 5,11.5 L5,10.5 Z M15,10.5 C15,10.2238576 15.2238576,10 15.5,10 C15.7761424,10 16,10.2238576 16,10.5 L16,12.5 C16,12.7761424 15.7761424,13 15.5,13 C15.2238576,13 15,12.7761424 15,12.5 L15,10.5 Z M17,15 L17,14.5 C17,14.2238576 17.2238576,14 17.5,14 L18.5,14 C18.7761424,14 19,14.2238576 19,14.5 C19,14.7761424 18.7761424,15 18.5,15 L18,15 L18,15.5 C18,15.7761424 17.7761424,16 17.5,16 L15.5,16 C15.2238576,16 15,15.7761424 15,15.5 L15,14.5 C15,14.2238576 15.2238576,14 15.5,14 C15.7761424,14 16,14.2238576 16,14.5 L16,15 L17,15 Z M3,6.5 C3,6.77614237 2.77614237,7 2.5,7 C2.22385763,7 2,6.77614237 2,6.5 L2,4.5 C2,3.11928813 3.11928813,2 4.5,2 L6.5,2 C6.77614237,2 7,2.22385763 7,2.5 C7,2.77614237 6.77614237,3 6.5,3 L4.5,3 C3.67157288,3 3,3.67157288 3,4.5 L3,6.5 Z M17.5,3 C17.2238576,3 17,2.77614237 17,2.5 C17,2.22385763 17.2238576,2 17.5,2 L19.5,2 C20.8807119,2 22,3.11928813 22,4.5 L22,6.5 C22,6.77614237 21.7761424,7 21.5,7 C21.2238576,7 21,6.77614237 21,6.5 L21,4.5 C21,3.67157288 20.3284271,3 19.5,3 L17.5,3 Z M6.5,21 C6.77614237,21 7,21.2238576 7,21.5 C7,21.7761424 6.77614237,22 6.5,22 L4.5,22 C3.11928813,22 2,20.8807119 2,19.5 L2,17.5 C2,17.2238576 2.22385763,17 2.5,17 C2.77614237,17 3,17.2238576 3,17.5 L3,19.5 C3,20.3284271 3.67157288,21 4.5,21 L6.5,21 Z M21,17.5 C21,17.2238576 21.2238576,17 21.5,17 C21.7761424,17 22,17.2238576 22,17.5 L22,19.5 C22,20.8807119 20.8807119,22 19.5,22 L17.5,22 C17.2238576,22 17,21.7761424 17,21.5 C17,21.2238576 17.2238576,21 17.5,21 L19.5,21 C20.3284271,21 21,20.3284271 21,19.5 L21,17.5 Z"></path> </g></svg>
        </a>


        <a href="report.php" class="app-sidebar-link">
        <svg width="64px" height="64px" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>report-text</title> <g id="Page-1" stroke-width="26.624000000000002" fill="none" fill-rule="evenodd"> <g id="add" fill="#000000" transform="translate(42.666667, 85.333333)"> <path d="M341.333333,1.42108547e-14 L426.666667,85.3333333 L426.666667,341.333333 L3.55271368e-14,341.333333 L3.55271368e-14,1.42108547e-14 L341.333333,1.42108547e-14 Z M330.666667,42.6666667 L42.6666667,42.6666667 L42.6666667,298.666667 L384,298.666667 L384,96 L330.666667,42.6666667 Z M149.333333,234.666667 L149.333333,266.666667 L85.3333333,266.666667 L85.3333333,234.666667 L149.333333,234.666667 Z M341.333333,234.666667 L341.333333,266.666667 L192,266.666667 L192,234.666667 L341.333333,234.666667 Z M149.333333,170.666667 L149.333333,202.666667 L85.3333333,202.666667 L85.3333333,170.666667 L149.333333,170.666667 Z M341.333333,170.666667 L341.333333,202.666667 L192,202.666667 L192,170.666667 L341.333333,170.666667 Z M149.333333,106.666667 L149.333333,138.666667 L85.3333333,138.666667 L85.3333333,106.666667 L149.333333,106.666667 Z M341.333333,106.666667 L341.333333,138.666667 L192,138.666667 L192,106.666667 L341.333333,106.666667 Z" id="Combined-Shape"> </path> </g> </g> </g></svg>
        </a>


        <a href="../logout.php" class="app-sidebar-link">
        <svg width="64px" height="64px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="1.25"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11.75 9.874C11.75 10.2882 12.0858 10.624 12.5 10.624C12.9142 10.624 13.25 10.2882 13.25 9.874H11.75ZM13.25 4C13.25 3.58579 12.9142 3.25 12.5 3.25C12.0858 3.25 11.75 3.58579 11.75 4H13.25ZM9.81082 6.66156C10.1878 6.48991 10.3542 6.04515 10.1826 5.66818C10.0109 5.29121 9.56615 5.12478 9.18918 5.29644L9.81082 6.66156ZM5.5 12.16L4.7499 12.1561L4.75005 12.1687L5.5 12.16ZM12.5 19L12.5086 18.25C12.5029 18.25 12.4971 18.25 12.4914 18.25L12.5 19ZM19.5 12.16L20.2501 12.1687L20.25 12.1561L19.5 12.16ZM15.8108 5.29644C15.4338 5.12478 14.9891 5.29121 14.8174 5.66818C14.6458 6.04515 14.8122 6.48991 15.1892 6.66156L15.8108 5.29644ZM13.25 9.874V4H11.75V9.874H13.25ZM9.18918 5.29644C6.49843 6.52171 4.7655 9.19951 4.75001 12.1561L6.24999 12.1639C6.26242 9.79237 7.65246 7.6444 9.81082 6.66156L9.18918 5.29644ZM4.75005 12.1687C4.79935 16.4046 8.27278 19.7986 12.5086 19.75L12.4914 18.25C9.08384 18.2892 6.28961 15.5588 6.24995 12.1513L4.75005 12.1687ZM12.4914 19.75C16.7272 19.7986 20.2007 16.4046 20.2499 12.1687L18.7501 12.1513C18.7104 15.5588 15.9162 18.2892 12.5086 18.25L12.4914 19.75ZM20.25 12.1561C20.2345 9.19951 18.5016 6.52171 15.8108 5.29644L15.1892 6.66156C17.3475 7.6444 18.7376 9.79237 18.75 12.1639L20.25 12.1561Z" fill="#000000"></path> </g></svg>
        </a>
            

<!---------------------------------------------------------------------------------------------------------------------------->


        
        </div>
        <div class="projects-section">
        <div class="projects-section-header">
        <p>HOME</p>
        </div>


        <div class="projects-section-line">
        <div class="projects-status">
        </div>



        <div class="view-actions">
        <button class="view-btn list-view" title="List View">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
        <line x1="8" y1="6" x2="21" y2="6" />
        <line x1="8" y1="12" x2="21" y2="12" />
        <line x1="8" y1="18" x2="21" y2="18" />
        <line x1="3" y1="6" x2="3.01" y2="6" />
        <line x1="3" y1="12" x2="3.01" y2="12" />
        <line x1="3" y1="18" x2="3.01" y2="18" /></svg>
        </button>


        
        <button class="view-btn grid-view active" title="Grid View">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
        <rect x="3" y="3" width="7" height="7" />
        <rect x="14" y="3" width="7" height="7" />
        <rect x="14" y="14" width="7" height="7" />
        <rect x="3" y="14" width="7" height="7" /></svg>
        </button>
        </div>
        </div>

        

<!----------------------------------------------------------------------------------------------------------------------------->




        <div class="project-boxes jsGridView">
            <div class="project-box-wrapper">
                <div class="project-box" style="background-color: #46d7d2;">
                    <div class="project-box-header">
                        <div class="more-wrapper">
                    </div>
                </div>
                <div class="project-box-content-header">
                    <p class="box-content-header">FACULTY OF TECHNOLOGY</p>
                    <p class="box-content-subheader">Agricultural Technology</p>
                    <p class="box-content-subheader">BTech Electronics</p>
                    <p class="box-content-subheader">Environmental Technology/p>
                </div>
        
                <div class="box-progress-wrapper">
            </div>
                <div class="project-box-footer">
                    <div class="participants">
                    </div>
                </div>
            </div>
        </div>
        
      






        <div class="project-box-wrapper">
        <div class="project-box" style="background-color: #a564e3;">
        <div class="project-box-header">
        <div class="more-wrapper">
            </div>
            </div>
        <div class="project-box-content-header">
            <p class="box-content-header">FACULTY OF TECHNOLOGY</p>
            <p class="box-content-subheader">Agricultural Technology</p>
            <p class="box-content-subheader">BTech Electronics</p>
            <p class="box-content-subheader">Environmental Technology/p>
            </div>

        <div class="box-progress-wrapper">
        </div>
        <div class="project-box-footer">
        <div class="participants">
        </div>
        </div>
        </div>
        </div>


        <div class="project-box-wrapper">
            <div class="project-box" style="background-color: #d14cc6;">
            <div class="project-box-header">
            <div class="more-wrapper">
                </div>
                </div>
            <div class="project-box-content-header">
                <p class="box-content-header">FACULTY OF SCIENCE</p>
                <p class="box-content-subheader">Biosystems Engineering</p>
                <p class="box-content-subheader">E-Tourism and Digital Marketing</p>
                <p class="box-content-subheader">Textile and Clothing Technology</p>
              

                </div>
    
            <div class="box-progress-wrapper">
            </div>
            <div class="project-box-footer">
            <div class="participants">
            </div>
            </div>
            </div>
            </div>



            <div class="project-box-wrapper">
                <div class="project-box" style="background-color: #b1c464;">
                <div class="project-box-header">
                <div class="more-wrapper">
                    </div>
                    </div>
                <div class="project-box-content-header">
                    <p class="box-content-header">FACULTY OF ENGINEERING</p>
                    <p class="box-content-subheader">Civil Engineering</p>
                    <p class="box-content-subheader">Electronics and Engineering Management</p>
                    <p class="box-content-subheader">Electronics and Power Systems</p>
                    <p class="box-content-subheader">Electronics and Telecommunications</p>
                    <p class="box-content-subheader">Mechatronics Engineering</p>
                    </div>
        
                <div class="box-progress-wrapper">
                </div>
                <div class="project-box-footer">
                <div class="participants">
                </div>
                </div>
                </div>
                </div>


                <div class="project-box-wrapper">
                    <div class="project-box" style="background-color: #cd495d;">
                    <div class="project-box-header">
                    <div class="more-wrapper">
                        </div>
                        </div>
                    <div class="project-box-content-header">
                        <p class="box-content-header">FACULTY OF BUSINESS MANAGEMENT</p>
                        <p class="box-content-subheader">Accounting and Finance</p>
                        <p class="box-content-subheader">Human Resource Management</p>
                        <p class="box-content-subheader">Marketing Management</p>
                        <p class="box-content-subheader">Operations Management</p>
                        <p class="box-content-subheader">Supply Chain Management</p>
                        
                        </div>
            
                    <div class="box-progress-wrapper">
                    </div>
                    <div class="project-box-footer">
                    <div class="participants">
                    </div>
                    </div>
                    </div>
                    </div>



                <div class="project-box-wrapper">
                    <div class="project-box" style="background-color: #03a5fc;">
                    <div class="project-box-header">
                    <div class="more-wrapper">
                        </div>
                        </div>
                    <div class="project-box-content-header">
                        <p class="box-content-header">DEPARTMENT OF MUSIC</p>
                        <p class="box-content-subheader">.</p>
                        <p class="box-content-subheader">.</p>
                        <p class="box-content-subheader">Music</p>
                        <p class="box-content-subheader">.</p>
                        <p class="box-content-subheader">.</p>
                       
                        </div>
            
                    <div class="box-progress-wrapper">
                    </div>
                    <div class="project-box-footer">
                    <div class="participants">
                    </div>
                    </div>
                    </div>
                    </div>






            
        <script src="main.js"></script>

</body>

</html>

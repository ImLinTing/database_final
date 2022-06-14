<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aidjobTitlePage</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <link rel="stylesheet" href="bar.css">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
     <div class="container">
          <!-- 功能列 -->
          <div class="row"> 
  
              <div class="col-3" style="margin-top: 10px;">
                  <img src="img/logo.png" width="200" height="60">
              </div>
  
              <div class="col-5 bar">
                <form >
                  <br/>
                  <input class="form-control me-1" type="search" placeholder="例:工程師" aria-label="Search" size="50" onkeyup='saveValue(this);'>
              </form>
          </div>
  
          <div class='col-1 bar' >
              <br/>
              <button type="button" class="btn btn-outline-warning button" >搜尋</button>
          </div>
  
          <div class='col-3 bar' >
              
              <div class="fs-1 bar-right" >
                  
                  <!-- 更多類別icon點擊 -->
                    <!-- <button type="button" class="btn btn-outline-warning">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-stack" viewBox="0 0 17 17">
      <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"></path>
      <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"></path>
    </svg> -->
                    <div class="btn-group " >
                         <button type="button" class="btn btn-outline-warning" onclick="location.href='option.php'">
                              <i class="bi bi-stack"></i>
                         </button>

      
                         <button type="button" onclick="location.href='home.php'" class="btn btn-outline-warning"> 
                         首頁
                         <!-- <span class="visually-hidden">Button</span> -->
                         </button>

     
                         <button onclick="location.href='login.php'" type="button" class="btn btn-outline-warning">
                              管理者登入
                         <span class="visually-hidden">Button</span>
                         </button>
                     </div>
                     
                         <span class="visually-hidden">Button</span>
                    </button>
  
                  <!-- <i class="bi bi-stack "></i>  -->
                  <!-- label點按處 -->
                  <!-- <span >首頁</span>
                  <span class="label">登入</span> -->
              </div>
          </div>
      </div>
      <br/>
      <div class="row">
           
               <!-- <div class="col-4 bar" >
                    <div class="type1">
                         <img src="./img/type1.png" alt="" width="420" height="102">
               <form action="">   
                    <ul class="list-group"  valign="center">
                         <li class="list-group-item" >
                           <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." >
                           視障
                         </li>
                         <li class="list-group-item">
                           <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                           聾啞
                         </li>
                         <li class="list-group-item">
                           <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                           聽障
                         </li>
                         <li class="list-group-item">
                           <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                           肢障
                         </li>
                     </ul>
                    </form> 
               </div>
          </div> -->
     
          
           <div class="col-4">
                <div class="type2 bar">
                <img src="./img/workplace.png" alt="" width="420" height="102">
          <form action=""> 
               <ul class="list-group"  valign="center">
                    <li class="list-group-item" >
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                      台北
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                      新北
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                      基隆
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                      桃園
                    </li>
                </ul>
               </form>
          </div>
          </div>

          
          <br/>
          <div class="col-4">
               <div class="type3 bar">
                    <img src="./img/worksalary.png" alt="" width="420" height="102">
          <form action=""> 
               <ul class="list-group"  valign="center">
                    <li class="list-group-item" >
                         <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                         時薪
                         <!-- <div class="form-floating mb-3">
                              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                              <label for="floatingInput">單位:元</label>
                         </div> -->
                         
                         <span>
                              <input style="width:120px" type="number"  min="0" step="100"> ~ <input style="width:120px" type="number" min="0" step="100">
                         </span> 元
                    </li>
                    <li class="list-group-item">
     
                         <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                         月薪
                         <span>
                              <input style="width:120px" type="number"  min="0" step="100"> ~ <input style="width:120px" type="number" min="0" step="100">
                         </span> 元
                    </li>
                    <li class="list-group-item">
                         <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                         日薪
                         <span>
                              <input style="width:120px" type="number"  min="0" step="100"> ~ <input style="width:120px" type="number" min="0" step="100">
                         </span> 元
                    </li>
               </ul>
               </form>
          </div>
     </div>

     <div class="col-4">
          <!-- <div class="card" style="vertical-align:middle;border: none;">
               <div class="card-body" > -->

                       <div class="alert alert-warning" role="alert" style="text-align:center;background-color: rgb(255, 233, 181);">
                         <h3 class="alert-heading">說明</h3>
                         <hr>
                         <h5>使用者可以依據類別選項選擇  <br>
                             選擇單樣或多樣的限制條件項  <br>
                             進行篩選，須注意薪資要求欄  <br>
                             只能選擇一項條件的選擇搭配  <br>
                             選擇完成請按下下方"確認"鈕
                         </h5>
                         <hr>
                              <button type="submit" class="btn btn-light button" style="background-color: rgb(255, 255, 255);width: 100px;height: 40px;">確認</button>
                       
                         </div>
               <!-- </div>  -->
     </div>
</div>
<br/>         
  
          <div class="row">
               <div class="col-4">
                    <div class="type4 bar">
                         <img src="./img/worktype.png" alt="" width="420" height="102">
                    <form action=""> 
                         <ul class="list-group"  valign="center">
                              <li class="list-group-item" >
                                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                行政企業主管
                              </li>
                              <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                技術人員/專業助理
                              </li>
                              <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                事務工作人員
                              </li>
                              <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                服務工作/授業員
                              </li>
                              <li class="list-group-item">
                               <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                               農林漁牧工作員
                             </li>
                             <li class="list-group-item">
                               <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                               技術工作人員
                             </li>
                             <li class="list-group-item">
                               <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                               機械設備操作工
                             </li>
                             <li class="list-group-item">
                               <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                               非技術工/體力工作人員
                             </li>
                          </ul>
                         </form>
                    </div>
                  
               </div>
               <div class="col-4">
                    <div class="type5 bar">
                         <img src="./img/worktime.png" alt="" width="420" height="102">
                    <form action=""> 
                        <ul class="list-group"  valign="center">
                             <li class="list-group-item" >
                                   <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                               日班
                             </li>
                             <li class="list-group-item">
                                   <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                               夜班
                             </li>
                             <li class="list-group-item">
                                   <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                               大晚班
                              </li>
                              <li class="list-group-item">
                                   <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                               假日班
                              </li>

                                               
                            
                         </ul>
                    </form>

                   </div>
               </div>
               
                  
               
          </div>
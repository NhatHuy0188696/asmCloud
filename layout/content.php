
<div class="content">
<?php
                        $sql = 'select * from product';
                        $listProduct = executeResult($sql);
                      foreach($listProduct as $product){
                          echo ' <div class="content-project">
            
                          <div class="content-project--left">
                          <h3 class="content-project--title">
                              TỔNG QUAN DỰ ÁN
                          </h3>
                                  <table class="content-project--infor">
                                 
                                      <tr>
                                  <td>
                                  <strong>Tên dự án
                                  <strong> </td> 
                                      <td>'.$product['name'].'</td>
                              
                                  </tr>
                                  <tr>
                                  <td>
                                  <strong>Vị trí
                                  <strong> </td>
                                      <td>'.$product['address'].'</td>
                              
                                  </tr>
                                  <tr>
                                  <td>
                                  <strong>Đơn vị phân phối
                                  <strong>
                                  </td>
                                      <td>'.$product['distributor'].'</td>
                              
                                  </tr>
                                  <tr>
                              <td>
                              <strong>Thiết kế
                              <strong>
                              </td> 
                                      <td>'.$product['design'].'</td>
                              
                                  </tr>
                                  <tr>
                                      <td>
                                          <strong> Thi công <strong></td>
                                      <td>'.$product['construction'].'</td>
                              
                                  </tr>
                                  <tr>
                                  <td>
                                  <strong>Quy mô
                                  <strong>
                                  </td>
                                      <td>'.$product['scale'].'</td>
                              
                                  </tr>
                                  <tr>
                                  <td>
                                  <strong>Loại hình sản phẩm
                                  <strong>
                                  </td>
                                      <td>'.$product['product_type'].'</td>
                              
                                  </tr>
                                  <tr>
                                  <td>
                                  <strong>Thời gian bàn giao dự kiến
                                  <strong>
                                  </td>
                                      <td>'.$product['time'].'</td>
                              
                                  </tr>
              
              
                              </table>
                              
                              <button type="submit" name="btnSave" class="btn btn-submit form-submit">Nhận Thông Báo</button>
                          </div>
                          <div class="content-project--right">
                              <img src="'.$product['image'].'">
                          </div>
                          <div class="modal ">

                          <div class="modal-overlow"></div>
                          <div class="modal-body">
                          <div class="modal-view">
                          <div class="quote-content">
                       
                                  <div class="quote-content--form">
                                      <h2 class="quote-title">
                                          Nhận Báo Giá
                                      </h2>
                                      <form action="" method="POST" id="form-1">
                      
                                          <div class="quote-form">
                                          
                                              <div class="quote-form--control">
                                            
                                                  <input type="text" class="quote-name" name="name" placeholder="Họ và tên">
                                                  <span class="message"></span>
                                              </div>
                                              
                                              <div class="quote-form--control">
                      
                                                  <input type="email" class="quote-email"  name="email" placeholder="Email">
                                                  <span class="message"></span>
                                              </div>
                                          
                                              <div class="quote-form--control">
                      
                                                  <input type="number" class="quote-phone"  name="number" placeholder="số điện thoại">
                                                  <span class="message"></span>
                                              </div>
                                              <div class="quote-form--control">
                                            
                                              <input type="text" class="TenDuAn" name="TenDuAn" value="'.$product['name'].'" placeholder="Tên dự án">
                                              <span class="message"></span>
                                           </div>
                                              <div class="quote-form--control">
                                              
                                              <input type="text" class="ViTri" name="ViTri"  value="'.$product['address'].'" placeholder="Vị trí">
                                              <span class="message"></span>
                                           </div>
                                          </div>
                                          
                                          <button type="submit" name="btnSave" class="btn btn-submit form-submit get-info">Nhận Thông Báo</button>
                                      </form>
                                  </div>
                              </div>
                           </div>
                          </div>
                      </div>
                      </div>
                    
                      ';
                      
                      }

                        ?>
           
            
        </div>
        
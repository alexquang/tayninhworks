<div class="container">
		<div class="infocompany">
			<div class="row padding">
				<div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
					<div class="row">
						<div
							class="col-md-3 col-lg-3 col-sm-12 col-xs-12 imgcompanydetails">
							<img class="img-thumbnail"
								src="https://picsum.photos/150" />
						</div>
						<div
							class="col-md-9 col-lg-9 col-sm-12 col-xs-12 infocompanydetails">

							<div class="row">
								<ul class="nav nav-tabs">
									<li><h4><?php echo wp_kses_post($job->title); ?></h4></li>
								</ul>
							</div>
							<ul class="companytitle hidden-sm hidden-xs">
								<li><h4>CÔNG TY CỔ PHẦN CADICO</h4></li>
								<li><h6>L29, Đường 27, KDC Cty xây dựng 8, P.Hưng
										Thạnh, Q.Cái Răng, TP.Cần Thơ</h6></li>
							</ul>
						</div>
					</div>
				</div>
				<div
					class="col-md-3 col-lg-3 col-sm-12 col-xs-12 salarycompanydetails">
					<ul>
						<li><p>
								<i class="fa fa-id-card" aria-hidden="true"></i> Mức lương: 500
								~ 1500USD
							</p></li>
						<li><p>
								<i class="fa fa-users" aria-hidden="true"></i> Nhân viên thời vụ
							</p></li>
						<li><p>
								<i class="fa fa-location-arrow" aria-hidden="true"></i> TP.Đà
								Nẵng
							</p></li>
					</ul>
				</div>
			</div>

		</div>
        <div class="desciption">
			<div class="row margindesciption">
				<div class="col-md-6 borderdesciption">
					<h4 class="hidden-sm hidden-xs">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i> MÔ TẢ
						CÔNG VIỆC
					</h4>
					
					<div class="contentdesciption">
                        <?php echo wp_kses_post($job->job_description); ?>
					</div>
					
					<div class="row margintopaddress">
						<div class="col-md-6 titlemap">
							<h4>
								<i class="fa fa-university" aria-hidden="true"></i> NƠI LÀM VIỆC
							</h4>
						</div>
						<div class="col-md-6 viewmap">
							<a class="hidden-sm hidden-xs" style="cursor: pointer;"
								data-toggle="modal" data-target="#myModal"><i
								class="fa fa-map" aria-hidden="true"></i> Xem Bản Đồ</a>
							<!-- Modal -->
							<div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog">

									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-body">
											<iframe
												src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.127867903133!2d106.63853421519087!3d10.801517392304497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175294f46ce189d%3A0x875b87cf82f8476d!2zMzY0IEPhu5luZyBIw7JhLCBwaMaw4budbmcgMTMsIFTDom4gQsOsbmgsIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1490326203553"
												width="600" height="450" frameborder="0" style="border: 0"
												allowfullscreen></iframe>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger"
												data-dismiss="modal">Đóng</button>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 roomaddress">
								<h5>
									<i class="icon-building-o icon-poi"></i> Địa chỉ
								</h5>
								<p>Phòng X0-4.59, tầng 4, Sunrise City North Tower, 27
									Nguyễn Hữu Thọ, Phường Tân Hưng, Quận 7, HCM</p>
							</div>
						</div>
					</div>
					<div class="row hidden-sm hidden-xs">
						<div class="col-md-12 splitline"></div>
					</div>
					<div class="row recruitmentorthertitle hidden-sm hidden-xs">
						<h4>
							<i class="fa fa-users" aria-hidden="true"></i> THÔNG TIN TUYỂN
							DỤNG KHÁC
						</h4>
						<div class="col-md-6 recruitmentorther">
							<ul>
								<li><a href="#"><i class="fa fa-check"
										aria-hidden="true"></i> Đội trưởng Thi công xây dựng</a></li>
								<li><a href="#"><i class="fa fa-check"
										aria-hidden="true"></i> Nhân viên Thi công xây dựng</a></li>
								<li><a href="#"><i class="fa fa-check"
										aria-hidden="true"></i> Trưởng Ban QLDA</a></li>
								<li><a href="#"><i class="fa fa-check"
										aria-hidden="true"></i> Nhân viên Tổng hợp xây dựng</a></li>
								<li><a href="#"><i class="fa fa-check"
										aria-hidden="true"></i> Trưởng phòng Xây Dựng</a></li>
								<li><a href="#"><i class="fa fa-check"
										aria-hidden="true"></i> Nhân viên Thiết kế viễn thông</a></li>
								<li><a href="#"><i class="fa fa-check"
										aria-hidden="true"></i> Nhân viên Hồ sơ thầu</a></li>
								<li><a href="#"><i class="fa fa-check"
										aria-hidden="true"></i> Đội trưởng Thi công</a></li>
							</ul>
						</div>
						<div class="col-md-6 recruitmentorther">
							<ul>
								<li><a href="#"><i class="fa fa-check"
										aria-hidden="true"></i> NV Kỹ thuật công trình</a></li>
								<li><a href="#"><i class="fa fa-check"
										aria-hidden="true"></i> Trưởng Phòng Tiếp Thị</a></li>
								<li><a href="#"><i class="fa fa-check"
										aria-hidden="true"></i> Nhân viên Tiếp Thị</a></li>
								<li><a href="#"><i class="fa fa-check"
										aria-hidden="true"></i> Nhân viên Cung ứng</a></li>
								<li><a href="#"><i class="fa fa-check"
										aria-hidden="true"></i> Nhân viên Admin</a></li>
								<li><a href="#"><i class="fa fa-check"
										aria-hidden="true"></i> Nhân viên môi giới BĐS</a></li>
								<li><a href="#"><i class="fa fa-check"
										aria-hidden="true"></i> Nhân viên Kỹ thuật</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-12 hidden-sm hidden-xs"
						style="text-align: right;">
						<h3>
							<a style="background-color: #003B64; color: #ffffff;"
								class="btn btn-sm" href="index.html">Trở về</a>
						</h3>
					</div>
				</div>
				<div class="col-md-6 hidden-sm hidden-xs">
					<div class="row titlecompanydetail">
						<h4>
							<i class="fa fa-list-alt" aria-hidden="true"></i> SƠ LƯỢC CÔNG TY
						</h4>
						<div class="col-md-6">
							<ul>
								<li><span><b>Số Giấy Phép Đăng Ký Kinh Doanh</b></span></li>
								<li><p class="paddingtitlecompanydetail">0312353730</p></li>
								<li><span><b>Website</b></span></li>
								<li><p>
										<a target="_blank" href="http://dananginfo.vn/template"
											class="paddingtitlecompanydetail">dananginfo.vn</a>
									</p></li>
								<li><span><b>Trang Facebook Fanpage</b></span></li>
								<li><p class="paddingtitlecompanydetail">facebook.com/IVSCompany</p></li>
								<li><span><b>Ngôn Ngữ Sử Dụng</b></span></li>
								<li><p class="paddingtitlecompanydetail">Tiếng việt/
										Tiếng Anh</p></li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul>
								<li><span><b>Lĩnh Vực Kinh Doanh</b></span></li>
								<li><p>Máy tính/Công nghệ thông tin (Phần cứng)</p></li>
								<li><span><b>Số Điện Thoại</b></span></li>
								<li><p>08 73068 789</p></li>
								<li><span><b>Quy Mô Công Ty</b></span></li>
								<li><p>1- 50 nhân viên</p></li>
								<li><span><b>Thời Gian Làm Việc</b></span></li>
								<li><p>Từ thứ 2 đến thứ 7 ( 1 tháng làm 2 ngày thứ 7)</p></li>
								<li><span><b>Phúc Lợi Công Ty</b></span></li>
								<li><p>Bảo hiểm y tế, Hỗ trợ giáo dục/ đào tạo,
										Hỗ trợ đậu xe, Phúc lợi thị lực, Lương tháng 13 Bao cơm
										trưa tại văn phòng Đào tạo kỹ năng Hưởng đầy đủ chế độ BH</p></li>
							</ul>
						</div>
					</div>
					<div class="imgcompany hidden-sm hidden-xs">
						<h4>
							<i class="fa fa-file-image-o" aria-hidden="true"></i> HÌNH ẢNH
							CÔNG TY
						</h4>
						<!-- Image Company -->

						<div id="carousel-example-generic" class="carousel slide"
							data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0"
									class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<img width="100%" height="300px"
										src="https://regmedia.co.uk/2011/10/04/dell_poweredge_12g_servers.jpg"
										alt="...">
									<div class="carousel-caption"></div>
								</div>
								<div class="item">
									<img width="100%" height="300px"
										src="http://www.washingtonpost.com/sf/brand-connect/wp-content/uploads/sites/3/2016/07/BS-Dell-Burst-Info-Promo-Image.png"
										alt="...">
									<div class="carousel-caption"></div>
								</div>
							</div>

							<!-- Controls -->
							<a class="left carousel-control" href="#carousel-example-generic"
								role="button" data-slide="prev"> <span
								class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a> <a class="right carousel-control"
								href="#carousel-example-generic" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"
								aria-hidden="true"></span> <span class="sr-only">Next</span>
							</a>
						</div>

						<!-- End Image Company -->
					</div>
					<div class="introcompany">
						<h4>
							<i class="fa fa-info-circle" aria-hidden="true"></i> THÔNG TIN
							CÔNG TY
						</h4>
						<p>Vnetwork chuyên cung cấp các sản phẩm dịch vụ công nghệ như
							Máy chủ, VPS, Hosting, Email Server, Domain, Website; Phát triển
							ứng dụng quản lý, một số lĩnh vực khác liên quan đến các giải
							pháp bảo mật như CDN, WAF Là những người trẻ ở thời đại công
							nghệ, mang trong mình đam mê về lĩnh vực Công nghệ thông tin,
							chúng tôi vẫn luôn giữ được khao khát chinh phục của mình dù đã
							trải qua vài lần “thành công trì hoãn”.Chúng tôi càng tự hào vì
							đã truyền được tinh thần ấy cho những người cùng đồng hành, những
							người mà đã, đang và sẽ cùng chúng tôi theo đuổi tới cùng giá trị
							của một doanh nghiệp không chỉ hoạt động vì lợi ích của mình mà
							còn vì lợi ích của đối tác, khách hàng và cộng đồng.</p>
					</div>
				</div>
			</div>
		</div>
        </div>
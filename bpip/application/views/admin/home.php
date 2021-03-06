<?php
 if($this->session->userdata('level') == "admin" ){

 ?>
<div class="container"><?= $this->session->flashdata('pesan'); ?></div>
<br /><br /><br />
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $datacount['jumlahpegawai'] ?></h3>

              <p>Data Pegawai</p>
            </div>
            <div class="icon">
              <i class="fa fa-database"></i>
            </div>
            <a href="<?php base_url('admin/pegawai') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <h3><?= $datacount['jumlahkegiatan'] ?></h3>


              <p>Jumlah Agenda Kerja</p>
            </div>
            <div class="icon">
             <i class="fa fa-cubes"></i>
            </div>
            <a href="<?= base_url('agenda/index'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
            <h3>
			<?= $datacount['jumlahapproved'] ?></h3>

              <p>Agenda Kerja Terdaftar</p>
            </div>
            <div class="icon">
             <i class="fa fa-cubes"></i>
            </div>
            <a href="<?= base_url('agenda/index'); ?>"  class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <h3>
				<?= $datacount['jumlahpending'] ?></h3>

              <p>Agenda Kerja Selesai</p>
            </div>
            <div class="icon">
             <i class="fa fa-database"></i>
            </div>
            <a href="<?= base_url('agenda/index'); ?> class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
                  <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
                  <li class="pull-left header"><i class="fa fa-inbox"></i> Agenda</li>
                </ul>
                <div class="tab-content no-padding">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                </div>
              </div><!-- /.nav-tabs-custom -->

              


            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

              <!-- Map box -->
              <div class="box box-solid bg-light-blue-gradient">
               

              <!-- solid sales graph -->
              <div class="box box-solid bg-teal-gradient">
                <div class="box-header">
                  <i class="fa fa-th"></i>
                  <h3 class="box-title">Agenda Graph</h3>
                  <div class="box-tools pull-right">
                    <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body border-radius-none">
                  <div class="chart" id="line-chart" style="height: 250px;"></div>
                </div><!-- /.box-body -->
                <div class="box-footer no-border">
                  <div class="row">
                    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                      <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">
                      <div class="knob-label">Mail-Orders</div>
                    </div><!-- ./col -->
                    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                      <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">
                      <div class="knob-label">Online</div>
                    </div><!-- ./col -->
                    <div class="col-xs-4 text-center">
                      <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">
                      <div class="knob-label">In-Store</div>
                    </div><!-- ./col -->
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->

              <!-- Calendar -->
              <div class="box box-solid bg-green-gradient">
                <div class="box-header">
                  <i class="fa fa-calendar"></i>
                  <h3 class="box-title">Calendar</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                      <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                      <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Add new event</a></li>
                        <li><a href="#">Clear events</a></li>
                        <li class="divider"></li>
                        <li><a href="#">View calendar</a></li>
                      </ul>
                    </div>
                    <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"></div>
                </div><!-- /.box-body -->
                <div class="box-footer text-black">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Progress bars -->
                      <div class="clearfix">
                        <span class="pull-left">Task #1</span>
                        <small class="pull-right">90%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                      </div>

                      <div class="clearfix">
                        <span class="pull-left">Task #2</span>
                        <small class="pull-right">70%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                      </div>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                      <div class="clearfix">
                        <span class="pull-left">Task #3</span>
                        <small class="pull-right">60%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                      </div>

                      <div class="clearfix">
                        <span class="pull-left">Task #4</span>
                        <small class="pull-right">40%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div><!-- /.box -->

            </section><!-- right col -->
          </div><!-- /.row (main row) -->
        

 
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
			
			  

			  <?php }
			  elseif($this->session->userdata('level') == "sespri")
			  { ?>

				<div class="container"><?= $this->session->flashdata('pesan'); ?></div>
				<br /><br /><br />
				<div class="col-lg-3 col-xs-6">
				  <!-- small box -->
				  <div class="small-box bg-green">
					<div class="inner">
					  <h3><?= $datacount['jumlahpegawai'] ?></h3>

					  <p>Data Pegawai</p>
					</div>
					<div class="icon">
					  <i class="fa fa-database"></i>
					</div>
					 <a href="<?= base_url('admin/profil_pegawai'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         
				  </div>
				</div>


					<div class="col-lg-3 col-xs-6">
					  <!-- small box -->
					  <div class="small-box bg-aqua">
						<div class="inner">
						<h3><?= $datacount['jumlahkegiatan'] ?></h3>

						  <p>Jumlah Agenda Kerja</p>
						</div>
						<div class="icon">
						 <i class="fa fa-cubes"></i>
						</div>
						<a href="<?= base_url('agenda/index'); ?>"  class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					  </div>
					</div>


					<div class="col-lg-3 col-xs-6">
					  <!-- small box -->
					  <div class="small-box bg-red">
						<div class="inner">
						<h3>
						<?= $datacount['jumlahapproved'] ?></h3>

						  <p>Agenda Kerja Terdaftar</p>
						</div>
						<div class="icon">
						 <i class="fa fa-cubes"></i>
						</div>
						<a href="<?= base_url('agenda/index'); ?>"  class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					  </div>
					</div>


					<div class="col-lg-3 col-xs-6">
					  <!-- small box -->
					  <div class="small-box bg-yellow">
						<div class="inner">
						<h3>
							<?= $datacount['jumlahpending'] ?></h3>

						  <p>Agenda Kerja Selesai</p>
						</div>
						<div class="icon">
						 <i class="fa fa-database"></i>
						</div>
						<a href="<?= base_url('agenda/index'); ?>"  class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					  </div>
					</div>



					<div class="row">
						<!-- Left col -->
						<section class="col-lg-7 connectedSortable">
						  <!-- Custom tabs (Charts with tabs)-->
						  <div class="nav-tabs-custom">
							<!-- Tabs within a box -->
							<ul class="nav nav-tabs pull-right">
							  <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
							  <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
							  <li class="pull-left header"><i class="fa fa-inbox"></i> Agenda</li>
							</ul>
							<div class="tab-content no-padding">
							  <!-- Morris chart - Sales -->
							  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
							  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
							</div>
						  </div><!-- /.nav-tabs-custom -->

						  


						</section><!-- /.Left col -->
						<!-- right col (We are only adding the ID to make the widgets sortable)-->
						<section class="col-lg-5 connectedSortable">

						  <!-- Map box -->
						  <div class="box box-solid bg-light-blue-gradient">
						   

						  <!-- solid sales graph -->
						  <div class="box box-solid bg-teal-gradient">
							<div class="box-header">
							  <i class="fa fa-th"></i>
							  <h3 class="box-title">Agenda Graph</h3>
							  <div class="box-tools pull-right">
								<button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
								<button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
							  </div>
							</div>
							<div class="box-body border-radius-none">
							  <div class="chart" id="line-chart" style="height: 250px;"></div>
							</div><!-- /.box-body -->
							<div class="box-footer no-border">
							  <div class="row">
								<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
								  <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">
								  <div class="knob-label">Mail-Orders</div>
								</div><!-- ./col -->
								<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
								  <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">
								  <div class="knob-label">Online</div>
								</div><!-- ./col -->
								<div class="col-xs-4 text-center">
								  <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">
								  <div class="knob-label">In-Store</div>
								</div><!-- ./col -->
							  </div><!-- /.row -->
							</div><!-- /.box-footer -->
						  </div><!-- /.box -->

						  <!-- Calendar -->
						  <div class="box box-solid bg-green-gradient">
							<div class="box-header">
							  <i class="fa fa-calendar"></i>
							  <h3 class="box-title">Calendar</h3>
							  <!-- tools box -->
							  <div class="pull-right box-tools">
								<!-- button with a dropdown -->
								<div class="btn-group">
								  <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
								  <ul class="dropdown-menu pull-right" role="menu">
									<li><a href="#">Add new event</a></li>
									<li><a href="#">Clear events</a></li>
									<li class="divider"></li>
									<li><a href="#">View calendar</a></li>
								  </ul>
								</div>
								<button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
								<button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
							  </div><!-- /. tools -->
							</div><!-- /.box-header -->
							<div class="box-body no-padding">
							  <!--The calendar -->
							  <div id="calendar" style="width: 100%"></div>
							</div><!-- /.box-body -->
							<div class="box-footer text-black">
							  <div class="row">
								<div class="col-sm-6">
								  <!-- Progress bars -->
								  <div class="clearfix">
									<span class="pull-left">Task #1</span>
									<small class="pull-right">90%</small>
								  </div>
								  <div class="progress xs">
									<div class="progress-bar progress-bar-green" style="width: 90%;"></div>
								  </div>

								  <div class="clearfix">
									<span class="pull-left">Task #2</span>
									<small class="pull-right">70%</small>
								  </div>
								  <div class="progress xs">
									<div class="progress-bar progress-bar-green" style="width: 70%;"></div>
								  </div>
								</div><!-- /.col -->
								<div class="col-sm-6">
								  <div class="clearfix">
									<span class="pull-left">Task #3</span>
									<small class="pull-right">60%</small>
								  </div>
								  <div class="progress xs">
									<div class="progress-bar progress-bar-green" style="width: 60%;"></div>
								  </div>

								  <div class="clearfix">
									<span class="pull-left">Task #4</span>
									<small class="pull-right">40%</small>
								  </div>
								  <div class="progress xs">
									<div class="progress-bar progress-bar-green" style="width: 40%;"></div>
								  </div>
								</div><!-- /.col -->
							  </div><!-- /.row -->
							</div>
						  </div><!-- /.box -->

						</section><!-- right col -->
					  </div><!-- /.row (main row) -->
					

			 
						  <div class="chart">
							<canvas id="barChart" style="height:230px"></canvas>
						  </div>
						

			  
              <?php }
			  elseif($this->session->userdata('level') == "user")
			  { ?>

				  <div class="container"><?= $this->session->flashdata('pesan'); ?></div>

				  <div class="callout callout-success">
				  <h4><i class="fa fa-cubes"></i>Selamat Datang </h4>

				  <p>Anda Login Sebagai Pejabat Silahkan Pilih Menu Di Samping Untuk Menggunakan Sistem</p>
				  </div>
				  
				  <br /><br />
				<div class="col-lg-3 col-xs-6">
				  <!-- small box -->
				  <div class="small-box bg-green">
					<div class="inner">
					  <h3><?= $datacount['jumlahpegawai'] ?></h3>
					  <p>Data Pegawai</p>
					</div>
					<div class="icon">
					 <i class="fa fa-database"></i>
					</div>
					<a href="<?= base_url('admin/profil_pegawai'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>


				<div class="col-lg-3 col-xs-6">
				  <!-- small box -->
				  <div class="small-box bg-aqua">
					<div class="inner">
					<h3><?= $datacount['jumlahkegiatan'] ?></h3>


					  <p>Jumlah Agenda Kerja</p>
					</div>
					<div class="icon">
					 <i class="fa fa-cubes"></i>
					</div>
					<a href="<?= base_url('agenda/myagendacalendar'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>


				<div class="col-lg-3 col-xs-6">
				  <!-- small box -->
				  <div class="small-box bg-red">
					<div class="inner">
					<h3>
					<?= $datacount['jumlahapproved'] ?></h3>

					  <p>Agenda Kerja Terdaftar</p>
					</div>
					<div class="icon">
					 <i class="fa fa-cubes"></i>
					</div>
					<a href="<?= base_url('agenda/myagendacalendar'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>


				<div class="col-lg-3 col-xs-6">
				  <!-- small box -->
				  <div class="small-box bg-yellow">
					<div class="inner">
					<h3>
						<?= $datacount['jumlahpending'] ?></h3>

					  <p>Agenda Kerja Selesai</p>
					</div>
					<div class="icon">
					 <i class="fa fa-database"></i>
					</div>
					<a href="<?= base_url('agenda/myagendacalendar'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>


				<div class="row">
					<!-- Left col -->
					<section class="col-lg-7 connectedSortable">
					  <!-- Custom tabs (Charts with tabs)-->
					  <div class="nav-tabs-custom">
						<!-- Tabs within a box -->
						<ul class="nav nav-tabs pull-right">
						  <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
						  <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
						  <li class="pull-left header"><i class="fa fa-inbox"></i> Agenda</li>
						</ul>
						<div class="tab-content no-padding">
						  <!-- Morris chart - Sales -->
						  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
						  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
						</div>
					  </div><!-- /.nav-tabs-custom -->

					  


					</section><!-- /.Left col -->
					<!-- right col (We are only adding the ID to make the widgets sortable)-->
					<section class="col-lg-5 connectedSortable">

					  <!-- Map box -->
					  <div class="box box-solid bg-light-blue-gradient">
					   

					  <!-- solid sales graph -->
					  <div class="box box-solid bg-teal-gradient">
						<div class="box-header">
						  <i class="fa fa-th"></i>
						  <h3 class="box-title">Agenda Graph</h3>
						  <div class="box-tools pull-right">
							<button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
							<button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
						  </div>
						</div>
						<div class="box-body border-radius-none">
						  <div class="chart" id="line-chart" style="height: 250px;"></div>
						</div><!-- /.box-body -->
						<div class="box-footer no-border">
						  <div class="row">
							<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
							  <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">
							  <div class="knob-label">Mail-Orders</div>
							</div><!-- ./col -->
							<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
							  <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">
							  <div class="knob-label">Online</div>
							</div><!-- ./col -->
							<div class="col-xs-4 text-center">
							  <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">
							  <div class="knob-label">In-Store</div>
							</div><!-- ./col -->
						  </div><!-- /.row -->
						</div><!-- /.box-footer -->
					  </div><!-- /.box -->

					  <!-- Calendar -->
					  <div class="box box-solid bg-green-gradient">
						<div class="box-header">
						  <i class="fa fa-calendar"></i>
						  <h3 class="box-title">Calendar</h3>
						  <!-- tools box -->
						  <div class="pull-right box-tools">
							<!-- button with a dropdown -->
							<div class="btn-group">
							  <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
							  <ul class="dropdown-menu pull-right" role="menu">
								<li><a href="#">Add new event</a></li>
								<li><a href="#">Clear events</a></li>
								<li class="divider"></li>
								<li><a href="#">View calendar</a></li>
							  </ul>
							</div>
							<button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
							<button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
						  </div><!-- /. tools -->
						</div><!-- /.box-header -->
						<div class="box-body no-padding">
						  <!--The calendar -->
						  <div id="calendar" style="width: 100%"></div>
						</div><!-- /.box-body -->
						<div class="box-footer text-black">
						  <div class="row">
							<div class="col-sm-6">
							  <!-- Progress bars -->
							  <div class="clearfix">
								<span class="pull-left">Task #1</span>
								<small class="pull-right">90%</small>
							  </div>
							  <div class="progress xs">
								<div class="progress-bar progress-bar-green" style="width: 90%;"></div>
							  </div>

							  <div class="clearfix">
								<span class="pull-left">Task #2</span>
								<small class="pull-right">70%</small>
							  </div>
							  <div class="progress xs">
								<div class="progress-bar progress-bar-green" style="width: 70%;"></div>
							  </div>
							</div><!-- /.col -->
							<div class="col-sm-6">
							  <div class="clearfix">
								<span class="pull-left">Task #3</span>
								<small class="pull-right">60%</small>
							  </div>
							  <div class="progress xs">
								<div class="progress-bar progress-bar-green" style="width: 60%;"></div>
							  </div>

							  <div class="clearfix">
								<span class="pull-left">Task #4</span>
								<small class="pull-right">40%</small>
							  </div>
							  <div class="progress xs">
								<div class="progress-bar progress-bar-green" style="width: 40%;"></div>
							  </div>
							</div><!-- /.col -->
						  </div><!-- /.row -->
						</div>
					  </div><!-- /.box -->

					</section><!-- right col -->
				  </div><!-- /.row (main row) -->
				

		 
					  <div class="chart">
						<canvas id="barChart" style="height:230px"></canvas>
					  </div>


			  <?php 
			  }
			  else if($this->session->userdata('level') == "pegawai")
			  { 
		      ?>

				  <div class="container"><?= $this->session->flashdata('pesan'); ?></div>
				  <div class="callout callout-info">
					<h4><i class="fa fa-cubes"></i>Selamat Datang </h4>
					<p>Anda Login Sebagai Pegawai Silahkan Pilih Menu Di Samping Untuk Menggunakan Sistem</p>
				  </div>
				
					<br /><br />
					<div class="col-lg-3 col-xs-6">
					  <!-- small box -->
					  <div class="small-box bg-green">
						<div class="inner">
						  <h3><?= $datacount['jumlahpegawai'] ?></h3>

						  <p>Data Pegawai</p>
						</div>
						<div class="icon">
						  <i class="fa fa-database"></i>
						</div>
						<a href="<?= base_url('admin/profil_pegawai'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         
					  </div>
					</div>


					<div class="col-lg-3 col-xs-6">
					  <!-- small box -->
					  <div class="small-box bg-aqua">
						<div class="inner">
						<h3><?= $datacount['jumlahkegiatan'] ?></h3>


						  <p>Jumlah Agenda Kerja</p>
						</div>
						<div class="icon">
						 <i class="fa fa-cubes"></i>
						</div>
						<a href="<?= base_url('agenda/myagendacalendar'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					  </div>
					</div>


					<div class="col-lg-3 col-xs-6">
					  <!-- small box -->
					  <div class="small-box bg-red">
						<div class="inner">
						<h3>
						<?= $datacount['jumlahapproved'] ?></h3>

						  <p>Agenda Kerja Terdaftar</p>
						</div>
						<div class="icon">
						 <i class="fa fa-cubes"></i>
						</div>
						<a href="<?= base_url('agenda/myagendacalendar'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					  </div>
					</div>


					<div class="col-lg-3 col-xs-6">
					  <!-- small box -->
					  <div class="small-box bg-yellow">
						<div class="inner">
						<h3>
							<?= $datacount['jumlahpending'] ?></h3>

						  <p>Agenda Kerja Selesai</p>
						</div>
						<div class="icon">
						 <i class="fa fa-database"></i>
						</div>
						<a href="<?= base_url('agenda/myagendacalendar'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					  </div>
					</div>


					<div class="row">
						<!-- Left col -->
						<section class="col-lg-7 connectedSortable">
						  <!-- Custom tabs (Charts with tabs)-->
						  <div class="nav-tabs-custom">
							<!-- Tabs within a box -->
							<ul class="nav nav-tabs pull-right">
							  <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
							  <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
							  <li class="pull-left header"><i class="fa fa-inbox"></i> Agenda</li>
							</ul>
							<div class="tab-content no-padding">
							  <!-- Morris chart - Sales -->
							  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
							  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
							</div>
						  </div><!-- /.nav-tabs-custom -->

						  


						</section><!-- /.Left col -->
						<!-- right col (We are only adding the ID to make the widgets sortable)-->
						<section class="col-lg-5 connectedSortable">

						  <!-- Map box -->
						  <div class="box box-solid bg-light-blue-gradient">
						   

						  <!-- solid sales graph -->
						  <div class="box box-solid bg-teal-gradient">
							<div class="box-header">
							  <i class="fa fa-th"></i>
							  <h3 class="box-title">Agenda Graph</h3>
							  <div class="box-tools pull-right">
								<button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
								<button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
							  </div>
							</div>
							<div class="box-body border-radius-none">
							  <div class="chart" id="line-chart" style="height: 250px;"></div>
							</div><!-- /.box-body -->
							<div class="box-footer no-border">
							  <div class="row">
								<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
								  <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">
								  <div class="knob-label">Mail-Orders</div>
								</div><!-- ./col -->
								<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
								  <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">
								  <div class="knob-label">Online</div>
								</div><!-- ./col -->
								<div class="col-xs-4 text-center">
								  <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">
								  <div class="knob-label">In-Store</div>
								</div><!-- ./col -->
							  </div><!-- /.row -->
							</div><!-- /.box-footer -->
						  </div><!-- /.box -->

						  <!-- Calendar -->
						  <div class="box box-solid bg-green-gradient">
							<div class="box-header">
							  <i class="fa fa-calendar"></i>
							  <h3 class="box-title">Calendar</h3>
							  <!-- tools box -->
							  <div class="pull-right box-tools">
								<!-- button with a dropdown -->
								<div class="btn-group">
								  <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
								  <ul class="dropdown-menu pull-right" role="menu">
									<li><a href="#">Add new event</a></li>
									<li><a href="#">Clear events</a></li>
									<li class="divider"></li>
									<li><a href="#">View calendar</a></li>
								  </ul>
								</div>
								<button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
								<button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
							  </div><!-- /. tools -->
							</div><!-- /.box-header -->
							<div class="box-body no-padding">
							  <!--The calendar -->
							  <div id="calendar" style="width: 100%"></div>
							</div><!-- /.box-body -->
							<div class="box-footer text-black">
							  <div class="row">
								<div class="col-sm-6">
								  <!-- Progress bars -->
								  <div class="clearfix">
									<span class="pull-left">Task #1</span>
									<small class="pull-right">90%</small>
								  </div>
								  <div class="progress xs">
									<div class="progress-bar progress-bar-green" style="width: 90%;"></div>
								  </div>

								  <div class="clearfix">
									<span class="pull-left">Task #2</span>
									<small class="pull-right">70%</small>
								  </div>
								  <div class="progress xs">
									<div class="progress-bar progress-bar-green" style="width: 70%;"></div>
								  </div>
								</div><!-- /.col -->
								<div class="col-sm-6">
								  <div class="clearfix">
									<span class="pull-left">Task #3</span>
									<small class="pull-right">60%</small>
								  </div>
								  <div class="progress xs">
									<div class="progress-bar progress-bar-green" style="width: 60%;"></div>
								  </div>

								  <div class="clearfix">
									<span class="pull-left">Task #4</span>
									<small class="pull-right">40%</small>
								  </div>
								  <div class="progress xs">
									<div class="progress-bar progress-bar-green" style="width: 40%;"></div>
								  </div>
								</div><!-- /.col -->
							  </div><!-- /.row -->
							</div>
						  </div><!-- /.box -->

						</section><!-- right col -->
					  </div><!-- /.row (main row) -->
					

			 
						  <div class="chart">
							<canvas id="barChart" style="height:230px"></canvas>
						  </div>
				

			<?php } ?>


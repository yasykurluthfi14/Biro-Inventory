 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
	  <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Halaman Kepala Biro</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
						<style>
	* {
		margin: 0;
		padding: 0;
	}

	.container {
		width: 1024px;
		margin: 2em auto;

	}

	.slider-wrapper {
		width: 100%;
		height: 400px;
		position: relative;
	}

	.slide {
		float: left;
		position: absolute;
		width: 100%;
		height: 100%;
		opacity: 0;
		transition: opacity 3s linear;
	}

	.slider-wrapper>.slide:first-child {
		opacity: 1;
	}

	* {
		margin: 0;
		padding: 0;
	}

	.container {
		width: 1200px;
		margin: 2em auto;

	}

	.slider-wrapper {
		width: 100%;
		height: 400px;
		position: relative;
	}

	.slide {
		float: left;
		position: absolute;
		width: 100%;
		height: 100%;
		opacity: 0;
		transition: opacity 3s linear;
	}

	.slider-wrapper>.slide:first-child {
		opacity: 1;

	}
</style>

<div class="container" id="slider-utama">
	<div class="slider-wrapper">
		<img src="assets/img/1.jpg" class="slide" />
		<img src="assets/img/2.jpg" class="slide" />
		<img src="assets/img/3.jpg" class="slide" />
		<img src="" class="slide" />
	</div>
</div>


<script type="text/javascript">
	(function() {

		function Slideshow(element) {
			this.el = document.querySelector(element);
			this.init();
		}

		Slideshow.prototype = {
			init: function() {
				this.wrapper = this.el.querySelector(".slider-wrapper");
				this.slides = this.el.querySelectorAll(".slide");
				this.index = 0;
				this.total = this.slides.length;
				this.timer = null;

				this.action();
				this.stopStart();
			},
			_slideTo: function(slide) {
				var currentSlide = this.slides[slide];
				currentSlide.style.opacity = 1;

				for (var i = 0; i < this.slides.length; i++) {
					var slide = this.slides[i];
					if (slide !== currentSlide) {
						slide.style.opacity = 0;
					}
				}
			},
			action: function() {
				var self = this;
				self.timer = setInterval(function() {
					self.index++;
					if (self.index == self.slides.length) {
						self.index = 0;
					}
					self._slideTo(self.index);

				}, 3000);
			},
			stopStart: function() {
				var self = this;
				self.el.addEventListener("mouseover", function() {
					clearInterval(self.timer);
					self.timer = null;

				}, false);
				self.el.addEventListener("mouseout", function() {
					self.action();

				}, false);
			}


		};

		document.addEventListener("DOMContentLoaded", function() {

			var slider = new Slideshow("#slider-utama");

		});


	})();
</script>

<?php 
	require 'config.php';
	?>
	<h1 class="mt-4">Bar Chart Inventory dan Pengadaan</h1>

<div style="width: 800px;margin: 0px auto;"> 
<canvas id="myChart"></canvas>
</div>
                 
<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Inventory"],
				datasets: [{
					label: '##Dataset',
					data: [
					<?php 
					$inventory = $config->query("SELECT COUNT(*) FROM inventory_admin ");
					echo $inventory->fetchColumn();
					?>
					
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
						
                        
                       
                        </div>
                    </div>
                </main>
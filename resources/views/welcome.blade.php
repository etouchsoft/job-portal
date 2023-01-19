@extends('layouts.mylayout')
@section('content')
<div class="main-body" ng-app="angularTable">
            <div class="filteration-container">
               <a href=""> <img class="filter-icon" src="./assets/img/Path 48997.svg" alt="filter-icon" srcset=""></a>
               <ul class="list-of-choices">
                   <li><a href="" class="sort-choice sort-small">Date Modified</a></li>
                   <li><a href="" class="sort-choice sort-small">Date Modified</a></li>
                   <li><a href="" class="sort-choice sort-small">Date Modified</a></li>
                   <li><a href="" class="sort-choice sort-small">Date Modified</a></li>
                   <li><a href="" class="sort-choice sort-small">Date Modified</a></li>
                   <li><a href="" class="sort-choice sort-small">Date Modified</a></li>
                   <li><a href="" class="sort-choice sort-small">Date Modified</a></li>
                   <li><a href="" class="sort-choice sort-small">Date Modified</a></li>
                   <li><a href="" class="sort-choice sort-small">Date Modified</a></li>
               </ul>             
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <section class="header-title">
                            <h3 class=" title-h3">
                                1000+ Part Time Jobs in Dubai
                            </h3>
                            <p class="articl-p">
                                Browse 1654 jobs in Dubai
                            </p>
                            <div class="location-of-job show-small-sort">
                                <div>
                                <h6 class="job-found-location">Jobs in Dubai</h6>
                                </div>
                                <div>
                                <h6 class="sorting">sort by</h6>
                             
                                    <a href="" class="sort-choice active">Relvance</a>
                                    <img src="./assets/img/Group 15629.svg" alt="sort-icon-sm" srcset="" class="sort-icon-sm">
                                    
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-3 col-md-12">
                        <aside>
                            <div class="search-option-category">
                                <h5 class="search-title">
                                    Refine Search
                                </h5>
                                <label class="search-label">3 filter selected</label>
                                <a href="#" class="resetting"> Reset Filters</a>
                                <div class="sorting">
                                    <hr>
                                    <h5 class="search-title"> Sort By</h5>
                                    <div class="sort-choices">
                                        <a href="" class="sort-choice active">Relvance</a>
                                        <a href="" class="sort-choice">Date Modified</a>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <!-- By Industry -->
                            <div class="search-option-category">
                                <h5 class="search-title">
                                    <div class="info">
                                        <span>By Industry</span>
                                        <span class="choice-counter">3</span>
                                        <a href="#" class="resetting f-12 fl-right"> Reset</a>
                                    </div>
                                    <a class="coll" data-toggle="collapse" href="#industry" role="button"
                                        aria-expanded="false" aria-controls="industry">
                                        <img class="minus-btn" src="./assets//img/minus.svg" alt="minus-icon" srcset="">
                                        <img class="plus-btn" src="./assets/img/plus-1.svg" alt="plus-icon" srcset="">
                                       
                                    </a>
                                </h5>
                                <div class="collapse show" id="industry">
                                    <div class="checkbox-options">
                                        <div class="">
                                            <input type="checkbox" class="opt" checked> <label for="">Accounting
                                                (172)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt" checked> <label for="">AirLines
                                                (300)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt" checked> <label for="">Aviation
                                                (425)</label>
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="resetting more">View More</a>

                            </div>

                            <!-- By Job Title -->
                            <div class="search-option-category">
                                <h5 class="search-title">
                                    <div class="info">
                                        <span>By Job Title</span>
                                      
                                    </div>
                                    <a class="coll" data-toggle="collapse" href="#jobtitle" role="button"
                                        aria-expanded="false" aria-controls="jobtitle">
                                        <img class="minus-btn" src="./assets//img/minus.svg" alt="minus-icon" srcset="">
                                        <img class="plus-btn" src="./assets/img/plus-1.svg" alt="plus-icon" srcset="">
                                       
                                    </a>
                                </h5>
                                <div class="collapse show" id="jobtitle">
                                    <div class="checkbox-options">
                                        <div class="">
                                            <input type="checkbox" class="opt"> <label for="">Accountant (914)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Sales Executive
                                                (609)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Graphic Designer
                                                (444)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Project Manager
                                                (407)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Receptionist (404)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Project Manager
                                                (407)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- By Freshness  -->
                            <div class="search-option-category">
                                <h5 class="search-title">
                                    <div class="info">
                                        <span>By Freshness</span>
                                      
                                    </div>
                                    <a class="coll" data-toggle="collapse" href="#freshness" role="button"
                                        aria-expanded="false" aria-controls="freshness">
                                        <img class="minus-btn" src="./assets//img/minus.svg" alt="minus-icon" srcset="">
                                        <img class="plus-btn" src="./assets/img/plus-1.svg" alt="plus-icon" srcset="">
                                       
                                    </a>
                                </h5>
                                <div class="collapse show" id="freshness">
                                    <div class="checkbox-options">
                                        <div class="">
                                            <input type="checkbox" class="opt"> <label for="">Accountant (914)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Sales Executive
                                                (609)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Graphic Designer
                                                (444)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Project Manager
                                                (407)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Receptionist (404)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Project Manager
                                                (407)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- By Experience  -->
                            <div class="search-option-category">
                                <h5 class="search-title">
                                    <div class="info">
                                        <span>By Experience</span>
                                      
                                    </div>
                                    <a class="coll" data-toggle="collapse" href="#experience" role="button"
                                        aria-expanded="false" aria-controls="industry">
                                        <img class="minus-btn" src="./assets//img/minus.svg" alt="minus-icon" srcset="">
                                        <img class="plus-btn" src="./assets/img/plus-1.svg" alt="plus-icon" srcset="">
                                       
                                    </a>
                                </h5>
                                <div class="collapse show" id="experience">
                                    <div class="checkbox-options">
                                        <div class="">
                                            <input type="checkbox" class="opt"> <label for="">Accountant (914)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Sales Executive
                                                (609)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Graphic Designer
                                                (444)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Project Manager
                                                (407)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Receptionist (404)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Project Manager
                                                (407)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- By Gender  -->
                            <div class="search-option-category">
                                <h5 class="search-title">
                                    <div class="info">
                                        <span>By Gender</span>
                                      
                                    </div>
                                    <a class="coll" data-toggle="collapse" href="#gender" role="button"
                                        aria-expanded="false" aria-controls="industry">
                                        <img class="minus-btn" src="./assets//img/minus.svg" alt="minus-icon" srcset="">
                                        <img class="plus-btn" src="./assets/img/plus-1.svg" alt="plus-icon" srcset="">
                                       
                                    </a>
                                </h5>
                                <div class="collapse show" id="gender">
                                    <div class="checkbox-options">
                                        <div class="">
                                            <input type="checkbox" class="opt"> <label for="">Accountant (914)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Sales Executive
                                                (609)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Graphic Designer
                                                (444)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Project Manager
                                                (407)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Receptionist (404)</label>
                                        </div>
                                        <div class="option-checkbox">
                                            <input type="checkbox" class="opt"> <label for="">Project Manager
                                                (407)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- By Monthly salary  -->
                            <div class="search-option-category">
                                <h5 class="search-title">
                                    <div class="info">
                                        <span>By Monthly Salary</span>
                                      
                                    </div>
                                    <a class="coll" data-toggle="collapse" href="#monthlysalary" role="button"
                                        aria-expanded="false" aria-controls="monthlysalary">
                                        <img class="minus-btn" src="./assets//img/minus.svg" alt="minus-icon" srcset="">
                                        <img class="plus-btn" src="./assets/img/plus-1.svg" alt="plus-icon" srcset="">
                                       
                                    </a>
                                </h5>
                                <div class="collapse show" id="monthlysalary">
                                    <div class="checkbox-options">
                                        <div class="">
                                            <input type="checkbox" class="opt" checked> <label for="">GCC Nationals
                                                (425)</label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- By Nationality  -->
                            <div class="search-option-category">
                                <h5 class="search-title">
                                    <div class="info">
                                        <span>By Nationality</span>
                                      
                                    </div>
                                    <a class="coll" data-toggle="collapse" href="#nationality" role="button"
                                        aria-expanded="false" aria-controls="nationality">
                                        <img class="minus-btn" src="./assets//img/minus.svg" alt="minus-icon" srcset="">
                                        <img class="plus-btn" src="./assets/img/plus-1.svg" alt="plus-icon" srcset="">
                                       
                                    </a>
                                </h5>
                                <div class="collapse show" id="nationality">
                                    <div class="checkbox-options">
                                        <div class="">
                                            <input type="checkbox" class="opt" checked> <label for="">GCC Nationals
                                                (425)</label>
                                        </div>

                                    </div>
                                </div>
                                <a href="" class="resetting more">View More</a>
                            </div>
                        </aside>
                    </div>


                    <!-- End of Aside left  -->

		
                    <div class="col-lg-9 col-md-12 col-sm-12 sm-fullwidth" ng-controller="listdata as data" >

                        <div class="search-form">
                            <div class="search-input">
                                <img src="assets/img/Group 13107.svg" class="form-icon" alt="" srcset="">
                                <input type="text" class="searchTerm right-border" placeholder="location">
                            </div>
                            <div class="search-input">
                                <img src="assets/img/Group 13107.svg" class="form-icon" alt="" srcset="">
                                <input type="text" class="searchTerm" class="form-icon" placeholder="location">
                            </div>
                            <button class="search-submit">Search</button>
                        </div>
                        <!-- End of Search form -->
                        <!-- Job -->
						<div ng-if="data.items.length <= 0">
                        <section class="job-box " ng-repeat="i in data.loderItems">
                            <div class="job-info">
								<div class="title-job-company ">
									<p class="background-loader hw20x80per "> </p>
									<span class="desc">
									<h4 class="company-name background-loader hw20xfull"></h4>
									<p class="post-time show-small"></p>
									<div class="more-details">
										<ul>
											<li><span class="background-loader hw20x100per ">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</span></li>
											<li><span class="small-desc background-loader hw20x100per"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</span></li>
										</ul>
									</div>
								</div>
								<div class="info-favourite">
									<div class="time-like">
										<p class="post-time hide-small background-loader hw10xfull"></p>
									</div>
								   <div class="company-logo">
									   <p class="background-loader hw50xfull"></p>
								   </div>
								</div>
							</div>
							<div class="short-description">
								<p class="description-p background-loader hw20xfull"></p>
								<p class="description-p background-loader hw20xfull"></p>
							</div>
                        </section>
						</div>
                        <!-- Job -->
						<section class="job-box " ng-repeat="item in data.items">
                            <div class="job-info">
                            <div class="title-job-company">
                                <h4 class="job"> @{{ item.job_title }}</h4>
                                <span class="desc">
                                <img src="./assets/img/Path 49046.svg" alt="right-mark" srcset=""> @{{ item.job_type_lable }}</span>
                                <h4 class="company-name">@{{ item.company_name }}</h4>
                                <p class="post-time show-small">@{{ item.created_tz }}</p>

                                <div class="more-details">
                                    <ul>
                                        <li><img src="./assets/img/Group 11462.svg" alt="time-icon" srcset=""><span class="small-desc">@{{ item.experience }}</span></li>
                                        <li><img src="./assets/img/Coin.svg" alt="dolar-coin" srcset=""><span class="small-desc"> @{{ item.salary }}</span></li>
                                    </ul>
                                </div>
                                

                            </div>
                            <div class="info-favourite">
                                <div class="time-like">
                                    <p class="post-time hide-small">@{{ item.created_tz }}</p>
                                    <img src="./assets//img/Saved-3.svg" alt="star-icon" class="ml-15">
                                </div>
                               <div class="company-logo">
                                   <img src="./assets/img/architecture-1.svg" alt="Fedex-job">
                               </div>
                            </div>
                            

                                                            
                        </div>
                        <div class="short-description">
                            <p class="description-p">@{{ item.description }}</p>
                        </div>
                        </section>
						
                        <!-- Job -->
                        <!-- Pagination -->
                        <div class="pagination">
                            <ul class="pages">
                                <li class="page-number" ng-repeat="item in data.page_ob">
									<span ng-if="item.is_enable == 0 && item.is_active !=1" class="nav-page" ng-class="{'active' : item.is_active , 'diasbled' : (item.is_enable ==0)}">@{{ item.lable}}</span>
									<a ng-if="item.is_enable == 1 || item.is_active ==1" ng-click="goToPage(item.val)" class="nav-page" ng-class="{'active' : item.is_active , 'diasbled' : (item.is_enable ==0)}" href="javascript:void(0)">@{{ item.lable}}</a>
								</li>
							</ul>
                        </div>
                        <div class="load-more">
                            <div class="">
                                <button class="load"  >Load More</button>
                            </div>
                        </div>
                            
                            <div class="pagination-mobile">
                                <ul class="pages">
                                    <li class="page-number"><span class="diasbled"> << </span></li>
                                    <li class="page-number"><span class="nav-page diasbled"> < </span></li>
                                    <li class="page-number"><a class="nav-page active" href="">1</a></li>
                                    <li class="page-number"><a class="nav-page" href="">2</a></li>
                                    <li class="page-number"><a class="nav-page" href="">3</a></li>
                                    <li class="page-number"><a class="nav-page" href="">4</a></li>
                                    <li class="page-number"><span class="nav-page diasbled">...</span></li>
                                    <li class="page-number"><a class="nav-page" href=""> > </a></li>
                                    <li class="page-number"><a class="nav-page" href=""> >></a></li>
                                </ul>
                                
                            </div>
                            <div class="bread-crumb sm-bc">
                                <span class="active-span">Home / Job Search /</span ><span class="non-active-span"> Jobs In Dubai</span>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
		
<script>
var app = angular.module('angularTable', []);

app.controller('listdata',function($scope,$http){
	var vm = this;
	vm.loderItems = [1,2,3,4,5,6]; 
	vm.items = []; //declare an empty array
	vm.page_ob = []; //declare an empty array
	
	vm.getData = function(pageno){ // This would fetch the data on page change.
		vm.items = []; // Make empty to show the loaders
		//In practice this should be in a factory.
		$http.get("{{ url('api/v1.0/find-jobs')}}?page="+pageno).then(function(response){ 
			vm.items = response.data.data.data;  //ajax request to fetch data into vm.data
			vm.page_ob = response.data.data.page_ob;
			vm.total_count = response.total_count;
		},function (error){
			console.log(error);
		});
	};
	$scope.goToPage = function(page){
        vm.getData(page);
    }
	vm.getData(vm.pageno); // Call the function to fetch initial data on page load.
});
</script>
@endsection		








<div class="content-wrapper" style="min-height: 195px;">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 style="font-weight: 900;color: orange !important" class="m-0 text-dark">Statistics</h1>
            </div>
            <div class="col-sm-6">

            </div>
          </div>
        </div>
      </div>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6">
              <div class="small-box " style="background-color: black; color:#fff">
                <div class="inner">
                <h3><?php echo $data['totalProduct'][0]["count(*)"] ?></h3>
                  <p>Tổng sản phẩm</p>
                </div>
                <div class="icon">
                  <i style="color: orange;" class="ion ion-bag"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="small-box " style="background-color: black;color:#fff">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
                  <p>Tổng số hóa đơn</p>
                </div>
                <div class="icon">
                  <i style="color: orange;" class="ion ion-stats-bars"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="small-box " style="background-color: black;color:#fff">
                <div class="inner">
                <h3><?php echo $data['totalUser'][0]["count(*)"] ?></h3>
                  <p>Tổng số User</p>
                </div>
                <div class="icon">
                  <i style="color: orange;" class="ion ion-person-add"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="small-box " style="background-color: black;color:#fff">
                <div class="inner">
                  <h3>65</h3>
                  <p>Tổng doanh thu</p>
                </div>
                <div class="icon">
                  <i style="color: orange;" class="ion ion-pie-graph"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="card bg-gradient-success">
        <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
          <h3 class="card-title">
            <i class="far fa-calendar-alt"></i>
            Calendar
          </h3>
          <div class="card-tools">
            <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body pt-0">
          <div id="calendar" style="width: 100%">
            <div class="bootstrap-datetimepicker-widget usetwentyfour">
              <ul class="list-unstyled">
                <li class="show">
                  <div class="datepicker">
                    <div class="datepicker-days" style="">
                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th>
                            <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">May 2021</th>
                            <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th>
                          </tr>
                          <tr>
                            <th class="dow">Su</th>
                            <th class="dow">Mo</th>
                            <th class="dow">Tu</th>
                            <th class="dow">We</th>
                            <th class="dow">Th</th>
                            <th class="dow">Fr</th>
                            <th class="dow">Sa</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td data-action="selectDay" data-day="04/25/2021" class="day old weekend">25</td>
                            <td data-action="selectDay" data-day="04/26/2021" class="day old">26</td>
                            <td data-action="selectDay" data-day="04/27/2021" class="day old">27</td>
                            <td data-action="selectDay" data-day="04/28/2021" class="day old">28</td>
                            <td data-action="selectDay" data-day="04/29/2021" class="day old">29</td>
                            <td data-action="selectDay" data-day="04/30/2021" class="day old">30</td>
                            <td data-action="selectDay" data-day="05/01/2021" class="day weekend">1</td>
                          </tr>
                          <tr>
                            <td data-action="selectDay" data-day="05/02/2021" class="day weekend">2</td>
                            <td data-action="selectDay" data-day="05/03/2021" class="day">3</td>
                            <td data-action="selectDay" data-day="05/04/2021" class="day">4</td>
                            <td data-action="selectDay" data-day="05/05/2021" class="day">5</td>
                            <td data-action="selectDay" data-day="05/06/2021" class="day">6</td>
                            <td data-action="selectDay" data-day="05/07/2021" class="day">7</td>
                            <td data-action="selectDay" data-day="05/08/2021" class="day weekend">8</td>
                          </tr>
                          <tr>
                            <td data-action="selectDay" data-day="05/09/2021" class="day weekend">9</td>
                            <td data-action="selectDay" data-day="05/10/2021" class="day">10</td>
                            <td data-action="selectDay" data-day="05/11/2021" class="day">11</td>
                            <td data-action="selectDay" data-day="05/12/2021" class="day">12</td>
                            <td data-action="selectDay" data-day="05/13/2021" class="day">13</td>
                            <td data-action="selectDay" data-day="05/14/2021" class="day">14</td>
                            <td data-action="selectDay" data-day="05/15/2021" class="day weekend">15</td>
                          </tr>
                          <tr>
                            <td data-action="selectDay" data-day="05/16/2021" class="day weekend">16</td>
                            <td data-action="selectDay" data-day="05/17/2021" class="day">17</td>
                            <td data-action="selectDay" data-day="05/18/2021" class="day">18</td>
                            <td data-action="selectDay" data-day="05/19/2021" class="day">19</td>
                            <td data-action="selectDay" data-day="05/20/2021" class="day">20</td>
                            <td data-action="selectDay" data-day="05/21/2021" class="day">21</td>
                            <td data-action="selectDay" data-day="05/22/2021" class="day weekend">22</td>
                          </tr>
                          <tr>
                            <td data-action="selectDay" data-day="05/23/2021" class="day weekend">23</td>
                            <td data-action="selectDay" data-day="05/24/2021" class="day">24</td>
                            <td data-action="selectDay" data-day="05/25/2021" class="day">25</td>
                            <td data-action="selectDay" data-day="05/26/2021" class="day">26</td>
                            <td data-action="selectDay" data-day="05/27/2021" class="day">27</td>
                            <td data-action="selectDay" data-day="05/28/2021" class="day">28</td>
                            <td data-action="selectDay" data-day="05/29/2021" class="day weekend">29</td>
                          </tr>
                          <tr>
                            <td data-action="selectDay" data-day="05/30/2021" class="day weekend">30</td>
                            <td data-action="selectDay" data-day="05/31/2021" class="day active today">31</td>
                            <td data-action="selectDay" data-day="06/01/2021" class="day new">1</td>
                            <td data-action="selectDay" data-day="06/02/2021" class="day new">2</td>
                            <td data-action="selectDay" data-day="06/03/2021" class="day new">3</td>
                            <td data-action="selectDay" data-day="06/04/2021" class="day new">4</td>
                            <td data-action="selectDay" data-day="06/05/2021" class="day new weekend">5</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="datepicker-months" style="display: none;">
                      <table class="table-condensed">
                        <thead>
                          <tr>
                            <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th>
                            <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2021</th>
                            <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month active">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="datepicker-years" style="display: none;">
                      <table class="table-condensed">
                        <thead>
                          <tr>
                            <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th>
                            <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th>
                            <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year active">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="datepicker-decades" style="display: none;">
                      <table class="table-condensed">
                        <thead>
                          <tr>
                            <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th>
                            <th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th>
                            <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade active" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </li>
                <li class="picker-switch accordion-toggle"></li>
              </ul>
            </div>
          </div>
        </div>
       
      </div>
    
    </div>
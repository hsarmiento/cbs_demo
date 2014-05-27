<div class="container">
        <div class="row">
                <div class="col-lg-10 col-sm-8 col-xs-12 col-md-11">
                        <h2>Mayo</h2>
                </div>
        </div>
        <div class="row">
                <div class="col-lg-10 col-sm-8 col-xs-12 col-md-11">
                        &nbsp;
                </div>
                <div class="col-lg-10 col-sm-8 col-xs-12 col-md-11">
                        <div id="attendance_chart">
                                <div class="btn-group" data-toggle="buttons-radio">
                                  <button type="button" class="btn active">Mensual</button>
                                  <button type="button" class="btn">Semanal</button>
                                </div>
                                <ul class="pager">
                                  <li class="previous">
                                    <a href="#">&larr; Atrás</a>
                                  </li>
                                  <li class="next">
                                    <a href="#">Siguiente &rarr;</a>
                                  </li>
                                </ul>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-condensed calendar">
                                            <thead>
                                                    <tr>
                                                            <th>Lunes</th>
                                                            <th>Martes</th>
                                                            <th>Miércoles</th>
                                                            <th>Jueves</th>
                                                            <th>Viernes</th>
                                                            <th>Sábado</th>
                                                            <th>Domingo</th>
                                                    </tr>           
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <td>Curso 1</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Curso 1</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Curso 1</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Curso 1</td>
                                                    </tr>   
                                            </tbody>
                                    </table>
                                </div>
                        </div>
                </div>
        </div>
</div>

 <script type="text/javascript">
        $(document).ready(function(){
                $("#attendance_chart").calendarGrid({
                        eventFrequency: "2",
                        debugMode:              true,
                        startDate:              '25-11-2012',
                        endDate:                '05-01-2013',
                        weekStart:              '1',
                        hoverActions:   true,
                        sAjaxSource: ''
                });
        });
        </script>
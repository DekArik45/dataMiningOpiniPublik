
function getPost(listGroupItemElementTwitter, listGroupItemElementFB, listGroupItemElementIG, searchBtnClassElement, keyword, tgl_dari, tgl_sampai, count) {
    var lada = Ladda.create(document.querySelector(searchBtnClassElement));
    lada.start();
    lada.setProgress(0.0);
    htmlTwitter = "";
    htmlFb = "";
    htmlIG = "";
    positifTwitter = 0;
    negatifTwitter = 0;
    netralTwitter = 0;
    positifFb = 0;
    negatifFb = 0;
    netralFb = 0;
    positifIg = 0;
    negatifIg = 0;
    netralIg = 0;
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '/get-data-post',
        data: {
            'keyword': keyword,
            'tgl_dari': tgl_dari,
            'tgl_sampai': tgl_sampai,
            'jumlah_data': count
        },
        success: function (data) {

            // id_sosmed 0,id_post_sosmed 1,username 2,foto_profile 3,tanggal 4,jam 5,"lokasi " 6,content 7,like 8,dislike 9,share 10, sentiment 11,sentiment 12, nilai_sentiment 13
            // $(searchBtnClassElement).html(data.msg);
            
            data['dataTwitter'].forEach(value => {
              $color = "#757575";
              if (value['sentiment']=="Positif") {
                $color = "#00a65a";
              }
              
              else if (value['sentiment'] == "Negatif") {
                $color = "#f56954";
              }
              
              htmlTwitter += '<li class="list-group-item">'+
              '<div class="media">'+
                '<div class="pr-0 pr-sm-20 align-self-center">'+
                  '<div class="avatar avatar-online">'+
                    '<img src="'+value['foto_profile']+'" alt="...">'+
                    '<i class="avatar avatar-busy"></i>'+
                  '</div>'+
                '</div>'+
                '<div class="media-body align-self-center">'+
                  '<h5 class="mt-0 mb-5" style="display:inline-block;">'+
                    value['username']+
                  '</h5>'+
                  '<p style="float:right; display:inline-block;">'+
                    '<small>'+ value['tanggal'] +'</small> &nbsp&nbsp&nbsp&nbsp <small>'+value['jam']+'</small></p>'+
                  '<pre style="width: 100%;border: 0px;overflow-x: hidden !important; white-space: pre-wrap;white-space: -moz-pre-wrap; white-space: -pre-wrap; white-space: -o-pre-wrap; word-wrap: break-word;"><p class="content-post">'+ value['content'] +' </p></pre>'+
                  '<p>'+
                    '<i class="icon icon-color md-pin" aria-hidden="true"></i>'+
                    value['lokasi']+
                  '</p>'+
                    '<i class="icon icon-color md-thumb-up" aria-hidden="true"></i>'+
                    value['like']+
                '</div>'+
                '<div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">'+
                  '<button type="button" onclick="createTrack('+value['id_post']+', '+value['status_tracking']+');" style="width: 100%;" class="btn btn-primary btn-sm '+(value['status_tracking'] == 1 ? "active": "")+'" data-toggle="button">'+
                    '<i class="icon md-tag text" aria-hidden="true"></i>'+
                    '<span class="text">Track</span>'+
                    '<i class="icon md-check text-active" aria-hidden="true"></i>'+
                    '<span class="text-active">Tracked</span>'+
                  '</button>'+
                  '<div style="margin:10px; text-align: center;">'+
                    '<p style="font-size:12px; margin-bottom:-5px;">Sentiment</p>'+
                    '<p style="font-size:25px; font-weight: bold;color:'+$color+';"> '+value['sentiment']+' '+ value['nilai_sentiment'].toFixed(3)+'</p>'+
                  '</div>'+
                '</div>'+
              '</div>'+
              '<div class="example">'+
              '<div class="panel-group panel-group-simple mb-0" id="exampleAccordion" aria-multiselectable="true" role="tablist">'+
                '<div class="panel">'+
                  '<div class="panel-heading" id="exampleHeadingThree" role="tab">'+
                    '<a class="panel-title collapsed" data-parent="#exampleAccordion" data-toggle="collapse" href="#exampleCollapseThree" aria-controls="exampleCollapseThree" aria-expanded="false">'+
                    'Tampilkan Media'+
                  '</a>'+
                  '</div>'+
                  '<div class="panel-collapse collapse" id="exampleCollapseThree" aria-labelledby="exampleHeadingThree" role="tabpanel">'+
                    '<div class="panel-body">'+
                      '<div class="w3-content w3-display-container" style="max-width:800px">'+
                        // 'data image'
                        '<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">'+
                          '<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>'+
                          '<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>'+
                          '<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>'+
                        '</div>'+
                        '<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-middle" style="width:100%">'+
                          '<div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>'+
                          '<div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>'+
                        '</div>'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
                '</div>'+
              '</div>'+
            '</div>'+
            '</li>';

                    if (value['sentiment'] == "Positif") {
                        positifTwitter += 1;
                    }
                    else if (value['sentiment'] == "Negatif") {
                        negatifTwitter += 1;
                    }
                    else{
                        netralTwitter += 1;
                    }
            });

            data['dataFacebook'].forEach(value => {
              $color = "#757575";
              if (value['sentiment']=="Positif") {
                $color = "#00a65a";
              }
              
              else if (value['sentiment'] == "Negatif") {
                $color = "#f56954";
              }
              
              htmlFb += '<li class="list-group-item">'+
              '<div class="media">'+
                '<div class="pr-0 pr-sm-20 align-self-center">'+
                  '<div class="avatar avatar-online">'+
                    '<img src="'+value['foto_profile']+'" alt="...">'+
                    '<i class="avatar avatar-busy"></i>'+
                  '</div>'+
                '</div>'+
                '<div class="media-body align-self-center">'+
                  '<h5 class="mt-0 mb-5" style="display:inline-block;">'+
                    value['username']+
                  '</h5>'+
                  '<p style="float:right; display:inline-block;">'+
                    '<small>'+ value['tanggal'] +'</small> &nbsp&nbsp&nbsp&nbsp <small>'+value['jam']+'</small></p>'+
                  '<pre style="width: 100%;border: 0px;overflow-x: hidden !important; white-space: pre-wrap;white-space: -moz-pre-wrap; white-space: -pre-wrap; white-space: -o-pre-wrap; word-wrap: break-word;"><p class="content-post">'+ value['content'] +' </p></pre>'+
                  '<p>'+
                    '<i class="icon icon-color md-pin" aria-hidden="true"></i>'+
                    value['lokasi']+
                  '</p>'+
                    '<i class="icon icon-color md-thumb-up" aria-hidden="true"></i>'+
                    value['like']+
                '</div>'+
                '<div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">'+
                  '<button type="button" onclick="createTrack('+value['id_post']+', '+value['status_tracking']+');" style="width: 100%;" class="btn btn-primary btn-sm '+(value['status_tracking'] == 1 ? "active": "")+'" data-toggle="button">'+
                    '<i class="icon md-tag text" aria-hidden="true"></i>'+
                    '<span class="text">Track</span>'+
                    '<i class="icon md-check text-active" aria-hidden="true"></i>'+
                    '<span class="text-active">Tracked</span>'+
                  '</button>'+
                  '<div style="margin:10px; text-align: center;">'+
                    '<p style="font-size:12px; margin-bottom:-5px;">Sentiment</p>'+
                    '<p style="font-size:25px; font-weight: bold;color:'+$color+';"> '+value['sentiment']+' '+ value['nilai_sentiment'].toFixed(3)+'</p>'+
                  '</div>'+
                '</div>'+
              '</div>'+
              '<div class="example">'+
              '<div class="panel-group panel-group-simple mb-0" id="exampleAccordion" aria-multiselectable="true" role="tablist">'+
                '<div class="panel">'+
                  '<div class="panel-heading" id="exampleHeadingThree" role="tab">'+
                    '<a class="panel-title collapsed" data-parent="#exampleAccordion" data-toggle="collapse" href="#exampleCollapseThree" aria-controls="exampleCollapseThree" aria-expanded="false">'+
                    'Tampilkan Media'+
                  '</a>'+
                  '</div>'+
                  '<div class="panel-collapse collapse" id="exampleCollapseThree" aria-labelledby="exampleHeadingThree" role="tabpanel">'+
                    '<div class="panel-body">'+
                      '<div class="w3-content w3-display-container" style="max-width:800px">'+
                        // 'data image'
                        '<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">'+
                          '<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>'+
                          '<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>'+
                          '<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>'+
                        '</div>'+
                        '<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-middle" style="width:100%">'+
                          '<div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>'+
                          '<div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>'+
                        '</div>'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
                '</div>'+
              '</div>'+
            '</div>'+
            '</li>';

                    if (value['sentiment'] == "Positif") {
                      positifFb += 1;
                    }
                    else if (value['sentiment'] == "Negatif") {
                        negatifFb += 1;
                    }
                    else{
                        netralFb += 1;
                    }
            });

            data['dataInstagram'].forEach(value => {
              $color = "#757575";
              if (value['sentiment']=="Positif") {
                $color = "#00a65a";
              }
              
              else if (value['sentiment'] == "Negatif") {
                $color = "#f56954";
              }
              
              htmlIG += '<li class="list-group-item">'+
              '<div class="media">'+
                '<div class="pr-0 pr-sm-20 align-self-center">'+
                  '<div class="avatar avatar-online">'+
                    '<img src="'+value['foto_profile']+'" alt="...">'+
                    '<i class="avatar avatar-busy"></i>'+
                  '</div>'+
                '</div>'+
                '<div class="media-body align-self-center">'+
                  '<h5 class="mt-0 mb-5" style="display:inline-block;">'+
                    value['username']+
                  '</h5>'+
                  '<p style="float:right; display:inline-block;">'+
                    '<small>'+ value['tanggal'] +'</small> &nbsp&nbsp&nbsp&nbsp <small>'+value['jam']+'</small></p>'+
                  '<pre style="width: 100%;border: 0px;overflow-x: hidden !important; white-space: pre-wrap;white-space: -moz-pre-wrap; white-space: -pre-wrap; white-space: -o-pre-wrap; word-wrap: break-word;"><p class="content-post">'+ value['content'] +' </p></pre>'+
                  '<p>'+
                    '<i class="icon icon-color md-pin" aria-hidden="true"></i>'+
                    value['lokasi']+
                  '</p>'+
                    '<i class="icon icon-color md-thumb-up" aria-hidden="true"></i>'+
                    value['like']+
                '</div>'+
                '<div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">'+
                  '<button type="button" onclick="createTrack('+value['id_post']+', '+value['status_tracking']+');" style="width: 100%;" class="btn btn-primary btn-sm '+(value['status_tracking'] == 1 ? "active": "")+'" data-toggle="button">'+
                    '<i class="icon md-tag text" aria-hidden="true"></i>'+
                    '<span class="text">Track</span>'+
                    '<i class="icon md-check text-active" aria-hidden="true"></i>'+
                    '<span class="text-active">Tracked</span>'+
                  '</button>'+
                  '<div style="margin:10px; text-align: center;">'+
                    '<p style="font-size:12px; margin-bottom:-5px;">Sentiment</p>'+
                    '<p style="font-size:25px; font-weight: bold;color:'+$color+';"> '+value['sentiment']+' '+ value['nilai_sentiment'].toFixed(3)+'</p>'+
                  '</div>'+
                '</div>'+
              '</div>'+
              '<div class="example">'+
              '<div class="panel-group panel-group-simple mb-0" id="exampleAccordion" aria-multiselectable="true" role="tablist">'+
                '<div class="panel">'+
                  '<div class="panel-heading" id="exampleHeadingThree" role="tab">'+
                    '<a class="panel-title collapsed" data-parent="#exampleAccordion" data-toggle="collapse" href="#exampleCollapseThree" aria-controls="exampleCollapseThree" aria-expanded="false">'+
                    'Tampilkan Media'+
                  '</a>'+
                  '</div>'+
                  '<div class="panel-collapse collapse" id="exampleCollapseThree" aria-labelledby="exampleHeadingThree" role="tabpanel">'+
                    '<div class="panel-body">'+
                      '<div class="w3-content w3-display-container" style="max-width:800px">'+
                        // 'data image'
                        '<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">'+
                          '<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>'+
                          '<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>'+
                          '<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>'+
                        '</div>'+
                        '<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-middle" style="width:100%">'+
                          '<div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>'+
                          '<div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>'+
                        '</div>'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
                '</div>'+
              '</div>'+
            '</div>'+
            '</li>';

                    if (value['sentiment'] == "Positif") {
                        positifIg += 1;
                    }
                    else if (value['sentiment'] == "Negatif") {
                        negatifIg += 1;
                    }
                    else{
                        netralIg += 1;
                    }
            });

            document.querySelector(listGroupItemElementTwitter).innerHTML = htmlTwitter;
            document.querySelector(listGroupItemElementFB).innerHTML = htmlFb;
            document.querySelector(listGroupItemElementIG).innerHTML = htmlIG;

            chart(negatifTwitter,netralTwitter,positifTwitter,negatifFb, netralFb, positifFb, negatifIg, netralIg, positifIg);
            lada.stop();
            lada.remove();
        }
    });
}

function createTrack(idPost, statusTracking) {
  if (statusTracking == 1) {
    statusTracking = 0;
  }
  else{
    statusTracking = 1;
  }
  $.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    type: 'POST',
    url: '/update-tracking-from-index',
    data: {
        'id_post': idPost,
        'status_tracking' : statusTracking
    },
    success: function (data) {
      if (statusTracking == 0) {
        alert("delete tracking");
      }
      else{
        alert("berhasil membuat tracking");
      }
    }
  });
}


function chart(twitterNegatif, twitterNetral, twitterPositif, FbNegatif, FbNetral, FbPositif, IgNegatif, IgNetral, IgPositif) {
  
    $(function () {
      var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
      var areaChartData = {
        labels  : ['Positif', 'Negatif', 'Netral'],
        datasets: [
          {
            label               : 'Facebook',
            backgroundColor     : 'rgba(59,89,152,0.9)',
            borderColor         : 'rgba(59,89,152,0.8)',
            pointRadius         : false,
            pointColor          : '#3b5998',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [FbPositif, FbNegatif, FbNetral]
          },
          {
            label               : 'Instagram',
            backgroundColor     : 'rgba(210, 214, 222, 1)',
            borderColor         : 'rgba(210, 214, 222, 1)',
            pointRadius         : false,
            pointColor          : 'rgba(210, 214, 222, 1)',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : [IgPositif, IgNegatif, IgNetral]
          },
          {
            label               : 'Twitter',
            backgroundColor     : 'rgba(85,172,238,0.9)',
            borderColor         : 'rgba(85,172,238,0.8)',
            pointRadius          : false,
            pointColor          : '#55acee',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [twitterPositif, twitterNegatif, twitterNetral]
          },
        ]
      }
  
      var areaChartOptions = {
        maintainAspectRatio : false,
        responsive : true,
        legend: {
          display: false
        },
        scales: {
          xAxes: [{
            gridLines : {
              display : false,
            }
          }],
          yAxes: [{
            gridLines : {
              display : false,
            }
          }]
        }
      }
      var areaChart       = new Chart(areaChartCanvas, { 
        type: 'line',
        data: areaChartData, 
        options: areaChartOptions
      })
      var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
      var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
      var lineChartData = jQuery.extend(true, {}, areaChartData)
      lineChartData.datasets[0].fill = false;
      lineChartData.datasets[1].fill = false;
      lineChartOptions.datasetFill = false
  
      var lineChart = new Chart(lineChartCanvas, { 
        type: 'line',
        data: lineChartData, 
        options: lineChartOptions
      })
      var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
      var donutDataTwitter        = {
        labels: [
            'Positif', 
            'Negatif',
            'Netral', 
        ],
        datasets: [
          {
            data: [twitterPositif,twitterNegatif,twitterNetral],
            backgroundColor : ['#00a65a', '#f56954', '#d2d6de'],
          }
        ]
      }
  
      var donutDataFb        = {
        labels: [
            'Positif', 
            'Negatif',
            'Netral', 
        ],
        datasets: [
          {
            data: [FbPositif,FbNegatif,FbNetral],
            backgroundColor : ['#00a65a', '#f56954', '#d2d6de'],
          }
        ]
      }
  
      var donutDataIg        = {
        labels: [
            'Positif', 
            'Negatif',
            'Netral', 
        ],
        datasets: [
          {
            data: [IgPositif,IgNegatif,IgNetral],
            backgroundColor : ['#00a65a', '#f56954', '#d2d6de'],
          }
        ]
      }
  
      var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutDataFb,
        options: donutOptions      
      })
      var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
      var pieData        = donutDataFb;
      var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      var pieChart = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions      
      })
      var pieChartCanvas = $('#pieChart2').get(0).getContext('2d')
      var pieData        = donutDataIg;
      var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      var pieChart2 = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions      
      })
      var pieChartCanvas = $('#pieChart3').get(0).getContext('2d')
      var pieData        = donutDataTwitter;
      var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      var pieChart3 = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions      
      })
      var barChartCanvas = $('#barChart').get(0).getContext('2d')
      var barChartData = jQuery.extend(true, {}, areaChartData)
      var temp0 = areaChartData.datasets[0]
      var temp1 = areaChartData.datasets[1]
      var temp2 = areaChartData.datasets[2]
      barChartData.datasets[0] = temp0
      barChartData.datasets[1] = temp1
      barChartData.datasets[2] = temp2
  
      var barChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        datasetFill             : false
      }
  
      var barChart = new Chart(barChartCanvas, {
        type: 'bar', 
        data: barChartData,
        options: barChartOptions
      })
  
    })
  
}

function getPost(listGroupItemElement, searchBtnClassElement, keyword, tgl_dari, tgl_sampai, count) {
    var lada = Ladda.create(document.querySelector(searchBtnClassElement));
    lada.start();
    lada.setProgress(0.0);
    html = "";
    positif = 0;
    negatif = 0;
    netral = 0;
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
            data.forEach(value => {
              $color = "#757575";
              if (value['sentiment']=="Positif") {
                $color = "#00a65a";
              }
              else if (value['sentiment'] == "Negatif") {
                $color = "#f56954";
              }
              html += '<li class="list-group-item">'+
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
                  '<pre style="width: 100%;border: 0px;overflow-x: hidden !important; white-space: pre-wrap;white-space: -moz-pre-wrap; white-space: -pre-wrap; white-space: -o-pre-wrap; word-wrap: break-word;"><p class="content-post"> '+ value['content'] +' </p></pre>'+
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
                  // '<button type="button" class="btn btn-success btn-sm" data-toggle="button">'+
                  //   '<i class="icon md-book text" aria-hidden="true"></i>'+
                  //   '<span class="text">Pin</span>'+
                  //   '<i class="icon md-bookmark text-active" aria-hidden="true"></i>'+
                  //   '<span class="text-active">Unpin</span>'+
                  // '</button>'+
                  '<div style="margin:10px; text-align: center;">'+
                    '<p style="font-size:12px; margin-bottom:-5px;">Sentiment</p>'+
                    '<p style="font-size:25px; font-weight: bold;color:'+$color+';"> '+value['sentiment']+' '+value['nilai_sentiment'].toFixed(3)+'</p>'+
                  '</div>'+
                '</div>'+
              '</div>'+
            '</li>';

                    if (value['sentiment'] == "Positif") {
                        positif += 1;
                    }
                    else if (value['sentiment'] == "Negatif") {
                        negatif += 1;
                    }
                    else{
                        netral += 1;
                    }
            });
            document.querySelector(listGroupItemElement).innerHTML = html;
            chart(negatif,netral,positif);
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
      alert("berhasil update");
    }
  });
}


function chart(twitterNegatif, twitterNetral, twitterPositif) {
  
    $(function () {
      /* ChartJS
      * -------
      * Here we will create a few charts using ChartJS
      */
  
      //--------------
      //- AREA CHART -
      //--------------
  
      // Get context with jQuery - using jQuery's .get() method.
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
            data                : [0, 0, 0]
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
            data                : [0, 0, 0]
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
  
      // This will get the first returned node in the jQuery collection.
      var areaChart       = new Chart(areaChartCanvas, { 
        type: 'line',
        data: areaChartData, 
        options: areaChartOptions
      })
  
      //-------------
      //- LINE CHART -
      //--------------
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
  
      //-------------
      //- DONUT CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
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
            data: [0,0,0],
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
            data: [0,0,0],
            backgroundColor : ['#00a65a', '#f56954', '#d2d6de'],
          }
        ]
      }
  
      var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var donutChart = new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutDataFb,
        options: donutOptions      
      })
  
      //-------------
      //- PIE CHART 1 -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
      var pieData        = donutDataFb;
      var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var pieChart = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions      
      })
  
      //-------------
      //- PIE CHART 2 -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var pieChartCanvas = $('#pieChart2').get(0).getContext('2d')
      var pieData        = donutDataIg;
      var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var pieChart2 = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions      
      })
  
      //-------------
      //- PIE CHART 3 -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var pieChartCanvas = $('#pieChart3').get(0).getContext('2d')
      var pieData        = donutDataTwitter;
      var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      var pieChart3 = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions      
      })
  
      //-------------
      //- BAR CHART -
      //-------------
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
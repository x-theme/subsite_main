<script type='text/javascript' src='<?=x::url()?>/js/default.js'></script>
<link rel="stylesheet" href="<?=x::url_theme()?>/css/theme.css">
<!-- 상단 시작 { -->
<div id='website-wrapper'>

  <div id="hd-wrapper">
	<div id='menu-top'>
		<div class='inner'>
			<div id="logo">
				
					<table cellpadding='0' cellspacing='0'>
						<tr>
							<td><a href="<?=g::url()?>"><img src='<?=x::url_theme()?>/img/logo1.png'></a></td>
							<td>
								<div class='text'>
								<a href="<?=page('service')?>">
								<font color='#ff3000'>필고</font> <font color='#008cc0'>무료 홈페이지</font><br>
								바쁘신 분이나 직접 꾸미기 어려운 분들을 위해 ...<br>
								홈페이지 꾸미기 + 독립 도메인 + 웹호스팅 + 스마트폰 어플 = <b><font color='#292929'>7 만원</font></b>
								</a>
								</div>
							</td>
						</tr>
					</table>

				
			</div>
			<?include x::theme('menu.top')?>
		</div>
	</div>
	
	<div id='search-wrapper'>
		<div class='inner'>
			<div class='sub-menu'>
				<?include x::theme('menu.main')?>
			</div>
			<div id='search-box'>
				<fieldset id="search-fieldset">					
					<form name="gallery_1_search_form" method="get" action="<?=x::url()?>" onsubmit="return fsearchbox_submit(this);">
					<input type="hidden" name="module" value="post">
					<input type="hidden" name="action" value="search">
					<input type='hidden' name='search_subject' value=1 />
					<input type='hidden' name='search_content' value=1 />
					
					<input type="text" name="key" id="search_txtbox" maxlength="20" placeholder='검색어를 입력해 주세요.' autocomplete='off'>
					
					
					<input type="image" id="search_submit" src="<?=x::url_theme()?>/img/search.png">
					</form>

					<script>
					function fsearchbox_submit(f)
					{
						if (f.stx.value.length < 2) {
							alert("검색어는 두글자 이상 입력하십시오.");
							f.stx.select();
							f.stx.focus();
							return false;
						}

						// 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
						var cnt = 0;
						for (var i=0; i<f.stx.value.length; i++) {
							if (f.stx.value.charAt(i) == ' ')
								cnt++;
						}

						if (cnt > 1) {
							alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
							f.stx.select();
							f.stx.focus();
							return false;
						}

						return true;
					}
					</script>
				</fieldset>	
			</div>
		</div>
	</div>
</div>


<!-- 콘텐츠 시작 { -->

<div id="wrapper">
	<table cellpadding=0 cellspacing=0 width='100%'>
		<tr valign='top'>
			<td width='210' class='left-main'>
				<?php echo outlogin('x-outlogin-website.com'); // 외부 로그인  ?>
				<?php include 'user_site_list.php'; ?>
				<?php include "popular_forums.php"; ?>
				<?php include "new_sites.php"; ?>
			</td>
			<td>
				<div id="container">
				
					
					<?php if ((!$bo_table || $w == 's' ) && !defined("_INDEX_")) { ?><div id="container_title"><?php echo $g5['title'] ?></div><?php } ?>

<div class='left-menu-wrapper'>
	<div class='header'><img src='<?=x::url_theme()?>/img/bars.png'/>신규 사이트</div>
		<div class='inner'>
		<?
		
		$q = "SELECT * FROM x_site_config ORDER BY stamp_created DESC LIMIT 3";
		$rows = db::rows($q);
		//di($rows);
		foreach ( $rows as $site ) {
			$title1 = meta_get( $site['domain'], 'title' );
			if ( empty( $title1 ) ) $title1 = '제목 없음';
			$site_url = site_url( $site['domain'] );
		?>
		<div class='info-wrapper'>
			<div class='top-info site-domain'><a href='<?=$site_url?>' target='_blank'><?=$site['domain']?></a></div>
			<div class='other-info site-owner'><a href='<?=$site_url?>' target='_blank'>만든이: <?=$site['mb_id']?></a></div>
			<div class='other-info site-title'><a href='<?=$site_url?>' target='_blank'><?=$title1?></a></div>
		</div>
		<?}?>		
	</div>
	<div class='view-more'><a href="<?=x::url()?>/?module=site&action=site_list">자세히</a></div>
</div>
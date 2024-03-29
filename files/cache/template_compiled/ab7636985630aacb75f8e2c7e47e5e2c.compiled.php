<?php if(!defined("__XE__"))exit;?><link rel="stylesheet" href="./modules/install/script/welcome_content/welcome.css" />
<article class="welcomeXE">
	<h1>XE core '<?php echo $__Context->version ?>' 설치를 환영합니다!</h1>
	<section class="i1">
		<h1>사이트 제목 바꾸기</h1>
		<p>관리자로 로그인 한 다음 '<a href="<?php echo geturl('','module','admin','act','dispAdminConfigGeneral') ?>">관리 &gt; 설정 &gt; 일반 &gt; 기본</a>'에서 '사이트 제목'을 변경할 수 있습니다.</p>
		<a href="<?php echo geturl('','module','admin','act','dispAdminConfigGeneral') ?>">설정변경</a>
	</section>
	<section class="i2">
		<h1>메뉴 구조 바꾸기</h1>
		<p>관리자로 로그인 한 다음 '<a href="<?php echo geturl('','module','admin','act','dispMenuAdminSiteMap') ?>">관리 &gt; 사이트 제작/편집 &gt; 사이트 메뉴 편집</a>'에서 '메뉴 구조'를 변경할 수 있습니다.</p>
		<a href="<?php echo geturl('','module','admin','act','dispMenuAdminSiteMap') ?>">설정변경</a>
	</section>
	<section class="i3">
		<h1>레이아웃 디자인 바꾸기</h1>
		<p>관리자로 로그인 한 다음 '<a href="<?php echo geturl('','module','admin','act','dispMenuAdminSiteDesign') ?>">관리 &gt; 사이트 제작/편집 &gt; 사이트 디자인 설정</a>'에서 '레이아웃 디자인'을 변경할 수 있습니다.</p>
		<a href="<?php echo geturl('','module','admin','act','dispMenuAdminSiteDesign') ?>">설정변경</a>
	</section>
	<section class="i4">
		<h1>초기화면 바꾸기</h1>
		<p>관리자로 로그인 한 다음 '<a href="<?php echo geturl('','module','admin','act','dispMenuAdminSiteMap') ?>">관리 &gt; 사이트 제작/편집 &gt; 사이트 메뉴 편집</a>'에서 '초기화면'을 바꿀 수 있습니다.</p>
		<a href="<?php echo geturl('','module','admin','act','dispMenuAdminSiteMap') ?>">설정변경</a>
	</section>
	<section class="i5">
		<h1>초기화면 꾸미기</h1>
		<p>관리자로 로그인 한 다음 '<a href="<?php echo geturl('', 'mid', $__Context->mid, 'act','dispPageAdminContentModify') ?>">페이지 수정</a>' 버튼을 눌러 '초기화면'을 꾸밀 수 있습니다.</p>
		<a href="<?php echo geturl('', 'mid', $__Context->mid, 'act','dispPageAdminContentModify') ?>">설정변경</a>
	</section>
	<section class="i6">
		<h1>모듈 설치하기</h1>
		<p>관리자로 로그인 한 다음 '<a href="<?php echo geturl('','module','admin','act','dispAutoinstallAdminIndex') ?>">관리 &gt; 고급 &gt; 쉬운 설치</a>'에서 '모듈'을 설치할 수 있습니다.</p>
		<a href="<?php echo geturl('','module','admin','act','dispAutoinstallAdminIndex') ?>">설정변경</a>
	</section>
</article>

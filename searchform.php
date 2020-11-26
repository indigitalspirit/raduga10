<!-- <div class="navigation-search d-none d-lg-block">
  <input type="search" placeholder="Поиск ...">
  <button><i class="icon ion-md-search"></i></button>
</div> -->

<form role="search" method="get" id="searchform" action="<?php esc_url( home_url( '/' ) ) ?>" >
	<!-- <label class="screen-reader-text" for="s">Поиск... </label> -->
	<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s"  placeholder="Поиск ..." />
  <!-- <input type="submit" id="searchsubmit" value="найти" /> -->
  <button type="submit" id="searchsubmit"><i class="icon ion-md-search"></i></button>
  <div class="search-result"></div>
</form>
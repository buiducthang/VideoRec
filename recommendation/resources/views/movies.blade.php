<div class="page-header">
	<div class="row">
		<div class="col-sm-4" data-intro="Đây là danh sách movies, Bạn hãy chọn bộ phim bạn đã xem và đánh giá" data-step="2">
			<h3>All Movies</h3>
		</div>
		<div class="col-sm-3 clearfix text-center">
			<form method="POST" id="frecommend" action="/recommend">
				{{ csrf_field() }}	
				<input type="hidden" id="irecommend" name="irecommend" value=""/>
			</form>
		
			<button class="btn btn-success has-tooltip" id="btn_refresh"> Refresh</button>
		
		
		</div>
		<div class="col-sm-5 text-right">
			<ul class="pagination">{{ $item1->links() }}</ul>
		</div>
	</div>
	
</div>		
<div class="main-grids">
	<div class="clearfix top-grids"  >
			<?php foreach ($item1 as $i => $value) :?>
				<div class="resent-grid slider-top-grids" style="height: 33vh;">
					<div class="resent-grid-img bxslider">
						<a onclick="getMovieDetail(<?=$value->id;?>)"><img src="https://image.tmdb.org/t/p/w500/<?php echo $value->Image;?>" alt="" /></a>
					</div>
					<div class="resent-grid-info">
						<h4><a id="<?=$value->id;?>" onclick="getMovieDetail(<?=$value->id;?>)" class="title title-info"><?php echo sprintf("%04d", $value->id).". ".$value->MovieName;?></a><br></h4>
						<p class="author"><?php echo $value->getCategory($value->id);?></p>
						<div class="stars" id="p<?=$value->id;?>"></div>
					</div>
				</div>
			<?php endforeach; ?>
			<?php foreach ($item2 as $i => $value) :?>
				<div class="resent-grid slider-top-grids" style="height: 33vh;">
					<div class="resent-grid-img bxslider">
						<a onclick="getMovieDetail(<?=$value->id;?>)"><img src="https://image.tmdb.org/t/p/w500/<?php echo $value->Image;?>" alt="" /></a>
					</div>
					<div class="resent-grid-info">
						<h4><a id="<?=$value->id;?>" onclick="getMovieDetail(<?=$value->id;?>)" class="title title-info"><?php echo sprintf("%04d", $value->id).". ".$value->MovieName;?></a><br></h4>
						<p class="author"><?php echo $value->getCategory($value->id);?></p>
						<div class="stars" id="p<?=$value->id;?>"><p></p></div>
					</div>
				</div>
			<?php endforeach; ?>
	</div>
</div>
@extends('layouts.main')


@section('content')
<main id="tt-pageContent" class="tt-offset-small">
    <div class="container">
        <div class="tt-topic-list">
            <div class="tt-list-header">
                <div class="tt-col-topic">Topic</div>
                <div class="tt-col-category">Category</div>
                <div class="tt-col-value hide-mobile">Likes</div>
                <div class="tt-col-value hide-mobile">Replies</div>
                <div class="tt-col-value hide-mobile">Views</div>
                <div class="tt-col-value">Activity</div>
            </div>
            <div class="tt-topic-alert tt-alert-default" role="alert">
              <a href="#" target="_blank">4 new posts</a> are added recently, click here to load them.
            </div>
            @foreach($list_posts as $post)
            <div class="tt-item tt-itemselect">
                <div class="tt-col-avatar">
                    <svg class="tt-icon">
                      <use xlink:href="#icon-ava-k"></use>
                    </svg>
                </div>
                <div class="tt-col-description">
                    <h6 class="tt-title">
                      <a href="{{url('/post/'.$post->id)}}">
                        <svg class="tt-icon">
                          <use xlink:href="#icon-pinned"></use>
                        </svg>
                        {{$post->title}}
                      </a>
                    </h6>
                    <div class="row align-items-center no-gutters">
                        <div class="col-11">
                            <ul class="tt-list-badge">
                                <li class="show-mobile"><a href="#"><span class="tt-color01 tt-badge">politics</span></a></li>
                                <li><a href="#"><span class="tt-badge">contests</span></a></li>
                                <li><a href="#"><span class="tt-badge">authors</span></a></li>
                            </ul>
                        </div>
                        <div class="col-1 ml-auto show-mobile">
                            <div class="tt-value">1h</div>
                        </div>
                    </div>
                </div>
                <div class="tt-col-category"><span class="tt-color01 tt-badge">politics</span></div>
                <div class="tt-col-value hide-mobile">985</div>
                <div class="tt-col-value tt-color-select hide-mobile">502</div>
                <div class="tt-col-value hide-mobile">15.1k</div>
                <div class="tt-col-value hide-mobile">1h</div>
            </div>
            @endforeach

            <div class="tt-row-btn">
                <button type="button" class="btn-icon js-topiclist-showmore">
                    <svg class="tt-icon">
                      <use xlink:href="#icon-load_lore_icon"></use>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</main>

<div id="js-popup-settings" class="tt-popup-settings">
	<div class="tt-btn-col-close">
		<a href="#">
			<span class="tt-icon-title">
				<svg>
					<use xlink:href="#icon-settings_fill"></use>
				</svg>
			</span>
			<span class="tt-icon-text">
				Settings
			</span>
			<span class="tt-icon-close">
				<svg>
					<use xlink:href="#icon-cancel"></use>
				</svg>
			</span>
		</a>
	</div>
	<form class="form-default">
		<div class="tt-form-upload">
			<div class="row no-gutter">
				<div class="col-auto">
					<div class="tt-avatar">
		                <svg>
		                  <use xlink:href="#icon-ava-d"></use>
		                </svg>
		            </div>
				</div>
				<div class="col-auto ml-auto">
					<a href="#" class="btn btn-primary">Upload Picture</a>
				</div>
			</div>
		</div>
		<div class="form-group">
		    <label for="settingsUserName">Username</label>
		   <input type="text" name="name" class="form-control" id="settingsUserName" placeholder="azyrusmax">
		</div>
		<div class="form-group">
		    <label for="settingsUserEmail">Email</label>
		   <input type="text" name="name" class="form-control" id="settingsUserEmail" placeholder="Sample@sample.com">
		</div>
		<div class="form-group">
		    <label for="settingsUserPassword">Password</label>
		   <input type="password" name="name" class="form-control" id="settingsUserPassword" placeholder="************">
		</div>
		<div class="form-group">
		    <label for="settingsUserLocation">Location</label>
		   <input type="text" name="name" class="form-control" id="settingsUserLocation" placeholder="Slovakia">
		</div>
		<div class="form-group">
		    <label for="settingsUserWebsite">Website</label>
		   <input type="text" name="name" class="form-control" id="settingsUserWebsite" placeholder="Sample.com">
		</div>
		<div class="form-group">
		    <label for="settingsUserAbout">About</label>
		    <textarea name="" placeholder="Few words about you" class="form-control" id="settingsUserAbout"></textarea>
		</div>
		<div class="form-group">
			<label for="settingsUserAbout">Notify me via Email</label>
			<div class="checkbox-group">
		        <input type="checkbox" id="settingsCheckBox01" name="checkbox">
		        <label for="settingsCheckBox01">
		            <span class="check"></span>
		            <span class="box"></span>
		            <span class="tt-text">When someone replies to my thread</span>
		        </label>
		    </div>
		    <div class="checkbox-group">
		        <input type="checkbox" id="settingsCheckBox02" name="checkbox">
		        <label for="settingsCheckBox02">
		            <span class="check"></span>
		            <span class="box"></span>
		            <span class="tt-text">When someone likes my thread or reply</span>
		        </label>
		    </div>
		    <div class="checkbox-group">
		        <input type="checkbox" id="settingsCheckBox03" name="checkbox">
		        <label for="settingsCheckBox03">
		            <span class="check"></span>
		            <span class="box"></span>
		            <span class="tt-text">When someone mentions me</span>
		        </label>
		    </div>
		</div>
		<div class="form-group">
			<a href="#" class="btn btn-secondary">Save</a>
		</div>
		</form>
</div>
<a href="{{url('/section/'.$section->id.'/createpost')}}" class="tt-btn-create-topic">
    <span class="tt-icon">
        <svg>
          <use xlink:href="#icon-create_new"></use>
        </svg>
    </span>
</a>

<div class="modal fade" id="modalAdvancedSearch" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="tt-modal-advancedSearch">
				<div class="tt-modal-title">
					<i class="pt-icon">
						<svg>
							<use xlink:href="#icon-advanced_search"></use>
						</svg>
					</i>
					Advanced Search
					<a class="pt-close-modal" href="#" data-dismiss="modal">
						<svg class="icon">
							<use xlink:href="#icon-cancel"></use>
						</svg>
					</a>
				</div>
				<form class="form-default">
					<div class="form-group">
						<i class="pt-customInputIcon">
                           <svg class="tt-icon">
                              <use xlink:href="#icon-search"></use>
                            </svg>
                        </i>
						<input type="text" name="name" class="form-control pt-customInputSearch" id="searchForum" placeholder="Search all forums">
					</div>
					<div class="form-group">
						<label for="searchName">Posted by</label>
						<input type="text" name="name" class="form-control" id="searchName" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="searchCategory">In Category</label>
						<input type="text" name="name" class="form-control" id="searchCategory" placeholder="Add Category">
					</div>
					<div class="checkbox-group">
				        <input type="checkbox" id="searcCheckBox01" name="checkbox">
				        <label for="searcCheckBox01">
				            <span class="check"></span>
				            <span class="box"></span>
				            <span class="tt-text">Include all tags</span>
				        </label>
				    </div>
					<div class="form-group">
						<label>Only return topics/posts that...</label>
						<div class="checkbox-group">
					        <input type="checkbox" id="searcCheckBox02" name="checkbox">
					        <label for="searcCheckBox02">
					            <span class="check"></span>
					            <span class="box"></span>
					            <span class="tt-text">I liked</span>
					        </label>
					    </div>
					    <div class="checkbox-group">
					        <input type="checkbox" id="searcCheckBox03" name="checkbox">
					        <label for="searcCheckBox03">
					            <span class="check"></span>
					            <span class="box"></span>
					            <span class="tt-text">are in my messages</span>
					        </label>
					    </div>
					    <div class="checkbox-group">
					        <input type="checkbox" id="searcCheckBox04" name="checkbox">
					        <label for="searcCheckBox04">
					            <span class="check"></span>
					            <span class="box"></span>
					            <span class="tt-text">I’ve read</span>
					        </label>
					    </div>
					</div>
					<div class="form-group">
						<select class="form-control" id="searchTop">
							<option>any</option>
							<option>value 01</option>
							<option>value 02</option>
							<option>value 03</option>
						</select>
					</div>
					<div class="form-group">
						<label for="searchaTopics">Where topics</label>
						<select class="form-control" id="searchaTopics">
							<option>any</option>
							<option>value 01</option>
							<option>value 02</option>
							<option>value 03</option>
						</select>
					</div>
					<div class="form-group">
						<label for="searchAdvTime">Posted</label>
						<div class="row">
							<div class="col-6">
								<select class="form-control">
									<option>any</option>
									<option>value 01</option>
									<option>value 02</option>
									<option>value 03</option>
								</select>
							</div>
							<div class="col-6">
								<input type="text" name="name" class="form-control" id="searchAdvTime" placeholder="dd-mm-yyyy">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="minPostCount">Minimum Post Count</label>
						<select class="form-control" id="minPostCount">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option selected>10</option>
						</select>
					</div>
					<div class="form-group">
						<a href="#" class="btn btn-secondary btn-block">Search</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection

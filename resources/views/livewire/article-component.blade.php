<body class="bg-gray-100 font-sans leading-normal tracking-normal">

	<!--Container-->
	<div class="container w-full md:max-w-3xl mx-auto pt-20">

		<div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">

			<!--Title-->
			<div class="font-sans">
				<p class="text-base md:text-sm text-green-500 font-bold">&lt; <a href="/article" class="text-base md:text-sm text-green-500 font-bold no-underline hover:underline">BACK TO ARTICLES</a></p>
						<h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">{{ $post->title }}</h1>
						<p class="text-sm md:text-base font-normal text-gray-600">{{ $post->created_at}}</p>
			</div>


			<!--Post Content-->


			<!--Lead Para-->
			<p class="py-6">
                @php
                    echo nl2br(" $post->body ");;
                @endphp
                
				
			</p>

			{{-- <blockquote class="border-l-4 border-green-500 italic my-8 pl-8 md:pl-12">Example of blockquote - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.</blockquote> --}}


			<!--/ Post Content-->

		</div>

        <div class="sharebox clearfix" style="inlin">
            <ul>
                    
                <li style="display: inline-block;">
                    <a href="http://www.facebook.com/sharer.php?u=https://hollidayandsons.co.nz/article/{{ $post->slug }}" class="share-facebook" target="_blank" original-title="Share via Facebook"><i class="fa fa-facebook"></i> Facebook</a>
                </li>
                            
                <li style="display: inline-block;">
                    <a href="http://twitter.com/home?status={{ $post->slug }} https://hollidayandsons.co.nz/article/{{ $post->slug }}" class="share-twitter" target="_blank" original-title="Share via Twitter"><i class="fa fa-twitter"></i> Twitter</a>
                </li>
                            
                <li style="display: inline-block;">
                    <a href="http://www.reddit.com/submit?url=https://hollidayandsons.co.nz/article/{{ $post->slug }}/&amp;title={{ $post->slug }}" class="share-tumblr" target="_blank" original-title="Share via Tumblr"><i class="fa fa-tumblr"></i> Tumblr</a>
                </li>
                            
                <li style="display: inline-block;">
                    <a href="http://pinterest.com/pin/create/button/?url=https://hollidayandsons.co.nz/article/{{ $post->slug }}&amp;media=&amp;" target="_blank" class="share-pinterest" original-title="Share via Pinterest"><i class="fa fa-pinterest"></i> Pinterest</a>
                </li>
                            
                <li style="display: inline-block;">
                    <a href="https://plus.google.com/share?url=https://hollidayandsons.co.nz/article/{{ $post->slug }}/" target="_blank" class="share-google" original-title="Share via Google+"><i class="fa fa-google-plus"></i> Google+</a>
                </li>
                            
                <li style="display: inline-block;">
                    <a href="http://linkedin.com/shareArticle?mini=true&amp;url=https://hollidayandsons.co.nz/article/{{ $post->slug }}/&amp;title=A short note on our history circa 1643-1653" target="_blank" class="share-linkedin" original-title="Share via LinkedIn"><i class="fa fa-linkedin"></i> LinkedIn</a>
                </li>
                            
                <li style="display: inline-block;">
                    <a href="mailto:?subject=A short note on our history circa 1643-1653&amp;body=https://hollidayandsons.co.nz/article/{{ $post->slug }}/" class="share-mail" original-title="Share via E-Mail"><i class="fa fa-envelope-o"></i> E-Mail</a>
                </li>
                    </ul>
        </div>

		<!--Divider-->
		<hr class="border-b-2 border-gray-400 mb-8 mx-4">

		<!--Divider-->
		<hr class="border-b-2 border-gray-400 mb-8 mx-4">
	</div>
	<!--/container-->

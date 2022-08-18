<section id="section10" class="demo">
    <div class="parallax">
        <div class="container d-flex justify-content-center align-items-center parallax-content" style="height:100vh;">
            {{ $slot }}
        </div>
        <video class="parallax-background" autoplay="" loop="" muted="">
            <source src="{{asset('assets/background/DJI_0104.mp4')}}" type="video/mp4" wp-acf="[{'type':'url','name':'video','label':'Video','wrapper':{'width':25}},{'type':'text','name':'video_css','label':'Video CSS (eg. filters)','wrapper':{'width':25}}]" wp-attr="[{'target':'src','replace':'%1'},{'target':'parent_style','replace':'%2'}]">
        </video>
        <div class="parallax-placeholder" style="background-image:url('{{asset('assets/background/placeholder.jpg')}}');"></div>
    </div>
</section>
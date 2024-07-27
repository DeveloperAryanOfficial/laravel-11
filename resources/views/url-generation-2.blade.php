<h1>This is the url generation 2</h1>

{{URL::full()}}
{{url()->full()}}

<!-- 
<a href="/url3">Generation 3</a>
<div>
    <a href="{{URL::to('url3')}}">Generation 3</a>
</div> -->


<div>
    <!-- How can we pass the dynamic data through the anchor tag -->
     <a href="{{URL::to('url3',['aryan'])}}">Generation 3</a>
</div>
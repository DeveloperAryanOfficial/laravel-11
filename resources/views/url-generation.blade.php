<div>
    <h1>This is the url generation 1</h1>
    {{URL::current()}}
    {{url()->current()}}
</div>

<!-- <a href="/url3">Generation 3</a> -->

<div>
    <!-- This is another type to pass a url -->
    <!-- <a href="{{URL::to('url3')}}">Generation 3</a> -->

    <!-- 
        URL:: = it means URL:: is a global operator through this we can access url from the route
    -->
</div>

<div>
    <!-- How can we pass the dynamic data through the anchor tag -->
     <a href="{{URL::to('url3',['Aryan'])}}">Generation 3</a>
</div>
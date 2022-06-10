<!doctype html>
<html lang="en">

<head>
    <title>Chatting System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .my-custom-scrollbar {
            position: relative;
            width: 100%;
            height: 300px;
            overflow: auto;
        }
        .ajax-loading{
     text-align: center;
    }

    </style>
     <script type="text/javascript">
        setTimeout(function() {
            location.reload();
        }, 15000);
    </script>

</head>

<body>
    <div class="container">

        <h1 class="bg-danger text-light p-3 text-center mt-1"> Chatting System</h1>

        @if(Session::has('success'))
        <center>
            <div class="alert alert-success col-md-4 ">{{Session::get('success')}}</div>
        </center>

        @endif
        <div class="row justify-content-center  mb-3">

           


            <!-- Person 2 block -->
            <div class="col-md-8">
                <h1 class=" bg-dark text-light text-center"> Person 2</h1>

                <div class="mb-3 ">
                    <div class="card my-custom-scrollbar my-custom-scrollbar-primary">
                        <div class="card-body">
                        <p class="text-muted text-center"> Wait for 15 sec for message</p>
                        <div class="alert alert-success">
                                <strong class="ajax-loading">
                                  {{ $data }}
                                </strong>
                            </div>
                        </div>

                    </div>
                </div>



                <form action="{{route('second')}}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="message2" class="form-control" placeholder=" message" aria-label="Username">
                        <span class="input-group-text"><button type="submit" class="btn btn-primary">Send</button></span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="footer bg-dark text-light ">
        <p class="text-center p-5 ">&copy All right Reserved ! </p>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script>
        var myCustomScrollbar = document.querySelector('.my-custom-scrollbar');
        var ps = new PerfectScrollbar(myCustomScrollbar);

        var scrollbarY = myCustomScrollbar.querySelector('.ps__rail-y');

        myCustomScrollbar.onscroll = function() {
            scrollbarY.style.cssText = `top: ${this.scrollTop}px!important; height: 400px; right: ${-this.scrollLeft}px`;

            const scrollToBottom = () => {
                divRef.current.scrollTop = divRef.current.scrollHeight;
            };
        }
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
1
</body>

</html>
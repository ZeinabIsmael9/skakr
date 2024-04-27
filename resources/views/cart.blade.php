@extends('layouts.master')
    @section('content')
        <title> Card </title>
        <link rel="stylesheet" href="{{ asset('assets/CSS/Card.CSS')}}"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <div id="div60">

        <h2 id="card">MY CARD</h2>




        <img src="{{ asset('assets/IMG/lm (2).png')}}" id="ph51">
        <p id="duct">Product Name</p>
        <div id="div61">
            <img src="{{ asset('assets/IMG/x.png')}}" id="ph52">
        </div>


        <button class="plus_minus btn" id="table">+</button>
            <span class="number btn" id="tablee">2</span>
            <button class="minus_plus btn" id="ta">-</button>

        <p id="l0">600LE</p>
        <p id="l2">1200LE</p>



        <img src="{{ asset('assets/IMG/lm (1).png')}}" id="ph51">
        <p id="duct">Product Name</p>
        <div id="div61">
            <img src="{{ asset('assets/IMG/x.png')}}" id="ph52">
        </div>


          <button class="plus_minus1 btn" id="ti">+</button>
          <span class="number1 btn" id="to">1</span>
          <button class="minus_plus1 btn" id="te">-</button>




        <p id="l0">600LE</p>
        <p id="l2">600LE</p>









        <p id="Subtotal">Subtotal</p>
        <p id="l8">1800LE</p>


        <a href=" {{ route('shopping-cart') }}">
          <button id="vd">View Card</button>
        </a>


    </div>




    <script>
      const plus = document.querySelector('.plus_minus'),
      minus = document.querySelector('.minus_plus');

    let number_el = document.querySelector('.number');

    plus.addEventListener('click', () => {
      let val = parseInt(number_el.innerText);
      number_el.innerText = ++val;
    });

    minus.addEventListener('click', () => {
      let val = parseInt(number_el.innerText);
      number_el.innerText = --val;
    });








    const plus1 = document.querySelector('.plus_minus1'),
        minus1 = document.querySelector('.minus_plus1');

      let number_el1 = document.querySelector('.number1');

      plus1.addEventListener('click', () => {
        let val1 = parseInt(number_el1.innerText);
        number_el1.innerText = ++val1;
      });

      minus1.addEventListener('click', () => {
        let val1 = parseInt(number_el1.innerText);
        number_el1.innerText = --val1;
      });


    </script>

    @endsection

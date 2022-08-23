import $ from 'jquery';
import 'slick-carousel';

$(document).ready(function(){

  /////// Blocks
  /***********************************************************************
  ** Alternating content accordion
  ***********************************************************************/


  // Accordion Controls
  $('#section_alt-content .acc-head').on('click', function(){
    if ($(this).hasClass('acc-active')) {
      return;
    }
    $('.acc-head').removeClass('acc-active');
    $(this).addClass('acc-active');

    $('.acc-body').slideUp();
    $(this).parent().children('.acc-body').slideDown();
  });


  /***********************************************************************
  ** Step Form (incomplete)
  ***********************************************************************/

  // Form Navigation
  function navPane(direction, formElement){
    let stepForm = formElement.find('.step-form');
    let activePane = formElement.find('.active-pane');
    if (direction == 'next') {
      activePane.next().addClass('active-pane');
      activePane.removeClass('active-pane');
    }

    if (direction == 'prev') {
      activePane.prev().addClass('active-pane');
      activePane.removeClass('active-pane');
    }
  }

  $('#section_step-form').each(function(){
    const $this = $(this);

     // Next/Prev Pane Controls
     $this.find('.next-pane').click(function(){
       navPane('next', $this);
     });
     $this.find('.prev-pane').click(function(){
       navPane('prev', $this);
     });

     // Dismiss Error Modal
     $this.find('.modal-dismiss').click(function(){
       $this.find('.error-modal').removeClass('modal-visible');
       $this.find('.response-inner').html('');
     });
  });

  $('#section_step-form form').on('submit', function(){
    const $this = $(this);

    // Add loading spinner
    $this.find('.spin').addClass('spin-active');

    // Submission - collect values
    let formValues = new FormData();
    let questionsAnswers = [];

    $this.find('.submit-form').prop('disabled', true);

    $this.find('.form-input').each(function(){
      if ($(this).hasClass('q-and-a')) {
        let question = $(this).attr('data-title');
        let answer = $(this).val();
        let qaResult = '___ ' + question + ' ___ [ ' + answer + ' ]';

        questionsAnswers.push(qaResult);
      } else if($(this).attr('type') == 'file'){
        if ($(this)[0].files.length != 0) {
          formValues.append('attachment', $(this)[0].files[0]);
        }
      } else {
        let name = $(this).attr('name');
        let value = $(this).val();
        formValues.append(name, value);
      }
    });
    formValues.append('questions', questionsAnswers);

    $.ajax({
      // url: 'https://google.com',
      // method: 'post',
      // data: formValues,
      // processData: false,
      // contentType: false,
    }).done(function(response){
      navPane('next', $this);
      // track success here gtag etc

      // Reset values
      formValues = {};
      questionsAnswers = [];

      // Remove spinner
      $this.find('.spin').removeClass('spin-active');
    }).fail(function(response){
      let responseError = response.responseJSON.errors;
      // code to append errors to modal UL etc - missing scripts ^

      $this.find('.error-modal').addClass('modal-visible');
      $this.find('.submit-form').prop('disabled', false);
      questionsAnswers = [];

      // Remove spinner
      $this.find('.spin').removeClass('spin-active');
    });

    return false;
  });

  /////// End Blocks

  /***********************************************************************
  ** Slick Sliders
  ***********************************************************************/


  if ($('.alt-slider')) {
    $('.alt-slider').slick({
      arrows: false,
      dots: false,
      fade: true,
      cssEase: 'linear',
      autoplay: true,
      autoplaySpeed: 5000,
    });
  }

});

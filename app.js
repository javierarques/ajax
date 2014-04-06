/*!
 * myApp.js
 */

;(function ($, window, document, undefined) {
  'use strict';

  var myApp = {

    // init my app
    init: function(){
      myApp.bindEvents();
      myApp.getPosts();
    },


    // bind events
    bindEvents: function () {
      $(document).on('scroll', myApp.infiniteScroll);
    },


    // events handlers
    infiniteScroll: function (e) {
      //console.log(e);
      if ( myApp.elementInScroll("#main article:last")) {
        myApp.getPosts();
      }

    },

    // HELPER FUNCTIONS

    // get posts

    getPosts:  function(){

      $(document).off('scroll', myApp.infiniteScroll);

      var data = {
        'ajax' : 1,
        'posts_per_page' : 10,
        'response_type': 'json'
      };      

      $.ajax({
        'url': window.ajaxUrl,
        'data': data,
        'dataType': "json"
      }).then( function ( result) {

          

          if ( data.response_type === 'html') {
            ///$('body').prepend('<h1>HTML response<h1>');
            $('#main').append(result);
          } else {   
            //$('body').prepend('<h1>JSON response<h1>');         
            var source = jQuery('#post-template').html(),
            template = Handlebars.templates['post'],
            html = '';

            //console.log(result);

            var htmlArray=[];

            $.each( result, function () {
              htmlArray.push( template ( this ) );
            });

            //console.log(htmlArray);
            $('#main').append(htmlArray.join(''));

          }

          $(document).on('scroll', myApp.infiniteScroll);


        });
    },

    // element in scroll
    elementInScroll: function (elem) {
      if ( $(elem).length === 0)
        return false;

      var docViewTop = $(window).scrollTop();
      var docViewBottom = docViewTop + $(window).height();
   
      var elemTop = $(elem).offset().top - $(window).height();
      //var elemBottom = elemTop + $(elem).height();
   
      //return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
      return elemTop < docViewBottom;
    }

  };

  $(document).ready(myApp.init());
  

}(jQuery, this, this.document));
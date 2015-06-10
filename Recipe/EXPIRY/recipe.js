// Inspect element - Console
console.log("recipe.js ready")


// jQuery("form").hide()


// ask jQuery to hide the list of example recipes
jQuery("ul") .hide()


// ask jQuery to do something when the form is submitted
jQuery("form").on("submit", doSomething)


// function to execute when the form is subitted
function doSomething (event)
{
    
    // don't refresh the page (default bahavior when submitting a form)
       event.preventDefault()
       console.log("form submitted") 


    // get input value

        var searchPhrase = jQuery("input#search").val()
    console.log("searchPhrase")



    // search for searchPhrase on the API
    getFootApi(searchPhrase, function (_result) {
        console.log(_result)
        
        
        //empty the hits
        jQuery("ul").empty()
        
        //grab the list of hits
        var hits = _result.hits
        
        // loop through the hits
        // for each hit...
        hits.forEach(function(hit){
            console.log(hit)
            //grab the label, the image and the ingredients
            
            var label = hit.recipe.label
            console.log(label)
            
            // adding the list with the recipe label
            jQuery("ul").append("<li>" + label + "<li>")
        }
        )
                 // show the list
                jQuery("ul").fadeIn()
                
                         var image = hit.recipe.image
            console.log(image)
            
            // adding the list with the recipe label
            jQuery("ul").append("<li>" + label + "</li>" + "<li> + image + </li>")
        }
        )
                 // show the list
                jQuery("image").fadeIn()
        
    }
 // end doSomething

var getFootApi = function(_query, _callback){

    
	var url = 'https://api.edamam.com/search';

	var data = {
		_app_id: '602e4c99',
		_app_key: 'badc73a4282fd038b7547e9c5854a2d6',
		q: _query
	}

	$.ajax({

		url: url,
		dataType: 'jsonp',
		data: data,

		success: function(_res){

			_callback.call(this, _res);               
		}
	})

}
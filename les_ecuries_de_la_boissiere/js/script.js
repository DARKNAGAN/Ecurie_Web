		function Alerte()
		{
			alert("Suite à une erreur technique la fonctionnalitée n'est actuellement pas disponible.")
		}

			var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-7078796-5']);
			  _gaq.push(['_trackPageview']);

			  (function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();
			  
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


 
function verifierMail (champ) { 
var str = champ.value; 
var regexp = new RegExp("^[a-zA-Z0-9_\\-\\.]{3,}@[a-zA-Z0-9\\-_]{2,}\\.[a-zA-Z]{2,4}$", "g"); 
if (!regexp.test(str)) { 
   alert("L'adresse e-mail n'est pas valide !"); champ.focus(); 
   return false; 
} 
return true; 
} 
 function Verifier_Numero_Telephone(champ)
 {
  num_tel = champ.value; 
 
 // Definition du motif a matcher
 var regex = new RegExp(/^(01|02|03|04|05|06|08)[0-9]{8}/gi);
 
 // Test sur le motif
 if(regex.test(num_tel))
 {
     return true;
 }
 else
 {
     alert("Le numéro n'est pas valide !"); champ.focus(); 
     return false;
 }
 
 } 

 
 
			  
  let movies = [
    {
      'title': 'Concours Amateur, Pro',
	  'lieu': 'Orveau',
	  'type': ['CSO','Officiel'],
	  'image': './images/event/Event_img32.jpg',
      'date': "3 et 4 mars 2018",
	  'desc': 'BLabla'
    },
    {
      'title': 'Concours Amateur, Cycles Libre',
	  'lieu': 'Orveau',
      'type': ['CSO','Officiel'],
	  'image': './images/event/Event_img32.jpg',
      'date': "31 mars - 01 avril 2018",
	  'desc': 'BLabla'
    },    
	{
      'title': 'Concours Amateur, Cycles Libre',
	  'lieu': 'Orveau',
      'type': ['CSO','Officiel'],
	  'image': './images/event/Event_img32.jpg',
      'date': "05 et 06 mai 2018",
	  'desc': 'BLabla'
    },    
	{
      'title': 'Concour Amateur, Pro',
	  'lieu': 'Orveau',
      'type': ['CSO','Officiel'],
	  'image': './images/event/Event_img32.jpg',
      'date': "13 et 14 octobre 2018",
	  'desc': 'BLabla'
    },    
	{
      'title': 'Concours Amateur, Pro',
	  'lieu': 'Orveau',
      'type': ['CSO','Officiel'],
	  'image': './images/event/Event_img32.jpg',
      'date': "3 et 4 novembre 2018",
	  'desc': 'BLabla'
    },  
	{
      'title': 'Concours Final du challenge',
	  'lieu': 'Orveau',
      'type': ['CSO','Club'],
	  'image': './images/event/Event_img32.jpg',
      'date': "18 mars 2018",
	  'desc': 'BLabla'
    }, 
	{
      'title': 'Concours Championnat clubs',
	  'lieu': 'Orveau',
      'type': ['CSO','Club'],
	  'image': './images/event/Event_img32.jpg',
      'date': "2 avril 2018",
	  'desc': 'BLabla'
    }, 
	{
      'title': 'Concours Club et poney',
	  'lieu': 'Orveau',
      'type': ['CSO','Club'],
	  'image': './images/event/Event_img32.jpg',
      'date': "13 mai 2018",
	  'desc': 'BLabla'
    }, 
	{
      'title': 'Concours Club et poney',
	  'lieu': 'Orveau',
      'type': ['CSO','Club'],
	  'image': './images/event/Event_img32.jpg',
      'date': "27 mai 2018",
	  'desc': 'BLabla'
    }, 
	{
      'title': 'Concours Club et poney',
	  'lieu': 'Orveau',
      'type': ['CSO','Club'],
	  'image': './images/event/Event_img32.jpg',
      'date': "10 juin 2018",
	  'desc': 'BLabla'
    }, 
	{
      'title': 'Concours Club et poney',
	  'lieu': 'Orveau',
      'type': ['CSO','Club'],
	  'image': './images/event/Event_img32.jpg',
      'date': "7 octobre 2018",
	  'desc': 'BLabla'
    }, 
	{
      'title': 'Concours Club et poney',
	  'lieu': 'Orveau',
      'type': ['CSO','Club'],
	  'image': './images/event/Event_img32.jpg',
      'date': "21 octobre 2018",
	  'desc': 'BLabla'
    }, 
	{
      'title': 'Hunter',
	  'lieu': 'Orveau',
      'type': ['Hunter'],
	  'image': './images/event/Event_img32.jpg',
      'date': "1 janvier 1999",
	  'desc': 'BLabla'
    }, 
	{
      'title': 'Dressage',
	  'lieu': 'Orveau',
      'type': ['Dressage'],
	  'image': './images/event/Event_img32.jpg',
      'date': "1 janvier 1999",
	  'desc': 'BLabla'
    }, 
	{
      'title': 'Pony Games/Equifun',
	  'lieu': 'Orveau',
      'type': ['Pony Games/Equifun'],
	  'image': './images/event/Event_img32.jpg',
      'date': "1 janvier 1999",
	  'desc': 'BLabla'
    }, 
	{
      'title': 'Balade et Randonnées',
	  'lieu': 'Orveau',
      'type': ['Balade/Randonnées'],
	  'image': './images/event/Event_img32.jpg',
      'date': "1 janvier 1999",
	  'desc': 'BLabla'
    },	
  ];
  let app = new function() {
    // Récupération des données
    this.movies = movies;
    
	
	
	// Affiche les films (tous par défaut)
    this.FetchAll = function(data) {
      // Selection de l'élément
      let elMovies = document.getElementById('movies');
      let htmlMovies = '';
      for (let i in data) {
        for (let j in data[i].type) {
          htmlMovies += '<i class="fa fa-tag" aria-hidden="true"></i> ' + data[i].type[j] + ' ';
        }
		htmlMovies += '<li class="media my-4">';
		htmlMovies += '<img class="img-thumbnailEvent" src="' + data[i].image + '"alt="Generic placeholder image">';
		htmlMovies += '<div class="media-body">';
		htmlMovies += '<h4 class="mt-0 mb-1">' + data[i].title + '</h4>';
		htmlMovies += '<h5>' + ' Organisé à ' + data[i].lieu + ' - ' + data[i].date + '</h5>';
		htmlMovies += data[i].desc + '</div>';
		htmlMovies += '</li>';
      }
      // Affichage de l'ensemble des lignes en HTML
      elMovies.innerHTML = htmlMovies;
      // Affiche le nombre de films
      this.Count(data);
    };
    // Retourne le nombre de films
    this.Count = (data) => document.getElementById('count').innerHTML = data.length + ' movies';

	
	// Retourne la liste des checkboxes
    this.DisplayFilters = function() {
      // Selection de l'élément
      let elTypes = document.getElementById('types');
      let types   = [];
      // Chaque ligne (film)
      for (let i in movies) {
        // Chaque "type" dans chaque ligne (film)
        for (let j in movies[i].type) {
          types.push(movies[i].type[j]);
        }
      }
      let uniqueTypes = types.filter( (value, index, self) => self.indexOf(value) === index );
      let htmlTypes = '';
      for (let i in uniqueTypes) {
        htmlTypes += '<li><input type="checkbox" id="' + uniqueTypes[i] + '" name="types[]" value="' + uniqueTypes[i] + '"> <label for="' + uniqueTypes[i] + '">' + uniqueTypes[i] + '</label></li>';
      }
      elTypes.innerHTML = htmlTypes;
    };
	
		// Retourne la liste des checkboxes
    this.DisplayFiltersDates = function() {
      // Selection de l'élément
      let elDates = document.getElementById('dates');
      let dates   = [];
      // Chaque ligne (film)
      for (let i in movies) {
        // Chaque "date" dans chaque ligne (film)
			dates.push(movies[i].date);
      }
      let uniqueDates = dates.filter( (value, index, self) => self.indexOf(value) === index );
      let htmlDates = '';
      for (let i in uniqueDates) {
        htmlDates += '<button type="button" class="btn btn-secondary" id="' + uniqueDates[i] + '" name="dates" value="' + uniqueDates[i] + '" > ' + uniqueDates[i] + ' </button>';
	  }
      elDates.innerHTML = htmlDates;
    };
	
		    	function OldMovies(element) {
  for (let i = 0; i < element.type.length; i++) {
    // film de type "Action" OU "Sci-Fi" et datant d'avant 2010
    if (element.date == 2018) {
      return element;
    }
  }
}
	
	
	// Retourne les films filtrés
    this.FilterByType = function() {
      // Afiche les checkboxes
      this.DisplayFilters();
      let checkboxes = document.querySelectorAll('input');
      let arrType    = [];
      let self       = this;
      for (let checkbox of checkboxes) {
        checkbox.addEventListener('click', function() {
          if (checkbox.checked) {
            // Ajout dans le tableau de la valeur cochée
            arrType.push(checkbox.value);
          } else {
            // Suppression dans le tableau
            let removeItem = arrType.filter( (e) => e !== checkbox.value );
            arrType = removeItem;
          }
          
          if (arrType.length > 0) {
            let i = arrType.length - 1;
            // 1er choix
            if (arrType.length == 1) {
              filteredMovie = self.movies.filter( (e) => e.type.indexOf(arrType[0]) !== -1 );
            // Autre(s) choix
            } else {
              filteredMovie = filteredMovie.filter(function(e) {
                  for (let j = 0; j < i; j++) {
                    return e.type.indexOf(arrType[i]) !== -1;
                  }
              });
            }
            self.FetchAll(filteredMovie);
          } else {
            // Reset (aucune case cochée)
            app.FetchAll(movies);
          }
        });
      }
    };
	
	    this.FilterByDate = function() {	  
			this.DisplayFiltersDates();
		};
  }
   app.FilterByDate();
  // Affichage de tous les films
  app.FetchAll(movies);
  // Filtrage
  app.FilterByType();

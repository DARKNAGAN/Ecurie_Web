		function Alerte()
		{
			alert("Suite à une erreur technique la fonctionnalitée n'est actuellement pas disponible.")
		}

		function change_onglet(name)
		{
			document.getElementById('onglet_'+anc_onglet).className = 'onglet_0 onglet';
			document.getElementById('onglet_'+name).className = 'onglet_1 onglet';
			document.getElementById('contenu_onglet_'+anc_onglet).style.display = 'none';
			document.getElementById('contenu_onglet_'+name).style.display = 'block';
			anc_onglet = name;
		}

			var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-7078796-5']);
			  _gaq.push(['_trackPageview']);

			  (function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();
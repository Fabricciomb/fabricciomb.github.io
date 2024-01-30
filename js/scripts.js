	async function loadPage(page) {
		try {
			const response = await fetch(page);
			const content = await response.text();
			document.getElementById('content').innerHTML = content;
			updateLinks(page);
		} catch (error) {
			console.error('Erro ao carregar a página:', error);
		}
	}

	function updateLinks(currentPage) {
		// Atualize os links com base na página carregada
		const links = document.querySelectorAll('nav ul li a');
		links.forEach(link => {
			link.classList.remove('active'); // Remova a classe 'active' de todos os links
		});

		const currentLink = document.querySelector(`nav ul li a[href="${currentPage}"]`);
		if (currentLink) {
			currentLink.classList.add('active'); // Adicione a classe 'active' ao link correspondente à página atual
		}
	}

	// Carregue a página home.html por padrão quando o index.html for aberto
	window.onload = function () {
		loadPage('pages/home.html');
	};
	
	
	$(document).ready(function(){
		$('.dropdown-submenu a.dropdown-toggle').on('click', function(e) {
			if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-submenu').first().find('.show').removeClass('show');
			}
			var $subMenu = $(this).next('.dropdown-menu');
			$subMenu.toggleClass('show');
			$(this).parents('li.nav-item.dropdown').on('hidden.bs.dropdown', function (e) {
				$('.dropdown-submenu .show').removeClass('show');
			});
			return false;
		});
	});
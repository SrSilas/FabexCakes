let carrinho = []; //array para armazenar os itens do carrinho

	if(carrinho.length === 0)
	  {
	  	//seleciona o paragrafo pelo id
	  	let paragrafo = document.getElementById("textCarrinho");

	  	//
	  	paragrafo.textContent = "O carrinho está vazio!";
	  }
	  else
	  {
	  	let paragrafo = document.getElementById("textCarrinho");
	  	paragrafo.textContent = "Itens: ";
	  }
	function adcProduto(nome, preco)
		{
			let item = {
			//cria um objeto do item
				nome: nome,
				preco: preco
			};	
			
			//adiciona o item ao carrinho
			carrinho.push(item);
			
			//atualiza o carrinho exibindo os itens e o total
			atualizarCarrinho();
		}

	function removerProduto(index)
		{
			//Remove o item do carrinho
			carrinho.splice(index, 1);
			
			//atualiza o carrinho exibindo os itens e o total
			atualizarCarrinho();
		}
		
	function atualizarCarrinho()
		{
			let carrinhoElement = document.getElementById("carrinho");
			let totalElement = document.getElementById("total");
			let total = 0;
			
			//limpa o conteudo atual do carrinho
			carrinhoElement.innerHTML = "";
			
			//Percorre os itens do carrinho e exibe cada um
			for (let i = 0; i < carrinho.length; i++)
			{
				let item = carrinho[i];
				total += item.preco;
				carrinhoElement.innerHTML += `<li>${item.nome} - $${item.preco} <button onclick="removerProduto(${i})">Remover</button></li>`;
			}

			//exibe o total atualizado
			totalElement.textContent = total.toFixed(2);
		}	
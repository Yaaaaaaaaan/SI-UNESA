#include <iostream>
using namespace std;

#define MAX_CLIENTE 2
#define MAX_PRODUTO 2

//Cadastro de Produtos
struct Data {
  int dia;
  int mes;
  int ano;
};

struct Produto {
  string nome;
  int qtd;
  float valor;
};


struct Cliente {
  string nome;
  int idade;
  int sexo; //1-feminino, 2-masculino
  Data data_compra;
  Produto produto[MAX_PRODUTO];
};

/** 
Dada a estrutura acima, pede-se: 
a) Escreva o código para ler o nome do cliente.
b) Escreva o código para ler o nome de um Produto
c) Escreva o código para ler o nome de 2 Produtos
d) Escreva o código para exibir a data de compra.
e) Escreva o código para ler 2 clientes e 2 produtos.

**/

int main() {
  Cliente cliente, teste, clientes[MAX_CLIENTE];
  Produto p, prod[2];

  // letra a
  // cin>>cliente.nome;
  // cin>>cliente.idade;
  // cin>>cliente.sexo;

  // cin>>teste.nome;
  // cin>>teste.idade;
  // cin>>teste.sexo;

  //letra b
  // cin>>p.nome;

  //letra c

  // cin>>prod[0].nome;
  // cin>>prod[1].nome;

  //letra d

  // cout << cliente.data_compra.dia;
  // cout << cliente.data_compra.mes;
  // cout << cliente.data_compra.ano;

  //letra e 

  for(int x=0;x<MAX_CLIENTE;x++) {
    cout<<"\n Digite nome do cliente:"<<endl;
    cin>>clientes[x].nome;

    cout<<"\n Digite idade:"<<endl;
    cin>>clientes[x].idade;

    cout<<"\n Digite sexo:"<<endl;
    cin>>clientes[x].sexo;

    cout<<"\n Digite Data de compra:"<<endl;

    cout<<"\n Digite dia:"<<endl;
    cin>>clientes[x].data_compra.dia;
    
    cout<<"\n Digite mes:"<<endl;
    cin>>clientes[x].data_compra.mes;
    
    cout<<"\n Digite ano:"<<endl;
    cin>>clientes[x].data_compra.ano;

    for (int y=0; y<MAX_PRODUTO;y++) {
      cout<<"\n Digite nome do produto:"<<endl;
      cin>>clientes[x].produto[y].nome;

      cout<<"\n Digite quantidade de produto(s):"<<endl;
      cin>>clientes[x].produto[y].qtd;

      cout<<"\n Digite valor do produto:"<<endl;
      cin>>clientes[x].produto[y].valor;

    }
  }


  return 0;
}

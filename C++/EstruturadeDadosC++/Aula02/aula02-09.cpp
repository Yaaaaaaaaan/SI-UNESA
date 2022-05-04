#include <iostream>

using namespace std;
 #define MAX 5
struct Pessoa {
  string nome;
};

Pessoa p[MAX];
int indice=0;


void cadastrar() {
  if(indice>=5){
    cout<<"\nEstouro de memória\n\n";
    return;
  }
  cout<<"\nDigite nome: \n";
  cin>>p[indice].nome;
  indice++;

}


void exibir() {
  for(int x=0;x<indice;x++){
     cout<<"\nNome: ["<<x<<"]"<<p[x].nome;
  }
 
}


int main() {

  int opcao=0;

  while (opcao != 9 ) {
    cout << "\nCadastro de pessoas\n";
    cout<<"\n 1-cadastrar \n";
    cout<<"\n 2-exibir \n";
    cout<<"\n 9-sair \n";
    cout<<"\nDigite opcao: \n";
    cin>>opcao;

    switch(opcao) {
      case 1:
        cadastrar();
        break;
      case 2:
        exibir();
        break;
      case 9:
        break;
      default:
        cout<<"\n---------------- \n";
        cout<<"\n Opcao invalida \n";
        cout<<"\n---------------- \n";
    }//fim caso

  }//fim while

}//fim-main
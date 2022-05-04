#include <iostream>
using namespace std;
struct aluno{
  string nome;
  string result;
  float av1;
  float av2;
};
aluno p;
float media(){
  float media=0;
  media=(p.av1 + p.av2)/2;
  return media;
}
void cadastro() {
  cout<<"\nDigite nome: \n";
  cin>>p.nome;

  cout<<"\nDigite Av1: \n";
  cin>>p.av1;

   cout<<"\nDigite Av2: \n";
  cin>>p.av2;
}

void exibe() {
   if(media()>=7){
    p.result="Aprovado";
  }else{
    p.result="Reprovado";
  }
  cout<<"\nNome: "<<p.nome;
  cout<<"\nAv1:"<<p.av1;
  cout<<"\nAv2:"<<p.av2;
  cout<<"\nMedia:"<<media();
  cout<<"\nResultado:"<<p.result <<endl;
 
}

int main() {

  int opcao=0;

  while (opcao != 9 ) {
    cout << "\nCadastro de notas\n";
    cout<<"\n 1-cadastrar \n";
    cout<<"\n 2-exibir \n";
    cout<<"\n 9-sair \n";
    cout<<"\nDigite opcao: \n";
    cin>>opcao;

    switch(opcao) {
      case 1:
        cadastro();
        break;
      case 2:
        exibe();
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


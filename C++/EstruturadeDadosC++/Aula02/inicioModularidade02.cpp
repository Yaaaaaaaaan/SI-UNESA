#include <iostream>
using namespace std;
struct Pessoa{
string nome;
int idade;
};
Pessoa p;
void cadastrar(){
  cout<<"Digite nome; \n";
  cin>>p.nome;
  cout<<"Digite idade; \n";
  cin>>p.idade;
}
void exibir(){
  cout<<"nome; \n"<<p.nome;
  cout<<"\nidade; \n"<<p.idade;
}
int main() {
  int opcao;
  
 while(opcao !=9){
   cout<<"\nCadastro de pessoas";
   cout<<"\n 1-Cadastrar";
   cout<<"\n 2-exibir";
   cout<<"\n 9-sair";
   cout<<"\n Digite a opcao; ";
   cin>>opcao;
   switch(opcao){
     case 1:
      cadastrar();
      break;
     case 2:
      exibir();
      break;
     case 9:
     cout<<"Ate Mais.";
      break;
    default:
    cout<<"Opcao Invalida \n";
   }
 }
}
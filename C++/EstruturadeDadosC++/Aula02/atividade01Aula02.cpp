// Faça um programa para ler uma estrutura com nome, av1, av2. Leia os dados do usuário , calcule a média e exiba o resultado.  A função média deve calcular e retornar o valor, que será exibido posteriormente. Crie um menu com 1- cadastrar, 2-exibir(dentro do exibir vai calcular  e exibir a média), 9-sair.
#include <iostream>
using namespace std;
struct Pessoa{
  string nome;
  int n1,n2;
};
Pessoa p;
float media(){
  float media=0;
  media=(p.n1+p.n2)/2;
  return media;
}
void insere(){
  cout<<"-- Cadastro de Alunos --\n";
cout<<"Aluno: ";
cin>>p.nome;
cout<<"\nNota1: ";
cin>>p.n1;
cout<<"\nNota2: ";
cin>>p.n2;
return;
}
void exibe(){
cout<<"\nAluno: "<<p.nome<<"\n";
cout<<"Nota 1: "<<p.n1;
cout<<"\nNota 2: "<<p.n2<<"\n";
cout<<"Media total: "<<media()<<"\n";
return;
}
int main() {
  int opc=0;
  Pessoa p;
  while (opc !=9){
  cout<<"\n \n Bem vindo! \n"<<"Selecione uma opcao;\n"<<"1- Cadastrar\n"<<"2- Exibir\n"<<"9- Sair\n";
  cin>>opc;
  switch (opc){
    case 1:
    insere();
    break;
    case 2:
    exibe();
    break;
    case 9:
    cout << "Ate mais breve o/ \n";
    break;
    default:
    cout<<"\nOpcao invalida\n";
    break;
  };
  }
}
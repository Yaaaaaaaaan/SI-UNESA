#include <iostream>
#include <string>
using namespace std;
// Faça um programa para ler duas notas, calcular a media e exiba o resultado.
struct Aluno{
  string nome;
  int nota1, nota2, total;
};
int main() {
  Aluno a;

  cout << "Seu nome?\n";
  cin>>a.nome;
  cout<< "\n Nota 1: \n";
  cin>>a.nota1;
  cout<<"\n Nota 2: \n";
  cin>>a.nota2;

  a.total=(a.nota1+a.nota2)/2;
  cout<<"\a"<<a.nome<<", ";
  cout<<"sua media é: "<<a.total;
}
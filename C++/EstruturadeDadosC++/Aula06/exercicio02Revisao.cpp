#include <iostream>
using namespace std;

#define MAX_ALUNO 3
#define MAX_NOTA 3

struct Data {
  int dia;
  int mes;
  int ano;
};

struct Nota {
  float av;
  Data data;
};

struct Pessoa {
  string nome;
  Nota nota[MAX_NOTA];
};

int main() {

  Pessoa aluno[MAX_ALUNO];

  for(int x=0; x< MAX_ALUNO;x++ ) {
    cout << "\n Digite nome:\n";
    cin>>aluno[x].nome;

    for(int y=0;y<MAX_NOTA;y++) {
      cout << "\n Digite NOTA: "<<y <<endl;
      cin>>aluno[x].nota[y].av ;

      cout << "\n Digite data realizacao: "<<endl;
      cout << "\n Digite dia: "<<endl;
      cin>>aluno[x].nota[y].data.dia ;

      cout << "\n Digite mes: "<<endl;
      cin>>aluno[x].nota[y].data.mes ;
      
      cout << "\n Digite ano: "<<endl;
      cin>>aluno[x].nota[y].data.ano ;

    }
  }

   for(int x=0; x< MAX_ALUNO;x++ ) {
    cout << "\n Nome: " <<aluno[x].nome<<endl;

    for(int y=0;y<MAX_NOTA;y++) {

      cout << "\n Data realizacao: ";
      cout<<aluno[x].nota[y].data.dia ;
      cout<<"/";
      cout<<aluno[x].nota[y].data.mes ;
      cout<<"/";
      cout << aluno[x].nota[y].data.ano <<endl;

      cout << "\n AV "<< y << ":"<<aluno[x].nota[y].av ;

    }
  }
  

}
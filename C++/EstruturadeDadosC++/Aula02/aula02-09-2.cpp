#include <iostream>

 

using namespace std;

 

int main()
{
    string tipoQuarto;
    int numeroDias, numeroRef;
    
    int totalHospLuxo, totalHopSimples;
    int totalGeralDias;
    double valorConta, valorTotal;
    double valorDiarias, valorRef;
    
    totalGeralDias = 0;
    totalHopSimples= 0;
    totalHospLuxo = 0;
    valorRef = 0;
    valorDiarias = 0;
    valorTotal = 0;
    valorConta = 0;
     
    
    for (int contador=1; contador <=3; contador++) {
        
        cout<<"Tipo do Quarto: simples ou luxo) "; 
        cin>>tipoQuarto; 
        
        cout<<"Numero Dias: (Ex.: 9999) "; 
        cin>>numeroDias;
        
        cout<<"Numero de RefeiÃ§Ãµes: (Ex.: 9999) "; 
        cin>>numeroRef;
        
        if (tipoQuarto == "luxo") {
            valorDiarias = 200 * numeroDias; 
            valorRef = 40 * numeroRef;
            valorConta = valorDiarias + valorRef;
            totalHospLuxo = totalHospLuxo+numeroDias;
        }
        else {
            valorDiarias = 100 * numeroDias; 
            valorRef = 25 * numeroRef;
            valorConta = valorDiarias + valorRef;
            totalHopSimples = totalHopSimples+numeroDias;
        }
        
        cout<<"O valor da sua conta R$: "<<valorConta<<"\n";
        
        valorTotal = valorTotal + valorConta;
        totalGeralDias = totalGeralDias + numeroDias;
    }
    
    cout<<"O valor Total arrecadado pelo hotel: "<<valorTotal<<"\n";
    cout<<"O Total de hospedes que se hospedaram em quartos de luxo: "<<totalHospLuxo<<"\n";
    cout<<"O Total de hospedes que se hospedaram em quartos simples: "<<totalHopSimples<<"\n";
    cout<<"O Total de dias cobrados no geral (SomatÃ³rio de dias): "<<totalGeralDias<<"\n";
    

 

    return 0;
}
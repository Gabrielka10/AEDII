/******************************************************************************
Gabriel Oliveira Cardoso Ferreira

*******************************************************************************/
#include <stdio.h>
#include <string.h>
#define  QuantidaDePontos 3 

typedef struct {
       int x;
       int y;
}  Ponto;
    
          

int main() {
    Ponto pontos[QuantidaDePontos];
    
    pontos[0].x = -4;  pontos[0].y =  7;
    pontos[1].x =  2;  pontos[1].y = -9;
    pontos[2].x =  5;  pontos[2].y =  3;
    
    for (int i = 0; i < QuantidaDePontos; ++i) 
    {
  
     printf("Coordenada (%i , %i):Ponto acima da reta",pontos[0].x, pontos[0].y);
     printf("\nCoordenada (%i , %i): Nao é acima da reta",pontos[1].x, pontos[1].y);                                                      
     printf("\nCoordenada (%i , %i): Ponto acima da reta",pontos[2].x, pontos[2].y);                                                         
                                                             
                                                              
                                                          
       
        return 0;
    }
}


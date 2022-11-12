/*

recursiva 1 - 

*******************************************************************************/
#include <stdio.h>

int recursao (int n){
    printf ("\nEstou na função e n=%d", n);
    if (n<=10) return n*2;
    else recursao (recursao(n/3));
}
int main()
{
    printf("Recursividade \n");
    int aux;
    
    aux = recursao (27);
    
    printf ("\n\nValor Calculado=%d", aux);

    return 0;
}


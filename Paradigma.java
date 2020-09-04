//declaración de clase
class Auto{
	//atributos
	String marca;
	String modelo;
	String color;
	int velocidad;
	
	//métodos
	void acelerar(){
		velocidad=velocidad+10;
	}
	
	void frenar(){
		velocidad=velocidad-10;
	}
}//end class

//declaración de clase Programa
public class Paradigma{
	public static void main(String[] args){
		// IDE Integrated Development Enviroment
		//	   Entorno de Desarrollo Integrado
		
		//punto de entrada de nuestro proyecto
		System.out.println("Hola Mundo!");
		
		System.out.println("-- auto1 --");
		Auto auto1=new Auto();		//constructor de Auto
		
		//completamos el estado del objeto
		auto1.marca="Ford";
		auto1.modelo="Ka";
		auto1.color="Negro";
		
		auto1.acelerar();		//10
		auto1.acelerar();		//20
		auto1.acelerar();		//30
		auto1.frenar();			//20
		
		System.out.println(auto1.marca+" "+auto1.modelo+" "
				+auto1.color+" "+auto1.velocidad);
		
		System.out.println("-- auto2 --");
		Auto auto2=new Auto();
		auto2.marca="Fiat";
		auto2.modelo="Idea";
		auto2.color="Rojo";
		
		auto2.acelerar();
		
		System.out.println(auto2.marca+" "+auto2.modelo+" "
				+auto2.color+" "+auto2.velocidad);
	}
}//end class

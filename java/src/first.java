
import java.util.InputMismatchException;
import java.util.Scanner;
import java.util.concurrent.TimeUnit;
public class first {

	public static void main(String args[]) throws InterruptedException {	
		
		hi () ;	
		
		}
		
public static void hi () throws InterruptedException
{

		float c = 0;	
		float d=0;
	
		Scanner sc = new Scanner(System.in);
		int number;
		do {
		    System.out.println("\n To buy a ticket please insert 3 Euros\n");
		    while (!sc.hasNextInt()) {
		        System.out.println(" Sorry, Invalid input\n ");
		        sc.next(); // this is important!
		    }
		    number = sc.nextInt();
		} while (number <= 0);	
		{
		if (number==3)
		{
		System.out.println("Please wait while processing your request........");
		TimeUnit.SECONDS.sleep(5);
		System.out.println("Collect your ticket");
		System.out.println("\nProgram terminated");
		hi () ;	
		}
		
		if (number<3)
		{
			
			c =3-number;					
			System.out.println("You nedd to insert still\n" +c );
			System.out.println("Euros " );

			number = sc.nextInt();

			if( number>c)

				d =number-c;							  

			System.out.println("Please wait while processing your request........");
			TimeUnit.SECONDS.sleep(5);
			System.out.println("Take your balance\n"+d);
			System.out.println("Euros " );					  
			System.out.println("and collect your ticket");
			System.out.println("\nProgram terminated");
			hi () ;	
				
		}
		
		if (number > 3)
		{  
			c =number-3;

			System.out.println("Please wait while processing your request........");

			TimeUnit.SECONDS.sleep(5);
			System.out.println("Take your balance \n" +c );
			System.out.println("Euros " );
			System.out.println(" and collect your ticket");
			System.out.println("\nProgram terminated");

			hi () ;						  
		}			
		
			}
		
		}}
	
	
	
	





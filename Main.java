package src;

public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int i = 1;
		while(i<101) {
			System.out.println(comprueba(i));
			i++;
		}
	}
	private static String comprueba(int i) {
		if(i%3==0 && i%5==0) {
			return "Fizzbuzz";
		}
		else if(i%3==0) {
			return "Fizz";
		}
		else if(i%5==0) {
			return "buzz";
		}
		return String.valueOf(i);

	}
	

}

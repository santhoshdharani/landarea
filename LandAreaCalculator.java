import java.util.Scanner;

public class LandAreaCalculator {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Land Area Calculator");
        System.out.println("Choose the shape of the land:");
        System.out.println("1. Rectangle");
        System.out.println("2. Triangle");
        System.out.println("3. Circle");
        System.out.println("4. Trapezoid");
        System.out.println("5. Square"); // Added option for Square
        System.out.print("Enter your choice (1-5): ");

        int choice = scanner.nextInt();
        double area;

        switch (choice) {
            case 1:
                // Rectangle
                System.out.print("Enter the width of the land in metre: ");
                double width = scanner.nextDouble();
                System.out.print("Enter the height of the land in metre: ");
                double height = scanner.nextDouble();
                area = width * height;
                System.out.println("The area of the land is: " + area + " sq.ft");
                break;

            case 2:
                // Triangle
                System.out.print("Enter the base of the land in metre: ");
                double base = scanner.nextDouble();
                System.out.print("Enter the height of the land in metre: ");
                double landHeight = scanner.nextDouble();
                area = 0.5 * base * landHeight;
                System.out.println("The area of the land is: " + area + " sq.ft");
                break;

            case 3:
                // Circle
                System.out.print("Enter the radius of the land in metre: ");
                double radius = scanner.nextDouble();
                area = Math.PI * radius * radius;
                System.out.println("The area of the land is: " + area + " sq.ft");
                break;

            case 4:
                // Trapezoid
                System.out.print("Enter the length of the first parallel side in metre: ");
                double a = scanner.nextDouble();
                System.out.print("Enter the length of the second parallel side in metre: ");
                double b = scanner.nextDouble();
                System.out.print("Enter the height of the trapezoid in metre: ");
                double trapezoidHeight = scanner.nextDouble();
                area = 0.5 * (a + b) * trapezoidHeight;
                System.out.println("The area of the trapezoid is: " + area + " sq.ft");
                break;

            case 5:
                
                System.out.print("Enter the length of one side of the square in metre: ");
                double side = scanner.nextDouble();
                area = side * side;
                System.out.println("The area of the square is: " + area + " sq.ft");
                break;

            default:
                System.out.println("Invalid choice. Please run the program again and select a number between 1 and 5.");
                break;
        }

        scanner.close();
    }
}       
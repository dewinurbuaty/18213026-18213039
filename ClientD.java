import java.net.*;
import java.io.*;
import java.util.*;
 
public class ClientD
{	
	public final static String FILE_TO_RECEIVED1 = "C:/Users/d e w i/Documents/Download/A.txt";		
	public final static String FILE_TO_RECEIVED2 = "C:/Users/d e w i/Documents/Download/B.txt";	
	public final static String FILE_TO_RECEIVED3 = "C:/Users/d e w i/Documents/Download/C.txt";	
	public final static int FILE_SIZE = 6022386;
	
    private static Socket socket; 
    public static void main(String args[])
	
    {	
		Scanner in = new Scanner(System.in);
        try
        {
			
			System.out.println("Masukkan alamat IP server: ");
			String host = in.next();
			System.out.println("Masukkan port server: ");
			int port = in.nextInt();
			
			int SOCKET_PORT = port;
			String SERVER = host;			
            socket = new Socket(host, port);
 
            //Send the message to the server
            OutputStream os = socket.getOutputStream();
            OutputStreamWriter osw = new OutputStreamWriter(os);
            BufferedWriter bw = new BufferedWriter(osw);
 
			System.out.println("DAFTAR FILE");
			System.out.println("1. A.txt");
			System.out.println("2. B.txt");
			System.out.println("3. C.txt");
			System.out.println("Pilih File nomer : ");
			String number = in.next();
			
			String sendMessage = number + "\n";
            bw.write(sendMessage);
            bw.flush();
            System.out.println("Nomor file yang diminta : "+sendMessage);
			
			int x = Integer.parseInt(number);			
			int bytesRead;
			int current = 0;
			FileOutputStream fos = null;
			BufferedOutputStream bos = null;
			Socket sock = null;
			
			switch(x) {
					case 1 :
						//terima file A	
						try {
						  sock = new Socket(SERVER, SOCKET_PORT);
						  System.out.println("Connecting...");

						  // receive file
						  byte [] mybytearray  = new byte [FILE_SIZE];
						  InputStream is = sock.getInputStream();
						  fos = new FileOutputStream(FILE_TO_RECEIVED1);
						  bos = new BufferedOutputStream(fos);
						  bytesRead = is.read(mybytearray,0,mybytearray.length);
						  current = bytesRead;

						  do {
							 bytesRead =
								is.read(mybytearray, current, (mybytearray.length-current));
								 if(bytesRead >= 0) current += bytesRead;
							  } while(bytesRead > -1);

						  bos.write(mybytearray, 0 , current);
						  bos.flush();
						  System.out.println("File " + FILE_TO_RECEIVED1
							  + " downloaded (" + current + " bytes read)");
							  System.out.println("File saved!");
						}
						finally {
						  if (fos != null) fos.close();
						  if (bos != null) bos.close();
						  if (sock != null) sock.close();
						}
						
					break;

					case 2 :
						//terima file B					
						try {
						  sock = new Socket(SERVER, SOCKET_PORT);
						  System.out.println("Connecting...");

						  // receive file
						  byte [] mybytearray  = new byte [FILE_SIZE];
						  InputStream is = sock.getInputStream();
						  fos = new FileOutputStream(FILE_TO_RECEIVED2);
						  bos = new BufferedOutputStream(fos);
						  bytesRead = is.read(mybytearray,0,mybytearray.length);
						  current = bytesRead;

						  do {
							 bytesRead =
								is.read(mybytearray, current, (mybytearray.length-current));
							 if(bytesRead >= 0) current += bytesRead;
						  } while(bytesRead > -1);

						  bos.write(mybytearray, 0 , current);
						  bos.flush();
						  System.out.println("File " + FILE_TO_RECEIVED2
							  + " downloaded (" + current + " bytes read)");
							System.out.println("File saved!");
						}
						finally {
						  if (fos != null) fos.close();
						  if (bos != null) bos.close();
						  if (sock != null) sock.close();
						}
					break;

					case 3 :
						//terima file C
						try {
						  sock = new Socket(SERVER, SOCKET_PORT);
						  System.out.println("Connecting...");

						  // receive file
						  byte [] mybytearray  = new byte [FILE_SIZE];
						  InputStream is = sock.getInputStream();
						  fos = new FileOutputStream(FILE_TO_RECEIVED3);
						  bos = new BufferedOutputStream(fos);
						  bytesRead = is.read(mybytearray,0,mybytearray.length);
						  current = bytesRead;

						  do {
							 bytesRead =
								is.read(mybytearray, current, (mybytearray.length-current));
							 if(bytesRead >= 0) current += bytesRead;
						  } while(bytesRead > -1);

						  bos.write(mybytearray, 0 , current);
						  bos.flush();
						  System.out.println("File " + FILE_TO_RECEIVED3
							  + " downloaded (" + current + " bytes read)");
							  System.out.println("File saved!");
						}
						finally {
						  if (fos != null) fos.close();
						  if (bos != null) bos.close();
						  if (sock != null) sock.close();
						}
					break;

					default :
						System.out.println("File yang diminta tidak ada");
				}
			
        }
        catch (Exception exception)
        {
            exception.printStackTrace();
        }
        finally
        {
            //Closing the socket
            try
            {
                socket.close();
            }
            catch(Exception e)
            {
                e.printStackTrace();
            }
        }
    }
}

import java.util.Scanner;
class Solution {
    public static boolean isSubsequence(String s, String t) {
        int i=0;
        int j=0;
        
        while(i<s.length() && j<t.length()){
            if(s.charAt(i)==t.charAt(j)){
                i++;
            }
            j++;
        }
        if(i==s.length())
            return true;
        else
            return false;
    }
    public static void main(String args[]){
        Scanner sc=new Scanner(System.in);
        String s=sc.next(),t=sc.next();
        System.out.println(isSubsequence(s,t));
    }
}
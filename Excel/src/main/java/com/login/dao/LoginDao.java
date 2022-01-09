package com.login.dao;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import com.login.Alien;

public class LoginDao 
{
	/*String url ="jdbc:mysql://localhost:3306/login";
	String username = "root";
	String password = "";*/
	String dbDriver="com.mysql.jdbc.Driver";
	String sql = "select * from Logins where uname=? and pass=?";
	
	public void loadDriver(String dbDriver)
	{
		try {
			Class.forName(dbDriver);
		} catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
		
	
	public boolean validate(Alien alien) throws SQLException
	{
		try {
			loadDriver(dbDriver);
			Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/logins","root","abc@123");
			PreparedStatement st = con.prepareStatement(sql);
			st.setString(1,alien.getUname());
			st.setString(2,alien.getPass());
			ResultSet rs = st.executeQuery();
			if(rs.next())
			{
				return true;
			}
			
		} catch (SQLException e) {
			
			e.printStackTrace();
		}
		
		return false;
		
	}

}

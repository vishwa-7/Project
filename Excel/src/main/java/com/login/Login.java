package com.login;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import com.login.dao.LoginDao;

/**
implementation class Login
 */
@WebServlet("/Login")
public class Login extends HttpServlet {
	
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;

	public Login() {
		super();
	}
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		response.getWriter().append("Served at: ").append(request.getContextPath());
	}
	
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		try {
			
		String uname = request.getParameter("uname");
		String pass = request.getParameter("pass");
		
		LoginDao dao = new LoginDao();
		Alien alien = new Alien();
		
		alien.setUname(uname);
		alien.setPass(pass);
		
		if(dao.validate(alien))
		{
			HttpSession session = request.getSession();
			session.setAttribute("uname",uname);
			response.sendRedirect("timetable.jsp");
		}
		else {
			response.sendRedirect("main.jsp");
		}
	}
		catch(Throwable theException) 	    
		{
		     System.out.println(theException); 
		}
}
}
	
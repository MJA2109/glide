<?php
	sleep(3);
?>
<div id = "subHeader">
	<div id = "subHeaderFix">
		<div id = "subHeaderSec1">
			
		</div>
		<div id = "subHeaderSec2">
			<div>
				<div>
					<button id = "btnAddUser" class = "btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>
				</div>
				<div>
					<button class = "btn btn-default btnDelete"><span class="glyphicon glyphicon-trash"></span></button>
				</div>
			</div>
		</div>
	</div>
</div>

<div id = "flexfix">
	<div id = "search">
		<form action = "POST" id = "searchUsersForm">
			<div class = "searchInput">
				<input type = "text" name = "userName" placeholder = "User Name" class = "form-control"/>
			</div>
			<div class = "searchInput">
				<button class = "btn btn-default"><span class="glyphicon glyphicon-search"></span>Search</button>
			</div>
		</form>
	</div>

	<div id = "mainView">
		<table id = "usersTable">
			<thead>
				<tr>
					<th>User ID</th>
					<th>User Name</th>
					<th>E-mail</th>
				</tr>
			</thead>
			<tbody>
				<!-- users' data goes here -->
			</tbody>
		</table>
	</div>
</div>

<div id = "modalAddUser" class = "modalStyle">
	<form id = "modalUserForm" method = "POST" class = "modalForm">
		<input type = 'hidden' name = 'action' value = 'addUser' />
		<div class = "modalCloseIm"></div>
		<h4><span class="glyphicon glyphicon-user"></span>Add User</h4>
		<div class = "modalInput">
			<input type = "text" name = "userName" placeholder = "User Name" class = "form-control"/>	
		</div>
		<div class = "modalInput">
			<input type = "text" name = "userEmail" placeholder = "Email" class = "form-control"/>	
		</div>
		<div class = "modalInput">
			<input type = 'submit' value = 'Submit' class = "btn btn-default" id = "btnSubmitUser"/>
		</div>
		<div class = "clear"></div>
	</form>
</div>


<div id = "modalDeleteConfirmation" class = "comfirmationModal">
	<div>
		<p>Are you sure we want to delete the selected Users ?</p>
	</div>
	<div>
		<button id = "deleteUser" class = "btn btn-default"><span class="glyphicon glyphicon-remove"></span>Yes</button>
	</div>
</div>



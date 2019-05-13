<?php
?>
<!-- Bootstrap Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form action="/action_page.php" method="post">
                <input hidden name="action" value="adminLogin">
                <div class="modal-header">
                    <h4 class="modal-title">Log in with your Username</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <table>
                        <tbody>
                        <tr>
                            <td>
                                <input type="text" id="username" name="username" placeholder="Username" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="userNamSpan"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" id="password" name="password" placeholder="Password" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="passwordSpan"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" id="submitButton" value="Login"/>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
        <!-- END Modal content-->
    </div>
</div>
<!-- END Bootstrap Modal -->

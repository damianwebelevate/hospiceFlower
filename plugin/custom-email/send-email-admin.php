<div class="wrap">
  <div id="loadingScreen" style="display: none;"><!-- while we are waiting for the email to send -->
    <div class="loader"></div>
    <div class="some"><h1>Sending Email Please Wait...</h1></div>
  </div>
  <div id="messageArea"><!-- outputs messages and errors if any --> </div>
  <input type="button" style="display: none;" id="dismissError" value="Try Another Email Address" >
  <table id="output" style="display: none;">
    <thead>
      <th>Order Id:</th>
      <th>FName</th>
      <th>SName</th>
      <th>Email</th>
      <th>Donation Amount</th>
      <th>Date Time Created</th>
      <th>Product Id</th>
      <th>Product Name</th>
    </thead>
    <tbody>
      <tr id="outputRow">

      </tr>
      <tr>
        <th colspan='8' style='border-top: none; border-bottom: none;'>&nbsp;</th>
      </tr>
      <tr>
        <th colspan='8' style='border-top: none; border-bottom: none;'>&nbsp;</th>
      </tr>
      <tr>
        <th colspan='8' style='border-top: none; border-bottom: none; text-align: left;'>
          &nbsp;
        </th>
      </tr>
      <tr>
        <form id="doEmail">
        <td style="border: none; border-left: 1px solid black;"><input type="hidden" id="hiddenEmailAddress" name="hiddenEmailAddress"></td>
        <td style="border: none;"><input type="hidden" id="hiddenOrderNumber" name="hiddenOrderNumber"></td>
        <td style="border: none;"><input type="hidden" id="hiddenOrderName" name="hiddenOrderName"></td>
        <td style="border: none;"><input type="hidden" id="hiddenFirstName" name="hiddenFirstName"></td>
        <td colspan="2" style='border: none; text-align: right;'>
          <h3>Send E-mail:</h3>
        </td>
        <td style="border: none;"><input type="checkbox" id="checkme" name="checkme" ></td>
        <td style='border-top: none; border-bottom: none; border-left: none;'>
          <input type="button" name="sendEmail" id="sendEmail" value="Send Email">
        </form>
        </td>
      </tr>
      <tr>
        <th style='border-top: none;' colspan='8'>&nbsp;</th>
      </tr>
    </tbody>
    <tfoot>
        <tr>
          <td colspan='8'>
            <legend>Latest results for this email address</legend>
          </td>
        </tr>
    </tfoot>
  </table>
  <form id="sendEmailInput">
    <p>Enter an email address to search for the latest order made by a customer.</p>
    <label for="inputEmail">Enter an Email address</label>
    <input id="inputEmail" type="email" name="inputEmail" value="" placeholder="Enter Email Address">
    <input type="button" id="getMeData" value="Check For Order">
  </form>
</div>

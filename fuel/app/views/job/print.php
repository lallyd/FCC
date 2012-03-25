<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FCC</title>

    <style>
    body {
      font-family: sans-serif;
    } 

    img {
      width: 500px;
    }
    strong {
      display: block;
      background: #c7d6e9;
      border: 1px solid #2e3192;
      padding: 5px;
      margin: 5px 0;
      text-transform:uppercase;
      font-size: 0.9em;
    }

    .large {
      font-size: 1.1em;
    }

    .mtop {
      padding-top: 20px;
      display: block;

   }
   .mbottom {
      padding-bottom: 20px;
    }

    .l { float: left; margin-right: 10px; width: 500px; }
    </style>
</head>
<body>


<table class="l">
   <tr>
      <td><img src="/assets/img/DIC-Original.png" /></td>
   </tr>
   <tr>
      <td class="mtop">
         25 St Andrews Road South,<br />
         Lytham St Annes<br />
         Lancashire<br />
         FY8 1PZ<br />
         Phone 01253 712257<br />
         DiscountInkCartridges@gmail.com
      </td>
   </tr>
   <tr>
      <td class="mtop">
         <table width="100%">
            <tr>
               <td colspan="2" width="65%">
                  <strong>Customer Name</strong>
                  <?php echo $job->customer->name; ?>
               </td>
               <td>
                  <strong>Contact Number</strong>
                  <?php echo $job->customer->contact_number; ?>
               </td>
            </tr>
            <tr>
               <td>
                  <strong>Password</strong>
                  <?php echo $job->password; ?>
               </td>
               <td>
                  <strong>Accessories</strong>
                  <?php echo $job->accessories; ?>
               </td>
               <td>
                  <strong>Serial Number</strong>
                  <?php echo $job->serial_number; ?>
               </td>
            </tr>
         </table>
      </td>
   </tr>
   <tr>
      <td class="mtop">
         <strong>Fault Description</strong>
         <?php echo $job->fault_description; ?>
      </td>
   </tr>
   <tr>
      <td class="mtop">
         <strong>Signature</strong>
         <span class="mtop">
         __________________________________________________
         </span>
      </td>
   </tr>
   <tr>
      <td class="mtop large">
      Make all cheques payable to Discount Ink Cartridges<br />
      Thank you for your business!
      </td>
   </tr>
</table>

<table class="l">
   <tr>
      <td><img src="/assets/img/DIC-Original.png" /></td>
   </tr>
   <tr>
      <td class="mtop">
         25 St Andrews Road South,<br />
         Lytham St Annes<br />
         Lancashire<br />
         FY8 1PZ<br />
         Phone 01253 712257<br />
         DiscountInkCartridges@gmail.com
      </td>
   </tr>
   <tr>
      <td class="mtop">
         <table width="100%">
            <tr>
               <td colspan="2" width="65%">
                  <strong>Customer Name</strong>
                  <?php echo $job->customer->name; ?>
               </td>
               <td>
                  <strong>Contact Number</strong>
                  <?php echo $job->customer->contact_number; ?>
               </td>
            </tr>
            <tr>
               <td>
                  <strong>Password</strong>
                  <?php echo $job->password; ?>
               </td>
               <td>
                  <strong>Accessories</strong>
                  <?php echo $job->accessories; ?>
               </td>
               <td>
                  <strong>Serial Number</strong>
                  <?php echo $job->serial_number; ?>
               </td>
            </tr>
         </table>
      </td>
   </tr>
   <tr>
      <td class="mtop">
         <strong>Fault Description</strong>
         <?php echo $job->fault_description; ?>
      </td>
   </tr>
   <tr>
      <td class="mtop">
         <strong>Signature</strong>
         <span class="mtop">
         __________________________________________________
         </span>
      </td>
   </tr>
   <tr>
      <td class="mtop large">
      Make all cheques payable to Discount Ink Cartridges<br />
      Thank you for your business!
      </td>
   </tr>
</table>
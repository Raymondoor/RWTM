<?php require_once(__DIR__.'/../vendor/autoload.php'); // Copy the file and paste it where it belongs. change autoload path accordingly.
// Functions and loaded data here.
use raymondoor\rqst_validate;
use function raymondoor\return_header;
session_start();

// $request = new rqst_validate();
// if(!$request->admin_gate()){
//     return_header('/?error=Please_Login_First');
// }
function htmlselectday($day){
    if(strtolower(date('D')) === $day){
        return 'selected';
    }
}
//Until here.
// Page specific data here.
$TITLE = 'Weekly Task Manager';
$INDEX = 'admin';

// Until here. (keep above the html content)
include_once(TEMPLATE_DIR.'/html-head.php');
include_once(TEMPLATE_DIR.'/html-header.php');
?>
<main>
    <div id="maincontent">
        <table>
            <caption>
                Your weekly tasks
            </caption>
            <thead>
                <tr>
                    <th scope="col">Sunday</th>
                    <th scope="col">Monday</th>
                    <th scope="col">Tuesday</th>
                    <th scope="col">Wednesday</th>
                    <th scope="col">Thursday</th>
                    <th scope="col">Friday</th>
                    <th scope="col">Saturday</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row" style="background-color: orange;">キリスト教概論Ⅱasdfasdf</td>
                </tr>
            </tbody>
        </table>
        <select name="day" autocomplete required>
            <option value="sun" <?=htmlselectday('sun')?>>Sunday</option>
            <option value="mon" <?=htmlselectday('mon')?>>Monday</option>
            <option value="tue" <?=htmlselectday('tue')?>>Tuesday</option>
            <option value="wed" <?=htmlselectday('wed')?>>Wednesday</option>
            <option value="thu" <?=htmlselectday('thu')?>>Thursday</option>
            <option value="fri" <?=htmlselectday('fri')?>>Friday</option>
            <option value="sat" <?=htmlselectday('sat')?>>Saturday</option>
        </select>
    </div>
</main>
<?php
include_once(TEMPLATE_DIR.'/html-footer.php');
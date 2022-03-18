<!DOCTYPE html>
<html>
    <head>
        <title>Survey Questions</title>
    </head>
    <body>
        <?php
            session_start();
            $submittedName = $_SESSION["name"];

            Echo "Welcome, " . $submittedName;
        ?>

        <h1>Survey Questions</h1>
        <p>Read the following statements and select the choice that applies the most to you</p>
        <br>
        <div>
            <form action="./completeForm.php" method="post">
                <div>
                    <h3>PHP was a difficult language to learn</h3>
                    <input type="radio" id="stronglyDisagree" name="difficulty" value="strongly disagree"/>
                    <label>Strongly Disagree</label>
                    <input type="radio" id="disagree"  name="difficulty" value="disagree"/>
                    <label>Disagree</label>
                    <input type="radio" id="neutral" name="difficulty" value="neutral"/>
                    <label>Neutral</label>
                    <input type="radio" id="agree" name="difficulty" value="agree"/>
                    <label>Agree</label>
                    <input type="radio" id="stronglyAgree" name="difficulty" value="strongly agree"/>
                    <label>Strongly Agree</label>
                </div>
                <div>
                    <h3>I feel like I learned a lot from the experience</h3>
                    <input type="radio" id="stronglyDisagree" name="learning" value="strongly disagree"/>
                    <label>Strongly Disagree</label>
                    <input type="radio" id="disagree"  name="learning" value="disagree"/>
                    <label>Disagree</label>
                    <input type="radio" id="neutral" name="learning" value="neutral"/>
                    <label>Neutral</label>
                    <input type="radio" id="agree" name="learning" value="agree"/>
                    <label>Agree</label>
                    <input type="radio" id="stronglyAgree" name="learning" value="strongly agree"/>
                    <label>Strongly Agree</label>
                </div>
                <div>
                    <h3>I was able to adapt quickly to the language</h3>
                    <input type="radio" id="stronglyDisagree" name="adapt" value="strongly disagree"/>
                    <label>Strongly Disagree</label>
                    <input type="radio" id="disagree"  name="adapt" value="disagree"/>
                    <label>Disagree</label>
                    <input type="radio" id="neutral" name="adapt" value="neutral"/>
                    <label>Neutral</label>
                    <input type="radio" id="agree" name="adapt" value="agree"/>
                    <label>Agree</label>
                    <input type="radio" id="stronglyAgree" name="adapt" value="strongly agree"/>
                    <label>Strongly Agree</label>
                </div>
                <div>
                    <h3>I am grateful that I took the time to learn PHP</h3>
                    <input type="radio" id="stronglyDisagree" name="grateful" value="strongly disagree"/>
                    <label>Strongly Disagree</label>
                    <input type="radio" id="disagree"  name="grateful" value="disagree"/>
                    <label>Disagree</label>
                    <input type="radio" id="neutral" name="grateful" value="neutral"/>
                    <label>Neutral</label>
                    <input type="radio" id="agree" name="grateful" value="agree"/>
                    <label>Agree</label>
                    <input type="radio" id="stronglyAgree" name="grateful" value="strongly agree"/>
                    <label>Strongly Agree</label>
                </div>
                <br>
                <input type="submit" id="<?php Echo $submittedName; ?>" name="submitAnswers"/>
            </form>
        </div>

    </body>
</html>
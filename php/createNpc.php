<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create NPC</title>
    <!-- ### Bootstrap ### -->
    <link rel="stylesheet" href="../style/bootstrap.css">
    <!-- ### Default CSS ### -->
    <link rel="stylesheet" href="../style/base.css">
    <!-- ### FONTS ### -->
    <link rel="stylesheet" href="../fonts/fonts.css">
    <!-- ### JQuery ### -->
    <script src="script/jquery-3.7.1.min.js"></script>
</head>

<body>
    <?php
    require 'DatabaseStuff.php';
    $conn = createConnection();

    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- ############# NAME ############# -->
                <div class="mb-3">
                    <label for="passwordInput" class="form-label">
                        Name
                    </label>
                    <input type="text" class="form-control" id="nameInput" name="name" required>
                </div>
                <!-- ############# CURRENCIES ############# -->
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="classInput" class="form-label">
                                Economy
                            </label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="copper_coins">CP</span>
                                <input type="number" min="0" class="form-control" placeholder="0" name="copper_coins" required>
                                <span class="input-group-text" id="silver_coins">SP</span>
                                <input type="number" min="0" class="form-control" placeholder="0" name="silver_coins" required>
                                <span class="input-group-text" id="electrum_coins">EP</span>
                                <input type="number" min="0" class="form-control" placeholder="0" name="electrum_coins" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="gold_coins">GP</span>
                                <input type="number" min="0" class="form-control" placeholder="0" name="gold_coins" required>
                                <span class="input-group-text" id="platinum_coins">PP</span>
                                <input type="number" min="0" class="form-control" placeholder="0" name="platinum_coins" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <!-- ############# ARMOR CLASS ############# -->
                <div class="mb-3">
                    <label for="armorClassInput" class="form-label">
                        Armor Class
                    </label>
                    <input type="text" class="form-control" id="armorClassInput" name="armor_class" required>
                </div>
                <!-- ############# CLASS ############# -->
                <div class="mb-3">
                    <label for="classInput" class="form-label">
                        Class
                    </label>
                    <select class="form-select" aria-label="classInput" name="class" required>
                        <option selected>Open this select menu</option>
                        <?php
                        $result = getAllClasses($conn);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row["id"] . "'>" . ucfirst($row["name"]) . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <!-- ############# RACE ############# -->
                <div class="mb-3">
                    <label for="raceInput" class="form-label">
                        Race
                    </label>
                    <select class="form-select" aria-label="raceInput" name="race" required>
                        <option selected>Open this select menu</option>
                        <?php
                        $result = getAllRaces($conn);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row["id"] . "'>" . ucfirst($row["name"]) . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <!-- ############# ALIGNMENT ############# -->
                <div class="mb-3">
                    <label for="alignmentInput" class="form-label">
                        Alignment
                    </label>
                    <select class="form-select" aria-label="alignmentInput" name="alignment" required>
                        <option selected>Open this select menu</option>
                        <?php
                        $result = getAllAlignments($conn);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row["name"] . "'>" . ucwords($row["name"]) . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col text-center">
                <div class="mb-3">
                    <label for="personalityTraits" class="form-label">
                        PERSONALITY TRAITS
                    </label>
                    <textarea class="form-control" placeholder="personality traits..." id="personalityTraits" name="personalityTraits"></textarea>
                </div>
                <div class="mb-3">
                    <label for="ideals" class="form-label">
                        IDEALS
                    </label>
                    <textarea class="form-control" placeholder="ideals..." id="ideals" name="ideals"></textarea>
                </div>
                <div class="mb-3">
                    <label for="bonds" class="form-label">
                        BONDS
                    </label>
                    <textarea class="form-control" placeholder="bonds..." id="bonds" name="bonds"></textarea>
                </div>
                <div class="mb-3">
                    <label for="flaws" class="form-label">
                        FLAWS
                    </label>
                    <textarea class="form-control" placeholder="flaws..." id="flaws" name="flaws"></textarea>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
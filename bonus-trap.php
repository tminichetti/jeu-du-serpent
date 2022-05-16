<?php
function check_case(int $case)
{
    switch ($case) {
        case 20:
            return 35;
            break;
        case 2:
            return 17;
            break;
        case 31:
            return 43;
            break;
        case 37:
            return 12;
            break;
        case 14:
            return 7;
            break;
        case 46:
            return 33;
            break;
        default:
            return $case;
            break;
    }
}
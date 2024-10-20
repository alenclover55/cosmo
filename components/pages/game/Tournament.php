<?
if ($tournament == '1' or $tournament == '0') {
	$titleTournament = $titleSlots;
	$end = $slots_tournament_end;
	if ($tournament == '1') {
		$resultP = $points;
	} 
	else {
		$resultP = 'Вы не участвуете';
	}
}
if ($tournament == '2') {
	$titleTournament = $titleWeekly;
	$end = $endtime;
	$resultP = $points;
}

function getBgGradient($place)
{
	switch ($place) {
		case 1:
			return "from-[#FFB807] to-transparent";

		case 2:
			return "from-[#62647A] to-transparent";

		case 3:
			return "from-[#B7633F] to-transparent";

		default:
			return "from-[#62647A] to-transparent";
	}
}

function getCupHeight($place)
{
	return $place == 1 ? "max-h-[5rem]" : "max-h-[4.063rem]";
}

function getBlockHeight($place)
{
	return $place == 1 ? "h-[7.875rem]" : "h-[6.875rem]";
}

?><div class="shrink-0 relative max-w-[20.625rem] w-full border-l border-l-[#212333]/[0.5] p-[1.125rem] min-[1125px]:flex hidden flex-col">
    <div class="flex flex-col relative z-[2] gap-3 h-full">
        <div class="flex flex-col pt-2 gap-4">
            <div class="flex flex-col items-center text-center">
                <span class="text-[#9CA0B5] uppercase text-sm font-[500]">Турнир</span>
                <span class="text-lg font-[600]"><?=$titleTournament?></span>
            </div>
            <div class="flex flex-col items-center text-center gap-1">
                <span class="text-[#9CA0B5] text-xs font-[500]">Окончание:</span>
                <span class="text-sm font-[600]"><?=$end?></span>
            </div>
        </div>
        <div class="flex flex-col gap-3">
		<div class="flex items-end gap-3">
			<?php
				$users = [];
				$all_tovars = $link->query("SELECT * FROM users WHERE tournament = '$tournament' ORDER BY points DESC LIMIT 3");
				while ($row = $all_tovars->fetch_assoc()) {
					$users[] = $row; // Сохраняем данные каждого пользователя в массив
				}

				// Отображение информации по местам в нужном порядке: сначала 2, потом 1, потом 3
				$order = [2, 1, 3];
				foreach ($order as $displayPlace) {
					if (isset($users[$displayPlace - 1])) { // Проверяем, что такое место есть в массиве
						$user = $users[$displayPlace - 1];
						$visiblePart = (strlen($user['login']) > 8) ? substr($user['login'], 0, 8) . '...' : $user['login'];
						echo '<div class="flex flex-col items-center -space-y-7">
								<img src="assets/images/cups/cup-'.$displayPlace.'.svg" class="max-h-['.($displayPlace == 1 ? '4.625rem' : '3.75rem').'] relative z-[2]" alt="">
								<div class="flex relative flex-col w-[5.625rem] h-['.($displayPlace == 1 ? '6.875rem' : '6.25rem').'] rounded-[.375rem] bg-gradient-to-b ' . ($displayPlace == 1 ? 'from-[#FFB807]' : ($displayPlace == 2 ? 'from-[#62647A]' : 'from-[#B7633F]')) . ' to-transparent">
									<div class="absolute pt-5 px-2 whitespace-nowrap max-w-full left-[.063rem] text-[.688rem] text-[#9CA0B5] font-[600] flex flex-col justify-center items-center text-center top-[.063rem] w-[calc(100%_-_.125rem)] h-[calc(100%_-_.125rem)] bg-[#2E3243] rounded-[.375rem]">
										<span class="max-w-full overflow-hidden text-ellipsis whitespace-nowrap">@'.$visiblePart.'</span>
										<span class="max-w-full overflow-hidden text-ellipsis whitespace-nowrap text-sm text-white">'.$user['points'].' ₽</span>
										<span class="max-w-full overflow-hidden text-ellipsis whitespace-nowrap">'.$user['points'].'</span>
									</div>
								</div>
							  </div>';
					}
				}
			?>
		</div>
		<div class="bg-[#2E3243] border border-[#3C4053] flex gap-0.5 flex-col rounded-[.375rem] p-[1rem_1.25rem]">
			<div class="flex items-center justify-between text-[#DBDBDB] font-[600] text-sm">
				<span>Ставок для участия:</span>
				<span>10</span>
			</div>
			<div class="flex items-center justify-between text-[#9CA0B5] font-[600] text-xs">
				<span>Мой результат</span>
				<span><?php if ($tournament == '1') { echo $points; } else { echo 'Вы не участвуете'; } ?></span>
			</div>
		</div>
	</div>
        <div class="flex flex-col justify-end flex-1 gap-3 relative">
    <div class="absolute left-0 overflow-hidden top-0 h-[calc(100%_-_36px)] w-full rounded-[.375rem] bg-[#2E3243] border border-[#3C4053]">
        <div
            class="flex flex-col h-full [&_div.scrollbar-thumb]:!bg-[#b9bfeb]/[0.25] [&_div.scrollbar-thumb]:backdrop-blur-[10px]"
            x-init="Scrollbar.init($refs.scrollbar, {
                damping: 0.1,
                plugins: {
                    overscroll: {
                        effect: 'glow',
                        glowColor: '#494E67'
                    }
                },
            })"
            x-ref="scrollbar"
        >
            <?php
                $allPlaces = '';
				
                if ($tournament == '1') {
                    $all_tovars = $link->query("SELECT * FROM users WHERE tournament = 1 ORDER BY points DESC LIMIT 10");    
                } else {
                    $all_tovars = $link->query("SELECT * FROM users WHERE tournament = 2 ORDER BY points DESC LIMIT 10");    
                }
                
                $place = 0;
                while ($row = $all_tovars->fetch_assoc()) {
                    $place++;
                    $user_id = $row['id'];
                    $login = $row['login'];
                    $points = $row['points'];
                    
                    if ($tournament == '1') {
                        $pointsUser = $resultP;
                        if ($place == 1) {
                            $pricetournament = 25000;
                        } elseif ($place == 2) {
                            $pricetournament = 10000;
                        } elseif ($place == 3) {
                            $pricetournament = 5000;
                        } elseif ($place >= 4 && $place <= 10) {
                            $pricetournament = 1000;
                        }
                    } else {
                        $pointsUser = $resultP;
                        if ($place == 1) {
                            $pricetournament = 7500;
                        } elseif ($place == 2) {
                            $pricetournament = 5000;
                        } elseif ($place == 3) {
                            $pricetournament = 3750;
                        } elseif ($place >= 4 && $place <= 10) {
                            $pricetournament = 1250;
                        }
                    }

                    if ($user_id == $id) {
                        $visiblePart = substr($login, 0, 8) . '..';
                        $visiblePart .= ' (Это вы)';
                    } else {
                        $visiblePart = substr($login, 0, 8);
                        $visiblePart .= '***';
                    }

                    // Создание блока для каждого места
                    $allPlaces .= "<div class=\"h-[2.625rem] shrink-0 px-4 flex items-center justify-between border-b border-b-white/[0.05] last:border-b-0\">
                        <div class=\"flex items-center gap-2\">
                            <span class=\"w-[2rem] text-[#9CA0B5] text-base font-[600]\">$place</span>
                            <span class=\"font-[500] text-base\">@$visiblePart</span>
                        </div>
                        <span class=\"font-[500] text-sm text-[#9CA0B5]\">$points </span>
                    </div>";

                }
                echo $allPlaces;
           
            ?>
        </div>
    </div>
    <button data-href="/tournaments" class="maskedLink shrink-0 w-fit text-sm font-[600] text-[#9CA0B5] transition-[color] duration-300 hover:text-white">
        Показать все турниры
    </button>
</div>

    </div>
    <div class="absolute w-full h-full left-0 top-0">
        <div class="absolute w-full h-full left-0 top-0 bg-[radial-gradient(transparent,_#131521_75%)] z-[1]"></div>
        <img src="assets/images/backgrounds/cosmos.jpg" class="w-full h-full object-cover opacity-70">
    </div>
</div>
<?php $games = $link->query("SELECT * FROM jackpot WHERE status = 1 ORDER BY id DESC LIMIT 30");
 while($game = $games->fetch_assoc()): ?>
    <?php
    $game_id = $game['id'];

    $total_bank_result = $link->query("SELECT SUM(amount) AS total_bank FROM jackpot_bets WHERE game_id = '$game_id'");
    $total_bank_data = $total_bank_result->fetch_assoc();
    $total_bank = $total_bank_data['total_bank'];

    $winner_id = $game['winner_id'];
    $winner = $link->query("SELECT login, img FROM users WHERE id = '$winner_id'");
    $winner_data = $winner->fetch_assoc();

    $winner_stake_result = $link->query("SELECT SUM(amount) AS total_stake FROM jackpot_bets WHERE game_id = '$game_id' AND user_id = '$winner_id'");
    $winner_stake_data = $winner_stake_result->fetch_assoc();
    $total_stake = $winner_stake_data['total_stake'];

    $total_chance = ($total_stake / $total_bank) * 100;
    ?>
    <div class="flex max-[1375px]:shrink-0 max-[1375px]:gap-6 p-2 flex items-center justify-between rounded-xl bg-[#8BA4E5]/[0.15] transition-all duration-300 hover:bg-[#8BA4E5]/[0.25]">
        <div class="flex items-center gap-2">
            <div class="shrink-0 w-[1.75rem] h-[1.75rem] rounded-full flex items-center justify-center">
                <img src="<?php echo htmlspecialchars($winner_data['img']); ?>" class="w-full h-full rounded-full object-cover" alt="">
            </div>
            <div class="flex flex-col *:leading-[100%] gap-1">
                <span class="font-semibold text-white/[0.65] text-[.625rem]">#<?php echo htmlspecialchars($game['winner_ticket']); ?></span>
                <span class="font-bold text-xs max-w-[3rem] whitespace-nowrap text-ellipsis overflow-hidden"><?php echo htmlspecialchars($winner_data['login']); ?></span>
            </div>
        </div>
        <div class="flex-1 flex items-center justify-center">
            <div class="flex flex-col *:leading-[100%] gap-1">
                <span class="font-semibold text-white/[0.65] text-[.625rem]">Шанс</span>
                <span class="font-bold text-xs"><?php echo number_format($total_chance, 2); ?>%</span>
            </div>
        </div>
        <div class="flex justify-end pr-2">
            <div class="flex flex-col items-end gap-1">
                <span class="font-semibold text-white/[0.65] text-[.625rem]">Сумма</span>
                <div class="flex items-center gap-1 *:leading-[100%] gap-1">
                    <span class="font-bold text-xs"><?php echo number_format($total_bank); ?></span>
                    <svg class="w-3 h-3"><use xlink:href="assets/images/symbols.svg#icon-rub"></use></svg>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
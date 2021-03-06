<?php

namespace Plancke\HypixelPHP\provider;

use Closure;
use Plancke\HypixelPHP\classes\Module;
use Plancke\HypixelPHP\responses\booster\Boosters;
use Plancke\HypixelPHP\responses\friend\Friends;
use Plancke\HypixelPHP\responses\gameCounts\GameCounts;
use Plancke\HypixelPHP\responses\guild\Guild;
use Plancke\HypixelPHP\responses\KeyInfo;
use Plancke\HypixelPHP\responses\Leaderboards;
use Plancke\HypixelPHP\responses\player\Player;
use Plancke\HypixelPHP\responses\PlayerCount;
use Plancke\HypixelPHP\responses\RecentGames;
use Plancke\HypixelPHP\responses\skyblock\SkyBlockProfile;
use Plancke\HypixelPHP\responses\Status;
use Plancke\HypixelPHP\responses\WatchdogStats;

/**
 * Class Provider
 * @package Plancke\HypixelPHP\provider
 */
class Provider extends Module {

    /**
     * @return Closure
     */
    public function getPlayer() {
        return function ($HypixelPHP, $data) {
            return new Player($HypixelPHP, $data);
        };
    }

    /**
     * @return Closure
     */
    public function getGuild() {
        return function ($HypixelPHP, $data) {
            return new Guild($HypixelPHP, $data);
        };
    }

    /**
     * @return Closure
     */
    public function getStatus() {
        return function ($HypixelPHP, $data) {
            return new Status($HypixelPHP, $data);
        };
    }

    /**
     * @return Closure
     */
    public function getRecentGames() {
        return function ($HypixelPHP, $data) {
            return new RecentGames($HypixelPHP, $data);
        };
    }

    /**
     * @return Closure
     */
    public function getFriends() {
        return function ($HypixelPHP, $data) {
            return new Friends($HypixelPHP, $data);
        };
    }

    /**
     * @return Closure
     */
    public function getBoosters() {
        return function ($HypixelPHP, $data) {
            return new Boosters($HypixelPHP, $data);
        };
    }

    /**
     * @return Closure
     */
    public function getLeaderboards() {
        return function ($HypixelPHP, $data) {
            return new Leaderboards($HypixelPHP, $data);
        };
    }

    /**
     * @return Closure
     */
    public function getKeyInfo() {
        return function ($HypixelPHP, $data) {
            return new KeyInfo($HypixelPHP, $data);
        };
    }

    /**
     * @return Closure
     */
    public function getWatchdogStats() {
        return function ($HypixelPHP, $data) {
            return new WatchdogStats($HypixelPHP, $data);
        };
    }

    /**
     * @return Closure
     */
    public function getPlayerCount() {
        return function ($HypixelPHP, $data) {
            return new PlayerCount($HypixelPHP, $data);
        };
    }

    /**
     * @return Closure
     */
    public function getGameCounts() {
        return function ($HypixelPHP, $data) {
            return new GameCounts($HypixelPHP, $data);
        };
    }

    /**
     * @return Closure
     */
    public function getSkyBlockProfile() {
        return function ($HypixelPHP, $data) {
            return new SkyBlockProfile($HypixelPHP, $data);
        };
    }

}
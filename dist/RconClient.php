<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Kepler\Rcon;

/**
 */
class RconClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Ping(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kepler.rcon.Rcon/Ping',
        $argument,
        ['\Kepler\Rcon\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetOnlineCount(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kepler.rcon.Rcon/GetOnlineCount',
        $argument,
        ['\Kepler\Rcon\OnlineCountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Kepler\Rcon\RefreshAppearanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RefreshAppearance(\Kepler\Rcon\RefreshAppearanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kepler.rcon.Rcon/RefreshAppearance',
        $argument,
        ['\Kepler\Rcon\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Kepler\Rcon\RefreshBadgesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RefreshBadges(\Kepler\Rcon\RefreshBadgesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kepler.rcon.Rcon/RefreshBadges',
        $argument,
        ['\Kepler\Rcon\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RefreshEvents(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kepler.rcon.Rcon/RefreshEvents',
        $argument,
        ['\Kepler\Rcon\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RefreshCatalogue(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kepler.rcon.Rcon/RefreshCatalogue',
        $argument,
        ['\Kepler\Rcon\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function OpenInfobus(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kepler.rcon.Rcon/OpenInfobus',
        $argument,
        ['\Kepler\Rcon\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CloseInfobus(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kepler.rcon.Rcon/CloseInfobus',
        $argument,
        ['\Kepler\Rcon\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * TODO: Alert function with enum type
     * @param \Kepler\Rcon\RoomAlertRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AlertRoom(\Kepler\Rcon\RoomAlertRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kepler.rcon.Rcon/AlertRoom',
        $argument,
        ['\Kepler\Rcon\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Kepler\Rcon\UserAlertRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AlertUser(\Kepler\Rcon\UserAlertRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kepler.rcon.Rcon/AlertUser',
        $argument,
        ['\Kepler\Rcon\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Kepler\Rcon\HotelAlertRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AlertHotel(\Kepler\Rcon\HotelAlertRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kepler.rcon.Rcon/AlertHotel',
        $argument,
        ['\Kepler\Rcon\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Kepler\Rcon\UserOnlineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function IsUserOnline(\Kepler\Rcon\UserOnlineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kepler.rcon.Rcon/IsUserOnline',
        $argument,
        ['\Kepler\Rcon\UserOnlineResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Kepler\Rcon\Room $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ChangeRoom(\Kepler\Rcon\Room $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kepler.rcon.Rcon/ChangeRoom',
        $argument,
        ['\Kepler\Rcon\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Kepler\Rcon\User $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ChangeUser(\Kepler\Rcon\User $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kepler.rcon.Rcon/ChangeUser',
        $argument,
        ['\Kepler\Rcon\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Kepler\Rcon\BanRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Ban(\Kepler\Rcon\BanRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kepler.rcon.Rcon/Ban',
        $argument,
        ['\Kepler\Rcon\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Kepler\Rcon\UnbanRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Unban(\Kepler\Rcon\UnbanRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/kepler.rcon.Rcon/Unban',
        $argument,
        ['\Kepler\Rcon\Response', 'decode'],
        $metadata, $options);
    }

}

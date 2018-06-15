<?php
namespace Kepler\Rcon;

use Grpc\ChannelCredentials as ChannelCredentials;
use Google\Protobuf\GPBEmpty as EmptyRequest;

use Kepler\Rcon\RconClient as RconClient;
use Kepler\Rcon\RefreshAppearanceRequest as RefreshAppearanceRequest;
use Kepler\Rcon\RefreshBadgesRequest as RefreshBadgesRequest;
use Kepler\Rcon\HotelAlertRequest as HotelAlertRequest;
use Kepler\Rcon\UserOnlineRequest as UserOnlineRequest;

class RemoteConnection
{
    private $client;

    public function __construct(array $options)
    {
        $this->client = new RconClient($options['host'] . ':' . $options['port'], [
            'credentials' => ChannelCredentials::createInsecure()
        ]);
    }

    public function getOnlineCount(): int
    {
        // Wait 10ms to connect to RCON
        if (!$this->client->waitForReady(10 * 1000)) {
            return 0;
        }

        // Call emulator
        list($resp, $status) = $this->client->GetOnlineCount(new EmptyRequest())->wait();

        // Emulator is likely offline, return 0
        if ($status->code !== \Grpc\STATUS_OK) {
            return 0;
        }

        // Success!
        return $resp->getOnlineCount();
    }

    public function ping(): bool
    {
        // Wait 10ms to connect to RCON
        if (!$this->client->waitForReady(10 * 1000)) {
            return false;
        }

        // Call emulator
        list($resp, $status) = $this->client->Ping(new EmptyRequest())->wait();

        if ($status->code !== \Grpc\STATUS_OK) {
            return false;
        }

        return $resp->getOk();
    }

    public function refreshLook(int $userId): bool
    {
        // Wait 10ms to connect to RCON
        if (!$this->client->waitForReady(10 * 1000)) {
            return false;
        }

        $req = new RefreshAppearanceRequest();
        $req->setUserId($userId);

        // Call emulator
        list($resp, $status) = $this->client->RefreshAppearance($req)->wait();

        if ($status->code !== \Grpc\STATUS_OK) {
            return false;
        }

        return $resp->getOk();
    }

    public function refreshBadges(int $userId): bool
    {
        // Wait 10ms to connect to RCON
        if (!$this->client->waitForReady(10 * 1000)) {
            return false;
        }

        $req = new RefreshBadgesRequest();
        $req->setUserId($userId);

        // Call emulator
        list($resp, $status) = $this->client->RefreshBadges($req)->wait();

        if ($status->code !== \Grpc\STATUS_OK) {
            return false;
        }

        return $resp->getOk();
    }

    public function isUserOnline($identifier): bool
    {
        // Wait 10ms to connect to RCON
        if (!$this->client->waitForReady(10 * 1000)) {
            return false;
        }

        $req = new UserOnlineRequest();

        // Handle both isUserOnline("Ewout") and isUserOnline(1)
        if (gettype($identifier) == "string") {
            $req->setUsername($identifier);
        } else if (gettype($identifier) == "integer") {
            $req->setUserId($identifier);
        }

        // Call emulator
        list($resp, $status) = $this->client->IsUserOnline($req)->wait();

        if ($status->code !== \Grpc\STATUS_OK) {
            return false;
        }

        return $resp->getOnline();
    }

    public function sendAlert(string $message, array $options): bool
    {
        // TODO: implement. ideas below
        // sendAlert("ur whole family tree LGBT", [
        //     'type' => 'user',
        //     'username' => 'Alex'
        // ])
        // sendAlert("no jews allowed", [
        //     'type' => 'user',
        //     'user_id' => 1
        // ])
        // sendAlert("no jews allowed", [
        //     'type' => 'user',
        //     'user_id' => 1
        // ])
        // setInfobusPoll("Would you go on a date with Hitler?", [
        //     'Yes',
        //     'No'
        // ])
        // sendAlert("free credits for all", [
        //     'type' => 'hotel'
        // ])
        // sendCredits("free credits for all", [
        //     'who' => 'everyone',
        //     'amount' => 1337
        // ])
        // $req = new HotelAlertRequest();
        // $req->setAlert($message);
        //
        // list($resp) = $this->client->RefreshBadges($req)->wait();
        // return $resp->getOk();
        return true;
    }
}

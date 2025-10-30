<?php

namespace Tests\TencentCloud\Common;

use PHPUnit\Framework\TestCase;
use TencentCloud\Common\CommonClient;
use TencentCloud\Common\Credential;
use TencentCloud\Common\Profile\HttpProfile;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Exception\TencentCloudSDKException;

final class CredentialTest extends TestCase
{
    public function testCredential()
    {
        $cred = new Credential(
            getenv("TENCENTCLOUD_SECRET_ID"),
            getenv("TENCENTCLOUD_SECRET_KEY")
        );
        $client = new CommonClient("cvm", "2017-03-12", $cred, "ap-guangzhou");
        $body = ["Limit"=>10];
        $resp = $client->callJson(
            "DescribeInstances",
            $body,
        );
        $this->assertTrue($resp["TotalCount"] >= 0);
    }

    public function testCredentialWithNullToken()
    {
        $cred = new Credential(
            getenv("TENCENTCLOUD_SECRET_ID"),
            getenv("TENCENTCLOUD_SECRET_KEY"),
            null,
        );
        $client = new CommonClient("cvm", "2017-03-12", $cred, "ap-guangzhou");
        $body = ["Limit"=>10];
        $resp = $client->callJson(
            "DescribeInstances",
            $body,
        );
        $this->assertTrue($resp["TotalCount"] >= 0);
    }

    public function testCredentialWithEmptyToken()
    {
        $cred = new Credential(
            getenv("TENCENTCLOUD_SECRET_ID"),
            getenv("TENCENTCLOUD_SECRET_KEY"),
            "",
        );
        $client = new CommonClient("cvm", "2017-03-12", $cred, "ap-guangzhou");
        $body = ["Limit"=>10];
        $resp = $client->callJson(
            "DescribeInstances",
            $body,
        );
        $this->assertTrue($resp["TotalCount"] >= 0);
    }
}

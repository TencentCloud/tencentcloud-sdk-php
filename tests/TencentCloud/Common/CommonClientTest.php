<?php

namespace TencentCloud\Common;

use \ArrayObject;
use PHPUnit\Framework\TestCase;
use TencentCloud\Common\CommonClient;
use TencentCloud\Common\Profile\HttpProfile;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Exception\TencentCloudSDKException;

final class CommonClientTest extends TestCase
{
    public function testCallJsonWithEmptyBody()
    {
        $cred = new Credential(
            getenv("TENCENTCLOUD_SECRET_ID"),
            getenv("TENCENTCLOUD_SECRET_KEY")
        );
        $client = new CommonClient("cvm", "2017-03-12", $cred, "ap-guangzhou");
        $resp = $client->callJson(
            "DescribeInstances",
            new ArrayObject(),
            array(),
        );
        $this->assertTrue($resp["TotalCount"] >= 0);
    }

    public function testCallJson()
    {
        $cred = new Credential(
            getenv("TENCENTCLOUD_SECRET_ID"),
            getenv("TENCENTCLOUD_SECRET_KEY")
        );
        $client = new CommonClient("cvm", "2017-03-12", $cred, "ap-guangzhou");
        $resp = $client->callJson(
            "DescribeInstances",
            [
                "Filters" => [
                    [
                        "Name" => "zone",
                        "Values" => ["ap-guangzhou-1", "ap-guangzhou-2"]
                    ]
                ]
            ],
            null,
        );
        $this->assertTrue($resp["TotalCount"] >= 0);
    }

	public function testCallJsonGetFail()
    {
        $cred = new Credential(
            getenv("TENCENTCLOUD_SECRET_ID"),
            getenv("TENCENTCLOUD_SECRET_KEY")
        );
        $httpProfile = new HttpProfile();
        $httpProfile->setReqMethod("GET");
        $clientProfile = new ClientProfile();
        $clientProfile->setHttpProfile($httpProfile);
        $client = new CommonClient("cvm", "2017-03-12", $cred, "ap-guangzhou", $clientProfile);
        $this->expectException(TencentCloudSDKException::class);
        $this->expectExceptionMessage("Common client call doesn't support GET method");
        $resp = $client->callJson(
            "DescribeInstances",
            [
                "Filters" => [
                    [
                        "Name" => "zone",
                        "Values" => ["ap-guangzhou-1", "ap-guangzhou-2"]
                    ]
                ]
            ],
            array(),
        );
    }

}

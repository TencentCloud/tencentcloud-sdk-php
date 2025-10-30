<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace TencentCloud\Cdz\V20221123;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdz\V20221123\Models as Models;

/**
 * @method Models\DescribeCloudDedicatedZoneHostsResponse DescribeCloudDedicatedZoneHosts(Models\DescribeCloudDedicatedZoneHostsRequest $req) 查询可用区的Host和Host上部署的实例
 * @method Models\DescribeCloudDedicatedZoneResourceSummaryResponse DescribeCloudDedicatedZoneResourceSummary(Models\DescribeCloudDedicatedZoneResourceSummaryRequest $req) 查询专属可用区各个垂直产品的资源使用情况
 */

class CdzClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cdz.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cdz";

    /**
     * @var string
     */
    protected $version = "2022-11-23";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("cdz")."\\"."V20221123\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

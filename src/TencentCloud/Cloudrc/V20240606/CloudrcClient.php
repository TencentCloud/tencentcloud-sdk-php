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

namespace TencentCloud\Cloudrc\V20240606;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cloudrc\V20240606\Models as Models;

/**
 * @method Models\DescribeResourceResponse DescribeResource(Models\DescribeResourceRequest $req) 查询资源详情
 * @method Models\SearchResourcesResponse SearchResources(Models\SearchResourcesRequest $req) 搜索资源
 */

class CloudrcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cloudrc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cloudrc";

    /**
     * @var string
     */
    protected $version = "2024-06-06";

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
        $respClass = "TencentCloud"."\\".ucfirst("cloudrc")."\\"."V20240606\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

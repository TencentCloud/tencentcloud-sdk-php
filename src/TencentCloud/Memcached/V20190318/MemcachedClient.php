<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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

namespace TencentCloud\Memcached\V20190318;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;

/**
* @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 获取Cmem实例列表
 */

class MemcachedClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "memcached.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2019-03-18";

    /**
     * Constructor.
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws \TencentCloud\Common\Exception\TencentCloudSDKException
     */
    public function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    /**
     * @param string $action
     * @param array|null $response
     * @return \TencentCloud\Common\AbstractModel
     */
    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("memcached")."\\"."V20190318\\Models"."\\".ucfirst($action)."Response";
        /** @var \TencentCloud\Common\AbstractModel $obj */
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

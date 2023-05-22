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

namespace TencentCloud\Csxg\V20230303;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Csxg\V20230303\Models as Models;

/**
 * @method Models\Create5GInstanceResponse Create5GInstance(Models\Create5GInstanceRequest $req) 创建5G入云服务接口
 * @method Models\Delete5GInstanceResponse Delete5GInstance(Models\Delete5GInstanceRequest $req) 删除5G入云服务
 * @method Models\Describe5GAPNsResponse Describe5GAPNs(Models\Describe5GAPNsRequest $req) 查询APN信息
 * @method Models\Describe5GInstancesResponse Describe5GInstances(Models\Describe5GInstancesRequest $req) 查询5G入云服务
 * @method Models\Modify5GInstanceAttributeResponse Modify5GInstanceAttribute(Models\Modify5GInstanceAttributeRequest $req) 修改5G入云服务
 */

class CsxgClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "csxg.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "csxg";

    /**
     * @var string
     */
    protected $version = "2023-03-03";

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
        $respClass = "TencentCloud"."\\".ucfirst("csxg")."\\"."V20230303\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

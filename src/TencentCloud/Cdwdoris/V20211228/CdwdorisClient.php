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

namespace TencentCloud\Cdwdoris\V20211228;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdwdoris\V20211228\Models as Models;

/**
 * @method Models\DescribeInstanceResponse DescribeInstance(Models\DescribeInstanceRequest $req) 根据集群ID查询某个集群的具体信息
 * @method Models\DescribeInstanceNodesResponse DescribeInstanceNodes(Models\DescribeInstanceNodesRequest $req) 获取集群节点信息列表
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 获取集群列表
 */

class CdwdorisClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cdwdoris.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cdwdoris";

    /**
     * @var string
     */
    protected $version = "2021-12-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("cdwdoris")."\\"."V20211228\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

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

namespace TencentCloud\Thpc\V20211109;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Thpc\V20211109\Models as Models;

/**
 * @method Models\BindAutoScalingGroupResponse BindAutoScalingGroup(Models\BindAutoScalingGroupRequest $req) 本接口(BindAutoScalingGroup)用于为集群队列绑定弹性伸缩组
 * @method Models\CreateClusterResponse CreateCluster(Models\CreateClusterRequest $req) 本接口 (CreateCluster) 用于创建并启动集群。
 * @method Models\DeleteClusterResponse DeleteCluster(Models\DeleteClusterRequest $req) 本接口（DeleteCluster）用于删除一个指定的集群。
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) 本接口（DescribeClusters）用于查询集群列表。
 */

class ThpcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "thpc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "thpc";

    /**
     * @var string
     */
    protected $version = "2021-11-09";

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
        $respClass = "TencentCloud"."\\".ucfirst("thpc")."\\"."V20211109\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

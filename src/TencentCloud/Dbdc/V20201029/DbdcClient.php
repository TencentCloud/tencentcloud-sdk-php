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

namespace TencentCloud\Dbdc\V20201029;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dbdc\V20201029\Models as Models;

/**
 * @method Models\DescribeDBInstancesResponse DescribeDBInstances(Models\DescribeDBInstancesRequest $req) 本接口用于查询独享集群内的DB实例列表
 * @method Models\DescribeHostListResponse DescribeHostList(Models\DescribeHostListRequest $req) 本接口用于查询主机列表
 * @method Models\DescribeInstanceDetailResponse DescribeInstanceDetail(Models\DescribeInstanceDetailRequest $req) 本接口用于查询独享集群详情
 * @method Models\DescribeInstanceListResponse DescribeInstanceList(Models\DescribeInstanceListRequest $req) 本接口用于查询独享集群实例列表
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 根据不同地域不同用户，获取集群列表信息
 * @method Models\ModifyInstanceNameResponse ModifyInstanceName(Models\ModifyInstanceNameRequest $req) 本接口用于修改集群名称
 */

class DbdcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dbdc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dbdc";

    /**
     * @var string
     */
    protected $version = "2020-10-29";

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
        $respClass = "TencentCloud"."\\".ucfirst("dbdc")."\\"."V20201029\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

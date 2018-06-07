<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Ms\V20180408;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ms\V20180408\Models as Models;

/**
* @method Models\CreateScanInstancesResponse CreateScanInstances(Models\CreateScanInstancesRequest $req) 用户通过该接口批量提交应用进行应用扫描，扫描后需通过DescribeScanResults接口查询扫描结果
* @method Models\CreateShieldInstanceResponse CreateShieldInstance(Models\CreateShieldInstanceRequest $req) 用户通过该接口提交应用进行应用加固，加固后需通过DescribeShieldResult接口查询加固结果
* @method Models\DeleteScanInstancesResponse DeleteScanInstances(Models\DeleteScanInstancesRequest $req) 删除一个或者多个app扫描信息
* @method Models\DeleteShieldInstancesResponse DeleteShieldInstances(Models\DeleteShieldInstancesRequest $req) 删除一个或者多个app加固信息
* @method Models\DescribeScanInstancesResponse DescribeScanInstances(Models\DescribeScanInstancesRequest $req) 本接口用于查看app列表。
可以通过指定任务唯一标识ItemId来查询指定app的详细信息，或通过设定过滤器来查询满足过滤条件的app的详细信息。 指定偏移(Offset)和限制(Limit)来选择结果中的一部分，默认返回满足条件的前20个app信息。
* @method Models\DescribeScanResultsResponse DescribeScanResults(Models\DescribeScanResultsRequest $req) 用户通过CreateScanInstances接口提交应用进行风险批量扫描后，用此接口批量获取风险详细信息,包含漏洞信息，广告信息，插件信息和病毒信息
* @method Models\DescribeShieldInstancesResponse DescribeShieldInstances(Models\DescribeShieldInstancesRequest $req) 本接口用于查看app列表。
可以通过指定任务唯一标识ItemId来查询指定app的详细信息，或通过设定过滤器来查询满足过滤条件的app的详细信息。 指定偏移(Offset)和限制(Limit)来选择结果中的一部分，默认返回满足条件的前20个app信息。

* @method Models\DescribeShieldResultResponse DescribeShieldResult(Models\DescribeShieldResultRequest $req) 通过唯一标识获取加固的结果
 */

class MsClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "ms.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-04-08";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("ms")."\\"."V20180408\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

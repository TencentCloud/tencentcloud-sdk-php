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

namespace TencentCloud\Apm\V20210622;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Apm\V20210622\Models as Models;

/**
 * @method Models\CreateApmInstanceResponse CreateApmInstance(Models\CreateApmInstanceRequest $req) 业务购买APM实例，调用该接口创建
 * @method Models\DescribeApmAgentResponse DescribeApmAgent(Models\DescribeApmAgentRequest $req) 获取Apm Agent信息
 * @method Models\DescribeApmInstancesResponse DescribeApmInstances(Models\DescribeApmInstancesRequest $req) APM实例列表拉取
 * @method Models\DescribeGeneralMetricDataResponse DescribeGeneralMetricData(Models\DescribeGeneralMetricDataRequest $req) 获取指标数据通用接口。用户根据需要上送请求参数，返回对应的指标数据。
接口调用频率限制为：20次/秒，1200次/分钟。单请求的数据点数限制为1440个。
 * @method Models\DescribeMetricRecordsResponse DescribeMetricRecords(Models\DescribeMetricRecordsRequest $req) 拉取通用指标列表
 * @method Models\DescribeServiceOverviewResponse DescribeServiceOverview(Models\DescribeServiceOverviewRequest $req) 服务概览数据拉取
 */

class ApmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "apm.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "apm";

    /**
     * @var string
     */
    protected $version = "2021-06-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("apm")."\\"."V20210622\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

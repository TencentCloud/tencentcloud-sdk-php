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

namespace TencentCloud\Config\V20220802;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Config\V20220802\Models as Models;

/**
 * @method Models\DescribeAggregateDiscoveredResourceResponse DescribeAggregateDiscoveredResource(Models\DescribeAggregateDiscoveredResourceRequest $req) 账号组资源详情
 * @method Models\DescribeDiscoveredResourceResponse DescribeDiscoveredResource(Models\DescribeDiscoveredResourceRequest $req) 资源详情
 * @method Models\ListAggregateConfigRulesResponse ListAggregateConfigRules(Models\ListAggregateConfigRulesRequest $req) 账号组获取规则列表
 * @method Models\ListAggregateDiscoveredResourcesResponse ListAggregateDiscoveredResources(Models\ListAggregateDiscoveredResourcesRequest $req) 账号组获取资源列表
 * @method Models\ListConfigRulesResponse ListConfigRules(Models\ListConfigRulesRequest $req) 获取规则列表
 * @method Models\ListDiscoveredResourcesResponse ListDiscoveredResources(Models\ListDiscoveredResourcesRequest $req) 获取资源列表
 * @method Models\PutEvaluationsResponse PutEvaluations(Models\PutEvaluationsRequest $req) 上报自定义规则评估结果
 */

class ConfigClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "config.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "config";

    /**
     * @var string
     */
    protected $version = "2022-08-02";

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
        $respClass = "TencentCloud"."\\".ucfirst("config")."\\"."V20220802\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

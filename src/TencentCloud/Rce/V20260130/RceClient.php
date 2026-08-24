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

namespace TencentCloud\Rce\V20260130;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Rce\V20260130\Models as Models;

/**
 * @method Models\AssessDeviceRiskPremiumProResponse AssessDeviceRiskPremiumPro(Models\AssessDeviceRiskPremiumProRequest $req) 设备风险评估-高级版
 * @method Models\AssessDeviceRiskProResponse AssessDeviceRiskPro(Models\AssessDeviceRiskProRequest $req) 设备风险评估-基础版
 * @method Models\AssessEnvironmentRiskResponse AssessEnvironmentRisk(Models\AssessEnvironmentRiskRequest $req) 环境风险评估
 * @method Models\AssessRiskResponse AssessRisk(Models\AssessRiskRequest $req) 事件风险评估。用于实时获取事件的风险信息，您可以在业务的关键事件中获取到我们根据设备风险、环境风险、账号风险、行为风险以及历史上报的事件信息评估出来的风险决策结果、风险评分和风险标签等。
 * @method Models\ReportEventResponse ReportEvent(Models\ReportEventRequest $req) 事件信息上报。用于上报您业务中无需实时决策的事件，我们会通过引擎计算、机器学习挖掘风险特征用于实时事件风险评估。
 */

class RceClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "rce.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "rce";

    /**
     * @var string
     */
    protected $version = "2026-01-30";

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
        $respClass = "TencentCloud"."\\".ucfirst("rce")."\\"."V20260130\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

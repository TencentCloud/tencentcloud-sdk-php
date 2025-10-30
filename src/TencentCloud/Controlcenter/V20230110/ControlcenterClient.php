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

namespace TencentCloud\Controlcenter\V20230110;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Controlcenter\V20230110\Models as Models;

/**
 * @method Models\BatchApplyAccountBaselinesResponse BatchApplyAccountBaselines(Models\BatchApplyAccountBaselinesRequest $req) 批量对存量账号应用基线
 * @method Models\GetAccountFactoryBaselineResponse GetAccountFactoryBaseline(Models\GetAccountFactoryBaselineRequest $req) 获取用户基线配置数据
 * @method Models\ListAccountFactoryBaselineItemsResponse ListAccountFactoryBaselineItems(Models\ListAccountFactoryBaselineItemsRequest $req) 获取账号工厂系统基线项
 * @method Models\ListDeployStepTasksResponse ListDeployStepTasks(Models\ListDeployStepTasksRequest $req) 获取某个基线项历史应用信息
 * @method Models\UpdateAccountFactoryBaselineResponse UpdateAccountFactoryBaseline(Models\UpdateAccountFactoryBaselineRequest $req) 更新用户当前基线项配置，基线配置会覆盖更新为当前配置。新增基线项时需要将新增的基线配置加到现有配置，删除基线项时需要将删除的基线配置从现有配置移除，然后保存最新基线配置。
 */

class ControlcenterClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "controlcenter.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "controlcenter";

    /**
     * @var string
     */
    protected $version = "2023-01-10";

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
        $respClass = "TencentCloud"."\\".ucfirst("controlcenter")."\\"."V20230110\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

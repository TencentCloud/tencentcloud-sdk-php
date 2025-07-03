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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KillOpsMakePlanInstances请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getPlanId() 获取补录计划ID
 * @method void setPlanId(string $PlanId) 设置补录计划ID
 * @method boolean getAsyncMode() 获取是否异步模式
 * @method void setAsyncMode(boolean $AsyncMode) 设置是否异步模式
 * @method string getPlanName() 获取补录计划名
 * @method void setPlanName(string $PlanName) 设置补录计划名
 */
class KillOpsMakePlanInstancesRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 补录计划ID
     */
    public $PlanId;

    /**
     * @var boolean 是否异步模式
     */
    public $AsyncMode;

    /**
     * @var string 补录计划名
     */
    public $PlanName;

    /**
     * @param string $ProjectId 项目ID
     * @param string $PlanId 补录计划ID
     * @param boolean $AsyncMode 是否异步模式
     * @param string $PlanName 补录计划名
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("AsyncMode",$param) and $param["AsyncMode"] !== null) {
            $this->AsyncMode = $param["AsyncMode"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }
    }
}

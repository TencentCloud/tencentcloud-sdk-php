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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRecordingPlan请求参数结构体
 *
 * @method string getPlanId() 获取录制计划ID
 * @method void setPlanId(string $PlanId) 设置录制计划ID
 * @method string getName() 获取计划名称
 * @method void setName(string $Name) 设置计划名称
 * @method string getTimeTemplateId() 获取时间模板ID
 * @method void setTimeTemplateId(string $TimeTemplateId) 设置时间模板ID
 */
class ModifyRecordingPlanRequest extends AbstractModel
{
    /**
     * @var string 录制计划ID
     */
    public $PlanId;

    /**
     * @var string 计划名称
     */
    public $Name;

    /**
     * @var string 时间模板ID
     */
    public $TimeTemplateId;

    /**
     * @param string $PlanId 录制计划ID
     * @param string $Name 计划名称
     * @param string $TimeTemplateId 时间模板ID
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TimeTemplateId",$param) and $param["TimeTemplateId"] !== null) {
            $this->TimeTemplateId = $param["TimeTemplateId"];
        }
    }
}

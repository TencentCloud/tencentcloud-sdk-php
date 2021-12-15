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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLiveRecordPlan请求参数结构体
 *
 * @method string getPlanId() 获取录制计划ID
 * @method void setPlanId(string $PlanId) 设置录制计划ID
 * @method string getPlanName() 获取录制计划名
 * @method void setPlanName(string $PlanName) 设置录制计划名
 * @method string getTemplateId() 获取时间模板ID，固定直播时为必填
 * @method void setTemplateId(string $TemplateId) 设置时间模板ID，固定直播时为必填
 */
class ModifyLiveRecordPlanRequest extends AbstractModel
{
    /**
     * @var string 录制计划ID
     */
    public $PlanId;

    /**
     * @var string 录制计划名
     */
    public $PlanName;

    /**
     * @var string 时间模板ID，固定直播时为必填
     */
    public $TemplateId;

    /**
     * @param string $PlanId 录制计划ID
     * @param string $PlanName 录制计划名
     * @param string $TemplateId 时间模板ID，固定直播时为必填
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

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}

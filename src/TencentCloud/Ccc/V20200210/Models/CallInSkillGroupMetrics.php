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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 呼入技能组相关指标
 *
 * @method integer getSkillGroupId() 获取技能组ID
 * @method void setSkillGroupId(integer $SkillGroupId) 设置技能组ID
 * @method CallInMetrics getMetrics() 获取数据指标
 * @method void setMetrics(CallInMetrics $Metrics) 设置数据指标
 * @method string getName() 获取技能组名称
 * @method void setName(string $Name) 设置技能组名称
 */
class CallInSkillGroupMetrics extends AbstractModel
{
    /**
     * @var integer 技能组ID
     */
    public $SkillGroupId;

    /**
     * @var CallInMetrics 数据指标
     */
    public $Metrics;

    /**
     * @var string 技能组名称
     */
    public $Name;

    /**
     * @param integer $SkillGroupId 技能组ID
     * @param CallInMetrics $Metrics 数据指标
     * @param string $Name 技能组名称
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
        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = new CallInMetrics();
            $this->Metrics->deserialize($param["Metrics"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}

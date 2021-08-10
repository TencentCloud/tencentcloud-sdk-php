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
 * 呼入线路维度相关指标
 *
 * @method string getNumber() 获取线路号码
 * @method void setNumber(string $Number) 设置线路号码
 * @method CallInMetrics getMetrics() 获取线路相关指标
 * @method void setMetrics(CallInMetrics $Metrics) 设置线路相关指标
 * @method array getSkillGroupMetrics() 获取所属技能组相关指标
 * @method void setSkillGroupMetrics(array $SkillGroupMetrics) 设置所属技能组相关指标
 */
class CallInNumberMetrics extends AbstractModel
{
    /**
     * @var string 线路号码
     */
    public $Number;

    /**
     * @var CallInMetrics 线路相关指标
     */
    public $Metrics;

    /**
     * @var array 所属技能组相关指标
     */
    public $SkillGroupMetrics;

    /**
     * @param string $Number 线路号码
     * @param CallInMetrics $Metrics 线路相关指标
     * @param array $SkillGroupMetrics 所属技能组相关指标
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
        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = new CallInMetrics();
            $this->Metrics->deserialize($param["Metrics"]);
        }

        if (array_key_exists("SkillGroupMetrics",$param) and $param["SkillGroupMetrics"] !== null) {
            $this->SkillGroupMetrics = [];
            foreach ($param["SkillGroupMetrics"] as $key => $value){
                $obj = new CallInSkillGroupMetrics();
                $obj->deserialize($value);
                array_push($this->SkillGroupMetrics, $obj);
            }
        }
    }
}

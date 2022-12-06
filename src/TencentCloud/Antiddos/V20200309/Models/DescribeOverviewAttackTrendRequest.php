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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOverviewAttackTrend请求参数结构体
 *
 * @method string getType() 获取攻击类型，取值ddos， cc
 * @method void setType(string $Type) 设置攻击类型，取值ddos， cc
 * @method string getDimension() 获取纬度，当前仅支持attackcount
 * @method void setDimension(string $Dimension) 设置纬度，当前仅支持attackcount
 * @method integer getPeriod() 获取周期，当前仅支持86400
 * @method void setPeriod(integer $Period) 设置周期，当前仅支持86400
 * @method string getStartTime() 获取防护概览攻击趋势开始时间
 * @method void setStartTime(string $StartTime) 设置防护概览攻击趋势开始时间
 * @method string getEndTime() 获取防护概览攻击趋势结束时间
 * @method void setEndTime(string $EndTime) 设置防护概览攻击趋势结束时间
 */
class DescribeOverviewAttackTrendRequest extends AbstractModel
{
    /**
     * @var string 攻击类型，取值ddos， cc
     */
    public $Type;

    /**
     * @var string 纬度，当前仅支持attackcount
     */
    public $Dimension;

    /**
     * @var integer 周期，当前仅支持86400
     */
    public $Period;

    /**
     * @var string 防护概览攻击趋势开始时间
     */
    public $StartTime;

    /**
     * @var string 防护概览攻击趋势结束时间
     */
    public $EndTime;

    /**
     * @param string $Type 攻击类型，取值ddos， cc
     * @param string $Dimension 纬度，当前仅支持attackcount
     * @param integer $Period 周期，当前仅支持86400
     * @param string $StartTime 防护概览攻击趋势开始时间
     * @param string $EndTime 防护概览攻击趋势结束时间
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}

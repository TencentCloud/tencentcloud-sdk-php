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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预算阈值提醒信息
 *
 * @method string getWarnType() 获取ACTUAL 实际金额，
FORECAST 预测金额
 * @method void setWarnType(string $WarnType) 设置ACTUAL 实际金额，
FORECAST 预测金额
 * @method string getCalType() 获取PERCENTAGE 预算金额的百分比，ABS 固定值
 * @method void setCalType(string $CalType) 设置PERCENTAGE 预算金额的百分比，ABS 固定值
 * @method string getThresholdValue() 获取阈值（大于等于0）
 * @method void setThresholdValue(string $ThresholdValue) 设置阈值（大于等于0）
 */
class BudgetWarn extends AbstractModel
{
    /**
     * @var string ACTUAL 实际金额，
FORECAST 预测金额
     */
    public $WarnType;

    /**
     * @var string PERCENTAGE 预算金额的百分比，ABS 固定值
     */
    public $CalType;

    /**
     * @var string 阈值（大于等于0）
     */
    public $ThresholdValue;

    /**
     * @param string $WarnType ACTUAL 实际金额，
FORECAST 预测金额
     * @param string $CalType PERCENTAGE 预算金额的百分比，ABS 固定值
     * @param string $ThresholdValue 阈值（大于等于0）
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
        if (array_key_exists("WarnType",$param) and $param["WarnType"] !== null) {
            $this->WarnType = $param["WarnType"];
        }

        if (array_key_exists("CalType",$param) and $param["CalType"] !== null) {
            $this->CalType = $param["CalType"];
        }

        if (array_key_exists("ThresholdValue",$param) and $param["ThresholdValue"] !== null) {
            $this->ThresholdValue = $param["ThresholdValue"];
        }
    }
}

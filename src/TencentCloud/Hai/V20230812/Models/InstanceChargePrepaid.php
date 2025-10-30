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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例预付费入参
 *
 * @method integer getPeriod() 获取时长，默认值：1
 * @method void setPeriod(integer $Period) 设置时长，默认值：1
 * @method string getRenewFlag() 获取续费标志可选参数：
NOTIFY_AND_MANUAL_RENEW：表示默认状态(用户未设置，即初始状态：若用户有预付费不停服特权，也会对该值进行自动续费)
NOTIFY_AND_AUTO_RENEW：表示自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW：表示明确不自动续费(用户设置)
默认值：NOTIFY_AND_MANUAL_RENEW

 * @method void setRenewFlag(string $RenewFlag) 设置续费标志可选参数：
NOTIFY_AND_MANUAL_RENEW：表示默认状态(用户未设置，即初始状态：若用户有预付费不停服特权，也会对该值进行自动续费)
NOTIFY_AND_AUTO_RENEW：表示自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW：表示明确不自动续费(用户设置)
默认值：NOTIFY_AND_MANUAL_RENEW

 * @method string getTimeUnit() 获取时长单位，枚举： MONTH, DAY, HOUR；释义：月，日，小时
 * @method void setTimeUnit(string $TimeUnit) 设置时长单位，枚举： MONTH, DAY, HOUR；释义：月，日，小时
 */
class InstanceChargePrepaid extends AbstractModel
{
    /**
     * @var integer 时长，默认值：1
     */
    public $Period;

    /**
     * @var string 续费标志可选参数：
NOTIFY_AND_MANUAL_RENEW：表示默认状态(用户未设置，即初始状态：若用户有预付费不停服特权，也会对该值进行自动续费)
NOTIFY_AND_AUTO_RENEW：表示自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW：表示明确不自动续费(用户设置)
默认值：NOTIFY_AND_MANUAL_RENEW

     */
    public $RenewFlag;

    /**
     * @var string 时长单位，枚举： MONTH, DAY, HOUR；释义：月，日，小时
     */
    public $TimeUnit;

    /**
     * @param integer $Period 时长，默认值：1
     * @param string $RenewFlag 续费标志可选参数：
NOTIFY_AND_MANUAL_RENEW：表示默认状态(用户未设置，即初始状态：若用户有预付费不停服特权，也会对该值进行自动续费)
NOTIFY_AND_AUTO_RENEW：表示自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW：表示明确不自动续费(用户设置)
默认值：NOTIFY_AND_MANUAL_RENEW

     * @param string $TimeUnit 时长单位，枚举： MONTH, DAY, HOUR；释义：月，日，小时
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }
    }
}

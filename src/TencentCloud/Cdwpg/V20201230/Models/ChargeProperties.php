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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费时间参数
 *
 * @method integer getRenewFlag() 获取1-需要自动续期
 * @method void setRenewFlag(integer $RenewFlag) 设置1-需要自动续期
 * @method integer getTimeSpan() 获取订单时间范围
 * @method void setTimeSpan(integer $TimeSpan) 设置订单时间范围
 * @method string getTimeUnit() 获取时间单位，一般为h和m
 * @method void setTimeUnit(string $TimeUnit) 设置时间单位，一般为h和m
 * @method integer getPayMode() 获取计费类型0-按量计费，1-包年包月
 * @method void setPayMode(integer $PayMode) 设置计费类型0-按量计费，1-包年包月
 * @method string getChargeType() 获取PREPAID、POSTPAID_BY_HOUR
 * @method void setChargeType(string $ChargeType) 设置PREPAID、POSTPAID_BY_HOUR
 */
class ChargeProperties extends AbstractModel
{
    /**
     * @var integer 1-需要自动续期
     */
    public $RenewFlag;

    /**
     * @var integer 订单时间范围
     */
    public $TimeSpan;

    /**
     * @var string 时间单位，一般为h和m
     */
    public $TimeUnit;

    /**
     * @var integer 计费类型0-按量计费，1-包年包月
     */
    public $PayMode;

    /**
     * @var string PREPAID、POSTPAID_BY_HOUR
     */
    public $ChargeType;

    /**
     * @param integer $RenewFlag 1-需要自动续期
     * @param integer $TimeSpan 订单时间范围
     * @param string $TimeUnit 时间单位，一般为h和m
     * @param integer $PayMode 计费类型0-按量计费，1-包年包月
     * @param string $ChargeType PREPAID、POSTPAID_BY_HOUR
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
        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }
    }
}

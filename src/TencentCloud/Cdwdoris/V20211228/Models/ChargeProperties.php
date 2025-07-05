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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群计费相关信息
 *
 * @method string getChargeType() 获取计费类型，“PREPAID” 预付费，“POSTPAID_BY_HOUR” 后付费
 * @method void setChargeType(string $ChargeType) 设置计费类型，“PREPAID” 预付费，“POSTPAID_BY_HOUR” 后付费
 * @method integer getRenewFlag() 获取是否自动续费，1表示自动续费开启
 * @method void setRenewFlag(integer $RenewFlag) 设置是否自动续费，1表示自动续费开启
 * @method integer getTimeSpan() 获取计费时间长度
 * @method void setTimeSpan(integer $TimeSpan) 设置计费时间长度
 * @method string getTimeUnit() 获取计费时间单位，“m”表示月等
 * @method void setTimeUnit(string $TimeUnit) 设置计费时间单位，“m”表示月等
 */
class ChargeProperties extends AbstractModel
{
    /**
     * @var string 计费类型，“PREPAID” 预付费，“POSTPAID_BY_HOUR” 后付费
     */
    public $ChargeType;

    /**
     * @var integer 是否自动续费，1表示自动续费开启
     */
    public $RenewFlag;

    /**
     * @var integer 计费时间长度
     */
    public $TimeSpan;

    /**
     * @var string 计费时间单位，“m”表示月等
     */
    public $TimeUnit;

    /**
     * @param string $ChargeType 计费类型，“PREPAID” 预付费，“POSTPAID_BY_HOUR” 后付费
     * @param integer $RenewFlag 是否自动续费，1表示自动续费开启
     * @param integer $TimeSpan 计费时间长度
     * @param string $TimeUnit 计费时间单位，“m”表示月等
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
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
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
    }
}

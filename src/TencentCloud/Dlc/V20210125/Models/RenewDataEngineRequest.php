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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenewDataEngine请求参数结构体
 *
 * @method string getDataEngineName() 获取CU队列名称
 * @method void setDataEngineName(string $DataEngineName) 设置CU队列名称
 * @method integer getTimeSpan() 获取续费时长，单位月，最少续费1一个月
 * @method void setTimeSpan(integer $TimeSpan) 设置续费时长，单位月，最少续费1一个月
 * @method integer getPayMode() 获取付费类型，默认为1，预付费
 * @method void setPayMode(integer $PayMode) 设置付费类型，默认为1，预付费
 * @method string getTimeUnit() 获取单位，默认m，仅能填m
 * @method void setTimeUnit(string $TimeUnit) 设置单位，默认m，仅能填m
 * @method integer getRenewFlag() 获取自动续费标志，0，初始状态，默认不自动续费，若用户有预付费不停服特权，自动续费。1：自动续费。2：明确不自动续费。不传该参数默认为0
 * @method void setRenewFlag(integer $RenewFlag) 设置自动续费标志，0，初始状态，默认不自动续费，若用户有预付费不停服特权，自动续费。1：自动续费。2：明确不自动续费。不传该参数默认为0
 */
class RenewDataEngineRequest extends AbstractModel
{
    /**
     * @var string CU队列名称
     */
    public $DataEngineName;

    /**
     * @var integer 续费时长，单位月，最少续费1一个月
     */
    public $TimeSpan;

    /**
     * @var integer 付费类型，默认为1，预付费
     */
    public $PayMode;

    /**
     * @var string 单位，默认m，仅能填m
     */
    public $TimeUnit;

    /**
     * @var integer 自动续费标志，0，初始状态，默认不自动续费，若用户有预付费不停服特权，自动续费。1：自动续费。2：明确不自动续费。不传该参数默认为0
     */
    public $RenewFlag;

    /**
     * @param string $DataEngineName CU队列名称
     * @param integer $TimeSpan 续费时长，单位月，最少续费1一个月
     * @param integer $PayMode 付费类型，默认为1，预付费
     * @param string $TimeUnit 单位，默认m，仅能填m
     * @param integer $RenewFlag 自动续费标志，0，初始状态，默认不自动续费，若用户有预付费不停服特权，自动续费。1：自动续费。2：明确不自动续费。不传该参数默认为0
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
        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}

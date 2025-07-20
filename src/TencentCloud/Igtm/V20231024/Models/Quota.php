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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配额
 *
 * @method integer getTaskQuota() 获取探测任务配额
 * @method void setTaskQuota(integer $TaskQuota) 设置探测任务配额
 * @method integer getPoolQuota() 获取地址池配额
 * @method void setPoolQuota(integer $PoolQuota) 设置地址池配额
 * @method integer getAddressQuota() 获取地址配额
 * @method void setAddressQuota(integer $AddressQuota) 设置地址配额
 * @method integer getMonitorQuota() 获取探点资源数
 * @method void setMonitorQuota(integer $MonitorQuota) 设置探点资源数
 * @method integer getMessageQuota() 获取消息资源数
 * @method void setMessageQuota(integer $MessageQuota) 设置消息资源数
 * @method integer getUsedTaskQuota() 获取已使用探测任务数
 * @method void setUsedTaskQuota(integer $UsedTaskQuota) 设置已使用探测任务数
 * @method integer getUsedFreeInstanceNum() 获取已使用体验实例数
 * @method void setUsedFreeInstanceNum(integer $UsedFreeInstanceNum) 设置已使用体验实例数
 * @method integer getUsedBillInstanceNum() 获取已使用付费实例
 * @method void setUsedBillInstanceNum(integer $UsedBillInstanceNum) 设置已使用付费实例
 * @method integer getFreePackageNum() 获取体验套餐总数
 * @method void setFreePackageNum(integer $FreePackageNum) 设置体验套餐总数
 * @method integer getUsedBillPackageNum() 获取已使用付费套餐数
 * @method void setUsedBillPackageNum(integer $UsedBillPackageNum) 设置已使用付费套餐数
 * @method integer getBillPackageNum() 获取付费套餐总数
 * @method void setBillPackageNum(integer $BillPackageNum) 设置付费套餐总数
 */
class Quota extends AbstractModel
{
    /**
     * @var integer 探测任务配额
     */
    public $TaskQuota;

    /**
     * @var integer 地址池配额
     */
    public $PoolQuota;

    /**
     * @var integer 地址配额
     */
    public $AddressQuota;

    /**
     * @var integer 探点资源数
     */
    public $MonitorQuota;

    /**
     * @var integer 消息资源数
     */
    public $MessageQuota;

    /**
     * @var integer 已使用探测任务数
     */
    public $UsedTaskQuota;

    /**
     * @var integer 已使用体验实例数
     */
    public $UsedFreeInstanceNum;

    /**
     * @var integer 已使用付费实例
     */
    public $UsedBillInstanceNum;

    /**
     * @var integer 体验套餐总数
     */
    public $FreePackageNum;

    /**
     * @var integer 已使用付费套餐数
     */
    public $UsedBillPackageNum;

    /**
     * @var integer 付费套餐总数
     */
    public $BillPackageNum;

    /**
     * @param integer $TaskQuota 探测任务配额
     * @param integer $PoolQuota 地址池配额
     * @param integer $AddressQuota 地址配额
     * @param integer $MonitorQuota 探点资源数
     * @param integer $MessageQuota 消息资源数
     * @param integer $UsedTaskQuota 已使用探测任务数
     * @param integer $UsedFreeInstanceNum 已使用体验实例数
     * @param integer $UsedBillInstanceNum 已使用付费实例
     * @param integer $FreePackageNum 体验套餐总数
     * @param integer $UsedBillPackageNum 已使用付费套餐数
     * @param integer $BillPackageNum 付费套餐总数
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
        if (array_key_exists("TaskQuota",$param) and $param["TaskQuota"] !== null) {
            $this->TaskQuota = $param["TaskQuota"];
        }

        if (array_key_exists("PoolQuota",$param) and $param["PoolQuota"] !== null) {
            $this->PoolQuota = $param["PoolQuota"];
        }

        if (array_key_exists("AddressQuota",$param) and $param["AddressQuota"] !== null) {
            $this->AddressQuota = $param["AddressQuota"];
        }

        if (array_key_exists("MonitorQuota",$param) and $param["MonitorQuota"] !== null) {
            $this->MonitorQuota = $param["MonitorQuota"];
        }

        if (array_key_exists("MessageQuota",$param) and $param["MessageQuota"] !== null) {
            $this->MessageQuota = $param["MessageQuota"];
        }

        if (array_key_exists("UsedTaskQuota",$param) and $param["UsedTaskQuota"] !== null) {
            $this->UsedTaskQuota = $param["UsedTaskQuota"];
        }

        if (array_key_exists("UsedFreeInstanceNum",$param) and $param["UsedFreeInstanceNum"] !== null) {
            $this->UsedFreeInstanceNum = $param["UsedFreeInstanceNum"];
        }

        if (array_key_exists("UsedBillInstanceNum",$param) and $param["UsedBillInstanceNum"] !== null) {
            $this->UsedBillInstanceNum = $param["UsedBillInstanceNum"];
        }

        if (array_key_exists("FreePackageNum",$param) and $param["FreePackageNum"] !== null) {
            $this->FreePackageNum = $param["FreePackageNum"];
        }

        if (array_key_exists("UsedBillPackageNum",$param) and $param["UsedBillPackageNum"] !== null) {
            $this->UsedBillPackageNum = $param["UsedBillPackageNum"];
        }

        if (array_key_exists("BillPackageNum",$param) and $param["BillPackageNum"] !== null) {
            $this->BillPackageNum = $param["BillPackageNum"];
        }
    }
}

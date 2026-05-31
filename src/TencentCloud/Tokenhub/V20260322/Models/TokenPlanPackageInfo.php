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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主额度包信息
 *
 * @method string getTotalQuota() 获取总额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
 * @method void setTotalQuota(string $TotalQuota) 设置总额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
 * @method string getTotalUsed() 获取总已使用额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
 * @method void setTotalUsed(string $TotalUsed) 设置总已使用额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
 * @method integer getTotalCycles() 获取总周期数。
 * @method void setTotalCycles(integer $TotalCycles) 设置总周期数。
 * @method string getCycleUnit() 获取周期单位。取值：month（月）
 * @method void setCycleUnit(string $CycleUnit) 设置周期单位。取值：month（月）
 * @method string getStartTime() 获取套餐包生效时间。
 * @method void setStartTime(string $StartTime) 设置套餐包生效时间。
 * @method string getExpireTime() 获取套餐包到期时间。
 * @method void setExpireTime(string $ExpireTime) 设置套餐包到期时间。
 * @method string getExclusiveAllocated() 获取独占池已分配额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
 * @method void setExclusiveAllocated(string $ExclusiveAllocated) 设置独占池已分配额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
 * @method string getExclusiveUsed() 获取独占池已用额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
 * @method void setExclusiveUsed(string $ExclusiveUsed) 设置独占池已用额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
 * @method string getSharedPool() 获取共享池总额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
 * @method void setSharedPool(string $SharedPool) 设置共享池总额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
 * @method string getSharedUsed() 获取共享已用额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
 * @method void setSharedUsed(string $SharedUsed) 设置共享已用额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
 * @method string getCycleQuota() 获取当期额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
 * @method void setCycleQuota(string $CycleQuota) 设置当期额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
 * @method integer getCurrentCycle() 获取当前周期。
 * @method void setCurrentCycle(integer $CurrentCycle) 设置当前周期。
 * @method integer getRemainCycles() 获取剩余周期。
 * @method void setRemainCycles(integer $RemainCycles) 设置剩余周期。
 */
class TokenPlanPackageInfo extends AbstractModel
{
    /**
     * @var string 总额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
     */
    public $TotalQuota;

    /**
     * @var string 总已使用额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
     */
    public $TotalUsed;

    /**
     * @var integer 总周期数。
     */
    public $TotalCycles;

    /**
     * @var string 周期单位。取值：month（月）
     */
    public $CycleUnit;

    /**
     * @var string 套餐包生效时间。
     */
    public $StartTime;

    /**
     * @var string 套餐包到期时间。
     */
    public $ExpireTime;

    /**
     * @var string 独占池已分配额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
     */
    public $ExclusiveAllocated;

    /**
     * @var string 独占池已用额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
     */
    public $ExclusiveUsed;

    /**
     * @var string 共享池总额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
     */
    public $SharedPool;

    /**
     * @var string 共享已用额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
     */
    public $SharedUsed;

    /**
     * @var string 当期额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
     */
    public $CycleQuota;

    /**
     * @var integer 当前周期。
     */
    public $CurrentCycle;

    /**
     * @var integer 剩余周期。
     */
    public $RemainCycles;

    /**
     * @param string $TotalQuota 总额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
     * @param string $TotalUsed 总已使用额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
     * @param integer $TotalCycles 总周期数。
     * @param string $CycleUnit 周期单位。取值：month（月）
     * @param string $StartTime 套餐包生效时间。
     * @param string $ExpireTime 套餐包到期时间。
     * @param string $ExclusiveAllocated 独占池已分配额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
     * @param string $ExclusiveUsed 独占池已用额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
     * @param string $SharedPool 共享池总额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
     * @param string $SharedUsed 共享已用额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
     * @param string $CycleQuota 当期额度。根据套餐类型区分单位：credits（企业版专业套餐），tokens（企业版auto套餐）
     * @param integer $CurrentCycle 当前周期。
     * @param integer $RemainCycles 剩余周期。
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
        if (array_key_exists("TotalQuota",$param) and $param["TotalQuota"] !== null) {
            $this->TotalQuota = $param["TotalQuota"];
        }

        if (array_key_exists("TotalUsed",$param) and $param["TotalUsed"] !== null) {
            $this->TotalUsed = $param["TotalUsed"];
        }

        if (array_key_exists("TotalCycles",$param) and $param["TotalCycles"] !== null) {
            $this->TotalCycles = $param["TotalCycles"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ExclusiveAllocated",$param) and $param["ExclusiveAllocated"] !== null) {
            $this->ExclusiveAllocated = $param["ExclusiveAllocated"];
        }

        if (array_key_exists("ExclusiveUsed",$param) and $param["ExclusiveUsed"] !== null) {
            $this->ExclusiveUsed = $param["ExclusiveUsed"];
        }

        if (array_key_exists("SharedPool",$param) and $param["SharedPool"] !== null) {
            $this->SharedPool = $param["SharedPool"];
        }

        if (array_key_exists("SharedUsed",$param) and $param["SharedUsed"] !== null) {
            $this->SharedUsed = $param["SharedUsed"];
        }

        if (array_key_exists("CycleQuota",$param) and $param["CycleQuota"] !== null) {
            $this->CycleQuota = $param["CycleQuota"];
        }

        if (array_key_exists("CurrentCycle",$param) and $param["CurrentCycle"] !== null) {
            $this->CurrentCycle = $param["CurrentCycle"];
        }

        if (array_key_exists("RemainCycles",$param) and $param["RemainCycles"] !== null) {
            $this->RemainCycles = $param["RemainCycles"];
        }
    }
}

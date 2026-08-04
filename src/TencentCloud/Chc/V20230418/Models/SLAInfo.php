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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SLA 信息
 *
 * @method string getSLAStatus() 获取<p>SLA 状态</p><p>枚举值：</p><ul><li>InSLA： SLA 内</li><li>Overdue： 已超时</li><li>Completed： 已完成</li></ul>
 * @method void setSLAStatus(string $SLAStatus) 设置<p>SLA 状态</p><p>枚举值：</p><ul><li>InSLA： SLA 内</li><li>Overdue： 已超时</li><li>Completed： 已完成</li></ul>
 * @method string getDueTime() 获取<p>到期时间</p>
 * @method void setDueTime(string $DueTime) 设置<p>到期时间</p>
 * @method float getRemainingHours() 获取<p>剩余时长</p><p>单位：小时</p>
 * @method void setRemainingHours(float $RemainingHours) 设置<p>剩余时长</p><p>单位：小时</p>
 * @method float getOverdueHours() 获取<p>超时时长</p><p>单位：小时</p>
 * @method void setOverdueHours(float $OverdueHours) 设置<p>超时时长</p><p>单位：小时</p>
 * @method integer getSLADays() 获取<p>SLA 工作日天数</p><p>单位：天</p>
 * @method void setSLADays(integer $SLADays) 设置<p>SLA 工作日天数</p><p>单位：天</p>
 */
class SLAInfo extends AbstractModel
{
    /**
     * @var string <p>SLA 状态</p><p>枚举值：</p><ul><li>InSLA： SLA 内</li><li>Overdue： 已超时</li><li>Completed： 已完成</li></ul>
     */
    public $SLAStatus;

    /**
     * @var string <p>到期时间</p>
     */
    public $DueTime;

    /**
     * @var float <p>剩余时长</p><p>单位：小时</p>
     */
    public $RemainingHours;

    /**
     * @var float <p>超时时长</p><p>单位：小时</p>
     */
    public $OverdueHours;

    /**
     * @var integer <p>SLA 工作日天数</p><p>单位：天</p>
     */
    public $SLADays;

    /**
     * @param string $SLAStatus <p>SLA 状态</p><p>枚举值：</p><ul><li>InSLA： SLA 内</li><li>Overdue： 已超时</li><li>Completed： 已完成</li></ul>
     * @param string $DueTime <p>到期时间</p>
     * @param float $RemainingHours <p>剩余时长</p><p>单位：小时</p>
     * @param float $OverdueHours <p>超时时长</p><p>单位：小时</p>
     * @param integer $SLADays <p>SLA 工作日天数</p><p>单位：天</p>
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
        if (array_key_exists("SLAStatus",$param) and $param["SLAStatus"] !== null) {
            $this->SLAStatus = $param["SLAStatus"];
        }

        if (array_key_exists("DueTime",$param) and $param["DueTime"] !== null) {
            $this->DueTime = $param["DueTime"];
        }

        if (array_key_exists("RemainingHours",$param) and $param["RemainingHours"] !== null) {
            $this->RemainingHours = $param["RemainingHours"];
        }

        if (array_key_exists("OverdueHours",$param) and $param["OverdueHours"] !== null) {
            $this->OverdueHours = $param["OverdueHours"];
        }

        if (array_key_exists("SLADays",$param) and $param["SLADays"] !== null) {
            $this->SLADays = $param["SLADays"];
        }
    }
}

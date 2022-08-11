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
 * 坐席状态相关信息
 *
 * @method string getEmail() 获取坐席邮箱
 * @method void setEmail(string $Email) 设置坐席邮箱
 * @method string getStatus() 获取坐席状态 free 示闲 | busy 忙碌 | rest 小休 | notReady 示忙 | afterCallWork 话后调整 | offline 离线
 * @method void setStatus(string $Status) 设置坐席状态 free 示闲 | busy 忙碌 | rest 小休 | notReady 示忙 | afterCallWork 话后调整 | offline 离线
 * @method StaffStatusExtra getStatusExtra() 获取坐席状态补充信息
 * @method void setStatusExtra(StaffStatusExtra $StatusExtra) 设置坐席状态补充信息
 * @method integer getOnlineDuration() 获取当天在线总时长
 * @method void setOnlineDuration(integer $OnlineDuration) 设置当天在线总时长
 * @method integer getFreeDuration() 获取当天示闲总时长
 * @method void setFreeDuration(integer $FreeDuration) 设置当天示闲总时长
 * @method integer getBusyDuration() 获取当天忙碌总时长
 * @method void setBusyDuration(integer $BusyDuration) 设置当天忙碌总时长
 * @method integer getNotReadyDuration() 获取当天示忙总时长
 * @method void setNotReadyDuration(integer $NotReadyDuration) 设置当天示忙总时长
 * @method integer getRestDuration() 获取当天小休总时长
 * @method void setRestDuration(integer $RestDuration) 设置当天小休总时长
 * @method integer getAfterCallWorkDuration() 获取当天话后调整总时长
 * @method void setAfterCallWorkDuration(integer $AfterCallWorkDuration) 设置当天话后调整总时长
 * @method string getReason() 获取小休原因
 * @method void setReason(string $Reason) 设置小休原因
 * @method boolean getReserveRest() 获取是否预约小休
 * @method void setReserveRest(boolean $ReserveRest) 设置是否预约小休
 * @method boolean getReserveNotReady() 获取是否预约示忙
 * @method void setReserveNotReady(boolean $ReserveNotReady) 设置是否预约示忙
 * @method integer getUseMobileAccept() 获取手机接听模式： 0 - 关闭 | 1 - 仅离线 | 2- 始终
 * @method void setUseMobileAccept(integer $UseMobileAccept) 设置手机接听模式： 0 - 关闭 | 1 - 仅离线 | 2- 始终
 * @method boolean getUseMobileCallOut() 获取手机外呼开关
 * @method void setUseMobileCallOut(boolean $UseMobileCallOut) 设置手机外呼开关
 */
class StaffStatusMetrics extends AbstractModel
{
    /**
     * @var string 坐席邮箱
     */
    public $Email;

    /**
     * @var string 坐席状态 free 示闲 | busy 忙碌 | rest 小休 | notReady 示忙 | afterCallWork 话后调整 | offline 离线
     */
    public $Status;

    /**
     * @var StaffStatusExtra 坐席状态补充信息
     */
    public $StatusExtra;

    /**
     * @var integer 当天在线总时长
     */
    public $OnlineDuration;

    /**
     * @var integer 当天示闲总时长
     */
    public $FreeDuration;

    /**
     * @var integer 当天忙碌总时长
     */
    public $BusyDuration;

    /**
     * @var integer 当天示忙总时长
     */
    public $NotReadyDuration;

    /**
     * @var integer 当天小休总时长
     */
    public $RestDuration;

    /**
     * @var integer 当天话后调整总时长
     */
    public $AfterCallWorkDuration;

    /**
     * @var string 小休原因
     */
    public $Reason;

    /**
     * @var boolean 是否预约小休
     */
    public $ReserveRest;

    /**
     * @var boolean 是否预约示忙
     */
    public $ReserveNotReady;

    /**
     * @var integer 手机接听模式： 0 - 关闭 | 1 - 仅离线 | 2- 始终
     */
    public $UseMobileAccept;

    /**
     * @var boolean 手机外呼开关
     */
    public $UseMobileCallOut;

    /**
     * @param string $Email 坐席邮箱
     * @param string $Status 坐席状态 free 示闲 | busy 忙碌 | rest 小休 | notReady 示忙 | afterCallWork 话后调整 | offline 离线
     * @param StaffStatusExtra $StatusExtra 坐席状态补充信息
     * @param integer $OnlineDuration 当天在线总时长
     * @param integer $FreeDuration 当天示闲总时长
     * @param integer $BusyDuration 当天忙碌总时长
     * @param integer $NotReadyDuration 当天示忙总时长
     * @param integer $RestDuration 当天小休总时长
     * @param integer $AfterCallWorkDuration 当天话后调整总时长
     * @param string $Reason 小休原因
     * @param boolean $ReserveRest 是否预约小休
     * @param boolean $ReserveNotReady 是否预约示忙
     * @param integer $UseMobileAccept 手机接听模式： 0 - 关闭 | 1 - 仅离线 | 2- 始终
     * @param boolean $UseMobileCallOut 手机外呼开关
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
        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusExtra",$param) and $param["StatusExtra"] !== null) {
            $this->StatusExtra = new StaffStatusExtra();
            $this->StatusExtra->deserialize($param["StatusExtra"]);
        }

        if (array_key_exists("OnlineDuration",$param) and $param["OnlineDuration"] !== null) {
            $this->OnlineDuration = $param["OnlineDuration"];
        }

        if (array_key_exists("FreeDuration",$param) and $param["FreeDuration"] !== null) {
            $this->FreeDuration = $param["FreeDuration"];
        }

        if (array_key_exists("BusyDuration",$param) and $param["BusyDuration"] !== null) {
            $this->BusyDuration = $param["BusyDuration"];
        }

        if (array_key_exists("NotReadyDuration",$param) and $param["NotReadyDuration"] !== null) {
            $this->NotReadyDuration = $param["NotReadyDuration"];
        }

        if (array_key_exists("RestDuration",$param) and $param["RestDuration"] !== null) {
            $this->RestDuration = $param["RestDuration"];
        }

        if (array_key_exists("AfterCallWorkDuration",$param) and $param["AfterCallWorkDuration"] !== null) {
            $this->AfterCallWorkDuration = $param["AfterCallWorkDuration"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("ReserveRest",$param) and $param["ReserveRest"] !== null) {
            $this->ReserveRest = $param["ReserveRest"];
        }

        if (array_key_exists("ReserveNotReady",$param) and $param["ReserveNotReady"] !== null) {
            $this->ReserveNotReady = $param["ReserveNotReady"];
        }

        if (array_key_exists("UseMobileAccept",$param) and $param["UseMobileAccept"] !== null) {
            $this->UseMobileAccept = $param["UseMobileAccept"];
        }

        if (array_key_exists("UseMobileCallOut",$param) and $param["UseMobileCallOut"] !== null) {
            $this->UseMobileCallOut = $param["UseMobileCallOut"];
        }
    }
}

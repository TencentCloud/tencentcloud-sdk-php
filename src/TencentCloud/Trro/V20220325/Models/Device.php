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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询用户设备的授权绑定情况
 *
 * @method string getDeviceId() 获取设备ID
 * @method void setDeviceId(string $DeviceId) 设置设备ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method integer getLicenseCount() 获取已经绑定license数量
 * @method void setLicenseCount(integer $LicenseCount) 设置已经绑定license数量
 * @method integer getRemainDay() 获取剩余天数：天
 * @method void setRemainDay(integer $RemainDay) 设置剩余天数：天
 * @method string getExpireTime() 获取过期时间：s
 * @method void setExpireTime(string $ExpireTime) 设置过期时间：s
 * @method string getDuration() 获取服务时长：s
 * @method void setDuration(string $Duration) 设置服务时长：s
 * @method array getLicenseIds() 获取已经绑定licenseId列表
 * @method void setLicenseIds(array $LicenseIds) 设置已经绑定licenseId列表
 * @method integer getMonthlyRemainTime() 获取每月license的限定时长
 * @method void setMonthlyRemainTime(integer $MonthlyRemainTime) 设置每月license的限定时长
 * @method integer getLimitedTime() 获取月封顶时长（分钟)
 * @method void setLimitedTime(integer $LimitedTime) 设置月封顶时长（分钟)
 */
class Device extends AbstractModel
{
    /**
     * @var string 设备ID
     */
    public $DeviceId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var integer 已经绑定license数量
     */
    public $LicenseCount;

    /**
     * @var integer 剩余天数：天
     */
    public $RemainDay;

    /**
     * @var string 过期时间：s
     */
    public $ExpireTime;

    /**
     * @var string 服务时长：s
     */
    public $Duration;

    /**
     * @var array 已经绑定licenseId列表
     */
    public $LicenseIds;

    /**
     * @var integer 每月license的限定时长
     */
    public $MonthlyRemainTime;

    /**
     * @var integer 月封顶时长（分钟)
     */
    public $LimitedTime;

    /**
     * @param string $DeviceId 设备ID
     * @param string $DeviceName 设备名称
     * @param integer $LicenseCount 已经绑定license数量
     * @param integer $RemainDay 剩余天数：天
     * @param string $ExpireTime 过期时间：s
     * @param string $Duration 服务时长：s
     * @param array $LicenseIds 已经绑定licenseId列表
     * @param integer $MonthlyRemainTime 每月license的限定时长
     * @param integer $LimitedTime 月封顶时长（分钟)
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("LicenseCount",$param) and $param["LicenseCount"] !== null) {
            $this->LicenseCount = $param["LicenseCount"];
        }

        if (array_key_exists("RemainDay",$param) and $param["RemainDay"] !== null) {
            $this->RemainDay = $param["RemainDay"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("LicenseIds",$param) and $param["LicenseIds"] !== null) {
            $this->LicenseIds = $param["LicenseIds"];
        }

        if (array_key_exists("MonthlyRemainTime",$param) and $param["MonthlyRemainTime"] !== null) {
            $this->MonthlyRemainTime = $param["MonthlyRemainTime"];
        }

        if (array_key_exists("LimitedTime",$param) and $param["LimitedTime"] !== null) {
            $this->LimitedTime = $param["LimitedTime"];
        }
    }
}

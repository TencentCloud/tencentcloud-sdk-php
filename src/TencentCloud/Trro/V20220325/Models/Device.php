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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询用户设备的授权绑定情况
 *
 * @method string getDeviceId() 获取设备ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceId(string $DeviceId) 设置设备ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceName() 获取设备名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceName(string $DeviceName) 设置设备名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLicenseCount() 获取已经绑定license数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLicenseCount(integer $LicenseCount) 设置已经绑定license数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRemainDay() 获取剩余天数：天
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemainDay(integer $RemainDay) 设置剩余天数：天
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取过期时间：s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置过期时间：s
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDuration() 获取服务时长：s
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(string $Duration) 设置服务时长：s
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLicenseIds() 获取已经绑定licenseId列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLicenseIds(array $LicenseIds) 设置已经绑定licenseId列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class Device extends AbstractModel
{
    /**
     * @var string 设备ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceId;

    /**
     * @var string 设备名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceName;

    /**
     * @var integer 已经绑定license数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LicenseCount;

    /**
     * @var integer 剩余天数：天
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemainDay;

    /**
     * @var string 过期时间：s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 服务时长：s
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var array 已经绑定licenseId列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LicenseIds;

    /**
     * @param string $DeviceId 设备ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceName 设备名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LicenseCount 已经绑定license数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RemainDay 剩余天数：天
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 过期时间：s
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Duration 服务时长：s
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LicenseIds 已经绑定licenseId列表
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}

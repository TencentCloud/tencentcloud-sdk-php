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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 新建Hardware入参
 *
 * @method string getSN() 获取硬件序列号
 * @method void setSN(string $SN) 设置硬件序列号
 * @method integer getLicenseChargingMode() 获取license计费模式：
1，租户付费
2，厂商月付费
3，厂商永久授权
 * @method void setLicenseChargingMode(integer $LicenseChargingMode) 设置license计费模式：
1，租户付费
2，厂商月付费
3，厂商永久授权
 * @method string getDescription() 获取设备描述
 * @method void setDescription(string $Description) 设置设备描述
 * @method string getHardwareId() 获取硬件ID，入参无需传递
 * @method void setHardwareId(string $HardwareId) 设置硬件ID，入参无需传递
 */
class Hardware extends AbstractModel
{
    /**
     * @var string 硬件序列号
     */
    public $SN;

    /**
     * @var integer license计费模式：
1，租户付费
2，厂商月付费
3，厂商永久授权
     */
    public $LicenseChargingMode;

    /**
     * @var string 设备描述
     */
    public $Description;

    /**
     * @var string 硬件ID，入参无需传递
     */
    public $HardwareId;

    /**
     * @param string $SN 硬件序列号
     * @param integer $LicenseChargingMode license计费模式：
1，租户付费
2，厂商月付费
3，厂商永久授权
     * @param string $Description 设备描述
     * @param string $HardwareId 硬件ID，入参无需传递
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
        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }

        if (array_key_exists("LicenseChargingMode",$param) and $param["LicenseChargingMode"] !== null) {
            $this->LicenseChargingMode = $param["LicenseChargingMode"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("HardwareId",$param) and $param["HardwareId"] !== null) {
            $this->HardwareId = $param["HardwareId"];
        }
    }
}

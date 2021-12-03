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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProduct请求参数结构体
 *
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method integer getDeviceType() 获取产品设备类型 1.普通设备 2.NVR设备
 * @method void setDeviceType(integer $DeviceType) 设置产品设备类型 1.普通设备 2.NVR设备
 * @method integer getProductVaildYears() 获取产品有效期
 * @method void setProductVaildYears(integer $ProductVaildYears) 设置产品有效期
 * @method array getFeatures() 获取设备功能码 ypsxth音频双向通话 spdxth视频单向通话
 * @method void setFeatures(array $Features) 设置设备功能码 ypsxth音频双向通话 spdxth视频单向通话
 * @method string getChipOs() 获取设备操作系统，通用设备填default
 * @method void setChipOs(string $ChipOs) 设置设备操作系统，通用设备填default
 * @method string getChipManufactureId() 获取芯片厂商id，通用设备填default
 * @method void setChipManufactureId(string $ChipManufactureId) 设置芯片厂商id，通用设备填default
 * @method string getChipId() 获取芯片id，通用设备填default
 * @method void setChipId(string $ChipId) 设置芯片id，通用设备填default
 * @method string getProductDescription() 获取产品描述信息
 * @method void setProductDescription(string $ProductDescription) 设置产品描述信息
 * @method integer getEncryptionType() 获取认证方式 只支持取值为2 psk认证
 * @method void setEncryptionType(integer $EncryptionType) 设置认证方式 只支持取值为2 psk认证
 * @method string getNetType() 获取连接类型，wifi表示WIFI连接，cellular表示4G连接
 * @method void setNetType(string $NetType) 设置连接类型，wifi表示WIFI连接，cellular表示4G连接
 */
class CreateProductRequest extends AbstractModel
{
    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var integer 产品设备类型 1.普通设备 2.NVR设备
     */
    public $DeviceType;

    /**
     * @var integer 产品有效期
     */
    public $ProductVaildYears;

    /**
     * @var array 设备功能码 ypsxth音频双向通话 spdxth视频单向通话
     */
    public $Features;

    /**
     * @var string 设备操作系统，通用设备填default
     */
    public $ChipOs;

    /**
     * @var string 芯片厂商id，通用设备填default
     */
    public $ChipManufactureId;

    /**
     * @var string 芯片id，通用设备填default
     */
    public $ChipId;

    /**
     * @var string 产品描述信息
     */
    public $ProductDescription;

    /**
     * @var integer 认证方式 只支持取值为2 psk认证
     */
    public $EncryptionType;

    /**
     * @var string 连接类型，wifi表示WIFI连接，cellular表示4G连接
     */
    public $NetType;

    /**
     * @param string $ProductName 产品名称
     * @param integer $DeviceType 产品设备类型 1.普通设备 2.NVR设备
     * @param integer $ProductVaildYears 产品有效期
     * @param array $Features 设备功能码 ypsxth音频双向通话 spdxth视频单向通话
     * @param string $ChipOs 设备操作系统，通用设备填default
     * @param string $ChipManufactureId 芯片厂商id，通用设备填default
     * @param string $ChipId 芯片id，通用设备填default
     * @param string $ProductDescription 产品描述信息
     * @param integer $EncryptionType 认证方式 只支持取值为2 psk认证
     * @param string $NetType 连接类型，wifi表示WIFI连接，cellular表示4G连接
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("ProductVaildYears",$param) and $param["ProductVaildYears"] !== null) {
            $this->ProductVaildYears = $param["ProductVaildYears"];
        }

        if (array_key_exists("Features",$param) and $param["Features"] !== null) {
            $this->Features = $param["Features"];
        }

        if (array_key_exists("ChipOs",$param) and $param["ChipOs"] !== null) {
            $this->ChipOs = $param["ChipOs"];
        }

        if (array_key_exists("ChipManufactureId",$param) and $param["ChipManufactureId"] !== null) {
            $this->ChipManufactureId = $param["ChipManufactureId"];
        }

        if (array_key_exists("ChipId",$param) and $param["ChipId"] !== null) {
            $this->ChipId = $param["ChipId"];
        }

        if (array_key_exists("ProductDescription",$param) and $param["ProductDescription"] !== null) {
            $this->ProductDescription = $param["ProductDescription"];
        }

        if (array_key_exists("EncryptionType",$param) and $param["EncryptionType"] !== null) {
            $this->EncryptionType = $param["EncryptionType"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }
    }
}

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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品信息
 *
 * @method integer getWorkspaceId() 获取工作空间id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间id
 * @method integer getProductId() 获取产品PID
 * @method void setProductId(integer $ProductId) 设置产品PID
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method string getDeviceTypeName() 获取设备类型
 * @method void setDeviceTypeName(string $DeviceTypeName) 设置设备类型
 * @method string getDeviceTypeId() 获取设备类型id
 * @method void setDeviceTypeId(string $DeviceTypeId) 设置设备类型id
 * @method integer getAttribute() 获取产品属性，如：网关（1）、直连设备（2）、子设备（3）
 * @method void setAttribute(integer $Attribute) 设置产品属性，如：网关（1）、直连设备（2）、子设备（3）
 * @method string getProductType() 获取产品型号
 * @method void setProductType(string $ProductType) 设置产品型号
 * @method integer getProductAbility() 获取产品能力:信令数据、音视频。二进制数值中第0位表示信令数据、第1位表示音视频 。1（信令数据），3（具有信令数据以及音视频能力）。
 * @method void setProductAbility(integer $ProductAbility) 设置产品能力:信令数据、音视频。二进制数值中第0位表示信令数据、第1位表示音视频 。1（信令数据），3（具有信令数据以及音视频能力）。
 * @method string getManufacturer() 获取生产厂商
 * @method void setManufacturer(string $Manufacturer) 设置生产厂商
 * @method string getMaintenanceMfr() 获取维保厂商
 * @method void setMaintenanceMfr(string $MaintenanceMfr) 设置维保厂商
 * @method string getModelName() 获取物模型名称
 * @method void setModelName(string $ModelName) 设置物模型名称
 * @method string getModelId() 获取物模型id
 * @method void setModelId(string $ModelId) 设置物模型id
 * @method integer getModelType() 获取物模型类型，产品模型/标准模型
 * @method void setModelType(integer $ModelType) 设置物模型类型，产品模型/标准模型
 */
class ProductInfo extends AbstractModel
{
    /**
     * @var integer 工作空间id
     */
    public $WorkspaceId;

    /**
     * @var integer 产品PID
     */
    public $ProductId;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var string 设备类型
     */
    public $DeviceTypeName;

    /**
     * @var string 设备类型id
     */
    public $DeviceTypeId;

    /**
     * @var integer 产品属性，如：网关（1）、直连设备（2）、子设备（3）
     */
    public $Attribute;

    /**
     * @var string 产品型号
     */
    public $ProductType;

    /**
     * @var integer 产品能力:信令数据、音视频。二进制数值中第0位表示信令数据、第1位表示音视频 。1（信令数据），3（具有信令数据以及音视频能力）。
     */
    public $ProductAbility;

    /**
     * @var string 生产厂商
     */
    public $Manufacturer;

    /**
     * @var string 维保厂商
     */
    public $MaintenanceMfr;

    /**
     * @var string 物模型名称
     */
    public $ModelName;

    /**
     * @var string 物模型id
     */
    public $ModelId;

    /**
     * @var integer 物模型类型，产品模型/标准模型
     */
    public $ModelType;

    /**
     * @param integer $WorkspaceId 工作空间id
     * @param integer $ProductId 产品PID
     * @param string $ProductName 产品名称
     * @param string $DeviceTypeName 设备类型
     * @param string $DeviceTypeId 设备类型id
     * @param integer $Attribute 产品属性，如：网关（1）、直连设备（2）、子设备（3）
     * @param string $ProductType 产品型号
     * @param integer $ProductAbility 产品能力:信令数据、音视频。二进制数值中第0位表示信令数据、第1位表示音视频 。1（信令数据），3（具有信令数据以及音视频能力）。
     * @param string $Manufacturer 生产厂商
     * @param string $MaintenanceMfr 维保厂商
     * @param string $ModelName 物模型名称
     * @param string $ModelId 物模型id
     * @param integer $ModelType 物模型类型，产品模型/标准模型
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("DeviceTypeName",$param) and $param["DeviceTypeName"] !== null) {
            $this->DeviceTypeName = $param["DeviceTypeName"];
        }

        if (array_key_exists("DeviceTypeId",$param) and $param["DeviceTypeId"] !== null) {
            $this->DeviceTypeId = $param["DeviceTypeId"];
        }

        if (array_key_exists("Attribute",$param) and $param["Attribute"] !== null) {
            $this->Attribute = $param["Attribute"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("ProductAbility",$param) and $param["ProductAbility"] !== null) {
            $this->ProductAbility = $param["ProductAbility"];
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("MaintenanceMfr",$param) and $param["MaintenanceMfr"] !== null) {
            $this->MaintenanceMfr = $param["MaintenanceMfr"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }
    }
}

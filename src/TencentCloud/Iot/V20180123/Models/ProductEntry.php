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
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品条目
 *
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 * @method string getProductKey() 获取产品Key
 * @method void setProductKey(string $ProductKey) 设置产品Key
 * @method integer getAppId() 获取AppId
 * @method void setAppId(integer $AppId) 设置AppId
 * @method string getName() 获取产品名称
 * @method void setName(string $Name) 设置产品名称
 * @method string getDescription() 获取产品描述
 * @method void setDescription(string $Description) 设置产品描述
 * @method string getDomain() 获取连接域名
 * @method void setDomain(string $Domain) 设置连接域名
 * @method integer getAuthType() 获取鉴权类型（0：直连，1：Token）
 * @method void setAuthType(integer $AuthType) 设置鉴权类型（0：直连，1：Token）
 * @method string getDataProtocol() 获取数据协议（native/template）
 * @method void setDataProtocol(string $DataProtocol) 设置数据协议（native/template）
 * @method integer getDeleted() 获取删除（0未删除）
 * @method void setDeleted(integer $Deleted) 设置删除（0未删除）
 * @method string getMessage() 获取备注
 * @method void setMessage(string $Message) 设置备注
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getCommProtocol() 获取通信方式
 * @method void setCommProtocol(string $CommProtocol) 设置通信方式
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getDeviceType() 获取设备类型
 * @method void setDeviceType(string $DeviceType) 设置设备类型
 */
class ProductEntry extends AbstractModel
{
    /**
     * @var string 产品Id
     */
    public $ProductId;

    /**
     * @var string 产品Key
     */
    public $ProductKey;

    /**
     * @var integer AppId
     */
    public $AppId;

    /**
     * @var string 产品名称
     */
    public $Name;

    /**
     * @var string 产品描述
     */
    public $Description;

    /**
     * @var string 连接域名
     */
    public $Domain;

    /**
     * @var integer 鉴权类型（0：直连，1：Token）
     */
    public $AuthType;

    /**
     * @var string 数据协议（native/template）
     */
    public $DataProtocol;

    /**
     * @var integer 删除（0未删除）
     */
    public $Deleted;

    /**
     * @var string 备注
     */
    public $Message;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 通信方式
     */
    public $CommProtocol;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 设备类型
     */
    public $DeviceType;

    /**
     * @param string $ProductId 产品Id
     * @param string $ProductKey 产品Key
     * @param integer $AppId AppId
     * @param string $Name 产品名称
     * @param string $Description 产品描述
     * @param string $Domain 连接域名
     * @param integer $AuthType 鉴权类型（0：直连，1：Token）
     * @param string $DataProtocol 数据协议（native/template）
     * @param integer $Deleted 删除（0未删除）
     * @param string $Message 备注
     * @param string $CreateTime 创建时间
     * @param string $CommProtocol 通信方式
     * @param string $Region 地域
     * @param string $DeviceType 设备类型
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductKey",$param) and $param["ProductKey"] !== null) {
            $this->ProductKey = $param["ProductKey"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("DataProtocol",$param) and $param["DataProtocol"] !== null) {
            $this->DataProtocol = $param["DataProtocol"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CommProtocol",$param) and $param["CommProtocol"] !== null) {
            $this->CommProtocol = $param["CommProtocol"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }
    }
}

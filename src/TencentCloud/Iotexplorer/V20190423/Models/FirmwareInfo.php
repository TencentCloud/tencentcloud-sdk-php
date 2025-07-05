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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备固件详细信息
 *
 * @method string getVersion() 获取固件版本
 * @method void setVersion(string $Version) 设置固件版本
 * @method string getMd5sum() 获取固件MD5值
 * @method void setMd5sum(string $Md5sum) 设置固件MD5值
 * @method integer getCreateTime() 获取固件创建时间
 * @method void setCreateTime(integer $CreateTime) 设置固件创建时间
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method string getName() 获取固件名称
 * @method void setName(string $Name) 设置固件名称
 * @method string getDescription() 获取固件描述
 * @method void setDescription(string $Description) 设置固件描述
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getFwType() 获取固件升级模块
 * @method void setFwType(string $FwType) 设置固件升级模块
 * @method integer getCreateUserId() 获取创建者子 uin
 * @method void setCreateUserId(integer $CreateUserId) 设置创建者子 uin
 * @method string getCreatorNickName() 获取创建者昵称
 * @method void setCreatorNickName(string $CreatorNickName) 设置创建者昵称
 * @method string getUserDefined() 获取固件用户自定义配置信息
 * @method void setUserDefined(string $UserDefined) 设置固件用户自定义配置信息
 */
class FirmwareInfo extends AbstractModel
{
    /**
     * @var string 固件版本
     */
    public $Version;

    /**
     * @var string 固件MD5值
     */
    public $Md5sum;

    /**
     * @var integer 固件创建时间
     */
    public $CreateTime;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var string 固件名称
     */
    public $Name;

    /**
     * @var string 固件描述
     */
    public $Description;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 固件升级模块
     */
    public $FwType;

    /**
     * @var integer 创建者子 uin
     */
    public $CreateUserId;

    /**
     * @var string 创建者昵称
     */
    public $CreatorNickName;

    /**
     * @var string 固件用户自定义配置信息
     */
    public $UserDefined;

    /**
     * @param string $Version 固件版本
     * @param string $Md5sum 固件MD5值
     * @param integer $CreateTime 固件创建时间
     * @param string $ProductName 产品名称
     * @param string $Name 固件名称
     * @param string $Description 固件描述
     * @param string $ProductId 产品ID
     * @param string $FwType 固件升级模块
     * @param integer $CreateUserId 创建者子 uin
     * @param string $CreatorNickName 创建者昵称
     * @param string $UserDefined 固件用户自定义配置信息
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Md5sum",$param) and $param["Md5sum"] !== null) {
            $this->Md5sum = $param["Md5sum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }

        if (array_key_exists("CreateUserId",$param) and $param["CreateUserId"] !== null) {
            $this->CreateUserId = $param["CreateUserId"];
        }

        if (array_key_exists("CreatorNickName",$param) and $param["CreatorNickName"] !== null) {
            $this->CreatorNickName = $param["CreatorNickName"];
        }

        if (array_key_exists("UserDefined",$param) and $param["UserDefined"] !== null) {
            $this->UserDefined = $param["UserDefined"];
        }
    }
}

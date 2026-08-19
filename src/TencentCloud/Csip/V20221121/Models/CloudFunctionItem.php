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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云函数
 *
 * @method string getInstanceName() 获取云函数名称
 * @method void setInstanceName(string $InstanceName) 设置云函数名称
 * @method string getInstanceStatus() 获取云函数状态
 * @method void setInstanceStatus(string $InstanceStatus) 设置云函数状态
 * @method string getFunctionType() 获取云函数类型
 * @method void setFunctionType(string $FunctionType) 设置云函数类型
 * @method string getInstanceTag() 获取资源标签
 * @method void setInstanceTag(string $InstanceTag) 设置资源标签
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getDomain() 获取自定义域名
 * @method void setDomain(string $Domain) 设置自定义域名
 * @method string getInstanceID() 获取实例ID
 * @method void setInstanceID(string $InstanceID) 设置实例ID
 * @method string getInstanceType() 获取实例类型
 * @method void setInstanceType(string $InstanceType) 设置实例类型
 * @method integer getAppID() 获取租户ID
 * @method void setAppID(integer $AppID) 设置租户ID
 * @method string getInstanceStatusDisplay() 获取云函数状态展示内容
 * @method void setInstanceStatusDisplay(string $InstanceStatusDisplay) 设置云函数状态展示内容
 * @method string getCoreAssetFlag() 获取核心资产标签
 * @method void setCoreAssetFlag(string $CoreAssetFlag) 设置核心资产标签
 * @method string getPublicURL() 获取公网访问URL
 * @method void setPublicURL(string $PublicURL) 设置公网访问URL
 * @method string getPrivateURL() 获取私网访问URL
 * @method void setPrivateURL(string $PrivateURL) 设置私网访问URL
 * @method string getAccountInfo() 获取所属账号
 * @method void setAccountInfo(string $AccountInfo) 设置所属账号
 */
class CloudFunctionItem extends AbstractModel
{
    /**
     * @var string 云函数名称
     */
    public $InstanceName;

    /**
     * @var string 云函数状态
     */
    public $InstanceStatus;

    /**
     * @var string 云函数类型
     */
    public $FunctionType;

    /**
     * @var string 资源标签
     */
    public $InstanceTag;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 自定义域名
     */
    public $Domain;

    /**
     * @var string 实例ID
     */
    public $InstanceID;

    /**
     * @var string 实例类型
     */
    public $InstanceType;

    /**
     * @var integer 租户ID
     */
    public $AppID;

    /**
     * @var string 云函数状态展示内容
     */
    public $InstanceStatusDisplay;

    /**
     * @var string 核心资产标签
     */
    public $CoreAssetFlag;

    /**
     * @var string 公网访问URL
     */
    public $PublicURL;

    /**
     * @var string 私网访问URL
     */
    public $PrivateURL;

    /**
     * @var string 所属账号
     */
    public $AccountInfo;

    /**
     * @param string $InstanceName 云函数名称
     * @param string $InstanceStatus 云函数状态
     * @param string $FunctionType 云函数类型
     * @param string $InstanceTag 资源标签
     * @param string $Namespace 命名空间
     * @param string $Region 地域
     * @param string $Domain 自定义域名
     * @param string $InstanceID 实例ID
     * @param string $InstanceType 实例类型
     * @param integer $AppID 租户ID
     * @param string $InstanceStatusDisplay 云函数状态展示内容
     * @param string $CoreAssetFlag 核心资产标签
     * @param string $PublicURL 公网访问URL
     * @param string $PrivateURL 私网访问URL
     * @param string $AccountInfo 所属账号
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("FunctionType",$param) and $param["FunctionType"] !== null) {
            $this->FunctionType = $param["FunctionType"];
        }

        if (array_key_exists("InstanceTag",$param) and $param["InstanceTag"] !== null) {
            $this->InstanceTag = $param["InstanceTag"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("InstanceStatusDisplay",$param) and $param["InstanceStatusDisplay"] !== null) {
            $this->InstanceStatusDisplay = $param["InstanceStatusDisplay"];
        }

        if (array_key_exists("CoreAssetFlag",$param) and $param["CoreAssetFlag"] !== null) {
            $this->CoreAssetFlag = $param["CoreAssetFlag"];
        }

        if (array_key_exists("PublicURL",$param) and $param["PublicURL"] !== null) {
            $this->PublicURL = $param["PublicURL"];
        }

        if (array_key_exists("PrivateURL",$param) and $param["PrivateURL"] !== null) {
            $this->PrivateURL = $param["PrivateURL"];
        }

        if (array_key_exists("AccountInfo",$param) and $param["AccountInfo"] !== null) {
            $this->AccountInfo = $param["AccountInfo"];
        }
    }
}

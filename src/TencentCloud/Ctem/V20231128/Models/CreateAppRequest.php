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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApp请求参数结构体
 *
 * @method integer getCustomerId() 获取企业ID
 * @method void setCustomerId(integer $CustomerId) 设置企业ID
 * @method string getName() 获取移动端名称
 * @method void setName(string $Name) 设置移动端名称
 * @method string getLogo() 获取图片地址
 * @method void setLogo(string $Logo) 设置图片地址
 * @method string getPlatform() 获取平台，ios或android
 * @method void setPlatform(string $Platform) 设置平台，ios或android
 * @method string getAppVersion() 获取版本
 * @method void setAppVersion(string $AppVersion) 设置版本
 * @method string getDownloadUrl() 获取下载地址
 * @method void setDownloadUrl(string $DownloadUrl) 设置下载地址
 * @method string getPackageName() 获取安装包名
 * @method void setPackageName(string $PackageName) 设置安装包名
 * @method string getDeveloper() 获取开发者
 * @method void setDeveloper(string $Developer) 设置开发者
 * @method string getServerUrl() 获取移动端地址
 * @method void setServerUrl(string $ServerUrl) 设置移动端地址
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getEnterpriseUid() 获取子公司ID
 * @method void setEnterpriseUid(string $EnterpriseUid) 设置子公司ID
 */
class CreateAppRequest extends AbstractModel
{
    /**
     * @var integer 企业ID
     */
    public $CustomerId;

    /**
     * @var string 移动端名称
     */
    public $Name;

    /**
     * @var string 图片地址
     */
    public $Logo;

    /**
     * @var string 平台，ios或android
     */
    public $Platform;

    /**
     * @var string 版本
     */
    public $AppVersion;

    /**
     * @var string 下载地址
     */
    public $DownloadUrl;

    /**
     * @var string 安装包名
     */
    public $PackageName;

    /**
     * @var string 开发者
     */
    public $Developer;

    /**
     * @var string 移动端地址
     */
    public $ServerUrl;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 子公司ID
     */
    public $EnterpriseUid;

    /**
     * @param integer $CustomerId 企业ID
     * @param string $Name 移动端名称
     * @param string $Logo 图片地址
     * @param string $Platform 平台，ios或android
     * @param string $AppVersion 版本
     * @param string $DownloadUrl 下载地址
     * @param string $PackageName 安装包名
     * @param string $Developer 开发者
     * @param string $ServerUrl 移动端地址
     * @param string $Description 描述
     * @param string $EnterpriseUid 子公司ID
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
        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Logo",$param) and $param["Logo"] !== null) {
            $this->Logo = $param["Logo"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("Developer",$param) and $param["Developer"] !== null) {
            $this->Developer = $param["Developer"];
        }

        if (array_key_exists("ServerUrl",$param) and $param["ServerUrl"] !== null) {
            $this->ServerUrl = $param["ServerUrl"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EnterpriseUid",$param) and $param["EnterpriseUid"] !== null) {
            $this->EnterpriseUid = $param["EnterpriseUid"];
        }
    }
}

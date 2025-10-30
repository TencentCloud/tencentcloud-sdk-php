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
 * 移动资产详情
 *
 * @method integer getId() 获取主键ID
 * @method void setId(integer $Id) 设置主键ID
 * @method DisplayToolCommon getDisplayToolCommon() 获取公共字段
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置公共字段
 * @method string getName() 获取APP名称
 * @method void setName(string $Name) 设置APP名称
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getDeveloper() 获取开发者
 * @method void setDeveloper(string $Developer) 设置开发者
 * @method string getDownloadUrl() 获取下载地址
 * @method void setDownloadUrl(string $DownloadUrl) 设置下载地址
 * @method string getLogo() 获取图片
 * @method void setLogo(string $Logo) 设置图片
 * @method string getPackageName() 获取包名
 * @method void setPackageName(string $PackageName) 设置包名
 * @method string getPlatform() 获取平台
 * @method void setPlatform(string $Platform) 设置平台
 * @method string getServerUrl() 获取服务端地址
 * @method void setServerUrl(string $ServerUrl) 设置服务端地址
 * @method string getAppVersion() 获取app版本
 * @method void setAppVersion(string $AppVersion) 设置app版本
 */
class DisplayApp extends AbstractModel
{
    /**
     * @var integer 主键ID
     */
    public $Id;

    /**
     * @var DisplayToolCommon 公共字段
     */
    public $DisplayToolCommon;

    /**
     * @var string APP名称
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 开发者
     */
    public $Developer;

    /**
     * @var string 下载地址
     */
    public $DownloadUrl;

    /**
     * @var string 图片
     */
    public $Logo;

    /**
     * @var string 包名
     */
    public $PackageName;

    /**
     * @var string 平台
     */
    public $Platform;

    /**
     * @var string 服务端地址
     */
    public $ServerUrl;

    /**
     * @var string app版本
     */
    public $AppVersion;

    /**
     * @param integer $Id 主键ID
     * @param DisplayToolCommon $DisplayToolCommon 公共字段
     * @param string $Name APP名称
     * @param string $Description 描述
     * @param string $Developer 开发者
     * @param string $DownloadUrl 下载地址
     * @param string $Logo 图片
     * @param string $PackageName 包名
     * @param string $Platform 平台
     * @param string $ServerUrl 服务端地址
     * @param string $AppVersion app版本
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DisplayToolCommon",$param) and $param["DisplayToolCommon"] !== null) {
            $this->DisplayToolCommon = new DisplayToolCommon();
            $this->DisplayToolCommon->deserialize($param["DisplayToolCommon"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Developer",$param) and $param["Developer"] !== null) {
            $this->Developer = $param["Developer"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("Logo",$param) and $param["Logo"] !== null) {
            $this->Logo = $param["Logo"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ServerUrl",$param) and $param["ServerUrl"] !== null) {
            $this->ServerUrl = $param["ServerUrl"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }
    }
}

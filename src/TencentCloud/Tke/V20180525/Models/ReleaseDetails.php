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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用市场的安装应用详情
 *
 * @method string getName() 获取应用名称
 * @method void setName(string $Name) 设置应用名称
 * @method string getNamespace() 获取应用所在命名空间
 * @method void setNamespace(string $Namespace) 设置应用所在命名空间
 * @method integer getVersion() 获取应用当前版本
 * @method void setVersion(integer $Version) 设置应用当前版本
 * @method string getStatus() 获取应用状态，参考 Helm 发布状态。 
可选值及其释义如下：
• ​​unknown​​: 状态未知 
• ​​deployed​​: 已成功部署 
• ​​uninstalled​​: 已卸载 
• ​​superseded​​: 已被新版本替代 
• ​​failed​​: 部署失败 
• ​​uninstalling​​: 正在卸载中
• ​​pending-install​​: 等待安装/安装进行中
• ​​pending-upgrade​​: 等待升级/升级进行中 
• ​​pending-rollback​​: 等待回滚/回滚进行中
 * @method void setStatus(string $Status) 设置应用状态，参考 Helm 发布状态。 
可选值及其释义如下：
• ​​unknown​​: 状态未知 
• ​​deployed​​: 已成功部署 
• ​​uninstalled​​: 已卸载 
• ​​superseded​​: 已被新版本替代 
• ​​failed​​: 部署失败 
• ​​uninstalling​​: 正在卸载中
• ​​pending-install​​: 等待安装/安装进行中
• ​​pending-upgrade​​: 等待升级/升级进行中 
• ​​pending-rollback​​: 等待回滚/回滚进行中
 * @method string getDescription() 获取应用描述
 * @method void setDescription(string $Description) 设置应用描述
 * @method string getNotes() 获取应用提示
 * @method void setNotes(string $Notes) 设置应用提示
 * @method string getConfig() 获取用户自定义参数
 * @method void setConfig(string $Config) 设置用户自定义参数
 * @method string getManifest() 获取应用资源详情
 * @method void setManifest(string $Manifest) 设置应用资源详情
 * @method string getChartVersion() 获取应用制品版本
 * @method void setChartVersion(string $ChartVersion) 设置应用制品版本
 * @method string getChartName() 获取应用制品名称
 * @method void setChartName(string $ChartName) 设置应用制品名称
 * @method string getChartDescription() 获取应用制品描述
 * @method void setChartDescription(string $ChartDescription) 设置应用制品描述
 * @method string getAppVersion() 获取应用制品app版本
 * @method void setAppVersion(string $AppVersion) 设置应用制品app版本
 * @method string getFirstDeployedTime() 获取应用首次部署时间
 * @method void setFirstDeployedTime(string $FirstDeployedTime) 设置应用首次部署时间
 * @method string getLastDeployedTime() 获取应用最近部署时间
 * @method void setLastDeployedTime(string $LastDeployedTime) 设置应用最近部署时间
 * @method string getComputedValues() 获取应用参数
 * @method void setComputedValues(string $ComputedValues) 设置应用参数
 * @method string getChartFrom() 获取chart 的来源， tke-market, others
 * @method void setChartFrom(string $ChartFrom) 设置chart 的来源， tke-market, others
 * @method string getChartURL() 获取第三方chart 的安装地址
 * @method void setChartURL(string $ChartURL) 设置第三方chart 的安装地址
 * @method string getResources() 获取通过chart 创建的资源
 * @method void setResources(string $Resources) 设置通过chart 创建的资源
 */
class ReleaseDetails extends AbstractModel
{
    /**
     * @var string 应用名称
     */
    public $Name;

    /**
     * @var string 应用所在命名空间
     */
    public $Namespace;

    /**
     * @var integer 应用当前版本
     */
    public $Version;

    /**
     * @var string 应用状态，参考 Helm 发布状态。 
可选值及其释义如下：
• ​​unknown​​: 状态未知 
• ​​deployed​​: 已成功部署 
• ​​uninstalled​​: 已卸载 
• ​​superseded​​: 已被新版本替代 
• ​​failed​​: 部署失败 
• ​​uninstalling​​: 正在卸载中
• ​​pending-install​​: 等待安装/安装进行中
• ​​pending-upgrade​​: 等待升级/升级进行中 
• ​​pending-rollback​​: 等待回滚/回滚进行中
     */
    public $Status;

    /**
     * @var string 应用描述
     */
    public $Description;

    /**
     * @var string 应用提示
     */
    public $Notes;

    /**
     * @var string 用户自定义参数
     */
    public $Config;

    /**
     * @var string 应用资源详情
     */
    public $Manifest;

    /**
     * @var string 应用制品版本
     */
    public $ChartVersion;

    /**
     * @var string 应用制品名称
     */
    public $ChartName;

    /**
     * @var string 应用制品描述
     */
    public $ChartDescription;

    /**
     * @var string 应用制品app版本
     */
    public $AppVersion;

    /**
     * @var string 应用首次部署时间
     */
    public $FirstDeployedTime;

    /**
     * @var string 应用最近部署时间
     */
    public $LastDeployedTime;

    /**
     * @var string 应用参数
     */
    public $ComputedValues;

    /**
     * @var string chart 的来源， tke-market, others
     */
    public $ChartFrom;

    /**
     * @var string 第三方chart 的安装地址
     */
    public $ChartURL;

    /**
     * @var string 通过chart 创建的资源
     */
    public $Resources;

    /**
     * @param string $Name 应用名称
     * @param string $Namespace 应用所在命名空间
     * @param integer $Version 应用当前版本
     * @param string $Status 应用状态，参考 Helm 发布状态。 
可选值及其释义如下：
• ​​unknown​​: 状态未知 
• ​​deployed​​: 已成功部署 
• ​​uninstalled​​: 已卸载 
• ​​superseded​​: 已被新版本替代 
• ​​failed​​: 部署失败 
• ​​uninstalling​​: 正在卸载中
• ​​pending-install​​: 等待安装/安装进行中
• ​​pending-upgrade​​: 等待升级/升级进行中 
• ​​pending-rollback​​: 等待回滚/回滚进行中
     * @param string $Description 应用描述
     * @param string $Notes 应用提示
     * @param string $Config 用户自定义参数
     * @param string $Manifest 应用资源详情
     * @param string $ChartVersion 应用制品版本
     * @param string $ChartName 应用制品名称
     * @param string $ChartDescription 应用制品描述
     * @param string $AppVersion 应用制品app版本
     * @param string $FirstDeployedTime 应用首次部署时间
     * @param string $LastDeployedTime 应用最近部署时间
     * @param string $ComputedValues 应用参数
     * @param string $ChartFrom chart 的来源， tke-market, others
     * @param string $ChartURL 第三方chart 的安装地址
     * @param string $Resources 通过chart 创建的资源
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Notes",$param) and $param["Notes"] !== null) {
            $this->Notes = $param["Notes"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("Manifest",$param) and $param["Manifest"] !== null) {
            $this->Manifest = $param["Manifest"];
        }

        if (array_key_exists("ChartVersion",$param) and $param["ChartVersion"] !== null) {
            $this->ChartVersion = $param["ChartVersion"];
        }

        if (array_key_exists("ChartName",$param) and $param["ChartName"] !== null) {
            $this->ChartName = $param["ChartName"];
        }

        if (array_key_exists("ChartDescription",$param) and $param["ChartDescription"] !== null) {
            $this->ChartDescription = $param["ChartDescription"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("FirstDeployedTime",$param) and $param["FirstDeployedTime"] !== null) {
            $this->FirstDeployedTime = $param["FirstDeployedTime"];
        }

        if (array_key_exists("LastDeployedTime",$param) and $param["LastDeployedTime"] !== null) {
            $this->LastDeployedTime = $param["LastDeployedTime"];
        }

        if (array_key_exists("ComputedValues",$param) and $param["ComputedValues"] !== null) {
            $this->ComputedValues = $param["ComputedValues"];
        }

        if (array_key_exists("ChartFrom",$param) and $param["ChartFrom"] !== null) {
            $this->ChartFrom = $param["ChartFrom"];
        }

        if (array_key_exists("ChartURL",$param) and $param["ChartURL"] !== null) {
            $this->ChartURL = $param["ChartURL"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = $param["Resources"];
        }
    }
}

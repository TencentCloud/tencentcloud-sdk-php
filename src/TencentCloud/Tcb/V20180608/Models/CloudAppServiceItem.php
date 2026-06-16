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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 部署服务信息
 *
 * @method string getServiceName() 获取服务名
 * @method void setServiceName(string $ServiceName) 设置服务名
 * @method string getFramework() 获取框架名
 * @method void setFramework(string $Framework) 设置框架名
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getAppPath() 获取应用路径
 * @method void setAppPath(string $AppPath) 设置应用路径
 * @method string getCreateTime() 获取服务创建时间
 * @method void setCreateTime(string $CreateTime) 设置服务创建时间
 * @method string getLatestVersionName() 获取最新版本名
 * @method void setLatestVersionName(string $LatestVersionName) 设置最新版本名
 * @method string getLatestStatus() 获取最新版本状态
 * @method void setLatestStatus(string $LatestStatus) 设置最新版本状态
 * @method string getLatestBuildTime() 获取最新版本构建时间
 * @method void setLatestBuildTime(string $LatestBuildTime) 设置最新版本构建时间
 * @method string getDeployType() 获取部署类型
 * @method void setDeployType(string $DeployType) 设置部署类型
 */
class CloudAppServiceItem extends AbstractModel
{
    /**
     * @var string 服务名
     */
    public $ServiceName;

    /**
     * @var string 框架名
     */
    public $Framework;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 应用路径
     */
    public $AppPath;

    /**
     * @var string 服务创建时间
     */
    public $CreateTime;

    /**
     * @var string 最新版本名
     */
    public $LatestVersionName;

    /**
     * @var string 最新版本状态
     */
    public $LatestStatus;

    /**
     * @var string 最新版本构建时间
     */
    public $LatestBuildTime;

    /**
     * @var string 部署类型
     */
    public $DeployType;

    /**
     * @param string $ServiceName 服务名
     * @param string $Framework 框架名
     * @param string $Domain 域名
     * @param string $AppPath 应用路径
     * @param string $CreateTime 服务创建时间
     * @param string $LatestVersionName 最新版本名
     * @param string $LatestStatus 最新版本状态
     * @param string $LatestBuildTime 最新版本构建时间
     * @param string $DeployType 部署类型
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Framework",$param) and $param["Framework"] !== null) {
            $this->Framework = $param["Framework"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AppPath",$param) and $param["AppPath"] !== null) {
            $this->AppPath = $param["AppPath"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LatestVersionName",$param) and $param["LatestVersionName"] !== null) {
            $this->LatestVersionName = $param["LatestVersionName"];
        }

        if (array_key_exists("LatestStatus",$param) and $param["LatestStatus"] !== null) {
            $this->LatestStatus = $param["LatestStatus"];
        }

        if (array_key_exists("LatestBuildTime",$param) and $param["LatestBuildTime"] !== null) {
            $this->LatestBuildTime = $param["LatestBuildTime"];
        }

        if (array_key_exists("DeployType",$param) and $param["DeployType"] !== null) {
            $this->DeployType = $param["DeployType"];
        }
    }
}

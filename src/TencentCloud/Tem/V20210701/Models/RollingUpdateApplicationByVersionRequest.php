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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RollingUpdateApplicationByVersion请求参数结构体
 *
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 * @method string getEnvironmentId() 获取环境ID
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境ID
 * @method string getDeployVersion() 获取更新版本，IMAGE 部署为 tag 值；JAR/WAR 部署 为 Version
 * @method void setDeployVersion(string $DeployVersion) 设置更新版本，IMAGE 部署为 tag 值；JAR/WAR 部署 为 Version
 * @method string getPackageName() 获取JAR/WAR 包名，仅 JAR/WAR 部署时必填
 * @method void setPackageName(string $PackageName) 设置JAR/WAR 包名，仅 JAR/WAR 部署时必填
 * @method string getFrom() 获取请求来源平台，含 IntelliJ，Coding
 * @method void setFrom(string $From) 设置请求来源平台，含 IntelliJ，Coding
 */
class RollingUpdateApplicationByVersionRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $ApplicationId;

    /**
     * @var string 环境ID
     */
    public $EnvironmentId;

    /**
     * @var string 更新版本，IMAGE 部署为 tag 值；JAR/WAR 部署 为 Version
     */
    public $DeployVersion;

    /**
     * @var string JAR/WAR 包名，仅 JAR/WAR 部署时必填
     */
    public $PackageName;

    /**
     * @var string 请求来源平台，含 IntelliJ，Coding
     */
    public $From;

    /**
     * @param string $ApplicationId 应用ID
     * @param string $EnvironmentId 环境ID
     * @param string $DeployVersion 更新版本，IMAGE 部署为 tag 值；JAR/WAR 部署 为 Version
     * @param string $PackageName JAR/WAR 包名，仅 JAR/WAR 部署时必填
     * @param string $From 请求来源平台，含 IntelliJ，Coding
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("DeployVersion",$param) and $param["DeployVersion"] !== null) {
            $this->DeployVersion = $param["DeployVersion"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }
    }
}

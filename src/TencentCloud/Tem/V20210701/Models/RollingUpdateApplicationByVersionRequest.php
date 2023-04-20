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
 * @method string getDeployStrategyType() 获取部署策略，AUTO 为全自动；BETA 为小批量验证后自动；MANUAL 为全手动；
 * @method void setDeployStrategyType(string $DeployStrategyType) 设置部署策略，AUTO 为全自动；BETA 为小批量验证后自动；MANUAL 为全手动；
 * @method integer getTotalBatchCount() 获取发布批次数
 * @method void setTotalBatchCount(integer $TotalBatchCount) 设置发布批次数
 * @method integer getBatchInterval() 获取批次间隔时间
 * @method void setBatchInterval(integer $BatchInterval) 设置批次间隔时间
 * @method integer getBetaBatchNum() 获取小批量验证批次的实例数
 * @method void setBetaBatchNum(integer $BetaBatchNum) 设置小批量验证批次的实例数
 * @method integer getMinAvailable() 获取发布过程中保障的最小可用实例数
 * @method void setMinAvailable(integer $MinAvailable) 设置发布过程中保障的最小可用实例数
 * @method boolean getForce() 获取是否强制发布
 * @method void setForce(boolean $Force) 设置是否强制发布
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
     * @var string 部署策略，AUTO 为全自动；BETA 为小批量验证后自动；MANUAL 为全手动；
     */
    public $DeployStrategyType;

    /**
     * @var integer 发布批次数
     */
    public $TotalBatchCount;

    /**
     * @var integer 批次间隔时间
     */
    public $BatchInterval;

    /**
     * @var integer 小批量验证批次的实例数
     */
    public $BetaBatchNum;

    /**
     * @var integer 发布过程中保障的最小可用实例数
     */
    public $MinAvailable;

    /**
     * @var boolean 是否强制发布
     */
    public $Force;

    /**
     * @param string $ApplicationId 应用ID
     * @param string $EnvironmentId 环境ID
     * @param string $DeployVersion 更新版本，IMAGE 部署为 tag 值；JAR/WAR 部署 为 Version
     * @param string $PackageName JAR/WAR 包名，仅 JAR/WAR 部署时必填
     * @param string $From 请求来源平台，含 IntelliJ，Coding
     * @param string $DeployStrategyType 部署策略，AUTO 为全自动；BETA 为小批量验证后自动；MANUAL 为全手动；
     * @param integer $TotalBatchCount 发布批次数
     * @param integer $BatchInterval 批次间隔时间
     * @param integer $BetaBatchNum 小批量验证批次的实例数
     * @param integer $MinAvailable 发布过程中保障的最小可用实例数
     * @param boolean $Force 是否强制发布
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

        if (array_key_exists("DeployStrategyType",$param) and $param["DeployStrategyType"] !== null) {
            $this->DeployStrategyType = $param["DeployStrategyType"];
        }

        if (array_key_exists("TotalBatchCount",$param) and $param["TotalBatchCount"] !== null) {
            $this->TotalBatchCount = $param["TotalBatchCount"];
        }

        if (array_key_exists("BatchInterval",$param) and $param["BatchInterval"] !== null) {
            $this->BatchInterval = $param["BatchInterval"];
        }

        if (array_key_exists("BetaBatchNum",$param) and $param["BetaBatchNum"] !== null) {
            $this->BetaBatchNum = $param["BetaBatchNum"];
        }

        if (array_key_exists("MinAvailable",$param) and $param["MinAvailable"] !== null) {
            $this->MinAvailable = $param["MinAvailable"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}

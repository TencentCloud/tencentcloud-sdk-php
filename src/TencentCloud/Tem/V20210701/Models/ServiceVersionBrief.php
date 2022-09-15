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
 * 服务版本信息列表
 *
 * @method string getVersionName() 获取版本名称
 * @method void setVersionName(string $VersionName) 设置版本名称
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method integer getEnableEs() 获取是否启动弹性 -- 已废弃
 * @method void setEnableEs(integer $EnableEs) 设置是否启动弹性 -- 已废弃
 * @method integer getCurrentInstances() 获取当前实例
 * @method void setCurrentInstances(integer $CurrentInstances) 设置当前实例
 * @method string getVersionId() 获取version的id
 * @method void setVersionId(string $VersionId) 设置version的id
 * @method LogOutputConf getLogOutputConf() 获取日志输出配置 -- 已废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogOutputConf(LogOutputConf $LogOutputConf) 设置日志输出配置 -- 已废弃
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpectedInstances() 获取期望实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpectedInstances(integer $ExpectedInstances) 设置期望实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeployMode() 获取部署方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployMode(string $DeployMode) 设置部署方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBuildTaskId() 获取建构任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuildTaskId(string $BuildTaskId) 设置建构任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvironmentId() 获取环境ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvironmentName() 获取环境name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvironmentName(string $EnvironmentName) 设置环境name
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationId() 获取服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationId(string $ApplicationId) 设置服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationName() 获取服务name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置服务name
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUnderDeploying() 获取是否正在发布中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnderDeploying(boolean $UnderDeploying) 设置是否正在发布中
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceVersionBrief extends AbstractModel
{
    /**
     * @var string 版本名称
     */
    public $VersionName;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var integer 是否启动弹性 -- 已废弃
     */
    public $EnableEs;

    /**
     * @var integer 当前实例
     */
    public $CurrentInstances;

    /**
     * @var string version的id
     */
    public $VersionId;

    /**
     * @var LogOutputConf 日志输出配置 -- 已废弃
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogOutputConf;

    /**
     * @var integer 期望实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpectedInstances;

    /**
     * @var string 部署方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployMode;

    /**
     * @var string 建构任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuildTaskId;

    /**
     * @var string 环境ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvironmentId;

    /**
     * @var string 环境name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvironmentName;

    /**
     * @var string 服务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationId;

    /**
     * @var string 服务name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationName;

    /**
     * @var boolean 是否正在发布中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnderDeploying;

    /**
     * @param string $VersionName 版本名称
     * @param string $Status 状态
     * @param integer $EnableEs 是否启动弹性 -- 已废弃
     * @param integer $CurrentInstances 当前实例
     * @param string $VersionId version的id
     * @param LogOutputConf $LogOutputConf 日志输出配置 -- 已废弃
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpectedInstances 期望实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeployMode 部署方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BuildTaskId 建构任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnvironmentId 环境ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnvironmentName 环境name
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationId 服务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationName 服务name
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UnderDeploying 是否正在发布中
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EnableEs",$param) and $param["EnableEs"] !== null) {
            $this->EnableEs = $param["EnableEs"];
        }

        if (array_key_exists("CurrentInstances",$param) and $param["CurrentInstances"] !== null) {
            $this->CurrentInstances = $param["CurrentInstances"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("LogOutputConf",$param) and $param["LogOutputConf"] !== null) {
            $this->LogOutputConf = new LogOutputConf();
            $this->LogOutputConf->deserialize($param["LogOutputConf"]);
        }

        if (array_key_exists("ExpectedInstances",$param) and $param["ExpectedInstances"] !== null) {
            $this->ExpectedInstances = $param["ExpectedInstances"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("BuildTaskId",$param) and $param["BuildTaskId"] !== null) {
            $this->BuildTaskId = $param["BuildTaskId"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("UnderDeploying",$param) and $param["UnderDeploying"] !== null) {
            $this->UnderDeploying = $param["UnderDeploying"];
        }
    }
}

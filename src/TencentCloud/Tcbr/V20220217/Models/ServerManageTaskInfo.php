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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务管理任务信息
 *
 * @method integer getId() 获取任务Id
 * @method void setId(integer $Id) 设置任务Id
 * @method string getEnvId() 获取环境Id
 * @method void setEnvId(string $EnvId) 设置环境Id
 * @method string getServerName() 获取服务名
 * @method void setServerName(string $ServerName) 设置服务名
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getChangeType() 获取变更类型
 * @method void setChangeType(string $ChangeType) 设置变更类型
 * @method string getReleaseType() 获取发布类型
 * @method void setReleaseType(string $ReleaseType) 设置发布类型
 * @method string getDeployType() 获取部署类型
 * @method void setDeployType(string $DeployType) 设置部署类型
 * @method string getPreVersionName() 获取上一个版本名
 * @method void setPreVersionName(string $PreVersionName) 设置上一个版本名
 * @method string getVersionName() 获取版本名
 * @method void setVersionName(string $VersionName) 设置版本名
 * @method integer getPipelineId() 获取流水线Id
 * @method void setPipelineId(integer $PipelineId) 设置流水线Id
 * @method integer getPipelineTaskId() 获取流水线任务Id
 * @method void setPipelineTaskId(integer $PipelineTaskId) 设置流水线任务Id
 * @method integer getReleaseId() 获取发布单Id
 * @method void setReleaseId(integer $ReleaseId) 设置发布单Id
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method array getSteps() 获取步骤信息
 * @method void setSteps(array $Steps) 设置步骤信息
 * @method string getFailReason() 获取失败原因
 * @method void setFailReason(string $FailReason) 设置失败原因
 * @method string getOperatorRemark() 获取操作标识
 * @method void setOperatorRemark(string $OperatorRemark) 设置操作标识
 */
class ServerManageTaskInfo extends AbstractModel
{
    /**
     * @var integer 任务Id
     */
    public $Id;

    /**
     * @var string 环境Id
     */
    public $EnvId;

    /**
     * @var string 服务名
     */
    public $ServerName;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 变更类型
     */
    public $ChangeType;

    /**
     * @var string 发布类型
     */
    public $ReleaseType;

    /**
     * @var string 部署类型
     */
    public $DeployType;

    /**
     * @var string 上一个版本名
     */
    public $PreVersionName;

    /**
     * @var string 版本名
     */
    public $VersionName;

    /**
     * @var integer 流水线Id
     */
    public $PipelineId;

    /**
     * @var integer 流水线任务Id
     */
    public $PipelineTaskId;

    /**
     * @var integer 发布单Id
     */
    public $ReleaseId;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var array 步骤信息
     */
    public $Steps;

    /**
     * @var string 失败原因
     */
    public $FailReason;

    /**
     * @var string 操作标识
     */
    public $OperatorRemark;

    /**
     * @param integer $Id 任务Id
     * @param string $EnvId 环境Id
     * @param string $ServerName 服务名
     * @param string $CreateTime 创建时间
     * @param string $ChangeType 变更类型
     * @param string $ReleaseType 发布类型
     * @param string $DeployType 部署类型
     * @param string $PreVersionName 上一个版本名
     * @param string $VersionName 版本名
     * @param integer $PipelineId 流水线Id
     * @param integer $PipelineTaskId 流水线任务Id
     * @param integer $ReleaseId 发布单Id
     * @param string $Status 状态
     * @param array $Steps 步骤信息
     * @param string $FailReason 失败原因
     * @param string $OperatorRemark 操作标识
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

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ChangeType",$param) and $param["ChangeType"] !== null) {
            $this->ChangeType = $param["ChangeType"];
        }

        if (array_key_exists("ReleaseType",$param) and $param["ReleaseType"] !== null) {
            $this->ReleaseType = $param["ReleaseType"];
        }

        if (array_key_exists("DeployType",$param) and $param["DeployType"] !== null) {
            $this->DeployType = $param["DeployType"];
        }

        if (array_key_exists("PreVersionName",$param) and $param["PreVersionName"] !== null) {
            $this->PreVersionName = $param["PreVersionName"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("PipelineId",$param) and $param["PipelineId"] !== null) {
            $this->PipelineId = $param["PipelineId"];
        }

        if (array_key_exists("PipelineTaskId",$param) and $param["PipelineTaskId"] !== null) {
            $this->PipelineTaskId = $param["PipelineTaskId"];
        }

        if (array_key_exists("ReleaseId",$param) and $param["ReleaseId"] !== null) {
            $this->ReleaseId = $param["ReleaseId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Steps",$param) and $param["Steps"] !== null) {
            $this->Steps = [];
            foreach ($param["Steps"] as $key => $value){
                $obj = new TaskStepInfo();
                $obj->deserialize($value);
                array_push($this->Steps, $obj);
            }
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("OperatorRemark",$param) and $param["OperatorRemark"] !== null) {
            $this->OperatorRemark = $param["OperatorRemark"];
        }
    }
}

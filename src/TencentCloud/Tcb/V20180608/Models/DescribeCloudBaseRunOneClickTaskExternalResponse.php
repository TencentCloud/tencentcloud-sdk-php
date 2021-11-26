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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudBaseRunOneClickTaskExternal返回参数结构体
 *
 * @method string getExternalId() 获取外部任务Id
 * @method void setExternalId(string $ExternalId) 设置外部任务Id
 * @method string getEnvId() 获取弃用
 * @method void setEnvId(string $EnvId) 设置弃用
 * @method string getUserUin() 获取用户uin
 * @method void setUserUin(string $UserUin) 设置用户uin
 * @method string getServerName() 获取服务名
 * @method void setServerName(string $ServerName) 设置服务名
 * @method string getVersionName() 获取版本名
 * @method void setVersionName(string $VersionName) 设置版本名
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getStage() 获取当前阶段
微信云托管环境创建阶段：envStage
存储资源创建阶段：storageStage
服务创建阶段：serverStage
 * @method void setStage(string $Stage) 设置当前阶段
微信云托管环境创建阶段：envStage
存储资源创建阶段：storageStage
服务创建阶段：serverStage
 * @method string getStatus() 获取状态
running
stopped
failed
finished
 * @method void setStatus(string $Status) 设置状态
running
stopped
failed
finished
 * @method string getFailReason() 获取失败原因
 * @method void setFailReason(string $FailReason) 设置失败原因
 * @method string getUserEnvId() 获取用户envId
 * @method void setUserEnvId(string $UserEnvId) 设置用户envId
 * @method string getStartTime() 获取创建时间
 * @method void setStartTime(string $StartTime) 设置创建时间
 * @method array getSteps() 获取步骤信息
 * @method void setSteps(array $Steps) 设置步骤信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloudBaseRunOneClickTaskExternalResponse extends AbstractModel
{
    /**
     * @var string 外部任务Id
     */
    public $ExternalId;

    /**
     * @var string 弃用
     */
    public $EnvId;

    /**
     * @var string 用户uin
     */
    public $UserUin;

    /**
     * @var string 服务名
     */
    public $ServerName;

    /**
     * @var string 版本名
     */
    public $VersionName;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 当前阶段
微信云托管环境创建阶段：envStage
存储资源创建阶段：storageStage
服务创建阶段：serverStage
     */
    public $Stage;

    /**
     * @var string 状态
running
stopped
failed
finished
     */
    public $Status;

    /**
     * @var string 失败原因
     */
    public $FailReason;

    /**
     * @var string 用户envId
     */
    public $UserEnvId;

    /**
     * @var string 创建时间
     */
    public $StartTime;

    /**
     * @var array 步骤信息
     */
    public $Steps;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ExternalId 外部任务Id
     * @param string $EnvId 弃用
     * @param string $UserUin 用户uin
     * @param string $ServerName 服务名
     * @param string $VersionName 版本名
     * @param string $CreateTime 创建时间
     * @param string $Stage 当前阶段
微信云托管环境创建阶段：envStage
存储资源创建阶段：storageStage
服务创建阶段：serverStage
     * @param string $Status 状态
running
stopped
failed
finished
     * @param string $FailReason 失败原因
     * @param string $UserEnvId 用户envId
     * @param string $StartTime 创建时间
     * @param array $Steps 步骤信息
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ExternalId",$param) and $param["ExternalId"] !== null) {
            $this->ExternalId = $param["ExternalId"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = $param["Stage"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("UserEnvId",$param) and $param["UserEnvId"] !== null) {
            $this->UserEnvId = $param["UserEnvId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Steps",$param) and $param["Steps"] !== null) {
            $this->Steps = [];
            foreach ($param["Steps"] as $key => $value){
                $obj = new OneClickTaskStepInfo();
                $obj->deserialize($value);
                array_push($this->Steps, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

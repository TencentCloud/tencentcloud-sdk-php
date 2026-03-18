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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 沙箱实例结构体
 *
 * @method string getInstanceId() 获取<p>沙箱实例唯一标识符</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>沙箱实例唯一标识符</p>
 * @method string getToolId() 获取<p>所属沙箱工具 ID</p>
 * @method void setToolId(string $ToolId) 设置<p>所属沙箱工具 ID</p>
 * @method string getToolName() 获取<p>所属沙箱工具名称</p>
 * @method void setToolName(string $ToolName) 设置<p>所属沙箱工具名称</p>
 * @method string getStatus() 获取<p>实例状态：STARTING（启动中）、RUNNING（运行中）、STOPPING（停止中）、STOPPED（已停止）、STOP_FAILED（停止失败）、FAILED（失败状态）</p>
 * @method void setStatus(string $Status) 设置<p>实例状态：STARTING（启动中）、RUNNING（运行中）、STOPPING（停止中）、STOPPED（已停止）、STOP_FAILED（停止失败）、FAILED（失败状态）</p>
 * @method integer getTimeoutSeconds() 获取<p>超时时间（秒），null 表示无超时设置</p>
 * @method void setTimeoutSeconds(integer $TimeoutSeconds) 设置<p>超时时间（秒），null 表示无超时设置</p>
 * @method string getExpiresAt() 获取<p>过期时间（ISO 8601 格式），null 表示无过期时间</p>
 * @method void setExpiresAt(string $ExpiresAt) 设置<p>过期时间（ISO 8601 格式），null 表示无过期时间</p>
 * @method string getStopReason() 获取<p>停止原因：manual（手动）、timeout（超时）、error（错误）、system（系统），仅在状态为 STOPPED、STOP_FAILED 或 FAILED 时有值。当 provider 停止失败时，状态为 STOP_FAILED，原因为 error</p>
 * @method void setStopReason(string $StopReason) 设置<p>停止原因：manual（手动）、timeout（超时）、error（错误）、system（系统），仅在状态为 STOPPED、STOP_FAILED 或 FAILED 时有值。当 provider 停止失败时，状态为 STOP_FAILED，原因为 error</p>
 * @method string getCreateTime() 获取<p>创建时间（ISO 8601 格式）</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间（ISO 8601 格式）</p>
 * @method string getUpdateTime() 获取<p>更新时间（ISO 8601 格式）</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间（ISO 8601 格式）</p>
 * @method array getMountOptions() 获取<p>存储挂载选项</p>
 * @method void setMountOptions(array $MountOptions) 设置<p>存储挂载选项</p>
 * @method CustomConfigurationDetail getCustomConfiguration() 获取<p>沙箱实例自定义配置</p>
 * @method void setCustomConfiguration(CustomConfigurationDetail $CustomConfiguration) 设置<p>沙箱实例自定义配置</p>
 */
class SandboxInstance extends AbstractModel
{
    /**
     * @var string <p>沙箱实例唯一标识符</p>
     */
    public $InstanceId;

    /**
     * @var string <p>所属沙箱工具 ID</p>
     */
    public $ToolId;

    /**
     * @var string <p>所属沙箱工具名称</p>
     */
    public $ToolName;

    /**
     * @var string <p>实例状态：STARTING（启动中）、RUNNING（运行中）、STOPPING（停止中）、STOPPED（已停止）、STOP_FAILED（停止失败）、FAILED（失败状态）</p>
     */
    public $Status;

    /**
     * @var integer <p>超时时间（秒），null 表示无超时设置</p>
     */
    public $TimeoutSeconds;

    /**
     * @var string <p>过期时间（ISO 8601 格式），null 表示无过期时间</p>
     */
    public $ExpiresAt;

    /**
     * @var string <p>停止原因：manual（手动）、timeout（超时）、error（错误）、system（系统），仅在状态为 STOPPED、STOP_FAILED 或 FAILED 时有值。当 provider 停止失败时，状态为 STOP_FAILED，原因为 error</p>
     */
    public $StopReason;

    /**
     * @var string <p>创建时间（ISO 8601 格式）</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间（ISO 8601 格式）</p>
     */
    public $UpdateTime;

    /**
     * @var array <p>存储挂载选项</p>
     */
    public $MountOptions;

    /**
     * @var CustomConfigurationDetail <p>沙箱实例自定义配置</p>
     */
    public $CustomConfiguration;

    /**
     * @param string $InstanceId <p>沙箱实例唯一标识符</p>
     * @param string $ToolId <p>所属沙箱工具 ID</p>
     * @param string $ToolName <p>所属沙箱工具名称</p>
     * @param string $Status <p>实例状态：STARTING（启动中）、RUNNING（运行中）、STOPPING（停止中）、STOPPED（已停止）、STOP_FAILED（停止失败）、FAILED（失败状态）</p>
     * @param integer $TimeoutSeconds <p>超时时间（秒），null 表示无超时设置</p>
     * @param string $ExpiresAt <p>过期时间（ISO 8601 格式），null 表示无过期时间</p>
     * @param string $StopReason <p>停止原因：manual（手动）、timeout（超时）、error（错误）、system（系统），仅在状态为 STOPPED、STOP_FAILED 或 FAILED 时有值。当 provider 停止失败时，状态为 STOP_FAILED，原因为 error</p>
     * @param string $CreateTime <p>创建时间（ISO 8601 格式）</p>
     * @param string $UpdateTime <p>更新时间（ISO 8601 格式）</p>
     * @param array $MountOptions <p>存储挂载选项</p>
     * @param CustomConfigurationDetail $CustomConfiguration <p>沙箱实例自定义配置</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }

        if (array_key_exists("ToolName",$param) and $param["ToolName"] !== null) {
            $this->ToolName = $param["ToolName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TimeoutSeconds",$param) and $param["TimeoutSeconds"] !== null) {
            $this->TimeoutSeconds = $param["TimeoutSeconds"];
        }

        if (array_key_exists("ExpiresAt",$param) and $param["ExpiresAt"] !== null) {
            $this->ExpiresAt = $param["ExpiresAt"];
        }

        if (array_key_exists("StopReason",$param) and $param["StopReason"] !== null) {
            $this->StopReason = $param["StopReason"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("MountOptions",$param) and $param["MountOptions"] !== null) {
            $this->MountOptions = [];
            foreach ($param["MountOptions"] as $key => $value){
                $obj = new MountOption();
                $obj->deserialize($value);
                array_push($this->MountOptions, $obj);
            }
        }

        if (array_key_exists("CustomConfiguration",$param) and $param["CustomConfiguration"] !== null) {
            $this->CustomConfiguration = new CustomConfigurationDetail();
            $this->CustomConfiguration->deserialize($param["CustomConfiguration"]);
        }
    }
}

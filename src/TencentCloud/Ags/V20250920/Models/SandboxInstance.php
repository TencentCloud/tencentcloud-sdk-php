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
 * @method string getInstanceId() 获取沙箱实例唯一标识符
 * @method void setInstanceId(string $InstanceId) 设置沙箱实例唯一标识符
 * @method string getToolId() 获取所属沙箱工具 ID
 * @method void setToolId(string $ToolId) 设置所属沙箱工具 ID
 * @method string getToolName() 获取所属沙箱工具名称
 * @method void setToolName(string $ToolName) 设置所属沙箱工具名称
 * @method string getStatus() 获取实例状态：STARTING（启动中）、RUNNING（运行中）、STOPPING（停止中）、STOPPED（已停止）、STOP_FAILED（停止失败）、FAILED（失败状态）
 * @method void setStatus(string $Status) 设置实例状态：STARTING（启动中）、RUNNING（运行中）、STOPPING（停止中）、STOPPED（已停止）、STOP_FAILED（停止失败）、FAILED（失败状态）
 * @method integer getTimeoutSeconds() 获取超时时间（秒），null 表示无超时设置
 * @method void setTimeoutSeconds(integer $TimeoutSeconds) 设置超时时间（秒），null 表示无超时设置
 * @method string getExpiresAt() 获取过期时间（ISO 8601 格式），null 表示无过期时间
 * @method void setExpiresAt(string $ExpiresAt) 设置过期时间（ISO 8601 格式），null 表示无过期时间
 * @method string getStopReason() 获取停止原因：manual（手动）、timeout（超时）、error（错误）、system（系统），仅在状态为 STOPPED、STOP_FAILED 或 FAILED 时有值。当 provider 停止失败时，状态为 STOP_FAILED，原因为 error
 * @method void setStopReason(string $StopReason) 设置停止原因：manual（手动）、timeout（超时）、error（错误）、system（系统），仅在状态为 STOPPED、STOP_FAILED 或 FAILED 时有值。当 provider 停止失败时，状态为 STOP_FAILED，原因为 error
 * @method string getCreateTime() 获取创建时间（ISO 8601 格式）
 * @method void setCreateTime(string $CreateTime) 设置创建时间（ISO 8601 格式）
 * @method string getUpdateTime() 获取更新时间（ISO 8601 格式）
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间（ISO 8601 格式）
 * @method array getMountOptions() 获取存储挂载选项
 * @method void setMountOptions(array $MountOptions) 设置存储挂载选项
 */
class SandboxInstance extends AbstractModel
{
    /**
     * @var string 沙箱实例唯一标识符
     */
    public $InstanceId;

    /**
     * @var string 所属沙箱工具 ID
     */
    public $ToolId;

    /**
     * @var string 所属沙箱工具名称
     */
    public $ToolName;

    /**
     * @var string 实例状态：STARTING（启动中）、RUNNING（运行中）、STOPPING（停止中）、STOPPED（已停止）、STOP_FAILED（停止失败）、FAILED（失败状态）
     */
    public $Status;

    /**
     * @var integer 超时时间（秒），null 表示无超时设置
     */
    public $TimeoutSeconds;

    /**
     * @var string 过期时间（ISO 8601 格式），null 表示无过期时间
     */
    public $ExpiresAt;

    /**
     * @var string 停止原因：manual（手动）、timeout（超时）、error（错误）、system（系统），仅在状态为 STOPPED、STOP_FAILED 或 FAILED 时有值。当 provider 停止失败时，状态为 STOP_FAILED，原因为 error
     */
    public $StopReason;

    /**
     * @var string 创建时间（ISO 8601 格式）
     */
    public $CreateTime;

    /**
     * @var string 更新时间（ISO 8601 格式）
     */
    public $UpdateTime;

    /**
     * @var array 存储挂载选项
     */
    public $MountOptions;

    /**
     * @param string $InstanceId 沙箱实例唯一标识符
     * @param string $ToolId 所属沙箱工具 ID
     * @param string $ToolName 所属沙箱工具名称
     * @param string $Status 实例状态：STARTING（启动中）、RUNNING（运行中）、STOPPING（停止中）、STOPPED（已停止）、STOP_FAILED（停止失败）、FAILED（失败状态）
     * @param integer $TimeoutSeconds 超时时间（秒），null 表示无超时设置
     * @param string $ExpiresAt 过期时间（ISO 8601 格式），null 表示无过期时间
     * @param string $StopReason 停止原因：manual（手动）、timeout（超时）、error（错误）、system（系统），仅在状态为 STOPPED、STOP_FAILED 或 FAILED 时有值。当 provider 停止失败时，状态为 STOP_FAILED，原因为 error
     * @param string $CreateTime 创建时间（ISO 8601 格式）
     * @param string $UpdateTime 更新时间（ISO 8601 格式）
     * @param array $MountOptions 存储挂载选项
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
    }
}

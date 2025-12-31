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
 * StartSandboxInstance请求参数结构体
 *
 * @method string getToolId() 获取沙箱工具 ID，与 ToolName 至少有一个要填
 * @method void setToolId(string $ToolId) 设置沙箱工具 ID，与 ToolName 至少有一个要填
 * @method string getToolName() 获取沙箱工具名称，与 ToolId 至少有一个要填
 * @method void setToolName(string $ToolName) 设置沙箱工具名称，与 ToolId 至少有一个要填
 * @method string getTimeout() 获取超时时间，超过这个时间就自动回收实例。支持格式：5m、300s、1h 等，默认 5m。最小 30s，最大 24h
 * @method void setTimeout(string $Timeout) 设置超时时间，超过这个时间就自动回收实例。支持格式：5m、300s、1h 等，默认 5m。最小 30s，最大 24h
 * @method string getClientToken() 获取幂等性 Token，长度不超过 64 字符
 * @method void setClientToken(string $ClientToken) 设置幂等性 Token，长度不超过 64 字符
 * @method array getMountOptions() 获取沙箱实例存储挂载配置
 * @method void setMountOptions(array $MountOptions) 设置沙箱实例存储挂载配置
 * @method CustomConfiguration getCustomConfiguration() 获取沙箱实例自定义配置
 * @method void setCustomConfiguration(CustomConfiguration $CustomConfiguration) 设置沙箱实例自定义配置
 */
class StartSandboxInstanceRequest extends AbstractModel
{
    /**
     * @var string 沙箱工具 ID，与 ToolName 至少有一个要填
     */
    public $ToolId;

    /**
     * @var string 沙箱工具名称，与 ToolId 至少有一个要填
     */
    public $ToolName;

    /**
     * @var string 超时时间，超过这个时间就自动回收实例。支持格式：5m、300s、1h 等，默认 5m。最小 30s，最大 24h
     */
    public $Timeout;

    /**
     * @var string 幂等性 Token，长度不超过 64 字符
     */
    public $ClientToken;

    /**
     * @var array 沙箱实例存储挂载配置
     */
    public $MountOptions;

    /**
     * @var CustomConfiguration 沙箱实例自定义配置
     */
    public $CustomConfiguration;

    /**
     * @param string $ToolId 沙箱工具 ID，与 ToolName 至少有一个要填
     * @param string $ToolName 沙箱工具名称，与 ToolId 至少有一个要填
     * @param string $Timeout 超时时间，超过这个时间就自动回收实例。支持格式：5m、300s、1h 等，默认 5m。最小 30s，最大 24h
     * @param string $ClientToken 幂等性 Token，长度不超过 64 字符
     * @param array $MountOptions 沙箱实例存储挂载配置
     * @param CustomConfiguration $CustomConfiguration 沙箱实例自定义配置
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
        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }

        if (array_key_exists("ToolName",$param) and $param["ToolName"] !== null) {
            $this->ToolName = $param["ToolName"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
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
            $this->CustomConfiguration = new CustomConfiguration();
            $this->CustomConfiguration->deserialize($param["CustomConfiguration"]);
        }
    }
}

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
 * @method string getToolId() 获取<p>沙箱工具 ID，与 ToolName 至少有一个要填</p>
 * @method void setToolId(string $ToolId) 设置<p>沙箱工具 ID，与 ToolName 至少有一个要填</p>
 * @method string getToolName() 获取<p>沙箱工具名称，与 ToolId 至少有一个要填</p>
 * @method void setToolName(string $ToolName) 设置<p>沙箱工具名称，与 ToolId 至少有一个要填</p>
 * @method string getTimeout() 获取<p>超时时间，超过这个时间就自动回收实例。支持格式：5m、300s、1h 等，默认 5m。最小 30s，最大 24h</p>
 * @method void setTimeout(string $Timeout) 设置<p>超时时间，超过这个时间就自动回收实例。支持格式：5m、300s、1h 等，默认 5m。最小 30s，最大 24h</p>
 * @method string getClientToken() 获取<p>幂等性 Token，长度不超过 64 字符</p>
 * @method void setClientToken(string $ClientToken) 设置<p>幂等性 Token，长度不超过 64 字符</p>
 * @method array getMountOptions() 获取<p>沙箱实例存储挂载配置</p>
 * @method void setMountOptions(array $MountOptions) 设置<p>沙箱实例存储挂载配置</p>
 * @method CustomConfiguration getCustomConfiguration() 获取<p>沙箱实例自定义配置</p>
 * @method void setCustomConfiguration(CustomConfiguration $CustomConfiguration) 设置<p>沙箱实例自定义配置</p>
 * @method string getAuthMode() 获取<p>沙箱访问认证模式</p><p>枚举值：</p><ul><li>DEFAULT： 跟随系统策略</li><li>TOKEN： Token认证</li><li>NONE： 免认证 </li></ul><p>默认值：DEFAULT</p>
 * @method void setAuthMode(string $AuthMode) 设置<p>沙箱访问认证模式</p><p>枚举值：</p><ul><li>DEFAULT： 跟随系统策略</li><li>TOKEN： Token认证</li><li>NONE： 免认证 </li></ul><p>默认值：DEFAULT</p>
 * @method array getMetadata() 获取<p>沙箱元数据</p>
 * @method void setMetadata(array $Metadata) 设置<p>沙箱元数据</p>
 */
class StartSandboxInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>沙箱工具 ID，与 ToolName 至少有一个要填</p>
     */
    public $ToolId;

    /**
     * @var string <p>沙箱工具名称，与 ToolId 至少有一个要填</p>
     */
    public $ToolName;

    /**
     * @var string <p>超时时间，超过这个时间就自动回收实例。支持格式：5m、300s、1h 等，默认 5m。最小 30s，最大 24h</p>
     */
    public $Timeout;

    /**
     * @var string <p>幂等性 Token，长度不超过 64 字符</p>
     */
    public $ClientToken;

    /**
     * @var array <p>沙箱实例存储挂载配置</p>
     */
    public $MountOptions;

    /**
     * @var CustomConfiguration <p>沙箱实例自定义配置</p>
     */
    public $CustomConfiguration;

    /**
     * @var string <p>沙箱访问认证模式</p><p>枚举值：</p><ul><li>DEFAULT： 跟随系统策略</li><li>TOKEN： Token认证</li><li>NONE： 免认证 </li></ul><p>默认值：DEFAULT</p>
     */
    public $AuthMode;

    /**
     * @var array <p>沙箱元数据</p>
     */
    public $Metadata;

    /**
     * @param string $ToolId <p>沙箱工具 ID，与 ToolName 至少有一个要填</p>
     * @param string $ToolName <p>沙箱工具名称，与 ToolId 至少有一个要填</p>
     * @param string $Timeout <p>超时时间，超过这个时间就自动回收实例。支持格式：5m、300s、1h 等，默认 5m。最小 30s，最大 24h</p>
     * @param string $ClientToken <p>幂等性 Token，长度不超过 64 字符</p>
     * @param array $MountOptions <p>沙箱实例存储挂载配置</p>
     * @param CustomConfiguration $CustomConfiguration <p>沙箱实例自定义配置</p>
     * @param string $AuthMode <p>沙箱访问认证模式</p><p>枚举值：</p><ul><li>DEFAULT： 跟随系统策略</li><li>TOKEN： Token认证</li><li>NONE： 免认证 </li></ul><p>默认值：DEFAULT</p>
     * @param array $Metadata <p>沙箱元数据</p>
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

        if (array_key_exists("AuthMode",$param) and $param["AuthMode"] !== null) {
            $this->AuthMode = $param["AuthMode"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = [];
            foreach ($param["Metadata"] as $key => $value){
                $obj = new MetadataVar();
                $obj->deserialize($value);
                array_push($this->Metadata, $obj);
            }
        }
    }
}

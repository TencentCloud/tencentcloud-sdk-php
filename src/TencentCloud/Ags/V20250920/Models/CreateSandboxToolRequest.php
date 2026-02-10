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
 * CreateSandboxTool请求参数结构体
 *
 * @method string getToolName() 获取沙箱工具名称，长度 1-50 字符，支持英文、数字、下划线和连接线。同一 AppId 下沙箱工具名称必须唯一
 * @method void setToolName(string $ToolName) 设置沙箱工具名称，长度 1-50 字符，支持英文、数字、下划线和连接线。同一 AppId 下沙箱工具名称必须唯一
 * @method string getToolType() 获取沙箱工具类型，目前支持：browser、code-interpreter、custom
 * @method void setToolType(string $ToolType) 设置沙箱工具类型，目前支持：browser、code-interpreter、custom
 * @method NetworkConfiguration getNetworkConfiguration() 获取网络配置
 * @method void setNetworkConfiguration(NetworkConfiguration $NetworkConfiguration) 设置网络配置
 * @method string getDescription() 获取沙箱工具描述，最大长度 200 字符
 * @method void setDescription(string $Description) 设置沙箱工具描述，最大长度 200 字符
 * @method string getDefaultTimeout() 获取默认超时时间，支持格式：5m、300s、1h 等，不指定则使用系统默认值（5 分钟）。最大 24 小时
 * @method void setDefaultTimeout(string $DefaultTimeout) 设置默认超时时间，支持格式：5m、300s、1h 等，不指定则使用系统默认值（5 分钟）。最大 24 小时
 * @method array getTags() 获取标签规格，为沙箱工具绑定标签，支持多种资源类型的标签绑定
 * @method void setTags(array $Tags) 设置标签规格，为沙箱工具绑定标签，支持多种资源类型的标签绑定
 * @method string getClientToken() 获取幂等性 Token，长度不超过 64 字符
 * @method void setClientToken(string $ClientToken) 设置幂等性 Token，长度不超过 64 字符
 * @method string getRoleArn() 获取角色ARN
 * @method void setRoleArn(string $RoleArn) 设置角色ARN
 * @method array getStorageMounts() 获取沙箱工具存储配置
 * @method void setStorageMounts(array $StorageMounts) 设置沙箱工具存储配置
 * @method CustomConfiguration getCustomConfiguration() 获取沙箱工具自定义配置
 * @method void setCustomConfiguration(CustomConfiguration $CustomConfiguration) 设置沙箱工具自定义配置
 * @method LogConfiguration getLogConfiguration() 获取沙箱工具日志推送相关配置
 * @method void setLogConfiguration(LogConfiguration $LogConfiguration) 设置沙箱工具日志推送相关配置
 */
class CreateSandboxToolRequest extends AbstractModel
{
    /**
     * @var string 沙箱工具名称，长度 1-50 字符，支持英文、数字、下划线和连接线。同一 AppId 下沙箱工具名称必须唯一
     */
    public $ToolName;

    /**
     * @var string 沙箱工具类型，目前支持：browser、code-interpreter、custom
     */
    public $ToolType;

    /**
     * @var NetworkConfiguration 网络配置
     */
    public $NetworkConfiguration;

    /**
     * @var string 沙箱工具描述，最大长度 200 字符
     */
    public $Description;

    /**
     * @var string 默认超时时间，支持格式：5m、300s、1h 等，不指定则使用系统默认值（5 分钟）。最大 24 小时
     */
    public $DefaultTimeout;

    /**
     * @var array 标签规格，为沙箱工具绑定标签，支持多种资源类型的标签绑定
     */
    public $Tags;

    /**
     * @var string 幂等性 Token，长度不超过 64 字符
     */
    public $ClientToken;

    /**
     * @var string 角色ARN
     */
    public $RoleArn;

    /**
     * @var array 沙箱工具存储配置
     */
    public $StorageMounts;

    /**
     * @var CustomConfiguration 沙箱工具自定义配置
     */
    public $CustomConfiguration;

    /**
     * @var LogConfiguration 沙箱工具日志推送相关配置
     */
    public $LogConfiguration;

    /**
     * @param string $ToolName 沙箱工具名称，长度 1-50 字符，支持英文、数字、下划线和连接线。同一 AppId 下沙箱工具名称必须唯一
     * @param string $ToolType 沙箱工具类型，目前支持：browser、code-interpreter、custom
     * @param NetworkConfiguration $NetworkConfiguration 网络配置
     * @param string $Description 沙箱工具描述，最大长度 200 字符
     * @param string $DefaultTimeout 默认超时时间，支持格式：5m、300s、1h 等，不指定则使用系统默认值（5 分钟）。最大 24 小时
     * @param array $Tags 标签规格，为沙箱工具绑定标签，支持多种资源类型的标签绑定
     * @param string $ClientToken 幂等性 Token，长度不超过 64 字符
     * @param string $RoleArn 角色ARN
     * @param array $StorageMounts 沙箱工具存储配置
     * @param CustomConfiguration $CustomConfiguration 沙箱工具自定义配置
     * @param LogConfiguration $LogConfiguration 沙箱工具日志推送相关配置
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
        if (array_key_exists("ToolName",$param) and $param["ToolName"] !== null) {
            $this->ToolName = $param["ToolName"];
        }

        if (array_key_exists("ToolType",$param) and $param["ToolType"] !== null) {
            $this->ToolType = $param["ToolType"];
        }

        if (array_key_exists("NetworkConfiguration",$param) and $param["NetworkConfiguration"] !== null) {
            $this->NetworkConfiguration = new NetworkConfiguration();
            $this->NetworkConfiguration->deserialize($param["NetworkConfiguration"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DefaultTimeout",$param) and $param["DefaultTimeout"] !== null) {
            $this->DefaultTimeout = $param["DefaultTimeout"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("StorageMounts",$param) and $param["StorageMounts"] !== null) {
            $this->StorageMounts = [];
            foreach ($param["StorageMounts"] as $key => $value){
                $obj = new StorageMount();
                $obj->deserialize($value);
                array_push($this->StorageMounts, $obj);
            }
        }

        if (array_key_exists("CustomConfiguration",$param) and $param["CustomConfiguration"] !== null) {
            $this->CustomConfiguration = new CustomConfiguration();
            $this->CustomConfiguration->deserialize($param["CustomConfiguration"]);
        }

        if (array_key_exists("LogConfiguration",$param) and $param["LogConfiguration"] !== null) {
            $this->LogConfiguration = new LogConfiguration();
            $this->LogConfiguration->deserialize($param["LogConfiguration"]);
        }
    }
}

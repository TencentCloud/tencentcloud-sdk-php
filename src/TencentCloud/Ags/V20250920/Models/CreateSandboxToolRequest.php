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
 * @method string getToolName() 获取<p>沙箱工具名称，长度 1-50 字符，支持英文、数字、下划线和连接线。同一 AppId 下沙箱工具名称必须唯一</p>
 * @method void setToolName(string $ToolName) 设置<p>沙箱工具名称，长度 1-50 字符，支持英文、数字、下划线和连接线。同一 AppId 下沙箱工具名称必须唯一</p>
 * @method string getToolType() 获取<p>沙箱工具类型，目前支持：browser、code-interpreter、custom</p>
 * @method void setToolType(string $ToolType) 设置<p>沙箱工具类型，目前支持：browser、code-interpreter、custom</p>
 * @method NetworkConfiguration getNetworkConfiguration() 获取<p>网络配置</p>
 * @method void setNetworkConfiguration(NetworkConfiguration $NetworkConfiguration) 设置<p>网络配置</p>
 * @method string getDescription() 获取<p>沙箱工具描述，最大长度 200 字符</p>
 * @method void setDescription(string $Description) 设置<p>沙箱工具描述，最大长度 200 字符</p>
 * @method string getDefaultTimeout() 获取<p>默认超时时间，支持格式：5m、300s、1h 等，不指定则使用系统默认值（5 分钟）。最大 24 小时</p>
 * @method void setDefaultTimeout(string $DefaultTimeout) 设置<p>默认超时时间，支持格式：5m、300s、1h 等，不指定则使用系统默认值（5 分钟）。最大 24 小时</p>
 * @method array getTags() 获取<p>标签规格，为沙箱工具绑定标签，支持多种资源类型的标签绑定</p>
 * @method void setTags(array $Tags) 设置<p>标签规格，为沙箱工具绑定标签，支持多种资源类型的标签绑定</p>
 * @method string getClientToken() 获取<p>幂等性 Token，长度不超过 64 字符</p>
 * @method void setClientToken(string $ClientToken) 设置<p>幂等性 Token，长度不超过 64 字符</p>
 * @method string getRoleArn() 获取<p>角色ARN</p>
 * @method void setRoleArn(string $RoleArn) 设置<p>角色ARN</p>
 * @method array getStorageMounts() 获取<p>沙箱工具存储配置</p>
 * @method void setStorageMounts(array $StorageMounts) 设置<p>沙箱工具存储配置</p>
 * @method CustomConfiguration getCustomConfiguration() 获取<p>沙箱工具自定义配置</p>
 * @method void setCustomConfiguration(CustomConfiguration $CustomConfiguration) 设置<p>沙箱工具自定义配置</p>
 * @method LogConfiguration getLogConfiguration() 获取<p>沙箱工具日志推送相关配置</p>
 * @method void setLogConfiguration(LogConfiguration $LogConfiguration) 设置<p>沙箱工具日志推送相关配置</p>
 * @method boolean getPersistent() 获取<p>常驻沙箱标识</p>
 * @method void setPersistent(boolean $Persistent) 设置<p>常驻沙箱标识</p>
 */
class CreateSandboxToolRequest extends AbstractModel
{
    /**
     * @var string <p>沙箱工具名称，长度 1-50 字符，支持英文、数字、下划线和连接线。同一 AppId 下沙箱工具名称必须唯一</p>
     */
    public $ToolName;

    /**
     * @var string <p>沙箱工具类型，目前支持：browser、code-interpreter、custom</p>
     */
    public $ToolType;

    /**
     * @var NetworkConfiguration <p>网络配置</p>
     */
    public $NetworkConfiguration;

    /**
     * @var string <p>沙箱工具描述，最大长度 200 字符</p>
     */
    public $Description;

    /**
     * @var string <p>默认超时时间，支持格式：5m、300s、1h 等，不指定则使用系统默认值（5 分钟）。最大 24 小时</p>
     */
    public $DefaultTimeout;

    /**
     * @var array <p>标签规格，为沙箱工具绑定标签，支持多种资源类型的标签绑定</p>
     */
    public $Tags;

    /**
     * @var string <p>幂等性 Token，长度不超过 64 字符</p>
     */
    public $ClientToken;

    /**
     * @var string <p>角色ARN</p>
     */
    public $RoleArn;

    /**
     * @var array <p>沙箱工具存储配置</p>
     */
    public $StorageMounts;

    /**
     * @var CustomConfiguration <p>沙箱工具自定义配置</p>
     */
    public $CustomConfiguration;

    /**
     * @var LogConfiguration <p>沙箱工具日志推送相关配置</p>
     */
    public $LogConfiguration;

    /**
     * @var boolean <p>常驻沙箱标识</p>
     */
    public $Persistent;

    /**
     * @param string $ToolName <p>沙箱工具名称，长度 1-50 字符，支持英文、数字、下划线和连接线。同一 AppId 下沙箱工具名称必须唯一</p>
     * @param string $ToolType <p>沙箱工具类型，目前支持：browser、code-interpreter、custom</p>
     * @param NetworkConfiguration $NetworkConfiguration <p>网络配置</p>
     * @param string $Description <p>沙箱工具描述，最大长度 200 字符</p>
     * @param string $DefaultTimeout <p>默认超时时间，支持格式：5m、300s、1h 等，不指定则使用系统默认值（5 分钟）。最大 24 小时</p>
     * @param array $Tags <p>标签规格，为沙箱工具绑定标签，支持多种资源类型的标签绑定</p>
     * @param string $ClientToken <p>幂等性 Token，长度不超过 64 字符</p>
     * @param string $RoleArn <p>角色ARN</p>
     * @param array $StorageMounts <p>沙箱工具存储配置</p>
     * @param CustomConfiguration $CustomConfiguration <p>沙箱工具自定义配置</p>
     * @param LogConfiguration $LogConfiguration <p>沙箱工具日志推送相关配置</p>
     * @param boolean $Persistent <p>常驻沙箱标识</p>
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

        if (array_key_exists("Persistent",$param) and $param["Persistent"] !== null) {
            $this->Persistent = $param["Persistent"];
        }
    }
}

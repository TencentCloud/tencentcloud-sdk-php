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
 * 沙箱工具结构体
 *
 * @method string getToolId() 获取沙箱工具唯一标识符
 * @method void setToolId(string $ToolId) 设置沙箱工具唯一标识符
 * @method string getToolName() 获取沙箱工具名称，长度 1-50 字符，支持中英文、数字、下划线。同一 AppId 下沙箱工具名称必须唯一
 * @method void setToolName(string $ToolName) 设置沙箱工具名称，长度 1-50 字符，支持中英文、数字、下划线。同一 AppId 下沙箱工具名称必须唯一
 * @method string getToolType() 获取沙箱工具类型，取值：browser（浏览器工具）、code-interpreter（代码解释器工具）、computer（计算机控制工具）、mobile（移动设备工具）
 * @method void setToolType(string $ToolType) 设置沙箱工具类型，取值：browser（浏览器工具）、code-interpreter（代码解释器工具）、computer（计算机控制工具）、mobile（移动设备工具）
 * @method string getStatus() 获取沙箱工具状态，取值：CREATING（创建中）、ACTIVE（可用）、DELETING（删除中）、FAILED（失败）
 * @method void setStatus(string $Status) 设置沙箱工具状态，取值：CREATING（创建中）、ACTIVE（可用）、DELETING（删除中）、FAILED（失败）
 * @method string getDescription() 获取沙箱工具描述信息，最大长度 200 字符
 * @method void setDescription(string $Description) 设置沙箱工具描述信息，最大长度 200 字符
 * @method integer getDefaultTimeoutSeconds() 获取默认超时时间，支持格式：5m、300s、1h 等，不指定则使用系统默认值（5 分钟）。最大 24 小时
 * @method void setDefaultTimeoutSeconds(integer $DefaultTimeoutSeconds) 设置默认超时时间，支持格式：5m、300s、1h 等，不指定则使用系统默认值（5 分钟）。最大 24 小时
 * @method NetworkConfiguration getNetworkConfiguration() 获取网络配置
 * @method void setNetworkConfiguration(NetworkConfiguration $NetworkConfiguration) 设置网络配置
 * @method array getTags() 获取标签规格，包含资源标签绑定关系。用于为沙箱工具绑定标签，支持多种资源类型的标签绑定
 * @method void setTags(array $Tags) 设置标签规格，包含资源标签绑定关系。用于为沙箱工具绑定标签，支持多种资源类型的标签绑定
 * @method string getCreateTime() 获取沙箱工具创建时间，格式：ISO8601
 * @method void setCreateTime(string $CreateTime) 设置沙箱工具创建时间，格式：ISO8601
 * @method string getUpdateTime() 获取沙箱工具更新时间，格式：ISO8601
 * @method void setUpdateTime(string $UpdateTime) 设置沙箱工具更新时间，格式：ISO8601
 * @method string getRoleArn() 获取沙箱工具绑定角色ARN
 * @method void setRoleArn(string $RoleArn) 设置沙箱工具绑定角色ARN
 * @method array getStorageMounts() 获取沙箱工具中实例存储挂载配置
 * @method void setStorageMounts(array $StorageMounts) 设置沙箱工具中实例存储挂载配置
 * @method CustomConfigurationDetail getCustomConfiguration() 获取沙箱工具自定义配置
 * @method void setCustomConfiguration(CustomConfigurationDetail $CustomConfiguration) 设置沙箱工具自定义配置
 * @method LogConfiguration getLogConfiguration() 获取沙箱工具日志推送相关配置
 * @method void setLogConfiguration(LogConfiguration $LogConfiguration) 设置沙箱工具日志推送相关配置
 */
class SandboxTool extends AbstractModel
{
    /**
     * @var string 沙箱工具唯一标识符
     */
    public $ToolId;

    /**
     * @var string 沙箱工具名称，长度 1-50 字符，支持中英文、数字、下划线。同一 AppId 下沙箱工具名称必须唯一
     */
    public $ToolName;

    /**
     * @var string 沙箱工具类型，取值：browser（浏览器工具）、code-interpreter（代码解释器工具）、computer（计算机控制工具）、mobile（移动设备工具）
     */
    public $ToolType;

    /**
     * @var string 沙箱工具状态，取值：CREATING（创建中）、ACTIVE（可用）、DELETING（删除中）、FAILED（失败）
     */
    public $Status;

    /**
     * @var string 沙箱工具描述信息，最大长度 200 字符
     */
    public $Description;

    /**
     * @var integer 默认超时时间，支持格式：5m、300s、1h 等，不指定则使用系统默认值（5 分钟）。最大 24 小时
     */
    public $DefaultTimeoutSeconds;

    /**
     * @var NetworkConfiguration 网络配置
     */
    public $NetworkConfiguration;

    /**
     * @var array 标签规格，包含资源标签绑定关系。用于为沙箱工具绑定标签，支持多种资源类型的标签绑定
     */
    public $Tags;

    /**
     * @var string 沙箱工具创建时间，格式：ISO8601
     */
    public $CreateTime;

    /**
     * @var string 沙箱工具更新时间，格式：ISO8601
     */
    public $UpdateTime;

    /**
     * @var string 沙箱工具绑定角色ARN
     */
    public $RoleArn;

    /**
     * @var array 沙箱工具中实例存储挂载配置
     */
    public $StorageMounts;

    /**
     * @var CustomConfigurationDetail 沙箱工具自定义配置
     */
    public $CustomConfiguration;

    /**
     * @var LogConfiguration 沙箱工具日志推送相关配置
     */
    public $LogConfiguration;

    /**
     * @param string $ToolId 沙箱工具唯一标识符
     * @param string $ToolName 沙箱工具名称，长度 1-50 字符，支持中英文、数字、下划线。同一 AppId 下沙箱工具名称必须唯一
     * @param string $ToolType 沙箱工具类型，取值：browser（浏览器工具）、code-interpreter（代码解释器工具）、computer（计算机控制工具）、mobile（移动设备工具）
     * @param string $Status 沙箱工具状态，取值：CREATING（创建中）、ACTIVE（可用）、DELETING（删除中）、FAILED（失败）
     * @param string $Description 沙箱工具描述信息，最大长度 200 字符
     * @param integer $DefaultTimeoutSeconds 默认超时时间，支持格式：5m、300s、1h 等，不指定则使用系统默认值（5 分钟）。最大 24 小时
     * @param NetworkConfiguration $NetworkConfiguration 网络配置
     * @param array $Tags 标签规格，包含资源标签绑定关系。用于为沙箱工具绑定标签，支持多种资源类型的标签绑定
     * @param string $CreateTime 沙箱工具创建时间，格式：ISO8601
     * @param string $UpdateTime 沙箱工具更新时间，格式：ISO8601
     * @param string $RoleArn 沙箱工具绑定角色ARN
     * @param array $StorageMounts 沙箱工具中实例存储挂载配置
     * @param CustomConfigurationDetail $CustomConfiguration 沙箱工具自定义配置
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
        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }

        if (array_key_exists("ToolName",$param) and $param["ToolName"] !== null) {
            $this->ToolName = $param["ToolName"];
        }

        if (array_key_exists("ToolType",$param) and $param["ToolType"] !== null) {
            $this->ToolType = $param["ToolType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DefaultTimeoutSeconds",$param) and $param["DefaultTimeoutSeconds"] !== null) {
            $this->DefaultTimeoutSeconds = $param["DefaultTimeoutSeconds"];
        }

        if (array_key_exists("NetworkConfiguration",$param) and $param["NetworkConfiguration"] !== null) {
            $this->NetworkConfiguration = new NetworkConfiguration();
            $this->NetworkConfiguration->deserialize($param["NetworkConfiguration"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
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
            $this->CustomConfiguration = new CustomConfigurationDetail();
            $this->CustomConfiguration->deserialize($param["CustomConfiguration"]);
        }

        if (array_key_exists("LogConfiguration",$param) and $param["LogConfiguration"] !== null) {
            $this->LogConfiguration = new LogConfiguration();
            $this->LogConfiguration->deserialize($param["LogConfiguration"]);
        }
    }
}

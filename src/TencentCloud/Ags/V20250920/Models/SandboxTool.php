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
 * @method string getToolId() 获取<p>沙箱工具唯一标识符</p>
 * @method void setToolId(string $ToolId) 设置<p>沙箱工具唯一标识符</p>
 * @method string getToolName() 获取<p>沙箱工具名称，长度 1-50 字符，支持中英文、数字、下划线。同一 AppId 下沙箱工具名称必须唯一</p>
 * @method void setToolName(string $ToolName) 设置<p>沙箱工具名称，长度 1-50 字符，支持中英文、数字、下划线。同一 AppId 下沙箱工具名称必须唯一</p>
 * @method string getToolType() 获取<p>沙箱工具类型，取值：browser（浏览器工具）、code-interpreter（代码解释器工具）、computer（计算机控制工具）、mobile（移动设备工具）</p>
 * @method void setToolType(string $ToolType) 设置<p>沙箱工具类型，取值：browser（浏览器工具）、code-interpreter（代码解释器工具）、computer（计算机控制工具）、mobile（移动设备工具）</p>
 * @method string getStatus() 获取<p>沙箱工具状态，取值：CREATING（创建中）、ACTIVE（可用）、DELETING（删除中）、FAILED（失败）</p>
 * @method void setStatus(string $Status) 设置<p>沙箱工具状态，取值：CREATING（创建中）、ACTIVE（可用）、DELETING（删除中）、FAILED（失败）</p>
 * @method string getDescription() 获取<p>沙箱工具描述信息，最大长度 200 字符</p>
 * @method void setDescription(string $Description) 设置<p>沙箱工具描述信息，最大长度 200 字符</p>
 * @method integer getDefaultTimeoutSeconds() 获取<p>默认超时时间，支持格式：5m、300s、1h 等，不指定则使用系统默认值（5 分钟）。最大 24 小时</p>
 * @method void setDefaultTimeoutSeconds(integer $DefaultTimeoutSeconds) 设置<p>默认超时时间，支持格式：5m、300s、1h 等，不指定则使用系统默认值（5 分钟）。最大 24 小时</p>
 * @method NetworkConfiguration getNetworkConfiguration() 获取<p>网络配置</p>
 * @method void setNetworkConfiguration(NetworkConfiguration $NetworkConfiguration) 设置<p>网络配置</p>
 * @method array getTags() 获取<p>标签规格，包含资源标签绑定关系。用于为沙箱工具绑定标签，支持多种资源类型的标签绑定</p>
 * @method void setTags(array $Tags) 设置<p>标签规格，包含资源标签绑定关系。用于为沙箱工具绑定标签，支持多种资源类型的标签绑定</p>
 * @method string getCreateTime() 获取<p>沙箱工具创建时间，格式：ISO8601</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>沙箱工具创建时间，格式：ISO8601</p>
 * @method string getUpdateTime() 获取<p>沙箱工具更新时间，格式：ISO8601</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>沙箱工具更新时间，格式：ISO8601</p>
 * @method string getRoleArn() 获取<p>沙箱工具绑定角色ARN</p>
 * @method void setRoleArn(string $RoleArn) 设置<p>沙箱工具绑定角色ARN</p>
 * @method array getStorageMounts() 获取<p>沙箱工具中实例存储挂载配置</p>
 * @method void setStorageMounts(array $StorageMounts) 设置<p>沙箱工具中实例存储挂载配置</p>
 * @method CustomConfigurationDetail getCustomConfiguration() 获取<p>沙箱工具自定义配置</p>
 * @method void setCustomConfiguration(CustomConfigurationDetail $CustomConfiguration) 设置<p>沙箱工具自定义配置</p>
 * @method LogConfiguration getLogConfiguration() 获取<p>沙箱工具日志推送相关配置</p>
 * @method void setLogConfiguration(LogConfiguration $LogConfiguration) 设置<p>沙箱工具日志推送相关配置</p>
 * @method string getStatusReason() 获取<p>用于说明沙箱工具处于该状态的原因</p>
 * @method void setStatusReason(string $StatusReason) 设置<p>用于说明沙箱工具处于该状态的原因</p>
 */
class SandboxTool extends AbstractModel
{
    /**
     * @var string <p>沙箱工具唯一标识符</p>
     */
    public $ToolId;

    /**
     * @var string <p>沙箱工具名称，长度 1-50 字符，支持中英文、数字、下划线。同一 AppId 下沙箱工具名称必须唯一</p>
     */
    public $ToolName;

    /**
     * @var string <p>沙箱工具类型，取值：browser（浏览器工具）、code-interpreter（代码解释器工具）、computer（计算机控制工具）、mobile（移动设备工具）</p>
     */
    public $ToolType;

    /**
     * @var string <p>沙箱工具状态，取值：CREATING（创建中）、ACTIVE（可用）、DELETING（删除中）、FAILED（失败）</p>
     */
    public $Status;

    /**
     * @var string <p>沙箱工具描述信息，最大长度 200 字符</p>
     */
    public $Description;

    /**
     * @var integer <p>默认超时时间，支持格式：5m、300s、1h 等，不指定则使用系统默认值（5 分钟）。最大 24 小时</p>
     */
    public $DefaultTimeoutSeconds;

    /**
     * @var NetworkConfiguration <p>网络配置</p>
     */
    public $NetworkConfiguration;

    /**
     * @var array <p>标签规格，包含资源标签绑定关系。用于为沙箱工具绑定标签，支持多种资源类型的标签绑定</p>
     */
    public $Tags;

    /**
     * @var string <p>沙箱工具创建时间，格式：ISO8601</p>
     */
    public $CreateTime;

    /**
     * @var string <p>沙箱工具更新时间，格式：ISO8601</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>沙箱工具绑定角色ARN</p>
     */
    public $RoleArn;

    /**
     * @var array <p>沙箱工具中实例存储挂载配置</p>
     */
    public $StorageMounts;

    /**
     * @var CustomConfigurationDetail <p>沙箱工具自定义配置</p>
     */
    public $CustomConfiguration;

    /**
     * @var LogConfiguration <p>沙箱工具日志推送相关配置</p>
     */
    public $LogConfiguration;

    /**
     * @var string <p>用于说明沙箱工具处于该状态的原因</p>
     */
    public $StatusReason;

    /**
     * @param string $ToolId <p>沙箱工具唯一标识符</p>
     * @param string $ToolName <p>沙箱工具名称，长度 1-50 字符，支持中英文、数字、下划线。同一 AppId 下沙箱工具名称必须唯一</p>
     * @param string $ToolType <p>沙箱工具类型，取值：browser（浏览器工具）、code-interpreter（代码解释器工具）、computer（计算机控制工具）、mobile（移动设备工具）</p>
     * @param string $Status <p>沙箱工具状态，取值：CREATING（创建中）、ACTIVE（可用）、DELETING（删除中）、FAILED（失败）</p>
     * @param string $Description <p>沙箱工具描述信息，最大长度 200 字符</p>
     * @param integer $DefaultTimeoutSeconds <p>默认超时时间，支持格式：5m、300s、1h 等，不指定则使用系统默认值（5 分钟）。最大 24 小时</p>
     * @param NetworkConfiguration $NetworkConfiguration <p>网络配置</p>
     * @param array $Tags <p>标签规格，包含资源标签绑定关系。用于为沙箱工具绑定标签，支持多种资源类型的标签绑定</p>
     * @param string $CreateTime <p>沙箱工具创建时间，格式：ISO8601</p>
     * @param string $UpdateTime <p>沙箱工具更新时间，格式：ISO8601</p>
     * @param string $RoleArn <p>沙箱工具绑定角色ARN</p>
     * @param array $StorageMounts <p>沙箱工具中实例存储挂载配置</p>
     * @param CustomConfigurationDetail $CustomConfiguration <p>沙箱工具自定义配置</p>
     * @param LogConfiguration $LogConfiguration <p>沙箱工具日志推送相关配置</p>
     * @param string $StatusReason <p>用于说明沙箱工具处于该状态的原因</p>
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

        if (array_key_exists("StatusReason",$param) and $param["StatusReason"] !== null) {
            $this->StatusReason = $param["StatusReason"];
        }
    }
}

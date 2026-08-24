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
 * Deployment 稳定访问入口定义
 *
 * @method string getDeploymentId() 获取<p>Deployment 稳定 ID，格式为 dpl- 加 8 位小写 base36 字符。</p>
 * @method void setDeploymentId(string $DeploymentId) 设置<p>Deployment 稳定 ID，格式为 dpl- 加 8 位小写 base36 字符。</p>
 * @method string getDeploymentName() 获取<p>唯一且创建后不可修改的名称，必须符合 DNS-1123 命名规范。</p>
 * @method void setDeploymentName(string $DeploymentName) 设置<p>唯一且创建后不可修改的名称，必须符合 DNS-1123 命名规范。</p>
 * @method string getToolId() 获取<p>用于关联 Sandbox Tool 的标识，格式为 sdt- 加 8 位小写 base36 字符。</p>
 * @method void setToolId(string $ToolId) 设置<p>用于关联 Sandbox Tool 的标识，格式为 sdt- 加 8 位小写 base36 字符。</p>
 * @method ScalingConfiguration getScalingConfiguration() 获取<p>完整的活跃容量配置。</p>
 * @method void setScalingConfiguration(ScalingConfiguration $ScalingConfiguration) 设置<p>完整的活跃容量配置。</p>
 * @method LifecycleConfiguration getLifecycleConfiguration() 获取<p>完整的空闲生命周期配置。</p>
 * @method void setLifecycleConfiguration(LifecycleConfiguration $LifecycleConfiguration) 设置<p>完整的空闲生命周期配置。</p>
 * @method AffinityConfiguration getAffinityConfiguration() 获取<p>可选 Affinity 配置；未启用时省略。</p>
 * @method void setAffinityConfiguration(AffinityConfiguration $AffinityConfiguration) 设置<p>可选 Affinity 配置；未启用时省略。</p>
 * @method string getStatus() 获取<p>Deployment 控制面状态。</p><p>枚举值：</p><ul><li>ACTIVE：入口可用。</li><li>DELETING：入口已关闭并正在异步删除。</li><li>DELETE_FAILED：最近一次异步删除失败，可再次调用 DeleteDeployment。</li></ul>
 * @method void setStatus(string $Status) 设置<p>Deployment 控制面状态。</p><p>枚举值：</p><ul><li>ACTIVE：入口可用。</li><li>DELETING：入口已关闭并正在异步删除。</li><li>DELETE_FAILED：最近一次异步删除失败，可再次调用 DeleteDeployment。</li></ul>
 * @method string getStatusReason() 获取<p>DELETE_FAILED 状态下 1..1024 个 UTF-8 字节的安全失败摘要，格式为 {Code}[.{SubCode}]: {Message}；其他状态省略。</p>
 * @method void setStatusReason(string $StatusReason) 设置<p>DELETE_FAILED 状态下 1..1024 个 UTF-8 字节的安全失败摘要，格式为 {Code}[.{SubCode}]: {Message}；其他状态省略。</p>
 * @method string getCreatedTime() 获取<p>创建时间，UTC、秒精度 RFC3339 格式。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间，UTC、秒精度 RFC3339 格式。</p>
 * @method string getUpdatedTime() 获取<p>最近一次成功公共配置写入或 Deployment 状态迁移时间，UTC、秒精度 RFC3339 格式。</p>
 * @method void setUpdatedTime(string $UpdatedTime) 设置<p>最近一次成功公共配置写入或 Deployment 状态迁移时间，UTC、秒精度 RFC3339 格式。</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 */
class Deployment extends AbstractModel
{
    /**
     * @var string <p>Deployment 稳定 ID，格式为 dpl- 加 8 位小写 base36 字符。</p>
     */
    public $DeploymentId;

    /**
     * @var string <p>唯一且创建后不可修改的名称，必须符合 DNS-1123 命名规范。</p>
     */
    public $DeploymentName;

    /**
     * @var string <p>用于关联 Sandbox Tool 的标识，格式为 sdt- 加 8 位小写 base36 字符。</p>
     */
    public $ToolId;

    /**
     * @var ScalingConfiguration <p>完整的活跃容量配置。</p>
     */
    public $ScalingConfiguration;

    /**
     * @var LifecycleConfiguration <p>完整的空闲生命周期配置。</p>
     */
    public $LifecycleConfiguration;

    /**
     * @var AffinityConfiguration <p>可选 Affinity 配置；未启用时省略。</p>
     */
    public $AffinityConfiguration;

    /**
     * @var string <p>Deployment 控制面状态。</p><p>枚举值：</p><ul><li>ACTIVE：入口可用。</li><li>DELETING：入口已关闭并正在异步删除。</li><li>DELETE_FAILED：最近一次异步删除失败，可再次调用 DeleteDeployment。</li></ul>
     */
    public $Status;

    /**
     * @var string <p>DELETE_FAILED 状态下 1..1024 个 UTF-8 字节的安全失败摘要，格式为 {Code}[.{SubCode}]: {Message}；其他状态省略。</p>
     */
    public $StatusReason;

    /**
     * @var string <p>创建时间，UTC、秒精度 RFC3339 格式。</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>最近一次成功公共配置写入或 Deployment 状态迁移时间，UTC、秒精度 RFC3339 格式。</p>
     */
    public $UpdatedTime;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @param string $DeploymentId <p>Deployment 稳定 ID，格式为 dpl- 加 8 位小写 base36 字符。</p>
     * @param string $DeploymentName <p>唯一且创建后不可修改的名称，必须符合 DNS-1123 命名规范。</p>
     * @param string $ToolId <p>用于关联 Sandbox Tool 的标识，格式为 sdt- 加 8 位小写 base36 字符。</p>
     * @param ScalingConfiguration $ScalingConfiguration <p>完整的活跃容量配置。</p>
     * @param LifecycleConfiguration $LifecycleConfiguration <p>完整的空闲生命周期配置。</p>
     * @param AffinityConfiguration $AffinityConfiguration <p>可选 Affinity 配置；未启用时省略。</p>
     * @param string $Status <p>Deployment 控制面状态。</p><p>枚举值：</p><ul><li>ACTIVE：入口可用。</li><li>DELETING：入口已关闭并正在异步删除。</li><li>DELETE_FAILED：最近一次异步删除失败，可再次调用 DeleteDeployment。</li></ul>
     * @param string $StatusReason <p>DELETE_FAILED 状态下 1..1024 个 UTF-8 字节的安全失败摘要，格式为 {Code}[.{SubCode}]: {Message}；其他状态省略。</p>
     * @param string $CreatedTime <p>创建时间，UTC、秒精度 RFC3339 格式。</p>
     * @param string $UpdatedTime <p>最近一次成功公共配置写入或 Deployment 状态迁移时间，UTC、秒精度 RFC3339 格式。</p>
     * @param array $Tags <p>标签</p>
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
        if (array_key_exists("DeploymentId",$param) and $param["DeploymentId"] !== null) {
            $this->DeploymentId = $param["DeploymentId"];
        }

        if (array_key_exists("DeploymentName",$param) and $param["DeploymentName"] !== null) {
            $this->DeploymentName = $param["DeploymentName"];
        }

        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }

        if (array_key_exists("ScalingConfiguration",$param) and $param["ScalingConfiguration"] !== null) {
            $this->ScalingConfiguration = new ScalingConfiguration();
            $this->ScalingConfiguration->deserialize($param["ScalingConfiguration"]);
        }

        if (array_key_exists("LifecycleConfiguration",$param) and $param["LifecycleConfiguration"] !== null) {
            $this->LifecycleConfiguration = new LifecycleConfiguration();
            $this->LifecycleConfiguration->deserialize($param["LifecycleConfiguration"]);
        }

        if (array_key_exists("AffinityConfiguration",$param) and $param["AffinityConfiguration"] !== null) {
            $this->AffinityConfiguration = new AffinityConfiguration();
            $this->AffinityConfiguration->deserialize($param["AffinityConfiguration"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusReason",$param) and $param["StatusReason"] !== null) {
            $this->StatusReason = $param["StatusReason"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}

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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateJobSpecPriority返回参数结构体
 *
 * @method string getId() 获取<p>配置ID</p>
 * @method void setId(string $Id) 设置<p>配置ID</p>
 * @method string getName() 获取<p>配置名称</p>
 * @method void setName(string $Name) 设置<p>配置名称</p>
 * @method string getDescription() 获取<p>配置描述</p>
 * @method void setDescription(string $Description) 设置<p>配置描述</p>
 * @method string getEntrypoint() 获取<p>入口命令</p>
 * @method void setEntrypoint(string $Entrypoint) 设置<p>入口命令</p>
 * @method string getImage() 获取<p>镜像地址</p>
 * @method void setImage(string $Image) 设置<p>镜像地址</p>
 * @method string getImagePullType() 获取<p>镜像拉取类型（Builtin: 内置, Custom: 自定义）</p>
 * @method void setImagePullType(string $ImagePullType) 设置<p>镜像拉取类型（Builtin: 内置, Custom: 自定义）</p>
 * @method string getImagePullPolicy() 获取<p>镜像拉取策略</p>
 * @method void setImagePullPolicy(string $ImagePullPolicy) 设置<p>镜像拉取策略</p>
 * @method string getResourceConfig() 获取<p>资源配置(JSON)</p>
 * @method void setResourceConfig(string $ResourceConfig) 设置<p>资源配置(JSON)</p>
 * @method string getRuntimeEnv() 获取<p>运行时环境配置(JSON)</p>
 * @method void setRuntimeEnv(string $RuntimeEnv) 设置<p>运行时环境配置(JSON)</p>
 * @method string getCatalog() 获取<p>存储卷和挂载卷配置(JSON)</p>
 * @method void setCatalog(string $Catalog) 设置<p>存储卷和挂载卷配置(JSON)</p>
 * @method string getAutoscalerOptions() 获取<p>弹性伸缩配置(JSON)</p>
 * @method void setAutoscalerOptions(string $AutoscalerOptions) 设置<p>弹性伸缩配置(JSON)</p>
 * @method string getResourceConfigId() 获取<p>资源配置ID</p>
 * @method void setResourceConfigId(string $ResourceConfigId) 设置<p>资源配置ID</p>
 * @method boolean getResourceConfigChanged() 获取<p>资源配置模板是否变更</p>
 * @method void setResourceConfigChanged(boolean $ResourceConfigChanged) 设置<p>资源配置模板是否变更</p>
 * @method string getResourcePartitionId() 获取<p>默认资源分区ID</p>
 * @method void setResourcePartitionId(string $ResourcePartitionId) 设置<p>默认资源分区ID</p>
 * @method string getResourcePartitionName() 获取<p>默认资源分区名称</p>
 * @method void setResourcePartitionName(string $ResourcePartitionName) 设置<p>默认资源分区名称</p>
 * @method string getQueue() 获取<p>默认队列名称</p>
 * @method void setQueue(string $Queue) 设置<p>默认队列名称</p>
 * @method string getGroupId() 获取<p>默认计算组 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置<p>默认计算组 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取<p>默认集群 ID（与 GroupId 互斥）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置<p>默认集群 ID（与 GroupId 互斥）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDispatchStrategy() 获取<p>集群分派策略（本期仅支持 RANDOM；NULL 时退化为依赖 ClusterGroup 配置兜底）</p>
 * @method void setDispatchStrategy(string $DispatchStrategy) 设置<p>集群分派策略（本期仅支持 RANDOM；NULL 时退化为依赖 ClusterGroup 配置兜底）</p>
 * @method string getJobPackage() 获取<p>作业包URL</p>
 * @method void setJobPackage(string $JobPackage) 设置<p>作业包URL</p>
 * @method string getJobPackageName() 获取<p>作业包名称</p>
 * @method void setJobPackageName(string $JobPackageName) 设置<p>作业包名称</p>
 * @method integer getPriority() 获取<p>作业优先级（1-9，数字越大优先级越高）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriority(integer $Priority) 设置<p>作业优先级（1-9，数字越大优先级越高）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取<p>应用ID</p>
 * @method void setAppId(integer $AppId) 设置<p>应用ID</p>
 * @method string getUin() 获取<p>创建者UIN</p>
 * @method void setUin(string $Uin) 设置<p>创建者UIN</p>
 * @method string getSubAccountUin() 获取<p>子用户UIN</p>
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>子用户UIN</p>
 * @method integer getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
 * @method integer getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p>
 * @method integer getJobInstanceCount() 获取<p>该配置下未进入终态的作业实例数量</p>
 * @method void setJobInstanceCount(integer $JobInstanceCount) 设置<p>该配置下未进入终态的作业实例数量</p>
 * @method boolean getHasRunningJobs() 获取<p>是否有运行中的作业实例</p>
 * @method void setHasRunningJobs(boolean $HasRunningJobs) 设置<p>是否有运行中的作业实例</p>
 * @method string getAdvancedOptions() 获取<p>高级参数，JSON 字符串（内容为 Key-Value 对象）</p>
 * @method void setAdvancedOptions(string $AdvancedOptions) 设置<p>高级参数，JSON 字符串（内容为 Key-Value 对象）</p>
 * @method array getTags() 获取<p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
 * @method void setTags(array $Tags) 设置<p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
 * @method string getJobPackageSource() 获取<p>作业包来源类型（Local: 本地上传, Cos: 用户自有 COS 桶地址）；缺时按 Local 处理</p>
 * @method void setJobPackageSource(string $JobPackageSource) 设置<p>作业包来源类型（Local: 本地上传, Cos: 用户自有 COS 桶地址）；缺时按 Local 处理</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class UpdateJobSpecPriorityResponse extends AbstractModel
{
    /**
     * @var string <p>配置ID</p>
     */
    public $Id;

    /**
     * @var string <p>配置名称</p>
     */
    public $Name;

    /**
     * @var string <p>配置描述</p>
     */
    public $Description;

    /**
     * @var string <p>入口命令</p>
     */
    public $Entrypoint;

    /**
     * @var string <p>镜像地址</p>
     */
    public $Image;

    /**
     * @var string <p>镜像拉取类型（Builtin: 内置, Custom: 自定义）</p>
     */
    public $ImagePullType;

    /**
     * @var string <p>镜像拉取策略</p>
     */
    public $ImagePullPolicy;

    /**
     * @var string <p>资源配置(JSON)</p>
     */
    public $ResourceConfig;

    /**
     * @var string <p>运行时环境配置(JSON)</p>
     */
    public $RuntimeEnv;

    /**
     * @var string <p>存储卷和挂载卷配置(JSON)</p>
     */
    public $Catalog;

    /**
     * @var string <p>弹性伸缩配置(JSON)</p>
     */
    public $AutoscalerOptions;

    /**
     * @var string <p>资源配置ID</p>
     */
    public $ResourceConfigId;

    /**
     * @var boolean <p>资源配置模板是否变更</p>
     */
    public $ResourceConfigChanged;

    /**
     * @var string <p>默认资源分区ID</p>
     */
    public $ResourcePartitionId;

    /**
     * @var string <p>默认资源分区名称</p>
     */
    public $ResourcePartitionName;

    /**
     * @var string <p>默认队列名称</p>
     */
    public $Queue;

    /**
     * @var string <p>默认计算组 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string <p>默认集群 ID（与 GroupId 互斥）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string <p>集群分派策略（本期仅支持 RANDOM；NULL 时退化为依赖 ClusterGroup 配置兜底）</p>
     */
    public $DispatchStrategy;

    /**
     * @var string <p>作业包URL</p>
     */
    public $JobPackage;

    /**
     * @var string <p>作业包名称</p>
     */
    public $JobPackageName;

    /**
     * @var integer <p>作业优先级（1-9，数字越大优先级越高）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Priority;

    /**
     * @var integer <p>应用ID</p>
     */
    public $AppId;

    /**
     * @var string <p>创建者UIN</p>
     */
    public $Uin;

    /**
     * @var string <p>子用户UIN</p>
     */
    public $SubAccountUin;

    /**
     * @var integer <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>该配置下未进入终态的作业实例数量</p>
     */
    public $JobInstanceCount;

    /**
     * @var boolean <p>是否有运行中的作业实例</p>
     */
    public $HasRunningJobs;

    /**
     * @var string <p>高级参数，JSON 字符串（内容为 Key-Value 对象）</p>
     */
    public $AdvancedOptions;

    /**
     * @var array <p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
     */
    public $Tags;

    /**
     * @var string <p>作业包来源类型（Local: 本地上传, Cos: 用户自有 COS 桶地址）；缺时按 Local 处理</p>
     */
    public $JobPackageSource;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Id <p>配置ID</p>
     * @param string $Name <p>配置名称</p>
     * @param string $Description <p>配置描述</p>
     * @param string $Entrypoint <p>入口命令</p>
     * @param string $Image <p>镜像地址</p>
     * @param string $ImagePullType <p>镜像拉取类型（Builtin: 内置, Custom: 自定义）</p>
     * @param string $ImagePullPolicy <p>镜像拉取策略</p>
     * @param string $ResourceConfig <p>资源配置(JSON)</p>
     * @param string $RuntimeEnv <p>运行时环境配置(JSON)</p>
     * @param string $Catalog <p>存储卷和挂载卷配置(JSON)</p>
     * @param string $AutoscalerOptions <p>弹性伸缩配置(JSON)</p>
     * @param string $ResourceConfigId <p>资源配置ID</p>
     * @param boolean $ResourceConfigChanged <p>资源配置模板是否变更</p>
     * @param string $ResourcePartitionId <p>默认资源分区ID</p>
     * @param string $ResourcePartitionName <p>默认资源分区名称</p>
     * @param string $Queue <p>默认队列名称</p>
     * @param string $GroupId <p>默认计算组 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId <p>默认集群 ID（与 GroupId 互斥）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DispatchStrategy <p>集群分派策略（本期仅支持 RANDOM；NULL 时退化为依赖 ClusterGroup 配置兜底）</p>
     * @param string $JobPackage <p>作业包URL</p>
     * @param string $JobPackageName <p>作业包名称</p>
     * @param integer $Priority <p>作业优先级（1-9，数字越大优先级越高）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId <p>应用ID</p>
     * @param string $Uin <p>创建者UIN</p>
     * @param string $SubAccountUin <p>子用户UIN</p>
     * @param integer $CreateTime <p>创建时间</p>
     * @param integer $UpdateTime <p>更新时间</p>
     * @param integer $JobInstanceCount <p>该配置下未进入终态的作业实例数量</p>
     * @param boolean $HasRunningJobs <p>是否有运行中的作业实例</p>
     * @param string $AdvancedOptions <p>高级参数，JSON 字符串（内容为 Key-Value 对象）</p>
     * @param array $Tags <p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
     * @param string $JobPackageSource <p>作业包来源类型（Local: 本地上传, Cos: 用户自有 COS 桶地址）；缺时按 Local 处理</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Entrypoint",$param) and $param["Entrypoint"] !== null) {
            $this->Entrypoint = $param["Entrypoint"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("ImagePullType",$param) and $param["ImagePullType"] !== null) {
            $this->ImagePullType = $param["ImagePullType"];
        }

        if (array_key_exists("ImagePullPolicy",$param) and $param["ImagePullPolicy"] !== null) {
            $this->ImagePullPolicy = $param["ImagePullPolicy"];
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = $param["ResourceConfig"];
        }

        if (array_key_exists("RuntimeEnv",$param) and $param["RuntimeEnv"] !== null) {
            $this->RuntimeEnv = $param["RuntimeEnv"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("AutoscalerOptions",$param) and $param["AutoscalerOptions"] !== null) {
            $this->AutoscalerOptions = $param["AutoscalerOptions"];
        }

        if (array_key_exists("ResourceConfigId",$param) and $param["ResourceConfigId"] !== null) {
            $this->ResourceConfigId = $param["ResourceConfigId"];
        }

        if (array_key_exists("ResourceConfigChanged",$param) and $param["ResourceConfigChanged"] !== null) {
            $this->ResourceConfigChanged = $param["ResourceConfigChanged"];
        }

        if (array_key_exists("ResourcePartitionId",$param) and $param["ResourcePartitionId"] !== null) {
            $this->ResourcePartitionId = $param["ResourcePartitionId"];
        }

        if (array_key_exists("ResourcePartitionName",$param) and $param["ResourcePartitionName"] !== null) {
            $this->ResourcePartitionName = $param["ResourcePartitionName"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DispatchStrategy",$param) and $param["DispatchStrategy"] !== null) {
            $this->DispatchStrategy = $param["DispatchStrategy"];
        }

        if (array_key_exists("JobPackage",$param) and $param["JobPackage"] !== null) {
            $this->JobPackage = $param["JobPackage"];
        }

        if (array_key_exists("JobPackageName",$param) and $param["JobPackageName"] !== null) {
            $this->JobPackageName = $param["JobPackageName"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("JobInstanceCount",$param) and $param["JobInstanceCount"] !== null) {
            $this->JobInstanceCount = $param["JobInstanceCount"];
        }

        if (array_key_exists("HasRunningJobs",$param) and $param["HasRunningJobs"] !== null) {
            $this->HasRunningJobs = $param["HasRunningJobs"];
        }

        if (array_key_exists("AdvancedOptions",$param) and $param["AdvancedOptions"] !== null) {
            $this->AdvancedOptions = $param["AdvancedOptions"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("JobPackageSource",$param) and $param["JobPackageSource"] !== null) {
            $this->JobPackageSource = $param["JobPackageSource"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

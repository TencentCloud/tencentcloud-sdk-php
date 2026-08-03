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
 * GetLabDetail返回参数结构体
 *
 * @method string getExampleId() 获取<p>案例模板ID（startMode=EXAMPLE 时使用）</p>
 * @method void setExampleId(string $ExampleId) 设置<p>案例模板ID（startMode=EXAMPLE 时使用）</p>
 * @method string getCodeArchiveUrl() 获取<p>代码包/工程归档地址</p>
 * @method void setCodeArchiveUrl(string $CodeArchiveUrl) 设置<p>代码包/工程归档地址</p>
 * @method array getServices() 获取<p>数据实验室服务入口（服务类型 -&gt; 访问地址）</p>
 * @method void setServices(array $Services) 设置<p>数据实验室服务入口（服务类型 -&gt; 访问地址）</p>
 * @method string getId() 获取<p>集群ID</p>
 * @method void setId(string $Id) 设置<p>集群ID</p>
 * @method string getType() 获取<p>资源类型：CLUSTER-普通集群；WORKSPACE-数据实验室（开发入口）</p>
 * @method void setType(string $Type) 设置<p>资源类型：CLUSTER-普通集群；WORKSPACE-数据实验室（开发入口）</p>
 * @method string getName() 获取<p>集群名称</p>
 * @method void setName(string $Name) 设置<p>集群名称</p>
 * @method string getDescription() 获取<p>集群描述</p>
 * @method void setDescription(string $Description) 设置<p>集群描述</p>
 * @method string getResourcePartitionId() 获取<p>所属资源分区ID</p>
 * @method void setResourcePartitionId(string $ResourcePartitionId) 设置<p>所属资源分区ID</p>
 * @method string getResourcePartitionName() 获取<p>默认资源分区名称</p>
 * @method void setResourcePartitionName(string $ResourcePartitionName) 设置<p>默认资源分区名称</p>
 * @method string getQueue() 获取<p>所属队列名称</p>
 * @method void setQueue(string $Queue) 设置<p>所属队列名称</p>
 * @method integer getAppId() 获取<p>应用ID</p>
 * @method void setAppId(integer $AppId) 设置<p>应用ID</p>
 * @method string getUin() 获取<p>用户UIN</p>
 * @method void setUin(string $Uin) 设置<p>用户UIN</p>
 * @method string getSubAccountUin() 获取<p>子用户UIN</p>
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>子用户UIN</p>
 * @method string getStatus() 获取<p>集群状态</p>
 * @method void setStatus(string $Status) 设置<p>集群状态</p>
 * @method string getStatusMessage() 获取<p>状态详情/错误信息</p>
 * @method void setStatusMessage(string $StatusMessage) 设置<p>状态详情/错误信息</p>
 * @method string getResourceConfig() 获取<p>资源配置(JSON)</p>
 * @method void setResourceConfig(string $ResourceConfig) 设置<p>资源配置(JSON)</p>
 * @method string getResourceConfigId() 获取<p>资源配置ID</p>
 * @method void setResourceConfigId(string $ResourceConfigId) 设置<p>资源配置ID</p>
 * @method string getImage() 获取<p>Ray 集群镜像地址（可选，OpenAPI/SDK 高级控制入口）。前端不再传递此字段；为空时后端按 R1（镜像表查询命中）→ R2（同值 fallback）顺序自动派生。非空时直接作为 Ray 集群镜像，跳过派生（EXPLICIT），且后端不校验其与 LabImage 的兼容性。</p>
 * @method void setImage(string $Image) 设置<p>Ray 集群镜像地址（可选，OpenAPI/SDK 高级控制入口）。前端不再传递此字段；为空时后端按 R1（镜像表查询命中）→ R2（同值 fallback）顺序自动派生。非空时直接作为 Ray 集群镜像，跳过派生（EXPLICIT），且后端不校验其与 LabImage 的兼容性。</p>
 * @method string getCatalog() 获取<p>存储卷和挂载卷配置(JSON)</p>
 * @method void setCatalog(string $Catalog) 设置<p>存储卷和挂载卷配置(JSON)</p>
 * @method string getHistoryUrl() 获取<p>Dashboard URL / 历史记录链接</p>
 * @method void setHistoryUrl(string $HistoryUrl) 设置<p>Dashboard URL / 历史记录链接</p>
 * @method string getImagePullPolicy() 获取<p>镜像拉取策略</p>
 * @method void setImagePullPolicy(string $ImagePullPolicy) 设置<p>镜像拉取策略</p>
 * @method string getAdvancedOptions() 获取<p>高级参数（扁平 Key-Value 的 JSON 字符串），Key 以 spec. 开头，按 RayCluster CRD 下钻；详见 ADVANCED_CLUSTER_OPTIONS_DESIGN.md</p>
 * @method void setAdvancedOptions(string $AdvancedOptions) 设置<p>高级参数（扁平 Key-Value 的 JSON 字符串），Key 以 spec. 开头，按 RayCluster CRD 下钻；详见 ADVANCED_CLUSTER_OPTIONS_DESIGN.md</p>
 * @method integer getPriority() 获取<p>优先级（1-9，数字越大优先级越高）</p>
 * @method void setPriority(integer $Priority) 设置<p>优先级（1-9，数字越大优先级越高）</p>
 * @method integer getStartTime() 获取<p>启动时间（最近一次启动）</p>
 * @method void setStartTime(integer $StartTime) 设置<p>启动时间（最近一次启动）</p>
 * @method integer getStopTime() 获取<p>停止时间（最近一次停止/休眠）</p>
 * @method void setStopTime(integer $StopTime) 设置<p>停止时间（最近一次停止/休眠）</p>
 * @method integer getDeleteTime() 获取<p>删除时间</p>
 * @method void setDeleteTime(integer $DeleteTime) 设置<p>删除时间</p>
 * @method array getTags() 获取<p>标签列表（TagKey-TagValue）</p>
 * @method void setTags(array $Tags) 设置<p>标签列表（TagKey-TagValue）</p>
 * @method PersistentWorkDir getPersistentWorkDir() 获取<p>持久化工作目录配置（可选）。启用后将 COS/CFS 指定路径挂载到容器内 /workspace 工作目录，与现有 Catalog 的卷配置互斥（不允许同时在 Catalog 中显式声明 MountPath=/workspace）。</p>
 * @method void setPersistentWorkDir(PersistentWorkDir $PersistentWorkDir) 设置<p>持久化工作目录配置（可选）。启用后将 COS/CFS 指定路径挂载到容器内 /workspace 工作目录，与现有 Catalog 的卷配置互斥（不允许同时在 Catalog 中显式声明 MountPath=/workspace）。</p>
 * @method boolean getEnableToken() 获取<p>是否开启token认证</p>
 * @method void setEnableToken(boolean $EnableToken) 设置<p>是否开启token认证</p>
 * @method string getLabImagePullType() 获取<p>Lab sidecar 镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
 * @method void setLabImagePullType(string $LabImagePullType) 设置<p>Lab sidecar 镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
 * @method string getSubAccountName() 获取<p>子用户名称（由聚合层通过 CAM 接口回填）</p>
 * @method void setSubAccountName(string $SubAccountName) 设置<p>子用户名称（由聚合层通过 CAM 接口回填）</p>
 * @method string getImagePullType() 获取<p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
 * @method void setImagePullType(string $ImagePullType) 设置<p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetLabDetailResponse extends AbstractModel
{
    /**
     * @var string <p>案例模板ID（startMode=EXAMPLE 时使用）</p>
     */
    public $ExampleId;

    /**
     * @var string <p>代码包/工程归档地址</p>
     */
    public $CodeArchiveUrl;

    /**
     * @var array <p>数据实验室服务入口（服务类型 -&gt; 访问地址）</p>
     */
    public $Services;

    /**
     * @var string <p>集群ID</p>
     */
    public $Id;

    /**
     * @var string <p>资源类型：CLUSTER-普通集群；WORKSPACE-数据实验室（开发入口）</p>
     */
    public $Type;

    /**
     * @var string <p>集群名称</p>
     */
    public $Name;

    /**
     * @var string <p>集群描述</p>
     */
    public $Description;

    /**
     * @var string <p>所属资源分区ID</p>
     */
    public $ResourcePartitionId;

    /**
     * @var string <p>默认资源分区名称</p>
     */
    public $ResourcePartitionName;

    /**
     * @var string <p>所属队列名称</p>
     */
    public $Queue;

    /**
     * @var integer <p>应用ID</p>
     */
    public $AppId;

    /**
     * @var string <p>用户UIN</p>
     */
    public $Uin;

    /**
     * @var string <p>子用户UIN</p>
     */
    public $SubAccountUin;

    /**
     * @var string <p>集群状态</p>
     */
    public $Status;

    /**
     * @var string <p>状态详情/错误信息</p>
     */
    public $StatusMessage;

    /**
     * @var string <p>资源配置(JSON)</p>
     */
    public $ResourceConfig;

    /**
     * @var string <p>资源配置ID</p>
     */
    public $ResourceConfigId;

    /**
     * @var string <p>Ray 集群镜像地址（可选，OpenAPI/SDK 高级控制入口）。前端不再传递此字段；为空时后端按 R1（镜像表查询命中）→ R2（同值 fallback）顺序自动派生。非空时直接作为 Ray 集群镜像，跳过派生（EXPLICIT），且后端不校验其与 LabImage 的兼容性。</p>
     */
    public $Image;

    /**
     * @var string <p>存储卷和挂载卷配置(JSON)</p>
     */
    public $Catalog;

    /**
     * @var string <p>Dashboard URL / 历史记录链接</p>
     */
    public $HistoryUrl;

    /**
     * @var string <p>镜像拉取策略</p>
     */
    public $ImagePullPolicy;

    /**
     * @var string <p>高级参数（扁平 Key-Value 的 JSON 字符串），Key 以 spec. 开头，按 RayCluster CRD 下钻；详见 ADVANCED_CLUSTER_OPTIONS_DESIGN.md</p>
     */
    public $AdvancedOptions;

    /**
     * @var integer <p>优先级（1-9，数字越大优先级越高）</p>
     */
    public $Priority;

    /**
     * @var integer <p>启动时间（最近一次启动）</p>
     */
    public $StartTime;

    /**
     * @var integer <p>停止时间（最近一次停止/休眠）</p>
     */
    public $StopTime;

    /**
     * @var integer <p>删除时间</p>
     */
    public $DeleteTime;

    /**
     * @var array <p>标签列表（TagKey-TagValue）</p>
     */
    public $Tags;

    /**
     * @var PersistentWorkDir <p>持久化工作目录配置（可选）。启用后将 COS/CFS 指定路径挂载到容器内 /workspace 工作目录，与现有 Catalog 的卷配置互斥（不允许同时在 Catalog 中显式声明 MountPath=/workspace）。</p>
     */
    public $PersistentWorkDir;

    /**
     * @var boolean <p>是否开启token认证</p>
     */
    public $EnableToken;

    /**
     * @var string <p>Lab sidecar 镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
     */
    public $LabImagePullType;

    /**
     * @var string <p>子用户名称（由聚合层通过 CAM 接口回填）</p>
     */
    public $SubAccountName;

    /**
     * @var string <p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
     */
    public $ImagePullType;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ExampleId <p>案例模板ID（startMode=EXAMPLE 时使用）</p>
     * @param string $CodeArchiveUrl <p>代码包/工程归档地址</p>
     * @param array $Services <p>数据实验室服务入口（服务类型 -&gt; 访问地址）</p>
     * @param string $Id <p>集群ID</p>
     * @param string $Type <p>资源类型：CLUSTER-普通集群；WORKSPACE-数据实验室（开发入口）</p>
     * @param string $Name <p>集群名称</p>
     * @param string $Description <p>集群描述</p>
     * @param string $ResourcePartitionId <p>所属资源分区ID</p>
     * @param string $ResourcePartitionName <p>默认资源分区名称</p>
     * @param string $Queue <p>所属队列名称</p>
     * @param integer $AppId <p>应用ID</p>
     * @param string $Uin <p>用户UIN</p>
     * @param string $SubAccountUin <p>子用户UIN</p>
     * @param string $Status <p>集群状态</p>
     * @param string $StatusMessage <p>状态详情/错误信息</p>
     * @param string $ResourceConfig <p>资源配置(JSON)</p>
     * @param string $ResourceConfigId <p>资源配置ID</p>
     * @param string $Image <p>Ray 集群镜像地址（可选，OpenAPI/SDK 高级控制入口）。前端不再传递此字段；为空时后端按 R1（镜像表查询命中）→ R2（同值 fallback）顺序自动派生。非空时直接作为 Ray 集群镜像，跳过派生（EXPLICIT），且后端不校验其与 LabImage 的兼容性。</p>
     * @param string $Catalog <p>存储卷和挂载卷配置(JSON)</p>
     * @param string $HistoryUrl <p>Dashboard URL / 历史记录链接</p>
     * @param string $ImagePullPolicy <p>镜像拉取策略</p>
     * @param string $AdvancedOptions <p>高级参数（扁平 Key-Value 的 JSON 字符串），Key 以 spec. 开头，按 RayCluster CRD 下钻；详见 ADVANCED_CLUSTER_OPTIONS_DESIGN.md</p>
     * @param integer $Priority <p>优先级（1-9，数字越大优先级越高）</p>
     * @param integer $StartTime <p>启动时间（最近一次启动）</p>
     * @param integer $StopTime <p>停止时间（最近一次停止/休眠）</p>
     * @param integer $DeleteTime <p>删除时间</p>
     * @param array $Tags <p>标签列表（TagKey-TagValue）</p>
     * @param PersistentWorkDir $PersistentWorkDir <p>持久化工作目录配置（可选）。启用后将 COS/CFS 指定路径挂载到容器内 /workspace 工作目录，与现有 Catalog 的卷配置互斥（不允许同时在 Catalog 中显式声明 MountPath=/workspace）。</p>
     * @param boolean $EnableToken <p>是否开启token认证</p>
     * @param string $LabImagePullType <p>Lab sidecar 镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
     * @param string $SubAccountName <p>子用户名称（由聚合层通过 CAM 接口回填）</p>
     * @param string $ImagePullType <p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
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
        if (array_key_exists("ExampleId",$param) and $param["ExampleId"] !== null) {
            $this->ExampleId = $param["ExampleId"];
        }

        if (array_key_exists("CodeArchiveUrl",$param) and $param["CodeArchiveUrl"] !== null) {
            $this->CodeArchiveUrl = $param["CodeArchiveUrl"];
        }

        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            $this->Services = [];
            foreach ($param["Services"] as $key => $value){
                $obj = new TypeKVPair();
                $obj->deserialize($value);
                array_push($this->Services, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusMessage",$param) and $param["StatusMessage"] !== null) {
            $this->StatusMessage = $param["StatusMessage"];
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = $param["ResourceConfig"];
        }

        if (array_key_exists("ResourceConfigId",$param) and $param["ResourceConfigId"] !== null) {
            $this->ResourceConfigId = $param["ResourceConfigId"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("HistoryUrl",$param) and $param["HistoryUrl"] !== null) {
            $this->HistoryUrl = $param["HistoryUrl"];
        }

        if (array_key_exists("ImagePullPolicy",$param) and $param["ImagePullPolicy"] !== null) {
            $this->ImagePullPolicy = $param["ImagePullPolicy"];
        }

        if (array_key_exists("AdvancedOptions",$param) and $param["AdvancedOptions"] !== null) {
            $this->AdvancedOptions = $param["AdvancedOptions"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("StopTime",$param) and $param["StopTime"] !== null) {
            $this->StopTime = $param["StopTime"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("PersistentWorkDir",$param) and $param["PersistentWorkDir"] !== null) {
            $this->PersistentWorkDir = new PersistentWorkDir();
            $this->PersistentWorkDir->deserialize($param["PersistentWorkDir"]);
        }

        if (array_key_exists("EnableToken",$param) and $param["EnableToken"] !== null) {
            $this->EnableToken = $param["EnableToken"];
        }

        if (array_key_exists("LabImagePullType",$param) and $param["LabImagePullType"] !== null) {
            $this->LabImagePullType = $param["LabImagePullType"];
        }

        if (array_key_exists("SubAccountName",$param) and $param["SubAccountName"] !== null) {
            $this->SubAccountName = $param["SubAccountName"];
        }

        if (array_key_exists("ImagePullType",$param) and $param["ImagePullType"] !== null) {
            $this->ImagePullType = $param["ImagePullType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

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
 * CreateLab请求参数结构体
 *
 * @method string getName() 获取<p>数据实验室名称</p>
 * @method void setName(string $Name) 设置<p>数据实验室名称</p>
 * @method string getLabImage() 获取<p>Lab 镜像地址（必填，用于开发工具如 Jupyter/VSCode/WebShell）。前端在&quot;内置 / 自定义&quot;两态中选择此值；当 Image 字段未显式传入时，后端会基于该字段按 R1（镜像表命中）/R2（同值 fallback）派生 Ray 集群镜像。</p>
 * @method void setLabImage(string $LabImage) 设置<p>Lab 镜像地址（必填，用于开发工具如 Jupyter/VSCode/WebShell）。前端在&quot;内置 / 自定义&quot;两态中选择此值；当 Image 字段未显式传入时，后端会基于该字段按 R1（镜像表命中）/R2（同值 fallback）派生 Ray 集群镜像。</p>
 * @method string getResourcePartitionId() 获取<p>资源分区ID</p>
 * @method void setResourcePartitionId(string $ResourcePartitionId) 设置<p>资源分区ID</p>
 * @method string getQueue() 获取<p>队列名称</p>
 * @method void setQueue(string $Queue) 设置<p>队列名称</p>
 * @method string getDescription() 获取<p>数据实验室描述</p>
 * @method void setDescription(string $Description) 设置<p>数据实验室描述</p>
 * @method string getImage() 获取<p>Ray 集群镜像地址（可选，OpenAPI/SDK 高级控制入口）。前端不再传递此字段；为空时后端按 R1（镜像表查询命中）→ R2（同值 fallback）顺序自动派生。非空时直接作为 Ray 集群镜像，跳过派生（EXPLICIT），且后端不校验其与 LabImage 的兼容性。</p>
 * @method void setImage(string $Image) 设置<p>Ray 集群镜像地址（可选，OpenAPI/SDK 高级控制入口）。前端不再传递此字段；为空时后端按 R1（镜像表查询命中）→ R2（同值 fallback）顺序自动派生。非空时直接作为 Ray 集群镜像，跳过派生（EXPLICIT），且后端不校验其与 LabImage 的兼容性。</p>
 * @method string getImagePullPolicy() 获取<p>镜像拉取策略（Always, IfNotPresent, Never）</p>
 * @method void setImagePullPolicy(string $ImagePullPolicy) 设置<p>镜像拉取策略（Always, IfNotPresent, Never）</p>
 * @method string getResourceConfig() 获取<p>资源配置</p>
 * @method void setResourceConfig(string $ResourceConfig) 设置<p>资源配置</p>
 * @method string getResourceConfigId() 获取<p>资源配置ID</p>
 * @method void setResourceConfigId(string $ResourceConfigId) 设置<p>资源配置ID</p>
 * @method string getCatalog() 获取<p>存储卷和挂载卷配置</p>
 * @method void setCatalog(string $Catalog) 设置<p>存储卷和挂载卷配置</p>
 * @method string getGroupId() 获取<p>计算组 ID</p>
 * @method void setGroupId(string $GroupId) 设置<p>计算组 ID</p>
 * @method array getServiceTypes() 获取<p>服务类型列表(VSCODE, JUPYTER, WEBSHELL)，不填则使用默认配置</p>
 * @method void setServiceTypes(array $ServiceTypes) 设置<p>服务类型列表(VSCODE, JUPYTER, WEBSHELL)，不填则使用默认配置</p>
 * @method string getExampleId() 获取<p>案例ID，当 startMode=EXAMPLE 时必填</p>
 * @method void setExampleId(string $ExampleId) 设置<p>案例ID，当 startMode=EXAMPLE 时必填</p>
 * @method string getCodeArchiveUrl() 获取<p>案例代码包地址，当 startMode=EXAMPLE 时填写</p>
 * @method void setCodeArchiveUrl(string $CodeArchiveUrl) 设置<p>案例代码包地址，当 startMode=EXAMPLE 时填写</p>
 * @method string getLabImagePullPolicy() 获取<p>Lab sidecar 镜像拉取策略（Always, IfNotPresent, Never）</p>
 * @method void setLabImagePullPolicy(string $LabImagePullPolicy) 设置<p>Lab sidecar 镜像拉取策略（Always, IfNotPresent, Never）</p>
 * @method string getAdvancedOptions() 获取<p>高级参数（扁平 Key-Value 的 JSON 字符串），Key 以 spec. 开头，按 RayCluster CRD 下钻；详见 ADVANCED_CLUSTER_OPTIONS_DESIGN.md</p>
 * @method void setAdvancedOptions(string $AdvancedOptions) 设置<p>高级参数（扁平 Key-Value 的 JSON 字符串），Key 以 spec. 开头，按 RayCluster CRD 下钻；详见 ADVANCED_CLUSTER_OPTIONS_DESIGN.md</p>
 * @method integer getPriority() 获取<p>优先级（1-9，数字越大优先级越高）</p>
 * @method void setPriority(integer $Priority) 设置<p>优先级（1-9，数字越大优先级越高）</p>
 * @method array getTags() 获取<p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
 * @method void setTags(array $Tags) 设置<p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
 * @method PersistentWorkDir getPersistentWorkDir() 获取<p>持久化工作目录配置（可选）。启用后将 COS/CFS 指定路径挂载到容器内 /workspace 工作目录，与现有 Catalog 的卷配置互斥（不允许同时在 Catalog 中显式声明 MountPath=/workspace）。</p>
 * @method void setPersistentWorkDir(PersistentWorkDir $PersistentWorkDir) 设置<p>持久化工作目录配置（可选）。启用后将 COS/CFS 指定路径挂载到容器内 /workspace 工作目录，与现有 Catalog 的卷配置互斥（不允许同时在 Catalog 中显式声明 MountPath=/workspace）。</p>
 * @method boolean getEnableToken() 获取<p>是否开启token认证</p>
 * @method void setEnableToken(boolean $EnableToken) 设置<p>是否开启token认证</p>
 * @method string getImagePullType() 获取<p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
 * @method void setImagePullType(string $ImagePullType) 设置<p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
 * @method string getLabImagePullType() 获取<p>Lab sidecar 镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
 * @method void setLabImagePullType(string $LabImagePullType) 设置<p>Lab sidecar 镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
 */
class CreateLabRequest extends AbstractModel
{
    /**
     * @var string <p>数据实验室名称</p>
     */
    public $Name;

    /**
     * @var string <p>Lab 镜像地址（必填，用于开发工具如 Jupyter/VSCode/WebShell）。前端在&quot;内置 / 自定义&quot;两态中选择此值；当 Image 字段未显式传入时，后端会基于该字段按 R1（镜像表命中）/R2（同值 fallback）派生 Ray 集群镜像。</p>
     */
    public $LabImage;

    /**
     * @var string <p>资源分区ID</p>
     */
    public $ResourcePartitionId;

    /**
     * @var string <p>队列名称</p>
     */
    public $Queue;

    /**
     * @var string <p>数据实验室描述</p>
     */
    public $Description;

    /**
     * @var string <p>Ray 集群镜像地址（可选，OpenAPI/SDK 高级控制入口）。前端不再传递此字段；为空时后端按 R1（镜像表查询命中）→ R2（同值 fallback）顺序自动派生。非空时直接作为 Ray 集群镜像，跳过派生（EXPLICIT），且后端不校验其与 LabImage 的兼容性。</p>
     */
    public $Image;

    /**
     * @var string <p>镜像拉取策略（Always, IfNotPresent, Never）</p>
     */
    public $ImagePullPolicy;

    /**
     * @var string <p>资源配置</p>
     */
    public $ResourceConfig;

    /**
     * @var string <p>资源配置ID</p>
     */
    public $ResourceConfigId;

    /**
     * @var string <p>存储卷和挂载卷配置</p>
     */
    public $Catalog;

    /**
     * @var string <p>计算组 ID</p>
     */
    public $GroupId;

    /**
     * @var array <p>服务类型列表(VSCODE, JUPYTER, WEBSHELL)，不填则使用默认配置</p>
     */
    public $ServiceTypes;

    /**
     * @var string <p>案例ID，当 startMode=EXAMPLE 时必填</p>
     */
    public $ExampleId;

    /**
     * @var string <p>案例代码包地址，当 startMode=EXAMPLE 时填写</p>
     */
    public $CodeArchiveUrl;

    /**
     * @var string <p>Lab sidecar 镜像拉取策略（Always, IfNotPresent, Never）</p>
     */
    public $LabImagePullPolicy;

    /**
     * @var string <p>高级参数（扁平 Key-Value 的 JSON 字符串），Key 以 spec. 开头，按 RayCluster CRD 下钻；详见 ADVANCED_CLUSTER_OPTIONS_DESIGN.md</p>
     */
    public $AdvancedOptions;

    /**
     * @var integer <p>优先级（1-9，数字越大优先级越高）</p>
     */
    public $Priority;

    /**
     * @var array <p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
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
     * @var string <p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
     */
    public $ImagePullType;

    /**
     * @var string <p>Lab sidecar 镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
     */
    public $LabImagePullType;

    /**
     * @param string $Name <p>数据实验室名称</p>
     * @param string $LabImage <p>Lab 镜像地址（必填，用于开发工具如 Jupyter/VSCode/WebShell）。前端在&quot;内置 / 自定义&quot;两态中选择此值；当 Image 字段未显式传入时，后端会基于该字段按 R1（镜像表命中）/R2（同值 fallback）派生 Ray 集群镜像。</p>
     * @param string $ResourcePartitionId <p>资源分区ID</p>
     * @param string $Queue <p>队列名称</p>
     * @param string $Description <p>数据实验室描述</p>
     * @param string $Image <p>Ray 集群镜像地址（可选，OpenAPI/SDK 高级控制入口）。前端不再传递此字段；为空时后端按 R1（镜像表查询命中）→ R2（同值 fallback）顺序自动派生。非空时直接作为 Ray 集群镜像，跳过派生（EXPLICIT），且后端不校验其与 LabImage 的兼容性。</p>
     * @param string $ImagePullPolicy <p>镜像拉取策略（Always, IfNotPresent, Never）</p>
     * @param string $ResourceConfig <p>资源配置</p>
     * @param string $ResourceConfigId <p>资源配置ID</p>
     * @param string $Catalog <p>存储卷和挂载卷配置</p>
     * @param string $GroupId <p>计算组 ID</p>
     * @param array $ServiceTypes <p>服务类型列表(VSCODE, JUPYTER, WEBSHELL)，不填则使用默认配置</p>
     * @param string $ExampleId <p>案例ID，当 startMode=EXAMPLE 时必填</p>
     * @param string $CodeArchiveUrl <p>案例代码包地址，当 startMode=EXAMPLE 时填写</p>
     * @param string $LabImagePullPolicy <p>Lab sidecar 镜像拉取策略（Always, IfNotPresent, Never）</p>
     * @param string $AdvancedOptions <p>高级参数（扁平 Key-Value 的 JSON 字符串），Key 以 spec. 开头，按 RayCluster CRD 下钻；详见 ADVANCED_CLUSTER_OPTIONS_DESIGN.md</p>
     * @param integer $Priority <p>优先级（1-9，数字越大优先级越高）</p>
     * @param array $Tags <p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
     * @param PersistentWorkDir $PersistentWorkDir <p>持久化工作目录配置（可选）。启用后将 COS/CFS 指定路径挂载到容器内 /workspace 工作目录，与现有 Catalog 的卷配置互斥（不允许同时在 Catalog 中显式声明 MountPath=/workspace）。</p>
     * @param boolean $EnableToken <p>是否开启token认证</p>
     * @param string $ImagePullType <p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
     * @param string $LabImagePullType <p>Lab sidecar 镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LabImage",$param) and $param["LabImage"] !== null) {
            $this->LabImage = $param["LabImage"];
        }

        if (array_key_exists("ResourcePartitionId",$param) and $param["ResourcePartitionId"] !== null) {
            $this->ResourcePartitionId = $param["ResourcePartitionId"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("ImagePullPolicy",$param) and $param["ImagePullPolicy"] !== null) {
            $this->ImagePullPolicy = $param["ImagePullPolicy"];
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = $param["ResourceConfig"];
        }

        if (array_key_exists("ResourceConfigId",$param) and $param["ResourceConfigId"] !== null) {
            $this->ResourceConfigId = $param["ResourceConfigId"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ServiceTypes",$param) and $param["ServiceTypes"] !== null) {
            $this->ServiceTypes = $param["ServiceTypes"];
        }

        if (array_key_exists("ExampleId",$param) and $param["ExampleId"] !== null) {
            $this->ExampleId = $param["ExampleId"];
        }

        if (array_key_exists("CodeArchiveUrl",$param) and $param["CodeArchiveUrl"] !== null) {
            $this->CodeArchiveUrl = $param["CodeArchiveUrl"];
        }

        if (array_key_exists("LabImagePullPolicy",$param) and $param["LabImagePullPolicy"] !== null) {
            $this->LabImagePullPolicy = $param["LabImagePullPolicy"];
        }

        if (array_key_exists("AdvancedOptions",$param) and $param["AdvancedOptions"] !== null) {
            $this->AdvancedOptions = $param["AdvancedOptions"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
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

        if (array_key_exists("ImagePullType",$param) and $param["ImagePullType"] !== null) {
            $this->ImagePullType = $param["ImagePullType"];
        }

        if (array_key_exists("LabImagePullType",$param) and $param["LabImagePullType"] !== null) {
            $this->LabImagePullType = $param["LabImagePullType"];
        }
    }
}

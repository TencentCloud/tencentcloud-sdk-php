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
 * 训练作业配置
 *
 * @method string getSpecId() 获取<p>训练作业配置 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecId(string $SpecId) 设置<p>训练作业配置 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecName() 获取<p>训练作业配置名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecName(string $SpecName) 设置<p>训练作业配置名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>配置描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>配置描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKind() 获取<p>提交模式（LAB / CUSTOM_CODE / POST_TRAINING / UNKNOWN）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKind(string $Kind) 设置<p>提交模式（LAB / CUSTOM_CODE / POST_TRAINING / UNKNOWN）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEntrypoint() 获取<p>启动命令</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntrypoint(string $Entrypoint) 设置<p>启动命令</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImage() 获取<p>镜像地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImage(string $Image) 设置<p>镜像地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImagePullType() 获取<p>镜像拉取类型（BuiltIn / Custom / CustomCcr）</p>
 * @method void setImagePullType(string $ImagePullType) 设置<p>镜像拉取类型（BuiltIn / Custom / CustomCcr）</p>
 * @method string getImagePullPolicy() 获取<p>镜像拉取策略（Always / IfNotPresent / Never）</p>
 * @method void setImagePullPolicy(string $ImagePullPolicy) 设置<p>镜像拉取策略（Always / IfNotPresent / Never）</p>
 * @method string getCodePackageUrl() 获取<p>代码包 COS URL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodePackageUrl(string $CodePackageUrl) 设置<p>代码包 COS URL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuntimeEnv() 获取<p>Ray runtime_env 配置 JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntimeEnv(string $RuntimeEnv) 设置<p>Ray runtime_env 配置 JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceConfigId() 获取<p>资源配置模板 ID</p>
 * @method void setResourceConfigId(string $ResourceConfigId) 设置<p>资源配置模板 ID</p>
 * @method string getResourceConfig() 获取<p>资源配置 JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceConfig(string $ResourceConfig) 设置<p>资源配置 JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourcePartitionId() 获取<p>资源分区 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourcePartitionId(string $ResourcePartitionId) 设置<p>资源分区 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourcePartitionName() 获取<p>资源分区名称</p>
 * @method void setResourcePartitionName(string $ResourcePartitionName) 设置<p>资源分区名称</p>
 * @method string getQueue() 获取<p>队列名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueue(string $Queue) 设置<p>队列名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CheckpointMountInfo getCheckpointMountInfo() 获取<p>Checkpoint 挂载摘要</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckpointMountInfo(CheckpointMountInfo $CheckpointMountInfo) 设置<p>Checkpoint 挂载摘要</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalog() 获取<p>存储卷挂载配置 JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalog(string $Catalog) 设置<p>存储卷挂载配置 JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取<p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取<p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceCount() 获取<p>关联实例总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCount(integer $InstanceCount) 设置<p>关联实例总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasRunningInstances() 获取<p>是否存在运行中实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasRunningInstances(boolean $HasRunningInstances) 设置<p>是否存在运行中实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPriority() 获取<p>作业优先级（1-9，数字越大优先级越高）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriority(integer $Priority) 设置<p>作业优先级（1-9，数字越大优先级越高）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMlFlowConfig() 获取<p>提交时 MLflow 配置 JSON（含 MlFlowMode / MlFlowTrackingUri 等）</p>
 * @method void setMlFlowConfig(string $MlFlowConfig) 设置<p>提交时 MLflow 配置 JSON（含 MlFlowMode / MlFlowTrackingUri 等）</p>
 * @method string getOutputModelName() 获取<p>产出模型名称（用于后续模型注册）</p>
 * @method void setOutputModelName(string $OutputModelName) 设置<p>产出模型名称（用于后续模型注册）</p>
 * @method string getMode() 获取<p>训练模式：sft / dpo / cpt / grpo（仅 POST_TRAINING 有值）</p>
 * @method void setMode(string $Mode) 设置<p>训练模式：sft / dpo / cpt / grpo（仅 POST_TRAINING 有值）</p>
 * @method string getBaseModelUid() 获取<p>基础模型 modelUid（仅 POST_TRAINING 有值）</p>
 * @method void setBaseModelUid(string $BaseModelUid) 设置<p>基础模型 modelUid（仅 POST_TRAINING 有值）</p>
 * @method string getBaseModelName() 获取<p>基础模型名称（仅 POST_TRAINING 有值）</p>
 * @method void setBaseModelName(string $BaseModelName) 设置<p>基础模型名称（仅 POST_TRAINING 有值）</p>
 * @method array getDatasets() 获取<p>提交时的数据集挂载列表（List&lt;DatasetMount&gt;，仅详情返回）</p>
 * @method void setDatasets(array $Datasets) 设置<p>提交时的数据集挂载列表（List&lt;DatasetMount&gt;，仅详情返回）</p>
 * @method string getLastInstanceStatus() 获取<p>提交时的 Checkpoint 产出配置（仅详情返回）</p>
 * @method void setLastInstanceStatus(string $LastInstanceStatus) 设置<p>提交时的 Checkpoint 产出配置（仅详情返回）</p>
 * @method array getTags() 获取<p>标签列表（TagKey-TagValue）</p>
 * @method void setTags(array $Tags) 设置<p>标签列表（TagKey-TagValue）</p>
 * @method CheckpointConfig getCheckpoint() 获取<p>提交时的 Checkpoint 产出配置（仅详情返回）</p>
 * @method void setCheckpoint(CheckpointConfig $Checkpoint) 设置<p>提交时的 Checkpoint 产出配置（仅详情返回）</p>
 * @method TrainingTuningParams getTuningParams() 获取<p>提交时的调优参数（仅 POST_TRAINING，仅详情返回）</p>
 * @method void setTuningParams(TrainingTuningParams $TuningParams) 设置<p>提交时的调优参数（仅 POST_TRAINING，仅详情返回）</p>
 * @method boolean getResumeTraining() 获取<p>提交时的断点续训意图声明（仅详情返回）</p>
 * @method void setResumeTraining(boolean $ResumeTraining) 设置<p>提交时的断点续训意图声明（仅详情返回）</p>
 * @method string getAdvancedOptions() 获取<p>高级参数 JSON（透传给 Neutrino advanced_options）</p>
 * @method void setAdvancedOptions(string $AdvancedOptions) 设置<p>高级参数 JSON（透传给 Neutrino advanced_options）</p>
 */
class TrainingJobSpec extends AbstractModel
{
    /**
     * @var string <p>训练作业配置 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecId;

    /**
     * @var string <p>训练作业配置名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecName;

    /**
     * @var string <p>配置描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>提交模式（LAB / CUSTOM_CODE / POST_TRAINING / UNKNOWN）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Kind;

    /**
     * @var string <p>启动命令</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Entrypoint;

    /**
     * @var string <p>镜像地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Image;

    /**
     * @var string <p>镜像拉取类型（BuiltIn / Custom / CustomCcr）</p>
     */
    public $ImagePullType;

    /**
     * @var string <p>镜像拉取策略（Always / IfNotPresent / Never）</p>
     */
    public $ImagePullPolicy;

    /**
     * @var string <p>代码包 COS URL</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodePackageUrl;

    /**
     * @var string <p>Ray runtime_env 配置 JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuntimeEnv;

    /**
     * @var string <p>资源配置模板 ID</p>
     */
    public $ResourceConfigId;

    /**
     * @var string <p>资源配置 JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceConfig;

    /**
     * @var string <p>资源分区 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourcePartitionId;

    /**
     * @var string <p>资源分区名称</p>
     */
    public $ResourcePartitionName;

    /**
     * @var string <p>队列名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Queue;

    /**
     * @var CheckpointMountInfo <p>Checkpoint 挂载摘要</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckpointMountInfo;

    /**
     * @var string <p>存储卷挂载配置 JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Catalog;

    /**
     * @var string <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var integer <p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer <p>关联实例总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCount;

    /**
     * @var boolean <p>是否存在运行中实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasRunningInstances;

    /**
     * @var integer <p>作业优先级（1-9，数字越大优先级越高）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Priority;

    /**
     * @var string <p>提交时 MLflow 配置 JSON（含 MlFlowMode / MlFlowTrackingUri 等）</p>
     */
    public $MlFlowConfig;

    /**
     * @var string <p>产出模型名称（用于后续模型注册）</p>
     */
    public $OutputModelName;

    /**
     * @var string <p>训练模式：sft / dpo / cpt / grpo（仅 POST_TRAINING 有值）</p>
     */
    public $Mode;

    /**
     * @var string <p>基础模型 modelUid（仅 POST_TRAINING 有值）</p>
     */
    public $BaseModelUid;

    /**
     * @var string <p>基础模型名称（仅 POST_TRAINING 有值）</p>
     */
    public $BaseModelName;

    /**
     * @var array <p>提交时的数据集挂载列表（List&lt;DatasetMount&gt;，仅详情返回）</p>
     */
    public $Datasets;

    /**
     * @var string <p>提交时的 Checkpoint 产出配置（仅详情返回）</p>
     */
    public $LastInstanceStatus;

    /**
     * @var array <p>标签列表（TagKey-TagValue）</p>
     */
    public $Tags;

    /**
     * @var CheckpointConfig <p>提交时的 Checkpoint 产出配置（仅详情返回）</p>
     */
    public $Checkpoint;

    /**
     * @var TrainingTuningParams <p>提交时的调优参数（仅 POST_TRAINING，仅详情返回）</p>
     */
    public $TuningParams;

    /**
     * @var boolean <p>提交时的断点续训意图声明（仅详情返回）</p>
     */
    public $ResumeTraining;

    /**
     * @var string <p>高级参数 JSON（透传给 Neutrino advanced_options）</p>
     */
    public $AdvancedOptions;

    /**
     * @param string $SpecId <p>训练作业配置 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecName <p>训练作业配置名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>配置描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Kind <p>提交模式（LAB / CUSTOM_CODE / POST_TRAINING / UNKNOWN）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Entrypoint <p>启动命令</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Image <p>镜像地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImagePullType <p>镜像拉取类型（BuiltIn / Custom / CustomCcr）</p>
     * @param string $ImagePullPolicy <p>镜像拉取策略（Always / IfNotPresent / Never）</p>
     * @param string $CodePackageUrl <p>代码包 COS URL</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuntimeEnv <p>Ray runtime_env 配置 JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceConfigId <p>资源配置模板 ID</p>
     * @param string $ResourceConfig <p>资源配置 JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourcePartitionId <p>资源分区 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourcePartitionName <p>资源分区名称</p>
     * @param string $Queue <p>队列名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CheckpointMountInfo $CheckpointMountInfo <p>Checkpoint 挂载摘要</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Catalog <p>存储卷挂载配置 JSON</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime <p>创建时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime <p>更新时间（毫秒时间戳）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceCount <p>关联实例总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasRunningInstances <p>是否存在运行中实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Priority <p>作业优先级（1-9，数字越大优先级越高）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MlFlowConfig <p>提交时 MLflow 配置 JSON（含 MlFlowMode / MlFlowTrackingUri 等）</p>
     * @param string $OutputModelName <p>产出模型名称（用于后续模型注册）</p>
     * @param string $Mode <p>训练模式：sft / dpo / cpt / grpo（仅 POST_TRAINING 有值）</p>
     * @param string $BaseModelUid <p>基础模型 modelUid（仅 POST_TRAINING 有值）</p>
     * @param string $BaseModelName <p>基础模型名称（仅 POST_TRAINING 有值）</p>
     * @param array $Datasets <p>提交时的数据集挂载列表（List&lt;DatasetMount&gt;，仅详情返回）</p>
     * @param string $LastInstanceStatus <p>提交时的 Checkpoint 产出配置（仅详情返回）</p>
     * @param array $Tags <p>标签列表（TagKey-TagValue）</p>
     * @param CheckpointConfig $Checkpoint <p>提交时的 Checkpoint 产出配置（仅详情返回）</p>
     * @param TrainingTuningParams $TuningParams <p>提交时的调优参数（仅 POST_TRAINING，仅详情返回）</p>
     * @param boolean $ResumeTraining <p>提交时的断点续训意图声明（仅详情返回）</p>
     * @param string $AdvancedOptions <p>高级参数 JSON（透传给 Neutrino advanced_options）</p>
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
        if (array_key_exists("SpecId",$param) and $param["SpecId"] !== null) {
            $this->SpecId = $param["SpecId"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
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

        if (array_key_exists("CodePackageUrl",$param) and $param["CodePackageUrl"] !== null) {
            $this->CodePackageUrl = $param["CodePackageUrl"];
        }

        if (array_key_exists("RuntimeEnv",$param) and $param["RuntimeEnv"] !== null) {
            $this->RuntimeEnv = $param["RuntimeEnv"];
        }

        if (array_key_exists("ResourceConfigId",$param) and $param["ResourceConfigId"] !== null) {
            $this->ResourceConfigId = $param["ResourceConfigId"];
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = $param["ResourceConfig"];
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

        if (array_key_exists("CheckpointMountInfo",$param) and $param["CheckpointMountInfo"] !== null) {
            $this->CheckpointMountInfo = new CheckpointMountInfo();
            $this->CheckpointMountInfo->deserialize($param["CheckpointMountInfo"]);
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("HasRunningInstances",$param) and $param["HasRunningInstances"] !== null) {
            $this->HasRunningInstances = $param["HasRunningInstances"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("MlFlowConfig",$param) and $param["MlFlowConfig"] !== null) {
            $this->MlFlowConfig = $param["MlFlowConfig"];
        }

        if (array_key_exists("OutputModelName",$param) and $param["OutputModelName"] !== null) {
            $this->OutputModelName = $param["OutputModelName"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("BaseModelUid",$param) and $param["BaseModelUid"] !== null) {
            $this->BaseModelUid = $param["BaseModelUid"];
        }

        if (array_key_exists("BaseModelName",$param) and $param["BaseModelName"] !== null) {
            $this->BaseModelName = $param["BaseModelName"];
        }

        if (array_key_exists("Datasets",$param) and $param["Datasets"] !== null) {
            $this->Datasets = [];
            foreach ($param["Datasets"] as $key => $value){
                $obj = new DatasetMount();
                $obj->deserialize($value);
                array_push($this->Datasets, $obj);
            }
        }

        if (array_key_exists("LastInstanceStatus",$param) and $param["LastInstanceStatus"] !== null) {
            $this->LastInstanceStatus = $param["LastInstanceStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Checkpoint",$param) and $param["Checkpoint"] !== null) {
            $this->Checkpoint = new CheckpointConfig();
            $this->Checkpoint->deserialize($param["Checkpoint"]);
        }

        if (array_key_exists("TuningParams",$param) and $param["TuningParams"] !== null) {
            $this->TuningParams = new TrainingTuningParams();
            $this->TuningParams->deserialize($param["TuningParams"]);
        }

        if (array_key_exists("ResumeTraining",$param) and $param["ResumeTraining"] !== null) {
            $this->ResumeTraining = $param["ResumeTraining"];
        }

        if (array_key_exists("AdvancedOptions",$param) and $param["AdvancedOptions"] !== null) {
            $this->AdvancedOptions = $param["AdvancedOptions"];
        }
    }
}

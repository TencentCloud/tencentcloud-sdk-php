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
 * SubmitTrainingJob请求参数结构体
 *
 * @method string getSpecName() 获取<p>训练作业配置名称（≤255 字符）</p>
 * @method void setSpecName(string $SpecName) 设置<p>训练作业配置名称（≤255 字符）</p>
 * @method string getDescription() 获取<p>描述（≤1024 字符）</p>
 * @method void setDescription(string $Description) 设置<p>描述（≤1024 字符）</p>
 * @method string getEntrypoint() 获取<p>启动命令</p>
 * @method void setEntrypoint(string $Entrypoint) 设置<p>启动命令</p>
 * @method string getImage() 获取<p>镜像地址</p>
 * @method void setImage(string $Image) 设置<p>镜像地址</p>
 * @method string getImagePullType() 获取<p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
 * @method void setImagePullType(string $ImagePullType) 设置<p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
 * @method string getImagePullPolicy() 获取<p>镜像拉取策略（Always / IfNotPresent / Never）</p>
 * @method void setImagePullPolicy(string $ImagePullPolicy) 设置<p>镜像拉取策略（Always / IfNotPresent / Never）</p>
 * @method string getCodePackageUrl() 获取<p>代码包 COS URL</p>
 * @method void setCodePackageUrl(string $CodePackageUrl) 设置<p>代码包 COS URL</p>
 * @method string getRuntimeEnv() 获取<p>Ray runtime_env 配置 JSON（含 pip 依赖、env_vars 等，结构参见 2.1）</p>
 * @method void setRuntimeEnv(string $RuntimeEnv) 设置<p>Ray runtime_env 配置 JSON（含 pip 依赖、env_vars 等，结构参见 2.1）</p>
 * @method string getResourceConfigId() 获取<p>资源配置模板 ID(可选)</p>
 * @method void setResourceConfigId(string $ResourceConfigId) 设置<p>资源配置模板 ID(可选)</p>
 * @method string getResourceConfig() 获取<p>资源配置 JSON</p>
 * @method void setResourceConfig(string $ResourceConfig) 设置<p>资源配置 JSON</p>
 * @method string getResourcePartitionId() 获取<p>资源分区 ID</p>
 * @method void setResourcePartitionId(string $ResourcePartitionId) 设置<p>资源分区 ID</p>
 * @method string getQueue() 获取<p>队列名称</p>
 * @method void setQueue(string $Queue) 设置<p>队列名称</p>
 * @method string getCatalog() 获取<p>存储卷挂载配置 JSON（含 Source 字段标记用途）</p>
 * @method void setCatalog(string $Catalog) 设置<p>存储卷挂载配置 JSON（含 Source 字段标记用途）</p>
 * @method string getAdvancedOptions() 获取<p>高级参数 JSON（不传则不更新）</p>
 * @method void setAdvancedOptions(string $AdvancedOptions) 设置<p>高级参数 JSON（不传则不更新）</p>
 * @method string getBaseModelUid() 获取<p>基础模型Uid</p>
 * @method void setBaseModelUid(string $BaseModelUid) 设置<p>基础模型Uid</p>
 * @method string getMode() 获取<p>算法模式：sft / dpo / cpt / grpo（仅 POST_TRAINING 必填，CUSTOM_CODE / LAB 禁止传入）</p>
 * @method void setMode(string $Mode) 设置<p>算法模式：sft / dpo / cpt / grpo（仅 POST_TRAINING 必填，CUSTOM_CODE / LAB 禁止传入）</p>
 * @method array getDatasets() 获取<p>数据集挂载列表（元素含 DatasetId 或 Catalog 二选一 + DatasetName + Eval 属性）</p>
 * @method void setDatasets(array $Datasets) 设置<p>数据集挂载列表（元素含 DatasetId 或 Catalog 二选一 + DatasetName + Eval 属性）</p>
 * @method CheckpointConfig getCheckpoint() 获取<p>Checkpoint 产出配置（POST_TRAINING 必填；CUSTOM_CODE / LAB 可选）</p>
 * @method void setCheckpoint(CheckpointConfig $Checkpoint) 设置<p>Checkpoint 产出配置（POST_TRAINING 必填；CUSTOM_CODE / LAB 可选）</p>
 * @method boolean getResumeTraining() 获取<p>是否启用断点续训</p>
 * @method void setResumeTraining(boolean $ResumeTraining) 设置<p>是否启用断点续训</p>
 * @method TrainingTuningParams getTuningParams() 获取<p>调优参数（高级参数，仅 POST_TRAINING 使用；CUSTOM_CODE / LAB 禁止传入）</p>
 * @method void setTuningParams(TrainingTuningParams $TuningParams) 设置<p>调优参数（高级参数，仅 POST_TRAINING 使用；CUSTOM_CODE / LAB 禁止传入）</p>
 * @method integer getPriority() 获取<p>作业优先级（1-9，数字越大优先级越高）</p>
 * @method void setPriority(integer $Priority) 设置<p>作业优先级（1-9，数字越大优先级越高）</p>
 * @method string getKind() 获取<p>提交来源标签：LAB / CUSTOM_CODE（可选，用于溯源，不影响处理逻辑）</p>
 * @method void setKind(string $Kind) 设置<p>提交来源标签：LAB / CUSTOM_CODE（可选，用于溯源，不影响处理逻辑）</p>
 * @method MlFlowConfig getMlFlowConfig() 获取<p>MlFlow 实验追踪配置（可选，不传则不启用 MlFlow）</p>
 * @method void setMlFlowConfig(MlFlowConfig $MlFlowConfig) 设置<p>MlFlow 实验追踪配置（可选，不传则不启用 MlFlow）</p>
 * @method array getTags() 获取<p>标签列表（TagKey-TagValue），用于将任务与腾讯云标签系统中的标签绑定</p>
 * @method void setTags(array $Tags) 设置<p>标签列表（TagKey-TagValue），用于将任务与腾讯云标签系统中的标签绑定</p>
 * @method string getOutputModelName() 获取<p>产出模型名称（用于后续模型注册，当前仅保存）</p>
 * @method void setOutputModelName(string $OutputModelName) 设置<p>产出模型名称（用于后续模型注册，当前仅保存）</p>
 */
class SubmitTrainingJobRequest extends AbstractModel
{
    /**
     * @var string <p>训练作业配置名称（≤255 字符）</p>
     */
    public $SpecName;

    /**
     * @var string <p>描述（≤1024 字符）</p>
     */
    public $Description;

    /**
     * @var string <p>启动命令</p>
     */
    public $Entrypoint;

    /**
     * @var string <p>镜像地址</p>
     */
    public $Image;

    /**
     * @var string <p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
     */
    public $ImagePullType;

    /**
     * @var string <p>镜像拉取策略（Always / IfNotPresent / Never）</p>
     */
    public $ImagePullPolicy;

    /**
     * @var string <p>代码包 COS URL</p>
     */
    public $CodePackageUrl;

    /**
     * @var string <p>Ray runtime_env 配置 JSON（含 pip 依赖、env_vars 等，结构参见 2.1）</p>
     */
    public $RuntimeEnv;

    /**
     * @var string <p>资源配置模板 ID(可选)</p>
     */
    public $ResourceConfigId;

    /**
     * @var string <p>资源配置 JSON</p>
     */
    public $ResourceConfig;

    /**
     * @var string <p>资源分区 ID</p>
     */
    public $ResourcePartitionId;

    /**
     * @var string <p>队列名称</p>
     */
    public $Queue;

    /**
     * @var string <p>存储卷挂载配置 JSON（含 Source 字段标记用途）</p>
     */
    public $Catalog;

    /**
     * @var string <p>高级参数 JSON（不传则不更新）</p>
     */
    public $AdvancedOptions;

    /**
     * @var string <p>基础模型Uid</p>
     */
    public $BaseModelUid;

    /**
     * @var string <p>算法模式：sft / dpo / cpt / grpo（仅 POST_TRAINING 必填，CUSTOM_CODE / LAB 禁止传入）</p>
     */
    public $Mode;

    /**
     * @var array <p>数据集挂载列表（元素含 DatasetId 或 Catalog 二选一 + DatasetName + Eval 属性）</p>
     */
    public $Datasets;

    /**
     * @var CheckpointConfig <p>Checkpoint 产出配置（POST_TRAINING 必填；CUSTOM_CODE / LAB 可选）</p>
     */
    public $Checkpoint;

    /**
     * @var boolean <p>是否启用断点续训</p>
     */
    public $ResumeTraining;

    /**
     * @var TrainingTuningParams <p>调优参数（高级参数，仅 POST_TRAINING 使用；CUSTOM_CODE / LAB 禁止传入）</p>
     */
    public $TuningParams;

    /**
     * @var integer <p>作业优先级（1-9，数字越大优先级越高）</p>
     */
    public $Priority;

    /**
     * @var string <p>提交来源标签：LAB / CUSTOM_CODE（可选，用于溯源，不影响处理逻辑）</p>
     */
    public $Kind;

    /**
     * @var MlFlowConfig <p>MlFlow 实验追踪配置（可选，不传则不启用 MlFlow）</p>
     */
    public $MlFlowConfig;

    /**
     * @var array <p>标签列表（TagKey-TagValue），用于将任务与腾讯云标签系统中的标签绑定</p>
     */
    public $Tags;

    /**
     * @var string <p>产出模型名称（用于后续模型注册，当前仅保存）</p>
     */
    public $OutputModelName;

    /**
     * @param string $SpecName <p>训练作业配置名称（≤255 字符）</p>
     * @param string $Description <p>描述（≤1024 字符）</p>
     * @param string $Entrypoint <p>启动命令</p>
     * @param string $Image <p>镜像地址</p>
     * @param string $ImagePullType <p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
     * @param string $ImagePullPolicy <p>镜像拉取策略（Always / IfNotPresent / Never）</p>
     * @param string $CodePackageUrl <p>代码包 COS URL</p>
     * @param string $RuntimeEnv <p>Ray runtime_env 配置 JSON（含 pip 依赖、env_vars 等，结构参见 2.1）</p>
     * @param string $ResourceConfigId <p>资源配置模板 ID(可选)</p>
     * @param string $ResourceConfig <p>资源配置 JSON</p>
     * @param string $ResourcePartitionId <p>资源分区 ID</p>
     * @param string $Queue <p>队列名称</p>
     * @param string $Catalog <p>存储卷挂载配置 JSON（含 Source 字段标记用途）</p>
     * @param string $AdvancedOptions <p>高级参数 JSON（不传则不更新）</p>
     * @param string $BaseModelUid <p>基础模型Uid</p>
     * @param string $Mode <p>算法模式：sft / dpo / cpt / grpo（仅 POST_TRAINING 必填，CUSTOM_CODE / LAB 禁止传入）</p>
     * @param array $Datasets <p>数据集挂载列表（元素含 DatasetId 或 Catalog 二选一 + DatasetName + Eval 属性）</p>
     * @param CheckpointConfig $Checkpoint <p>Checkpoint 产出配置（POST_TRAINING 必填；CUSTOM_CODE / LAB 可选）</p>
     * @param boolean $ResumeTraining <p>是否启用断点续训</p>
     * @param TrainingTuningParams $TuningParams <p>调优参数（高级参数，仅 POST_TRAINING 使用；CUSTOM_CODE / LAB 禁止传入）</p>
     * @param integer $Priority <p>作业优先级（1-9，数字越大优先级越高）</p>
     * @param string $Kind <p>提交来源标签：LAB / CUSTOM_CODE（可选，用于溯源，不影响处理逻辑）</p>
     * @param MlFlowConfig $MlFlowConfig <p>MlFlow 实验追踪配置（可选，不传则不启用 MlFlow）</p>
     * @param array $Tags <p>标签列表（TagKey-TagValue），用于将任务与腾讯云标签系统中的标签绑定</p>
     * @param string $OutputModelName <p>产出模型名称（用于后续模型注册，当前仅保存）</p>
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
        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
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

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("AdvancedOptions",$param) and $param["AdvancedOptions"] !== null) {
            $this->AdvancedOptions = $param["AdvancedOptions"];
        }

        if (array_key_exists("BaseModelUid",$param) and $param["BaseModelUid"] !== null) {
            $this->BaseModelUid = $param["BaseModelUid"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Datasets",$param) and $param["Datasets"] !== null) {
            $this->Datasets = [];
            foreach ($param["Datasets"] as $key => $value){
                $obj = new DatasetMount();
                $obj->deserialize($value);
                array_push($this->Datasets, $obj);
            }
        }

        if (array_key_exists("Checkpoint",$param) and $param["Checkpoint"] !== null) {
            $this->Checkpoint = new CheckpointConfig();
            $this->Checkpoint->deserialize($param["Checkpoint"]);
        }

        if (array_key_exists("ResumeTraining",$param) and $param["ResumeTraining"] !== null) {
            $this->ResumeTraining = $param["ResumeTraining"];
        }

        if (array_key_exists("TuningParams",$param) and $param["TuningParams"] !== null) {
            $this->TuningParams = new TrainingTuningParams();
            $this->TuningParams->deserialize($param["TuningParams"]);
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("MlFlowConfig",$param) and $param["MlFlowConfig"] !== null) {
            $this->MlFlowConfig = new MlFlowConfig();
            $this->MlFlowConfig->deserialize($param["MlFlowConfig"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("OutputModelName",$param) and $param["OutputModelName"] !== null) {
            $this->OutputModelName = $param["OutputModelName"];
        }
    }
}

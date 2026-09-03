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
 * 训练作业实例详情
 *
 * @method string getInstanceId() 获取<p>实例 ID（即 RayJob UUID）</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID（即 RayJob UUID）</p>
 * @method string getSpecId() 获取<p>关联配置 ID</p>
 * @method void setSpecId(string $SpecId) 设置<p>关联配置 ID</p>
 * @method string getSpecName() 获取<p>配置名称</p>
 * @method void setSpecName(string $SpecName) 设置<p>配置名称</p>
 * @method integer getPriority() 获取<p>作业优先级（1-9，数字越大优先级越高）</p>
 * @method void setPriority(integer $Priority) 设置<p>作业优先级（1-9，数字越大优先级越高）</p>
 * @method string getStatus() 获取<p>综合状态</p>
 * @method void setStatus(string $Status) 设置<p>综合状态</p>
 * @method string getErrorMessage() 获取<p>错误信息</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>错误信息</p>
 * @method integer getJobCreateTime() 获取<p>RayJob 实际启动时间（毫秒）</p>
 * @method void setJobCreateTime(integer $JobCreateTime) 设置<p>RayJob 实际启动时间（毫秒）</p>
 * @method integer getJobRunningTime() 获取<p>RayJob 运行时长（毫秒）</p>
 * @method void setJobRunningTime(integer $JobRunningTime) 设置<p>RayJob 运行时长（毫秒）</p>
 * @method string getHistoryUrl() 获取<p>Ray Dashboard History 链接</p>
 * @method void setHistoryUrl(string $HistoryUrl) 设置<p>Ray Dashboard History 链接</p>
 * @method string getCreator() 获取<p>创建人</p>
 * @method void setCreator(string $Creator) 设置<p>创建人</p>
 * @method integer getCreateTime() 获取<p>创建时间（毫秒时间戳）</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间（毫秒时间戳）</p>
 * @method string getResourcePartitionId() 获取<p>资源分区 ID</p>
 * @method void setResourcePartitionId(string $ResourcePartitionId) 设置<p>资源分区 ID</p>
 * @method string getResourcePartitionName() 获取<p>资源分区名称</p>
 * @method void setResourcePartitionName(string $ResourcePartitionName) 设置<p>资源分区名称</p>
 * @method string getQueue() 获取<p>队列名称</p>
 * @method void setQueue(string $Queue) 设置<p>队列名称</p>
 * @method string getRuntimeEnv() 获取<p>提交时 runtime_env JSON</p>
 * @method void setRuntimeEnv(string $RuntimeEnv) 设置<p>提交时 runtime_env JSON</p>
 * @method string getEntrypoint() 获取<p>提交时 entrypoint</p>
 * @method void setEntrypoint(string $Entrypoint) 设置<p>提交时 entrypoint</p>
 * @method string getImage() 获取<p>提交时镜像</p>
 * @method void setImage(string $Image) 设置<p>提交时镜像</p>
 * @method string getResourceConfig() 获取<p>提交时资源配置 JSON</p>
 * @method void setResourceConfig(string $ResourceConfig) 设置<p>提交时资源配置 JSON</p>
 * @method string getCatalog() 获取<p>提交时存储卷挂载配置 JSON</p>
 * @method void setCatalog(string $Catalog) 设置<p>提交时存储卷挂载配置 JSON</p>
 * @method string getAdvancedOptions() 获取<p>提交时高级参数 JSON</p>
 * @method void setAdvancedOptions(string $AdvancedOptions) 设置<p>提交时高级参数 JSON</p>
 * @method string getKind() 获取<p>训练子类型快照（LAB / CUSTOM_CODE / POST_TRAINING）</p>
 * @method void setKind(string $Kind) 设置<p>训练子类型快照（LAB / CUSTOM_CODE / POST_TRAINING）</p>
 * @method string getCodePackageUrl() 获取<p>提交时代码包 URL</p>
 * @method void setCodePackageUrl(string $CodePackageUrl) 设置<p>提交时代码包 URL</p>
 * @method string getMlFlowConfig() 获取<p>提交时 MLflow 配置 JSON</p>
 * @method void setMlFlowConfig(string $MlFlowConfig) 设置<p>提交时 MLflow 配置 JSON</p>
 * @method CheckpointMountInfo getCheckpointMountInfo() 获取<p>Checkpoint 挂载摘要（实例级）</p>
 * @method void setCheckpointMountInfo(CheckpointMountInfo $CheckpointMountInfo) 设置<p>Checkpoint 挂载摘要（实例级）</p>
 * @method string getMode() 获取<p>训练方式（sft / dpo / cpt / grpo），仅 POST_TRAINING 有值</p>
 * @method void setMode(string $Mode) 设置<p>训练方式（sft / dpo / cpt / grpo），仅 POST_TRAINING 有值</p>
 * @method string getBaseModelUid() 获取<p>基础模型 modelUid（仅 POST_TRAINING 有值，用于关联推理模型仓库）</p>
 * @method void setBaseModelUid(string $BaseModelUid) 设置<p>基础模型 modelUid（仅 POST_TRAINING 有值，用于关联推理模型仓库）</p>
 * @method string getBaseModelName() 获取<p>基础模型名称（仅 POST_TRAINING 有值）</p>
 * @method void setBaseModelName(string $BaseModelName) 设置<p>基础模型名称（仅 POST_TRAINING 有值）</p>
 * @method array getTags() 获取<p>标签列表（TagKey-TagValue）</p>
 * @method void setTags(array $Tags) 设置<p>标签列表（TagKey-TagValue）</p>
 * @method array getDatasets() 获取<p>创建实例时的数据集挂载列表快照（List&lt;DatasetMount&gt;，仅详情返回）</p>
 * @method void setDatasets(array $Datasets) 设置<p>创建实例时的数据集挂载列表快照（List&lt;DatasetMount&gt;，仅详情返回）</p>
 * @method CheckpointConfig getCheckpoint() 获取<p>创建实例时的 Checkpoint 产出配置快照（仅详情返回）</p>
 * @method void setCheckpoint(CheckpointConfig $Checkpoint) 设置<p>创建实例时的 Checkpoint 产出配置快照（仅详情返回）</p>
 * @method TrainingTuningParams getTuningParams() 获取<p>创建实例时的调优参数快照（仅 POST_TRAINING，仅详情返回）</p>
 * @method void setTuningParams(TrainingTuningParams $TuningParams) 设置<p>创建实例时的调优参数快照（仅 POST_TRAINING，仅详情返回）</p>
 * @method boolean getResumeTraining() 获取<p>创建实例时的断点续训意图声明快照（仅详情返回）</p>
 * @method void setResumeTraining(boolean $ResumeTraining) 设置<p>创建实例时的断点续训意图声明快照（仅详情返回）</p>
 */
class TrainingJobInstance extends AbstractModel
{
    /**
     * @var string <p>实例 ID（即 RayJob UUID）</p>
     */
    public $InstanceId;

    /**
     * @var string <p>关联配置 ID</p>
     */
    public $SpecId;

    /**
     * @var string <p>配置名称</p>
     */
    public $SpecName;

    /**
     * @var integer <p>作业优先级（1-9，数字越大优先级越高）</p>
     */
    public $Priority;

    /**
     * @var string <p>综合状态</p>
     */
    public $Status;

    /**
     * @var string <p>错误信息</p>
     */
    public $ErrorMessage;

    /**
     * @var integer <p>RayJob 实际启动时间（毫秒）</p>
     */
    public $JobCreateTime;

    /**
     * @var integer <p>RayJob 运行时长（毫秒）</p>
     */
    public $JobRunningTime;

    /**
     * @var string <p>Ray Dashboard History 链接</p>
     */
    public $HistoryUrl;

    /**
     * @var string <p>创建人</p>
     */
    public $Creator;

    /**
     * @var integer <p>创建时间（毫秒时间戳）</p>
     */
    public $CreateTime;

    /**
     * @var string <p>资源分区 ID</p>
     */
    public $ResourcePartitionId;

    /**
     * @var string <p>资源分区名称</p>
     */
    public $ResourcePartitionName;

    /**
     * @var string <p>队列名称</p>
     */
    public $Queue;

    /**
     * @var string <p>提交时 runtime_env JSON</p>
     */
    public $RuntimeEnv;

    /**
     * @var string <p>提交时 entrypoint</p>
     */
    public $Entrypoint;

    /**
     * @var string <p>提交时镜像</p>
     */
    public $Image;

    /**
     * @var string <p>提交时资源配置 JSON</p>
     */
    public $ResourceConfig;

    /**
     * @var string <p>提交时存储卷挂载配置 JSON</p>
     */
    public $Catalog;

    /**
     * @var string <p>提交时高级参数 JSON</p>
     */
    public $AdvancedOptions;

    /**
     * @var string <p>训练子类型快照（LAB / CUSTOM_CODE / POST_TRAINING）</p>
     */
    public $Kind;

    /**
     * @var string <p>提交时代码包 URL</p>
     */
    public $CodePackageUrl;

    /**
     * @var string <p>提交时 MLflow 配置 JSON</p>
     */
    public $MlFlowConfig;

    /**
     * @var CheckpointMountInfo <p>Checkpoint 挂载摘要（实例级）</p>
     */
    public $CheckpointMountInfo;

    /**
     * @var string <p>训练方式（sft / dpo / cpt / grpo），仅 POST_TRAINING 有值</p>
     */
    public $Mode;

    /**
     * @var string <p>基础模型 modelUid（仅 POST_TRAINING 有值，用于关联推理模型仓库）</p>
     */
    public $BaseModelUid;

    /**
     * @var string <p>基础模型名称（仅 POST_TRAINING 有值）</p>
     */
    public $BaseModelName;

    /**
     * @var array <p>标签列表（TagKey-TagValue）</p>
     */
    public $Tags;

    /**
     * @var array <p>创建实例时的数据集挂载列表快照（List&lt;DatasetMount&gt;，仅详情返回）</p>
     */
    public $Datasets;

    /**
     * @var CheckpointConfig <p>创建实例时的 Checkpoint 产出配置快照（仅详情返回）</p>
     */
    public $Checkpoint;

    /**
     * @var TrainingTuningParams <p>创建实例时的调优参数快照（仅 POST_TRAINING，仅详情返回）</p>
     */
    public $TuningParams;

    /**
     * @var boolean <p>创建实例时的断点续训意图声明快照（仅详情返回）</p>
     */
    public $ResumeTraining;

    /**
     * @param string $InstanceId <p>实例 ID（即 RayJob UUID）</p>
     * @param string $SpecId <p>关联配置 ID</p>
     * @param string $SpecName <p>配置名称</p>
     * @param integer $Priority <p>作业优先级（1-9，数字越大优先级越高）</p>
     * @param string $Status <p>综合状态</p>
     * @param string $ErrorMessage <p>错误信息</p>
     * @param integer $JobCreateTime <p>RayJob 实际启动时间（毫秒）</p>
     * @param integer $JobRunningTime <p>RayJob 运行时长（毫秒）</p>
     * @param string $HistoryUrl <p>Ray Dashboard History 链接</p>
     * @param string $Creator <p>创建人</p>
     * @param integer $CreateTime <p>创建时间（毫秒时间戳）</p>
     * @param string $ResourcePartitionId <p>资源分区 ID</p>
     * @param string $ResourcePartitionName <p>资源分区名称</p>
     * @param string $Queue <p>队列名称</p>
     * @param string $RuntimeEnv <p>提交时 runtime_env JSON</p>
     * @param string $Entrypoint <p>提交时 entrypoint</p>
     * @param string $Image <p>提交时镜像</p>
     * @param string $ResourceConfig <p>提交时资源配置 JSON</p>
     * @param string $Catalog <p>提交时存储卷挂载配置 JSON</p>
     * @param string $AdvancedOptions <p>提交时高级参数 JSON</p>
     * @param string $Kind <p>训练子类型快照（LAB / CUSTOM_CODE / POST_TRAINING）</p>
     * @param string $CodePackageUrl <p>提交时代码包 URL</p>
     * @param string $MlFlowConfig <p>提交时 MLflow 配置 JSON</p>
     * @param CheckpointMountInfo $CheckpointMountInfo <p>Checkpoint 挂载摘要（实例级）</p>
     * @param string $Mode <p>训练方式（sft / dpo / cpt / grpo），仅 POST_TRAINING 有值</p>
     * @param string $BaseModelUid <p>基础模型 modelUid（仅 POST_TRAINING 有值，用于关联推理模型仓库）</p>
     * @param string $BaseModelName <p>基础模型名称（仅 POST_TRAINING 有值）</p>
     * @param array $Tags <p>标签列表（TagKey-TagValue）</p>
     * @param array $Datasets <p>创建实例时的数据集挂载列表快照（List&lt;DatasetMount&gt;，仅详情返回）</p>
     * @param CheckpointConfig $Checkpoint <p>创建实例时的 Checkpoint 产出配置快照（仅详情返回）</p>
     * @param TrainingTuningParams $TuningParams <p>创建实例时的调优参数快照（仅 POST_TRAINING，仅详情返回）</p>
     * @param boolean $ResumeTraining <p>创建实例时的断点续训意图声明快照（仅详情返回）</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SpecId",$param) and $param["SpecId"] !== null) {
            $this->SpecId = $param["SpecId"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("JobCreateTime",$param) and $param["JobCreateTime"] !== null) {
            $this->JobCreateTime = $param["JobCreateTime"];
        }

        if (array_key_exists("JobRunningTime",$param) and $param["JobRunningTime"] !== null) {
            $this->JobRunningTime = $param["JobRunningTime"];
        }

        if (array_key_exists("HistoryUrl",$param) and $param["HistoryUrl"] !== null) {
            $this->HistoryUrl = $param["HistoryUrl"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
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

        if (array_key_exists("RuntimeEnv",$param) and $param["RuntimeEnv"] !== null) {
            $this->RuntimeEnv = $param["RuntimeEnv"];
        }

        if (array_key_exists("Entrypoint",$param) and $param["Entrypoint"] !== null) {
            $this->Entrypoint = $param["Entrypoint"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = $param["ResourceConfig"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("AdvancedOptions",$param) and $param["AdvancedOptions"] !== null) {
            $this->AdvancedOptions = $param["AdvancedOptions"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("CodePackageUrl",$param) and $param["CodePackageUrl"] !== null) {
            $this->CodePackageUrl = $param["CodePackageUrl"];
        }

        if (array_key_exists("MlFlowConfig",$param) and $param["MlFlowConfig"] !== null) {
            $this->MlFlowConfig = $param["MlFlowConfig"];
        }

        if (array_key_exists("CheckpointMountInfo",$param) and $param["CheckpointMountInfo"] !== null) {
            $this->CheckpointMountInfo = new CheckpointMountInfo();
            $this->CheckpointMountInfo->deserialize($param["CheckpointMountInfo"]);
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
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

        if (array_key_exists("TuningParams",$param) and $param["TuningParams"] !== null) {
            $this->TuningParams = new TrainingTuningParams();
            $this->TuningParams->deserialize($param["TuningParams"]);
        }

        if (array_key_exists("ResumeTraining",$param) and $param["ResumeTraining"] !== null) {
            $this->ResumeTraining = $param["ResumeTraining"];
        }
    }
}

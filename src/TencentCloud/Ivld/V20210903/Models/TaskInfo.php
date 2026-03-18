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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务信息

TaskStatus定义如下:

| TaskStatus名称 | TaskStatus取值 | TaskStatus描述 |
|---|---|---|
| TASK_STATUS_INVALID | 0 | 非法的任务状态 |
| TASK_STATUS_WAITING | 1 | 排队中 |
| TASK_STATUS_ANALYSING | 2 | 任务分析中 |
| TASK_STATUS_ANALYSED | 3 | 任务分析完成 |
| TASK_STATUS_SNAPSHOT_CREATING | 4 | 任务结果快照生成中 |
| TASK_STATUS_SNAPSHOT_CREATED | 5 | 任务结果快照生成完成 |
| TASK_STATUS_RESULT_UPLOADING | 6 | 任务结果快照上传中 |
| TASK_STATUS_RESULT_UPLOADED | 7 | 任务结果快照上传完成 |
| TASK_STATUS_SUCCESS | 8 | 任务执行完成 |
| TASK_STATUS_FAILED | 9 | 任务执行失败 |
 *
 * @method string getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
 * @method string getTaskName() 获取<p>描述任务名称，指定后可根据名称筛选</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置<p>描述任务名称，指定后可根据名称筛选</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMediaId() 获取<p>媒资文件ID</p>
 * @method void setMediaId(string $MediaId) 设置<p>媒资文件ID</p>
 * @method integer getTaskStatus() 获取<p>任务执行状态</p>
 * @method void setTaskStatus(integer $TaskStatus) 设置<p>任务执行状态</p>
 * @method float getTaskProgress() 获取<p>任务进度，范围为[0，100]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskProgress(float $TaskProgress) 设置<p>任务进度，范围为[0，100]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskTimeCost() 获取<p>任务执行时间</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTimeCost(integer $TaskTimeCost) 设置<p>任务执行时间</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskCreateTime() 获取<p>任务创建时间</p>
 * @method void setTaskCreateTime(string $TaskCreateTime) 设置<p>任务创建时间</p>
 * @method string getTaskStartTime() 获取<p>任务开始执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskStartTime(string $TaskStartTime) 设置<p>任务开始执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailedReason() 获取<p>任务失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedReason(string $FailedReason) 设置<p>任务失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaPreknownInfo getMediaPreknownInfo() 获取<p>任务执行时指定的先验知识</p>
 * @method void setMediaPreknownInfo(MediaPreknownInfo $MediaPreknownInfo) 设置<p>任务执行时指定的先验知识</p>
 * @method string getMediaName() 获取<p>媒资文件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaName(string $MediaName) 设置<p>媒资文件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabel() 获取<p>媒资自定义标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置<p>媒资自定义标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCallbackURL() 获取<p>任务分析完成后的后调地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallbackURL(string $CallbackURL) 设置<p>任务分析完成后的后调地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AudioMetadata getAudioMetadata() 获取<p>任务对应的媒资文件元信息，仅在MediaType为Audio时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioMetadata(AudioMetadata $AudioMetadata) 设置<p>任务对应的媒资文件元信息，仅在MediaType为Audio时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageMetadata getImageMetadata() 获取<p>任务对应的媒资文件元信息，仅在MediaType为Audio时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageMetadata(ImageMetadata $ImageMetadata) 设置<p>任务对应的媒资文件元信息，仅在MediaType为Audio时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TextMetadata getTextMetadata() 获取<p>任务对应的媒资文件元信息，仅在MediaType为Text时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextMetadata(TextMetadata $TextMetadata) 设置<p>任务对应的媒资文件元信息，仅在MediaType为Text时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaMetadata getMetadata() 获取<p>任务对应的媒资文件元信息，仅在MediaType为Video时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetadata(MediaMetadata $Metadata) 设置<p>任务对应的媒资文件元信息，仅在MediaType为Video时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskInfo extends AbstractModel
{
    /**
     * @var string <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>描述任务名称，指定后可根据名称筛选</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string <p>媒资文件ID</p>
     */
    public $MediaId;

    /**
     * @var integer <p>任务执行状态</p>
     */
    public $TaskStatus;

    /**
     * @var float <p>任务进度，范围为[0，100]</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskProgress;

    /**
     * @var integer <p>任务执行时间</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTimeCost;

    /**
     * @var string <p>任务创建时间</p>
     */
    public $TaskCreateTime;

    /**
     * @var string <p>任务开始执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskStartTime;

    /**
     * @var string <p>任务失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedReason;

    /**
     * @var MediaPreknownInfo <p>任务执行时指定的先验知识</p>
     */
    public $MediaPreknownInfo;

    /**
     * @var string <p>媒资文件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaName;

    /**
     * @var string <p>媒资自定义标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var string <p>任务分析完成后的后调地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallbackURL;

    /**
     * @var AudioMetadata <p>任务对应的媒资文件元信息，仅在MediaType为Audio时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioMetadata;

    /**
     * @var ImageMetadata <p>任务对应的媒资文件元信息，仅在MediaType为Audio时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageMetadata;

    /**
     * @var TextMetadata <p>任务对应的媒资文件元信息，仅在MediaType为Text时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextMetadata;

    /**
     * @var MediaMetadata <p>任务对应的媒资文件元信息，仅在MediaType为Video时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metadata;

    /**
     * @param string $TaskId <p>任务ID</p>
     * @param string $TaskName <p>描述任务名称，指定后可根据名称筛选</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MediaId <p>媒资文件ID</p>
     * @param integer $TaskStatus <p>任务执行状态</p>
     * @param float $TaskProgress <p>任务进度，范围为[0，100]</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskTimeCost <p>任务执行时间</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskCreateTime <p>任务创建时间</p>
     * @param string $TaskStartTime <p>任务开始执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailedReason <p>任务失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaPreknownInfo $MediaPreknownInfo <p>任务执行时指定的先验知识</p>
     * @param string $MediaName <p>媒资文件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Label <p>媒资自定义标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CallbackURL <p>任务分析完成后的后调地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AudioMetadata $AudioMetadata <p>任务对应的媒资文件元信息，仅在MediaType为Audio时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageMetadata $ImageMetadata <p>任务对应的媒资文件元信息，仅在MediaType为Audio时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TextMetadata $TextMetadata <p>任务对应的媒资文件元信息，仅在MediaType为Text时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaMetadata $Metadata <p>任务对应的媒资文件元信息，仅在MediaType为Video时有效</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("MediaId",$param) and $param["MediaId"] !== null) {
            $this->MediaId = $param["MediaId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskProgress",$param) and $param["TaskProgress"] !== null) {
            $this->TaskProgress = $param["TaskProgress"];
        }

        if (array_key_exists("TaskTimeCost",$param) and $param["TaskTimeCost"] !== null) {
            $this->TaskTimeCost = $param["TaskTimeCost"];
        }

        if (array_key_exists("TaskCreateTime",$param) and $param["TaskCreateTime"] !== null) {
            $this->TaskCreateTime = $param["TaskCreateTime"];
        }

        if (array_key_exists("TaskStartTime",$param) and $param["TaskStartTime"] !== null) {
            $this->TaskStartTime = $param["TaskStartTime"];
        }

        if (array_key_exists("FailedReason",$param) and $param["FailedReason"] !== null) {
            $this->FailedReason = $param["FailedReason"];
        }

        if (array_key_exists("MediaPreknownInfo",$param) and $param["MediaPreknownInfo"] !== null) {
            $this->MediaPreknownInfo = new MediaPreknownInfo();
            $this->MediaPreknownInfo->deserialize($param["MediaPreknownInfo"]);
        }

        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("CallbackURL",$param) and $param["CallbackURL"] !== null) {
            $this->CallbackURL = $param["CallbackURL"];
        }

        if (array_key_exists("AudioMetadata",$param) and $param["AudioMetadata"] !== null) {
            $this->AudioMetadata = new AudioMetadata();
            $this->AudioMetadata->deserialize($param["AudioMetadata"]);
        }

        if (array_key_exists("ImageMetadata",$param) and $param["ImageMetadata"] !== null) {
            $this->ImageMetadata = new ImageMetadata();
            $this->ImageMetadata->deserialize($param["ImageMetadata"]);
        }

        if (array_key_exists("TextMetadata",$param) and $param["TextMetadata"] !== null) {
            $this->TextMetadata = new TextMetadata();
            $this->TextMetadata->deserialize($param["TextMetadata"]);
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new MediaMetadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }
    }
}

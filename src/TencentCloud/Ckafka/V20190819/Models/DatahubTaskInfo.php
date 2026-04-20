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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Datahub任务信息
 *
 * @method string getTaskId() 获取<p>任务Id</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务Id</p>
 * @method string getTaskName() 获取<p>任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
 * @method string getTaskType() 获取<p>任务类型，SOURCE数据接入，SINK数据流出</p>
 * @method void setTaskType(string $TaskType) 设置<p>任务类型，SOURCE数据接入，SINK数据流出</p>
 * @method integer getStatus() 获取<p>状态，-1创建失败，0创建中，1运行中，2删除中，3已删除，4删除失败，5暂停中，6已暂停，7暂停失败，8恢复中，9恢复失败</p>
 * @method void setStatus(integer $Status) 设置<p>状态，-1创建失败，0创建中，1运行中，2删除中，3已删除，4删除失败，5暂停中，6已暂停，7暂停失败，8恢复中，9恢复失败</p>
 * @method DatahubResource getSourceResource() 获取<p>数据源</p>
 * @method void setSourceResource(DatahubResource $SourceResource) 设置<p>数据源</p>
 * @method DatahubResource getTargetResource() 获取<p>数据目标</p>
 * @method void setTargetResource(DatahubResource $TargetResource) 设置<p>数据目标</p>
 * @method string getCreateTime() 获取<p>任务创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>任务创建时间</p>
 * @method string getErrorMessage() 获取<p>异常信息</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>异常信息</p>
 * @method float getTaskProgress() 获取<p>创建进度百分比</p>
 * @method void setTaskProgress(float $TaskProgress) 设置<p>创建进度百分比</p>
 * @method string getTaskCurrentStep() 获取<p>任务当前处于的步骤</p>
 * @method void setTaskCurrentStep(string $TaskCurrentStep) 设置<p>任务当前处于的步骤</p>
 * @method string getDatahubId() 获取<p>Datahub转储Id</p>
 * @method void setDatahubId(string $DatahubId) 设置<p>Datahub转储Id</p>
 * @method array getStepList() 获取<p>步骤列表</p>
 * @method void setStepList(array $StepList) 设置<p>步骤列表</p>
 * @method string getDescription() 获取<p>任务描述信息</p>
 * @method void setDescription(string $Description) 设置<p>任务描述信息</p>
 * @method integer getTaskMax() 获取<p>任务并发数</p><p>默认值：1</p>
 * @method void setTaskMax(integer $TaskMax) 设置<p>任务并发数</p><p>默认值：1</p>
 * @method integer getSyncThrottleLimit() 获取<p>任务同步限流值,单位MB/s</p><p>默认值：20MB/s</p>
 * @method void setSyncThrottleLimit(integer $SyncThrottleLimit) 设置<p>任务同步限流值,单位MB/s</p><p>默认值：20MB/s</p>
 * @method boolean getAutoExpandFlag() 获取<p>任务是否自动扩容标识</p><p>枚举值：</p><ul><li>true： 自动扩容</li><li>false： 手动扩容</li></ul><p>默认值：true</p>
 * @method void setAutoExpandFlag(boolean $AutoExpandFlag) 设置<p>任务是否自动扩容标识</p><p>枚举值：</p><ul><li>true： 自动扩容</li><li>false： 手动扩容</li></ul><p>默认值：true</p>
 */
class DatahubTaskInfo extends AbstractModel
{
    /**
     * @var string <p>任务Id</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>任务类型，SOURCE数据接入，SINK数据流出</p>
     */
    public $TaskType;

    /**
     * @var integer <p>状态，-1创建失败，0创建中，1运行中，2删除中，3已删除，4删除失败，5暂停中，6已暂停，7暂停失败，8恢复中，9恢复失败</p>
     */
    public $Status;

    /**
     * @var DatahubResource <p>数据源</p>
     */
    public $SourceResource;

    /**
     * @var DatahubResource <p>数据目标</p>
     */
    public $TargetResource;

    /**
     * @var string <p>任务创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>异常信息</p>
     */
    public $ErrorMessage;

    /**
     * @var float <p>创建进度百分比</p>
     */
    public $TaskProgress;

    /**
     * @var string <p>任务当前处于的步骤</p>
     */
    public $TaskCurrentStep;

    /**
     * @var string <p>Datahub转储Id</p>
     */
    public $DatahubId;

    /**
     * @var array <p>步骤列表</p>
     */
    public $StepList;

    /**
     * @var string <p>任务描述信息</p>
     */
    public $Description;

    /**
     * @var integer <p>任务并发数</p><p>默认值：1</p>
     */
    public $TaskMax;

    /**
     * @var integer <p>任务同步限流值,单位MB/s</p><p>默认值：20MB/s</p>
     */
    public $SyncThrottleLimit;

    /**
     * @var boolean <p>任务是否自动扩容标识</p><p>枚举值：</p><ul><li>true： 自动扩容</li><li>false： 手动扩容</li></ul><p>默认值：true</p>
     */
    public $AutoExpandFlag;

    /**
     * @param string $TaskId <p>任务Id</p>
     * @param string $TaskName <p>任务名称</p>
     * @param string $TaskType <p>任务类型，SOURCE数据接入，SINK数据流出</p>
     * @param integer $Status <p>状态，-1创建失败，0创建中，1运行中，2删除中，3已删除，4删除失败，5暂停中，6已暂停，7暂停失败，8恢复中，9恢复失败</p>
     * @param DatahubResource $SourceResource <p>数据源</p>
     * @param DatahubResource $TargetResource <p>数据目标</p>
     * @param string $CreateTime <p>任务创建时间</p>
     * @param string $ErrorMessage <p>异常信息</p>
     * @param float $TaskProgress <p>创建进度百分比</p>
     * @param string $TaskCurrentStep <p>任务当前处于的步骤</p>
     * @param string $DatahubId <p>Datahub转储Id</p>
     * @param array $StepList <p>步骤列表</p>
     * @param string $Description <p>任务描述信息</p>
     * @param integer $TaskMax <p>任务并发数</p><p>默认值：1</p>
     * @param integer $SyncThrottleLimit <p>任务同步限流值,单位MB/s</p><p>默认值：20MB/s</p>
     * @param boolean $AutoExpandFlag <p>任务是否自动扩容标识</p><p>枚举值：</p><ul><li>true： 自动扩容</li><li>false： 手动扩容</li></ul><p>默认值：true</p>
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

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SourceResource",$param) and $param["SourceResource"] !== null) {
            $this->SourceResource = new DatahubResource();
            $this->SourceResource->deserialize($param["SourceResource"]);
        }

        if (array_key_exists("TargetResource",$param) and $param["TargetResource"] !== null) {
            $this->TargetResource = new DatahubResource();
            $this->TargetResource->deserialize($param["TargetResource"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("TaskProgress",$param) and $param["TaskProgress"] !== null) {
            $this->TaskProgress = $param["TaskProgress"];
        }

        if (array_key_exists("TaskCurrentStep",$param) and $param["TaskCurrentStep"] !== null) {
            $this->TaskCurrentStep = $param["TaskCurrentStep"];
        }

        if (array_key_exists("DatahubId",$param) and $param["DatahubId"] !== null) {
            $this->DatahubId = $param["DatahubId"];
        }

        if (array_key_exists("StepList",$param) and $param["StepList"] !== null) {
            $this->StepList = $param["StepList"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TaskMax",$param) and $param["TaskMax"] !== null) {
            $this->TaskMax = $param["TaskMax"];
        }

        if (array_key_exists("SyncThrottleLimit",$param) and $param["SyncThrottleLimit"] !== null) {
            $this->SyncThrottleLimit = $param["SyncThrottleLimit"];
        }

        if (array_key_exists("AutoExpandFlag",$param) and $param["AutoExpandFlag"] !== null) {
            $this->AutoExpandFlag = $param["AutoExpandFlag"];
        }
    }
}

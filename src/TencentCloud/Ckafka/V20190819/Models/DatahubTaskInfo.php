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
 * @method string getTaskId() 获取任务Id
 * @method void setTaskId(string $TaskId) 设置任务Id
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getTaskType() 获取任务类型，SOURCE数据接入，SINK数据流出
 * @method void setTaskType(string $TaskType) 设置任务类型，SOURCE数据接入，SINK数据流出
 * @method integer getStatus() 获取状态，-1创建失败，0创建中，1运行中，2删除中，3已删除，4删除失败，5暂停中，6已暂停，7暂停失败，8恢复中，9恢复失败
 * @method void setStatus(integer $Status) 设置状态，-1创建失败，0创建中，1运行中，2删除中，3已删除，4删除失败，5暂停中，6已暂停，7暂停失败，8恢复中，9恢复失败
 * @method DatahubResource getSourceResource() 获取数据源
 * @method void setSourceResource(DatahubResource $SourceResource) 设置数据源
 * @method DatahubResource getTargetResource() 获取数据目标
 * @method void setTargetResource(DatahubResource $TargetResource) 设置数据目标
 * @method string getCreateTime() 获取任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
 * @method string getErrorMessage() 获取异常信息
 * @method void setErrorMessage(string $ErrorMessage) 设置异常信息
 * @method float getTaskProgress() 获取创建进度百分比
 * @method void setTaskProgress(float $TaskProgress) 设置创建进度百分比
 * @method string getTaskCurrentStep() 获取任务当前处于的步骤
 * @method void setTaskCurrentStep(string $TaskCurrentStep) 设置任务当前处于的步骤
 * @method string getDatahubId() 获取Datahub转储Id
 * @method void setDatahubId(string $DatahubId) 设置Datahub转储Id
 * @method array getStepList() 获取步骤列表
 * @method void setStepList(array $StepList) 设置步骤列表
 * @method string getDescription() 获取任务描述信息
 * @method void setDescription(string $Description) 设置任务描述信息
 */
class DatahubTaskInfo extends AbstractModel
{
    /**
     * @var string 任务Id
     */
    public $TaskId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 任务类型，SOURCE数据接入，SINK数据流出
     */
    public $TaskType;

    /**
     * @var integer 状态，-1创建失败，0创建中，1运行中，2删除中，3已删除，4删除失败，5暂停中，6已暂停，7暂停失败，8恢复中，9恢复失败
     */
    public $Status;

    /**
     * @var DatahubResource 数据源
     */
    public $SourceResource;

    /**
     * @var DatahubResource 数据目标
     */
    public $TargetResource;

    /**
     * @var string 任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 异常信息
     */
    public $ErrorMessage;

    /**
     * @var float 创建进度百分比
     */
    public $TaskProgress;

    /**
     * @var string 任务当前处于的步骤
     */
    public $TaskCurrentStep;

    /**
     * @var string Datahub转储Id
     */
    public $DatahubId;

    /**
     * @var array 步骤列表
     */
    public $StepList;

    /**
     * @var string 任务描述信息
     */
    public $Description;

    /**
     * @param string $TaskId 任务Id
     * @param string $TaskName 任务名称
     * @param string $TaskType 任务类型，SOURCE数据接入，SINK数据流出
     * @param integer $Status 状态，-1创建失败，0创建中，1运行中，2删除中，3已删除，4删除失败，5暂停中，6已暂停，7暂停失败，8恢复中，9恢复失败
     * @param DatahubResource $SourceResource 数据源
     * @param DatahubResource $TargetResource 数据目标
     * @param string $CreateTime 任务创建时间
     * @param string $ErrorMessage 异常信息
     * @param float $TaskProgress 创建进度百分比
     * @param string $TaskCurrentStep 任务当前处于的步骤
     * @param string $DatahubId Datahub转储Id
     * @param array $StepList 步骤列表
     * @param string $Description 任务描述信息
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
    }
}

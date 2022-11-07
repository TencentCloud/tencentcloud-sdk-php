<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOfflineTask请求参数结构体
 *
 * @method string getProjectId() 获取项目/工作
 * @method void setProjectId(string $ProjectId) 设置项目/工作
 * @method integer getCycleStep() 获取1
 * @method void setCycleStep(integer $CycleStep) 设置1
 * @method integer getDelayTime() 获取0
 * @method void setDelayTime(integer $DelayTime) 设置0
 * @method string getEndTime() 获取2099-12-31 00:00:00
 * @method void setEndTime(string $EndTime) 设置2099-12-31 00:00:00
 * @method string getNotes() 获取备注
 * @method void setNotes(string $Notes) 设置备注
 * @method string getStartTime() 获取当前日期
 * @method void setStartTime(string $StartTime) 设置当前日期
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method integer getTypeId() 获取跟之前调用调度接口保持一致27
 * @method void setTypeId(integer $TypeId) 设置跟之前调用调度接口保持一致27
 * @method string getTaskAction() 获取默认 ""
 * @method void setTaskAction(string $TaskAction) 设置默认 ""
 * @method string getTaskMode() 获取区分画布和表单
 * @method void setTaskMode(string $TaskMode) 设置区分画布和表单
 */
class CreateOfflineTaskRequest extends AbstractModel
{
    /**
     * @var string 项目/工作
     */
    public $ProjectId;

    /**
     * @var integer 1
     */
    public $CycleStep;

    /**
     * @var integer 0
     */
    public $DelayTime;

    /**
     * @var string 2099-12-31 00:00:00
     */
    public $EndTime;

    /**
     * @var string 备注
     */
    public $Notes;

    /**
     * @var string 当前日期
     */
    public $StartTime;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var integer 跟之前调用调度接口保持一致27
     */
    public $TypeId;

    /**
     * @var string 默认 ""
     */
    public $TaskAction;

    /**
     * @var string 区分画布和表单
     */
    public $TaskMode;

    /**
     * @param string $ProjectId 项目/工作
     * @param integer $CycleStep 1
     * @param integer $DelayTime 0
     * @param string $EndTime 2099-12-31 00:00:00
     * @param string $Notes 备注
     * @param string $StartTime 当前日期
     * @param string $TaskName 任务名称
     * @param integer $TypeId 跟之前调用调度接口保持一致27
     * @param string $TaskAction 默认 ""
     * @param string $TaskMode 区分画布和表单
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Notes",$param) and $param["Notes"] !== null) {
            $this->Notes = $param["Notes"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }
    }
}

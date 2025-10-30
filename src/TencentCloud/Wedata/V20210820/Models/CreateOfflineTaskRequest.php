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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOfflineTask请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getCycleStep() 获取间隔，可选，默认1。非空。默认 1
 * @method void setCycleStep(integer $CycleStep) 设置间隔，可选，默认1。非空。默认 1
 * @method integer getDelayTime() 获取延时执行时间，单位分钟
 * @method void setDelayTime(integer $DelayTime) 设置延时执行时间，单位分钟
 * @method string getEndTime() 获取任务结束数据时间。非空。默认当前时间
 * @method void setEndTime(string $EndTime) 设置任务结束数据时间。非空。默认当前时间
 * @method string getNotes() 获取备注
 * @method void setNotes(string $Notes) 设置备注
 * @method string getStartTime() 获取当前日期
 * @method void setStartTime(string $StartTime) 设置当前日期
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method integer getTypeId() 获取跟之前调用调度接口保持一致27
 * @method void setTypeId(integer $TypeId) 设置跟之前调用调度接口保持一致27
 * @method string getTaskAction() 获取时间指定，如月任务指定1，3号，则填入 1，3。非空。默认 "" 月任务：如具体1，3号则写 "1,3"，指定月末不可和具体号数一起输入，仅能为 "L"
 * @method void setTaskAction(string $TaskAction) 设置时间指定，如月任务指定1，3号，则填入 1，3。非空。默认 "" 月任务：如具体1，3号则写 "1,3"，指定月末不可和具体号数一起输入，仅能为 "L"
 * @method string getTaskMode() 获取区分画布和表单
 * @method void setTaskMode(string $TaskMode) 设置区分画布和表单
 * @method TaskImportInfo getTaskImportInfo() 获取导入编排空间配置
 * @method void setTaskImportInfo(TaskImportInfo $TaskImportInfo) 设置导入编排空间配置
 */
class CreateOfflineTaskRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 间隔，可选，默认1。非空。默认 1
     */
    public $CycleStep;

    /**
     * @var integer 延时执行时间，单位分钟
     */
    public $DelayTime;

    /**
     * @var string 任务结束数据时间。非空。默认当前时间
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
     * @var string 时间指定，如月任务指定1，3号，则填入 1，3。非空。默认 "" 月任务：如具体1，3号则写 "1,3"，指定月末不可和具体号数一起输入，仅能为 "L"
     */
    public $TaskAction;

    /**
     * @var string 区分画布和表单
     */
    public $TaskMode;

    /**
     * @var TaskImportInfo 导入编排空间配置
     */
    public $TaskImportInfo;

    /**
     * @param string $ProjectId 项目ID
     * @param integer $CycleStep 间隔，可选，默认1。非空。默认 1
     * @param integer $DelayTime 延时执行时间，单位分钟
     * @param string $EndTime 任务结束数据时间。非空。默认当前时间
     * @param string $Notes 备注
     * @param string $StartTime 当前日期
     * @param string $TaskName 任务名称
     * @param integer $TypeId 跟之前调用调度接口保持一致27
     * @param string $TaskAction 时间指定，如月任务指定1，3号，则填入 1，3。非空。默认 "" 月任务：如具体1，3号则写 "1,3"，指定月末不可和具体号数一起输入，仅能为 "L"
     * @param string $TaskMode 区分画布和表单
     * @param TaskImportInfo $TaskImportInfo 导入编排空间配置
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

        if (array_key_exists("TaskImportInfo",$param) and $param["TaskImportInfo"] !== null) {
            $this->TaskImportInfo = new TaskImportInfo();
            $this->TaskImportInfo->deserialize($param["TaskImportInfo"]);
        }
    }
}

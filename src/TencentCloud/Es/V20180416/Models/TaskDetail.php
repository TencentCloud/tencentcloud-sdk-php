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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例操作记录中的流程任务信息
 *
 * @method string getName() 获取任务名
 * @method void setName(string $Name) 设置任务名
 * @method float getProgress() 获取任务进度
 * @method void setProgress(float $Progress) 设置任务进度
 * @method string getFinishTime() 获取任务完成时间
 * @method void setFinishTime(string $FinishTime) 设置任务完成时间
 * @method array getSubTasks() 获取子任务
 * @method void setSubTasks(array $SubTasks) 设置子任务
 * @method integer getElapsedTime() 获取任务花费时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElapsedTime(integer $ElapsedTime) 设置任务花费时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method ProcessDetail getProcessInfo() 获取任务进度详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessInfo(ProcessDetail $ProcessInfo) 设置任务进度详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskDetail extends AbstractModel
{
    /**
     * @var string 任务名
     */
    public $Name;

    /**
     * @var float 任务进度
     */
    public $Progress;

    /**
     * @var string 任务完成时间
     */
    public $FinishTime;

    /**
     * @var array 子任务
     */
    public $SubTasks;

    /**
     * @var integer 任务花费时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElapsedTime;

    /**
     * @var ProcessDetail 任务进度详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessInfo;

    /**
     * @param string $Name 任务名
     * @param float $Progress 任务进度
     * @param string $FinishTime 任务完成时间
     * @param array $SubTasks 子任务
     * @param integer $ElapsedTime 任务花费时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param ProcessDetail $ProcessInfo 任务进度详情
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("SubTasks",$param) and $param["SubTasks"] !== null) {
            $this->SubTasks = [];
            foreach ($param["SubTasks"] as $key => $value){
                $obj = new SubTaskDetail();
                $obj->deserialize($value);
                array_push($this->SubTasks, $obj);
            }
        }

        if (array_key_exists("ElapsedTime",$param) and $param["ElapsedTime"] !== null) {
            $this->ElapsedTime = $param["ElapsedTime"];
        }

        if (array_key_exists("ProcessInfo",$param) and $param["ProcessInfo"] !== null) {
            $this->ProcessInfo = new ProcessDetail();
            $this->ProcessInfo->deserialize($param["ProcessInfo"]);
        }
    }
}

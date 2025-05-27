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
 * 日志信息
 *
 * @method integer getCount() 获取返回行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置返回行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getContent() 获取内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(array $Content) 设置内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOver() 获取文件是否读取完
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOver(boolean $Over) 设置文件是否读取完
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceState() 获取实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceState(string $InstanceState) 设置实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWorkerType() 获取执行机类型 0:老执行机loader 1:新执行机woker
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkerType(integer $WorkerType) 设置执行机类型 0:老执行机loader 1:新执行机woker
注意：此字段可能返回 null，表示取不到有效值。
 * @method JobLogErrorTip getJobLogErrorTip() 获取日志sql错误信息，包含行列信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobLogErrorTip(JobLogErrorTip $JobLogErrorTip) 设置日志sql错误信息，包含行列信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExecutionExtendedProps() 获取执行实例的扩展属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionExtendedProps(array $ExecutionExtendedProps) 设置执行实例的扩展属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtInfo() 获取如果queryFileFlag为1，则ext返回当前页数据的结束行信息，下一页把这个extInfo透传过来
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtInfo(string $ExtInfo) 设置如果queryFileFlag为1，则ext返回当前页数据的结束行信息，下一页把这个extInfo透传过来
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceLogByLine extends AbstractModel
{
    /**
     * @var integer 返回行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var array 内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var boolean 文件是否读取完
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Over;

    /**
     * @var string 实例状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceState;

    /**
     * @var string 实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var integer 执行机类型 0:老执行机loader 1:新执行机woker
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkerType;

    /**
     * @var JobLogErrorTip 日志sql错误信息，包含行列信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobLogErrorTip;

    /**
     * @var array 执行实例的扩展属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionExtendedProps;

    /**
     * @var string 如果queryFileFlag为1，则ext返回当前页数据的结束行信息，下一页把这个extInfo透传过来
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtInfo;

    /**
     * @param integer $Count 返回行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Content 内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Over 文件是否读取完
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceState 实例状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WorkerType 执行机类型 0:老执行机loader 1:新执行机woker
注意：此字段可能返回 null，表示取不到有效值。
     * @param JobLogErrorTip $JobLogErrorTip 日志sql错误信息，包含行列信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExecutionExtendedProps 执行实例的扩展属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtInfo 如果queryFileFlag为1，则ext返回当前页数据的结束行信息，下一页把这个extInfo透传过来
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Over",$param) and $param["Over"] !== null) {
            $this->Over = $param["Over"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("WorkerType",$param) and $param["WorkerType"] !== null) {
            $this->WorkerType = $param["WorkerType"];
        }

        if (array_key_exists("JobLogErrorTip",$param) and $param["JobLogErrorTip"] !== null) {
            $this->JobLogErrorTip = new JobLogErrorTip();
            $this->JobLogErrorTip->deserialize($param["JobLogErrorTip"]);
        }

        if (array_key_exists("ExecutionExtendedProps",$param) and $param["ExecutionExtendedProps"] !== null) {
            $this->ExecutionExtendedProps = [];
            foreach ($param["ExecutionExtendedProps"] as $key => $value){
                $obj = new ExtensionInfoVO();
                $obj->deserialize($value);
                array_push($this->ExecutionExtendedProps, $obj);
            }
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}

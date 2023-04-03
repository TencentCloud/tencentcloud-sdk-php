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
namespace TencentCloud\Smop\V20201203\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 后端提交任务事件返回Data复杂类型
 *
 * @method integer getCode() 获取状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(integer $Code) 设置状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取提示信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置提示信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(integer $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskOrderId() 获取当前完成或正在完成的任务订单ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskOrderId(string $TaskOrderId) 设置当前完成或正在完成的任务订单ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskCode() 获取当前任务订单状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskCode(integer $TaskCode) 设置当前任务订单状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskCoinNumber() 获取获得积分数/成长值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskCoinNumber(integer $TaskCoinNumber) 设置获得积分数/成长值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskType() 获取任务类型后台代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(integer $TaskType) 设置任务类型后台代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCoin() 获取当前积分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCoin(integer $TotalCoin) 设置当前积分
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttach() 获取用户透传的代码块
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttach(string $Attach) 设置用户透传的代码块
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDoneTimes() 获取计次任务当前完成次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDoneTimes(integer $DoneTimes) 设置计次任务当前完成次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalTimes() 获取计次任务当前所需完成次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalTimes(integer $TotalTimes) 设置计次任务当前所需完成次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGrowScore() 获取当前成长值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrowScore(integer $GrowScore) 设置当前成长值
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskEventData extends AbstractModel
{
    /**
     * @var integer 状态码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 提示信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var integer 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 当前完成或正在完成的任务订单ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskOrderId;

    /**
     * @var integer 当前任务订单状态码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskCode;

    /**
     * @var integer 获得积分数/成长值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskCoinNumber;

    /**
     * @var integer 任务类型后台代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var integer 当前积分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCoin;

    /**
     * @var string 用户透传的代码块
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Attach;

    /**
     * @var integer 计次任务当前完成次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DoneTimes;

    /**
     * @var integer 计次任务当前所需完成次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalTimes;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var integer 当前成长值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GrowScore;

    /**
     * @param integer $Code 状态码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 提示信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskOrderId 当前完成或正在完成的任务订单ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskCode 当前任务订单状态码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskCoinNumber 获得积分数/成长值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskType 任务类型后台代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCoin 当前积分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Attach 用户透传的代码块
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DoneTimes 计次任务当前完成次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalTimes 计次任务当前所需完成次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GrowScore 当前成长值
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskOrderId",$param) and $param["TaskOrderId"] !== null) {
            $this->TaskOrderId = $param["TaskOrderId"];
        }

        if (array_key_exists("TaskCode",$param) and $param["TaskCode"] !== null) {
            $this->TaskCode = $param["TaskCode"];
        }

        if (array_key_exists("TaskCoinNumber",$param) and $param["TaskCoinNumber"] !== null) {
            $this->TaskCoinNumber = $param["TaskCoinNumber"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TotalCoin",$param) and $param["TotalCoin"] !== null) {
            $this->TotalCoin = $param["TotalCoin"];
        }

        if (array_key_exists("Attach",$param) and $param["Attach"] !== null) {
            $this->Attach = $param["Attach"];
        }

        if (array_key_exists("DoneTimes",$param) and $param["DoneTimes"] !== null) {
            $this->DoneTimes = $param["DoneTimes"];
        }

        if (array_key_exists("TotalTimes",$param) and $param["TotalTimes"] !== null) {
            $this->TotalTimes = $param["TotalTimes"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("GrowScore",$param) and $param["GrowScore"] !== null) {
            $this->GrowScore = $param["GrowScore"];
        }
    }
}

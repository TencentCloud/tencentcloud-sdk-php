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
namespace TencentCloud\Smop\V20201203\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 后端提交任务事件返回Data复杂类型
 *
 * @method integer getCode() 获取状态码，0为成功，-1为失败
 * @method void setCode(integer $Code) 设置状态码，0为成功，-1为失败
 * @method string getMessage() 获取提示信息
 * @method void setMessage(string $Message) 设置提示信息
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method string getTaskOrderId() 获取当前完成或正在完成的安心用户运营平台的任务订单ID
 * @method void setTaskOrderId(string $TaskOrderId) 设置当前完成或正在完成的安心用户运营平台的任务订单ID
 * @method integer getTaskCode() 获取当前任务订单状态码。1代表未完成；2代表已完成但未提交任务；3表示已完成，且已提交获得积分任务；4表示过期任务，提交后不获得积分。
 * @method void setTaskCode(integer $TaskCode) 设置当前任务订单状态码。1代表未完成；2代表已完成但未提交任务；3表示已完成，且已提交获得积分任务；4表示过期任务，提交后不获得积分。
 * @method integer getTaskCoinNumber() 获取获得积分数
 * @method void setTaskCoinNumber(integer $TaskCoinNumber) 设置获得积分数
 * @method integer getTaskType() 获取任务类型后台代码
 * @method void setTaskType(integer $TaskType) 设置任务类型后台代码
 * @method integer getTotalCoin() 获取用户的当前积分
 * @method void setTotalCoin(integer $TotalCoin) 设置用户的当前积分
 * @method string getAttach() 获取用户透传的附加数据
 * @method void setAttach(string $Attach) 设置用户透传的附加数据
 * @method integer getDoneTimes() 获取计次任务当前完成次数
 * @method void setDoneTimes(integer $DoneTimes) 设置计次任务当前完成次数
 * @method integer getTotalTimes() 获取计次任务当前所需完成次数
 * @method void setTotalTimes(integer $TotalTimes) 设置计次任务当前所需完成次数
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method integer getGrowScore() 获取用户当前成长值
 * @method void setGrowScore(integer $GrowScore) 设置用户当前成长值
 */
class TaskEventData extends AbstractModel
{
    /**
     * @var integer 状态码，0为成功，-1为失败
     */
    public $Code;

    /**
     * @var string 提示信息
     */
    public $Message;

    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var string 当前完成或正在完成的安心用户运营平台的任务订单ID
     */
    public $TaskOrderId;

    /**
     * @var integer 当前任务订单状态码。1代表未完成；2代表已完成但未提交任务；3表示已完成，且已提交获得积分任务；4表示过期任务，提交后不获得积分。
     */
    public $TaskCode;

    /**
     * @var integer 获得积分数
     */
    public $TaskCoinNumber;

    /**
     * @var integer 任务类型后台代码
     */
    public $TaskType;

    /**
     * @var integer 用户的当前积分
     */
    public $TotalCoin;

    /**
     * @var string 用户透传的附加数据
     */
    public $Attach;

    /**
     * @var integer 计次任务当前完成次数
     */
    public $DoneTimes;

    /**
     * @var integer 计次任务当前所需完成次数
     */
    public $TotalTimes;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var integer 用户当前成长值
     */
    public $GrowScore;

    /**
     * @param integer $Code 状态码，0为成功，-1为失败
     * @param string $Message 提示信息
     * @param integer $TaskId 任务ID
     * @param string $TaskOrderId 当前完成或正在完成的安心用户运营平台的任务订单ID
     * @param integer $TaskCode 当前任务订单状态码。1代表未完成；2代表已完成但未提交任务；3表示已完成，且已提交获得积分任务；4表示过期任务，提交后不获得积分。
     * @param integer $TaskCoinNumber 获得积分数
     * @param integer $TaskType 任务类型后台代码
     * @param integer $TotalCoin 用户的当前积分
     * @param string $Attach 用户透传的附加数据
     * @param integer $DoneTimes 计次任务当前完成次数
     * @param integer $TotalTimes 计次任务当前所需完成次数
     * @param string $TaskName 任务名称
     * @param integer $GrowScore 用户当前成长值
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

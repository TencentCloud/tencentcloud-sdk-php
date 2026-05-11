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
 * ES集群操作详细信息
 *
 * @method integer getId() 获取<p>操作唯一id</p>
 * @method void setId(integer $Id) 设置<p>操作唯一id</p>
 * @method string getStartTime() 获取<p>操作开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>操作开始时间</p>
 * @method string getType() 获取<p>操作类型</p>
 * @method void setType(string $Type) 设置<p>操作类型</p>
 * @method OperationDetail getDetail() 获取<p>操作详情</p>
 * @method void setDetail(OperationDetail $Detail) 设置<p>操作详情</p>
 * @method string getResult() 获取<p>操作结果</p>
 * @method void setResult(string $Result) 设置<p>操作结果</p>
 * @method array getTasks() 获取<p>流程任务信息</p>
 * @method void setTasks(array $Tasks) 设置<p>流程任务信息</p>
 * @method float getProgress() 获取<p>操作进度</p>
 * @method void setProgress(float $Progress) 设置<p>操作进度</p>
 * @method integer getRollbackTag() 获取<p>回滚标记， 0未回滚 ，1回滚中，2已回滚</p>
 * @method void setRollbackTag(integer $RollbackTag) 设置<p>回滚标记， 0未回滚 ，1回滚中，2已回滚</p>
 * @method string getSubAccountUin() 获取<p>操作者Uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>操作者Uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoScaleTag() 获取<p>自动扩容标识：0-非自动，1-自动</p>
 * @method void setAutoScaleTag(integer $AutoScaleTag) 设置<p>自动扩容标识：0-非自动，1-自动</p>
 * @method string getSuspendedReason() 获取<p>流程异常原因</p>
 * @method void setSuspendedReason(string $SuspendedReason) 设置<p>流程异常原因</p>
 */
class Operation extends AbstractModel
{
    /**
     * @var integer <p>操作唯一id</p>
     */
    public $Id;

    /**
     * @var string <p>操作开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>操作类型</p>
     */
    public $Type;

    /**
     * @var OperationDetail <p>操作详情</p>
     */
    public $Detail;

    /**
     * @var string <p>操作结果</p>
     */
    public $Result;

    /**
     * @var array <p>流程任务信息</p>
     */
    public $Tasks;

    /**
     * @var float <p>操作进度</p>
     */
    public $Progress;

    /**
     * @var integer <p>回滚标记， 0未回滚 ，1回滚中，2已回滚</p>
     */
    public $RollbackTag;

    /**
     * @var string <p>操作者Uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @var integer <p>自动扩容标识：0-非自动，1-自动</p>
     */
    public $AutoScaleTag;

    /**
     * @var string <p>流程异常原因</p>
     */
    public $SuspendedReason;

    /**
     * @param integer $Id <p>操作唯一id</p>
     * @param string $StartTime <p>操作开始时间</p>
     * @param string $Type <p>操作类型</p>
     * @param OperationDetail $Detail <p>操作详情</p>
     * @param string $Result <p>操作结果</p>
     * @param array $Tasks <p>流程任务信息</p>
     * @param float $Progress <p>操作进度</p>
     * @param integer $RollbackTag <p>回滚标记， 0未回滚 ，1回滚中，2已回滚</p>
     * @param string $SubAccountUin <p>操作者Uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoScaleTag <p>自动扩容标识：0-非自动，1-自动</p>
     * @param string $SuspendedReason <p>流程异常原因</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new OperationDetail();
            $this->Detail->deserialize($param["Detail"]);
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new TaskDetail();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("RollbackTag",$param) and $param["RollbackTag"] !== null) {
            $this->RollbackTag = $param["RollbackTag"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("AutoScaleTag",$param) and $param["AutoScaleTag"] !== null) {
            $this->AutoScaleTag = $param["AutoScaleTag"];
        }

        if (array_key_exists("SuspendedReason",$param) and $param["SuspendedReason"] !== null) {
            $this->SuspendedReason = $param["SuspendedReason"];
        }
    }
}

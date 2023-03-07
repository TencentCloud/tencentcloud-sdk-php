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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线检测策略
 *
 * @method integer getPolicyId() 获取策略Id
 * @method void setPolicyId(integer $PolicyId) 设置策略Id
 * @method integer getTaskId() 获取检测任务Id
 * @method void setTaskId(integer $TaskId) 设置检测任务Id
 * @method integer getHostCount() 获取关联主机数
 * @method void setHostCount(integer $HostCount) 设置关联主机数
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getFinishTime() 获取结束时间
 * @method void setFinishTime(string $FinishTime) 设置结束时间
 * @method string getPolicyName() 获取策略名称
 * @method void setPolicyName(string $PolicyName) 设置策略名称
 * @method integer getSuccessCount() 获取成功主机数
 * @method void setSuccessCount(integer $SuccessCount) 设置成功主机数
 * @method integer getFailedCount() 获取失败主技数
 * @method void setFailedCount(integer $FailedCount) 设置失败主技数
 * @method integer getTimeoutCount() 获取失败主机数
 * @method void setTimeoutCount(integer $TimeoutCount) 设置失败主机数
 * @method integer getPolicyDetectStatus() 获取1:检测中 2:检测完成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyDetectStatus(integer $PolicyDetectStatus) 设置1:检测中 2:检测完成
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselinePolicyDetect extends AbstractModel
{
    /**
     * @var integer 策略Id
     */
    public $PolicyId;

    /**
     * @var integer 检测任务Id
     */
    public $TaskId;

    /**
     * @var integer 关联主机数
     */
    public $HostCount;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $FinishTime;

    /**
     * @var string 策略名称
     */
    public $PolicyName;

    /**
     * @var integer 成功主机数
     */
    public $SuccessCount;

    /**
     * @var integer 失败主技数
     */
    public $FailedCount;

    /**
     * @var integer 失败主机数
     */
    public $TimeoutCount;

    /**
     * @var integer 1:检测中 2:检测完成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyDetectStatus;

    /**
     * @param integer $PolicyId 策略Id
     * @param integer $TaskId 检测任务Id
     * @param integer $HostCount 关联主机数
     * @param string $StartTime 开始时间
     * @param string $FinishTime 结束时间
     * @param string $PolicyName 策略名称
     * @param integer $SuccessCount 成功主机数
     * @param integer $FailedCount 失败主技数
     * @param integer $TimeoutCount 失败主机数
     * @param integer $PolicyDetectStatus 1:检测中 2:检测完成
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }

        if (array_key_exists("TimeoutCount",$param) and $param["TimeoutCount"] !== null) {
            $this->TimeoutCount = $param["TimeoutCount"];
        }

        if (array_key_exists("PolicyDetectStatus",$param) and $param["PolicyDetectStatus"] !== null) {
            $this->PolicyDetectStatus = $param["PolicyDetectStatus"];
        }
    }
}

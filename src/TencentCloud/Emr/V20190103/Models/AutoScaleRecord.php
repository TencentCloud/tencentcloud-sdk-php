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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 弹性扩缩容记录
 *
 * @method string getStrategyName() 获取扩缩容规则名。
 * @method void setStrategyName(string $StrategyName) 设置扩缩容规则名。
 * @method string getScaleAction() 获取"SCALE_OUT"和"SCALE_IN"，分别表示扩容和缩容。
 * @method void setScaleAction(string $ScaleAction) 设置"SCALE_OUT"和"SCALE_IN"，分别表示扩容和缩容。
 * @method string getActionStatus() 获取取值为"SUCCESS","FAILED","PART_SUCCESS","IN_PROCESS"，分别表示成功、失败、部分成功和流程中。
 * @method void setActionStatus(string $ActionStatus) 设置取值为"SUCCESS","FAILED","PART_SUCCESS","IN_PROCESS"，分别表示成功、失败、部分成功和流程中。
 * @method string getActionTime() 获取流程触发时间。
 * @method void setActionTime(string $ActionTime) 设置流程触发时间。
 * @method string getScaleInfo() 获取扩缩容相关描述信息。
 * @method void setScaleInfo(string $ScaleInfo) 设置扩缩容相关描述信息。
 * @method integer getExpectScaleNum() 获取只在ScaleAction为SCALE_OUT时有效。
 * @method void setExpectScaleNum(integer $ExpectScaleNum) 设置只在ScaleAction为SCALE_OUT时有效。
 * @method string getEndTime() 获取流程结束时间。
 * @method void setEndTime(string $EndTime) 设置流程结束时间。
 * @method integer getStrategyType() 获取策略类型，按负载或者按时间，1表示负载伸缩，2表示时间伸缩
 * @method void setStrategyType(integer $StrategyType) 设置策略类型，按负载或者按时间，1表示负载伸缩，2表示时间伸缩
 * @method string getSpecInfo() 获取扩容时所使用规格信息。
 * @method void setSpecInfo(string $SpecInfo) 设置扩容时所使用规格信息。
 * @method integer getCompensateFlag() 获取补偿扩容，0表示不开启，1表示开启
 * @method void setCompensateFlag(integer $CompensateFlag) 设置补偿扩容，0表示不开启，1表示开启
 * @method integer getCompensateCount() 获取补偿次数
 * @method void setCompensateCount(integer $CompensateCount) 设置补偿次数
 * @method integer getRetryCount() 获取重试次数
 * @method void setRetryCount(integer $RetryCount) 设置重试次数
 * @method string getRetryInfo() 获取重试信息
 * @method void setRetryInfo(string $RetryInfo) 设置重试信息
 * @method string getRetryEnReason() 获取重试英文描述
 * @method void setRetryEnReason(string $RetryEnReason) 设置重试英文描述
 * @method string getRetryReason() 获取重试描述
 * @method void setRetryReason(string $RetryReason) 设置重试描述
 */
class AutoScaleRecord extends AbstractModel
{
    /**
     * @var string 扩缩容规则名。
     */
    public $StrategyName;

    /**
     * @var string "SCALE_OUT"和"SCALE_IN"，分别表示扩容和缩容。
     */
    public $ScaleAction;

    /**
     * @var string 取值为"SUCCESS","FAILED","PART_SUCCESS","IN_PROCESS"，分别表示成功、失败、部分成功和流程中。
     */
    public $ActionStatus;

    /**
     * @var string 流程触发时间。
     */
    public $ActionTime;

    /**
     * @var string 扩缩容相关描述信息。
     */
    public $ScaleInfo;

    /**
     * @var integer 只在ScaleAction为SCALE_OUT时有效。
     */
    public $ExpectScaleNum;

    /**
     * @var string 流程结束时间。
     */
    public $EndTime;

    /**
     * @var integer 策略类型，按负载或者按时间，1表示负载伸缩，2表示时间伸缩
     */
    public $StrategyType;

    /**
     * @var string 扩容时所使用规格信息。
     */
    public $SpecInfo;

    /**
     * @var integer 补偿扩容，0表示不开启，1表示开启
     */
    public $CompensateFlag;

    /**
     * @var integer 补偿次数
     */
    public $CompensateCount;

    /**
     * @var integer 重试次数
     */
    public $RetryCount;

    /**
     * @var string 重试信息
     */
    public $RetryInfo;

    /**
     * @var string 重试英文描述
     */
    public $RetryEnReason;

    /**
     * @var string 重试描述
     */
    public $RetryReason;

    /**
     * @param string $StrategyName 扩缩容规则名。
     * @param string $ScaleAction "SCALE_OUT"和"SCALE_IN"，分别表示扩容和缩容。
     * @param string $ActionStatus 取值为"SUCCESS","FAILED","PART_SUCCESS","IN_PROCESS"，分别表示成功、失败、部分成功和流程中。
     * @param string $ActionTime 流程触发时间。
     * @param string $ScaleInfo 扩缩容相关描述信息。
     * @param integer $ExpectScaleNum 只在ScaleAction为SCALE_OUT时有效。
     * @param string $EndTime 流程结束时间。
     * @param integer $StrategyType 策略类型，按负载或者按时间，1表示负载伸缩，2表示时间伸缩
     * @param string $SpecInfo 扩容时所使用规格信息。
     * @param integer $CompensateFlag 补偿扩容，0表示不开启，1表示开启
     * @param integer $CompensateCount 补偿次数
     * @param integer $RetryCount 重试次数
     * @param string $RetryInfo 重试信息
     * @param string $RetryEnReason 重试英文描述
     * @param string $RetryReason 重试描述
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
        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("ScaleAction",$param) and $param["ScaleAction"] !== null) {
            $this->ScaleAction = $param["ScaleAction"];
        }

        if (array_key_exists("ActionStatus",$param) and $param["ActionStatus"] !== null) {
            $this->ActionStatus = $param["ActionStatus"];
        }

        if (array_key_exists("ActionTime",$param) and $param["ActionTime"] !== null) {
            $this->ActionTime = $param["ActionTime"];
        }

        if (array_key_exists("ScaleInfo",$param) and $param["ScaleInfo"] !== null) {
            $this->ScaleInfo = $param["ScaleInfo"];
        }

        if (array_key_exists("ExpectScaleNum",$param) and $param["ExpectScaleNum"] !== null) {
            $this->ExpectScaleNum = $param["ExpectScaleNum"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("SpecInfo",$param) and $param["SpecInfo"] !== null) {
            $this->SpecInfo = $param["SpecInfo"];
        }

        if (array_key_exists("CompensateFlag",$param) and $param["CompensateFlag"] !== null) {
            $this->CompensateFlag = $param["CompensateFlag"];
        }

        if (array_key_exists("CompensateCount",$param) and $param["CompensateCount"] !== null) {
            $this->CompensateCount = $param["CompensateCount"];
        }

        if (array_key_exists("RetryCount",$param) and $param["RetryCount"] !== null) {
            $this->RetryCount = $param["RetryCount"];
        }

        if (array_key_exists("RetryInfo",$param) and $param["RetryInfo"] !== null) {
            $this->RetryInfo = $param["RetryInfo"];
        }

        if (array_key_exists("RetryEnReason",$param) and $param["RetryEnReason"] !== null) {
            $this->RetryEnReason = $param["RetryEnReason"];
        }

        if (array_key_exists("RetryReason",$param) and $param["RetryReason"] !== null) {
            $this->RetryReason = $param["RetryReason"];
        }
    }
}

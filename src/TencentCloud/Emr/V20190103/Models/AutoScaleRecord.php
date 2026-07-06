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
 * @method string getStrategyName() 获取<p>扩缩容规则名。</p>
 * @method void setStrategyName(string $StrategyName) 设置<p>扩缩容规则名。</p>
 * @method string getScaleAction() 获取<p>&quot;SCALE_OUT&quot;和&quot;SCALE_IN&quot;，分别表示扩容和缩容。</p>
 * @method void setScaleAction(string $ScaleAction) 设置<p>&quot;SCALE_OUT&quot;和&quot;SCALE_IN&quot;，分别表示扩容和缩容。</p>
 * @method string getActionStatus() 获取<p>取值为&quot;SUCCESS&quot;,&quot;FAILED&quot;,&quot;PART_SUCCESS&quot;,&quot;IN_PROCESS&quot;，分别表示成功、失败、部分成功和流程中。</p>
 * @method void setActionStatus(string $ActionStatus) 设置<p>取值为&quot;SUCCESS&quot;,&quot;FAILED&quot;,&quot;PART_SUCCESS&quot;,&quot;IN_PROCESS&quot;，分别表示成功、失败、部分成功和流程中。</p>
 * @method string getActionTime() 获取<p>流程触发时间。</p>
 * @method void setActionTime(string $ActionTime) 设置<p>流程触发时间。</p>
 * @method string getScaleInfo() 获取<p>扩缩容相关描述信息。</p>
 * @method void setScaleInfo(string $ScaleInfo) 设置<p>扩缩容相关描述信息。</p>
 * @method integer getExpectScaleNum() 获取<p>只在ScaleAction为SCALE_OUT时有效。</p>
 * @method void setExpectScaleNum(integer $ExpectScaleNum) 设置<p>只在ScaleAction为SCALE_OUT时有效。</p>
 * @method string getEndTime() 获取<p>流程结束时间。</p>
 * @method void setEndTime(string $EndTime) 设置<p>流程结束时间。</p>
 * @method integer getStrategyType() 获取<p>策略类型，按负载或者按时间，1表示负载伸缩，2表示时间伸缩</p>
 * @method void setStrategyType(integer $StrategyType) 设置<p>策略类型，按负载或者按时间，1表示负载伸缩，2表示时间伸缩</p>
 * @method string getSpecInfo() 获取<p>扩容时所使用规格信息。</p>
 * @method void setSpecInfo(string $SpecInfo) 设置<p>扩容时所使用规格信息。</p>
 * @method integer getCompensateFlag() 获取<p>补偿扩容，0表示不开启，1表示开启</p>
 * @method void setCompensateFlag(integer $CompensateFlag) 设置<p>补偿扩容，0表示不开启，1表示开启</p>
 * @method integer getCompensateCount() 获取<p>补偿次数</p>
 * @method void setCompensateCount(integer $CompensateCount) 设置<p>补偿次数</p>
 * @method integer getRetryCount() 获取<p>重试次数</p>
 * @method void setRetryCount(integer $RetryCount) 设置<p>重试次数</p>
 * @method string getRetryInfo() 获取<p>重试信息</p>
 * @method void setRetryInfo(string $RetryInfo) 设置<p>重试信息</p>
 * @method string getRetryEnReason() 获取<p>重试英文描述</p>
 * @method void setRetryEnReason(string $RetryEnReason) 设置<p>重试英文描述</p>
 * @method string getRetryReason() 获取<p>重试描述</p>
 * @method void setRetryReason(string $RetryReason) 设置<p>重试描述</p>
 * @method integer getShortageClass() 获取<p>缺失分类</p>
 * @method void setShortageClass(integer $ShortageClass) 设置<p>缺失分类</p>
 */
class AutoScaleRecord extends AbstractModel
{
    /**
     * @var string <p>扩缩容规则名。</p>
     */
    public $StrategyName;

    /**
     * @var string <p>&quot;SCALE_OUT&quot;和&quot;SCALE_IN&quot;，分别表示扩容和缩容。</p>
     */
    public $ScaleAction;

    /**
     * @var string <p>取值为&quot;SUCCESS&quot;,&quot;FAILED&quot;,&quot;PART_SUCCESS&quot;,&quot;IN_PROCESS&quot;，分别表示成功、失败、部分成功和流程中。</p>
     */
    public $ActionStatus;

    /**
     * @var string <p>流程触发时间。</p>
     */
    public $ActionTime;

    /**
     * @var string <p>扩缩容相关描述信息。</p>
     */
    public $ScaleInfo;

    /**
     * @var integer <p>只在ScaleAction为SCALE_OUT时有效。</p>
     */
    public $ExpectScaleNum;

    /**
     * @var string <p>流程结束时间。</p>
     */
    public $EndTime;

    /**
     * @var integer <p>策略类型，按负载或者按时间，1表示负载伸缩，2表示时间伸缩</p>
     */
    public $StrategyType;

    /**
     * @var string <p>扩容时所使用规格信息。</p>
     */
    public $SpecInfo;

    /**
     * @var integer <p>补偿扩容，0表示不开启，1表示开启</p>
     */
    public $CompensateFlag;

    /**
     * @var integer <p>补偿次数</p>
     */
    public $CompensateCount;

    /**
     * @var integer <p>重试次数</p>
     */
    public $RetryCount;

    /**
     * @var string <p>重试信息</p>
     */
    public $RetryInfo;

    /**
     * @var string <p>重试英文描述</p>
     */
    public $RetryEnReason;

    /**
     * @var string <p>重试描述</p>
     */
    public $RetryReason;

    /**
     * @var integer <p>缺失分类</p>
     */
    public $ShortageClass;

    /**
     * @param string $StrategyName <p>扩缩容规则名。</p>
     * @param string $ScaleAction <p>&quot;SCALE_OUT&quot;和&quot;SCALE_IN&quot;，分别表示扩容和缩容。</p>
     * @param string $ActionStatus <p>取值为&quot;SUCCESS&quot;,&quot;FAILED&quot;,&quot;PART_SUCCESS&quot;,&quot;IN_PROCESS&quot;，分别表示成功、失败、部分成功和流程中。</p>
     * @param string $ActionTime <p>流程触发时间。</p>
     * @param string $ScaleInfo <p>扩缩容相关描述信息。</p>
     * @param integer $ExpectScaleNum <p>只在ScaleAction为SCALE_OUT时有效。</p>
     * @param string $EndTime <p>流程结束时间。</p>
     * @param integer $StrategyType <p>策略类型，按负载或者按时间，1表示负载伸缩，2表示时间伸缩</p>
     * @param string $SpecInfo <p>扩容时所使用规格信息。</p>
     * @param integer $CompensateFlag <p>补偿扩容，0表示不开启，1表示开启</p>
     * @param integer $CompensateCount <p>补偿次数</p>
     * @param integer $RetryCount <p>重试次数</p>
     * @param string $RetryInfo <p>重试信息</p>
     * @param string $RetryEnReason <p>重试英文描述</p>
     * @param string $RetryReason <p>重试描述</p>
     * @param integer $ShortageClass <p>缺失分类</p>
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

        if (array_key_exists("ShortageClass",$param) and $param["ShortageClass"] !== null) {
            $this->ShortageClass = $param["ShortageClass"];
        }
    }
}

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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTokenPlanPersonalPackage返回参数结构体
 *
 * @method string getProductType() 获取<p>产品类型。</p>
 * @method void setProductType(string $ProductType) 设置<p>产品类型。</p>
 * @method string getPackageStatus() 获取<p>套餐状态。取值：active（生效中）、processing（处理中）、failed（创建失败）、isolated（隔离/欠费）、destroyed（已销毁）、used_up（额度用尽）、stopped（已停止）、unpurchased（未购买）。</p>
 * @method void setPackageStatus(string $PackageStatus) 设置<p>套餐状态。取值：active（生效中）、processing（处理中）、failed（创建失败）、isolated（隔离/欠费）、destroyed（已销毁）、used_up（额度用尽）、stopped（已停止）、unpurchased（未购买）。</p>
 * @method string getResourceId() 获取<p>计费资源ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>计费资源ID</p>
 * @method string getTotalCredits() 获取<p>总额度。</p>
 * @method void setTotalCredits(string $TotalCredits) 设置<p>总额度。</p>
 * @method string getTotalUsed() 获取<p>已使用额度。</p>
 * @method void setTotalUsed(string $TotalUsed) 设置<p>已使用额度。</p>
 * @method string getCycleCredits() 获取<p>单周期额度。</p>
 * @method void setCycleCredits(string $CycleCredits) 设置<p>单周期额度。</p>
 * @method integer getTotalCycles() 获取<p>总周期数。</p>
 * @method void setTotalCycles(integer $TotalCycles) 设置<p>总周期数。</p>
 * @method integer getCurrentCycle() 获取<p>当前周期序号。</p>
 * @method void setCurrentCycle(integer $CurrentCycle) 设置<p>当前周期序号。</p>
 * @method integer getRemainCycles() 获取<p>剩余周期数。</p>
 * @method void setRemainCycles(integer $RemainCycles) 设置<p>剩余周期数。</p>
 * @method string getStartTime() 获取<p>套餐生效时间，ISO 8601 格式。</p>
 * @method void setStartTime(string $StartTime) 设置<p>套餐生效时间，ISO 8601 格式。</p>
 * @method string getExpireTime() 获取<p>套餐过期时间，ISO 8601 格式。</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>套餐过期时间，ISO 8601 格式。</p>
 * @method string getPeriodEndDate() 获取<p>当前周期到期日，ISO 8601 格式。</p>
 * @method void setPeriodEndDate(string $PeriodEndDate) 设置<p>当前周期到期日，ISO 8601 格式。</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费标识。取值：0（未开启）、1（已开启）。</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标识。取值：0（未开启）、1（已开启）。</p>
 * @method integer getOutputToken() 获取<p>输出token数</p><p>单位：tokens</p>
 * @method void setOutputToken(integer $OutputToken) 设置<p>输出token数</p><p>单位：tokens</p>
 * @method integer getInputToken() 获取<p>输入token数</p><p>单位：token</p>
 * @method void setInputToken(integer $InputToken) 设置<p>输入token数</p><p>单位：token</p>
 * @method integer getCacheToken() 获取<p>缓存命中token数</p><p>单位：token</p>
 * @method void setCacheToken(integer $CacheToken) 设置<p>缓存命中token数</p><p>单位：token</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTokenPlanPersonalPackageResponse extends AbstractModel
{
    /**
     * @var string <p>产品类型。</p>
     */
    public $ProductType;

    /**
     * @var string <p>套餐状态。取值：active（生效中）、processing（处理中）、failed（创建失败）、isolated（隔离/欠费）、destroyed（已销毁）、used_up（额度用尽）、stopped（已停止）、unpurchased（未购买）。</p>
     */
    public $PackageStatus;

    /**
     * @var string <p>计费资源ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>总额度。</p>
     */
    public $TotalCredits;

    /**
     * @var string <p>已使用额度。</p>
     */
    public $TotalUsed;

    /**
     * @var string <p>单周期额度。</p>
     */
    public $CycleCredits;

    /**
     * @var integer <p>总周期数。</p>
     */
    public $TotalCycles;

    /**
     * @var integer <p>当前周期序号。</p>
     */
    public $CurrentCycle;

    /**
     * @var integer <p>剩余周期数。</p>
     */
    public $RemainCycles;

    /**
     * @var string <p>套餐生效时间，ISO 8601 格式。</p>
     */
    public $StartTime;

    /**
     * @var string <p>套餐过期时间，ISO 8601 格式。</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>当前周期到期日，ISO 8601 格式。</p>
     */
    public $PeriodEndDate;

    /**
     * @var integer <p>自动续费标识。取值：0（未开启）、1（已开启）。</p>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>输出token数</p><p>单位：tokens</p>
     */
    public $OutputToken;

    /**
     * @var integer <p>输入token数</p><p>单位：token</p>
     */
    public $InputToken;

    /**
     * @var integer <p>缓存命中token数</p><p>单位：token</p>
     */
    public $CacheToken;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ProductType <p>产品类型。</p>
     * @param string $PackageStatus <p>套餐状态。取值：active（生效中）、processing（处理中）、failed（创建失败）、isolated（隔离/欠费）、destroyed（已销毁）、used_up（额度用尽）、stopped（已停止）、unpurchased（未购买）。</p>
     * @param string $ResourceId <p>计费资源ID</p>
     * @param string $TotalCredits <p>总额度。</p>
     * @param string $TotalUsed <p>已使用额度。</p>
     * @param string $CycleCredits <p>单周期额度。</p>
     * @param integer $TotalCycles <p>总周期数。</p>
     * @param integer $CurrentCycle <p>当前周期序号。</p>
     * @param integer $RemainCycles <p>剩余周期数。</p>
     * @param string $StartTime <p>套餐生效时间，ISO 8601 格式。</p>
     * @param string $ExpireTime <p>套餐过期时间，ISO 8601 格式。</p>
     * @param string $PeriodEndDate <p>当前周期到期日，ISO 8601 格式。</p>
     * @param integer $AutoRenewFlag <p>自动续费标识。取值：0（未开启）、1（已开启）。</p>
     * @param integer $OutputToken <p>输出token数</p><p>单位：tokens</p>
     * @param integer $InputToken <p>输入token数</p><p>单位：token</p>
     * @param integer $CacheToken <p>缓存命中token数</p><p>单位：token</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("PackageStatus",$param) and $param["PackageStatus"] !== null) {
            $this->PackageStatus = $param["PackageStatus"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("TotalCredits",$param) and $param["TotalCredits"] !== null) {
            $this->TotalCredits = $param["TotalCredits"];
        }

        if (array_key_exists("TotalUsed",$param) and $param["TotalUsed"] !== null) {
            $this->TotalUsed = $param["TotalUsed"];
        }

        if (array_key_exists("CycleCredits",$param) and $param["CycleCredits"] !== null) {
            $this->CycleCredits = $param["CycleCredits"];
        }

        if (array_key_exists("TotalCycles",$param) and $param["TotalCycles"] !== null) {
            $this->TotalCycles = $param["TotalCycles"];
        }

        if (array_key_exists("CurrentCycle",$param) and $param["CurrentCycle"] !== null) {
            $this->CurrentCycle = $param["CurrentCycle"];
        }

        if (array_key_exists("RemainCycles",$param) and $param["RemainCycles"] !== null) {
            $this->RemainCycles = $param["RemainCycles"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("PeriodEndDate",$param) and $param["PeriodEndDate"] !== null) {
            $this->PeriodEndDate = $param["PeriodEndDate"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("OutputToken",$param) and $param["OutputToken"] !== null) {
            $this->OutputToken = $param["OutputToken"];
        }

        if (array_key_exists("InputToken",$param) and $param["InputToken"] !== null) {
            $this->InputToken = $param["InputToken"];
        }

        if (array_key_exists("CacheToken",$param) and $param["CacheToken"] !== null) {
            $this->CacheToken = $param["CacheToken"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

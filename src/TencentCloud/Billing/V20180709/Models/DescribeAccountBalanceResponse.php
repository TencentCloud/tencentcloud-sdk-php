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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccountBalance返回参数结构体
 *
 * @method integer getBalance() 获取<p>接口做过变更,为兼容老接口,本字段与RealBalance相同,为当前真实可用余额,单位 分</p>
 * @method void setBalance(integer $Balance) 设置<p>接口做过变更,为兼容老接口,本字段与RealBalance相同,为当前真实可用余额,单位 分</p>
 * @method integer getUin() 获取<p>查询的用户Uin</p>
 * @method void setUin(integer $Uin) 设置<p>查询的用户Uin</p>
 * @method float getRealBalance() 获取<p>当前真实可用余额,单位 分。RealBalance=CashAccountBalance+IncomeIntoAccountBalance+PresentAccountBalance-FreezeAmount-OweAmount</p><p>单位：分</p>
 * @method void setRealBalance(float $RealBalance) 设置<p>当前真实可用余额,单位 分。RealBalance=CashAccountBalance+IncomeIntoAccountBalance+PresentAccountBalance-FreezeAmount-OweAmount</p><p>单位：分</p>
 * @method float getCashAccountBalance() 获取<p>现金账户余额,单位 分</p>
 * @method void setCashAccountBalance(float $CashAccountBalance) 设置<p>现金账户余额,单位 分</p>
 * @method float getIncomeIntoAccountBalance() 获取<p>收益转入账户余额,单位 分</p>
 * @method void setIncomeIntoAccountBalance(float $IncomeIntoAccountBalance) 设置<p>收益转入账户余额,单位 分</p>
 * @method float getPresentAccountBalance() 获取<p>赠送账户余额,单位 分</p>
 * @method void setPresentAccountBalance(float $PresentAccountBalance) 设置<p>赠送账户余额,单位 分</p>
 * @method float getFreezeAmount() 获取<p>冻结金额,单位 分</p>
 * @method void setFreezeAmount(float $FreezeAmount) 设置<p>冻结金额,单位 分</p>
 * @method float getOweAmount() 获取<p>欠费金额,单位 分</p>
 * @method void setOweAmount(float $OweAmount) 设置<p>欠费金额,单位 分</p>
 * @method boolean getIsAllowArrears() 获取<p>是否允许欠费消费</p>
 * @method void setIsAllowArrears(boolean $IsAllowArrears) 设置<p>是否允许欠费消费</p>
 * @method boolean getIsCreditLimited() 获取<p>是否限制信用额度</p>
 * @method void setIsCreditLimited(boolean $IsCreditLimited) 设置<p>是否限制信用额度</p>
 * @method float getCreditAmount() 获取<p>信用额度,单位 分</p>
 * @method void setCreditAmount(float $CreditAmount) 设置<p>信用额度,单位 分</p>
 * @method float getCreditBalance() 获取<p>可用信用额度,单位 分。CreditBalance=CashAccountBalance+IncomeIntoAccountBalance+PresentAccountBalance+CreditAmount-OweAmount</p><p>单位：分</p>
 * @method void setCreditBalance(float $CreditBalance) 设置<p>可用信用额度,单位 分。CreditBalance=CashAccountBalance+IncomeIntoAccountBalance+PresentAccountBalance+CreditAmount-OweAmount</p><p>单位：分</p>
 * @method float getRealCreditBalance() 获取<p>真实可用信用额度,单位 分。RealCreditBalance=CreditBalance-FreezeAmount</p><p>单位：分</p>
 * @method void setRealCreditBalance(float $RealCreditBalance) 设置<p>真实可用信用额度,单位 分。RealCreditBalance=CreditBalance-FreezeAmount</p><p>单位：分</p>
 * @method float getTempCredit() 获取<p>临时额度，单位 分</p>
 * @method void setTempCredit(float $TempCredit) 设置<p>临时额度，单位 分</p>
 * @method array getTempAmountInfoList() 获取<p>临时额度详情</p>
 * @method void setTempAmountInfoList(array $TempAmountInfoList) 设置<p>临时额度详情</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAccountBalanceResponse extends AbstractModel
{
    /**
     * @var integer <p>接口做过变更,为兼容老接口,本字段与RealBalance相同,为当前真实可用余额,单位 分</p>
     */
    public $Balance;

    /**
     * @var integer <p>查询的用户Uin</p>
     */
    public $Uin;

    /**
     * @var float <p>当前真实可用余额,单位 分。RealBalance=CashAccountBalance+IncomeIntoAccountBalance+PresentAccountBalance-FreezeAmount-OweAmount</p><p>单位：分</p>
     */
    public $RealBalance;

    /**
     * @var float <p>现金账户余额,单位 分</p>
     */
    public $CashAccountBalance;

    /**
     * @var float <p>收益转入账户余额,单位 分</p>
     */
    public $IncomeIntoAccountBalance;

    /**
     * @var float <p>赠送账户余额,单位 分</p>
     */
    public $PresentAccountBalance;

    /**
     * @var float <p>冻结金额,单位 分</p>
     */
    public $FreezeAmount;

    /**
     * @var float <p>欠费金额,单位 分</p>
     */
    public $OweAmount;

    /**
     * @var boolean <p>是否允许欠费消费</p>
     * @deprecated
     */
    public $IsAllowArrears;

    /**
     * @var boolean <p>是否限制信用额度</p>
     * @deprecated
     */
    public $IsCreditLimited;

    /**
     * @var float <p>信用额度,单位 分</p>
     */
    public $CreditAmount;

    /**
     * @var float <p>可用信用额度,单位 分。CreditBalance=CashAccountBalance+IncomeIntoAccountBalance+PresentAccountBalance+CreditAmount-OweAmount</p><p>单位：分</p>
     */
    public $CreditBalance;

    /**
     * @var float <p>真实可用信用额度,单位 分。RealCreditBalance=CreditBalance-FreezeAmount</p><p>单位：分</p>
     */
    public $RealCreditBalance;

    /**
     * @var float <p>临时额度，单位 分</p>
     */
    public $TempCredit;

    /**
     * @var array <p>临时额度详情</p>
     */
    public $TempAmountInfoList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Balance <p>接口做过变更,为兼容老接口,本字段与RealBalance相同,为当前真实可用余额,单位 分</p>
     * @param integer $Uin <p>查询的用户Uin</p>
     * @param float $RealBalance <p>当前真实可用余额,单位 分。RealBalance=CashAccountBalance+IncomeIntoAccountBalance+PresentAccountBalance-FreezeAmount-OweAmount</p><p>单位：分</p>
     * @param float $CashAccountBalance <p>现金账户余额,单位 分</p>
     * @param float $IncomeIntoAccountBalance <p>收益转入账户余额,单位 分</p>
     * @param float $PresentAccountBalance <p>赠送账户余额,单位 分</p>
     * @param float $FreezeAmount <p>冻结金额,单位 分</p>
     * @param float $OweAmount <p>欠费金额,单位 分</p>
     * @param boolean $IsAllowArrears <p>是否允许欠费消费</p>
     * @param boolean $IsCreditLimited <p>是否限制信用额度</p>
     * @param float $CreditAmount <p>信用额度,单位 分</p>
     * @param float $CreditBalance <p>可用信用额度,单位 分。CreditBalance=CashAccountBalance+IncomeIntoAccountBalance+PresentAccountBalance+CreditAmount-OweAmount</p><p>单位：分</p>
     * @param float $RealCreditBalance <p>真实可用信用额度,单位 分。RealCreditBalance=CreditBalance-FreezeAmount</p><p>单位：分</p>
     * @param float $TempCredit <p>临时额度，单位 分</p>
     * @param array $TempAmountInfoList <p>临时额度详情</p>
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
        if (array_key_exists("Balance",$param) and $param["Balance"] !== null) {
            $this->Balance = $param["Balance"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("RealBalance",$param) and $param["RealBalance"] !== null) {
            $this->RealBalance = $param["RealBalance"];
        }

        if (array_key_exists("CashAccountBalance",$param) and $param["CashAccountBalance"] !== null) {
            $this->CashAccountBalance = $param["CashAccountBalance"];
        }

        if (array_key_exists("IncomeIntoAccountBalance",$param) and $param["IncomeIntoAccountBalance"] !== null) {
            $this->IncomeIntoAccountBalance = $param["IncomeIntoAccountBalance"];
        }

        if (array_key_exists("PresentAccountBalance",$param) and $param["PresentAccountBalance"] !== null) {
            $this->PresentAccountBalance = $param["PresentAccountBalance"];
        }

        if (array_key_exists("FreezeAmount",$param) and $param["FreezeAmount"] !== null) {
            $this->FreezeAmount = $param["FreezeAmount"];
        }

        if (array_key_exists("OweAmount",$param) and $param["OweAmount"] !== null) {
            $this->OweAmount = $param["OweAmount"];
        }

        if (array_key_exists("IsAllowArrears",$param) and $param["IsAllowArrears"] !== null) {
            $this->IsAllowArrears = $param["IsAllowArrears"];
        }

        if (array_key_exists("IsCreditLimited",$param) and $param["IsCreditLimited"] !== null) {
            $this->IsCreditLimited = $param["IsCreditLimited"];
        }

        if (array_key_exists("CreditAmount",$param) and $param["CreditAmount"] !== null) {
            $this->CreditAmount = $param["CreditAmount"];
        }

        if (array_key_exists("CreditBalance",$param) and $param["CreditBalance"] !== null) {
            $this->CreditBalance = $param["CreditBalance"];
        }

        if (array_key_exists("RealCreditBalance",$param) and $param["RealCreditBalance"] !== null) {
            $this->RealCreditBalance = $param["RealCreditBalance"];
        }

        if (array_key_exists("TempCredit",$param) and $param["TempCredit"] !== null) {
            $this->TempCredit = $param["TempCredit"];
        }

        if (array_key_exists("TempAmountInfoList",$param) and $param["TempAmountInfoList"] !== null) {
            $this->TempAmountInfoList = [];
            foreach ($param["TempAmountInfoList"] as $key => $value){
                $obj = new UinTempAmountModel();
                $obj->deserialize($value);
                array_push($this->TempAmountInfoList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

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
 * DescribeOrgMemberAccountBalanceData
 *
 * @method string getMemberUin() 获取<p>成员账号Uin</p>
 * @method void setMemberUin(string $MemberUin) 设置<p>成员账号Uin</p>
 * @method string getMemberName() 获取<p>成员名称</p>
 * @method void setMemberName(string $MemberName) 设置<p>成员名称</p>
 * @method boolean getIsCreditAccount() 获取<p>是否为信用账户</p>
 * @method void setIsCreditAccount(boolean $IsCreditAccount) 设置<p>是否为信用账户</p>
 * @method float getRealBalance() 获取<p>当前真实可用余额</p><p>单位：分</p>
 * @method void setRealBalance(float $RealBalance) 设置<p>当前真实可用余额</p><p>单位：分</p>
 * @method float getCashAccountBalance() 获取<p>现金账户余额</p><p>单位：分</p>
 * @method void setCashAccountBalance(float $CashAccountBalance) 设置<p>现金账户余额</p><p>单位：分</p>
 * @method float getCreditAmount() 获取<p>信用额度</p><p>单位：分</p><p>信用额度 = 基础信用额度 + 临时信用额度</p>
 * @method void setCreditAmount(float $CreditAmount) 设置<p>信用额度</p><p>单位：分</p><p>信用额度 = 基础信用额度 + 临时信用额度</p>
 * @method float getTempCredit() 获取<p>临时信用额度</p><p>单位：分</p>
 * @method void setTempCredit(float $TempCredit) 设置<p>临时信用额度</p><p>单位：分</p>
 * @method float getBasicCreditAmount() 获取<p>基础信用额度</p><p>单位：分</p>
 * @method void setBasicCreditAmount(float $BasicCreditAmount) 设置<p>基础信用额度</p><p>单位：分</p>
 * @method float getOweAmount() 获取<p>欠费金额</p><p>单位：分</p>
 * @method void setOweAmount(float $OweAmount) 设置<p>欠费金额</p><p>单位：分</p>
 */
class DescribeOrgMemberAccountBalanceData extends AbstractModel
{
    /**
     * @var string <p>成员账号Uin</p>
     */
    public $MemberUin;

    /**
     * @var string <p>成员名称</p>
     */
    public $MemberName;

    /**
     * @var boolean <p>是否为信用账户</p>
     */
    public $IsCreditAccount;

    /**
     * @var float <p>当前真实可用余额</p><p>单位：分</p>
     */
    public $RealBalance;

    /**
     * @var float <p>现金账户余额</p><p>单位：分</p>
     */
    public $CashAccountBalance;

    /**
     * @var float <p>信用额度</p><p>单位：分</p><p>信用额度 = 基础信用额度 + 临时信用额度</p>
     */
    public $CreditAmount;

    /**
     * @var float <p>临时信用额度</p><p>单位：分</p>
     */
    public $TempCredit;

    /**
     * @var float <p>基础信用额度</p><p>单位：分</p>
     */
    public $BasicCreditAmount;

    /**
     * @var float <p>欠费金额</p><p>单位：分</p>
     */
    public $OweAmount;

    /**
     * @param string $MemberUin <p>成员账号Uin</p>
     * @param string $MemberName <p>成员名称</p>
     * @param boolean $IsCreditAccount <p>是否为信用账户</p>
     * @param float $RealBalance <p>当前真实可用余额</p><p>单位：分</p>
     * @param float $CashAccountBalance <p>现金账户余额</p><p>单位：分</p>
     * @param float $CreditAmount <p>信用额度</p><p>单位：分</p><p>信用额度 = 基础信用额度 + 临时信用额度</p>
     * @param float $TempCredit <p>临时信用额度</p><p>单位：分</p>
     * @param float $BasicCreditAmount <p>基础信用额度</p><p>单位：分</p>
     * @param float $OweAmount <p>欠费金额</p><p>单位：分</p>
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
        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("MemberName",$param) and $param["MemberName"] !== null) {
            $this->MemberName = $param["MemberName"];
        }

        if (array_key_exists("IsCreditAccount",$param) and $param["IsCreditAccount"] !== null) {
            $this->IsCreditAccount = $param["IsCreditAccount"];
        }

        if (array_key_exists("RealBalance",$param) and $param["RealBalance"] !== null) {
            $this->RealBalance = $param["RealBalance"];
        }

        if (array_key_exists("CashAccountBalance",$param) and $param["CashAccountBalance"] !== null) {
            $this->CashAccountBalance = $param["CashAccountBalance"];
        }

        if (array_key_exists("CreditAmount",$param) and $param["CreditAmount"] !== null) {
            $this->CreditAmount = $param["CreditAmount"];
        }

        if (array_key_exists("TempCredit",$param) and $param["TempCredit"] !== null) {
            $this->TempCredit = $param["TempCredit"];
        }

        if (array_key_exists("BasicCreditAmount",$param) and $param["BasicCreditAmount"] !== null) {
            $this->BasicCreditAmount = $param["BasicCreditAmount"];
        }

        if (array_key_exists("OweAmount",$param) and $param["OweAmount"] !== null) {
            $this->OweAmount = $param["OweAmount"];
        }
    }
}

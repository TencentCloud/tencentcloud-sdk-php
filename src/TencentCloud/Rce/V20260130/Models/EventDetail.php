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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件详情
 *
 * @method LoginEvent getLogin() 获取<p>登录</p>
 * @method void setLogin(LoginEvent $Login) 设置<p>登录</p>
 * @method RegisterEvent getRegister() 获取<p>注册（变更用户信息）</p>
 * @method void setRegister(RegisterEvent $Register) 设置<p>注册（变更用户信息）</p>
 * @method CreateOrderEvent getCreateOrder() 获取<p>创建订单</p>
 * @method void setCreateOrder(CreateOrderEvent $CreateOrder) 设置<p>创建订单</p>
 * @method TransactionEvent getTransaction() 获取<p>交易支付</p>
 * @method void setTransaction(TransactionEvent $Transaction) 设置<p>交易支付</p>
 * @method SMSEvent getSms() 获取<p>短信</p>
 * @method void setSms(SMSEvent $Sms) 设置<p>短信</p>
 * @method ChargeBackEvent getChargeBack() 获取<p>拒付</p>
 * @method void setChargeBack(ChargeBackEvent $ChargeBack) 设置<p>拒付</p>
 * @method LogoutEvent getLogout() 获取<p>登出</p>
 * @method void setLogout(LogoutEvent $Logout) 设置<p>登出</p>
 * @method ModifyAccountEvent getModifyAccount() 获取<p>修改账号</p>
 * @method void setModifyAccount(ModifyAccountEvent $ModifyAccount) 设置<p>修改账号</p>
 * @method ModifyPasswordEvent getModifyPassword() 获取<p>修改密码</p>
 * @method void setModifyPassword(ModifyPasswordEvent $ModifyPassword) 设置<p>修改密码</p>
 * @method SecurityVerificationEvent getSecurityVerification() 获取<p>安全验证</p>
 * @method void setSecurityVerification(SecurityVerificationEvent $SecurityVerification) 设置<p>安全验证</p>
 * @method AddPromotionEvent getAddPromotion() 获取<p>参加营销活动</p>
 * @method void setAddPromotion(AddPromotionEvent $AddPromotion) 设置<p>参加营销活动</p>
 * @method RedeemEvent getRedeem() 获取<p>兑奖</p>
 * @method void setRedeem(RedeemEvent $Redeem) 设置<p>兑奖</p>
 * @method WithdrawEvent getWithdraw() 获取<p>提现</p>
 * @method void setWithdraw(WithdrawEvent $Withdraw) 设置<p>提现</p>
 * @method CustEvent getCustEvent() 获取<p>自定义事件</p>
 * @method void setCustEvent(CustEvent $CustEvent) 设置<p>自定义事件</p>
 * @method ScanCodeEvent getScanCode() 获取<p>扫码</p>
 * @method void setScanCode(ScanCodeEvent $ScanCode) 设置<p>扫码</p>
 * @method LuckyDrawEvent getLuckyDraw() 获取<p>抽奖</p>
 * @method void setLuckyDraw(LuckyDrawEvent $LuckyDraw) 设置<p>抽奖</p>
 * @method TaskEvent getTask() 获取<p>做任务</p>
 * @method void setTask(TaskEvent $Task) 设置<p>做任务</p>
 * @method InvitationEvent getInvitation() 获取<p>邀请</p>
 * @method void setInvitation(InvitationEvent $Invitation) 设置<p>邀请</p>
 * @method ClaimRedPacketEvent getClaimRedPacket() 获取<p>领红包</p>
 * @method void setClaimRedPacket(ClaimRedPacketEvent $ClaimRedPacket) 设置<p>领红包</p>
 * @method BrowseEvent getBrowse() 获取<p>浏览</p>
 * @method void setBrowse(BrowseEvent $Browse) 设置<p>浏览</p>
 */
class EventDetail extends AbstractModel
{
    /**
     * @var LoginEvent <p>登录</p>
     */
    public $Login;

    /**
     * @var RegisterEvent <p>注册（变更用户信息）</p>
     */
    public $Register;

    /**
     * @var CreateOrderEvent <p>创建订单</p>
     */
    public $CreateOrder;

    /**
     * @var TransactionEvent <p>交易支付</p>
     */
    public $Transaction;

    /**
     * @var SMSEvent <p>短信</p>
     */
    public $Sms;

    /**
     * @var ChargeBackEvent <p>拒付</p>
     */
    public $ChargeBack;

    /**
     * @var LogoutEvent <p>登出</p>
     */
    public $Logout;

    /**
     * @var ModifyAccountEvent <p>修改账号</p>
     */
    public $ModifyAccount;

    /**
     * @var ModifyPasswordEvent <p>修改密码</p>
     */
    public $ModifyPassword;

    /**
     * @var SecurityVerificationEvent <p>安全验证</p>
     */
    public $SecurityVerification;

    /**
     * @var AddPromotionEvent <p>参加营销活动</p>
     */
    public $AddPromotion;

    /**
     * @var RedeemEvent <p>兑奖</p>
     */
    public $Redeem;

    /**
     * @var WithdrawEvent <p>提现</p>
     */
    public $Withdraw;

    /**
     * @var CustEvent <p>自定义事件</p>
     */
    public $CustEvent;

    /**
     * @var ScanCodeEvent <p>扫码</p>
     */
    public $ScanCode;

    /**
     * @var LuckyDrawEvent <p>抽奖</p>
     */
    public $LuckyDraw;

    /**
     * @var TaskEvent <p>做任务</p>
     */
    public $Task;

    /**
     * @var InvitationEvent <p>邀请</p>
     */
    public $Invitation;

    /**
     * @var ClaimRedPacketEvent <p>领红包</p>
     */
    public $ClaimRedPacket;

    /**
     * @var BrowseEvent <p>浏览</p>
     */
    public $Browse;

    /**
     * @param LoginEvent $Login <p>登录</p>
     * @param RegisterEvent $Register <p>注册（变更用户信息）</p>
     * @param CreateOrderEvent $CreateOrder <p>创建订单</p>
     * @param TransactionEvent $Transaction <p>交易支付</p>
     * @param SMSEvent $Sms <p>短信</p>
     * @param ChargeBackEvent $ChargeBack <p>拒付</p>
     * @param LogoutEvent $Logout <p>登出</p>
     * @param ModifyAccountEvent $ModifyAccount <p>修改账号</p>
     * @param ModifyPasswordEvent $ModifyPassword <p>修改密码</p>
     * @param SecurityVerificationEvent $SecurityVerification <p>安全验证</p>
     * @param AddPromotionEvent $AddPromotion <p>参加营销活动</p>
     * @param RedeemEvent $Redeem <p>兑奖</p>
     * @param WithdrawEvent $Withdraw <p>提现</p>
     * @param CustEvent $CustEvent <p>自定义事件</p>
     * @param ScanCodeEvent $ScanCode <p>扫码</p>
     * @param LuckyDrawEvent $LuckyDraw <p>抽奖</p>
     * @param TaskEvent $Task <p>做任务</p>
     * @param InvitationEvent $Invitation <p>邀请</p>
     * @param ClaimRedPacketEvent $ClaimRedPacket <p>领红包</p>
     * @param BrowseEvent $Browse <p>浏览</p>
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
        if (array_key_exists("Login",$param) and $param["Login"] !== null) {
            $this->Login = new LoginEvent();
            $this->Login->deserialize($param["Login"]);
        }

        if (array_key_exists("Register",$param) and $param["Register"] !== null) {
            $this->Register = new RegisterEvent();
            $this->Register->deserialize($param["Register"]);
        }

        if (array_key_exists("CreateOrder",$param) and $param["CreateOrder"] !== null) {
            $this->CreateOrder = new CreateOrderEvent();
            $this->CreateOrder->deserialize($param["CreateOrder"]);
        }

        if (array_key_exists("Transaction",$param) and $param["Transaction"] !== null) {
            $this->Transaction = new TransactionEvent();
            $this->Transaction->deserialize($param["Transaction"]);
        }

        if (array_key_exists("Sms",$param) and $param["Sms"] !== null) {
            $this->Sms = new SMSEvent();
            $this->Sms->deserialize($param["Sms"]);
        }

        if (array_key_exists("ChargeBack",$param) and $param["ChargeBack"] !== null) {
            $this->ChargeBack = new ChargeBackEvent();
            $this->ChargeBack->deserialize($param["ChargeBack"]);
        }

        if (array_key_exists("Logout",$param) and $param["Logout"] !== null) {
            $this->Logout = new LogoutEvent();
            $this->Logout->deserialize($param["Logout"]);
        }

        if (array_key_exists("ModifyAccount",$param) and $param["ModifyAccount"] !== null) {
            $this->ModifyAccount = new ModifyAccountEvent();
            $this->ModifyAccount->deserialize($param["ModifyAccount"]);
        }

        if (array_key_exists("ModifyPassword",$param) and $param["ModifyPassword"] !== null) {
            $this->ModifyPassword = new ModifyPasswordEvent();
            $this->ModifyPassword->deserialize($param["ModifyPassword"]);
        }

        if (array_key_exists("SecurityVerification",$param) and $param["SecurityVerification"] !== null) {
            $this->SecurityVerification = new SecurityVerificationEvent();
            $this->SecurityVerification->deserialize($param["SecurityVerification"]);
        }

        if (array_key_exists("AddPromotion",$param) and $param["AddPromotion"] !== null) {
            $this->AddPromotion = new AddPromotionEvent();
            $this->AddPromotion->deserialize($param["AddPromotion"]);
        }

        if (array_key_exists("Redeem",$param) and $param["Redeem"] !== null) {
            $this->Redeem = new RedeemEvent();
            $this->Redeem->deserialize($param["Redeem"]);
        }

        if (array_key_exists("Withdraw",$param) and $param["Withdraw"] !== null) {
            $this->Withdraw = new WithdrawEvent();
            $this->Withdraw->deserialize($param["Withdraw"]);
        }

        if (array_key_exists("CustEvent",$param) and $param["CustEvent"] !== null) {
            $this->CustEvent = new CustEvent();
            $this->CustEvent->deserialize($param["CustEvent"]);
        }

        if (array_key_exists("ScanCode",$param) and $param["ScanCode"] !== null) {
            $this->ScanCode = new ScanCodeEvent();
            $this->ScanCode->deserialize($param["ScanCode"]);
        }

        if (array_key_exists("LuckyDraw",$param) and $param["LuckyDraw"] !== null) {
            $this->LuckyDraw = new LuckyDrawEvent();
            $this->LuckyDraw->deserialize($param["LuckyDraw"]);
        }

        if (array_key_exists("Task",$param) and $param["Task"] !== null) {
            $this->Task = new TaskEvent();
            $this->Task->deserialize($param["Task"]);
        }

        if (array_key_exists("Invitation",$param) and $param["Invitation"] !== null) {
            $this->Invitation = new InvitationEvent();
            $this->Invitation->deserialize($param["Invitation"]);
        }

        if (array_key_exists("ClaimRedPacket",$param) and $param["ClaimRedPacket"] !== null) {
            $this->ClaimRedPacket = new ClaimRedPacketEvent();
            $this->ClaimRedPacket->deserialize($param["ClaimRedPacket"]);
        }

        if (array_key_exists("Browse",$param) and $param["Browse"] !== null) {
            $this->Browse = new BrowseEvent();
            $this->Browse->deserialize($param["Browse"]);
        }
    }
}

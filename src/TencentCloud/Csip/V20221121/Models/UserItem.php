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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户信息
 *
 * @method integer getAppID() 获取<p>登录用户appid</p>
 * @method void setAppID(integer $AppID) 设置<p>登录用户appid</p>
 * @method integer getAccountType() 获取<p>用户类型</p>
 * @method void setAccountType(integer $AccountType) 设置<p>用户类型</p>
 * @method integer getPayType() 获取<p>用户付费类型</p>
 * @method void setPayType(integer $PayType) 设置<p>用户付费类型</p>
 * @method integer getTotalQuota() 获取<p>总配额次数</p>
 * @method void setTotalQuota(integer $TotalQuota) 设置<p>总配额次数</p>
 * @method integer getCostQuota() 获取<p>已消耗配额次数</p>
 * @method void setCostQuota(integer $CostQuota) 设置<p>已消耗配额次数</p>
 * @method array getProviders() 获取<p>云厂商信息</p>
 * @method void setProviders(array $Providers) 设置<p>云厂商信息</p>
 * @method string getQuotaFlushType() 获取<p>refresh:下次仍会刷新;expire:下次不再刷新</p>
 * @method void setQuotaFlushType(string $QuotaFlushType) 设置<p>refresh:下次仍会刷新;expire:下次不再刷新</p>
 * @method string getQuotaFlushTime() 获取<p>下次配额刷新时间</p>
 * @method void setQuotaFlushTime(string $QuotaFlushTime) 设置<p>下次配额刷新时间</p>
 * @method integer getQuotaSource() 获取<p>购买类型</p>
 * @method void setQuotaSource(integer $QuotaSource) 设置<p>购买类型</p>
 * @method integer getShareFromAppID() 获取<p>被共享时为共享方appid，自购或无配额时为0</p>
 * @method void setShareFromAppID(integer $ShareFromAppID) 设置<p>被共享时为共享方appid，自购或无配额时为0</p>
 * @method string getShareFromUser() 获取<p>配额共享方账号</p>
 * @method void setShareFromUser(string $ShareFromUser) 设置<p>配额共享方账号</p>
 */
class UserItem extends AbstractModel
{
    /**
     * @var integer <p>登录用户appid</p>
     */
    public $AppID;

    /**
     * @var integer <p>用户类型</p>
     */
    public $AccountType;

    /**
     * @var integer <p>用户付费类型</p>
     */
    public $PayType;

    /**
     * @var integer <p>总配额次数</p>
     */
    public $TotalQuota;

    /**
     * @var integer <p>已消耗配额次数</p>
     */
    public $CostQuota;

    /**
     * @var array <p>云厂商信息</p>
     */
    public $Providers;

    /**
     * @var string <p>refresh:下次仍会刷新;expire:下次不再刷新</p>
     */
    public $QuotaFlushType;

    /**
     * @var string <p>下次配额刷新时间</p>
     */
    public $QuotaFlushTime;

    /**
     * @var integer <p>购买类型</p>
     */
    public $QuotaSource;

    /**
     * @var integer <p>被共享时为共享方appid，自购或无配额时为0</p>
     */
    public $ShareFromAppID;

    /**
     * @var string <p>配额共享方账号</p>
     */
    public $ShareFromUser;

    /**
     * @param integer $AppID <p>登录用户appid</p>
     * @param integer $AccountType <p>用户类型</p>
     * @param integer $PayType <p>用户付费类型</p>
     * @param integer $TotalQuota <p>总配额次数</p>
     * @param integer $CostQuota <p>已消耗配额次数</p>
     * @param array $Providers <p>云厂商信息</p>
     * @param string $QuotaFlushType <p>refresh:下次仍会刷新;expire:下次不再刷新</p>
     * @param string $QuotaFlushTime <p>下次配额刷新时间</p>
     * @param integer $QuotaSource <p>购买类型</p>
     * @param integer $ShareFromAppID <p>被共享时为共享方appid，自购或无配额时为0</p>
     * @param string $ShareFromUser <p>配额共享方账号</p>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("TotalQuota",$param) and $param["TotalQuota"] !== null) {
            $this->TotalQuota = $param["TotalQuota"];
        }

        if (array_key_exists("CostQuota",$param) and $param["CostQuota"] !== null) {
            $this->CostQuota = $param["CostQuota"];
        }

        if (array_key_exists("Providers",$param) and $param["Providers"] !== null) {
            $this->Providers = $param["Providers"];
        }

        if (array_key_exists("QuotaFlushType",$param) and $param["QuotaFlushType"] !== null) {
            $this->QuotaFlushType = $param["QuotaFlushType"];
        }

        if (array_key_exists("QuotaFlushTime",$param) and $param["QuotaFlushTime"] !== null) {
            $this->QuotaFlushTime = $param["QuotaFlushTime"];
        }

        if (array_key_exists("QuotaSource",$param) and $param["QuotaSource"] !== null) {
            $this->QuotaSource = $param["QuotaSource"];
        }

        if (array_key_exists("ShareFromAppID",$param) and $param["ShareFromAppID"] !== null) {
            $this->ShareFromAppID = $param["ShareFromAppID"];
        }

        if (array_key_exists("ShareFromUser",$param) and $param["ShareFromUser"] !== null) {
            $this->ShareFromUser = $param["ShareFromUser"];
        }
    }
}

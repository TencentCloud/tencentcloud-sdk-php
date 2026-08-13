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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费状态信息
 *
 * @method string getDealName() 获取<p>交易订单号</p>
 * @method void setDealName(string $DealName) 设置<p>交易订单号</p>
 * @method string getLastDealName() 获取<p>上一次交易订单号</p>
 * @method void setLastDealName(string $LastDealName) 设置<p>上一次交易订单号</p>
 * @method string getInstanceClass() 获取<p>实例规格，包括：micro、small、medium、large、xlarge、2xlarge等</p>
 * @method void setInstanceClass(string $InstanceClass) 设置<p>实例规格，包括：micro、small、medium、large、xlarge、2xlarge等</p>
 * @method string getTradeStatus() 获取<p>计费任务状态， normal(计费或待计费)、resizing(变配中)、reversing(冲正中，比较短暂的状态)、isolating(隔离中，比较短暂的状态)、isolated(已隔离)、offlining(下线中)、offlined(已下线)、notBilled(未计费)</p>
 * @method void setTradeStatus(string $TradeStatus) 设置<p>计费任务状态， normal(计费或待计费)、resizing(变配中)、reversing(冲正中，比较短暂的状态)、isolating(隔离中，比较短暂的状态)、isolated(已隔离)、offlining(下线中)、offlined(已下线)、notBilled(未计费)</p>
 * @method string getExpireTime() 获取<p>到期时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>到期时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method string getOfflineTime() 获取<p>下线时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setOfflineTime(string $OfflineTime) 设置<p>下线时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method string getIsolateTime() 获取<p>隔离时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setIsolateTime(string $IsolateTime) 设置<p>隔离时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method string getOfflineReason() 获取<p>下线原因</p>
 * @method void setOfflineReason(string $OfflineReason) 设置<p>下线原因</p>
 * @method string getIsolateReason() 获取<p>隔离原因</p>
 * @method void setIsolateReason(string $IsolateReason) 设置<p>隔离原因</p>
 * @method string getPayType() 获取<p>付费类型，包括：postpay(后付费)、prepay(预付费)</p>
 * @method void setPayType(string $PayType) 设置<p>付费类型，包括：postpay(后付费)、prepay(预付费)</p>
 * @method string getBillingType() 获取<p>任务计费类型，包括：billing(计费)、notBilling(不计费)、 promotions(促销活动中)</p>
 * @method void setBillingType(string $BillingType) 设置<p>任务计费类型，包括：billing(计费)、notBilling(不计费)、 promotions(促销活动中)</p>
 */
class TradeInfo extends AbstractModel
{
    /**
     * @var string <p>交易订单号</p>
     */
    public $DealName;

    /**
     * @var string <p>上一次交易订单号</p>
     */
    public $LastDealName;

    /**
     * @var string <p>实例规格，包括：micro、small、medium、large、xlarge、2xlarge等</p>
     */
    public $InstanceClass;

    /**
     * @var string <p>计费任务状态， normal(计费或待计费)、resizing(变配中)、reversing(冲正中，比较短暂的状态)、isolating(隔离中，比较短暂的状态)、isolated(已隔离)、offlining(下线中)、offlined(已下线)、notBilled(未计费)</p>
     */
    public $TradeStatus;

    /**
     * @var string <p>到期时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>下线时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $OfflineTime;

    /**
     * @var string <p>隔离时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $IsolateTime;

    /**
     * @var string <p>下线原因</p>
     */
    public $OfflineReason;

    /**
     * @var string <p>隔离原因</p>
     */
    public $IsolateReason;

    /**
     * @var string <p>付费类型，包括：postpay(后付费)、prepay(预付费)</p>
     */
    public $PayType;

    /**
     * @var string <p>任务计费类型，包括：billing(计费)、notBilling(不计费)、 promotions(促销活动中)</p>
     */
    public $BillingType;

    /**
     * @param string $DealName <p>交易订单号</p>
     * @param string $LastDealName <p>上一次交易订单号</p>
     * @param string $InstanceClass <p>实例规格，包括：micro、small、medium、large、xlarge、2xlarge等</p>
     * @param string $TradeStatus <p>计费任务状态， normal(计费或待计费)、resizing(变配中)、reversing(冲正中，比较短暂的状态)、isolating(隔离中，比较短暂的状态)、isolated(已隔离)、offlining(下线中)、offlined(已下线)、notBilled(未计费)</p>
     * @param string $ExpireTime <p>到期时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param string $OfflineTime <p>下线时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param string $IsolateTime <p>隔离时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param string $OfflineReason <p>下线原因</p>
     * @param string $IsolateReason <p>隔离原因</p>
     * @param string $PayType <p>付费类型，包括：postpay(后付费)、prepay(预付费)</p>
     * @param string $BillingType <p>任务计费类型，包括：billing(计费)、notBilling(不计费)、 promotions(促销活动中)</p>
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
        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("LastDealName",$param) and $param["LastDealName"] !== null) {
            $this->LastDealName = $param["LastDealName"];
        }

        if (array_key_exists("InstanceClass",$param) and $param["InstanceClass"] !== null) {
            $this->InstanceClass = $param["InstanceClass"];
        }

        if (array_key_exists("TradeStatus",$param) and $param["TradeStatus"] !== null) {
            $this->TradeStatus = $param["TradeStatus"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("OfflineReason",$param) and $param["OfflineReason"] !== null) {
            $this->OfflineReason = $param["OfflineReason"];
        }

        if (array_key_exists("IsolateReason",$param) and $param["IsolateReason"] !== null) {
            $this->IsolateReason = $param["IsolateReason"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("BillingType",$param) and $param["BillingType"] !== null) {
            $this->BillingType = $param["BillingType"];
        }
    }
}

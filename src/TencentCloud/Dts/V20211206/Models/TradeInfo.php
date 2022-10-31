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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费状态信息
 *
 * @method string getDealName() 获取交易订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDealName(string $DealName) 设置交易订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastDealName() 获取上一次交易订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastDealName(string $LastDealName) 设置上一次交易订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceClass() 获取实例规格，包括：micro、small、medium、large、xlarge、2xlarge等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceClass(string $InstanceClass) 设置实例规格，包括：micro、small、medium、large、xlarge、2xlarge等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTradeStatus() 获取计费任务状态， normal(计费或待计费)、resizing(变配中)、reversing(冲正中，比较短暂的状态)、isolating(隔离中，比较短暂的状态)、isolated(已隔离)、offlining(下线中)、offlined(已下线)、notBilled(未计费)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradeStatus(string $TradeStatus) 设置计费任务状态， normal(计费或待计费)、resizing(变配中)、reversing(冲正中，比较短暂的状态)、isolating(隔离中，比较短暂的状态)、isolated(已隔离)、offlining(下线中)、offlined(已下线)、notBilled(未计费)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取到期时间，格式为"yyyy-mm-dd hh:mm:ss"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置到期时间，格式为"yyyy-mm-dd hh:mm:ss"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOfflineTime() 获取下线时间，格式为"yyyy-mm-dd hh:mm:ss"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineTime(string $OfflineTime) 设置下线时间，格式为"yyyy-mm-dd hh:mm:ss"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolateTime() 获取隔离时间，格式为"yyyy-mm-dd hh:mm:ss"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolateTime(string $IsolateTime) 设置隔离时间，格式为"yyyy-mm-dd hh:mm:ss"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOfflineReason() 获取下线原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineReason(string $OfflineReason) 设置下线原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolateReason() 获取隔离原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolateReason(string $IsolateReason) 设置隔离原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayType() 获取付费类型，包括：postpay(后付费)、prepay(预付费)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayType(string $PayType) 设置付费类型，包括：postpay(后付费)、prepay(预付费)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillingType() 获取任务计费类型，包括：billing(计费)、notBilling(不计费)、 promotions(促销活动中)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingType(string $BillingType) 设置任务计费类型，包括：billing(计费)、notBilling(不计费)、 promotions(促销活动中)
注意：此字段可能返回 null，表示取不到有效值。
 */
class TradeInfo extends AbstractModel
{
    /**
     * @var string 交易订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DealName;

    /**
     * @var string 上一次交易订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastDealName;

    /**
     * @var string 实例规格，包括：micro、small、medium、large、xlarge、2xlarge等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceClass;

    /**
     * @var string 计费任务状态， normal(计费或待计费)、resizing(变配中)、reversing(冲正中，比较短暂的状态)、isolating(隔离中，比较短暂的状态)、isolated(已隔离)、offlining(下线中)、offlined(已下线)、notBilled(未计费)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TradeStatus;

    /**
     * @var string 到期时间，格式为"yyyy-mm-dd hh:mm:ss"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 下线时间，格式为"yyyy-mm-dd hh:mm:ss"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineTime;

    /**
     * @var string 隔离时间，格式为"yyyy-mm-dd hh:mm:ss"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolateTime;

    /**
     * @var string 下线原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineReason;

    /**
     * @var string 隔离原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolateReason;

    /**
     * @var string 付费类型，包括：postpay(后付费)、prepay(预付费)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayType;

    /**
     * @var string 任务计费类型，包括：billing(计费)、notBilling(不计费)、 promotions(促销活动中)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingType;

    /**
     * @param string $DealName 交易订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastDealName 上一次交易订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceClass 实例规格，包括：micro、small、medium、large、xlarge、2xlarge等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TradeStatus 计费任务状态， normal(计费或待计费)、resizing(变配中)、reversing(冲正中，比较短暂的状态)、isolating(隔离中，比较短暂的状态)、isolated(已隔离)、offlining(下线中)、offlined(已下线)、notBilled(未计费)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 到期时间，格式为"yyyy-mm-dd hh:mm:ss"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OfflineTime 下线时间，格式为"yyyy-mm-dd hh:mm:ss"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolateTime 隔离时间，格式为"yyyy-mm-dd hh:mm:ss"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OfflineReason 下线原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolateReason 隔离原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayType 付费类型，包括：postpay(后付费)、prepay(预付费)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillingType 任务计费类型，包括：billing(计费)、notBilling(不计费)、 promotions(促销活动中)
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

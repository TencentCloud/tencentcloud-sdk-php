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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 商户支付方式数据
 *
 * @method string getPayCurrency() 获取支付币种
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayCurrency(string $PayCurrency) 设置支付币种
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayIcon() 获取支付图标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayIcon(string $PayIcon) 设置支付图标
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayInternalName() 获取支付名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayInternalName(string $PayInternalName) 设置支付名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayName() 获取支付简称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayName(string $PayName) 设置支付简称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaySplitRefund() 获取是否支持退款
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaySplitRefund(string $PaySplitRefund) 设置是否支持退款
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayTag() 获取支付标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayTag(string $PayTag) 设置支付标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayTicketIcon() 获取支付凭证图标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayTicketIcon(string $PayTicketIcon) 设置支付凭证图标
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayType() 获取支付类型，逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayType(string $PayType) 设置支付类型，逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTicketName() 获取凭证名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTicketName(string $TicketName) 设置凭证名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class MerchantPayWayData extends AbstractModel
{
    /**
     * @var string 支付币种
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayCurrency;

    /**
     * @var string 支付图标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayIcon;

    /**
     * @var string 支付名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayInternalName;

    /**
     * @var string 支付简称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayName;

    /**
     * @var string 是否支持退款
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaySplitRefund;

    /**
     * @var string 支付标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayTag;

    /**
     * @var string 支付凭证图标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayTicketIcon;

    /**
     * @var string 支付类型，逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayType;

    /**
     * @var string 凭证名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TicketName;

    /**
     * @param string $PayCurrency 支付币种
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayIcon 支付图标
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayInternalName 支付名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayName 支付简称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaySplitRefund 是否支持退款
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayTag 支付标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayTicketIcon 支付凭证图标
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayType 支付类型，逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TicketName 凭证名称
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
        if (array_key_exists("PayCurrency",$param) and $param["PayCurrency"] !== null) {
            $this->PayCurrency = $param["PayCurrency"];
        }

        if (array_key_exists("PayIcon",$param) and $param["PayIcon"] !== null) {
            $this->PayIcon = $param["PayIcon"];
        }

        if (array_key_exists("PayInternalName",$param) and $param["PayInternalName"] !== null) {
            $this->PayInternalName = $param["PayInternalName"];
        }

        if (array_key_exists("PayName",$param) and $param["PayName"] !== null) {
            $this->PayName = $param["PayName"];
        }

        if (array_key_exists("PaySplitRefund",$param) and $param["PaySplitRefund"] !== null) {
            $this->PaySplitRefund = $param["PaySplitRefund"];
        }

        if (array_key_exists("PayTag",$param) and $param["PayTag"] !== null) {
            $this->PayTag = $param["PayTag"];
        }

        if (array_key_exists("PayTicketIcon",$param) and $param["PayTicketIcon"] !== null) {
            $this->PayTicketIcon = $param["PayTicketIcon"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("TicketName",$param) and $param["TicketName"] !== null) {
            $this->TicketName = $param["TicketName"];
        }
    }
}

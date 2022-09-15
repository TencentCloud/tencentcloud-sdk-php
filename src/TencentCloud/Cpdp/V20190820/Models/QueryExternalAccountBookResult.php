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
 * 查询第三方电子记账本余额返回值
 *
 * @method string getChannelAccountBookId() 获取渠道记账本ID
 * @method void setChannelAccountBookId(string $ChannelAccountBookId) 设置渠道记账本ID
 * @method string getAvailableBalance() 获取可用余额。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableBalance(string $AvailableBalance) 设置可用余额。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCollectMoneyAccountInfo() 获取电子记账本对外收款的账户信息。为JSON格式字符串（成功状态下返回）。详情见附录-复杂类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectMoneyAccountInfo(string $CollectMoneyAccountInfo) 设置电子记账本对外收款的账户信息。为JSON格式字符串（成功状态下返回）。详情见附录-复杂类型。
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryExternalAccountBookResult extends AbstractModel
{
    /**
     * @var string 渠道记账本ID
     */
    public $ChannelAccountBookId;

    /**
     * @var string 可用余额。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableBalance;

    /**
     * @var string 电子记账本对外收款的账户信息。为JSON格式字符串（成功状态下返回）。详情见附录-复杂类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollectMoneyAccountInfo;

    /**
     * @param string $ChannelAccountBookId 渠道记账本ID
     * @param string $AvailableBalance 可用余额。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CollectMoneyAccountInfo 电子记账本对外收款的账户信息。为JSON格式字符串（成功状态下返回）。详情见附录-复杂类型。
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
        if (array_key_exists("ChannelAccountBookId",$param) and $param["ChannelAccountBookId"] !== null) {
            $this->ChannelAccountBookId = $param["ChannelAccountBookId"];
        }

        if (array_key_exists("AvailableBalance",$param) and $param["AvailableBalance"] !== null) {
            $this->AvailableBalance = $param["AvailableBalance"];
        }

        if (array_key_exists("CollectMoneyAccountInfo",$param) and $param["CollectMoneyAccountInfo"] !== null) {
            $this->CollectMoneyAccountInfo = $param["CollectMoneyAccountInfo"];
        }
    }
}

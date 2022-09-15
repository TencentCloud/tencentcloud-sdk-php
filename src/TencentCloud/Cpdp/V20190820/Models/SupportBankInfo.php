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
 * 支持的银行信息
 *
 * @method string getBankCode() 获取银行简称。
 * @method void setBankCode(string $BankCode) 设置银行简称。
 * @method string getBankName() 获取银行名称。
 * @method void setBankName(string $BankName) 设置银行名称。
 * @method string getMaintainStatus() 获取状态。
__MAINTAINING__: 维护中
__WORKING__: 正常工作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaintainStatus(string $MaintainStatus) 设置状态。
__MAINTAINING__: 维护中
__WORKING__: 正常工作
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBankNotice() 获取银行渠道维护公告。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBankNotice(string $BankNotice) 设置银行渠道维护公告。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBankId() 获取支持银行代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBankId(string $BankId) 设置支持银行代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCardType() 获取卡类型。
D：借记卡，C：信用卡，Z：借贷合一卡。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCardType(string $CardType) 设置卡类型。
D：借记卡，C：信用卡，Z：借贷合一卡。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SupportBankInfo extends AbstractModel
{
    /**
     * @var string 银行简称。
     */
    public $BankCode;

    /**
     * @var string 银行名称。
     */
    public $BankName;

    /**
     * @var string 状态。
__MAINTAINING__: 维护中
__WORKING__: 正常工作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaintainStatus;

    /**
     * @var string 银行渠道维护公告。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BankNotice;

    /**
     * @var string 支持银行代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BankId;

    /**
     * @var string 卡类型。
D：借记卡，C：信用卡，Z：借贷合一卡。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CardType;

    /**
     * @param string $BankCode 银行简称。
     * @param string $BankName 银行名称。
     * @param string $MaintainStatus 状态。
__MAINTAINING__: 维护中
__WORKING__: 正常工作
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BankNotice 银行渠道维护公告。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BankId 支持银行代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CardType 卡类型。
D：借记卡，C：信用卡，Z：借贷合一卡。
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
        if (array_key_exists("BankCode",$param) and $param["BankCode"] !== null) {
            $this->BankCode = $param["BankCode"];
        }

        if (array_key_exists("BankName",$param) and $param["BankName"] !== null) {
            $this->BankName = $param["BankName"];
        }

        if (array_key_exists("MaintainStatus",$param) and $param["MaintainStatus"] !== null) {
            $this->MaintainStatus = $param["MaintainStatus"];
        }

        if (array_key_exists("BankNotice",$param) and $param["BankNotice"] !== null) {
            $this->BankNotice = $param["BankNotice"];
        }

        if (array_key_exists("BankId",$param) and $param["BankId"] !== null) {
            $this->BankId = $param["BankId"];
        }

        if (array_key_exists("CardType",$param) and $param["CardType"] !== null) {
            $this->CardType = $param["CardType"];
        }
    }
}

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
 * 公司抬头结果
 *
 * @method string getCompanyBankAccount() 获取公司银行账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompanyBankAccount(string $CompanyBankAccount) 设置公司银行账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompanyAddress() 获取公司地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompanyAddress(string $CompanyAddress) 设置公司地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompanyTaxpayerNum() 获取公司税号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompanyTaxpayerNum(string $CompanyTaxpayerNum) 设置公司税号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompanyName() 获取公司名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompanyName(string $CompanyName) 设置公司名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompanyBankName() 获取公司银行名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompanyBankName(string $CompanyBankName) 设置公司银行名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompanyPhone() 获取公司电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompanyPhone(string $CompanyPhone) 设置公司电话
注意：此字段可能返回 null，表示取不到有效值。
 */
class CompanyTitleResult extends AbstractModel
{
    /**
     * @var string 公司银行账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompanyBankAccount;

    /**
     * @var string 公司地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompanyAddress;

    /**
     * @var string 公司税号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompanyTaxpayerNum;

    /**
     * @var string 公司名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompanyName;

    /**
     * @var string 公司银行名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompanyBankName;

    /**
     * @var string 公司电话
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompanyPhone;

    /**
     * @param string $CompanyBankAccount 公司银行账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompanyAddress 公司地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompanyTaxpayerNum 公司税号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompanyName 公司名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompanyBankName 公司银行名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompanyPhone 公司电话
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
        if (array_key_exists("CompanyBankAccount",$param) and $param["CompanyBankAccount"] !== null) {
            $this->CompanyBankAccount = $param["CompanyBankAccount"];
        }

        if (array_key_exists("CompanyAddress",$param) and $param["CompanyAddress"] !== null) {
            $this->CompanyAddress = $param["CompanyAddress"];
        }

        if (array_key_exists("CompanyTaxpayerNum",$param) and $param["CompanyTaxpayerNum"] !== null) {
            $this->CompanyTaxpayerNum = $param["CompanyTaxpayerNum"];
        }

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("CompanyBankName",$param) and $param["CompanyBankName"] !== null) {
            $this->CompanyBankName = $param["CompanyBankName"];
        }

        if (array_key_exists("CompanyPhone",$param) and $param["CompanyPhone"] !== null) {
            $this->CompanyPhone = $param["CompanyPhone"];
        }
    }
}

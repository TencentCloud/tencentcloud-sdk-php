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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 银行回单
 *
 * @method array getBankSlipInfos() 获取银行回单信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBankSlipInfos(array $BankSlipInfos) 设置银行回单信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCommonBankSlipInfos() 获取银行回单信息常用字段
 * @method void setCommonBankSlipInfos(array $CommonBankSlipInfos) 设置银行回单信息常用字段
 */
class BankSlip extends AbstractModel
{
    /**
     * @var array 银行回单信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BankSlipInfos;

    /**
     * @var array 银行回单信息常用字段
     */
    public $CommonBankSlipInfos;

    /**
     * @param array $BankSlipInfos 银行回单信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CommonBankSlipInfos 银行回单信息常用字段
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
        if (array_key_exists("BankSlipInfos",$param) and $param["BankSlipInfos"] !== null) {
            $this->BankSlipInfos = [];
            foreach ($param["BankSlipInfos"] as $key => $value){
                $obj = new BankSlipInfo();
                $obj->deserialize($value);
                array_push($this->BankSlipInfos, $obj);
            }
        }

        if (array_key_exists("CommonBankSlipInfos",$param) and $param["CommonBankSlipInfos"] !== null) {
            $this->CommonBankSlipInfos = [];
            foreach ($param["CommonBankSlipInfos"] as $key => $value){
                $obj = new BankSlipInfo();
                $obj->deserialize($value);
                array_push($this->CommonBankSlipInfos, $obj);
            }
        }
    }
}

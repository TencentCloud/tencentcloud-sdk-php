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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 药物史
 *
 * @method string getCommonName() 获取通用名称
 * @method void setCommonName(string $CommonName) 设置通用名称
 * @method string getTradeName() 获取商品名称
 * @method void setTradeName(string $TradeName) 设置商品名称
 * @method DosageBlock getDosage() 获取用法用量
 * @method void setDosage(DosageBlock $Dosage) 设置用法用量
 * @method string getValue() 获取值
 * @method void setValue(string $Value) 设置值
 */
class DrugListBlock extends AbstractModel
{
    /**
     * @var string 通用名称
     */
    public $CommonName;

    /**
     * @var string 商品名称
     */
    public $TradeName;

    /**
     * @var DosageBlock 用法用量
     */
    public $Dosage;

    /**
     * @var string 值
     */
    public $Value;

    /**
     * @param string $CommonName 通用名称
     * @param string $TradeName 商品名称
     * @param DosageBlock $Dosage 用法用量
     * @param string $Value 值
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
        if (array_key_exists("CommonName",$param) and $param["CommonName"] !== null) {
            $this->CommonName = $param["CommonName"];
        }

        if (array_key_exists("TradeName",$param) and $param["TradeName"] !== null) {
            $this->TradeName = $param["TradeName"];
        }

        if (array_key_exists("Dosage",$param) and $param["Dosage"] !== null) {
            $this->Dosage = new DosageBlock();
            $this->Dosage->deserialize($param["Dosage"]);
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}

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
 * 药品名称，包括通用名和商品名
 *
 * @method string getText() 获取文本内容
 * @method void setText(string $Text) 设置文本内容
 * @method string getGenericName() 获取通用名
 * @method void setGenericName(string $GenericName) 设置通用名
 * @method string getBarndName() 获取品牌名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBarndName(string $BarndName) 设置品牌名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnName() 获取英文名
 * @method void setEnName(string $EnName) 设置英文名
 * @method string getPinyin() 获取拼音
 * @method void setPinyin(string $Pinyin) 设置拼音
 * @method string getBrandName() 获取品牌名
 * @method void setBrandName(string $BrandName) 设置品牌名
 */
class ChemicalProductInfoName extends AbstractModel
{
    /**
     * @var string 文本内容
     */
    public $Text;

    /**
     * @var string 通用名
     */
    public $GenericName;

    /**
     * @var string 品牌名
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $BarndName;

    /**
     * @var string 英文名
     */
    public $EnName;

    /**
     * @var string 拼音
     */
    public $Pinyin;

    /**
     * @var string 品牌名
     */
    public $BrandName;

    /**
     * @param string $Text 文本内容
     * @param string $GenericName 通用名
     * @param string $BarndName 品牌名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnName 英文名
     * @param string $Pinyin 拼音
     * @param string $BrandName 品牌名
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("GenericName",$param) and $param["GenericName"] !== null) {
            $this->GenericName = $param["GenericName"];
        }

        if (array_key_exists("BarndName",$param) and $param["BarndName"] !== null) {
            $this->BarndName = $param["BarndName"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("Pinyin",$param) and $param["Pinyin"] !== null) {
            $this->Pinyin = $param["Pinyin"];
        }

        if (array_key_exists("BrandName",$param) and $param["BrandName"] !== null) {
            $this->BrandName = $param["BrandName"];
        }
    }
}

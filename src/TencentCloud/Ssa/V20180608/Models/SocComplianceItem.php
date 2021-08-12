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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * soc合规信息
 *
 * @method string getItem() 获取唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItem(string $Item) 设置唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStandardItem() 获取分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandardItem(string $StandardItem) 设置分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResult() 获取结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(integer $Result) 设置结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuggestion() 获取建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuggestion(string $Suggestion) 设置建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProStr() 获取产品字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProStr(string $ProStr) 设置产品字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProduction() 获取产品数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProduction(array $Production) 设置产品数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCheckItems() 获取配置项数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckItems(array $CheckItems) 设置配置项数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class SocComplianceItem extends AbstractModel
{
    /**
     * @var string 唯一id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Item;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 分类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StandardItem;

    /**
     * @var integer 结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var string 建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Suggestion;

    /**
     * @var string 产品字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProStr;

    /**
     * @var array 产品数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Production;

    /**
     * @var array 配置项数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckItems;

    /**
     * @param string $Item 唯一id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StandardItem 分类
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Result 结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Suggestion 建议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProStr 产品字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Production 产品数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CheckItems 配置项数组
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
        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = $param["Item"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("StandardItem",$param) and $param["StandardItem"] !== null) {
            $this->StandardItem = $param["StandardItem"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("ProStr",$param) and $param["ProStr"] !== null) {
            $this->ProStr = $param["ProStr"];
        }

        if (array_key_exists("Production",$param) and $param["Production"] !== null) {
            $this->Production = [];
            foreach ($param["Production"] as $key => $value){
                $obj = new SocProductionItem();
                $obj->deserialize($value);
                array_push($this->Production, $obj);
            }
        }

        if (array_key_exists("CheckItems",$param) and $param["CheckItems"] !== null) {
            $this->CheckItems = [];
            foreach ($param["CheckItems"] as $key => $value){
                $obj = new SocCheckItem();
                $obj->deserialize($value);
                array_push($this->CheckItems, $obj);
            }
        }
    }
}

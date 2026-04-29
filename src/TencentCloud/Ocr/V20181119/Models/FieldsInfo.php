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
 * 用于展示抽取出的信息
 *
 * @method string getKeyName() 获取<p>用户自定义的提取字段名。</p>
 * @method void setKeyName(string $KeyName) 设置<p>用户自定义的提取字段名。</p>
 * @method string getKeyPrompt() 获取<p>用户自定义的提取字段名的提示词。</p>
 * @method void setKeyPrompt(string $KeyPrompt) 设置<p>用户自定义的提取字段名的提示词。</p>
 * @method string getKeyValue() 获取<p>出参字段对应的值。</p><p>注意：此字段可能返回 null，表示取不到有效值。</p>
 * @method void setKeyValue(string $KeyValue) 设置<p>出参字段对应的值。</p><p>注意：此字段可能返回 null，表示取不到有效值。</p>
 * @method integer getKeyType() 获取<p>出参类型。</p><p>注：与入参对应同个值。</p>
 * @method void setKeyType(integer $KeyType) 设置<p>出参类型。</p><p>注：与入参对应同个值。</p>
 * @method CoordList getPolygon() 获取<p>文本行坐标，以四个顶点坐标表示。</p><p>注：仅当入参EnableCoord不为null时生效，默认是false。</p>
 * @method void setPolygon(CoordList $Polygon) 设置<p>文本行坐标，以四个顶点坐标表示。</p><p>注：仅当入参EnableCoord不为null时生效，默认是false。</p>
 * @method array getSubItems() 获取<p>嵌套FieldsInfo结构，仅当KeyType=1时有效。</p>
 * @method void setSubItems(array $SubItems) 设置<p>嵌套FieldsInfo结构，仅当KeyType=1时有效。</p>
 */
class FieldsInfo extends AbstractModel
{
    /**
     * @var string <p>用户自定义的提取字段名。</p>
     */
    public $KeyName;

    /**
     * @var string <p>用户自定义的提取字段名的提示词。</p>
     */
    public $KeyPrompt;

    /**
     * @var string <p>出参字段对应的值。</p><p>注意：此字段可能返回 null，表示取不到有效值。</p>
     */
    public $KeyValue;

    /**
     * @var integer <p>出参类型。</p><p>注：与入参对应同个值。</p>
     */
    public $KeyType;

    /**
     * @var CoordList <p>文本行坐标，以四个顶点坐标表示。</p><p>注：仅当入参EnableCoord不为null时生效，默认是false。</p>
     */
    public $Polygon;

    /**
     * @var array <p>嵌套FieldsInfo结构，仅当KeyType=1时有效。</p>
     */
    public $SubItems;

    /**
     * @param string $KeyName <p>用户自定义的提取字段名。</p>
     * @param string $KeyPrompt <p>用户自定义的提取字段名的提示词。</p>
     * @param string $KeyValue <p>出参字段对应的值。</p><p>注意：此字段可能返回 null，表示取不到有效值。</p>
     * @param integer $KeyType <p>出参类型。</p><p>注：与入参对应同个值。</p>
     * @param CoordList $Polygon <p>文本行坐标，以四个顶点坐标表示。</p><p>注：仅当入参EnableCoord不为null时生效，默认是false。</p>
     * @param array $SubItems <p>嵌套FieldsInfo结构，仅当KeyType=1时有效。</p>
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
        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("KeyPrompt",$param) and $param["KeyPrompt"] !== null) {
            $this->KeyPrompt = $param["KeyPrompt"];
        }

        if (array_key_exists("KeyValue",$param) and $param["KeyValue"] !== null) {
            $this->KeyValue = $param["KeyValue"];
        }

        if (array_key_exists("KeyType",$param) and $param["KeyType"] !== null) {
            $this->KeyType = $param["KeyType"];
        }

        if (array_key_exists("Polygon",$param) and $param["Polygon"] !== null) {
            $this->Polygon = new CoordList();
            $this->Polygon->deserialize($param["Polygon"]);
        }

        if (array_key_exists("SubItems",$param) and $param["SubItems"] !== null) {
            $this->SubItems = [];
            foreach ($param["SubItems"] as $key => $value){
                $obj = new SubItemGroup();
                $obj->deserialize($value);
                array_push($this->SubItems, $obj);
            }
        }
    }
}

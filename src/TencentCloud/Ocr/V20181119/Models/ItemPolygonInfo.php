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
 * 发票字段坐标信息。包括字段英文名称、字段值所在位置的四点坐标、字段所属行号，具体内容请点击左侧链接。
 *
 * @method string getKey() 获取发票的英文字段名称（如Title）
 * @method void setKey(string $Key) 设置发票的英文字段名称（如Title）
 * @method Polygon getPolygon() 获取字段值所在位置的四点坐标
 * @method void setPolygon(Polygon $Polygon) 设置字段值所在位置的四点坐标
 * @method integer getRow() 获取字段属于第几行，用于相同字段的排版，如发票明细表格项目，普通字段使用默认值为-1，表示无列排版。
 * @method void setRow(integer $Row) 设置字段属于第几行，用于相同字段的排版，如发票明细表格项目，普通字段使用默认值为-1，表示无列排版。
 */
class ItemPolygonInfo extends AbstractModel
{
    /**
     * @var string 发票的英文字段名称（如Title）
     */
    public $Key;

    /**
     * @var Polygon 字段值所在位置的四点坐标
     */
    public $Polygon;

    /**
     * @var integer 字段属于第几行，用于相同字段的排版，如发票明细表格项目，普通字段使用默认值为-1，表示无列排版。
     */
    public $Row;

    /**
     * @param string $Key 发票的英文字段名称（如Title）
     * @param Polygon $Polygon 字段值所在位置的四点坐标
     * @param integer $Row 字段属于第几行，用于相同字段的排版，如发票明细表格项目，普通字段使用默认值为-1，表示无列排版。
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Polygon",$param) and $param["Polygon"] !== null) {
            $this->Polygon = new Polygon();
            $this->Polygon->deserialize($param["Polygon"]);
        }

        if (array_key_exists("Row",$param) and $param["Row"] !== null) {
            $this->Row = $param["Row"];
        }
    }
}

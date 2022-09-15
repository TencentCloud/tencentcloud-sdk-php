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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 混贴票据中单张发票的内容
 *
 * @method string getName() 获取识别出的字段名称
 * @method void setName(string $Name) 设置识别出的字段名称
 * @method string getValue() 获取识别出的字段名称对应的值，也就是字段name对应的字符串结果。
 * @method void setValue(string $Value) 设置识别出的字段名称对应的值，也就是字段name对应的字符串结果。
 * @method integer getRow() 获取字段属于第几行，用于相同字段的排版，如发票明细表格项目，普通字段使用默认值为-1，表示无列排版。
 * @method void setRow(integer $Row) 设置字段属于第几行，用于相同字段的排版，如发票明细表格项目，普通字段使用默认值为-1，表示无列排版。
 */
class SingleInvoiceInfo extends AbstractModel
{
    /**
     * @var string 识别出的字段名称
     */
    public $Name;

    /**
     * @var string 识别出的字段名称对应的值，也就是字段name对应的字符串结果。
     */
    public $Value;

    /**
     * @var integer 字段属于第几行，用于相同字段的排版，如发票明细表格项目，普通字段使用默认值为-1，表示无列排版。
     */
    public $Row;

    /**
     * @param string $Name 识别出的字段名称
     * @param string $Value 识别出的字段名称对应的值，也就是字段name对应的字符串结果。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Row",$param) and $param["Row"] !== null) {
            $this->Row = $param["Row"];
        }
    }
}

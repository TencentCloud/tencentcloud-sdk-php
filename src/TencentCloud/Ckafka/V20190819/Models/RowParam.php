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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据处理ROW输出格式配置
 *
 * @method string getRowContent() 获取行内容，KEY_VALUE，VALUE
 * @method void setRowContent(string $RowContent) 设置行内容，KEY_VALUE，VALUE
 * @method string getKeyValueDelimiter() 获取key和value间的分隔符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyValueDelimiter(string $KeyValueDelimiter) 设置key和value间的分隔符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEntryDelimiter() 获取元素建的分隔符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntryDelimiter(string $EntryDelimiter) 设置元素建的分隔符
注意：此字段可能返回 null，表示取不到有效值。
 */
class RowParam extends AbstractModel
{
    /**
     * @var string 行内容，KEY_VALUE，VALUE
     */
    public $RowContent;

    /**
     * @var string key和value间的分隔符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyValueDelimiter;

    /**
     * @var string 元素建的分隔符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EntryDelimiter;

    /**
     * @param string $RowContent 行内容，KEY_VALUE，VALUE
     * @param string $KeyValueDelimiter key和value间的分隔符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EntryDelimiter 元素建的分隔符
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
        if (array_key_exists("RowContent",$param) and $param["RowContent"] !== null) {
            $this->RowContent = $param["RowContent"];
        }

        if (array_key_exists("KeyValueDelimiter",$param) and $param["KeyValueDelimiter"] !== null) {
            $this->KeyValueDelimiter = $param["KeyValueDelimiter"];
        }

        if (array_key_exists("EntryDelimiter",$param) and $param["EntryDelimiter"] !== null) {
            $this->EntryDelimiter = $param["EntryDelimiter"];
        }
    }
}

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
 * 描述用户提供的出参结构的模板
 *
 * @method string getKeyName() 获取<p>自定义需提取的字段名称。注：若需提取多个字段，可定义多个KeyName。</p>
 * @method void setKeyName(string $KeyName) 设置<p>自定义需提取的字段名称。注：若需提取多个字段，可定义多个KeyName。</p>
 * @method integer getKeyType() 获取<p>字段类型。</p><p>枚举值：</p><ul><li>0： 表示KeyName为简单字段（如姓名、性别等）。</li><li>1： 表示KeyName为数组对象（如工作经历、教育经历列表）。</li></ul>
 * @method void setKeyType(integer $KeyType) 设置<p>字段类型。</p><p>枚举值：</p><ul><li>0： 表示KeyName为简单字段（如姓名、性别等）。</li><li>1： 表示KeyName为数组对象（如工作经历、教育经历列表）。</li></ul>
 * @method string getKeyPrompt() 获取<p>补充提取字段的描述。</p>
 * @method void setKeyPrompt(string $KeyPrompt) 设置<p>补充提取字段的描述。</p>
 * @method array getSubItems() 获取<p>嵌套SchemaList结构，最多支持嵌套三层。注：仅当KeyType=1时生效。</p>
 * @method void setSubItems(array $SubItems) 设置<p>嵌套SchemaList结构，最多支持嵌套三层。注：仅当KeyType=1时生效。</p>
 */
class SchemaList extends AbstractModel
{
    /**
     * @var string <p>自定义需提取的字段名称。注：若需提取多个字段，可定义多个KeyName。</p>
     */
    public $KeyName;

    /**
     * @var integer <p>字段类型。</p><p>枚举值：</p><ul><li>0： 表示KeyName为简单字段（如姓名、性别等）。</li><li>1： 表示KeyName为数组对象（如工作经历、教育经历列表）。</li></ul>
     */
    public $KeyType;

    /**
     * @var string <p>补充提取字段的描述。</p>
     */
    public $KeyPrompt;

    /**
     * @var array <p>嵌套SchemaList结构，最多支持嵌套三层。注：仅当KeyType=1时生效。</p>
     */
    public $SubItems;

    /**
     * @param string $KeyName <p>自定义需提取的字段名称。注：若需提取多个字段，可定义多个KeyName。</p>
     * @param integer $KeyType <p>字段类型。</p><p>枚举值：</p><ul><li>0： 表示KeyName为简单字段（如姓名、性别等）。</li><li>1： 表示KeyName为数组对象（如工作经历、教育经历列表）。</li></ul>
     * @param string $KeyPrompt <p>补充提取字段的描述。</p>
     * @param array $SubItems <p>嵌套SchemaList结构，最多支持嵌套三层。注：仅当KeyType=1时生效。</p>
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

        if (array_key_exists("KeyType",$param) and $param["KeyType"] !== null) {
            $this->KeyType = $param["KeyType"];
        }

        if (array_key_exists("KeyPrompt",$param) and $param["KeyPrompt"] !== null) {
            $this->KeyPrompt = $param["KeyPrompt"];
        }

        if (array_key_exists("SubItems",$param) and $param["SubItems"] !== null) {
            $this->SubItems = [];
            foreach ($param["SubItems"] as $key => $value){
                $obj = new SchemaList();
                $obj->deserialize($value);
                array_push($this->SubItems, $obj);
            }
        }
    }
}

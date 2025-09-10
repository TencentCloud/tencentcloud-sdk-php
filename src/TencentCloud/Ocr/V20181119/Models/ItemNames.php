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
 * 自定义抽取需要的字段名称、字段类型、字段提示词。
 *
 * @method string getKeyName() 获取自定义抽取功能需返回的字段名称。
 * @method void setKeyName(string $KeyName) 设置自定义抽取功能需返回的字段名称。
 * @method integer getKeyType() 获取默认 0；0表示kv对  1表示 表格字段。

 * @method void setKeyType(integer $KeyType) 设置默认 0；0表示kv对  1表示 表格字段。

 * @method string getKeyPrompt() 获取抽取字段的描述内容。

 * @method void setKeyPrompt(string $KeyPrompt) 设置抽取字段的描述内容。
 */
class ItemNames extends AbstractModel
{
    /**
     * @var string 自定义抽取功能需返回的字段名称。
     */
    public $KeyName;

    /**
     * @var integer 默认 0；0表示kv对  1表示 表格字段。

     */
    public $KeyType;

    /**
     * @var string 抽取字段的描述内容。

     */
    public $KeyPrompt;

    /**
     * @param string $KeyName 自定义抽取功能需返回的字段名称。
     * @param integer $KeyType 默认 0；0表示kv对  1表示 表格字段。

     * @param string $KeyPrompt 抽取字段的描述内容。
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
    }
}

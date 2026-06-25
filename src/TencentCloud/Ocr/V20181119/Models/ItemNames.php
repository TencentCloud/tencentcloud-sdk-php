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
 * @method string getKeyName() 获取<p>自定义抽取功能需返回的字段名称。</p>
 * @method void setKeyName(string $KeyName) 设置<p>自定义抽取功能需返回的字段名称。</p>
 * @method integer getKeyType() 获取<p>默认 0；0表示kv对  1表示 表格字段。</p>
 * @method void setKeyType(integer $KeyType) 设置<p>默认 0；0表示kv对  1表示 表格字段。</p>
 * @method string getKeyPrompt() 获取<p>抽取字段的描述内容。</p>
 * @method void setKeyPrompt(string $KeyPrompt) 设置<p>抽取字段的描述内容。</p>
 * @method string getKeyExpectedValue() 获取<p>自定义字段对应期望的值内容（这个一般需要对字段审核比对才需要输入）。</p>
 * @method void setKeyExpectedValue(string $KeyExpectedValue) 设置<p>自定义字段对应期望的值内容（这个一般需要对字段审核比对才需要输入）。</p>
 * @method string getKeyAuditPrompt() 获取<p>自定义字段审核比对的规则prompt。</p><p>比如keyname是姓名，KeyExpectedValue 张三，KeyAuditPrompt设置为“字符需要完全匹配则审核返回正确”/“字符匹配90%就审核返回正确”</p>
 * @method void setKeyAuditPrompt(string $KeyAuditPrompt) 设置<p>自定义字段审核比对的规则prompt。</p><p>比如keyname是姓名，KeyExpectedValue 张三，KeyAuditPrompt设置为“字符需要完全匹配则审核返回正确”/“字符匹配90%就审核返回正确”</p>
 */
class ItemNames extends AbstractModel
{
    /**
     * @var string <p>自定义抽取功能需返回的字段名称。</p>
     */
    public $KeyName;

    /**
     * @var integer <p>默认 0；0表示kv对  1表示 表格字段。</p>
     */
    public $KeyType;

    /**
     * @var string <p>抽取字段的描述内容。</p>
     */
    public $KeyPrompt;

    /**
     * @var string <p>自定义字段对应期望的值内容（这个一般需要对字段审核比对才需要输入）。</p>
     */
    public $KeyExpectedValue;

    /**
     * @var string <p>自定义字段审核比对的规则prompt。</p><p>比如keyname是姓名，KeyExpectedValue 张三，KeyAuditPrompt设置为“字符需要完全匹配则审核返回正确”/“字符匹配90%就审核返回正确”</p>
     */
    public $KeyAuditPrompt;

    /**
     * @param string $KeyName <p>自定义抽取功能需返回的字段名称。</p>
     * @param integer $KeyType <p>默认 0；0表示kv对  1表示 表格字段。</p>
     * @param string $KeyPrompt <p>抽取字段的描述内容。</p>
     * @param string $KeyExpectedValue <p>自定义字段对应期望的值内容（这个一般需要对字段审核比对才需要输入）。</p>
     * @param string $KeyAuditPrompt <p>自定义字段审核比对的规则prompt。</p><p>比如keyname是姓名，KeyExpectedValue 张三，KeyAuditPrompt设置为“字符需要完全匹配则审核返回正确”/“字符匹配90%就审核返回正确”</p>
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

        if (array_key_exists("KeyExpectedValue",$param) and $param["KeyExpectedValue"] !== null) {
            $this->KeyExpectedValue = $param["KeyExpectedValue"];
        }

        if (array_key_exists("KeyAuditPrompt",$param) and $param["KeyAuditPrompt"] !== null) {
            $this->KeyAuditPrompt = $param["KeyAuditPrompt"];
        }
    }
}

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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * **JsonExpandInfo 数据结构描述**：
```
JSON嵌套展开配置
```

**各字段描述**：

| 字段 | 描述 |
|------|------|
| Switch | 是否开启JSON嵌套展开 |
| Fields | 待展开的JSON字段列表，1~3个 |
| DropOriginal | 展开后是否丢弃原始字段，默认true |
| ConflictPolicy | 字段冲突策略，keep_outer:保留外层(默认)，keep_inner:保留内层 |

**LogRechargeRuleInfo 新增字段**：

| 字段 | 描述 |
|------|------|
| JsonExpand | JSON嵌套展开配置，仅RechargeType为json_log时生效 |
 *
 * @method boolean getSwitch() 获取<p>是否开启JSON嵌套展开功能。开启后将对指定JSON字段进行扁平化展开处理</p><p>默认值：无（必选参数）</p>
 * @method void setSwitch(boolean $Switch) 设置<p>是否开启JSON嵌套展开功能。开启后将对指定JSON字段进行扁平化展开处理</p><p>默认值：无（必选参数）</p>
 * @method array getFields() 获取<p>待展开的JSON字段名列表，支持1~3个字段，字段名不可为空串且不可重复 </p><p>入参限制：1. 字段数量：1~3个2. 每个字段名长度不超过128个字符3. 字段名不可为空字符串4. 字段名之间不可重复</p><p>默认值：无（必选参数）</p><p>取值参考：取值：message；描述：示例字段名</p><p>示例：[&quot;message&quot;, &quot;data&quot;, &quot;content&quot;]</p>
 * @method void setFields(array $Fields) 设置<p>待展开的JSON字段名列表，支持1~3个字段，字段名不可为空串且不可重复 </p><p>入参限制：1. 字段数量：1~3个2. 每个字段名长度不超过128个字符3. 字段名不可为空字符串4. 字段名之间不可重复</p><p>默认值：无（必选参数）</p><p>取值参考：取值：message；描述：示例字段名</p><p>示例：[&quot;message&quot;, &quot;data&quot;, &quot;content&quot;]</p>
 * @method boolean getDropOriginal() 获取<p>展开后是否丢弃原始的嵌套字段。true: 丢弃原始字段只保留展开后的平铺字段; false: 保留原始字段同时增加展开后的平铺字段</p><p>枚举值：</p><ul><li>true / false： 丢弃原字段 / 保留原字段</li></ul><p>默认值：true</p><p>非必选，不传时默认为true</p>
 * @method void setDropOriginal(boolean $DropOriginal) 设置<p>展开后是否丢弃原始的嵌套字段。true: 丢弃原始字段只保留展开后的平铺字段; false: 保留原始字段同时增加展开后的平铺字段</p><p>枚举值：</p><ul><li>true / false： 丢弃原字段 / 保留原字段</li></ul><p>默认值：true</p><p>非必选，不传时默认为true</p>
 * @method string getConflictPolicy() 获取<p>展开后的字段与已有字段发生冲突时的处理策略</p><p>枚举值：</p><ul><li>keep_outer / keep_inner： 保留外层(已存在)字段 / 保留内层(新展开)字段</li></ul><p>默认值：keep_outer</p><p>非必选，不传时默认为keep_outer</p>
 * @method void setConflictPolicy(string $ConflictPolicy) 设置<p>展开后的字段与已有字段发生冲突时的处理策略</p><p>枚举值：</p><ul><li>keep_outer / keep_inner： 保留外层(已存在)字段 / 保留内层(新展开)字段</li></ul><p>默认值：keep_outer</p><p>非必选，不传时默认为keep_outer</p>
 */
class JsonExpandInfo extends AbstractModel
{
    /**
     * @var boolean <p>是否开启JSON嵌套展开功能。开启后将对指定JSON字段进行扁平化展开处理</p><p>默认值：无（必选参数）</p>
     */
    public $Switch;

    /**
     * @var array <p>待展开的JSON字段名列表，支持1~3个字段，字段名不可为空串且不可重复 </p><p>入参限制：1. 字段数量：1~3个2. 每个字段名长度不超过128个字符3. 字段名不可为空字符串4. 字段名之间不可重复</p><p>默认值：无（必选参数）</p><p>取值参考：取值：message；描述：示例字段名</p><p>示例：[&quot;message&quot;, &quot;data&quot;, &quot;content&quot;]</p>
     */
    public $Fields;

    /**
     * @var boolean <p>展开后是否丢弃原始的嵌套字段。true: 丢弃原始字段只保留展开后的平铺字段; false: 保留原始字段同时增加展开后的平铺字段</p><p>枚举值：</p><ul><li>true / false： 丢弃原字段 / 保留原字段</li></ul><p>默认值：true</p><p>非必选，不传时默认为true</p>
     */
    public $DropOriginal;

    /**
     * @var string <p>展开后的字段与已有字段发生冲突时的处理策略</p><p>枚举值：</p><ul><li>keep_outer / keep_inner： 保留外层(已存在)字段 / 保留内层(新展开)字段</li></ul><p>默认值：keep_outer</p><p>非必选，不传时默认为keep_outer</p>
     */
    public $ConflictPolicy;

    /**
     * @param boolean $Switch <p>是否开启JSON嵌套展开功能。开启后将对指定JSON字段进行扁平化展开处理</p><p>默认值：无（必选参数）</p>
     * @param array $Fields <p>待展开的JSON字段名列表，支持1~3个字段，字段名不可为空串且不可重复 </p><p>入参限制：1. 字段数量：1~3个2. 每个字段名长度不超过128个字符3. 字段名不可为空字符串4. 字段名之间不可重复</p><p>默认值：无（必选参数）</p><p>取值参考：取值：message；描述：示例字段名</p><p>示例：[&quot;message&quot;, &quot;data&quot;, &quot;content&quot;]</p>
     * @param boolean $DropOriginal <p>展开后是否丢弃原始的嵌套字段。true: 丢弃原始字段只保留展开后的平铺字段; false: 保留原始字段同时增加展开后的平铺字段</p><p>枚举值：</p><ul><li>true / false： 丢弃原字段 / 保留原字段</li></ul><p>默认值：true</p><p>非必选，不传时默认为true</p>
     * @param string $ConflictPolicy <p>展开后的字段与已有字段发生冲突时的处理策略</p><p>枚举值：</p><ul><li>keep_outer / keep_inner： 保留外层(已存在)字段 / 保留内层(新展开)字段</li></ul><p>默认值：keep_outer</p><p>非必选，不传时默认为keep_outer</p>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = $param["Fields"];
        }

        if (array_key_exists("DropOriginal",$param) and $param["DropOriginal"] !== null) {
            $this->DropOriginal = $param["DropOriginal"];
        }

        if (array_key_exists("ConflictPolicy",$param) and $param["ConflictPolicy"] !== null) {
            $this->ConflictPolicy = $param["ConflictPolicy"];
        }
    }
}

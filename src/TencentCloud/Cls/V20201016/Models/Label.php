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
 * 标签结构体
 *
 * @method string getKey() 获取标签的键。有效标签键有两个部分：可选前缀和名称，以斜杠 (/) 分隔。名称部分是必需的，并且必须不超过 63 个字符，以字母数字字符 ([a-z0-9A-Z]) 开头和结尾，中间有破折号(-)、下划线(_)、点(.) 和字母数字。前缀是可选的。如果指定，前缀必须是 DNS 子域：一系列以点 (.) 分隔的 DNS 标签，总长度不超过 253 个字符，后跟斜杠 ( /)。

-  prefix 格式  `[a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`
-  name 格式 `([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
- key不能重复
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置标签的键。有效标签键有两个部分：可选前缀和名称，以斜杠 (/) 分隔。名称部分是必需的，并且必须不超过 63 个字符，以字母数字字符 ([a-z0-9A-Z]) 开头和结尾，中间有破折号(-)、下划线(_)、点(.) 和字母数字。前缀是可选的。如果指定，前缀必须是 DNS 子域：一系列以点 (.) 分隔的 DNS 标签，总长度不超过 253 个字符，后跟斜杠 ( /)。

-  prefix 格式  `[a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`
-  name 格式 `([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
- key不能重复
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperate() 获取标签键值直接的比较关系。 不同业务场景支持的比较符不同，具体支持那些参考接口业务描述。
例如：`in`、`notin`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperate(string $Operate) 设置标签键值直接的比较关系。 不同业务场景支持的比较符不同，具体支持那些参考接口业务描述。
例如：`in`、`notin`
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValues() 获取标签的值.
- 最大支持63个字符。
- 格式：`([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置标签的值.
- 最大支持63个字符。
- 格式：`([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
注意：此字段可能返回 null，表示取不到有效值。
 */
class Label extends AbstractModel
{
    /**
     * @var string 标签的键。有效标签键有两个部分：可选前缀和名称，以斜杠 (/) 分隔。名称部分是必需的，并且必须不超过 63 个字符，以字母数字字符 ([a-z0-9A-Z]) 开头和结尾，中间有破折号(-)、下划线(_)、点(.) 和字母数字。前缀是可选的。如果指定，前缀必须是 DNS 子域：一系列以点 (.) 分隔的 DNS 标签，总长度不超过 253 个字符，后跟斜杠 ( /)。

-  prefix 格式  `[a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`
-  name 格式 `([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
- key不能重复
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string 标签键值直接的比较关系。 不同业务场景支持的比较符不同，具体支持那些参考接口业务描述。
例如：`in`、`notin`
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operate;

    /**
     * @var array 标签的值.
- 最大支持63个字符。
- 格式：`([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @param string $Key 标签的键。有效标签键有两个部分：可选前缀和名称，以斜杠 (/) 分隔。名称部分是必需的，并且必须不超过 63 个字符，以字母数字字符 ([a-z0-9A-Z]) 开头和结尾，中间有破折号(-)、下划线(_)、点(.) 和字母数字。前缀是可选的。如果指定，前缀必须是 DNS 子域：一系列以点 (.) 分隔的 DNS 标签，总长度不超过 253 个字符，后跟斜杠 ( /)。

-  prefix 格式  `[a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`
-  name 格式 `([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
- key不能重复
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operate 标签键值直接的比较关系。 不同业务场景支持的比较符不同，具体支持那些参考接口业务描述。
例如：`in`、`notin`
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Values 标签的值.
- 最大支持63个字符。
- 格式：`([A-Za-z0-9][-A-Za-z0-9_.]*)?[A-Za-z0-9]`
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}

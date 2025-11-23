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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 限流方法数据结构
 *
 * @method string getMethod() 获取需要限流的请求方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethod(string $Method) 设置需要限流的请求方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取匹配方式，支持EXACT(等于), REGEX（正则） , IN（属于） , NOT_IN（不属于）, CONTAINS（包含）, NOT_CONTAINS（不包含）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置匹配方式，支持EXACT(等于), REGEX（正则） , IN（属于） , NOT_IN（不属于）, CONTAINS（包含）, NOT_CONTAINS（不包含）
注意：此字段可能返回 null，表示取不到有效值。
 */
class LimitMethod extends AbstractModel
{
    /**
     * @var string 需要限流的请求方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Method;

    /**
     * @var string 匹配方式，支持EXACT(等于), REGEX（正则） , IN（属于） , NOT_IN（不属于）, CONTAINS（包含）, NOT_CONTAINS（不包含）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @param string $Method 需要限流的请求方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 匹配方式，支持EXACT(等于), REGEX（正则） , IN（属于） , NOT_IN（不属于）, CONTAINS（包含）, NOT_CONTAINS（不包含）
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
        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}

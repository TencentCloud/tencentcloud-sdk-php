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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义匹配条件
 *
 * @method CompoundCondition getHeadersMatch() 获取<p>请求头  匹配条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeadersMatch(CompoundCondition $HeadersMatch) 设置<p>请求头  匹配条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CompoundCondition getQueryMatch() 获取<p>请求参数 匹配条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryMatch(CompoundCondition $QueryMatch) 设置<p>请求参数 匹配条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomMatch extends AbstractModel
{
    /**
     * @var CompoundCondition <p>请求头  匹配条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeadersMatch;

    /**
     * @var CompoundCondition <p>请求参数 匹配条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryMatch;

    /**
     * @param CompoundCondition $HeadersMatch <p>请求头  匹配条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CompoundCondition $QueryMatch <p>请求参数 匹配条件</p>
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
        if (array_key_exists("HeadersMatch",$param) and $param["HeadersMatch"] !== null) {
            $this->HeadersMatch = new CompoundCondition();
            $this->HeadersMatch->deserialize($param["HeadersMatch"]);
        }

        if (array_key_exists("QueryMatch",$param) and $param["QueryMatch"] !== null) {
            $this->QueryMatch = new CompoundCondition();
            $this->QueryMatch->deserialize($param["QueryMatch"]);
        }
    }
}

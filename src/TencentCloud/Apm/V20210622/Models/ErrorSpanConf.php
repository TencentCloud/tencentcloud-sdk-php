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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 具体单个配置
 *
 * @method array getErrorObjectPatterns() 获取<p>错误类型匹配规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorObjectPatterns(array $ErrorObjectPatterns) 设置<p>错误类型匹配规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getErrorCodes() 获取<p>错误码匹配规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCodes(array $ErrorCodes) 设置<p>错误码匹配规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ErrorSpanConf extends AbstractModel
{
    /**
     * @var array <p>错误类型匹配规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorObjectPatterns;

    /**
     * @var array <p>错误码匹配规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCodes;

    /**
     * @param array $ErrorObjectPatterns <p>错误类型匹配规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ErrorCodes <p>错误码匹配规则列表</p>
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
        if (array_key_exists("ErrorObjectPatterns",$param) and $param["ErrorObjectPatterns"] !== null) {
            $this->ErrorObjectPatterns = $param["ErrorObjectPatterns"];
        }

        if (array_key_exists("ErrorCodes",$param) and $param["ErrorCodes"] !== null) {
            $this->ErrorCodes = $param["ErrorCodes"];
        }
    }
}

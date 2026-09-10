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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCP路由 Header规则对象
 *
 * @method string getKey() 获取<p>Header的Key</p>
 * @method void setKey(string $Key) 设置<p>Header的Key</p>
 * @method string getMatchType() 获取<p>Header匹配规则</p><p>枚举值：</p><ul><li>Exact： 精确</li><li>Prefix： 前缀</li><li>Regex： 正则</li></ul>
 * @method void setMatchType(string $MatchType) 设置<p>Header匹配规则</p><p>枚举值：</p><ul><li>Exact： 精确</li><li>Prefix： 前缀</li><li>Regex： 正则</li></ul>
 * @method string getValue() 获取<p>Header匹配的值</p>
 * @method void setValue(string $Value) 设置<p>Header匹配的值</p>
 */
class AIGWHeaderRule extends AbstractModel
{
    /**
     * @var string <p>Header的Key</p>
     */
    public $Key;

    /**
     * @var string <p>Header匹配规则</p><p>枚举值：</p><ul><li>Exact： 精确</li><li>Prefix： 前缀</li><li>Regex： 正则</li></ul>
     */
    public $MatchType;

    /**
     * @var string <p>Header匹配的值</p>
     */
    public $Value;

    /**
     * @param string $Key <p>Header的Key</p>
     * @param string $MatchType <p>Header匹配规则</p><p>枚举值：</p><ul><li>Exact： 精确</li><li>Prefix： 前缀</li><li>Regex： 正则</li></ul>
     * @param string $Value <p>Header匹配的值</p>
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

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}

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
 * AI网关标签过滤
 *
 * @method string getMatchStrategy() 获取<p>匹配策略</p><p>枚举值：</p><ul><li>AND： 并</li><li>OR： 或</li></ul>
 * @method void setMatchStrategy(string $MatchStrategy) 设置<p>匹配策略</p><p>枚举值：</p><ul><li>AND： 并</li><li>OR： 或</li></ul>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 */
class AIGWTagFilter extends AbstractModel
{
    /**
     * @var string <p>匹配策略</p><p>枚举值：</p><ul><li>AND： 并</li><li>OR： 或</li></ul>
     */
    public $MatchStrategy;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @param string $MatchStrategy <p>匹配策略</p><p>枚举值：</p><ul><li>AND： 并</li><li>OR： 或</li></ul>
     * @param array $Tags <p>标签</p>
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
        if (array_key_exists("MatchStrategy",$param) and $param["MatchStrategy"] !== null) {
            $this->MatchStrategy = $param["MatchStrategy"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}

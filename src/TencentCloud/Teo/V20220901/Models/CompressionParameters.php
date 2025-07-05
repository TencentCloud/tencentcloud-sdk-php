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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能压缩配置。
 *
 * @method string getSwitch() 获取智能压缩配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置智能压缩配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method array getAlgorithms() 获取支持的压缩算法列表。当 Switch 为 on 时，此字段必填，否则此字段不生效。取值有：
<li>brotli：brotli 算法；</li>
<li>gzip：gzip 算法。</li>
 * @method void setAlgorithms(array $Algorithms) 设置支持的压缩算法列表。当 Switch 为 on 时，此字段必填，否则此字段不生效。取值有：
<li>brotli：brotli 算法；</li>
<li>gzip：gzip 算法。</li>
 */
class CompressionParameters extends AbstractModel
{
    /**
     * @var string 智能压缩配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var array 支持的压缩算法列表。当 Switch 为 on 时，此字段必填，否则此字段不生效。取值有：
<li>brotli：brotli 算法；</li>
<li>gzip：gzip 算法。</li>
     */
    public $Algorithms;

    /**
     * @param string $Switch 智能压缩配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param array $Algorithms 支持的压缩算法列表。当 Switch 为 on 时，此字段必填，否则此字段不生效。取值有：
<li>brotli：brotli 算法；</li>
<li>gzip：gzip 算法。</li>
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

        if (array_key_exists("Algorithms",$param) and $param["Algorithms"] !== null) {
            $this->Algorithms = $param["Algorithms"];
        }
    }
}

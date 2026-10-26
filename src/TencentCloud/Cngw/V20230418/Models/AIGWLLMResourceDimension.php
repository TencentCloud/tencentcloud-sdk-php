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
 * AI网关成本报表列表维度信息
 *
 * @method string getKey() 获取<p>维度Key</p>
 * @method void setKey(string $Key) 设置<p>维度Key</p>
 * @method array getValues() 获取<p>维度值</p>
 * @method void setValues(array $Values) 设置<p>维度值</p>
 */
class AIGWLLMResourceDimension extends AbstractModel
{
    /**
     * @var string <p>维度Key</p>
     */
    public $Key;

    /**
     * @var array <p>维度值</p>
     */
    public $Values;

    /**
     * @param string $Key <p>维度Key</p>
     * @param array $Values <p>维度值</p>
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}

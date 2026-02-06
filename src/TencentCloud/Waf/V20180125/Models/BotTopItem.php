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
 * bot的topN复杂类型
 *
 * @method string getKey() 获取对应的key
 * @method void setKey(string $Key) 设置对应的key
 * @method integer getValue() 获取对应的值
 * @method void setValue(integer $Value) 设置对应的值
 * @method string getLabel() 获取key对应的展示描述语
 * @method void setLabel(string $Label) 设置key对应的展示描述语
 */
class BotTopItem extends AbstractModel
{
    /**
     * @var string 对应的key
     */
    public $Key;

    /**
     * @var integer 对应的值
     */
    public $Value;

    /**
     * @var string key对应的展示描述语
     */
    public $Label;

    /**
     * @param string $Key 对应的key
     * @param integer $Value 对应的值
     * @param string $Label key对应的展示描述语
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }
    }
}

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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 整型键值对。分类计数等枚举键用此结构，不把枚举值做成结构体字段。
 *
 * @method string getKey() 获取<p>键，如 error / session</p>
 * @method void setKey(string $Key) 设置<p>键，如 error / session</p>
 * @method integer getValue() 获取<p>整型值</p>
 * @method void setValue(integer $Value) 设置<p>整型值</p>
 */
class IntKeyValue extends AbstractModel
{
    /**
     * @var string <p>键，如 error / session</p>
     */
    public $Key;

    /**
     * @var integer <p>整型值</p>
     */
    public $Value;

    /**
     * @param string $Key <p>键，如 error / session</p>
     * @param integer $Value <p>整型值</p>
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
    }
}

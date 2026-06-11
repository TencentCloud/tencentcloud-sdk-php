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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 键值对（整数）
 *
 * @method integer getKey() 获取<p>键</p>
 * @method void setKey(integer $Key) 设置<p>键</p>
 * @method integer getValue() 获取<p>值</p>
 * @method void setValue(integer $Value) 设置<p>值</p>
 */
class KeyValueInt extends AbstractModel
{
    /**
     * @var integer <p>键</p>
     */
    public $Key;

    /**
     * @var integer <p>值</p>
     */
    public $Value;

    /**
     * @param integer $Key <p>键</p>
     * @param integer $Value <p>值</p>
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

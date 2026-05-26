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
 * 标签结构体
 *
 * @method string getTagKey() 获取<p>标签键</p>
 * @method void setTagKey(string $TagKey) 设置<p>标签键</p>
 * @method string getTagValue() 获取<p>标签值</p>
 * @method void setTagValue(string $TagValue) 设置<p>标签值</p>
 */
class TagInfo extends AbstractModel
{
    /**
     * @var string <p>标签键</p>
     */
    public $TagKey;

    /**
     * @var string <p>标签值</p>
     */
    public $TagValue;

    /**
     * @param string $TagKey <p>标签键</p>
     * @param string $TagValue <p>标签值</p>
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
        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }
    }
}

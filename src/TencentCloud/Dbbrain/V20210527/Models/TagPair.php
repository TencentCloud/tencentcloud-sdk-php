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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签键值对过滤条件。
 *
 * @method string getTagKey() 获取<p>过滤条件-标签key</p>
 * @method void setTagKey(string $TagKey) 设置<p>过滤条件-标签key</p>
 * @method array getTagValue() 获取<p>过滤条件标签-value</p>
 * @method void setTagValue(array $TagValue) 设置<p>过滤条件标签-value</p>
 */
class TagPair extends AbstractModel
{
    /**
     * @var string <p>过滤条件-标签key</p>
     */
    public $TagKey;

    /**
     * @var array <p>过滤条件标签-value</p>
     */
    public $TagValue;

    /**
     * @param string $TagKey <p>过滤条件-标签key</p>
     * @param array $TagValue <p>过滤条件标签-value</p>
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

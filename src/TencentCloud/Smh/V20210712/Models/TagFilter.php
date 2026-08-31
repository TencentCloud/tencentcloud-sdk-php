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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签过滤条件
 *
 * @method string getTagKey() 获取<p>用于筛选媒体库的标签键。</p>
 * @method void setTagKey(string $TagKey) 设置<p>用于筛选媒体库的标签键。</p>
 * @method array getTagValue() 获取<p>用于筛选媒体库的标签值列表。</p>
 * @method void setTagValue(array $TagValue) 设置<p>用于筛选媒体库的标签值列表。</p>
 */
class TagFilter extends AbstractModel
{
    /**
     * @var string <p>用于筛选媒体库的标签键。</p>
     */
    public $TagKey;

    /**
     * @var array <p>用于筛选媒体库的标签值列表。</p>
     */
    public $TagValue;

    /**
     * @param string $TagKey <p>用于筛选媒体库的标签键。</p>
     * @param array $TagValue <p>用于筛选媒体库的标签值列表。</p>
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

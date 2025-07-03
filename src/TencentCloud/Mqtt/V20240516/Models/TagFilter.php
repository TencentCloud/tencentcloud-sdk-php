<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签过滤器
 *
 * @method string getTagKey() 获取标签键名称
 * @method void setTagKey(string $TagKey) 设置标签键名称
 * @method array getTagValues() 获取标签键名称
 * @method void setTagValues(array $TagValues) 设置标签键名称
 */
class TagFilter extends AbstractModel
{
    /**
     * @var string 标签键名称
     */
    public $TagKey;

    /**
     * @var array 标签键名称
     */
    public $TagValues;

    /**
     * @param string $TagKey 标签键名称
     * @param array $TagValues 标签键名称
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

        if (array_key_exists("TagValues",$param) and $param["TagValues"] !== null) {
            $this->TagValues = $param["TagValues"];
        }
    }
}

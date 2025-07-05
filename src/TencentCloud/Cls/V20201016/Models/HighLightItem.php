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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 符合检索条件的关键词，一般用于高亮显示。仅支持键值检索，不支持全文检索
 *
 * @method string getKey() 获取高亮的日志字段名称
 * @method void setKey(string $Key) 设置高亮的日志字段名称
 * @method array getValues() 获取高亮的关键词
 * @method void setValues(array $Values) 设置高亮的关键词
 */
class HighLightItem extends AbstractModel
{
    /**
     * @var string 高亮的日志字段名称
     */
    public $Key;

    /**
     * @var array 高亮的关键词
     */
    public $Values;

    /**
     * @param string $Key 高亮的日志字段名称
     * @param array $Values 高亮的关键词
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

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
 * AI 分析的数据范围配置，如CLS日志主题配置。Key如果设置为TopicId，Value是对应日志主题topic_id，Key如果设置为Region，Value是地域的英文名，在https://cloud.tencent.com/document/product/614/18940查询。
 *
 * @method string getKey() 获取<p>值类型</p><p>枚举值：</p><ul><li>TopicId： 日志主题ID</li><li>Region： 地域</li></ul>
 * @method void setKey(string $Key) 设置<p>值类型</p><p>枚举值：</p><ul><li>TopicId： 日志主题ID</li><li>Region： 地域</li></ul>
 * @method string getValue() 获取<p>Key如果设置为TopicId，Value是对应日志主题topic_id 在https://cloud.tencent.com/document/product/614/56454 查询，Key如果设置为Region，Value是地域的英文名，在https://cloud.tencent.com/document/product/614/18940查询。</p>
 * @method void setValue(string $Value) 设置<p>Key如果设置为TopicId，Value是对应日志主题topic_id 在https://cloud.tencent.com/document/product/614/56454 查询，Key如果设置为Region，Value是地域的英文名，在https://cloud.tencent.com/document/product/614/18940查询。</p>
 */
class AIAnalysisDataScopeEntry extends AbstractModel
{
    /**
     * @var string <p>值类型</p><p>枚举值：</p><ul><li>TopicId： 日志主题ID</li><li>Region： 地域</li></ul>
     */
    public $Key;

    /**
     * @var string <p>Key如果设置为TopicId，Value是对应日志主题topic_id 在https://cloud.tencent.com/document/product/614/56454 查询，Key如果设置为Region，Value是地域的英文名，在https://cloud.tencent.com/document/product/614/18940查询。</p>
     */
    public $Value;

    /**
     * @param string $Key <p>值类型</p><p>枚举值：</p><ul><li>TopicId： 日志主题ID</li><li>Region： 地域</li></ul>
     * @param string $Value <p>Key如果设置为TopicId，Value是对应日志主题topic_id 在https://cloud.tencent.com/document/product/614/56454 查询，Key如果设置为Region，Value是地域的英文名，在https://cloud.tencent.com/document/product/614/18940查询。</p>
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

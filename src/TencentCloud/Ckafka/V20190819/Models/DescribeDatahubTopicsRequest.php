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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatahubTopics请求参数结构体
 *
 * @method string getSearchWord() 获取<p>搜索词</p><p>对Name或TopicName或TopicId字段进行模糊匹配</p>
 * @method void setSearchWord(string $SearchWord) 设置<p>搜索词</p><p>对Name或TopicName或TopicId字段进行模糊匹配</p>
 * @method integer getOffset() 获取<p>本次查询的偏移位置，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>本次查询的偏移位置，默认为0</p>
 * @method integer getLimit() 获取<p>本次返回结果的最大个数</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 * @method void setLimit(integer $Limit) 设置<p>本次返回结果的最大个数</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 * @method boolean getQueryFromConnectResource() 获取<p>是否从连接查询topic列表</p><p>默认值：false</p>
 * @method void setQueryFromConnectResource(boolean $QueryFromConnectResource) 设置<p>是否从连接查询topic列表</p><p>默认值：false</p>
 * @method string getConnectResourceId() 获取<p>连接的ID</p>
 * @method void setConnectResourceId(string $ConnectResourceId) 设置<p>连接的ID</p>
 * @method string getTopicRegularExpression() 获取<p>topic资源表达式</p>
 * @method void setTopicRegularExpression(string $TopicRegularExpression) 设置<p>topic资源表达式</p>
 */
class DescribeDatahubTopicsRequest extends AbstractModel
{
    /**
     * @var string <p>搜索词</p><p>对Name或TopicName或TopicId字段进行模糊匹配</p>
     */
    public $SearchWord;

    /**
     * @var integer <p>本次查询的偏移位置，默认为0</p>
     */
    public $Offset;

    /**
     * @var integer <p>本次返回结果的最大个数</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
     */
    public $Limit;

    /**
     * @var boolean <p>是否从连接查询topic列表</p><p>默认值：false</p>
     */
    public $QueryFromConnectResource;

    /**
     * @var string <p>连接的ID</p>
     */
    public $ConnectResourceId;

    /**
     * @var string <p>topic资源表达式</p>
     */
    public $TopicRegularExpression;

    /**
     * @param string $SearchWord <p>搜索词</p><p>对Name或TopicName或TopicId字段进行模糊匹配</p>
     * @param integer $Offset <p>本次查询的偏移位置，默认为0</p>
     * @param integer $Limit <p>本次返回结果的最大个数</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
     * @param boolean $QueryFromConnectResource <p>是否从连接查询topic列表</p><p>默认值：false</p>
     * @param string $ConnectResourceId <p>连接的ID</p>
     * @param string $TopicRegularExpression <p>topic资源表达式</p>
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
        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("QueryFromConnectResource",$param) and $param["QueryFromConnectResource"] !== null) {
            $this->QueryFromConnectResource = $param["QueryFromConnectResource"];
        }

        if (array_key_exists("ConnectResourceId",$param) and $param["ConnectResourceId"] !== null) {
            $this->ConnectResourceId = $param["ConnectResourceId"];
        }

        if (array_key_exists("TopicRegularExpression",$param) and $param["TopicRegularExpression"] !== null) {
            $this->TopicRegularExpression = $param["TopicRegularExpression"];
        }
    }
}

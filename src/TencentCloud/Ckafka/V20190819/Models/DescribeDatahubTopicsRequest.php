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
 * @method string getSearchWord() 获取搜索词
 * @method void setSearchWord(string $SearchWord) 设置搜索词
 * @method integer getOffset() 获取本次查询的偏移位置，默认为0
 * @method void setOffset(integer $Offset) 设置本次查询的偏移位置，默认为0
 * @method integer getLimit() 获取本次返回结果的最大个数，默认为50，最大值为50
 * @method void setLimit(integer $Limit) 设置本次返回结果的最大个数，默认为50，最大值为50
 * @method boolean getQueryFromConnectResource() 获取是否从连接查询topic列表
 * @method void setQueryFromConnectResource(boolean $QueryFromConnectResource) 设置是否从连接查询topic列表
 * @method string getConnectResourceId() 获取连接的ID
 * @method void setConnectResourceId(string $ConnectResourceId) 设置连接的ID
 * @method string getTopicRegularExpression() 获取topic资源表达式
 * @method void setTopicRegularExpression(string $TopicRegularExpression) 设置topic资源表达式
 */
class DescribeDatahubTopicsRequest extends AbstractModel
{
    /**
     * @var string 搜索词
     */
    public $SearchWord;

    /**
     * @var integer 本次查询的偏移位置，默认为0
     */
    public $Offset;

    /**
     * @var integer 本次返回结果的最大个数，默认为50，最大值为50
     */
    public $Limit;

    /**
     * @var boolean 是否从连接查询topic列表
     */
    public $QueryFromConnectResource;

    /**
     * @var string 连接的ID
     */
    public $ConnectResourceId;

    /**
     * @var string topic资源表达式
     */
    public $TopicRegularExpression;

    /**
     * @param string $SearchWord 搜索词
     * @param integer $Offset 本次查询的偏移位置，默认为0
     * @param integer $Limit 本次返回结果的最大个数，默认为50，最大值为50
     * @param boolean $QueryFromConnectResource 是否从连接查询topic列表
     * @param string $ConnectResourceId 连接的ID
     * @param string $TopicRegularExpression topic资源表达式
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

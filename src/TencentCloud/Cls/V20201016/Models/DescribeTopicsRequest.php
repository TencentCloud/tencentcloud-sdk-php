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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopics请求参数结构体
 *
 * @method array getFilters() 获取<li> topicName按照【日志主题名称】进行过滤，默认为模糊匹配，可使用PreciseSearch参数设置为精确匹配。类型：String必选：否<br><li> logsetName按照【日志集名称】进行过滤，默认为模糊匹配，可使用PreciseSearch参数设置为精确匹配。类型：String必选：否<br><li> topicId按照【日志主题ID】进行过滤。类型：String必选：否<br><li> logsetId按照【日志集ID】进行过滤，可通过调用DescribeLogsets查询已创建的日志集列表或登录控制台进行查看；也可以调用CreateLogset创建新的日志集。类型：String必选：否<br><li> tagKey按照【标签键】进行过滤。类型：String必选：否<br><li> tag:tagKey按照【标签键值对】进行过滤。tagKey使用具体的标签键进行替换，例如tag:exampleKey。类型：String必选：否<br><li> storageType按照【日志主题的存储类型】进行过滤。可选值 hot（标准存储），cold（低频存储）类型：String必选：否每次请求的Filters的上限为10，Filter.Values的上限为100。
 * @method void setFilters(array $Filters) 设置<li> topicName按照【日志主题名称】进行过滤，默认为模糊匹配，可使用PreciseSearch参数设置为精确匹配。类型：String必选：否<br><li> logsetName按照【日志集名称】进行过滤，默认为模糊匹配，可使用PreciseSearch参数设置为精确匹配。类型：String必选：否<br><li> topicId按照【日志主题ID】进行过滤。类型：String必选：否<br><li> logsetId按照【日志集ID】进行过滤，可通过调用DescribeLogsets查询已创建的日志集列表或登录控制台进行查看；也可以调用CreateLogset创建新的日志集。类型：String必选：否<br><li> tagKey按照【标签键】进行过滤。类型：String必选：否<br><li> tag:tagKey按照【标签键值对】进行过滤。tagKey使用具体的标签键进行替换，例如tag:exampleKey。类型：String必选：否<br><li> storageType按照【日志主题的存储类型】进行过滤。可选值 hot（标准存储），cold（低频存储）类型：String必选：否每次请求的Filters的上限为10，Filter.Values的上限为100。
 * @method integer getOffset() 获取分页的偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置分页的偏移量，默认值为0。
 * @method integer getLimit() 获取分页单页限制数目，默认值为20，最大值100。
 * @method void setLimit(integer $Limit) 设置分页单页限制数目，默认值为20，最大值100。
 * @method integer getPreciseSearch() 获取控制Filters相关字段是否为精确匹配。
- 0: 默认值，topicName和logsetName模糊匹配
- 1: topicName精确匹配
- 2: logsetName精确匹配
- 3: topicName和logsetName都精确匹配
 * @method void setPreciseSearch(integer $PreciseSearch) 设置控制Filters相关字段是否为精确匹配。
- 0: 默认值，topicName和logsetName模糊匹配
- 1: topicName精确匹配
- 2: logsetName精确匹配
- 3: topicName和logsetName都精确匹配
 * @method integer getBizType() 获取主题类型
- 0:日志主题，默认值
- 1:指标主题

 * @method void setBizType(integer $BizType) 设置主题类型
- 0:日志主题，默认值
- 1:指标主题
 */
class DescribeTopicsRequest extends AbstractModel
{
    /**
     * @var array <li> topicName按照【日志主题名称】进行过滤，默认为模糊匹配，可使用PreciseSearch参数设置为精确匹配。类型：String必选：否<br><li> logsetName按照【日志集名称】进行过滤，默认为模糊匹配，可使用PreciseSearch参数设置为精确匹配。类型：String必选：否<br><li> topicId按照【日志主题ID】进行过滤。类型：String必选：否<br><li> logsetId按照【日志集ID】进行过滤，可通过调用DescribeLogsets查询已创建的日志集列表或登录控制台进行查看；也可以调用CreateLogset创建新的日志集。类型：String必选：否<br><li> tagKey按照【标签键】进行过滤。类型：String必选：否<br><li> tag:tagKey按照【标签键值对】进行过滤。tagKey使用具体的标签键进行替换，例如tag:exampleKey。类型：String必选：否<br><li> storageType按照【日志主题的存储类型】进行过滤。可选值 hot（标准存储），cold（低频存储）类型：String必选：否每次请求的Filters的上限为10，Filter.Values的上限为100。
     */
    public $Filters;

    /**
     * @var integer 分页的偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 分页单页限制数目，默认值为20，最大值100。
     */
    public $Limit;

    /**
     * @var integer 控制Filters相关字段是否为精确匹配。
- 0: 默认值，topicName和logsetName模糊匹配
- 1: topicName精确匹配
- 2: logsetName精确匹配
- 3: topicName和logsetName都精确匹配
     */
    public $PreciseSearch;

    /**
     * @var integer 主题类型
- 0:日志主题，默认值
- 1:指标主题

     */
    public $BizType;

    /**
     * @param array $Filters <li> topicName按照【日志主题名称】进行过滤，默认为模糊匹配，可使用PreciseSearch参数设置为精确匹配。类型：String必选：否<br><li> logsetName按照【日志集名称】进行过滤，默认为模糊匹配，可使用PreciseSearch参数设置为精确匹配。类型：String必选：否<br><li> topicId按照【日志主题ID】进行过滤。类型：String必选：否<br><li> logsetId按照【日志集ID】进行过滤，可通过调用DescribeLogsets查询已创建的日志集列表或登录控制台进行查看；也可以调用CreateLogset创建新的日志集。类型：String必选：否<br><li> tagKey按照【标签键】进行过滤。类型：String必选：否<br><li> tag:tagKey按照【标签键值对】进行过滤。tagKey使用具体的标签键进行替换，例如tag:exampleKey。类型：String必选：否<br><li> storageType按照【日志主题的存储类型】进行过滤。可选值 hot（标准存储），cold（低频存储）类型：String必选：否每次请求的Filters的上限为10，Filter.Values的上限为100。
     * @param integer $Offset 分页的偏移量，默认值为0。
     * @param integer $Limit 分页单页限制数目，默认值为20，最大值100。
     * @param integer $PreciseSearch 控制Filters相关字段是否为精确匹配。
- 0: 默认值，topicName和logsetName模糊匹配
- 1: topicName精确匹配
- 2: logsetName精确匹配
- 3: topicName和logsetName都精确匹配
     * @param integer $BizType 主题类型
- 0:日志主题，默认值
- 1:指标主题
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PreciseSearch",$param) and $param["PreciseSearch"] !== null) {
            $this->PreciseSearch = $param["PreciseSearch"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }
    }
}

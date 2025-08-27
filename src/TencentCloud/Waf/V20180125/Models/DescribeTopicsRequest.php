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
 * DescribeTopics请求参数结构体
 *
 * @method array getFilters() 获取<ul><li>topicName 按照【日志主题名称】进行过滤，默认为模糊匹配，Filter.Values 当要查询访问日志时为access，查询攻击日志时为attack</li></ul>注意：每次请求的 Filters 的上限为10，Filter.Values 的上限为100。
 * @method void setFilters(array $Filters) 设置<ul><li>topicName 按照【日志主题名称】进行过滤，默认为模糊匹配，Filter.Values 当要查询访问日志时为access，查询攻击日志时为attack</li></ul>注意：每次请求的 Filters 的上限为10，Filter.Values 的上限为100。
 * @method integer getOffset() 获取分页的偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置分页的偏移量，默认值为0。
 * @method integer getLimit() 获取分页单页限制数目，默认值为20，最大值100。
 * @method void setLimit(integer $Limit) 设置分页单页限制数目，默认值为20，最大值100。
 * @method integer getPreciseSearch() 获取控制Filters相关字段是否为精确匹配。
<ul><li>0: 默认值，topicName 和 logsetName 模糊匹配</li>
<li>1: topicName   精确匹配</li>
<li>2: logsetName精确匹配</li>
<li>3: topicName 和logsetName 都精确匹配</li></ul>
 * @method void setPreciseSearch(integer $PreciseSearch) 设置控制Filters相关字段是否为精确匹配。
<ul><li>0: 默认值，topicName 和 logsetName 模糊匹配</li>
<li>1: topicName   精确匹配</li>
<li>2: logsetName精确匹配</li>
<li>3: topicName 和logsetName 都精确匹配</li></ul>
 * @method integer getBizType() 获取主题类型
<ul><li>0:日志主题，默认值</li>
<li>1:指标主题</li></ul>
 * @method void setBizType(integer $BizType) 设置主题类型
<ul><li>0:日志主题，默认值</li>
<li>1:指标主题</li></ul>
 */
class DescribeTopicsRequest extends AbstractModel
{
    /**
     * @var array <ul><li>topicName 按照【日志主题名称】进行过滤，默认为模糊匹配，Filter.Values 当要查询访问日志时为access，查询攻击日志时为attack</li></ul>注意：每次请求的 Filters 的上限为10，Filter.Values 的上限为100。
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
<ul><li>0: 默认值，topicName 和 logsetName 模糊匹配</li>
<li>1: topicName   精确匹配</li>
<li>2: logsetName精确匹配</li>
<li>3: topicName 和logsetName 都精确匹配</li></ul>
     */
    public $PreciseSearch;

    /**
     * @var integer 主题类型
<ul><li>0:日志主题，默认值</li>
<li>1:指标主题</li></ul>
     */
    public $BizType;

    /**
     * @param array $Filters <ul><li>topicName 按照【日志主题名称】进行过滤，默认为模糊匹配，Filter.Values 当要查询访问日志时为access，查询攻击日志时为attack</li></ul>注意：每次请求的 Filters 的上限为10，Filter.Values 的上限为100。
     * @param integer $Offset 分页的偏移量，默认值为0。
     * @param integer $Limit 分页单页限制数目，默认值为20，最大值100。
     * @param integer $PreciseSearch 控制Filters相关字段是否为精确匹配。
<ul><li>0: 默认值，topicName 和 logsetName 模糊匹配</li>
<li>1: topicName   精确匹配</li>
<li>2: logsetName精确匹配</li>
<li>3: topicName 和logsetName 都精确匹配</li></ul>
     * @param integer $BizType 主题类型
<ul><li>0:日志主题，默认值</li>
<li>1:指标主题</li></ul>
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
                $obj = new FilterCls();
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

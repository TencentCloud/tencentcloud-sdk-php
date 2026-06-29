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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCLSLogListV3请求参数结构体
 *
 * @method integer getFrom() 获取<p>开始时间</p>
 * @method void setFrom(integer $From) 设置<p>开始时间</p>
 * @method integer getTo() 获取<p>结束时间</p>
 * @method void setTo(integer $To) 设置<p>结束时间</p>
 * @method string getQuery() 获取<p>查询条件</p>
 * @method void setQuery(string $Query) 设置<p>查询条件</p>
 * @method integer getSyntaxRule() 获取<p>语法</p>
 * @method void setSyntaxRule(integer $SyntaxRule) 设置<p>语法</p>
 * @method array getTopics() 获取<p>主题</p>
 * @method void setTopics(array $Topics) 设置<p>主题</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getSort() 获取<p>排序</p>
 * @method void setSort(string $Sort) 设置<p>排序</p>
 * @method integer getLimit() 获取<p>limit</p>
 * @method void setLimit(integer $Limit) 设置<p>limit</p>
 * @method integer getOffset() 获取<p>offset</p>
 * @method void setOffset(integer $Offset) 设置<p>offset</p>
 * @method float getSamplingRate() 获取<p>采样</p>
 * @method void setSamplingRate(float $SamplingRate) 设置<p>采样</p>
 * @method boolean getHighLight() 获取<p>是否高亮</p>
 * @method void setHighLight(boolean $HighLight) 设置<p>是否高亮</p>
 * @method boolean getUseNewAnalysis() 获取<p>是否采用新分析</p>
 * @method void setUseNewAnalysis(boolean $UseNewAnalysis) 设置<p>是否采用新分析</p>
 * @method integer getQueryOptimize() 获取<p>查询优化</p>
 * @method void setQueryOptimize(integer $QueryOptimize) 设置<p>查询优化</p>
 * @method string getTopicId() 获取<p>主题id</p>
 * @method void setTopicId(string $TopicId) 设置<p>主题id</p>
 * @method string getContext() 获取<p>上下文信息</p>
 * @method void setContext(string $Context) 设置<p>上下文信息</p>
 * @method array getSubQueryTypes() 获取<p>查询类型</p>
 * @method void setSubQueryTypes(array $SubQueryTypes) 设置<p>查询类型</p>
 */
class DescribeCLSLogListV3Request extends AbstractModel
{
    /**
     * @var integer <p>开始时间</p>
     */
    public $From;

    /**
     * @var integer <p>结束时间</p>
     */
    public $To;

    /**
     * @var string <p>查询条件</p>
     */
    public $Query;

    /**
     * @var integer <p>语法</p>
     */
    public $SyntaxRule;

    /**
     * @var array <p>主题</p>
     */
    public $Topics;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>排序</p>
     */
    public $Sort;

    /**
     * @var integer <p>limit</p>
     */
    public $Limit;

    /**
     * @var integer <p>offset</p>
     */
    public $Offset;

    /**
     * @var float <p>采样</p>
     */
    public $SamplingRate;

    /**
     * @var boolean <p>是否高亮</p>
     */
    public $HighLight;

    /**
     * @var boolean <p>是否采用新分析</p>
     */
    public $UseNewAnalysis;

    /**
     * @var integer <p>查询优化</p>
     */
    public $QueryOptimize;

    /**
     * @var string <p>主题id</p>
     */
    public $TopicId;

    /**
     * @var string <p>上下文信息</p>
     */
    public $Context;

    /**
     * @var array <p>查询类型</p>
     */
    public $SubQueryTypes;

    /**
     * @param integer $From <p>开始时间</p>
     * @param integer $To <p>结束时间</p>
     * @param string $Query <p>查询条件</p>
     * @param integer $SyntaxRule <p>语法</p>
     * @param array $Topics <p>主题</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $Sort <p>排序</p>
     * @param integer $Limit <p>limit</p>
     * @param integer $Offset <p>offset</p>
     * @param float $SamplingRate <p>采样</p>
     * @param boolean $HighLight <p>是否高亮</p>
     * @param boolean $UseNewAnalysis <p>是否采用新分析</p>
     * @param integer $QueryOptimize <p>查询优化</p>
     * @param string $TopicId <p>主题id</p>
     * @param string $Context <p>上下文信息</p>
     * @param array $SubQueryTypes <p>查询类型</p>
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
        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("SyntaxRule",$param) and $param["SyntaxRule"] !== null) {
            $this->SyntaxRule = $param["SyntaxRule"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = [];
            foreach ($param["Topics"] as $key => $value){
                $obj = new LogContextInfo();
                $obj->deserialize($value);
                array_push($this->Topics, $obj);
            }
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SamplingRate",$param) and $param["SamplingRate"] !== null) {
            $this->SamplingRate = $param["SamplingRate"];
        }

        if (array_key_exists("HighLight",$param) and $param["HighLight"] !== null) {
            $this->HighLight = $param["HighLight"];
        }

        if (array_key_exists("UseNewAnalysis",$param) and $param["UseNewAnalysis"] !== null) {
            $this->UseNewAnalysis = $param["UseNewAnalysis"];
        }

        if (array_key_exists("QueryOptimize",$param) and $param["QueryOptimize"] !== null) {
            $this->QueryOptimize = $param["QueryOptimize"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("SubQueryTypes",$param) and $param["SubQueryTypes"] !== null) {
            $this->SubQueryTypes = $param["SubQueryTypes"];
        }
    }
}

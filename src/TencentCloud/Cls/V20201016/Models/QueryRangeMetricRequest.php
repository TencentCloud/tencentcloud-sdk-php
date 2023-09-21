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
 * QueryRangeMetric请求参数结构体
 *
 * @method string getTopicId() 获取指标主题ID
 * @method void setTopicId(string $TopicId) 设置指标主题ID
 * @method string getQuery() 获取查询语句，使用PromQL语法
 * @method void setQuery(string $Query) 设置查询语句，使用PromQL语法
 * @method integer getStart() 获取查询起始时间，秒级Unix时间戳
 * @method void setStart(integer $Start) 设置查询起始时间，秒级Unix时间戳
 * @method integer getEnd() 获取查询结束时间，秒级Unix时间戳
 * @method void setEnd(integer $End) 设置查询结束时间，秒级Unix时间戳
 * @method integer getStep() 获取查询时间间隔，单位秒
 * @method void setStep(integer $Step) 设置查询时间间隔，单位秒
 */
class QueryRangeMetricRequest extends AbstractModel
{
    /**
     * @var string 指标主题ID
     */
    public $TopicId;

    /**
     * @var string 查询语句，使用PromQL语法
     */
    public $Query;

    /**
     * @var integer 查询起始时间，秒级Unix时间戳
     */
    public $Start;

    /**
     * @var integer 查询结束时间，秒级Unix时间戳
     */
    public $End;

    /**
     * @var integer 查询时间间隔，单位秒
     */
    public $Step;

    /**
     * @param string $TopicId 指标主题ID
     * @param string $Query 查询语句，使用PromQL语法
     * @param integer $Start 查询起始时间，秒级Unix时间戳
     * @param integer $End 查询结束时间，秒级Unix时间戳
     * @param integer $Step 查询时间间隔，单位秒
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }

        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }
    }
}

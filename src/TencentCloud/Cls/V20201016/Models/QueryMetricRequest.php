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
 * QueryMetric请求参数结构体
 *
 * @method string getQuery() 获取查询语句，使用PromQL语法	
 * @method void setQuery(string $Query) 设置查询语句，使用PromQL语法	
 * @method string getTopicId() 获取指标主题ID
 * @method void setTopicId(string $TopicId) 设置指标主题ID
 * @method integer getTime() 获取查询时间，秒级Unix时间戳	
 * @method void setTime(integer $Time) 设置查询时间，秒级Unix时间戳	
 */
class QueryMetricRequest extends AbstractModel
{
    /**
     * @var string 查询语句，使用PromQL语法	
     */
    public $Query;

    /**
     * @var string 指标主题ID
     */
    public $TopicId;

    /**
     * @var integer 查询时间，秒级Unix时间戳	
     */
    public $Time;

    /**
     * @param string $Query 查询语句，使用PromQL语法	
     * @param string $TopicId 指标主题ID
     * @param integer $Time 查询时间，秒级Unix时间戳	
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
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }
    }
}

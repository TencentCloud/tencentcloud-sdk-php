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
 * DescribeLogHistogram请求参数结构体
 *
 * @method integer getFrom() 获取要查询的日志的起始时间，Unix时间戳，单位ms
 * @method void setFrom(integer $From) 设置要查询的日志的起始时间，Unix时间戳，单位ms
 * @method integer getTo() 获取要查询的日志的结束时间，Unix时间戳，单位ms
 * @method void setTo(integer $To) 设置要查询的日志的结束时间，Unix时间戳，单位ms
 * @method string getQuery() 获取查询语句
 * @method void setQuery(string $Query) 设置查询语句
 * @method string getTopicId() 获取要查询的日志主题ID
 * @method void setTopicId(string $TopicId) 设置要查询的日志主题ID
 * @method integer getInterval() 获取时间间隔: 单位ms  限制性条件：(To-From) / interval <= 200
 * @method void setInterval(integer $Interval) 设置时间间隔: 单位ms  限制性条件：(To-From) / interval <= 200
 */
class DescribeLogHistogramRequest extends AbstractModel
{
    /**
     * @var integer 要查询的日志的起始时间，Unix时间戳，单位ms
     */
    public $From;

    /**
     * @var integer 要查询的日志的结束时间，Unix时间戳，单位ms
     */
    public $To;

    /**
     * @var string 查询语句
     */
    public $Query;

    /**
     * @var string 要查询的日志主题ID
     */
    public $TopicId;

    /**
     * @var integer 时间间隔: 单位ms  限制性条件：(To-From) / interval <= 200
     */
    public $Interval;

    /**
     * @param integer $From 要查询的日志的起始时间，Unix时间戳，单位ms
     * @param integer $To 要查询的日志的结束时间，Unix时间戳，单位ms
     * @param string $Query 查询语句
     * @param string $TopicId 要查询的日志主题ID
     * @param integer $Interval 时间间隔: 单位ms  限制性条件：(To-From) / interval <= 200
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

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}

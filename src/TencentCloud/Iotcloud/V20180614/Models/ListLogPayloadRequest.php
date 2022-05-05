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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListLogPayload请求参数结构体
 *
 * @method integer getMinTime() 获取日志开始时间，毫秒级时间戳
 * @method void setMinTime(integer $MinTime) 设置日志开始时间，毫秒级时间戳
 * @method integer getMaxTime() 获取日志结束时间，毫秒级时间戳
 * @method void setMaxTime(integer $MaxTime) 设置日志结束时间，毫秒级时间戳
 * @method string getKeywords() 获取查询关键字，可以同时支持键值查询和文本查询，例如，查询某key的值为value，并且包含某word的日志，该参数为：key:value word。键值或文本可以包含多个，以空格隔开。其中可以索引的key比如：RequestID、ProductID、DeviceName等。
一个典型的查询示例：ProductID:ABCDE12345 DeviceName:test publish
 * @method void setKeywords(string $Keywords) 设置查询关键字，可以同时支持键值查询和文本查询，例如，查询某key的值为value，并且包含某word的日志，该参数为：key:value word。键值或文本可以包含多个，以空格隔开。其中可以索引的key比如：RequestID、ProductID、DeviceName等。
一个典型的查询示例：ProductID:ABCDE12345 DeviceName:test publish
 * @method string getContext() 获取日志检索上下文
 * @method void setContext(string $Context) 设置日志检索上下文
 * @method integer getMaxNum() 获取日志最大条数
 * @method void setMaxNum(integer $MaxNum) 设置日志最大条数
 */
class ListLogPayloadRequest extends AbstractModel
{
    /**
     * @var integer 日志开始时间，毫秒级时间戳
     */
    public $MinTime;

    /**
     * @var integer 日志结束时间，毫秒级时间戳
     */
    public $MaxTime;

    /**
     * @var string 查询关键字，可以同时支持键值查询和文本查询，例如，查询某key的值为value，并且包含某word的日志，该参数为：key:value word。键值或文本可以包含多个，以空格隔开。其中可以索引的key比如：RequestID、ProductID、DeviceName等。
一个典型的查询示例：ProductID:ABCDE12345 DeviceName:test publish
     */
    public $Keywords;

    /**
     * @var string 日志检索上下文
     */
    public $Context;

    /**
     * @var integer 日志最大条数
     */
    public $MaxNum;

    /**
     * @param integer $MinTime 日志开始时间，毫秒级时间戳
     * @param integer $MaxTime 日志结束时间，毫秒级时间戳
     * @param string $Keywords 查询关键字，可以同时支持键值查询和文本查询，例如，查询某key的值为value，并且包含某word的日志，该参数为：key:value word。键值或文本可以包含多个，以空格隔开。其中可以索引的key比如：RequestID、ProductID、DeviceName等。
一个典型的查询示例：ProductID:ABCDE12345 DeviceName:test publish
     * @param string $Context 日志检索上下文
     * @param integer $MaxNum 日志最大条数
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
        if (array_key_exists("MinTime",$param) and $param["MinTime"] !== null) {
            $this->MinTime = $param["MinTime"];
        }

        if (array_key_exists("MaxTime",$param) and $param["MaxTime"] !== null) {
            $this->MaxTime = $param["MaxTime"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("MaxNum",$param) and $param["MaxNum"] !== null) {
            $this->MaxNum = $param["MaxNum"];
        }
    }
}

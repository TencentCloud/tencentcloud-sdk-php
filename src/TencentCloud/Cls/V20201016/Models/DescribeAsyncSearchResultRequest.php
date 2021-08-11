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
 * DescribeAsyncSearchResult请求参数结构体
 *
 * @method string getAsyncSearchTaskId() 获取异步检索任务ID
 * @method void setAsyncSearchTaskId(string $AsyncSearchTaskId) 设置异步检索任务ID
 * @method string getTopicId() 获取日志集ID
 * @method void setTopicId(string $TopicId) 设置日志集ID
 * @method string getContext() 获取加载更多日志时使用，透传上次返回的Context值，获取后续的日志内容
 * @method void setContext(string $Context) 设置加载更多日志时使用，透传上次返回的Context值，获取后续的日志内容
 * @method integer getLimit() 获取单次调用返回的日志条数，默认为20，最大为500
 * @method void setLimit(integer $Limit) 设置单次调用返回的日志条数，默认为20，最大为500
 */
class DescribeAsyncSearchResultRequest extends AbstractModel
{
    /**
     * @var string 异步检索任务ID
     */
    public $AsyncSearchTaskId;

    /**
     * @var string 日志集ID
     */
    public $TopicId;

    /**
     * @var string 加载更多日志时使用，透传上次返回的Context值，获取后续的日志内容
     */
    public $Context;

    /**
     * @var integer 单次调用返回的日志条数，默认为20，最大为500
     */
    public $Limit;

    /**
     * @param string $AsyncSearchTaskId 异步检索任务ID
     * @param string $TopicId 日志集ID
     * @param string $Context 加载更多日志时使用，透传上次返回的Context值，获取后续的日志内容
     * @param integer $Limit 单次调用返回的日志条数，默认为20，最大为500
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
        if (array_key_exists("AsyncSearchTaskId",$param) and $param["AsyncSearchTaskId"] !== null) {
            $this->AsyncSearchTaskId = $param["AsyncSearchTaskId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

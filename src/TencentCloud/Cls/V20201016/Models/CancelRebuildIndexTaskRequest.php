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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CancelRebuildIndexTask请求参数结构体
 *
 * @method string getTopicId() 获取<p>日志主题ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/614/56454">DescribeTopics</a></p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/614/56454">DescribeTopics</a></p>
 * @method string getTaskId() 获取<p>索引重建任务ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/614/127535">DescribeRebuildIndexTasks</a></p>
 * @method void setTaskId(string $TaskId) 设置<p>索引重建任务ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/614/127535">DescribeRebuildIndexTasks</a></p>
 */
class CancelRebuildIndexTaskRequest extends AbstractModel
{
    /**
     * @var string <p>日志主题ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/614/56454">DescribeTopics</a></p>
     */
    public $TopicId;

    /**
     * @var string <p>索引重建任务ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/614/127535">DescribeRebuildIndexTasks</a></p>
     */
    public $TaskId;

    /**
     * @param string $TopicId <p>日志主题ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/614/56454">DescribeTopics</a></p>
     * @param string $TaskId <p>索引重建任务ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/614/127535">DescribeRebuildIndexTasks</a></p>
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}

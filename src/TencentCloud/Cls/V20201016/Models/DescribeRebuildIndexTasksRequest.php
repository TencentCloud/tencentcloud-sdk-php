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
 * DescribeRebuildIndexTasks请求参数结构体
 *
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method string getTaskId() 获取索引重建任务ID
 * @method void setTaskId(string $TaskId) 设置索引重建任务ID
 * @method string getStatus() 获取索引重建任务状态，不填返回所有状态任务列表，多种状态之间用逗号分隔，0:索引重建任务已创建，1:已创建索引重建资源，2:重建中，3:重建完成，4:重建成功（可检索），5:任务取消，6:元数据和索引已删除
 * @method void setStatus(string $Status) 设置索引重建任务状态，不填返回所有状态任务列表，多种状态之间用逗号分隔，0:索引重建任务已创建，1:已创建索引重建资源，2:重建中，3:重建完成，4:重建成功（可检索），5:任务取消，6:元数据和索引已删除
 * @method integer getOffset() 获取分页的偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置分页的偏移量，默认值为0。
 * @method integer getLimit() 获取分页单页限制数目，默认值为10，最大值20。
 * @method void setLimit(integer $Limit) 设置分页单页限制数目，默认值为10，最大值20。
 */
class DescribeRebuildIndexTasksRequest extends AbstractModel
{
    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var string 索引重建任务ID
     */
    public $TaskId;

    /**
     * @var string 索引重建任务状态，不填返回所有状态任务列表，多种状态之间用逗号分隔，0:索引重建任务已创建，1:已创建索引重建资源，2:重建中，3:重建完成，4:重建成功（可检索），5:任务取消，6:元数据和索引已删除
     */
    public $Status;

    /**
     * @var integer 分页的偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 分页单页限制数目，默认值为10，最大值20。
     */
    public $Limit;

    /**
     * @param string $TopicId 日志主题ID
     * @param string $TaskId 索引重建任务ID
     * @param string $Status 索引重建任务状态，不填返回所有状态任务列表，多种状态之间用逗号分隔，0:索引重建任务已创建，1:已创建索引重建资源，2:重建中，3:重建完成，4:重建成功（可检索），5:任务取消，6:元数据和索引已删除
     * @param integer $Offset 分页的偏移量，默认值为0。
     * @param integer $Limit 分页单页限制数目，默认值为10，最大值20。
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

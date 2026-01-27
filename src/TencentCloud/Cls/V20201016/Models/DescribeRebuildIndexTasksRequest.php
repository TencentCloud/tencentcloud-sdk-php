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
 * @method string getTopicId() 获取<p>日志主题ID</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题ID</p>
 * @method string getTaskId() 获取<p>索引重建任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>索引重建任务ID</p>
 * @method string getStatus() 获取<p>索引重建任务状态，不填返回所有状态任务列表，多种状态之间用逗号分隔。</p><p>枚举值：</p><ul><li>0： 索引重建任务已创建</li><li>1： 正在创建索引重建资源</li><li>2： 已创建索引重建资源</li><li>3： 重建中</li><li>4： 暂停</li><li>5： 重建完成</li><li>6： 重建成功（可检索）</li><li>7： 重建失败</li><li>8： 任务取消</li><li>9： 元数据和索引已删除</li></ul>
 * @method void setStatus(string $Status) 设置<p>索引重建任务状态，不填返回所有状态任务列表，多种状态之间用逗号分隔。</p><p>枚举值：</p><ul><li>0： 索引重建任务已创建</li><li>1： 正在创建索引重建资源</li><li>2： 已创建索引重建资源</li><li>3： 重建中</li><li>4： 暂停</li><li>5： 重建完成</li><li>6： 重建成功（可检索）</li><li>7： 重建失败</li><li>8： 任务取消</li><li>9： 元数据和索引已删除</li></ul>
 * @method integer getOffset() 获取<p>分页的偏移量，默认值为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页的偏移量，默认值为0。</p>
 * @method integer getLimit() 获取<p>分页单页限制数目，默认值为10，最大值20。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页单页限制数目，默认值为10，最大值20。</p>
 */
class DescribeRebuildIndexTasksRequest extends AbstractModel
{
    /**
     * @var string <p>日志主题ID</p>
     */
    public $TopicId;

    /**
     * @var string <p>索引重建任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>索引重建任务状态，不填返回所有状态任务列表，多种状态之间用逗号分隔。</p><p>枚举值：</p><ul><li>0： 索引重建任务已创建</li><li>1： 正在创建索引重建资源</li><li>2： 已创建索引重建资源</li><li>3： 重建中</li><li>4： 暂停</li><li>5： 重建完成</li><li>6： 重建成功（可检索）</li><li>7： 重建失败</li><li>8： 任务取消</li><li>9： 元数据和索引已删除</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>分页的偏移量，默认值为0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页单页限制数目，默认值为10，最大值20。</p>
     */
    public $Limit;

    /**
     * @param string $TopicId <p>日志主题ID</p>
     * @param string $TaskId <p>索引重建任务ID</p>
     * @param string $Status <p>索引重建任务状态，不填返回所有状态任务列表，多种状态之间用逗号分隔。</p><p>枚举值：</p><ul><li>0： 索引重建任务已创建</li><li>1： 正在创建索引重建资源</li><li>2： 已创建索引重建资源</li><li>3： 重建中</li><li>4： 暂停</li><li>5： 重建完成</li><li>6： 重建成功（可检索）</li><li>7： 重建失败</li><li>8： 任务取消</li><li>9： 元数据和索引已删除</li></ul>
     * @param integer $Offset <p>分页的偏移量，默认值为0。</p>
     * @param integer $Limit <p>分页单页限制数目，默认值为10，最大值20。</p>
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

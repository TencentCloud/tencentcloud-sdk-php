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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 迁移任务信息
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getType() 获取0 - 未指定（存量）
1 - 元数据导入
 * @method void setType(integer $Type) 设置0 - 未指定（存量）
1 - 元数据导入
 * @method integer getTopicNum() 获取主题总数
 * @method void setTopicNum(integer $TopicNum) 设置主题总数
 * @method integer getGroupNum() 获取消费组总数
 * @method void setGroupNum(integer $GroupNum) 设置消费组总数
 * @method integer getStatus() 获取任务状态： 0，迁移中 1，迁移成功 2，迁移完成，只有部分数据完成迁移
 * @method void setStatus(integer $Status) 设置任务状态： 0，迁移中 1，迁移成功 2，迁移完成，只有部分数据完成迁移
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 */
class MigrationTaskItem extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 0 - 未指定（存量）
1 - 元数据导入
     */
    public $Type;

    /**
     * @var integer 主题总数
     */
    public $TopicNum;

    /**
     * @var integer 消费组总数
     */
    public $GroupNum;

    /**
     * @var integer 任务状态： 0，迁移中 1，迁移成功 2，迁移完成，只有部分数据完成迁移
     */
    public $Status;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @param string $TaskId 任务ID
     * @param string $InstanceId 实例ID
     * @param integer $Type 0 - 未指定（存量）
1 - 元数据导入
     * @param integer $TopicNum 主题总数
     * @param integer $GroupNum 消费组总数
     * @param integer $Status 任务状态： 0，迁移中 1，迁移成功 2，迁移完成，只有部分数据完成迁移
     * @param integer $CreateTime 创建时间
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("GroupNum",$param) and $param["GroupNum"] !== null) {
            $this->GroupNum = $param["GroupNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}

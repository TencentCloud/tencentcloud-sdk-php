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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListSendTasks请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，整型，从0开始，0代表跳过0行
 * @method void setOffset(integer $Offset) 设置偏移量，整型，从0开始，0代表跳过0行
 * @method integer getLimit() 获取限制数目，整型,不超过100
 * @method void setLimit(integer $Limit) 设置限制数目，整型,不超过100
 * @method integer getStatus() 获取任务状态 1 待开始 5 发送中 6 今日暂停发送  7 发信异常 10 发送完成。查询所有状态，则不传这个字段
 * @method void setStatus(integer $Status) 设置任务状态 1 待开始 5 发送中 6 今日暂停发送  7 发信异常 10 发送完成。查询所有状态，则不传这个字段
 * @method integer getReceiverId() 获取收件人列表ID
 * @method void setReceiverId(integer $ReceiverId) 设置收件人列表ID
 * @method integer getTaskType() 获取任务类型 1即时 2定时 3周期，查询所有类型则不传这个字段
 * @method void setTaskType(integer $TaskType) 设置任务类型 1即时 2定时 3周期，查询所有类型则不传这个字段
 */
class ListSendTasksRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，整型，从0开始，0代表跳过0行
     */
    public $Offset;

    /**
     * @var integer 限制数目，整型,不超过100
     */
    public $Limit;

    /**
     * @var integer 任务状态 1 待开始 5 发送中 6 今日暂停发送  7 发信异常 10 发送完成。查询所有状态，则不传这个字段
     */
    public $Status;

    /**
     * @var integer 收件人列表ID
     */
    public $ReceiverId;

    /**
     * @var integer 任务类型 1即时 2定时 3周期，查询所有类型则不传这个字段
     */
    public $TaskType;

    /**
     * @param integer $Offset 偏移量，整型，从0开始，0代表跳过0行
     * @param integer $Limit 限制数目，整型,不超过100
     * @param integer $Status 任务状态 1 待开始 5 发送中 6 今日暂停发送  7 发信异常 10 发送完成。查询所有状态，则不传这个字段
     * @param integer $ReceiverId 收件人列表ID
     * @param integer $TaskType 任务类型 1即时 2定时 3周期，查询所有类型则不传这个字段
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ReceiverId",$param) and $param["ReceiverId"] !== null) {
            $this->ReceiverId = $param["ReceiverId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}

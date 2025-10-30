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
 * DescribeMQTTMessageList请求参数结构体
 *
 * @method string getInstanceId() 获取集群ID
 * @method void setInstanceId(string $InstanceId) 设置集群ID
 * @method string getTopic() 获取主题名称
 * @method void setTopic(string $Topic) 设置主题名称
 * @method integer getStartTime() 获取开始时间
 * @method void setStartTime(integer $StartTime) 设置开始时间
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 * @method string getTaskRequestId() 获取请求任务id
 * @method void setTaskRequestId(string $TaskRequestId) 设置请求任务id
 * @method integer getOffset() 获取查询起始位置
 * @method void setOffset(integer $Offset) 设置查询起始位置
 * @method integer getLimit() 获取查询结果限制数量
 * @method void setLimit(integer $Limit) 设置查询结果限制数量
 */
class DescribeMQTTMessageListRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $InstanceId;

    /**
     * @var string 主题名称
     */
    public $Topic;

    /**
     * @var integer 开始时间
     */
    public $StartTime;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @var string 请求任务id
     */
    public $TaskRequestId;

    /**
     * @var integer 查询起始位置
     */
    public $Offset;

    /**
     * @var integer 查询结果限制数量
     */
    public $Limit;

    /**
     * @param string $InstanceId 集群ID
     * @param string $Topic 主题名称
     * @param integer $StartTime 开始时间
     * @param integer $EndTime 结束时间
     * @param string $TaskRequestId 请求任务id
     * @param integer $Offset 查询起始位置
     * @param integer $Limit 查询结果限制数量
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskRequestId",$param) and $param["TaskRequestId"] !== null) {
            $this->TaskRequestId = $param["TaskRequestId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

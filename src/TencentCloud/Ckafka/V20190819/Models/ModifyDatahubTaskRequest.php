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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDatahubTask请求参数结构体
 *
 * @method string getTaskId() 获取<p>任务id</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务id</p>
 * @method string getTaskName() 获取<p>任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
 * @method string getDescription() 获取<p>任务描述信息</p>
 * @method void setDescription(string $Description) 设置<p>任务描述信息</p>
 * @method integer getTasksMax() 获取<p>任务并发上限</p>
 * @method void setTasksMax(integer $TasksMax) 设置<p>任务并发上限</p>
 * @method integer getSyncThrottleLimit() 获取<p>数据同步限流值上限</p>单位：MB/s
 * @method void setSyncThrottleLimit(integer $SyncThrottleLimit) 设置<p>数据同步限流值上限</p>单位：MB/s
 * @method boolean getAutoExpandFlag() 获取<p>开启自动扩容</p>枚举值：<ul><li> true： 自动扩容</li><li> false： 手动扩容</li></ul>
 * @method void setAutoExpandFlag(boolean $AutoExpandFlag) 设置<p>开启自动扩容</p>枚举值：<ul><li> true： 自动扩容</li><li> false： 手动扩容</li></ul>
 */
class ModifyDatahubTaskRequest extends AbstractModel
{
    /**
     * @var string <p>任务id</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>任务描述信息</p>
     */
    public $Description;

    /**
     * @var integer <p>任务并发上限</p>
     */
    public $TasksMax;

    /**
     * @var integer <p>数据同步限流值上限</p>单位：MB/s
     */
    public $SyncThrottleLimit;

    /**
     * @var boolean <p>开启自动扩容</p>枚举值：<ul><li> true： 自动扩容</li><li> false： 手动扩容</li></ul>
     */
    public $AutoExpandFlag;

    /**
     * @param string $TaskId <p>任务id</p>
     * @param string $TaskName <p>任务名称</p>
     * @param string $Description <p>任务描述信息</p>
     * @param integer $TasksMax <p>任务并发上限</p>
     * @param integer $SyncThrottleLimit <p>数据同步限流值上限</p>单位：MB/s
     * @param boolean $AutoExpandFlag <p>开启自动扩容</p>枚举值：<ul><li> true： 自动扩容</li><li> false： 手动扩容</li></ul>
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TasksMax",$param) and $param["TasksMax"] !== null) {
            $this->TasksMax = $param["TasksMax"];
        }

        if (array_key_exists("SyncThrottleLimit",$param) and $param["SyncThrottleLimit"] !== null) {
            $this->SyncThrottleLimit = $param["SyncThrottleLimit"];
        }

        if (array_key_exists("AutoExpandFlag",$param) and $param["AutoExpandFlag"] !== null) {
            $this->AutoExpandFlag = $param["AutoExpandFlag"];
        }
    }
}

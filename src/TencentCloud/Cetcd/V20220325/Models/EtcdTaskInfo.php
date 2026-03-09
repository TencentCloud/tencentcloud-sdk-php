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
namespace TencentCloud\Cetcd\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * etcd task信息
 *
 * @method string getTaskID() 获取任务ID
 * @method void setTaskID(string $TaskID) 设置任务ID
 * @method string getTaskType() 获取任务类型
 * @method void setTaskType(string $TaskType) 设置任务类型
 * @method string getResourceID() 获取资源ID
 * @method void setResourceID(string $ResourceID) 设置资源ID
 * @method string getLifeState() 获取任务状态
 * @method void setLifeState(string $LifeState) 设置任务状态
 * @method string getCreatedAt() 获取任务创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置任务创建时间
 * @method string getUpdatedAt() 获取任务更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置任务更新时间
 */
class EtcdTaskInfo extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskID;

    /**
     * @var string 任务类型
     */
    public $TaskType;

    /**
     * @var string 资源ID
     */
    public $ResourceID;

    /**
     * @var string 任务状态
     */
    public $LifeState;

    /**
     * @var string 任务创建时间
     */
    public $CreatedAt;

    /**
     * @var string 任务更新时间
     */
    public $UpdatedAt;

    /**
     * @param string $TaskID 任务ID
     * @param string $TaskType 任务类型
     * @param string $ResourceID 资源ID
     * @param string $LifeState 任务状态
     * @param string $CreatedAt 任务创建时间
     * @param string $UpdatedAt 任务更新时间
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
        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ResourceID",$param) and $param["ResourceID"] !== null) {
            $this->ResourceID = $param["ResourceID"];
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}

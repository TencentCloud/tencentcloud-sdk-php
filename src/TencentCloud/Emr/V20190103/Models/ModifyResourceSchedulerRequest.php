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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyResourceScheduler请求参数结构体
 *
 * @method string getInstanceId() 获取emr集群的英文id
 * @method void setInstanceId(string $InstanceId) 设置emr集群的英文id
 * @method string getOldValue() 获取老的调度器:fair
 * @method void setOldValue(string $OldValue) 设置老的调度器:fair
 * @method string getNewValue() 获取新的调度器:capacity
 * @method void setNewValue(string $NewValue) 设置新的调度器:capacity
 */
class ModifyResourceSchedulerRequest extends AbstractModel
{
    /**
     * @var string emr集群的英文id
     */
    public $InstanceId;

    /**
     * @var string 老的调度器:fair
     */
    public $OldValue;

    /**
     * @var string 新的调度器:capacity
     */
    public $NewValue;

    /**
     * @param string $InstanceId emr集群的英文id
     * @param string $OldValue 老的调度器:fair
     * @param string $NewValue 新的调度器:capacity
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

        if (array_key_exists("OldValue",$param) and $param["OldValue"] !== null) {
            $this->OldValue = $param["OldValue"];
        }

        if (array_key_exists("NewValue",$param) and $param["NewValue"] !== null) {
            $this->NewValue = $param["NewValue"];
        }
    }
}

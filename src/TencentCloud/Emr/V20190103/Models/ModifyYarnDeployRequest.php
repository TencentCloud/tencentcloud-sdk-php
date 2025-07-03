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
 * ModifyYarnDeploy请求参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method string getNewScheduler() 获取切换后的调度器，可选值为fair、capacity
 * @method void setNewScheduler(string $NewScheduler) 设置切换后的调度器，可选值为fair、capacity
 * @method string getOldScheduler() 获取现在使用的调度器，可选值为fair、capacity
 * @method void setOldScheduler(string $OldScheduler) 设置现在使用的调度器，可选值为fair、capacity
 */
class ModifyYarnDeployRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var string 切换后的调度器，可选值为fair、capacity
     */
    public $NewScheduler;

    /**
     * @var string 现在使用的调度器，可选值为fair、capacity
     */
    public $OldScheduler;

    /**
     * @param string $InstanceId 集群id
     * @param string $NewScheduler 切换后的调度器，可选值为fair、capacity
     * @param string $OldScheduler 现在使用的调度器，可选值为fair、capacity
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

        if (array_key_exists("NewScheduler",$param) and $param["NewScheduler"] !== null) {
            $this->NewScheduler = $param["NewScheduler"];
        }

        if (array_key_exists("OldScheduler",$param) and $param["OldScheduler"] !== null) {
            $this->OldScheduler = $param["OldScheduler"];
        }
    }
}

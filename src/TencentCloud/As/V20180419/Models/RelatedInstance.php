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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 与本次伸缩活动相关的实例信息。
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getInstanceStatus() 获取实例在伸缩活动中的状态。取值如下：
INIT：初始化中
RUNNING：实例操作中
SUCCESSFUL：活动成功
FAILED：活动失败
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例在伸缩活动中的状态。取值如下：
INIT：初始化中
RUNNING：实例操作中
SUCCESSFUL：活动成功
FAILED：活动失败
 */
class RelatedInstance extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 实例在伸缩活动中的状态。取值如下：
INIT：初始化中
RUNNING：实例操作中
SUCCESSFUL：活动成功
FAILED：活动失败
     */
    public $InstanceStatus;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $InstanceStatus 实例在伸缩活动中的状态。取值如下：
INIT：初始化中
RUNNING：实例操作中
SUCCESSFUL：活动成功
FAILED：活动失败
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

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }
    }
}

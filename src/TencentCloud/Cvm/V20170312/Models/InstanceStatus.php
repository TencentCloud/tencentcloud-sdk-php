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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取实例`ID`。
 * @method void setInstanceId(string $InstanceId) 设置实例`ID`。
 * @method string getInstanceState() 获取[实例状态](/document/api/213/9452#INSTANCE_STATE)。
 * @method void setInstanceState(string $InstanceState) 设置[实例状态](/document/api/213/9452#INSTANCE_STATE)。
 */

/**
 *描述实例的状态。状态类型详见[实例状态表](/document/api/213/9452#INSTANCE_STATE)
 */
class InstanceStatus extends AbstractModel
{
    /**
     * @var string 实例`ID`。
     */
    public $InstanceId;

    /**
     * @var string [实例状态](/document/api/213/9452#INSTANCE_STATE)。
     */
    public $InstanceState;
    /**
     * @param string $InstanceId 实例`ID`。
     * @param string $InstanceState [实例状态](/document/api/213/9452#INSTANCE_STATE)。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }
    }
}

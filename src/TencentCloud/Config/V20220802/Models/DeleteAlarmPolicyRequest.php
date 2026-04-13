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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAlarmPolicy请求参数结构体
 *
 * @method integer getAlarmPolicyId() 获取告警策略id
 * @method void setAlarmPolicyId(integer $AlarmPolicyId) 设置告警策略id
 */
class DeleteAlarmPolicyRequest extends AbstractModel
{
    /**
     * @var integer 告警策略id
     */
    public $AlarmPolicyId;

    /**
     * @param integer $AlarmPolicyId 告警策略id
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
        if (array_key_exists("AlarmPolicyId",$param) and $param["AlarmPolicyId"] !== null) {
            $this->AlarmPolicyId = $param["AlarmPolicyId"];
        }
    }
}

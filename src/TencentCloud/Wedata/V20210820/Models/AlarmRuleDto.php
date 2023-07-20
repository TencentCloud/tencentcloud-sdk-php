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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警规则
 *
 * @method string getAlarmRuleId() 获取告警规则id
 * @method void setAlarmRuleId(string $AlarmRuleId) 设置告警规则id
 * @method string getAlarmLevelType() 获取重要;
紧急;
普通
 * @method void setAlarmLevelType(string $AlarmLevelType) 设置重要;
紧急;
普通
 */
class AlarmRuleDto extends AbstractModel
{
    /**
     * @var string 告警规则id
     */
    public $AlarmRuleId;

    /**
     * @var string 重要;
紧急;
普通
     */
    public $AlarmLevelType;

    /**
     * @param string $AlarmRuleId 告警规则id
     * @param string $AlarmLevelType 重要;
紧急;
普通
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
        if (array_key_exists("AlarmRuleId",$param) and $param["AlarmRuleId"] !== null) {
            $this->AlarmRuleId = $param["AlarmRuleId"];
        }

        if (array_key_exists("AlarmLevelType",$param) and $param["AlarmLevelType"] !== null) {
            $this->AlarmLevelType = $param["AlarmLevelType"];
        }
    }
}

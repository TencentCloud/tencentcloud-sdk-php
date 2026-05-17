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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmRiskStatus请求参数结构体
 *
 * @method array getAlarmRiskIdSet() 获取告警或者风险id
 * @method void setAlarmRiskIdSet(array $AlarmRiskIdSet) 设置告警或者风险id
 * @method integer getAlarmRiskType() 获取风险或告警状态  1 告警 2风险
 * @method void setAlarmRiskType(integer $AlarmRiskType) 设置风险或告警状态  1 告警 2风险
 * @method integer getHandleStatus() 获取处置状态
 * @method void setHandleStatus(integer $HandleStatus) 设置处置状态
 */
class ModifyAlarmRiskStatusRequest extends AbstractModel
{
    /**
     * @var array 告警或者风险id
     */
    public $AlarmRiskIdSet;

    /**
     * @var integer 风险或告警状态  1 告警 2风险
     */
    public $AlarmRiskType;

    /**
     * @var integer 处置状态
     */
    public $HandleStatus;

    /**
     * @param array $AlarmRiskIdSet 告警或者风险id
     * @param integer $AlarmRiskType 风险或告警状态  1 告警 2风险
     * @param integer $HandleStatus 处置状态
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
        if (array_key_exists("AlarmRiskIdSet",$param) and $param["AlarmRiskIdSet"] !== null) {
            $this->AlarmRiskIdSet = [];
            foreach ($param["AlarmRiskIdSet"] as $key => $value){
                $obj = new CosAlarmRiskIdInfo();
                $obj->deserialize($value);
                array_push($this->AlarmRiskIdSet, $obj);
            }
        }

        if (array_key_exists("AlarmRiskType",$param) and $param["AlarmRiskType"] !== null) {
            $this->AlarmRiskType = $param["AlarmRiskType"];
        }

        if (array_key_exists("HandleStatus",$param) and $param["HandleStatus"] !== null) {
            $this->HandleStatus = $param["HandleStatus"];
        }
    }
}

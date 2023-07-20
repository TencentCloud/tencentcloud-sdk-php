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
 * BaselineDetailResponse
 *
 * @method BaselineDto getBaselineDto() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaselineDto(BaselineDto $BaselineDto) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method CreateAlarmRuleRequest getBaselineCreateAlarmRuleRequest() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaselineCreateAlarmRuleRequest(CreateAlarmRuleRequest $BaselineCreateAlarmRuleRequest) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsNewAlarm() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNewAlarm(boolean $IsNewAlarm) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselineDetailResponse extends AbstractModel
{
    /**
     * @var BaselineDto 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaselineDto;

    /**
     * @var CreateAlarmRuleRequest 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaselineCreateAlarmRuleRequest;

    /**
     * @var boolean 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNewAlarm;

    /**
     * @param BaselineDto $BaselineDto 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param CreateAlarmRuleRequest $BaselineCreateAlarmRuleRequest 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsNewAlarm 无
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("BaselineDto",$param) and $param["BaselineDto"] !== null) {
            $this->BaselineDto = new BaselineDto();
            $this->BaselineDto->deserialize($param["BaselineDto"]);
        }

        if (array_key_exists("BaselineCreateAlarmRuleRequest",$param) and $param["BaselineCreateAlarmRuleRequest"] !== null) {
            $this->BaselineCreateAlarmRuleRequest = new CreateAlarmRuleRequest();
            $this->BaselineCreateAlarmRuleRequest->deserialize($param["BaselineCreateAlarmRuleRequest"]);
        }

        if (array_key_exists("IsNewAlarm",$param) and $param["IsNewAlarm"] !== null) {
            $this->IsNewAlarm = $param["IsNewAlarm"];
        }
    }
}

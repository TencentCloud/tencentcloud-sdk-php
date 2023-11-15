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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警级别枚举获取
 *
 * @method array getAlarmLevelSet() 获取告警级别枚举获取数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmLevelSet(array $AlarmLevelSet) 设置告警级别枚举获取数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeAlarmLevelListRes extends AbstractModel
{
    /**
     * @var array 告警级别枚举获取数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmLevelSet;

    /**
     * @param array $AlarmLevelSet 告警级别枚举获取数组
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
        if (array_key_exists("AlarmLevelSet",$param) and $param["AlarmLevelSet"] !== null) {
            $this->AlarmLevelSet = [];
            foreach ($param["AlarmLevelSet"] as $key => $value){
                $obj = new AlarmLevelInfo();
                $obj->deserialize($value);
                array_push($this->AlarmLevelSet, $obj);
            }
        }
    }
}

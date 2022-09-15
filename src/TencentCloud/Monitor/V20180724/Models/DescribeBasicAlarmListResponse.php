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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBasicAlarmList返回参数结构体
 *
 * @method array getAlarms() 获取告警列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarms(array $Alarms) 设置告警列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWarning() 获取备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarning(string $Warning) 设置备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBasicAlarmListResponse extends AbstractModel
{
    /**
     * @var array 告警列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alarms;

    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var string 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Warning;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Alarms 告警列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Warning 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Alarms",$param) and $param["Alarms"] !== null) {
            $this->Alarms = [];
            foreach ($param["Alarms"] as $key => $value){
                $obj = new DescribeBasicAlarmListAlarms();
                $obj->deserialize($value);
                array_push($this->Alarms, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Warning",$param) and $param["Warning"] !== null) {
            $this->Warning = $param["Warning"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

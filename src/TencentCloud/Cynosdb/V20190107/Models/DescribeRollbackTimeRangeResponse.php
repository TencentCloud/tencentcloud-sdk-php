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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRollbackTimeRange返回参数结构体
 *
 * @method string getTimeRangeStart() 获取有效回归时间范围开始时间点（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeRangeStart(string $TimeRangeStart) 设置有效回归时间范围开始时间点（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeRangeEnd() 获取有效回归时间范围结束时间点（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeRangeEnd(string $TimeRangeEnd) 设置有效回归时间范围结束时间点（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRollbackTimeRanges() 获取可回档时间范围
 * @method void setRollbackTimeRanges(array $RollbackTimeRanges) 设置可回档时间范围
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRollbackTimeRangeResponse extends AbstractModel
{
    /**
     * @var string 有效回归时间范围开始时间点（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeRangeStart;

    /**
     * @var string 有效回归时间范围结束时间点（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeRangeEnd;

    /**
     * @var array 可回档时间范围
     */
    public $RollbackTimeRanges;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TimeRangeStart 有效回归时间范围开始时间点（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeRangeEnd 有效回归时间范围结束时间点（已废弃）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RollbackTimeRanges 可回档时间范围
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
        if (array_key_exists("TimeRangeStart",$param) and $param["TimeRangeStart"] !== null) {
            $this->TimeRangeStart = $param["TimeRangeStart"];
        }

        if (array_key_exists("TimeRangeEnd",$param) and $param["TimeRangeEnd"] !== null) {
            $this->TimeRangeEnd = $param["TimeRangeEnd"];
        }

        if (array_key_exists("RollbackTimeRanges",$param) and $param["RollbackTimeRanges"] !== null) {
            $this->RollbackTimeRanges = [];
            foreach ($param["RollbackTimeRanges"] as $key => $value){
                $obj = new RollbackTimeRange();
                $obj->deserialize($value);
                array_push($this->RollbackTimeRanges, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

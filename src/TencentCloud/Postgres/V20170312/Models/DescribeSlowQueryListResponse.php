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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowQueryList返回参数结构体
 *
 * @method integer getTotalCount() 获取选定时间范围内慢SQL总条数。
 * @method void setTotalCount(integer $TotalCount) 设置选定时间范围内慢SQL总条数。
 * @method array getDurationAnalysis() 获取指定时间范围内，慢SQL耗时分段分析。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDurationAnalysis(array $DurationAnalysis) 设置指定时间范围内，慢SQL耗时分段分析。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRawSlowQueryList() 获取指定时间范围内 慢SQL流水。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRawSlowQueryList(array $RawSlowQueryList) 设置指定时间范围内 慢SQL流水。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSlowQueryListResponse extends AbstractModel
{
    /**
     * @var integer 选定时间范围内慢SQL总条数。
     */
    public $TotalCount;

    /**
     * @var array 指定时间范围内，慢SQL耗时分段分析。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DurationAnalysis;

    /**
     * @var array 指定时间范围内 慢SQL流水。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RawSlowQueryList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 选定时间范围内慢SQL总条数。
     * @param array $DurationAnalysis 指定时间范围内，慢SQL耗时分段分析。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RawSlowQueryList 指定时间范围内 慢SQL流水。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("DurationAnalysis",$param) and $param["DurationAnalysis"] !== null) {
            $this->DurationAnalysis = [];
            foreach ($param["DurationAnalysis"] as $key => $value){
                $obj = new DurationAnalysis();
                $obj->deserialize($value);
                array_push($this->DurationAnalysis, $obj);
            }
        }

        if (array_key_exists("RawSlowQueryList",$param) and $param["RawSlowQueryList"] !== null) {
            $this->RawSlowQueryList = [];
            foreach ($param["RawSlowQueryList"] as $key => $value){
                $obj = new RawSlowQuery();
                $obj->deserialize($value);
                array_push($this->RawSlowQueryList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

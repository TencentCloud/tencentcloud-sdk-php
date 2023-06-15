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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMonitorReport返回参数结构体
 *
 * @method MPSResult getMPSResult() 获取媒体处理结果信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMPSResult(MPSResult $MPSResult) 设置媒体处理结果信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiagnoseResult getDiagnoseResult() 获取媒体诊断结果信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiagnoseResult(DiagnoseResult $DiagnoseResult) 设置媒体诊断结果信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMonitorReportResponse extends AbstractModel
{
    /**
     * @var MPSResult 媒体处理结果信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MPSResult;

    /**
     * @var DiagnoseResult 媒体诊断结果信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiagnoseResult;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param MPSResult $MPSResult 媒体处理结果信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiagnoseResult $DiagnoseResult 媒体诊断结果信息。
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
        if (array_key_exists("MPSResult",$param) and $param["MPSResult"] !== null) {
            $this->MPSResult = new MPSResult();
            $this->MPSResult->deserialize($param["MPSResult"]);
        }

        if (array_key_exists("DiagnoseResult",$param) and $param["DiagnoseResult"] !== null) {
            $this->DiagnoseResult = new DiagnoseResult();
            $this->DiagnoseResult->deserialize($param["DiagnoseResult"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

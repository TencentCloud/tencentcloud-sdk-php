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
 * 媒体诊断结果，包含断流信息、低帧率信息等
 *
 * @method array getStreamBrokenResults() 获取断流信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreamBrokenResults(array $StreamBrokenResults) 设置断流信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLowFrameRateResults() 获取低帧率信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLowFrameRateResults(array $LowFrameRateResults) 设置低帧率信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStreamFormatResults() 获取流格式诊断信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreamFormatResults(array $StreamFormatResults) 设置流格式诊断信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiagnoseResult extends AbstractModel
{
    /**
     * @var array 断流信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StreamBrokenResults;

    /**
     * @var array 低帧率信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LowFrameRateResults;

    /**
     * @var array 流格式诊断信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StreamFormatResults;

    /**
     * @param array $StreamBrokenResults 断流信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LowFrameRateResults 低帧率信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StreamFormatResults 流格式诊断信息
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
        if (array_key_exists("StreamBrokenResults",$param) and $param["StreamBrokenResults"] !== null) {
            $this->StreamBrokenResults = $param["StreamBrokenResults"];
        }

        if (array_key_exists("LowFrameRateResults",$param) and $param["LowFrameRateResults"] !== null) {
            $this->LowFrameRateResults = $param["LowFrameRateResults"];
        }

        if (array_key_exists("StreamFormatResults",$param) and $param["StreamFormatResults"] !== null) {
            $this->StreamFormatResults = $param["StreamFormatResults"];
        }
    }
}

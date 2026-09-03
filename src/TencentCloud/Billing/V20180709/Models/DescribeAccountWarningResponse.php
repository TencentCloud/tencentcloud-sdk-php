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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccountWarning返回参数结构体
 *
 * @method string getThreshold() 获取余额阈值（单位：国内分、国际美分）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThreshold(string $Threshold) 设置余额阈值（单位：国内分、国际美分）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOpen() 获取是否开启余额告警 1 开启 0 关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpen(string $Open) 设置是否开启余额告警 1 开启 0 关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAccountWarningResponse extends AbstractModel
{
    /**
     * @var string 余额阈值（单位：国内分、国际美分）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Threshold;

    /**
     * @var string 是否开启余额告警 1 开启 0 关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Open;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Threshold 余额阈值（单位：国内分、国际美分）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Open 是否开启余额告警 1 开启 0 关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Open",$param) and $param["Open"] !== null) {
            $this->Open = $param["Open"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

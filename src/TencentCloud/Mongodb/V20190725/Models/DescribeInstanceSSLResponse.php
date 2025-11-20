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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceSSL返回参数结构体
 *
 * @method integer getStatus() 获取SSL开启状态。0为关闭，1为开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置SSL开启状态。0为关闭，1为开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpiredTime() 获取证书过期时间，格式为2023-05-01 12:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredTime(string $ExpiredTime) 设置证书过期时间，格式为2023-05-01 12:00:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertUrl() 获取证书下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertUrl(string $CertUrl) 设置证书下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstanceSSLResponse extends AbstractModel
{
    /**
     * @var integer SSL开启状态。0为关闭，1为开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 证书过期时间，格式为2023-05-01 12:00:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredTime;

    /**
     * @var string 证书下载链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status SSL开启状态。0为关闭，1为开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpiredTime 证书过期时间，格式为2023-05-01 12:00:00
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertUrl 证书下载链接
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("CertUrl",$param) and $param["CertUrl"] !== null) {
            $this->CertUrl = $param["CertUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelQuota返回参数结构体
 *
 * @method string getModelId() 获取<p>模型 ID。</p>
 * @method void setModelId(string $ModelId) 设置<p>模型 ID。</p>
 * @method integer getTPMLimit() 获取<p>TPM 限制（Tokens Per Minute）。模型无配额配置时不返回此字段。</p>
 * @method void setTPMLimit(integer $TPMLimit) 设置<p>TPM 限制（Tokens Per Minute）。模型无配额配置时不返回此字段。</p>
 * @method integer getRPMLimit() 获取<p>RPM 限制（Request Per Minute）。模型无配额配置时不返回此字段。</p>
 * @method void setRPMLimit(integer $RPMLimit) 设置<p>RPM 限制（Request Per Minute）。模型无配额配置时不返回此字段。</p>
 * @method integer getTPMInputQuotaLimit() 获取<p>TPM 保障包 input 配额</p>
 * @method void setTPMInputQuotaLimit(integer $TPMInputQuotaLimit) 设置<p>TPM 保障包 input 配额</p>
 * @method integer getTPMOutputQuotaLimit() 获取<p>TPM 保障包 output 配额</p>
 * @method void setTPMOutputQuotaLimit(integer $TPMOutputQuotaLimit) 设置<p>TPM 保障包 output 配额</p>
 * @method integer getTPMInputReserveLimit() 获取<p>TPM 预留 input 配额</p>
 * @method void setTPMInputReserveLimit(integer $TPMInputReserveLimit) 设置<p>TPM 预留 input 配额</p>
 * @method integer getTPMOutputReserveLimit() 获取<p>TPM 预留 output 配额</p>
 * @method void setTPMOutputReserveLimit(integer $TPMOutputReserveLimit) 设置<p>TPM 预留 output 配额</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeModelQuotaResponse extends AbstractModel
{
    /**
     * @var string <p>模型 ID。</p>
     */
    public $ModelId;

    /**
     * @var integer <p>TPM 限制（Tokens Per Minute）。模型无配额配置时不返回此字段。</p>
     */
    public $TPMLimit;

    /**
     * @var integer <p>RPM 限制（Request Per Minute）。模型无配额配置时不返回此字段。</p>
     */
    public $RPMLimit;

    /**
     * @var integer <p>TPM 保障包 input 配额</p>
     */
    public $TPMInputQuotaLimit;

    /**
     * @var integer <p>TPM 保障包 output 配额</p>
     */
    public $TPMOutputQuotaLimit;

    /**
     * @var integer <p>TPM 预留 input 配额</p>
     */
    public $TPMInputReserveLimit;

    /**
     * @var integer <p>TPM 预留 output 配额</p>
     */
    public $TPMOutputReserveLimit;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ModelId <p>模型 ID。</p>
     * @param integer $TPMLimit <p>TPM 限制（Tokens Per Minute）。模型无配额配置时不返回此字段。</p>
     * @param integer $RPMLimit <p>RPM 限制（Request Per Minute）。模型无配额配置时不返回此字段。</p>
     * @param integer $TPMInputQuotaLimit <p>TPM 保障包 input 配额</p>
     * @param integer $TPMOutputQuotaLimit <p>TPM 保障包 output 配额</p>
     * @param integer $TPMInputReserveLimit <p>TPM 预留 input 配额</p>
     * @param integer $TPMOutputReserveLimit <p>TPM 预留 output 配额</p>
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("TPMLimit",$param) and $param["TPMLimit"] !== null) {
            $this->TPMLimit = $param["TPMLimit"];
        }

        if (array_key_exists("RPMLimit",$param) and $param["RPMLimit"] !== null) {
            $this->RPMLimit = $param["RPMLimit"];
        }

        if (array_key_exists("TPMInputQuotaLimit",$param) and $param["TPMInputQuotaLimit"] !== null) {
            $this->TPMInputQuotaLimit = $param["TPMInputQuotaLimit"];
        }

        if (array_key_exists("TPMOutputQuotaLimit",$param) and $param["TPMOutputQuotaLimit"] !== null) {
            $this->TPMOutputQuotaLimit = $param["TPMOutputQuotaLimit"];
        }

        if (array_key_exists("TPMInputReserveLimit",$param) and $param["TPMInputReserveLimit"] !== null) {
            $this->TPMInputReserveLimit = $param["TPMInputReserveLimit"];
        }

        if (array_key_exists("TPMOutputReserveLimit",$param) and $param["TPMOutputReserveLimit"] !== null) {
            $this->TPMOutputReserveLimit = $param["TPMOutputReserveLimit"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

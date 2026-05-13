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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetHardwareInfo返回参数结构体
 *
 * @method integer getLicensePayMode() 获取license授权有效期 
0：月度授权 
1：永久授权 
-1：未知
 * @method void setLicensePayMode(integer $LicensePayMode) 设置license授权有效期 
0：月度授权 
1：永久授权 
-1：未知
 * @method integer getPayer() 获取付费方 0：客户付费 1：厂商付费
 * @method void setPayer(integer $Payer) 设置付费方 0：客户付费 1：厂商付费
 * @method string getSN() 获取硬件序列号
 * @method void setSN(string $SN) 设置硬件序列号
 * @method string getVendor() 获取厂商名称
 * @method void setVendor(string $Vendor) 设置厂商名称
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetHardwareInfoResponse extends AbstractModel
{
    /**
     * @var integer license授权有效期 
0：月度授权 
1：永久授权 
-1：未知
     */
    public $LicensePayMode;

    /**
     * @var integer 付费方 0：客户付费 1：厂商付费
     */
    public $Payer;

    /**
     * @var string 硬件序列号
     */
    public $SN;

    /**
     * @var string 厂商名称
     */
    public $Vendor;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $LicensePayMode license授权有效期 
0：月度授权 
1：永久授权 
-1：未知
     * @param integer $Payer 付费方 0：客户付费 1：厂商付费
     * @param string $SN 硬件序列号
     * @param string $Vendor 厂商名称
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
        if (array_key_exists("LicensePayMode",$param) and $param["LicensePayMode"] !== null) {
            $this->LicensePayMode = $param["LicensePayMode"];
        }

        if (array_key_exists("Payer",$param) and $param["Payer"] !== null) {
            $this->Payer = $param["Payer"];
        }

        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }

        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

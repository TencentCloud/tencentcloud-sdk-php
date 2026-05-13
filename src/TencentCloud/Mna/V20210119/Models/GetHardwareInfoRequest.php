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
 * GetHardwareInfo请求参数结构体
 *
 * @method string getVendor() 获取厂商名称
 * @method void setVendor(string $Vendor) 设置厂商名称
 * @method string getSN() 获取设备SN序列号
 * @method void setSN(string $SN) 设置设备SN序列号
 */
class GetHardwareInfoRequest extends AbstractModel
{
    /**
     * @var string 厂商名称
     */
    public $Vendor;

    /**
     * @var string 设备SN序列号
     */
    public $SN;

    /**
     * @param string $Vendor 厂商名称
     * @param string $SN 设备SN序列号
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
        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }
    }
}

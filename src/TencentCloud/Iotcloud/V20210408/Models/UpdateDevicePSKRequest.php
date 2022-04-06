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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDevicePSK请求参数结构体
 *
 * @method string getProductId() 获取产品名
 * @method void setProductId(string $ProductId) 设置产品名
 * @method string getDeviceName() 获取设备名
 * @method void setDeviceName(string $DeviceName) 设置设备名
 * @method string getPsk() 获取设备的psk
 * @method void setPsk(string $Psk) 设置设备的psk
 */
class UpdateDevicePSKRequest extends AbstractModel
{
    /**
     * @var string 产品名
     */
    public $ProductId;

    /**
     * @var string 设备名
     */
    public $DeviceName;

    /**
     * @var string 设备的psk
     */
    public $Psk;

    /**
     * @param string $ProductId 产品名
     * @param string $DeviceName 设备名
     * @param string $Psk 设备的psk
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Psk",$param) and $param["Psk"] !== null) {
            $this->Psk = $param["Psk"];
        }
    }
}

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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenSingleDeviceSignatureOfPublic请求参数结构体
 *
 * @method string getProductId() 获取设备所属的产品ID
 * @method void setProductId(string $ProductId) 设置设备所属的产品ID
 * @method string getDeviceName() 获取需要绑定的设备
 * @method void setDeviceName(string $DeviceName) 设置需要绑定的设备
 * @method integer getExpire() 获取设备绑定签名的有效时间,以秒为单位。取值范围：0 < Expire <= 86400，Expire == -1（十年）
 * @method void setExpire(integer $Expire) 设置设备绑定签名的有效时间,以秒为单位。取值范围：0 < Expire <= 86400，Expire == -1（十年）
 */
class GenSingleDeviceSignatureOfPublicRequest extends AbstractModel
{
    /**
     * @var string 设备所属的产品ID
     */
    public $ProductId;

    /**
     * @var string 需要绑定的设备
     */
    public $DeviceName;

    /**
     * @var integer 设备绑定签名的有效时间,以秒为单位。取值范围：0 < Expire <= 86400，Expire == -1（十年）
     */
    public $Expire;

    /**
     * @param string $ProductId 设备所属的产品ID
     * @param string $DeviceName 需要绑定的设备
     * @param integer $Expire 设备绑定签名的有效时间,以秒为单位。取值范围：0 < Expire <= 86400，Expire == -1（十年）
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

        if (array_key_exists("Expire",$param) and $param["Expire"] !== null) {
            $this->Expire = $param["Expire"];
        }
    }
}

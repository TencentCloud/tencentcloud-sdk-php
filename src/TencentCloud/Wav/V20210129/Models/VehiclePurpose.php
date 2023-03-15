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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 购车用途详细信息
 *
 * @method string getVehiclePurposeCode() 获取购车用途code
 * @method void setVehiclePurposeCode(string $VehiclePurposeCode) 设置购车用途code
 * @method string getVehiclePurposeName() 获取购车用途名称
 * @method void setVehiclePurposeName(string $VehiclePurposeName) 设置购车用途名称
 */
class VehiclePurpose extends AbstractModel
{
    /**
     * @var string 购车用途code
     */
    public $VehiclePurposeCode;

    /**
     * @var string 购车用途名称
     */
    public $VehiclePurposeName;

    /**
     * @param string $VehiclePurposeCode 购车用途code
     * @param string $VehiclePurposeName 购车用途名称
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
        if (array_key_exists("VehiclePurposeCode",$param) and $param["VehiclePurposeCode"] !== null) {
            $this->VehiclePurposeCode = $param["VehiclePurposeCode"];
        }

        if (array_key_exists("VehiclePurposeName",$param) and $param["VehiclePurposeName"] !== null) {
            $this->VehiclePurposeName = $param["VehiclePurposeName"];
        }
    }
}

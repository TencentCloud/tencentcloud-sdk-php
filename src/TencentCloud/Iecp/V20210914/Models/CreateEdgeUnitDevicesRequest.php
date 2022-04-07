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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEdgeUnitDevices请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取无
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置无
 * @method string getProductId() 获取无
 * @method void setProductId(string $ProductId) 设置无
 * @method array getDeviceNames() 获取无
 * @method void setDeviceNames(array $DeviceNames) 设置无
 */
class CreateEdgeUnitDevicesRequest extends AbstractModel
{
    /**
     * @var integer 无
     */
    public $EdgeUnitId;

    /**
     * @var string 无
     */
    public $ProductId;

    /**
     * @var array 无
     */
    public $DeviceNames;

    /**
     * @param integer $EdgeUnitId 无
     * @param string $ProductId 无
     * @param array $DeviceNames 无
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
        if (array_key_exists("EdgeUnitId",$param) and $param["EdgeUnitId"] !== null) {
            $this->EdgeUnitId = $param["EdgeUnitId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceNames",$param) and $param["DeviceNames"] !== null) {
            $this->DeviceNames = $param["DeviceNames"];
        }
    }
}

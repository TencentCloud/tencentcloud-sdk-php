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
 * CreateIotDevice请求参数结构体
 *
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getProductId() 获取设备所属的产品id
 * @method void setProductId(string $ProductId) 设置设备所属的产品id
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method integer getUnitID() 获取无
 * @method void setUnitID(integer $UnitID) 设置无
 */
class CreateIotDeviceRequest extends AbstractModel
{
    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 设备所属的产品id
     */
    public $ProductId;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var integer 无
     */
    public $UnitID;

    /**
     * @param string $DeviceName 设备名称
     * @param string $ProductId 设备所属的产品id
     * @param string $Description 描述
     * @param integer $UnitID 无
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UnitID",$param) and $param["UnitID"] !== null) {
            $this->UnitID = $param["UnitID"];
        }
    }
}

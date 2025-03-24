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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMovingWorkOrder请求参数结构体
 *
 * @method integer getIdcId() 获取机房id
 * @method void setIdcId(integer $IdcId) 设置机房id
 * @method string getDeviceType() 获取设备类型，server, netDevice
 * @method void setDeviceType(string $DeviceType) 设置设备类型，server, netDevice
 * @method boolean getWithPowerOn() 获取上架后是否开电
 * @method void setWithPowerOn(boolean $WithPowerOn) 设置上架后是否开电
 * @method array getDeviceMovingList() 获取设备搬迁信息列表
 * @method void setDeviceMovingList(array $DeviceMovingList) 设置设备搬迁信息列表
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class CreateMovingWorkOrderRequest extends AbstractModel
{
    /**
     * @var integer 机房id
     */
    public $IdcId;

    /**
     * @var string 设备类型，server, netDevice
     */
    public $DeviceType;

    /**
     * @var boolean 上架后是否开电
     */
    public $WithPowerOn;

    /**
     * @var array 设备搬迁信息列表
     */
    public $DeviceMovingList;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param integer $IdcId 机房id
     * @param string $DeviceType 设备类型，server, netDevice
     * @param boolean $WithPowerOn 上架后是否开电
     * @param array $DeviceMovingList 设备搬迁信息列表
     * @param string $Remark 备注
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
        if (array_key_exists("IdcId",$param) and $param["IdcId"] !== null) {
            $this->IdcId = $param["IdcId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("WithPowerOn",$param) and $param["WithPowerOn"] !== null) {
            $this->WithPowerOn = $param["WithPowerOn"];
        }

        if (array_key_exists("DeviceMovingList",$param) and $param["DeviceMovingList"] !== null) {
            $this->DeviceMovingList = [];
            foreach ($param["DeviceMovingList"] as $key => $value){
                $obj = new DeviceRackOn();
                $obj->deserialize($value);
                array_push($this->DeviceMovingList, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}

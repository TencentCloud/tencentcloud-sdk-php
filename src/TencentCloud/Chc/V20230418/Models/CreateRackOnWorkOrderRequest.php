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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRackOnWorkOrder请求参数结构体
 *
 * @method integer getIdcId() 获取机房id
 * @method void setIdcId(integer $IdcId) 设置机房id
 * @method string getDeviceType() 获取设备类型，server, netDevice
 * @method void setDeviceType(string $DeviceType) 设置设备类型，server, netDevice
 * @method string getStuffOption() 获取上架人员 1.自行解决 2.由腾讯IDC负责
 * @method void setStuffOption(string $StuffOption) 设置上架人员 1.自行解决 2.由腾讯IDC负责
 * @method boolean getWithPowerOn() 获取上架后是否开电
 * @method void setWithPowerOn(boolean $WithPowerOn) 设置上架后是否开电
 * @method array getDeviceRackOnList() 获取服务器收货列表
 * @method void setDeviceRackOnList(array $DeviceRackOnList) 设置服务器收货列表
 * @method SelfOperation getSelfOperationInfo() 获取自行解决必填
 * @method void setSelfOperationInfo(SelfOperation $SelfOperationInfo) 设置自行解决必填
 */
class CreateRackOnWorkOrderRequest extends AbstractModel
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
     * @var string 上架人员 1.自行解决 2.由腾讯IDC负责
     */
    public $StuffOption;

    /**
     * @var boolean 上架后是否开电
     */
    public $WithPowerOn;

    /**
     * @var array 服务器收货列表
     */
    public $DeviceRackOnList;

    /**
     * @var SelfOperation 自行解决必填
     */
    public $SelfOperationInfo;

    /**
     * @param integer $IdcId 机房id
     * @param string $DeviceType 设备类型，server, netDevice
     * @param string $StuffOption 上架人员 1.自行解决 2.由腾讯IDC负责
     * @param boolean $WithPowerOn 上架后是否开电
     * @param array $DeviceRackOnList 服务器收货列表
     * @param SelfOperation $SelfOperationInfo 自行解决必填
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

        if (array_key_exists("StuffOption",$param) and $param["StuffOption"] !== null) {
            $this->StuffOption = $param["StuffOption"];
        }

        if (array_key_exists("WithPowerOn",$param) and $param["WithPowerOn"] !== null) {
            $this->WithPowerOn = $param["WithPowerOn"];
        }

        if (array_key_exists("DeviceRackOnList",$param) and $param["DeviceRackOnList"] !== null) {
            $this->DeviceRackOnList = [];
            foreach ($param["DeviceRackOnList"] as $key => $value){
                $obj = new DeviceRackOn();
                $obj->deserialize($value);
                array_push($this->DeviceRackOnList, $obj);
            }
        }

        if (array_key_exists("SelfOperationInfo",$param) and $param["SelfOperationInfo"] !== null) {
            $this->SelfOperationInfo = new SelfOperation();
            $this->SelfOperationInfo->deserialize($param["SelfOperationInfo"]);
        }
    }
}

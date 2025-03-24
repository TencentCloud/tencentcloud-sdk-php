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
 * CreateRackOffWorkOrder请求参数结构体
 *
 * @method integer getIdcId() 获取机房id
 * @method void setIdcId(integer $IdcId) 设置机房id
 * @method string getDeviceType() 获取设备类型，server, netDevice
 * @method void setDeviceType(string $DeviceType) 设置设备类型，server, netDevice
 * @method string getStuffOption() 获取下架人员 1.自行解决 2.由腾讯IDC负责
 * @method void setStuffOption(string $StuffOption) 设置下架人员 1.自行解决 2.由腾讯IDC负责
 * @method string getIsPowerOffConfirm() 获取关电确认 1.授权时关电 2.关电前需要确认
 * @method void setIsPowerOffConfirm(string $IsPowerOffConfirm) 设置关电确认 1.授权时关电 2.关电前需要确认
 * @method array getDeviceSnList() 获取设备sn列表
 * @method void setDeviceSnList(array $DeviceSnList) 设置设备sn列表
 * @method SelfOperation getSelfOperationInfo() 获取自行解决必填
 * @method void setSelfOperationInfo(SelfOperation $SelfOperationInfo) 设置自行解决必填
 * @method PowerOffConfirm getPowerOffConfirmInfo() 获取关电前需要确认时必填
 * @method void setPowerOffConfirmInfo(PowerOffConfirm $PowerOffConfirmInfo) 设置关电前需要确认时必填
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class CreateRackOffWorkOrderRequest extends AbstractModel
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
     * @var string 下架人员 1.自行解决 2.由腾讯IDC负责
     */
    public $StuffOption;

    /**
     * @var string 关电确认 1.授权时关电 2.关电前需要确认
     */
    public $IsPowerOffConfirm;

    /**
     * @var array 设备sn列表
     */
    public $DeviceSnList;

    /**
     * @var SelfOperation 自行解决必填
     */
    public $SelfOperationInfo;

    /**
     * @var PowerOffConfirm 关电前需要确认时必填
     */
    public $PowerOffConfirmInfo;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param integer $IdcId 机房id
     * @param string $DeviceType 设备类型，server, netDevice
     * @param string $StuffOption 下架人员 1.自行解决 2.由腾讯IDC负责
     * @param string $IsPowerOffConfirm 关电确认 1.授权时关电 2.关电前需要确认
     * @param array $DeviceSnList 设备sn列表
     * @param SelfOperation $SelfOperationInfo 自行解决必填
     * @param PowerOffConfirm $PowerOffConfirmInfo 关电前需要确认时必填
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

        if (array_key_exists("StuffOption",$param) and $param["StuffOption"] !== null) {
            $this->StuffOption = $param["StuffOption"];
        }

        if (array_key_exists("IsPowerOffConfirm",$param) and $param["IsPowerOffConfirm"] !== null) {
            $this->IsPowerOffConfirm = $param["IsPowerOffConfirm"];
        }

        if (array_key_exists("DeviceSnList",$param) and $param["DeviceSnList"] !== null) {
            $this->DeviceSnList = $param["DeviceSnList"];
        }

        if (array_key_exists("SelfOperationInfo",$param) and $param["SelfOperationInfo"] !== null) {
            $this->SelfOperationInfo = new SelfOperation();
            $this->SelfOperationInfo->deserialize($param["SelfOperationInfo"]);
        }

        if (array_key_exists("PowerOffConfirmInfo",$param) and $param["PowerOffConfirmInfo"] !== null) {
            $this->PowerOffConfirmInfo = new PowerOffConfirm();
            $this->PowerOffConfirmInfo->deserialize($param["PowerOffConfirmInfo"]);
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}

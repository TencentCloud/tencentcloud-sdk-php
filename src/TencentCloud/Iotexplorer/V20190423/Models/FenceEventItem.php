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
 * 围栏事件详情
 *
 * @method string getProductId() 获取围栏事件的产品Id
 * @method void setProductId(string $ProductId) 设置围栏事件的产品Id
 * @method string getDeviceName() 获取围栏事件的设备名称
 * @method void setDeviceName(string $DeviceName) 设置围栏事件的设备名称
 * @method integer getFenceId() 获取围栏Id
 * @method void setFenceId(integer $FenceId) 设置围栏Id
 * @method string getAlertType() 获取围栏事件的告警类型（In，进围栏报警；Out，出围栏报警；InOrOut，进围栏或者出围栏均报警）
 * @method void setAlertType(string $AlertType) 设置围栏事件的告警类型（In，进围栏报警；Out，出围栏报警；InOrOut，进围栏或者出围栏均报警）
 * @method FenceAlarmPoint getData() 获取围栏事件的设备位置信息
 * @method void setData(FenceAlarmPoint $Data) 设置围栏事件的设备位置信息
 */
class FenceEventItem extends AbstractModel
{
    /**
     * @var string 围栏事件的产品Id
     */
    public $ProductId;

    /**
     * @var string 围栏事件的设备名称
     */
    public $DeviceName;

    /**
     * @var integer 围栏Id
     */
    public $FenceId;

    /**
     * @var string 围栏事件的告警类型（In，进围栏报警；Out，出围栏报警；InOrOut，进围栏或者出围栏均报警）
     */
    public $AlertType;

    /**
     * @var FenceAlarmPoint 围栏事件的设备位置信息
     */
    public $Data;

    /**
     * @param string $ProductId 围栏事件的产品Id
     * @param string $DeviceName 围栏事件的设备名称
     * @param integer $FenceId 围栏Id
     * @param string $AlertType 围栏事件的告警类型（In，进围栏报警；Out，出围栏报警；InOrOut，进围栏或者出围栏均报警）
     * @param FenceAlarmPoint $Data 围栏事件的设备位置信息
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

        if (array_key_exists("FenceId",$param) and $param["FenceId"] !== null) {
            $this->FenceId = $param["FenceId"];
        }

        if (array_key_exists("AlertType",$param) and $param["AlertType"] !== null) {
            $this->AlertType = $param["AlertType"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new FenceAlarmPoint();
            $this->Data->deserialize($param["Data"]);
        }
    }
}

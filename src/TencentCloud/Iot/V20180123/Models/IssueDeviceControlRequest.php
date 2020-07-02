<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IssueDeviceControl请求参数结构体
 *
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getControlData() 获取控制数据（json）
 * @method void setControlData(string $ControlData) 设置控制数据（json）
 * @method boolean getMetadata() 获取是否发送metadata字段
 * @method void setMetadata(boolean $Metadata) 设置是否发送metadata字段
 */
class IssueDeviceControlRequest extends AbstractModel
{
    /**
     * @var string 产品Id
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 控制数据（json）
     */
    public $ControlData;

    /**
     * @var boolean 是否发送metadata字段
     */
    public $Metadata;

    /**
     * @param string $ProductId 产品Id
     * @param string $DeviceName 设备名称
     * @param string $ControlData 控制数据（json）
     * @param boolean $Metadata 是否发送metadata字段
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
        if (array_key_exists('ProductId',$param) and $param['ProductId'] !== null) {
            $this->ProductId = $param['ProductId'];
        }

        if (array_key_exists('DeviceName',$param) and $param['DeviceName'] !== null) {
            $this->DeviceName = $param['DeviceName'];
        }

        if (array_key_exists('ControlData',$param) and $param['ControlData'] !== null) {
            $this->ControlData = $param['ControlData'];
        }

        if (array_key_exists('Metadata',$param) and $param['Metadata'] !== null) {
            $this->Metadata = $param['Metadata'];
        }
    }
}

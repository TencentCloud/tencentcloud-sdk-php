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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ActivateTWeTalk请求参数结构体
 *
 * @method integer getServiceType() 获取TWeTalk类型：1-基础版；2-高级版；3-多模态；
 * @method void setServiceType(integer $ServiceType) 设置TWeTalk类型：1-基础版；2-高级版；3-多模态；
 * @method array getDeviceIds() 获取设备列表, 产品ID_设备名；
 * @method void setDeviceIds(array $DeviceIds) 设置设备列表, 产品ID_设备名；
 */
class ActivateTWeTalkRequest extends AbstractModel
{
    /**
     * @var integer TWeTalk类型：1-基础版；2-高级版；3-多模态；
     */
    public $ServiceType;

    /**
     * @var array 设备列表, 产品ID_设备名；
     */
    public $DeviceIds;

    /**
     * @param integer $ServiceType TWeTalk类型：1-基础版；2-高级版；3-多模态；
     * @param array $DeviceIds 设备列表, 产品ID_设备名；
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
        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("DeviceIds",$param) and $param["DeviceIds"] !== null) {
            $this->DeviceIds = $param["DeviceIds"];
        }
    }
}

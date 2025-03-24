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
 * 已通过设备型号评估的型号信息
 *
 * @method string getModelVersion() 获取带有版本号的设备型号
 * @method void setModelVersion(string $ModelVersion) 设置带有版本号的设备型号
 * @method string getDevHeight() 获取设备高度
 * @method void setDevHeight(string $DevHeight) 设置设备高度
 * @method string getDeviceType() 获取设备类型，server 服务器，netDevice 网络设备
 * @method void setDeviceType(string $DeviceType) 设置设备类型，server 服务器，netDevice 网络设备
 */
class AvailableModelVersion extends AbstractModel
{
    /**
     * @var string 带有版本号的设备型号
     */
    public $ModelVersion;

    /**
     * @var string 设备高度
     */
    public $DevHeight;

    /**
     * @var string 设备类型，server 服务器，netDevice 网络设备
     */
    public $DeviceType;

    /**
     * @param string $ModelVersion 带有版本号的设备型号
     * @param string $DevHeight 设备高度
     * @param string $DeviceType 设备类型，server 服务器，netDevice 网络设备
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
        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("DevHeight",$param) and $param["DevHeight"] !== null) {
            $this->DevHeight = $param["DevHeight"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }
    }
}

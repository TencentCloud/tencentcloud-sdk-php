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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFirstLinkSession请求参数结构体
 *
 * @method string getTemplateId() 获取模版ID
 * @method void setTemplateId(string $TemplateId) 设置模版ID
 * @method SrcAddressInfo getSrcAddressInfo() 获取终端网络信息
 * @method void setSrcAddressInfo(SrcAddressInfo $SrcAddressInfo) 设置终端网络信息
 * @method DestAddressInfo getDestAddressInfo() 获取加速目标网络信息
 * @method void setDestAddressInfo(DestAddressInfo $DestAddressInfo) 设置加速目标网络信息
 * @method DeviceInfo getDeviceInfo() 获取终端设备信息
 * @method void setDeviceInfo(DeviceInfo $DeviceInfo) 设置终端设备信息
 * @method Capacity getCapacity() 获取接口扩展参数，如果是电信用户，需要填充CTCC Token字段
 * @method void setCapacity(Capacity $Capacity) 设置接口扩展参数，如果是电信用户，需要填充CTCC Token字段
 */
class CreateFirstLinkSessionRequest extends AbstractModel
{
    /**
     * @var string 模版ID
     */
    public $TemplateId;

    /**
     * @var SrcAddressInfo 终端网络信息
     */
    public $SrcAddressInfo;

    /**
     * @var DestAddressInfo 加速目标网络信息
     */
    public $DestAddressInfo;

    /**
     * @var DeviceInfo 终端设备信息
     */
    public $DeviceInfo;

    /**
     * @var Capacity 接口扩展参数，如果是电信用户，需要填充CTCC Token字段
     */
    public $Capacity;

    /**
     * @param string $TemplateId 模版ID
     * @param SrcAddressInfo $SrcAddressInfo 终端网络信息
     * @param DestAddressInfo $DestAddressInfo 加速目标网络信息
     * @param DeviceInfo $DeviceInfo 终端设备信息
     * @param Capacity $Capacity 接口扩展参数，如果是电信用户，需要填充CTCC Token字段
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("SrcAddressInfo",$param) and $param["SrcAddressInfo"] !== null) {
            $this->SrcAddressInfo = new SrcAddressInfo();
            $this->SrcAddressInfo->deserialize($param["SrcAddressInfo"]);
        }

        if (array_key_exists("DestAddressInfo",$param) and $param["DestAddressInfo"] !== null) {
            $this->DestAddressInfo = new DestAddressInfo();
            $this->DestAddressInfo->deserialize($param["DestAddressInfo"]);
        }

        if (array_key_exists("DeviceInfo",$param) and $param["DeviceInfo"] !== null) {
            $this->DeviceInfo = new DeviceInfo();
            $this->DeviceInfo->deserialize($param["DeviceInfo"]);
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = new Capacity();
            $this->Capacity->deserialize($param["Capacity"]);
        }
    }
}

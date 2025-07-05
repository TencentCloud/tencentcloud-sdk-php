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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ActivateDeviceCertificate请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method string getDeviceCertificateSn() 获取设备证书的SN序列号，可以从 [DescribeDeviceCertificates](https://cloud.tencent.com/document/api/1778/116206)接口、控制台、证书文件中获得。
 * @method void setDeviceCertificateSn(string $DeviceCertificateSn) 设置设备证书的SN序列号，可以从 [DescribeDeviceCertificates](https://cloud.tencent.com/document/api/1778/116206)接口、控制台、证书文件中获得。
 */
class ActivateDeviceCertificateRequest extends AbstractModel
{
    /**
     * @var string 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var string 设备证书的SN序列号，可以从 [DescribeDeviceCertificates](https://cloud.tencent.com/document/api/1778/116206)接口、控制台、证书文件中获得。
     */
    public $DeviceCertificateSn;

    /**
     * @param string $InstanceId 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     * @param string $DeviceCertificateSn 设备证书的SN序列号，可以从 [DescribeDeviceCertificates](https://cloud.tencent.com/document/api/1778/116206)接口、控制台、证书文件中获得。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DeviceCertificateSn",$param) and $param["DeviceCertificateSn"] !== null) {
            $this->DeviceCertificateSn = $param["DeviceCertificateSn"];
        }
    }
}

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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecognizeContainerOCR返回参数结构体
 *
 * @method string getContainerId() 获取集装箱箱号
 * @method void setContainerId(string $ContainerId) 设置集装箱箱号
 * @method string getContainerType() 获取集装箱类型
 * @method void setContainerType(string $ContainerType) 设置集装箱类型
 * @method string getGrossKG() 获取集装箱总重量，单位：千克（KG）
 * @method void setGrossKG(string $GrossKG) 设置集装箱总重量，单位：千克（KG）
 * @method string getGrossLB() 获取集装箱总重量，单位：磅（LB）
 * @method void setGrossLB(string $GrossLB) 设置集装箱总重量，单位：磅（LB）
 * @method string getPayloadKG() 获取集装箱有效承重，单位：千克（KG）
 * @method void setPayloadKG(string $PayloadKG) 设置集装箱有效承重，单位：千克（KG）
 * @method string getPayloadLB() 获取集装箱有效承重，单位：磅（LB）
 * @method void setPayloadLB(string $PayloadLB) 设置集装箱有效承重，单位：磅（LB）
 * @method string getCapacityM3() 获取集装箱容量，单位：立方米
 * @method void setCapacityM3(string $CapacityM3) 设置集装箱容量，单位：立方米
 * @method string getCapacityFT3() 获取集装箱容量，单位：立英尺
 * @method void setCapacityFT3(string $CapacityFT3) 设置集装箱容量，单位：立英尺
 * @method array getWarn() 获取告警码
-9926	集装箱箱号不完整或者不清晰
-9927	集装箱类型不完整或者不清晰
 * @method void setWarn(array $Warn) 设置告警码
-9926	集装箱箱号不完整或者不清晰
-9927	集装箱类型不完整或者不清晰
 * @method string getTareKG() 获取集装箱自身重量，单位：千克（KG）
 * @method void setTareKG(string $TareKG) 设置集装箱自身重量，单位：千克（KG）
 * @method string getTareLB() 获取集装箱自身重量，单位：磅（LB）
 * @method void setTareLB(string $TareLB) 设置集装箱自身重量，单位：磅（LB）
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeContainerOCRResponse extends AbstractModel
{
    /**
     * @var string 集装箱箱号
     */
    public $ContainerId;

    /**
     * @var string 集装箱类型
     */
    public $ContainerType;

    /**
     * @var string 集装箱总重量，单位：千克（KG）
     */
    public $GrossKG;

    /**
     * @var string 集装箱总重量，单位：磅（LB）
     */
    public $GrossLB;

    /**
     * @var string 集装箱有效承重，单位：千克（KG）
     */
    public $PayloadKG;

    /**
     * @var string 集装箱有效承重，单位：磅（LB）
     */
    public $PayloadLB;

    /**
     * @var string 集装箱容量，单位：立方米
     */
    public $CapacityM3;

    /**
     * @var string 集装箱容量，单位：立英尺
     */
    public $CapacityFT3;

    /**
     * @var array 告警码
-9926	集装箱箱号不完整或者不清晰
-9927	集装箱类型不完整或者不清晰
     */
    public $Warn;

    /**
     * @var string 集装箱自身重量，单位：千克（KG）
     */
    public $TareKG;

    /**
     * @var string 集装箱自身重量，单位：磅（LB）
     */
    public $TareLB;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ContainerId 集装箱箱号
     * @param string $ContainerType 集装箱类型
     * @param string $GrossKG 集装箱总重量，单位：千克（KG）
     * @param string $GrossLB 集装箱总重量，单位：磅（LB）
     * @param string $PayloadKG 集装箱有效承重，单位：千克（KG）
     * @param string $PayloadLB 集装箱有效承重，单位：磅（LB）
     * @param string $CapacityM3 集装箱容量，单位：立方米
     * @param string $CapacityFT3 集装箱容量，单位：立英尺
     * @param array $Warn 告警码
-9926	集装箱箱号不完整或者不清晰
-9927	集装箱类型不完整或者不清晰
     * @param string $TareKG 集装箱自身重量，单位：千克（KG）
     * @param string $TareLB 集装箱自身重量，单位：磅（LB）
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ContainerType",$param) and $param["ContainerType"] !== null) {
            $this->ContainerType = $param["ContainerType"];
        }

        if (array_key_exists("GrossKG",$param) and $param["GrossKG"] !== null) {
            $this->GrossKG = $param["GrossKG"];
        }

        if (array_key_exists("GrossLB",$param) and $param["GrossLB"] !== null) {
            $this->GrossLB = $param["GrossLB"];
        }

        if (array_key_exists("PayloadKG",$param) and $param["PayloadKG"] !== null) {
            $this->PayloadKG = $param["PayloadKG"];
        }

        if (array_key_exists("PayloadLB",$param) and $param["PayloadLB"] !== null) {
            $this->PayloadLB = $param["PayloadLB"];
        }

        if (array_key_exists("CapacityM3",$param) and $param["CapacityM3"] !== null) {
            $this->CapacityM3 = $param["CapacityM3"];
        }

        if (array_key_exists("CapacityFT3",$param) and $param["CapacityFT3"] !== null) {
            $this->CapacityFT3 = $param["CapacityFT3"];
        }

        if (array_key_exists("Warn",$param) and $param["Warn"] !== null) {
            $this->Warn = $param["Warn"];
        }

        if (array_key_exists("TareKG",$param) and $param["TareKG"] !== null) {
            $this->TareKG = $param["TareKG"];
        }

        if (array_key_exists("TareLB",$param) and $param["TareLB"] !== null) {
            $this->TareLB = $param["TareLB"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

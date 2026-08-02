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
 * 激活码统计信息。
 *
 * @method string getServiceType() 获取<p>激活码类型</p>
 * @method void setServiceType(string $ServiceType) 设置<p>激活码类型</p>
 * @method integer getTotalLicenseNum() 获取<p>支付模式</p>
 * @method void setTotalLicenseNum(integer $TotalLicenseNum) 设置<p>支付模式</p>
 * @method integer getUsedLicenseNum() 获取<p>计费标签项</p>
 * @method void setUsedLicenseNum(integer $UsedLicenseNum) 设置<p>计费标签项</p>
 * @method string getPeriod() 获取<p>计费标识</p>
 * @method void setPeriod(string $Period) 设置<p>计费标识</p>
 */
class ActivationLicense extends AbstractModel
{
    /**
     * @var string <p>激活码类型</p>
     */
    public $ServiceType;

    /**
     * @var integer <p>支付模式</p>
     */
    public $TotalLicenseNum;

    /**
     * @var integer <p>计费标签项</p>
     */
    public $UsedLicenseNum;

    /**
     * @var string <p>计费标识</p>
     */
    public $Period;

    /**
     * @param string $ServiceType <p>激活码类型</p>
     * @param integer $TotalLicenseNum <p>支付模式</p>
     * @param integer $UsedLicenseNum <p>计费标签项</p>
     * @param string $Period <p>计费标识</p>
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

        if (array_key_exists("TotalLicenseNum",$param) and $param["TotalLicenseNum"] !== null) {
            $this->TotalLicenseNum = $param["TotalLicenseNum"];
        }

        if (array_key_exists("UsedLicenseNum",$param) and $param["UsedLicenseNum"] !== null) {
            $this->UsedLicenseNum = $param["UsedLicenseNum"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}

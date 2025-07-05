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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSpec请求参数结构体
 *
 * @method string getZone() 获取地域信息，例如"ap-guangzhou-1"
 * @method void setZone(string $Zone) 设置地域信息，例如"ap-guangzhou-1"
 * @method string getPayMode() 获取计费类型，PREPAID 包年包月，POSTPAID_BY_HOUR 按量计费
 * @method void setPayMode(string $PayMode) 设置计费类型，PREPAID 包年包月，POSTPAID_BY_HOUR 按量计费
 * @method array getZones() 获取多可用区
 * @method void setZones(array $Zones) 设置多可用区
 * @method string getSpecName() 获取机型名称
 * @method void setSpecName(string $SpecName) 设置机型名称
 * @method boolean getIsSSC() 获取是否存算分离
 * @method void setIsSSC(boolean $IsSSC) 设置是否存算分离
 */
class DescribeSpecRequest extends AbstractModel
{
    /**
     * @var string 地域信息，例如"ap-guangzhou-1"
     */
    public $Zone;

    /**
     * @var string 计费类型，PREPAID 包年包月，POSTPAID_BY_HOUR 按量计费
     */
    public $PayMode;

    /**
     * @var array 多可用区
     */
    public $Zones;

    /**
     * @var string 机型名称
     */
    public $SpecName;

    /**
     * @var boolean 是否存算分离
     */
    public $IsSSC;

    /**
     * @param string $Zone 地域信息，例如"ap-guangzhou-1"
     * @param string $PayMode 计费类型，PREPAID 包年包月，POSTPAID_BY_HOUR 按量计费
     * @param array $Zones 多可用区
     * @param string $SpecName 机型名称
     * @param boolean $IsSSC 是否存算分离
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("IsSSC",$param) and $param["IsSSC"] !== null) {
            $this->IsSSC = $param["IsSSC"];
        }
    }
}

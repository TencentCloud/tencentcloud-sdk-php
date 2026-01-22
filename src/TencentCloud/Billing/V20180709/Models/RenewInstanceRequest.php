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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenewInstance请求参数结构体
 *
 * @method string getClientToken() 获取ClientToken是一个由客户端生成的唯一的、区分大小写、不超过64个ASCII字符的字符串。例如，ClientToken=123e4567-e89b-12d3-a456-42665544****。
 * @method void setClientToken(string $ClientToken) 设置ClientToken是一个由客户端生成的唯一的、区分大小写、不超过64个ASCII字符的字符串。例如，ClientToken=123e4567-e89b-12d3-a456-42665544****。
 * @method string getProductCode() 获取产品一层code
 * @method void setProductCode(string $ProductCode) 设置产品一层code
 * @method string getSubProductCode() 获取产品二层code
 * @method void setSubProductCode(string $SubProductCode) 设置产品二层code
 * @method string getRegionCode() 获取地域code
 * @method void setRegionCode(string $RegionCode) 设置地域code
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getPeriod() 获取手动续费时长，取值上限：36，默认取值1
 * @method void setPeriod(integer $Period) 设置手动续费时长，取值上限：36，默认取值1
 * @method string getPeriodUnit() 获取手动续费时长单位，取值：m：按月续费，y：按年续费，默认取值m
 * @method void setPeriodUnit(string $PeriodUnit) 设置手动续费时长单位，取值：m：按月续费，y：按年续费，默认取值m
 */
class RenewInstanceRequest extends AbstractModel
{
    /**
     * @var string ClientToken是一个由客户端生成的唯一的、区分大小写、不超过64个ASCII字符的字符串。例如，ClientToken=123e4567-e89b-12d3-a456-42665544****。
     */
    public $ClientToken;

    /**
     * @var string 产品一层code
     */
    public $ProductCode;

    /**
     * @var string 产品二层code
     */
    public $SubProductCode;

    /**
     * @var string 地域code
     */
    public $RegionCode;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 手动续费时长，取值上限：36，默认取值1
     */
    public $Period;

    /**
     * @var string 手动续费时长单位，取值：m：按月续费，y：按年续费，默认取值m
     */
    public $PeriodUnit;

    /**
     * @param string $ClientToken ClientToken是一个由客户端生成的唯一的、区分大小写、不超过64个ASCII字符的字符串。例如，ClientToken=123e4567-e89b-12d3-a456-42665544****。
     * @param string $ProductCode 产品一层code
     * @param string $SubProductCode 产品二层code
     * @param string $RegionCode 地域code
     * @param string $InstanceId 实例ID
     * @param integer $Period 手动续费时长，取值上限：36，默认取值1
     * @param string $PeriodUnit 手动续费时长单位，取值：m：按月续费，y：按年续费，默认取值m
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
        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("PeriodUnit",$param) and $param["PeriodUnit"] !== null) {
            $this->PeriodUnit = $param["PeriodUnit"];
        }
    }
}

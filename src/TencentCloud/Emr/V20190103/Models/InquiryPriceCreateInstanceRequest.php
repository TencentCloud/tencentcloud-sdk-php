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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTimeUnit() 获取时间单位
 * @method void setTimeUnit(string $TimeUnit) 设置时间单位
 * @method integer getTimeSpan() 获取时间长度
 * @method void setTimeSpan(integer $TimeSpan) 设置时间长度
 * @method NewResourceSpec getResourceSpec() 获取询价资源描述
 * @method void setResourceSpec(NewResourceSpec $ResourceSpec) 设置询价资源描述
 * @method string getCurrency() 获取货币种类
 * @method void setCurrency(string $Currency) 设置货币种类
 * @method integer getPayMode() 获取计费类型
 * @method void setPayMode(integer $PayMode) 设置计费类型
 * @method integer getSupportHA() 获取是否支持HA， 1 支持，0 不支持
 * @method void setSupportHA(integer $SupportHA) 设置是否支持HA， 1 支持，0 不支持
 * @method array getSoftware() 获取软件列表
 * @method void setSoftware(array $Software) 设置软件列表
 * @method Placement getPlacement() 获取位置信息
 * @method void setPlacement(Placement $Placement) 设置位置信息
 * @method VPCSettings getVPCSettings() 获取VPC信息
 * @method void setVPCSettings(VPCSettings $VPCSettings) 设置VPC信息
 */

/**
 *InquiryPriceCreateInstance请求参数结构体
 */
class InquiryPriceCreateInstanceRequest extends AbstractModel
{
    /**
     * @var string 时间单位
     */
    public $TimeUnit;

    /**
     * @var integer 时间长度
     */
    public $TimeSpan;

    /**
     * @var NewResourceSpec 询价资源描述
     */
    public $ResourceSpec;

    /**
     * @var string 货币种类
     */
    public $Currency;

    /**
     * @var integer 计费类型
     */
    public $PayMode;

    /**
     * @var integer 是否支持HA， 1 支持，0 不支持
     */
    public $SupportHA;

    /**
     * @var array 软件列表
     */
    public $Software;

    /**
     * @var Placement 位置信息
     */
    public $Placement;

    /**
     * @var VPCSettings VPC信息
     */
    public $VPCSettings;
    /**
     * @param string $TimeUnit 时间单位
     * @param integer $TimeSpan 时间长度
     * @param NewResourceSpec $ResourceSpec 询价资源描述
     * @param string $Currency 货币种类
     * @param integer $PayMode 计费类型
     * @param integer $SupportHA 是否支持HA， 1 支持，0 不支持
     * @param array $Software 软件列表
     * @param Placement $Placement 位置信息
     * @param VPCSettings $VPCSettings VPC信息
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("ResourceSpec",$param) and $param["ResourceSpec"] !== null) {
            $this->ResourceSpec = new NewResourceSpec();
            $this->ResourceSpec->deserialize($param["ResourceSpec"]);
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("SupportHA",$param) and $param["SupportHA"] !== null) {
            $this->SupportHA = $param["SupportHA"];
        }

        if (array_key_exists("Software",$param) and $param["Software"] !== null) {
            $this->Software = $param["Software"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("VPCSettings",$param) and $param["VPCSettings"] !== null) {
            $this->VPCSettings = new VPCSettings();
            $this->VPCSettings->deserialize($param["VPCSettings"]);
        }
    }
}

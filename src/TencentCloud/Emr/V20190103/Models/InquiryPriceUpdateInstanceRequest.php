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
 * @method string getTimeUnit() 获取变配的时间单位。取值范围：
<li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li>
<li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
 * @method void setTimeUnit(string $TimeUnit) 设置变配的时间单位。取值范围：
<li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li>
<li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
 * @method integer getTimeSpan() 获取变配的时长。需要结合TimeUnit一起使用。
<li>PayMode取值为0时，TimeSpan只能取值为3600。</li>
 * @method void setTimeSpan(integer $TimeSpan) 设置变配的时长。需要结合TimeUnit一起使用。
<li>PayMode取值为0时，TimeSpan只能取值为3600。</li>
 * @method UpdateInstanceSettings getUpdateSpec() 获取节点变配的目标配置。
 * @method void setUpdateSpec(UpdateInstanceSettings $UpdateSpec) 设置节点变配的目标配置。
 * @method integer getPayMode() 获取实例计费模式。取值范围：
<li>0：表示按量计费。</li>
<li>1：表示包年包月。</li>
 * @method void setPayMode(integer $PayMode) 设置实例计费模式。取值范围：
<li>0：表示按量计费。</li>
<li>1：表示包年包月。</li>
 * @method Placement getPlacement() 获取实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
 * @method void setPlacement(Placement $Placement) 设置实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
 * @method string getCurrency() 获取货币种类。取值范围：
<li>CNY：表示人民币。</li>
 * @method void setCurrency(string $Currency) 设置货币种类。取值范围：
<li>CNY：表示人民币。</li>
 */

/**
 *InquiryPriceUpdateInstance请求参数结构体
 */
class InquiryPriceUpdateInstanceRequest extends AbstractModel
{
    /**
     * @var string 变配的时间单位。取值范围：
<li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li>
<li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
     */
    public $TimeUnit;

    /**
     * @var integer 变配的时长。需要结合TimeUnit一起使用。
<li>PayMode取值为0时，TimeSpan只能取值为3600。</li>
     */
    public $TimeSpan;

    /**
     * @var UpdateInstanceSettings 节点变配的目标配置。
     */
    public $UpdateSpec;

    /**
     * @var integer 实例计费模式。取值范围：
<li>0：表示按量计费。</li>
<li>1：表示包年包月。</li>
     */
    public $PayMode;

    /**
     * @var Placement 实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
     */
    public $Placement;

    /**
     * @var string 货币种类。取值范围：
<li>CNY：表示人民币。</li>
     */
    public $Currency;
    /**
     * @param string $TimeUnit 变配的时间单位。取值范围：
<li>s：表示秒。PayMode取值为0时，TimeUnit只能取值为s。</li>
<li>m：表示月份。PayMode取值为1时，TimeUnit只能取值为m。</li>
     * @param integer $TimeSpan 变配的时长。需要结合TimeUnit一起使用。
<li>PayMode取值为0时，TimeSpan只能取值为3600。</li>
     * @param UpdateInstanceSettings $UpdateSpec 节点变配的目标配置。
     * @param integer $PayMode 实例计费模式。取值范围：
<li>0：表示按量计费。</li>
<li>1：表示包年包月。</li>
     * @param Placement $Placement 实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
     * @param string $Currency 货币种类。取值范围：
<li>CNY：表示人民币。</li>
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
        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("UpdateSpec",$param) and $param["UpdateSpec"] !== null) {
            $this->UpdateSpec = new UpdateInstanceSettings();
            $this->UpdateSpec->deserialize($param["UpdateSpec"]);
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }
    }
}

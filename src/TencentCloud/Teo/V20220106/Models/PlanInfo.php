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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * edgeone套餐信息
 *
 * @method string getCurrency() 获取结算货币类型，取值有：
<li> CNY ：人民币结算； </li>
<li> USD ：美元结算。</li>
 * @method void setCurrency(string $Currency) 设置结算货币类型，取值有：
<li> CNY ：人民币结算； </li>
<li> USD ：美元结算。</li>
 * @method integer getFlux() 获取套餐所含流量（单位：字节）
 * @method void setFlux(integer $Flux) 设置套餐所含流量（单位：字节）
 * @method string getFrequency() 获取结算周期，取值有：
<li> y ：按年结算； </li>
<li> m ：按月结算；</li>
<li> h ：按小时结算； </li>
<li> M ：按分钟结算；</li>
<li> s ：按秒结算。 </li>
 * @method void setFrequency(string $Frequency) 设置结算周期，取值有：
<li> y ：按年结算； </li>
<li> m ：按月结算；</li>
<li> h ：按小时结算； </li>
<li> M ：按分钟结算；</li>
<li> s ：按秒结算。 </li>
 * @method string getPlanType() 获取套餐类型，取值有：
<li> sta ：全球内容分发网络（不包括中国大陆）标准版套餐； </li>
<li> sta_with_bot ：全球内容分发网络（不包括中国大陆）标准版套餐附带bot管理；</li>
<li> sta_cm ：中国大陆内容分发网络标准版套餐； </li>
<li> sta_cm_with_bot ：中国大陆内容分发网络标准版套餐附带bot管理；</li>
<li> ent ：全球内容分发网络（不包括中国大陆）企业版套餐； </li>
<li> ent_with_bot ： 全球内容分发网络（不包括中国大陆）企业版套餐附带bot管理；</li>
<li> ent_cm ：中国大陆内容分发网络企业版套餐； </li>
<li> ent_cm_with_bot ：中国大陆内容分发网络企业版套餐附带bot管理。</li>
 * @method void setPlanType(string $PlanType) 设置套餐类型，取值有：
<li> sta ：全球内容分发网络（不包括中国大陆）标准版套餐； </li>
<li> sta_with_bot ：全球内容分发网络（不包括中国大陆）标准版套餐附带bot管理；</li>
<li> sta_cm ：中国大陆内容分发网络标准版套餐； </li>
<li> sta_cm_with_bot ：中国大陆内容分发网络标准版套餐附带bot管理；</li>
<li> ent ：全球内容分发网络（不包括中国大陆）企业版套餐； </li>
<li> ent_with_bot ： 全球内容分发网络（不包括中国大陆）企业版套餐附带bot管理；</li>
<li> ent_cm ：中国大陆内容分发网络企业版套餐； </li>
<li> ent_cm_with_bot ：中国大陆内容分发网络企业版套餐附带bot管理。</li>
 * @method float getPrice() 获取套餐价格（单位：分）
 * @method void setPrice(float $Price) 设置套餐价格（单位：分）
 * @method integer getRequest() 获取套餐所含请求次数（单位：字节）
 * @method void setRequest(integer $Request) 设置套餐所含请求次数（单位：字节）
 * @method integer getSiteNumber() 获取套餐所能绑定的站点个数。
 * @method void setSiteNumber(integer $SiteNumber) 设置套餐所能绑定的站点个数。
 */
class PlanInfo extends AbstractModel
{
    /**
     * @var string 结算货币类型，取值有：
<li> CNY ：人民币结算； </li>
<li> USD ：美元结算。</li>
     */
    public $Currency;

    /**
     * @var integer 套餐所含流量（单位：字节）
     */
    public $Flux;

    /**
     * @var string 结算周期，取值有：
<li> y ：按年结算； </li>
<li> m ：按月结算；</li>
<li> h ：按小时结算； </li>
<li> M ：按分钟结算；</li>
<li> s ：按秒结算。 </li>
     */
    public $Frequency;

    /**
     * @var string 套餐类型，取值有：
<li> sta ：全球内容分发网络（不包括中国大陆）标准版套餐； </li>
<li> sta_with_bot ：全球内容分发网络（不包括中国大陆）标准版套餐附带bot管理；</li>
<li> sta_cm ：中国大陆内容分发网络标准版套餐； </li>
<li> sta_cm_with_bot ：中国大陆内容分发网络标准版套餐附带bot管理；</li>
<li> ent ：全球内容分发网络（不包括中国大陆）企业版套餐； </li>
<li> ent_with_bot ： 全球内容分发网络（不包括中国大陆）企业版套餐附带bot管理；</li>
<li> ent_cm ：中国大陆内容分发网络企业版套餐； </li>
<li> ent_cm_with_bot ：中国大陆内容分发网络企业版套餐附带bot管理。</li>
     */
    public $PlanType;

    /**
     * @var float 套餐价格（单位：分）
     */
    public $Price;

    /**
     * @var integer 套餐所含请求次数（单位：字节）
     */
    public $Request;

    /**
     * @var integer 套餐所能绑定的站点个数。
     */
    public $SiteNumber;

    /**
     * @param string $Currency 结算货币类型，取值有：
<li> CNY ：人民币结算； </li>
<li> USD ：美元结算。</li>
     * @param integer $Flux 套餐所含流量（单位：字节）
     * @param string $Frequency 结算周期，取值有：
<li> y ：按年结算； </li>
<li> m ：按月结算；</li>
<li> h ：按小时结算； </li>
<li> M ：按分钟结算；</li>
<li> s ：按秒结算。 </li>
     * @param string $PlanType 套餐类型，取值有：
<li> sta ：全球内容分发网络（不包括中国大陆）标准版套餐； </li>
<li> sta_with_bot ：全球内容分发网络（不包括中国大陆）标准版套餐附带bot管理；</li>
<li> sta_cm ：中国大陆内容分发网络标准版套餐； </li>
<li> sta_cm_with_bot ：中国大陆内容分发网络标准版套餐附带bot管理；</li>
<li> ent ：全球内容分发网络（不包括中国大陆）企业版套餐； </li>
<li> ent_with_bot ： 全球内容分发网络（不包括中国大陆）企业版套餐附带bot管理；</li>
<li> ent_cm ：中国大陆内容分发网络企业版套餐； </li>
<li> ent_cm_with_bot ：中国大陆内容分发网络企业版套餐附带bot管理。</li>
     * @param float $Price 套餐价格（单位：分）
     * @param integer $Request 套餐所含请求次数（单位：字节）
     * @param integer $SiteNumber 套餐所能绑定的站点个数。
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
        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("Flux",$param) and $param["Flux"] !== null) {
            $this->Flux = $param["Flux"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("PlanType",$param) and $param["PlanType"] !== null) {
            $this->PlanType = $param["PlanType"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("Request",$param) and $param["Request"] !== null) {
            $this->Request = $param["Request"];
        }

        if (array_key_exists("SiteNumber",$param) and $param["SiteNumber"] !== null) {
            $this->SiteNumber = $param["SiteNumber"];
        }
    }
}

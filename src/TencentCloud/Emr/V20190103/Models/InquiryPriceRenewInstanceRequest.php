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
 * @method integer getTimeSpan() 获取时间长度
 * @method void setTimeSpan(integer $TimeSpan) 设置时间长度
 * @method array getResourceIds() 获取资源ID列表
 * @method void setResourceIds(array $ResourceIds) 设置资源ID列表
 * @method Placement getPlacement() 获取位置信息
 * @method void setPlacement(Placement $Placement) 设置位置信息
 * @method integer getPayMode() 获取计费模式，0表示按量，1表示包年报月，此处只能为包年包月
 * @method void setPayMode(integer $PayMode) 设置计费模式，0表示按量，1表示包年报月，此处只能为包年包月
 * @method string getTimeUnit() 获取时间单位，默认为m
 * @method void setTimeUnit(string $TimeUnit) 设置时间单位，默认为m
 * @method string getCurrency() 获取货币种类
 * @method void setCurrency(string $Currency) 设置货币种类
 */

/**
 *InquiryPriceRenewInstance请求参数结构体
 */
class InquiryPriceRenewInstanceRequest extends AbstractModel
{
    /**
     * @var integer 时间长度
     */
    public $TimeSpan;

    /**
     * @var array 资源ID列表
     */
    public $ResourceIds;

    /**
     * @var Placement 位置信息
     */
    public $Placement;

    /**
     * @var integer 计费模式，0表示按量，1表示包年报月，此处只能为包年包月
     */
    public $PayMode;

    /**
     * @var string 时间单位，默认为m
     */
    public $TimeUnit;

    /**
     * @var string 货币种类
     */
    public $Currency;
    /**
     * @param integer $TimeSpan 时间长度
     * @param array $ResourceIds 资源ID列表
     * @param Placement $Placement 位置信息
     * @param integer $PayMode 计费模式，0表示按量，1表示包年报月，此处只能为包年包月
     * @param string $TimeUnit 时间单位，默认为m
     * @param string $Currency 货币种类
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
        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }
    }
}

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
namespace TencentCloud\Svp\V20240125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSavingPlanOrder请求参数结构体
 *
 * @method integer getRegionId() 获取地域编码
 * @method void setRegionId(integer $RegionId) 设置地域编码
 * @method integer getZoneId() 获取区域编码
 * @method void setZoneId(integer $ZoneId) 设置区域编码
 * @method string getPrePayType() 获取预付费类型
 * @method void setPrePayType(string $PrePayType) 设置预付费类型
 * @method integer getTimeSpan() 获取时长
 * @method void setTimeSpan(integer $TimeSpan) 设置时长
 * @method string getTimeUnit() 获取时长单位
 * @method void setTimeUnit(string $TimeUnit) 设置时长单位
 * @method string getCommodityCode() 获取商品唯一标识
 * @method void setCommodityCode(string $CommodityCode) 设置商品唯一标识
 * @method integer getPromiseUseAmount() 获取承诺时长内的小额金额（单位：元）
 * @method void setPromiseUseAmount(integer $PromiseUseAmount) 设置承诺时长内的小额金额（单位：元）
 * @method string getSpecifyEffectTime() 获取节省计划的指定生效时间，若不传则为当前下单时间。传参数格式:"2023-10-01 00:00:00"，仅支持指定日期的0点时刻
 * @method void setSpecifyEffectTime(string $SpecifyEffectTime) 设置节省计划的指定生效时间，若不传则为当前下单时间。传参数格式:"2023-10-01 00:00:00"，仅支持指定日期的0点时刻
 * @method string getClientToken() 获取可重入ID
 * @method void setClientToken(string $ClientToken) 设置可重入ID
 */
class CreateSavingPlanOrderRequest extends AbstractModel
{
    /**
     * @var integer 地域编码
     */
    public $RegionId;

    /**
     * @var integer 区域编码
     */
    public $ZoneId;

    /**
     * @var string 预付费类型
     */
    public $PrePayType;

    /**
     * @var integer 时长
     */
    public $TimeSpan;

    /**
     * @var string 时长单位
     */
    public $TimeUnit;

    /**
     * @var string 商品唯一标识
     */
    public $CommodityCode;

    /**
     * @var integer 承诺时长内的小额金额（单位：元）
     */
    public $PromiseUseAmount;

    /**
     * @var string 节省计划的指定生效时间，若不传则为当前下单时间。传参数格式:"2023-10-01 00:00:00"，仅支持指定日期的0点时刻
     */
    public $SpecifyEffectTime;

    /**
     * @var string 可重入ID
     */
    public $ClientToken;

    /**
     * @param integer $RegionId 地域编码
     * @param integer $ZoneId 区域编码
     * @param string $PrePayType 预付费类型
     * @param integer $TimeSpan 时长
     * @param string $TimeUnit 时长单位
     * @param string $CommodityCode 商品唯一标识
     * @param integer $PromiseUseAmount 承诺时长内的小额金额（单位：元）
     * @param string $SpecifyEffectTime 节省计划的指定生效时间，若不传则为当前下单时间。传参数格式:"2023-10-01 00:00:00"，仅支持指定日期的0点时刻
     * @param string $ClientToken 可重入ID
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("PrePayType",$param) and $param["PrePayType"] !== null) {
            $this->PrePayType = $param["PrePayType"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("CommodityCode",$param) and $param["CommodityCode"] !== null) {
            $this->CommodityCode = $param["CommodityCode"];
        }

        if (array_key_exists("PromiseUseAmount",$param) and $param["PromiseUseAmount"] !== null) {
            $this->PromiseUseAmount = $param["PromiseUseAmount"];
        }

        if (array_key_exists("SpecifyEffectTime",$param) and $param["SpecifyEffectTime"] !== null) {
            $this->SpecifyEffectTime = $param["SpecifyEffectTime"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}

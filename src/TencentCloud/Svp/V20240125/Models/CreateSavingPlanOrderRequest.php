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
 * @method integer getRegionId() 获取<p>地域编码</p>
 * @method void setRegionId(integer $RegionId) 设置<p>地域编码</p>
 * @method integer getZoneId() 获取<p>区域编码</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>区域编码</p>
 * @method string getPrePayType() 获取<p>预付费类型</p><p>枚举值：</p><ul><li>1： 全预费</li><li>2： 部分预付</li><li>3： 不预付</li></ul>
 * @method void setPrePayType(string $PrePayType) 设置<p>预付费类型</p><p>枚举值：</p><ul><li>1： 全预费</li><li>2： 部分预付</li><li>3： 不预付</li></ul>
 * @method integer getTimeSpan() 获取<p>时长</p>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>时长</p>
 * @method string getTimeUnit() 获取<p>时长单位</p>
 * @method void setTimeUnit(string $TimeUnit) 设置<p>时长单位</p>
 * @method string getCommodityCode() 获取<p>商品唯一标识</p>
 * @method void setCommodityCode(string $CommodityCode) 设置<p>商品唯一标识</p>
 * @method integer getPromiseUseAmount() 获取<p>承诺时长内的小额金额（单位：元）</p>
 * @method void setPromiseUseAmount(integer $PromiseUseAmount) 设置<p>承诺时长内的小额金额（单位：元）</p>
 * @method string getSpecifyEffectTime() 获取<p>节省计划的指定生效时间，若不传则为当前下单时间。传参数格式:&quot;2023-10-01 00:00:00&quot;，仅支持指定日期的0点时刻</p>
 * @method void setSpecifyEffectTime(string $SpecifyEffectTime) 设置<p>节省计划的指定生效时间，若不传则为当前下单时间。传参数格式:&quot;2023-10-01 00:00:00&quot;，仅支持指定日期的0点时刻</p>
 * @method string getClientToken() 获取<p>可重入ID</p>
 * @method void setClientToken(string $ClientToken) 设置<p>可重入ID</p>
 * @method integer getCommitmentPeriod() 获取<p>节省计划结算类型</p><p>枚举值：</p><ul><li>1： 小时结算包</li><li>2： 日结算包</li><li>3： 月结算包</li></ul><p>默认值：1</p><p>不填写是默认是小时结算包</p>
 * @method void setCommitmentPeriod(integer $CommitmentPeriod) 设置<p>节省计划结算类型</p><p>枚举值：</p><ul><li>1： 小时结算包</li><li>2： 日结算包</li><li>3： 月结算包</li></ul><p>默认值：1</p><p>不填写是默认是小时结算包</p>
 */
class CreateSavingPlanOrderRequest extends AbstractModel
{
    /**
     * @var integer <p>地域编码</p>
     */
    public $RegionId;

    /**
     * @var integer <p>区域编码</p>
     */
    public $ZoneId;

    /**
     * @var string <p>预付费类型</p><p>枚举值：</p><ul><li>1： 全预费</li><li>2： 部分预付</li><li>3： 不预付</li></ul>
     */
    public $PrePayType;

    /**
     * @var integer <p>时长</p>
     */
    public $TimeSpan;

    /**
     * @var string <p>时长单位</p>
     */
    public $TimeUnit;

    /**
     * @var string <p>商品唯一标识</p>
     */
    public $CommodityCode;

    /**
     * @var integer <p>承诺时长内的小额金额（单位：元）</p>
     */
    public $PromiseUseAmount;

    /**
     * @var string <p>节省计划的指定生效时间，若不传则为当前下单时间。传参数格式:&quot;2023-10-01 00:00:00&quot;，仅支持指定日期的0点时刻</p>
     */
    public $SpecifyEffectTime;

    /**
     * @var string <p>可重入ID</p>
     */
    public $ClientToken;

    /**
     * @var integer <p>节省计划结算类型</p><p>枚举值：</p><ul><li>1： 小时结算包</li><li>2： 日结算包</li><li>3： 月结算包</li></ul><p>默认值：1</p><p>不填写是默认是小时结算包</p>
     */
    public $CommitmentPeriod;

    /**
     * @param integer $RegionId <p>地域编码</p>
     * @param integer $ZoneId <p>区域编码</p>
     * @param string $PrePayType <p>预付费类型</p><p>枚举值：</p><ul><li>1： 全预费</li><li>2： 部分预付</li><li>3： 不预付</li></ul>
     * @param integer $TimeSpan <p>时长</p>
     * @param string $TimeUnit <p>时长单位</p>
     * @param string $CommodityCode <p>商品唯一标识</p>
     * @param integer $PromiseUseAmount <p>承诺时长内的小额金额（单位：元）</p>
     * @param string $SpecifyEffectTime <p>节省计划的指定生效时间，若不传则为当前下单时间。传参数格式:&quot;2023-10-01 00:00:00&quot;，仅支持指定日期的0点时刻</p>
     * @param string $ClientToken <p>可重入ID</p>
     * @param integer $CommitmentPeriod <p>节省计划结算类型</p><p>枚举值：</p><ul><li>1： 小时结算包</li><li>2： 日结算包</li><li>3： 月结算包</li></ul><p>默认值：1</p><p>不填写是默认是小时结算包</p>
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

        if (array_key_exists("CommitmentPeriod",$param) and $param["CommitmentPeriod"] !== null) {
            $this->CommitmentPeriod = $param["CommitmentPeriod"];
        }
    }
}

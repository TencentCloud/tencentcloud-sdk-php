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
 * CreateInstance请求参数结构体
 *
 * @method string getClientToken() 获取ClientToken是一个由客户端生成的唯一的、区分大小写、不超过64个ASCII字符的字符串。例如，ClientToken=123e4567-e89b-12d3-a456-42665544****。
 * @method void setClientToken(string $ClientToken) 设置ClientToken是一个由客户端生成的唯一的、区分大小写、不超过64个ASCII字符的字符串。例如，ClientToken=123e4567-e89b-12d3-a456-42665544****。
 * @method string getProductCode() 获取产品一层code
 * @method void setProductCode(string $ProductCode) 设置产品一层code
 * @method string getSubProductCode() 获取产品二层code
 * @method void setSubProductCode(string $SubProductCode) 设置产品二层code
 * @method string getRegionCode() 获取地域code
 * @method void setRegionCode(string $RegionCode) 设置地域code
 * @method string getZoneCode() 获取可用区code
 * @method void setZoneCode(string $ZoneCode) 设置可用区code
 * @method string getPayMode() 获取付费类型，取值：  PrePay：预付费
 * @method void setPayMode(string $PayMode) 设置付费类型，取值：  PrePay：预付费
 * @method string getParameter() 获取商品详情信息
 * @method void setParameter(string $Parameter) 设置商品详情信息
 * @method integer getQuantity() 获取商品数量，默认取值1
 * @method void setQuantity(integer $Quantity) 设置商品数量，默认取值1
 * @method integer getProjectId() 获取项目id，默认取0
 * @method void setProjectId(integer $ProjectId) 设置项目id，默认取0
 * @method integer getPeriod() 获取新购时长，取值上限：36，默认取值1
 * @method void setPeriod(integer $Period) 设置新购时长，取值上限：36，默认取值1
 * @method string getPeriodUnit() 获取新购时长单位，取值：m：按月购买，y：按年购买，默认取值m
 * @method void setPeriodUnit(string $PeriodUnit) 设置新购时长单位，取值：m：按月购买，y：按年购买，默认取值m
 * @method string getRenewFlag() 获取自动续费标识，取值：NOTIFY_AND_MANUAL_RENEW：手动续费，NOTIFY_AND_AUTO_RENEW：自动续费，DISABLE_NOTIFY_AND_MANUAL_RENEW：到期不续，默认取值NOTIFY_AND_MANUAL_RENEW
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标识，取值：NOTIFY_AND_MANUAL_RENEW：手动续费，NOTIFY_AND_AUTO_RENEW：自动续费，DISABLE_NOTIFY_AND_MANUAL_RENEW：到期不续，默认取值NOTIFY_AND_MANUAL_RENEW
 */
class CreateInstanceRequest extends AbstractModel
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
     * @var string 可用区code
     */
    public $ZoneCode;

    /**
     * @var string 付费类型，取值：  PrePay：预付费
     */
    public $PayMode;

    /**
     * @var string 商品详情信息
     */
    public $Parameter;

    /**
     * @var integer 商品数量，默认取值1
     */
    public $Quantity;

    /**
     * @var integer 项目id，默认取0
     */
    public $ProjectId;

    /**
     * @var integer 新购时长，取值上限：36，默认取值1
     */
    public $Period;

    /**
     * @var string 新购时长单位，取值：m：按月购买，y：按年购买，默认取值m
     */
    public $PeriodUnit;

    /**
     * @var string 自动续费标识，取值：NOTIFY_AND_MANUAL_RENEW：手动续费，NOTIFY_AND_AUTO_RENEW：自动续费，DISABLE_NOTIFY_AND_MANUAL_RENEW：到期不续，默认取值NOTIFY_AND_MANUAL_RENEW
     */
    public $RenewFlag;

    /**
     * @param string $ClientToken ClientToken是一个由客户端生成的唯一的、区分大小写、不超过64个ASCII字符的字符串。例如，ClientToken=123e4567-e89b-12d3-a456-42665544****。
     * @param string $ProductCode 产品一层code
     * @param string $SubProductCode 产品二层code
     * @param string $RegionCode 地域code
     * @param string $ZoneCode 可用区code
     * @param string $PayMode 付费类型，取值：  PrePay：预付费
     * @param string $Parameter 商品详情信息
     * @param integer $Quantity 商品数量，默认取值1
     * @param integer $ProjectId 项目id，默认取0
     * @param integer $Period 新购时长，取值上限：36，默认取值1
     * @param string $PeriodUnit 新购时长单位，取值：m：按月购买，y：按年购买，默认取值m
     * @param string $RenewFlag 自动续费标识，取值：NOTIFY_AND_MANUAL_RENEW：手动续费，NOTIFY_AND_AUTO_RENEW：自动续费，DISABLE_NOTIFY_AND_MANUAL_RENEW：到期不续，默认取值NOTIFY_AND_MANUAL_RENEW
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

        if (array_key_exists("ZoneCode",$param) and $param["ZoneCode"] !== null) {
            $this->ZoneCode = $param["ZoneCode"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Parameter",$param) and $param["Parameter"] !== null) {
            $this->Parameter = $param["Parameter"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("PeriodUnit",$param) and $param["PeriodUnit"] !== null) {
            $this->PeriodUnit = $param["PeriodUnit"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}

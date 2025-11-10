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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子域名详情
 *
 * @method integer getId() 获取主键ID
 * @method void setId(integer $Id) 设置主键ID
 * @method string getSubDomain() 获取子域名
 * @method void setSubDomain(string $SubDomain) 设置子域名
 * @method string getIp() 获取Ip
 * @method void setIp(string $Ip) 设置Ip
 * @method string getCountry() 获取国家
 * @method void setCountry(string $Country) 设置国家
 * @method string getProvince() 获取省份
 * @method void setProvince(string $Province) 设置省份
 * @method string getCity() 获取城市
 * @method void setCity(string $City) 设置城市
 * @method string getIsp() 获取互联网服务提供商
 * @method void setIsp(string $Isp) 设置互联网服务提供商
 * @method DisplayToolCommon getDisplayToolCommon() 获取公共字段
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置公共字段
 * @method integer getIsCloudAsset() 获取是否为云资产：0-非云资产 1-是云资产
 * @method void setIsCloudAsset(integer $IsCloudAsset) 设置是否为云资产：0-非云资产 1-是云资产
 * @method integer getCloudAssetStatus() 获取云资产是否下线：-1-已下线 0-正常
 * @method void setCloudAssetStatus(integer $CloudAssetStatus) 设置云资产是否下线：-1-已下线 0-正常
 * @method integer getAvailabilityRate() 获取可用率（百分比）
 * @method void setAvailabilityRate(integer $AvailabilityRate) 设置可用率（百分比）
 * @method integer getAvailabilityState() 获取可用状态 1:异常 0:正常
 * @method void setAvailabilityState(integer $AvailabilityState) 设置可用状态 1:异常 0:正常
 * @method integer getAnalysisState() 获取域名解析状态 1:异常 0:正常
 * @method void setAnalysisState(integer $AnalysisState) 设置域名解析状态 1:异常 0:正常
 * @method integer getAverageDelay() 获取平均时延：单位ms
 * @method void setAverageDelay(integer $AverageDelay) 设置平均时延：单位ms
 * @method integer getLossRate() 获取丢包率（百分比）
 * @method void setLossRate(integer $LossRate) 设置丢包率（百分比）
 */
class DisplaySubDomain extends AbstractModel
{
    /**
     * @var integer 主键ID
     */
    public $Id;

    /**
     * @var string 子域名
     */
    public $SubDomain;

    /**
     * @var string Ip
     */
    public $Ip;

    /**
     * @var string 国家
     */
    public $Country;

    /**
     * @var string 省份
     */
    public $Province;

    /**
     * @var string 城市
     */
    public $City;

    /**
     * @var string 互联网服务提供商
     */
    public $Isp;

    /**
     * @var DisplayToolCommon 公共字段
     */
    public $DisplayToolCommon;

    /**
     * @var integer 是否为云资产：0-非云资产 1-是云资产
     */
    public $IsCloudAsset;

    /**
     * @var integer 云资产是否下线：-1-已下线 0-正常
     */
    public $CloudAssetStatus;

    /**
     * @var integer 可用率（百分比）
     */
    public $AvailabilityRate;

    /**
     * @var integer 可用状态 1:异常 0:正常
     */
    public $AvailabilityState;

    /**
     * @var integer 域名解析状态 1:异常 0:正常
     */
    public $AnalysisState;

    /**
     * @var integer 平均时延：单位ms
     */
    public $AverageDelay;

    /**
     * @var integer 丢包率（百分比）
     */
    public $LossRate;

    /**
     * @param integer $Id 主键ID
     * @param string $SubDomain 子域名
     * @param string $Ip Ip
     * @param string $Country 国家
     * @param string $Province 省份
     * @param string $City 城市
     * @param string $Isp 互联网服务提供商
     * @param DisplayToolCommon $DisplayToolCommon 公共字段
     * @param integer $IsCloudAsset 是否为云资产：0-非云资产 1-是云资产
     * @param integer $CloudAssetStatus 云资产是否下线：-1-已下线 0-正常
     * @param integer $AvailabilityRate 可用率（百分比）
     * @param integer $AvailabilityState 可用状态 1:异常 0:正常
     * @param integer $AnalysisState 域名解析状态 1:异常 0:正常
     * @param integer $AverageDelay 平均时延：单位ms
     * @param integer $LossRate 丢包率（百分比）
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("DisplayToolCommon",$param) and $param["DisplayToolCommon"] !== null) {
            $this->DisplayToolCommon = new DisplayToolCommon();
            $this->DisplayToolCommon->deserialize($param["DisplayToolCommon"]);
        }

        if (array_key_exists("IsCloudAsset",$param) and $param["IsCloudAsset"] !== null) {
            $this->IsCloudAsset = $param["IsCloudAsset"];
        }

        if (array_key_exists("CloudAssetStatus",$param) and $param["CloudAssetStatus"] !== null) {
            $this->CloudAssetStatus = $param["CloudAssetStatus"];
        }

        if (array_key_exists("AvailabilityRate",$param) and $param["AvailabilityRate"] !== null) {
            $this->AvailabilityRate = $param["AvailabilityRate"];
        }

        if (array_key_exists("AvailabilityState",$param) and $param["AvailabilityState"] !== null) {
            $this->AvailabilityState = $param["AvailabilityState"];
        }

        if (array_key_exists("AnalysisState",$param) and $param["AnalysisState"] !== null) {
            $this->AnalysisState = $param["AnalysisState"];
        }

        if (array_key_exists("AverageDelay",$param) and $param["AverageDelay"] !== null) {
            $this->AverageDelay = $param["AverageDelay"];
        }

        if (array_key_exists("LossRate",$param) and $param["LossRate"] !== null) {
            $this->LossRate = $param["LossRate"];
        }
    }
}

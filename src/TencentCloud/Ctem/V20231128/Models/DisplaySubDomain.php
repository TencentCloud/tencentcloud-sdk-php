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
 * @method integer getId() 获取<p>主键ID</p>
 * @method void setId(integer $Id) 设置<p>主键ID</p>
 * @method string getSubDomain() 获取<p>子域名</p>
 * @method void setSubDomain(string $SubDomain) 设置<p>子域名</p>
 * @method string getIp() 获取<p>Ip</p>
 * @method void setIp(string $Ip) 设置<p>Ip</p>
 * @method string getCountry() 获取<p>国家</p>
 * @method void setCountry(string $Country) 设置<p>国家</p>
 * @method string getProvince() 获取<p>省份</p>
 * @method void setProvince(string $Province) 设置<p>省份</p>
 * @method string getCity() 获取<p>城市</p>
 * @method void setCity(string $City) 设置<p>城市</p>
 * @method string getIsp() 获取<p>互联网服务提供商</p>
 * @method void setIsp(string $Isp) 设置<p>互联网服务提供商</p>
 * @method DisplayToolCommon getDisplayToolCommon() 获取<p>公共字段</p>
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置<p>公共字段</p>
 * @method integer getIsCloudAsset() 获取<p>是否为云资产：0-非云资产 1-是云资产</p>
 * @method void setIsCloudAsset(integer $IsCloudAsset) 设置<p>是否为云资产：0-非云资产 1-是云资产</p>
 * @method integer getCloudAssetStatus() 获取<p>云资产是否下线：-1-已下线 0-正常</p>
 * @method void setCloudAssetStatus(integer $CloudAssetStatus) 设置<p>云资产是否下线：-1-已下线 0-正常</p>
 * @method integer getAvailabilityRate() 获取<p>可用率（百分比）</p>
 * @method void setAvailabilityRate(integer $AvailabilityRate) 设置<p>可用率（百分比）</p>
 * @method integer getAvailabilityState() 获取<p>可用状态 1:异常 0:正常</p>
 * @method void setAvailabilityState(integer $AvailabilityState) 设置<p>可用状态 1:异常 0:正常</p>
 * @method integer getAnalysisState() 获取<p>域名解析状态 1:异常 0:正常</p>
 * @method void setAnalysisState(integer $AnalysisState) 设置<p>域名解析状态 1:异常 0:正常</p>
 * @method integer getAverageDelay() 获取<p>平均时延：单位ms</p>
 * @method void setAverageDelay(integer $AverageDelay) 设置<p>平均时延：单位ms</p>
 * @method integer getLossRate() 获取<p>丢包率（百分比）</p>
 * @method void setLossRate(integer $LossRate) 设置<p>丢包率（百分比）</p>
 * @method string getDnsType() 获取<p>DNS解析类型</p><p>A、AAAA、MX、CNAME、NX</p>
 * @method void setDnsType(string $DnsType) 设置<p>DNS解析类型</p><p>A、AAAA、MX、CNAME、NX</p>
 * @method string getDnsValue() 获取<p>DNS解析值</p>
 * @method void setDnsValue(string $DnsValue) 设置<p>DNS解析值</p>
 */
class DisplaySubDomain extends AbstractModel
{
    /**
     * @var integer <p>主键ID</p>
     */
    public $Id;

    /**
     * @var string <p>子域名</p>
     */
    public $SubDomain;

    /**
     * @var string <p>Ip</p>
     */
    public $Ip;

    /**
     * @var string <p>国家</p>
     */
    public $Country;

    /**
     * @var string <p>省份</p>
     */
    public $Province;

    /**
     * @var string <p>城市</p>
     */
    public $City;

    /**
     * @var string <p>互联网服务提供商</p>
     */
    public $Isp;

    /**
     * @var DisplayToolCommon <p>公共字段</p>
     */
    public $DisplayToolCommon;

    /**
     * @var integer <p>是否为云资产：0-非云资产 1-是云资产</p>
     */
    public $IsCloudAsset;

    /**
     * @var integer <p>云资产是否下线：-1-已下线 0-正常</p>
     */
    public $CloudAssetStatus;

    /**
     * @var integer <p>可用率（百分比）</p>
     */
    public $AvailabilityRate;

    /**
     * @var integer <p>可用状态 1:异常 0:正常</p>
     */
    public $AvailabilityState;

    /**
     * @var integer <p>域名解析状态 1:异常 0:正常</p>
     */
    public $AnalysisState;

    /**
     * @var integer <p>平均时延：单位ms</p>
     */
    public $AverageDelay;

    /**
     * @var integer <p>丢包率（百分比）</p>
     */
    public $LossRate;

    /**
     * @var string <p>DNS解析类型</p><p>A、AAAA、MX、CNAME、NX</p>
     */
    public $DnsType;

    /**
     * @var string <p>DNS解析值</p>
     */
    public $DnsValue;

    /**
     * @param integer $Id <p>主键ID</p>
     * @param string $SubDomain <p>子域名</p>
     * @param string $Ip <p>Ip</p>
     * @param string $Country <p>国家</p>
     * @param string $Province <p>省份</p>
     * @param string $City <p>城市</p>
     * @param string $Isp <p>互联网服务提供商</p>
     * @param DisplayToolCommon $DisplayToolCommon <p>公共字段</p>
     * @param integer $IsCloudAsset <p>是否为云资产：0-非云资产 1-是云资产</p>
     * @param integer $CloudAssetStatus <p>云资产是否下线：-1-已下线 0-正常</p>
     * @param integer $AvailabilityRate <p>可用率（百分比）</p>
     * @param integer $AvailabilityState <p>可用状态 1:异常 0:正常</p>
     * @param integer $AnalysisState <p>域名解析状态 1:异常 0:正常</p>
     * @param integer $AverageDelay <p>平均时延：单位ms</p>
     * @param integer $LossRate <p>丢包率（百分比）</p>
     * @param string $DnsType <p>DNS解析类型</p><p>A、AAAA、MX、CNAME、NX</p>
     * @param string $DnsValue <p>DNS解析值</p>
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

        if (array_key_exists("DnsType",$param) and $param["DnsType"] !== null) {
            $this->DnsType = $param["DnsType"];
        }

        if (array_key_exists("DnsValue",$param) and $param["DnsValue"] !== null) {
            $this->DnsValue = $param["DnsValue"];
        }
    }
}

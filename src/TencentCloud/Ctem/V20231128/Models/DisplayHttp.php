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
 * Http详情
 *
 * @method integer getId() 获取<p>主键ID</p>
 * @method void setId(integer $Id) 设置<p>主键ID</p>
 * @method DisplayToolCommon getDisplayToolCommon() 获取<p>公共字段</p>
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置<p>公共字段</p>
 * @method string getUrl() 获取<p>Url</p>
 * @method void setUrl(string $Url) 设置<p>Url</p>
 * @method string getTitle() 获取<p>标题</p>
 * @method void setTitle(string $Title) 设置<p>标题</p>
 * @method integer getContentLength() 获取<p>报文长度</p>
 * @method void setContentLength(integer $ContentLength) 设置<p>报文长度</p>
 * @method string getContent() 获取<p>报文内容</p>
 * @method void setContent(string $Content) 设置<p>报文内容</p>
 * @method string getScreenshotThumbUrl() 获取<p>截图缩略图URL</p>
 * @method void setScreenshotThumbUrl(string $ScreenshotThumbUrl) 设置<p>截图缩略图URL</p>
 * @method string getScreenshotUrl() 获取<p>截图URL</p>
 * @method void setScreenshotUrl(string $ScreenshotUrl) 设置<p>截图URL</p>
 * @method integer getCode() 获取<p>状态码</p>
 * @method void setCode(integer $Code) 设置<p>状态码</p>
 * @method string getApi() 获取<p>Api地址</p>
 * @method void setApi(string $Api) 设置<p>Api地址</p>
 * @method string getIp() 获取<p>解析的IP</p>
 * @method void setIp(string $Ip) 设置<p>解析的IP</p>
 * @method string getSsl() 获取<p>证书信息</p>
 * @method void setSsl(string $Ssl) 设置<p>证书信息</p>
 * @method string getSslExpiredTime() 获取<p>ssl证书过期时间</p>
 * @method void setSslExpiredTime(string $SslExpiredTime) 设置<p>ssl证书过期时间</p>
 * @method boolean getIsChange() 获取<p>资产是否发生变动</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsChange(boolean $IsChange) 设置<p>资产是否发生变动</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsCloudAsset() 获取<p>是否为云资产：0-非云资产 1-是云资产</p>
 * @method void setIsCloudAsset(integer $IsCloudAsset) 设置<p>是否为云资产：0-非云资产 1-是云资产</p>
 * @method integer getCloudAssetStatus() 获取<p>云资产是否下线：-1-已下线 0-正常</p>
 * @method void setCloudAssetStatus(integer $CloudAssetStatus) 设置<p>云资产是否下线：-1-已下线 0-正常</p>
 * @method integer getAvailabilityRate() 获取<p>可用率（百分比）</p>
 * @method void setAvailabilityRate(integer $AvailabilityRate) 设置<p>可用率（百分比）</p>
 * @method integer getAvailabilityState() 获取<p>可用状态 1:异常 0:正常</p>
 * @method void setAvailabilityState(integer $AvailabilityState) 设置<p>可用状态 1:异常 0:正常</p>
 * @method integer getResponseTime() 获取<p>平均响应时间：单位ms</p>
 * @method void setResponseTime(integer $ResponseTime) 设置<p>平均响应时间：单位ms</p>
 * @method integer getAnalysisState() 获取<p>域名解析状态 1:异常 0:正常</p>
 * @method void setAnalysisState(integer $AnalysisState) 设置<p>域名解析状态 1:异常 0:正常</p>
 * @method integer getAggregationCount() 获取<p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
 * @method void setAggregationCount(integer $AggregationCount) 设置<p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
 */
class DisplayHttp extends AbstractModel
{
    /**
     * @var integer <p>主键ID</p>
     */
    public $Id;

    /**
     * @var DisplayToolCommon <p>公共字段</p>
     */
    public $DisplayToolCommon;

    /**
     * @var string <p>Url</p>
     */
    public $Url;

    /**
     * @var string <p>标题</p>
     */
    public $Title;

    /**
     * @var integer <p>报文长度</p>
     */
    public $ContentLength;

    /**
     * @var string <p>报文内容</p>
     */
    public $Content;

    /**
     * @var string <p>截图缩略图URL</p>
     */
    public $ScreenshotThumbUrl;

    /**
     * @var string <p>截图URL</p>
     */
    public $ScreenshotUrl;

    /**
     * @var integer <p>状态码</p>
     */
    public $Code;

    /**
     * @var string <p>Api地址</p>
     */
    public $Api;

    /**
     * @var string <p>解析的IP</p>
     */
    public $Ip;

    /**
     * @var string <p>证书信息</p>
     */
    public $Ssl;

    /**
     * @var string <p>ssl证书过期时间</p>
     */
    public $SslExpiredTime;

    /**
     * @var boolean <p>资产是否发生变动</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsChange;

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
     * @var integer <p>平均响应时间：单位ms</p>
     */
    public $ResponseTime;

    /**
     * @var integer <p>域名解析状态 1:异常 0:正常</p>
     */
    public $AnalysisState;

    /**
     * @var integer <p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
     */
    public $AggregationCount;

    /**
     * @param integer $Id <p>主键ID</p>
     * @param DisplayToolCommon $DisplayToolCommon <p>公共字段</p>
     * @param string $Url <p>Url</p>
     * @param string $Title <p>标题</p>
     * @param integer $ContentLength <p>报文长度</p>
     * @param string $Content <p>报文内容</p>
     * @param string $ScreenshotThumbUrl <p>截图缩略图URL</p>
     * @param string $ScreenshotUrl <p>截图URL</p>
     * @param integer $Code <p>状态码</p>
     * @param string $Api <p>Api地址</p>
     * @param string $Ip <p>解析的IP</p>
     * @param string $Ssl <p>证书信息</p>
     * @param string $SslExpiredTime <p>ssl证书过期时间</p>
     * @param boolean $IsChange <p>资产是否发生变动</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsCloudAsset <p>是否为云资产：0-非云资产 1-是云资产</p>
     * @param integer $CloudAssetStatus <p>云资产是否下线：-1-已下线 0-正常</p>
     * @param integer $AvailabilityRate <p>可用率（百分比）</p>
     * @param integer $AvailabilityState <p>可用状态 1:异常 0:正常</p>
     * @param integer $ResponseTime <p>平均响应时间：单位ms</p>
     * @param integer $AnalysisState <p>域名解析状态 1:异常 0:正常</p>
     * @param integer $AggregationCount <p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
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

        if (array_key_exists("DisplayToolCommon",$param) and $param["DisplayToolCommon"] !== null) {
            $this->DisplayToolCommon = new DisplayToolCommon();
            $this->DisplayToolCommon->deserialize($param["DisplayToolCommon"]);
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("ContentLength",$param) and $param["ContentLength"] !== null) {
            $this->ContentLength = $param["ContentLength"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ScreenshotThumbUrl",$param) and $param["ScreenshotThumbUrl"] !== null) {
            $this->ScreenshotThumbUrl = $param["ScreenshotThumbUrl"];
        }

        if (array_key_exists("ScreenshotUrl",$param) and $param["ScreenshotUrl"] !== null) {
            $this->ScreenshotUrl = $param["ScreenshotUrl"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Api",$param) and $param["Api"] !== null) {
            $this->Api = $param["Api"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Ssl",$param) and $param["Ssl"] !== null) {
            $this->Ssl = $param["Ssl"];
        }

        if (array_key_exists("SslExpiredTime",$param) and $param["SslExpiredTime"] !== null) {
            $this->SslExpiredTime = $param["SslExpiredTime"];
        }

        if (array_key_exists("IsChange",$param) and $param["IsChange"] !== null) {
            $this->IsChange = $param["IsChange"];
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

        if (array_key_exists("ResponseTime",$param) and $param["ResponseTime"] !== null) {
            $this->ResponseTime = $param["ResponseTime"];
        }

        if (array_key_exists("AnalysisState",$param) and $param["AnalysisState"] !== null) {
            $this->AnalysisState = $param["AnalysisState"];
        }

        if (array_key_exists("AggregationCount",$param) and $param["AggregationCount"] !== null) {
            $this->AggregationCount = $param["AggregationCount"];
        }
    }
}

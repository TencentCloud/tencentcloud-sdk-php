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
 * 影子资产详情
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
 * @method string getApi() 获取<p>Api</p>
 * @method void setApi(string $Api) 设置<p>Api</p>
 * @method string getIp() 获取<p>解析的IP</p>
 * @method void setIp(string $Ip) 设置<p>解析的IP</p>
 * @method string getSsl() 获取<p>证书信息</p>
 * @method void setSsl(string $Ssl) 设置<p>证书信息</p>
 * @method string getSslExpiredTime() 获取<p>ssl证书过期时间</p>
 * @method void setSslExpiredTime(string $SslExpiredTime) 设置<p>ssl证书过期时间</p>
 * @method string getSourceType() 获取<p>来源类型</p>
 * @method void setSourceType(string $SourceType) 设置<p>来源类型</p>
 * @method string getSourceValue() 获取<p>来源值</p>
 * @method void setSourceValue(string $SourceValue) 设置<p>来源值</p>
 * @method boolean getTrusted() 获取<p>是否信任</p>
 * @method void setTrusted(boolean $Trusted) 设置<p>是否信任</p>
 * @method string getOwner() 获取<p>所属者</p>
 * @method void setOwner(string $Owner) 设置<p>所属者</p>
 * @method string getRootDomain() 获取<p>根域名</p>
 * @method void setRootDomain(string $RootDomain) 设置<p>根域名</p>
 * @method integer getAggregationCount() 获取<p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
 * @method void setAggregationCount(integer $AggregationCount) 设置<p>聚合视角下该组真实子项总数；非聚合视角为 0</p>
 */
class DisplaySuspiciousAsset extends AbstractModel
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
     * @var string <p>Api</p>
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
     * @var string <p>来源类型</p>
     */
    public $SourceType;

    /**
     * @var string <p>来源值</p>
     */
    public $SourceValue;

    /**
     * @var boolean <p>是否信任</p>
     */
    public $Trusted;

    /**
     * @var string <p>所属者</p>
     */
    public $Owner;

    /**
     * @var string <p>根域名</p>
     */
    public $RootDomain;

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
     * @param string $Api <p>Api</p>
     * @param string $Ip <p>解析的IP</p>
     * @param string $Ssl <p>证书信息</p>
     * @param string $SslExpiredTime <p>ssl证书过期时间</p>
     * @param string $SourceType <p>来源类型</p>
     * @param string $SourceValue <p>来源值</p>
     * @param boolean $Trusted <p>是否信任</p>
     * @param string $Owner <p>所属者</p>
     * @param string $RootDomain <p>根域名</p>
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

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceValue",$param) and $param["SourceValue"] !== null) {
            $this->SourceValue = $param["SourceValue"];
        }

        if (array_key_exists("Trusted",$param) and $param["Trusted"] !== null) {
            $this->Trusted = $param["Trusted"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("RootDomain",$param) and $param["RootDomain"] !== null) {
            $this->RootDomain = $param["RootDomain"];
        }

        if (array_key_exists("AggregationCount",$param) and $param["AggregationCount"] !== null) {
            $this->AggregationCount = $param["AggregationCount"];
        }
    }
}

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
 * @method integer getId() 获取主键ID
 * @method void setId(integer $Id) 设置主键ID
 * @method DisplayToolCommon getDisplayToolCommon() 获取公共字段
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置公共字段
 * @method string getUrl() 获取Url
 * @method void setUrl(string $Url) 设置Url
 * @method string getTitle() 获取标题
 * @method void setTitle(string $Title) 设置标题
 * @method integer getContentLength() 获取报文长度
 * @method void setContentLength(integer $ContentLength) 设置报文长度
 * @method string getContent() 获取报文内容
 * @method void setContent(string $Content) 设置报文内容
 * @method string getScreenshotThumbUrl() 获取截图缩略图URL
 * @method void setScreenshotThumbUrl(string $ScreenshotThumbUrl) 设置截图缩略图URL
 * @method string getScreenshotUrl() 获取截图URL
 * @method void setScreenshotUrl(string $ScreenshotUrl) 设置截图URL
 * @method integer getCode() 获取状态码
 * @method void setCode(integer $Code) 设置状态码
 * @method string getApi() 获取Api
 * @method void setApi(string $Api) 设置Api
 * @method string getIp() 获取解析的IP
 * @method void setIp(string $Ip) 设置解析的IP
 * @method string getSsl() 获取证书信息
 * @method void setSsl(string $Ssl) 设置证书信息
 * @method string getSslExpiredTime() 获取ssl证书过期时间
 * @method void setSslExpiredTime(string $SslExpiredTime) 设置ssl证书过期时间
 * @method string getSourceType() 获取来源类型
 * @method void setSourceType(string $SourceType) 设置来源类型
 * @method string getSourceValue() 获取来源值
 * @method void setSourceValue(string $SourceValue) 设置来源值
 * @method boolean getTrusted() 获取是否信任
 * @method void setTrusted(boolean $Trusted) 设置是否信任
 * @method string getOwner() 获取所属者
 * @method void setOwner(string $Owner) 设置所属者
 * @method string getRootDomain() 获取根域名
 * @method void setRootDomain(string $RootDomain) 设置根域名
 */
class DisplaySuspiciousAsset extends AbstractModel
{
    /**
     * @var integer 主键ID
     */
    public $Id;

    /**
     * @var DisplayToolCommon 公共字段
     */
    public $DisplayToolCommon;

    /**
     * @var string Url
     */
    public $Url;

    /**
     * @var string 标题
     */
    public $Title;

    /**
     * @var integer 报文长度
     */
    public $ContentLength;

    /**
     * @var string 报文内容
     */
    public $Content;

    /**
     * @var string 截图缩略图URL
     */
    public $ScreenshotThumbUrl;

    /**
     * @var string 截图URL
     */
    public $ScreenshotUrl;

    /**
     * @var integer 状态码
     */
    public $Code;

    /**
     * @var string Api
     */
    public $Api;

    /**
     * @var string 解析的IP
     */
    public $Ip;

    /**
     * @var string 证书信息
     */
    public $Ssl;

    /**
     * @var string ssl证书过期时间
     */
    public $SslExpiredTime;

    /**
     * @var string 来源类型
     */
    public $SourceType;

    /**
     * @var string 来源值
     */
    public $SourceValue;

    /**
     * @var boolean 是否信任
     */
    public $Trusted;

    /**
     * @var string 所属者
     */
    public $Owner;

    /**
     * @var string 根域名
     */
    public $RootDomain;

    /**
     * @param integer $Id 主键ID
     * @param DisplayToolCommon $DisplayToolCommon 公共字段
     * @param string $Url Url
     * @param string $Title 标题
     * @param integer $ContentLength 报文长度
     * @param string $Content 报文内容
     * @param string $ScreenshotThumbUrl 截图缩略图URL
     * @param string $ScreenshotUrl 截图URL
     * @param integer $Code 状态码
     * @param string $Api Api
     * @param string $Ip 解析的IP
     * @param string $Ssl 证书信息
     * @param string $SslExpiredTime ssl证书过期时间
     * @param string $SourceType 来源类型
     * @param string $SourceValue 来源值
     * @param boolean $Trusted 是否信任
     * @param string $Owner 所属者
     * @param string $RootDomain 根域名
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
    }
}

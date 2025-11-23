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
 * CreateHttp请求参数结构体
 *
 * @method integer getCustomerId() 获取企业Id
 * @method void setCustomerId(integer $CustomerId) 设置企业Id
 * @method string getUrl() 获取Url
 * @method void setUrl(string $Url) 设置Url
 * @method string getEnterpriseUid() 获取子公司
 * @method void setEnterpriseUid(string $EnterpriseUid) 设置子公司
 * @method string getTitle() 获取标题
 * @method void setTitle(string $Title) 设置标题
 * @method integer getContentLength() 获取报文长度
 * @method void setContentLength(integer $ContentLength) 设置报文长度
 * @method string getContent() 获取报文内容
 * @method void setContent(string $Content) 设置报文内容
 * @method string getScreenshotUrl() 获取缩略图Url
 * @method void setScreenshotUrl(string $ScreenshotUrl) 设置缩略图Url
 * @method string getTags() 获取标签
 * @method void setTags(string $Tags) 设置标签
 * @method integer getCode() 获取状态码
 * @method void setCode(integer $Code) 设置状态码
 * @method string getIp() 获取解析的IP
 * @method void setIp(string $Ip) 设置解析的IP
 * @method string getSsl() 获取证书信息
 * @method void setSsl(string $Ssl) 设置证书信息
 * @method string getSslExpiredTime() 获取ssl证书过期时间
 * @method void setSslExpiredTime(string $SslExpiredTime) 设置ssl证书过期时间
 */
class CreateHttpRequest extends AbstractModel
{
    /**
     * @var integer 企业Id
     */
    public $CustomerId;

    /**
     * @var string Url
     */
    public $Url;

    /**
     * @var string 子公司
     */
    public $EnterpriseUid;

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
     * @var string 缩略图Url
     */
    public $ScreenshotUrl;

    /**
     * @var string 标签
     */
    public $Tags;

    /**
     * @var integer 状态码
     */
    public $Code;

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
     * @param integer $CustomerId 企业Id
     * @param string $Url Url
     * @param string $EnterpriseUid 子公司
     * @param string $Title 标题
     * @param integer $ContentLength 报文长度
     * @param string $Content 报文内容
     * @param string $ScreenshotUrl 缩略图Url
     * @param string $Tags 标签
     * @param integer $Code 状态码
     * @param string $Ip 解析的IP
     * @param string $Ssl 证书信息
     * @param string $SslExpiredTime ssl证书过期时间
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
        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("EnterpriseUid",$param) and $param["EnterpriseUid"] !== null) {
            $this->EnterpriseUid = $param["EnterpriseUid"];
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

        if (array_key_exists("ScreenshotUrl",$param) and $param["ScreenshotUrl"] !== null) {
            $this->ScreenshotUrl = $param["ScreenshotUrl"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
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
    }
}

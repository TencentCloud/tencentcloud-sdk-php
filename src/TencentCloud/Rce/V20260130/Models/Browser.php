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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 浏览器信息
 *
 * @method string getUserAgent() 获取<p>与网站交互的浏览器的用户代理</p>
 * @method void setUserAgent(string $UserAgent) 设置<p>与网站交互的浏览器的用户代理</p>
 * @method string getAcceptLanguage() 获取<p>浏览器支持的用户请求语言</p><p>参数格式：符合ISO 3166标准</p>
 * @method void setAcceptLanguage(string $AcceptLanguage) 设置<p>浏览器支持的用户请求语言</p><p>参数格式：符合ISO 3166标准</p>
 * @method string getContentLanguage() 获取<p>浏览器当前网站内容的语言</p><p>参数格式：符合ISO 3166标准</p>
 * @method void setContentLanguage(string $ContentLanguage) 设置<p>浏览器当前网站内容的语言</p><p>参数格式：符合ISO 3166标准</p>
 */
class Browser extends AbstractModel
{
    /**
     * @var string <p>与网站交互的浏览器的用户代理</p>
     */
    public $UserAgent;

    /**
     * @var string <p>浏览器支持的用户请求语言</p><p>参数格式：符合ISO 3166标准</p>
     */
    public $AcceptLanguage;

    /**
     * @var string <p>浏览器当前网站内容的语言</p><p>参数格式：符合ISO 3166标准</p>
     */
    public $ContentLanguage;

    /**
     * @param string $UserAgent <p>与网站交互的浏览器的用户代理</p>
     * @param string $AcceptLanguage <p>浏览器支持的用户请求语言</p><p>参数格式：符合ISO 3166标准</p>
     * @param string $ContentLanguage <p>浏览器当前网站内容的语言</p><p>参数格式：符合ISO 3166标准</p>
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
        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("AcceptLanguage",$param) and $param["AcceptLanguage"] !== null) {
            $this->AcceptLanguage = $param["AcceptLanguage"];
        }

        if (array_key_exists("ContentLanguage",$param) and $param["ContentLanguage"] !== null) {
            $this->ContentLanguage = $param["ContentLanguage"];
        }
    }
}

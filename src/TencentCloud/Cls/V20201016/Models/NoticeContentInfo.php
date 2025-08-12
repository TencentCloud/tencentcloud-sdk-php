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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通知模板内容
 *
 * @method string getTitle() 获取通知内容模板标题信息。
部分通知渠道类型不支持“标题”，请参照[腾讯云控制台页面](https://console.cloud.tencent.com/cls/alarm/notice-template)。
 * @method void setTitle(string $Title) 设置通知内容模板标题信息。
部分通知渠道类型不支持“标题”，请参照[腾讯云控制台页面](https://console.cloud.tencent.com/cls/alarm/notice-template)。
 * @method string getContent() 获取通知内容模板正文信息。
 * @method void setContent(string $Content) 设置通知内容模板正文信息。
 * @method array getHeaders() 获取请求头（Request Headers）：在HTTP请求中，请求头包含了客户端向服务器发送的附加信息，如用户代理、授权凭证、期望的响应格式等。
仅“自定义回调”支持该配置。
 * @method void setHeaders(array $Headers) 设置请求头（Request Headers）：在HTTP请求中，请求头包含了客户端向服务器发送的附加信息，如用户代理、授权凭证、期望的响应格式等。
仅“自定义回调”支持该配置。
 */
class NoticeContentInfo extends AbstractModel
{
    /**
     * @var string 通知内容模板标题信息。
部分通知渠道类型不支持“标题”，请参照[腾讯云控制台页面](https://console.cloud.tencent.com/cls/alarm/notice-template)。
     */
    public $Title;

    /**
     * @var string 通知内容模板正文信息。
     */
    public $Content;

    /**
     * @var array 请求头（Request Headers）：在HTTP请求中，请求头包含了客户端向服务器发送的附加信息，如用户代理、授权凭证、期望的响应格式等。
仅“自定义回调”支持该配置。
     */
    public $Headers;

    /**
     * @param string $Title 通知内容模板标题信息。
部分通知渠道类型不支持“标题”，请参照[腾讯云控制台页面](https://console.cloud.tencent.com/cls/alarm/notice-template)。
     * @param string $Content 通知内容模板正文信息。
     * @param array $Headers 请求头（Request Headers）：在HTTP请求中，请求头包含了客户端向服务器发送的附加信息，如用户代理、授权凭证、期望的响应格式等。
仅“自定义回调”支持该配置。
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = $param["Headers"];
        }
    }
}

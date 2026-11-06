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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mcp Sever参数。
 *
 * @method string getName() 获取<p>mcp唯一标识符。</p>
 * @method void setName(string $Name) 设置<p>mcp唯一标识符。</p>
 * @method string getUrl() 获取<p>接入地址。</p>
 * @method void setUrl(string $Url) 设置<p>接入地址。</p>
 * @method integer getTimeout() 获取<p>请求超时，单位ms，默认 5000。待确认范围。</p><p>单位：毫秒。</p>
 * @method void setTimeout(integer $Timeout) 设置<p>请求超时，单位ms，默认 5000。待确认范围。</p><p>单位：毫秒。</p>
 * @method array getHeaders() 获取<p>自定义请求header，用于填写鉴权等信息。</p>
 * @method void setHeaders(array $Headers) 设置<p>自定义请求header，用于填写鉴权等信息。</p>
 * @method array getToolList() 获取<p>工具使用白名单。</p>
 * @method void setToolList(array $ToolList) 设置<p>工具使用白名单。</p>
 */
class VoiceConversationMcpServer extends AbstractModel
{
    /**
     * @var string <p>mcp唯一标识符。</p>
     */
    public $Name;

    /**
     * @var string <p>接入地址。</p>
     */
    public $Url;

    /**
     * @var integer <p>请求超时，单位ms，默认 5000。待确认范围。</p><p>单位：毫秒。</p>
     */
    public $Timeout;

    /**
     * @var array <p>自定义请求header，用于填写鉴权等信息。</p>
     */
    public $Headers;

    /**
     * @var array <p>工具使用白名单。</p>
     */
    public $ToolList;

    /**
     * @param string $Name <p>mcp唯一标识符。</p>
     * @param string $Url <p>接入地址。</p>
     * @param integer $Timeout <p>请求超时，单位ms，默认 5000。待确认范围。</p><p>单位：毫秒。</p>
     * @param array $Headers <p>自定义请求header，用于填写鉴权等信息。</p>
     * @param array $ToolList <p>工具使用白名单。</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new KeyValueItem();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }

        if (array_key_exists("ToolList",$param) and $param["ToolList"] !== null) {
            $this->ToolList = $param["ToolList"];
        }
    }
}

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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 报文匹配条件。
 *
 * @method string getMatchBegin() 获取<p>报文匹配的起始位置。</p><p>枚举值：</p><ul><li>ip_header： 从 IP 头部开始匹配。</li><li>transport_header： 从 TCP/UDP 头部开始匹配。</li><li>payload： 从应用层载荷开始匹配。</li></ul>
 * @method void setMatchBegin(string $MatchBegin) 设置<p>报文匹配的起始位置。</p><p>枚举值：</p><ul><li>ip_header： 从 IP 头部开始匹配。</li><li>transport_header： 从 TCP/UDP 头部开始匹配。</li><li>payload： 从应用层载荷开始匹配。</li></ul>
 * @method PacketMatchContent getContent() 获取<p>报文匹配内容。</p>
 * @method void setContent(PacketMatchContent $Content) 设置<p>报文匹配内容。</p>
 */
class PacketFilterCondition extends AbstractModel
{
    /**
     * @var string <p>报文匹配的起始位置。</p><p>枚举值：</p><ul><li>ip_header： 从 IP 头部开始匹配。</li><li>transport_header： 从 TCP/UDP 头部开始匹配。</li><li>payload： 从应用层载荷开始匹配。</li></ul>
     */
    public $MatchBegin;

    /**
     * @var PacketMatchContent <p>报文匹配内容。</p>
     */
    public $Content;

    /**
     * @param string $MatchBegin <p>报文匹配的起始位置。</p><p>枚举值：</p><ul><li>ip_header： 从 IP 头部开始匹配。</li><li>transport_header： 从 TCP/UDP 头部开始匹配。</li><li>payload： 从应用层载荷开始匹配。</li></ul>
     * @param PacketMatchContent $Content <p>报文匹配内容。</p>
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
        if (array_key_exists("MatchBegin",$param) and $param["MatchBegin"] !== null) {
            $this->MatchBegin = $param["MatchBegin"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new PacketMatchContent();
            $this->Content->deserialize($param["Content"]);
        }
    }
}

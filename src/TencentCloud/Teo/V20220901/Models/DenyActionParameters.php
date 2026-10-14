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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全执行动作为拦截时的附加参数。

该参数用于指定在命中安全规则并执行拦截动作时，系统所采取的附加处置动作。
不同处置动作由不同且固定的参数组合进行配置，系统将根据所配置的参数组合判定实际生效的处置动作类型。
在同一次拦截执行过程中，仅允许配置并生效一种处置动作，多个处置动作对应的参数组合不可同时出现，否则视为非法配置。为空则采用默认拦截处置动作。
DenyActionParameters 支持以下附加处置动作：<li>默认：当 DenyActionParameters 为空，或未启用任何附加处置动作时，系统将执行默认拦截处置，即响应拦截页面。</li><li>IP 封禁：对触发规则的客户端来源 IP 进行持续封禁。对应参数 BlockIp、BlockIpDuration。</li><li>自定义页面拦截：使用指定的自定义页面内容响应请求。对应参数 ReturnCustomPage、ResponseCode、ErrorPageId。</li><li>静默：接受客户端请求但不返回。对应参数 Stall。</li>
 *
 * @method string getBlockIp() 获取是否对来源 IP 延长封禁。取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
启用后，对触发规则的客户端 IP 持续拦截。当启用该选项时，必须同时指定 BlockIpDuration 参数。
注意：该选项不可与 ReturnCustomPage 或 Stall 选项同时启用。
 * @method void setBlockIp(string $BlockIp) 设置是否对来源 IP 延长封禁。取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
启用后，对触发规则的客户端 IP 持续拦截。当启用该选项时，必须同时指定 BlockIpDuration 参数。
注意：该选项不可与 ReturnCustomPage 或 Stall 选项同时启用。
 * @method string getBlockIpDuration() 获取当 BlockIP 为 on 时IP 的封禁时长。
 * @method void setBlockIpDuration(string $BlockIpDuration) 设置当 BlockIP 为 on 时IP 的封禁时长。
 * @method string getReturnCustomPage() 获取是否使用自定义页面。取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
启用后，使用自定义页面内容拦截（响应）请求，当启用该选项时，必须同时指定 ResponseCode 和 ErrorPageId 参数。
注意：该选项不可与 BlockIp 或 Stall 选项同时启用。

 * @method void setReturnCustomPage(string $ReturnCustomPage) 设置是否使用自定义页面。取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
启用后，使用自定义页面内容拦截（响应）请求，当启用该选项时，必须同时指定 ResponseCode 和 ErrorPageId 参数。
注意：该选项不可与 BlockIp 或 Stall 选项同时启用。

 * @method string getResponseCode() 获取自定义页面的状态码。
 * @method void setResponseCode(string $ResponseCode) 设置自定义页面的状态码。
 * @method string getErrorPageId() 获取自定义页面的PageId。
 * @method void setErrorPageId(string $ErrorPageId) 设置自定义页面的PageId。
 * @method string getStall() 获取是否对请求来源挂起不予处理。取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
启用后，不再响应当前连接会话内请求，且不会主动断开连接。用于爬虫对抗时，消耗客户端连接资源。
注意：该选项不可与 BlockIp 或 ReturnCustomPage 选项同时启用。
 * @method void setStall(string $Stall) 设置是否对请求来源挂起不予处理。取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
启用后，不再响应当前连接会话内请求，且不会主动断开连接。用于爬虫对抗时，消耗客户端连接资源。
注意：该选项不可与 BlockIp 或 ReturnCustomPage 选项同时启用。
 */
class DenyActionParameters extends AbstractModel
{
    /**
     * @var string 是否对来源 IP 延长封禁。取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
启用后，对触发规则的客户端 IP 持续拦截。当启用该选项时，必须同时指定 BlockIpDuration 参数。
注意：该选项不可与 ReturnCustomPage 或 Stall 选项同时启用。
     */
    public $BlockIp;

    /**
     * @var string 当 BlockIP 为 on 时IP 的封禁时长。
     */
    public $BlockIpDuration;

    /**
     * @var string 是否使用自定义页面。取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
启用后，使用自定义页面内容拦截（响应）请求，当启用该选项时，必须同时指定 ResponseCode 和 ErrorPageId 参数。
注意：该选项不可与 BlockIp 或 Stall 选项同时启用。

     */
    public $ReturnCustomPage;

    /**
     * @var string 自定义页面的状态码。
     */
    public $ResponseCode;

    /**
     * @var string 自定义页面的PageId。
     */
    public $ErrorPageId;

    /**
     * @var string 是否对请求来源挂起不予处理。取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
启用后，不再响应当前连接会话内请求，且不会主动断开连接。用于爬虫对抗时，消耗客户端连接资源。
注意：该选项不可与 BlockIp 或 ReturnCustomPage 选项同时启用。
     */
    public $Stall;

    /**
     * @param string $BlockIp 是否对来源 IP 延长封禁。取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
启用后，对触发规则的客户端 IP 持续拦截。当启用该选项时，必须同时指定 BlockIpDuration 参数。
注意：该选项不可与 ReturnCustomPage 或 Stall 选项同时启用。
     * @param string $BlockIpDuration 当 BlockIP 为 on 时IP 的封禁时长。
     * @param string $ReturnCustomPage 是否使用自定义页面。取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
启用后，使用自定义页面内容拦截（响应）请求，当启用该选项时，必须同时指定 ResponseCode 和 ErrorPageId 参数。
注意：该选项不可与 BlockIp 或 Stall 选项同时启用。

     * @param string $ResponseCode 自定义页面的状态码。
     * @param string $ErrorPageId 自定义页面的PageId。
     * @param string $Stall 是否对请求来源挂起不予处理。取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
启用后，不再响应当前连接会话内请求，且不会主动断开连接。用于爬虫对抗时，消耗客户端连接资源。
注意：该选项不可与 BlockIp 或 ReturnCustomPage 选项同时启用。
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
        if (array_key_exists("BlockIp",$param) and $param["BlockIp"] !== null) {
            $this->BlockIp = $param["BlockIp"];
        }

        if (array_key_exists("BlockIpDuration",$param) and $param["BlockIpDuration"] !== null) {
            $this->BlockIpDuration = $param["BlockIpDuration"];
        }

        if (array_key_exists("ReturnCustomPage",$param) and $param["ReturnCustomPage"] !== null) {
            $this->ReturnCustomPage = $param["ReturnCustomPage"];
        }

        if (array_key_exists("ResponseCode",$param) and $param["ResponseCode"] !== null) {
            $this->ResponseCode = $param["ResponseCode"];
        }

        if (array_key_exists("ErrorPageId",$param) and $param["ErrorPageId"] !== null) {
            $this->ErrorPageId = $param["ErrorPageId"];
        }

        if (array_key_exists("Stall",$param) and $param["Stall"] !== null) {
            $this->Stall = $param["Stall"];
        }
    }
}

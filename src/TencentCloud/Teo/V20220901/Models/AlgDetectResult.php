<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * Bot主动特征识别校验结果。
 *
 * @method string getResult() 获取校验结果，取值有：
<li>invalid：不合法Cookie；</li>
<li>cookie_empty：末携带Cookie或Cookie己过期；</li>
<li>js_empty：客户端末启用JS（末完成检测）；</li>
<li>low：会话速率和周期特征校验低风险；</li>
<li>middle：会话速率和周期特征校验中风险；</li>
<li>high：会话速率和周期特征校验高风险；</li>
<li>timeout：检测超时时长；</li>
<li>not_browser：不合法浏览器；</li>
<li>is_bot：Bot客户端。</li>
 * @method void setResult(string $Result) 设置校验结果，取值有：
<li>invalid：不合法Cookie；</li>
<li>cookie_empty：末携带Cookie或Cookie己过期；</li>
<li>js_empty：客户端末启用JS（末完成检测）；</li>
<li>low：会话速率和周期特征校验低风险；</li>
<li>middle：会话速率和周期特征校验中风险；</li>
<li>high：会话速率和周期特征校验高风险；</li>
<li>timeout：检测超时时长；</li>
<li>not_browser：不合法浏览器；</li>
<li>is_bot：Bot客户端。</li>
 * @method string getAction() 获取处罚动作，取值有：
<li>drop：拦截；</li>
<li>monitor：观察；</li>
<li>silence：静默；</li>
<li>shortdelay：（短时间）等待后响应；</li>
<li>longdelay：（长时间）等待后响应。</li>
 * @method void setAction(string $Action) 设置处罚动作，取值有：
<li>drop：拦截；</li>
<li>monitor：观察；</li>
<li>silence：静默；</li>
<li>shortdelay：（短时间）等待后响应；</li>
<li>longdelay：（长时间）等待后响应。</li>
 */
class AlgDetectResult extends AbstractModel
{
    /**
     * @var string 校验结果，取值有：
<li>invalid：不合法Cookie；</li>
<li>cookie_empty：末携带Cookie或Cookie己过期；</li>
<li>js_empty：客户端末启用JS（末完成检测）；</li>
<li>low：会话速率和周期特征校验低风险；</li>
<li>middle：会话速率和周期特征校验中风险；</li>
<li>high：会话速率和周期特征校验高风险；</li>
<li>timeout：检测超时时长；</li>
<li>not_browser：不合法浏览器；</li>
<li>is_bot：Bot客户端。</li>
     */
    public $Result;

    /**
     * @var string 处罚动作，取值有：
<li>drop：拦截；</li>
<li>monitor：观察；</li>
<li>silence：静默；</li>
<li>shortdelay：（短时间）等待后响应；</li>
<li>longdelay：（长时间）等待后响应。</li>
     */
    public $Action;

    /**
     * @param string $Result 校验结果，取值有：
<li>invalid：不合法Cookie；</li>
<li>cookie_empty：末携带Cookie或Cookie己过期；</li>
<li>js_empty：客户端末启用JS（末完成检测）；</li>
<li>low：会话速率和周期特征校验低风险；</li>
<li>middle：会话速率和周期特征校验中风险；</li>
<li>high：会话速率和周期特征校验高风险；</li>
<li>timeout：检测超时时长；</li>
<li>not_browser：不合法浏览器；</li>
<li>is_bot：Bot客户端。</li>
     * @param string $Action 处罚动作，取值有：
<li>drop：拦截；</li>
<li>monitor：观察；</li>
<li>silence：静默；</li>
<li>shortdelay：（短时间）等待后响应；</li>
<li>longdelay：（长时间）等待后响应。</li>
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}

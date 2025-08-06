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
 * 高频扫描防护配置选项，当某一访客的请求频繁命中「配置为拦截」的托管规则时，在一段时间内封禁该访客所有请求。
 *
 * @method string getEnabled() 获取高频扫描防护规则是否开启。取值有：<li>on：开启，高频扫描防护规则生效；</li><li>off：关闭，高频扫描防护规则不生效。</li>	
 * @method void setEnabled(string $Enabled) 设置高频扫描防护规则是否开启。取值有：<li>on：开启，高频扫描防护规则生效；</li><li>off：关闭，高频扫描防护规则不生效。</li>	
 * @method SecurityAction getAction() 获取高频扫描防护的处置动作。 当 Enabled 为 on 时，此字段必填。SecurityAction 的 Name 取值支持：<li>Deny：拦截，响应拦截页面；</li><li>Monitor：观察，不处理请求记录安全事件到日志中；</li><li>JSChallenge：JavaScript 挑战，响应 JavaScript 挑战页面。</li>
 * @method void setAction(SecurityAction $Action) 设置高频扫描防护的处置动作。 当 Enabled 为 on 时，此字段必填。SecurityAction 的 Name 取值支持：<li>Deny：拦截，响应拦截页面；</li><li>Monitor：观察，不处理请求记录安全事件到日志中；</li><li>JSChallenge：JavaScript 挑战，响应 JavaScript 挑战页面。</li>
 * @method string getCountBy() 获取请求统计的匹配方式，当 Enabled 为 on 时，此字段必填。取值有：<li>http.request.xff_header_ip：客户端 IP（优先匹配 XFF 头部）；</li><li>http.request.ip：客户端 IP。</li> 
 * @method void setCountBy(string $CountBy) 设置请求统计的匹配方式，当 Enabled 为 on 时，此字段必填。取值有：<li>http.request.xff_header_ip：客户端 IP（优先匹配 XFF 头部）；</li><li>http.request.ip：客户端 IP。</li> 
 * @method integer getBlockThreshold() 获取此参数指定高频扫描防护的阈值，即在 CountingPeriod 所设置时间范围内命中「配置为拦截」的托管规则时的累计拦截次数，取值范围 1 ~ 4294967294，例如 100，当超过此统计值时，后续请求将触发 Action 所设置的处置动作。当 Enabled 为 on 时，此字段必填。
 * @method void setBlockThreshold(integer $BlockThreshold) 设置此参数指定高频扫描防护的阈值，即在 CountingPeriod 所设置时间范围内命中「配置为拦截」的托管规则时的累计拦截次数，取值范围 1 ~ 4294967294，例如 100，当超过此统计值时，后续请求将触发 Action 所设置的处置动作。当 Enabled 为 on 时，此字段必填。
 * @method string getCountingPeriod() 获取此参数指定高频扫描防护所统计的时间窗口，即命中「配置为拦截」的托管规则的请求的统计时间窗口，取值 5 ~ 1800，单位仅支持秒（s），例如 5s。 当 Enabled 为 on 时，此字段必填。
 * @method void setCountingPeriod(string $CountingPeriod) 设置此参数指定高频扫描防护所统计的时间窗口，即命中「配置为拦截」的托管规则的请求的统计时间窗口，取值 5 ~ 1800，单位仅支持秒（s），例如 5s。 当 Enabled 为 on 时，此字段必填。
 * @method string getActionDuration() 获取此参数指定高频扫描防护 Action 参数所设置处置动作的持续时长，取值范围 60 ~ 86400，单位仅支持秒（s），例如 60s。当 Enabled 为 on 时，此字段必填。
 * @method void setActionDuration(string $ActionDuration) 设置此参数指定高频扫描防护 Action 参数所设置处置动作的持续时长，取值范围 60 ~ 86400，单位仅支持秒（s），例如 60s。当 Enabled 为 on 时，此字段必填。
 */
class FrequentScanningProtection extends AbstractModel
{
    /**
     * @var string 高频扫描防护规则是否开启。取值有：<li>on：开启，高频扫描防护规则生效；</li><li>off：关闭，高频扫描防护规则不生效。</li>	
     */
    public $Enabled;

    /**
     * @var SecurityAction 高频扫描防护的处置动作。 当 Enabled 为 on 时，此字段必填。SecurityAction 的 Name 取值支持：<li>Deny：拦截，响应拦截页面；</li><li>Monitor：观察，不处理请求记录安全事件到日志中；</li><li>JSChallenge：JavaScript 挑战，响应 JavaScript 挑战页面。</li>
     */
    public $Action;

    /**
     * @var string 请求统计的匹配方式，当 Enabled 为 on 时，此字段必填。取值有：<li>http.request.xff_header_ip：客户端 IP（优先匹配 XFF 头部）；</li><li>http.request.ip：客户端 IP。</li> 
     */
    public $CountBy;

    /**
     * @var integer 此参数指定高频扫描防护的阈值，即在 CountingPeriod 所设置时间范围内命中「配置为拦截」的托管规则时的累计拦截次数，取值范围 1 ~ 4294967294，例如 100，当超过此统计值时，后续请求将触发 Action 所设置的处置动作。当 Enabled 为 on 时，此字段必填。
     */
    public $BlockThreshold;

    /**
     * @var string 此参数指定高频扫描防护所统计的时间窗口，即命中「配置为拦截」的托管规则的请求的统计时间窗口，取值 5 ~ 1800，单位仅支持秒（s），例如 5s。 当 Enabled 为 on 时，此字段必填。
     */
    public $CountingPeriod;

    /**
     * @var string 此参数指定高频扫描防护 Action 参数所设置处置动作的持续时长，取值范围 60 ~ 86400，单位仅支持秒（s），例如 60s。当 Enabled 为 on 时，此字段必填。
     */
    public $ActionDuration;

    /**
     * @param string $Enabled 高频扫描防护规则是否开启。取值有：<li>on：开启，高频扫描防护规则生效；</li><li>off：关闭，高频扫描防护规则不生效。</li>	
     * @param SecurityAction $Action 高频扫描防护的处置动作。 当 Enabled 为 on 时，此字段必填。SecurityAction 的 Name 取值支持：<li>Deny：拦截，响应拦截页面；</li><li>Monitor：观察，不处理请求记录安全事件到日志中；</li><li>JSChallenge：JavaScript 挑战，响应 JavaScript 挑战页面。</li>
     * @param string $CountBy 请求统计的匹配方式，当 Enabled 为 on 时，此字段必填。取值有：<li>http.request.xff_header_ip：客户端 IP（优先匹配 XFF 头部）；</li><li>http.request.ip：客户端 IP。</li> 
     * @param integer $BlockThreshold 此参数指定高频扫描防护的阈值，即在 CountingPeriod 所设置时间范围内命中「配置为拦截」的托管规则时的累计拦截次数，取值范围 1 ~ 4294967294，例如 100，当超过此统计值时，后续请求将触发 Action 所设置的处置动作。当 Enabled 为 on 时，此字段必填。
     * @param string $CountingPeriod 此参数指定高频扫描防护所统计的时间窗口，即命中「配置为拦截」的托管规则的请求的统计时间窗口，取值 5 ~ 1800，单位仅支持秒（s），例如 5s。 当 Enabled 为 on 时，此字段必填。
     * @param string $ActionDuration 此参数指定高频扫描防护 Action 参数所设置处置动作的持续时长，取值范围 60 ~ 86400，单位仅支持秒（s），例如 60s。当 Enabled 为 on 时，此字段必填。
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new SecurityAction();
            $this->Action->deserialize($param["Action"]);
        }

        if (array_key_exists("CountBy",$param) and $param["CountBy"] !== null) {
            $this->CountBy = $param["CountBy"];
        }

        if (array_key_exists("BlockThreshold",$param) and $param["BlockThreshold"] !== null) {
            $this->BlockThreshold = $param["BlockThreshold"];
        }

        if (array_key_exists("CountingPeriod",$param) and $param["CountingPeriod"] !== null) {
            $this->CountingPeriod = $param["CountingPeriod"];
        }

        if (array_key_exists("ActionDuration",$param) and $param["ActionDuration"] !== null) {
            $this->ActionDuration = $param["ActionDuration"];
        }
    }
}

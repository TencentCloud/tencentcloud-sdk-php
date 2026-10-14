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
 * 速率限制的具体配置。
 *
 * @method string getId() 获取<p>精准速率限制的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li><b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li><b>删除</b>已有规则：RateLimitingRules 参数中，Rules 列表中未包含的已有规则将被删除。</li></p>
 * @method void setId(string $Id) 设置<p>精准速率限制的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li><b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li><b>删除</b>已有规则：RateLimitingRules 参数中，Rules 列表中未包含的已有规则将被删除。</li></p>
 * @method string getName() 获取<p>精准速率限制的名称。</p>
 * @method void setName(string $Name) 设置<p>精准速率限制的名称。</p>
 * @method string getCondition() 获取<p>精准速率限制的具体内容，需符合表达式语法，详细规范参见<a href="https://cloud.tencent.com/document/product/1552/125343">产品文档</a>。</p>
 * @method void setCondition(string $Condition) 设置<p>精准速率限制的具体内容，需符合表达式语法，详细规范参见<a href="https://cloud.tencent.com/document/product/1552/125343">产品文档</a>。</p>
 * @method string getMode() 获取<p>限速方式。在统计时间窗口 CountingPeriod 内，对满足特征 CountBy 的请求，支持配置以下限速方式：<li>Block: 阻断访问源。当统计次数超过阈值 MaxRequestThreshold 时，在 ActionDuration 时长内，对满足特征的所有后续请求执行 Action 处置；</li><li>Throttle: 仅处置超额请求。当统计次数超过阈值 MaxRequestThreshold 时，仅对超过阈值的请求执行 Action 处置，窗口结束后停止处置。此时，ActionDuration 参数将被忽略。</li><br>默认值为 Block。</p>
 * @method void setMode(string $Mode) 设置<p>限速方式。在统计时间窗口 CountingPeriod 内，对满足特征 CountBy 的请求，支持配置以下限速方式：<li>Block: 阻断访问源。当统计次数超过阈值 MaxRequestThreshold 时，在 ActionDuration 时长内，对满足特征的所有后续请求执行 Action 处置；</li><li>Throttle: 仅处置超额请求。当统计次数超过阈值 MaxRequestThreshold 时，仅对超过阈值的请求执行 Action 处置，窗口结束后停止处置。此时，ActionDuration 参数将被忽略。</li><br>默认值为 Block。</p>
 * @method array getCountBy() 获取<p>速率阈值请求特征的匹配方式， 当 Enabled 为 on 时，此字段必填。<br><br>当条件有多个时，将组合多个条件共同进行统计计算，条件最多不可超过5条。取值有：<br><li><b>http.request.ip</b>：客户端 IP；</li><li><b>http.request.xff_header_ip</b>：客户端 IP（优先匹配 XFF 头部）；</li><li><b>http.request.uri.path</b>：请求的访问路径；</li><li><b>http.request.cookies[&#39;session&#39;]</b>：名称为 session 的 Cookie，其中 session 可替换为自己指定的参数；</li><li><b>http.request.headers[&#39;user-agent&#39;]</b>：名称为 user-agent 的 HTTP 头部，其中 user-agent 可替换为自己指定的参数；</li><li><b>http.request.ja3</b>：请求的 JA3 指纹；</li><li><b>http.request.ja4</b>：请求的 JA4 指纹；</li><li><b>http.request.uri.query[&#39;test&#39;]</b>：名称为 test 的 URL 查询参数，其中 test 可替换为自己指定的参数。</li></p>
 * @method void setCountBy(array $CountBy) 设置<p>速率阈值请求特征的匹配方式， 当 Enabled 为 on 时，此字段必填。<br><br>当条件有多个时，将组合多个条件共同进行统计计算，条件最多不可超过5条。取值有：<br><li><b>http.request.ip</b>：客户端 IP；</li><li><b>http.request.xff_header_ip</b>：客户端 IP（优先匹配 XFF 头部）；</li><li><b>http.request.uri.path</b>：请求的访问路径；</li><li><b>http.request.cookies[&#39;session&#39;]</b>：名称为 session 的 Cookie，其中 session 可替换为自己指定的参数；</li><li><b>http.request.headers[&#39;user-agent&#39;]</b>：名称为 user-agent 的 HTTP 头部，其中 user-agent 可替换为自己指定的参数；</li><li><b>http.request.ja3</b>：请求的 JA3 指纹；</li><li><b>http.request.ja4</b>：请求的 JA4 指纹；</li><li><b>http.request.uri.query[&#39;test&#39;]</b>：名称为 test 的 URL 查询参数，其中 test 可替换为自己指定的参数。</li></p>
 * @method integer getMaxRequestThreshold() 获取<p>精准速率限制在时间范围内的累计拦截次数，取值范围 1 ~ 100000。</p>
 * @method void setMaxRequestThreshold(integer $MaxRequestThreshold) 设置<p>精准速率限制在时间范围内的累计拦截次数，取值范围 1 ~ 100000。</p>
 * @method string getCountingPeriod() 获取<p>统计的时间窗口，取值有：<li>1s：1秒；</li><li>5s：5秒；</li><li>10s：10秒；</li><li>20s：20秒；</li><li>30s：30秒；</li><li>40s：40秒；</li><li>50s：50秒；</li><li>1m：1分钟；</li><li>2m：2分钟；</li><li>5m：5分钟；</li><li>10m：10分钟；</li><li>1h：1小时。</li></p>
 * @method void setCountingPeriod(string $CountingPeriod) 设置<p>统计的时间窗口，取值有：<li>1s：1秒；</li><li>5s：5秒；</li><li>10s：10秒；</li><li>20s：20秒；</li><li>30s：30秒；</li><li>40s：40秒；</li><li>50s：50秒；</li><li>1m：1分钟；</li><li>2m：2分钟；</li><li>5m：5分钟；</li><li>10m：10分钟；</li><li>1h：1小时。</li></p>
 * @method string getActionDuration() 获取<p>Action 动作的持续时长，单位仅支持：<li>s：秒，取值 1 ~ 120；</li><li>m：分钟，取值 1 ~ 120；</li><li>h：小时，取值 1 ~ 48；</li><li>d：天，取值 1 ~ 30。</li><br>当 Mode 为 Throttle 时，此参数将被忽略，不会生效。</p>
 * @method void setActionDuration(string $ActionDuration) 设置<p>Action 动作的持续时长，单位仅支持：<li>s：秒，取值 1 ~ 120；</li><li>m：分钟，取值 1 ~ 120；</li><li>h：小时，取值 1 ~ 48；</li><li>d：天，取值 1 ~ 30。</li><br>当 Mode 为 Throttle 时，此参数将被忽略，不会生效。</p>
 * @method SecurityAction getAction() 获取<p>精准速率限制的处置方式。SecurityAction.Name 取值范围如下：</p><ul><li>Allow：放行，其中 AllowActionParameters 支持 MinDelayTime 和 MaxDelayTime 配置；</li><li>Deny：拦截，其中 DenyActionParameters 中支持 ReturnCustomPage 和 Stall 配置；</li><li>Monitor：观察；</li><li>Challenge：挑战，其中 ChallengeActionParameters.ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Redirect：重定向至URL。</li></ul>
 * @method void setAction(SecurityAction $Action) 设置<p>精准速率限制的处置方式。SecurityAction.Name 取值范围如下：</p><ul><li>Allow：放行，其中 AllowActionParameters 支持 MinDelayTime 和 MaxDelayTime 配置；</li><li>Deny：拦截，其中 DenyActionParameters 中支持 ReturnCustomPage 和 Stall 配置；</li><li>Monitor：观察；</li><li>Challenge：挑战，其中 ChallengeActionParameters.ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Redirect：重定向至URL。</li></ul>
 * @method integer getPriority() 获取<p>精准速率限制的优先级，范围是 0 ~ 100，默认为 0。</p>
 * @method void setPriority(integer $Priority) 设置<p>精准速率限制的优先级，范围是 0 ~ 100，默认为 0。</p>
 * @method string getEnabled() 获取<p>精准速率限制规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li></p>
 * @method void setEnabled(string $Enabled) 设置<p>精准速率限制规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li></p>
 */
class RateLimitingRule extends AbstractModel
{
    /**
     * @var string <p>精准速率限制的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li><b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li><b>删除</b>已有规则：RateLimitingRules 参数中，Rules 列表中未包含的已有规则将被删除。</li></p>
     */
    public $Id;

    /**
     * @var string <p>精准速率限制的名称。</p>
     */
    public $Name;

    /**
     * @var string <p>精准速率限制的具体内容，需符合表达式语法，详细规范参见<a href="https://cloud.tencent.com/document/product/1552/125343">产品文档</a>。</p>
     */
    public $Condition;

    /**
     * @var string <p>限速方式。在统计时间窗口 CountingPeriod 内，对满足特征 CountBy 的请求，支持配置以下限速方式：<li>Block: 阻断访问源。当统计次数超过阈值 MaxRequestThreshold 时，在 ActionDuration 时长内，对满足特征的所有后续请求执行 Action 处置；</li><li>Throttle: 仅处置超额请求。当统计次数超过阈值 MaxRequestThreshold 时，仅对超过阈值的请求执行 Action 处置，窗口结束后停止处置。此时，ActionDuration 参数将被忽略。</li><br>默认值为 Block。</p>
     */
    public $Mode;

    /**
     * @var array <p>速率阈值请求特征的匹配方式， 当 Enabled 为 on 时，此字段必填。<br><br>当条件有多个时，将组合多个条件共同进行统计计算，条件最多不可超过5条。取值有：<br><li><b>http.request.ip</b>：客户端 IP；</li><li><b>http.request.xff_header_ip</b>：客户端 IP（优先匹配 XFF 头部）；</li><li><b>http.request.uri.path</b>：请求的访问路径；</li><li><b>http.request.cookies[&#39;session&#39;]</b>：名称为 session 的 Cookie，其中 session 可替换为自己指定的参数；</li><li><b>http.request.headers[&#39;user-agent&#39;]</b>：名称为 user-agent 的 HTTP 头部，其中 user-agent 可替换为自己指定的参数；</li><li><b>http.request.ja3</b>：请求的 JA3 指纹；</li><li><b>http.request.ja4</b>：请求的 JA4 指纹；</li><li><b>http.request.uri.query[&#39;test&#39;]</b>：名称为 test 的 URL 查询参数，其中 test 可替换为自己指定的参数。</li></p>
     */
    public $CountBy;

    /**
     * @var integer <p>精准速率限制在时间范围内的累计拦截次数，取值范围 1 ~ 100000。</p>
     */
    public $MaxRequestThreshold;

    /**
     * @var string <p>统计的时间窗口，取值有：<li>1s：1秒；</li><li>5s：5秒；</li><li>10s：10秒；</li><li>20s：20秒；</li><li>30s：30秒；</li><li>40s：40秒；</li><li>50s：50秒；</li><li>1m：1分钟；</li><li>2m：2分钟；</li><li>5m：5分钟；</li><li>10m：10分钟；</li><li>1h：1小时。</li></p>
     */
    public $CountingPeriod;

    /**
     * @var string <p>Action 动作的持续时长，单位仅支持：<li>s：秒，取值 1 ~ 120；</li><li>m：分钟，取值 1 ~ 120；</li><li>h：小时，取值 1 ~ 48；</li><li>d：天，取值 1 ~ 30。</li><br>当 Mode 为 Throttle 时，此参数将被忽略，不会生效。</p>
     */
    public $ActionDuration;

    /**
     * @var SecurityAction <p>精准速率限制的处置方式。SecurityAction.Name 取值范围如下：</p><ul><li>Allow：放行，其中 AllowActionParameters 支持 MinDelayTime 和 MaxDelayTime 配置；</li><li>Deny：拦截，其中 DenyActionParameters 中支持 ReturnCustomPage 和 Stall 配置；</li><li>Monitor：观察；</li><li>Challenge：挑战，其中 ChallengeActionParameters.ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Redirect：重定向至URL。</li></ul>
     */
    public $Action;

    /**
     * @var integer <p>精准速率限制的优先级，范围是 0 ~ 100，默认为 0。</p>
     */
    public $Priority;

    /**
     * @var string <p>精准速率限制规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li></p>
     */
    public $Enabled;

    /**
     * @param string $Id <p>精准速率限制的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li><b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li><b>删除</b>已有规则：RateLimitingRules 参数中，Rules 列表中未包含的已有规则将被删除。</li></p>
     * @param string $Name <p>精准速率限制的名称。</p>
     * @param string $Condition <p>精准速率限制的具体内容，需符合表达式语法，详细规范参见<a href="https://cloud.tencent.com/document/product/1552/125343">产品文档</a>。</p>
     * @param string $Mode <p>限速方式。在统计时间窗口 CountingPeriod 内，对满足特征 CountBy 的请求，支持配置以下限速方式：<li>Block: 阻断访问源。当统计次数超过阈值 MaxRequestThreshold 时，在 ActionDuration 时长内，对满足特征的所有后续请求执行 Action 处置；</li><li>Throttle: 仅处置超额请求。当统计次数超过阈值 MaxRequestThreshold 时，仅对超过阈值的请求执行 Action 处置，窗口结束后停止处置。此时，ActionDuration 参数将被忽略。</li><br>默认值为 Block。</p>
     * @param array $CountBy <p>速率阈值请求特征的匹配方式， 当 Enabled 为 on 时，此字段必填。<br><br>当条件有多个时，将组合多个条件共同进行统计计算，条件最多不可超过5条。取值有：<br><li><b>http.request.ip</b>：客户端 IP；</li><li><b>http.request.xff_header_ip</b>：客户端 IP（优先匹配 XFF 头部）；</li><li><b>http.request.uri.path</b>：请求的访问路径；</li><li><b>http.request.cookies[&#39;session&#39;]</b>：名称为 session 的 Cookie，其中 session 可替换为自己指定的参数；</li><li><b>http.request.headers[&#39;user-agent&#39;]</b>：名称为 user-agent 的 HTTP 头部，其中 user-agent 可替换为自己指定的参数；</li><li><b>http.request.ja3</b>：请求的 JA3 指纹；</li><li><b>http.request.ja4</b>：请求的 JA4 指纹；</li><li><b>http.request.uri.query[&#39;test&#39;]</b>：名称为 test 的 URL 查询参数，其中 test 可替换为自己指定的参数。</li></p>
     * @param integer $MaxRequestThreshold <p>精准速率限制在时间范围内的累计拦截次数，取值范围 1 ~ 100000。</p>
     * @param string $CountingPeriod <p>统计的时间窗口，取值有：<li>1s：1秒；</li><li>5s：5秒；</li><li>10s：10秒；</li><li>20s：20秒；</li><li>30s：30秒；</li><li>40s：40秒；</li><li>50s：50秒；</li><li>1m：1分钟；</li><li>2m：2分钟；</li><li>5m：5分钟；</li><li>10m：10分钟；</li><li>1h：1小时。</li></p>
     * @param string $ActionDuration <p>Action 动作的持续时长，单位仅支持：<li>s：秒，取值 1 ~ 120；</li><li>m：分钟，取值 1 ~ 120；</li><li>h：小时，取值 1 ~ 48；</li><li>d：天，取值 1 ~ 30。</li><br>当 Mode 为 Throttle 时，此参数将被忽略，不会生效。</p>
     * @param SecurityAction $Action <p>精准速率限制的处置方式。SecurityAction.Name 取值范围如下：</p><ul><li>Allow：放行，其中 AllowActionParameters 支持 MinDelayTime 和 MaxDelayTime 配置；</li><li>Deny：拦截，其中 DenyActionParameters 中支持 ReturnCustomPage 和 Stall 配置；</li><li>Monitor：观察；</li><li>Challenge：挑战，其中 ChallengeActionParameters.ChallengeOption 支持 JSChallenge 和 ManagedChallenge；</li><li>Redirect：重定向至URL。</li></ul>
     * @param integer $Priority <p>精准速率限制的优先级，范围是 0 ~ 100，默认为 0。</p>
     * @param string $Enabled <p>精准速率限制规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li></p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("CountBy",$param) and $param["CountBy"] !== null) {
            $this->CountBy = $param["CountBy"];
        }

        if (array_key_exists("MaxRequestThreshold",$param) and $param["MaxRequestThreshold"] !== null) {
            $this->MaxRequestThreshold = $param["MaxRequestThreshold"];
        }

        if (array_key_exists("CountingPeriod",$param) and $param["CountingPeriod"] !== null) {
            $this->CountingPeriod = $param["CountingPeriod"];
        }

        if (array_key_exists("ActionDuration",$param) and $param["ActionDuration"] !== null) {
            $this->ActionDuration = $param["ActionDuration"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new SecurityAction();
            $this->Action->deserialize($param["Action"]);
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}

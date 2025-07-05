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
 * @method string getId() 获取精准速率限制的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li><b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li><b>删除</b>已有规则：RateLimitingRules 参数中，Rules 列表中未包含的已有规则将被删除。</li>
 * @method void setId(string $Id) 设置精准速率限制的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li><b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li><b>删除</b>已有规则：RateLimitingRules 参数中，Rules 列表中未包含的已有规则将被删除。</li>
 * @method string getName() 获取精准速率限制的名称。
 * @method void setName(string $Name) 设置精准速率限制的名称。
 * @method string getCondition() 获取精准速率限制的具体内容，需符合表达式语法，详细规范参见产品文档。
 * @method void setCondition(string $Condition) 设置精准速率限制的具体内容，需符合表达式语法，详细规范参见产品文档。
 * @method array getCountBy() 获取速率阈值请求特征的匹配方式， 当 Enabled 为 on 时，此字段必填。<br /><br />当条件有多个时，将组合多个条件共同进行统计计算，条件最多不可超过5条。取值有：<br/><li><b>http.request.ip</b>：客户端 IP；</li><li><b>http.request.xff_header_ip</b>：客户端 IP（优先匹配 XFF 头部）；</li><li><b>http.request.uri.path</b>：请求的访问路径；</li><li><b>http.request.cookies['session']</b>：名称为session的Cookie，其中session可替换为自己指定的参数；</li><li><b>http.request.headers['user-agent']</b>：名称为user-agent的HTTP头部，其中user-agent可替换为自己指定的参数；</li><li><b>http.request.ja3</b>：请求的JA3指纹；</li><li><b>http.request.uri.query['test']</b>：名称为test的URL查询参数，其中test可替换为自己指定的参数。</li> 
 * @method void setCountBy(array $CountBy) 设置速率阈值请求特征的匹配方式， 当 Enabled 为 on 时，此字段必填。<br /><br />当条件有多个时，将组合多个条件共同进行统计计算，条件最多不可超过5条。取值有：<br/><li><b>http.request.ip</b>：客户端 IP；</li><li><b>http.request.xff_header_ip</b>：客户端 IP（优先匹配 XFF 头部）；</li><li><b>http.request.uri.path</b>：请求的访问路径；</li><li><b>http.request.cookies['session']</b>：名称为session的Cookie，其中session可替换为自己指定的参数；</li><li><b>http.request.headers['user-agent']</b>：名称为user-agent的HTTP头部，其中user-agent可替换为自己指定的参数；</li><li><b>http.request.ja3</b>：请求的JA3指纹；</li><li><b>http.request.uri.query['test']</b>：名称为test的URL查询参数，其中test可替换为自己指定的参数。</li> 
 * @method integer getMaxRequestThreshold() 获取精准速率限制在时间范围内的累计拦截次数，取值范围 1 ~ 100000。
 * @method void setMaxRequestThreshold(integer $MaxRequestThreshold) 设置精准速率限制在时间范围内的累计拦截次数，取值范围 1 ~ 100000。
 * @method string getCountingPeriod() 获取统计的时间窗口，取值有：<li>1s：1秒；</li><li>5s：5秒；</li><li>10s：10秒；</li><li>20s：20秒；</li><li>30s：30秒；</li><li>40s：40秒；</li><li>50s：50秒；</li><li>1m：1分钟；</li><li>2m：2分钟；</li><li>5m：5分钟；</li><li>10m：10分钟；</li><li>1h：1小时。</li> 
 * @method void setCountingPeriod(string $CountingPeriod) 设置统计的时间窗口，取值有：<li>1s：1秒；</li><li>5s：5秒；</li><li>10s：10秒；</li><li>20s：20秒；</li><li>30s：30秒；</li><li>40s：40秒；</li><li>50s：50秒；</li><li>1m：1分钟；</li><li>2m：2分钟；</li><li>5m：5分钟；</li><li>10m：10分钟；</li><li>1h：1小时。</li> 
 * @method string getActionDuration() 获取Action 动作的持续时长，单位仅支持：<li>s：秒，取值 1 ~ 120；</li><li>m：分钟，取值 1 ~ 120；</li><li>h：小时，取值 1 ~ 48；</li><li>d：天，取值 1 ~ 30。</li>
 * @method void setActionDuration(string $ActionDuration) 设置Action 动作的持续时长，单位仅支持：<li>s：秒，取值 1 ~ 120；</li><li>m：分钟，取值 1 ~ 120；</li><li>h：小时，取值 1 ~ 48；</li><li>d：天，取值 1 ~ 30。</li>
 * @method SecurityAction getAction() 获取精准速率限制的处置方式。取值有：<li>Monitor：观察；</li><li>Deny：拦截，其中DenyActionParameters.Name支持Deny和ReturnCustomPage；</li><li>Challenge：挑战，其中ChallengeActionParameters.Name支持JSChallenge和ManagedChallenge；</li><li>Redirect：重定向至URL；</li>
 * @method void setAction(SecurityAction $Action) 设置精准速率限制的处置方式。取值有：<li>Monitor：观察；</li><li>Deny：拦截，其中DenyActionParameters.Name支持Deny和ReturnCustomPage；</li><li>Challenge：挑战，其中ChallengeActionParameters.Name支持JSChallenge和ManagedChallenge；</li><li>Redirect：重定向至URL；</li>
 * @method integer getPriority() 获取精准速率限制的优先级，范围是 0 ~ 100，默认为 0。
 * @method void setPriority(integer $Priority) 设置精准速率限制的优先级，范围是 0 ~ 100，默认为 0。
 * @method string getEnabled() 获取精准速率限制规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
 * @method void setEnabled(string $Enabled) 设置精准速率限制规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
 */
class RateLimitingRule extends AbstractModel
{
    /**
     * @var string 精准速率限制的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li><b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li><b>删除</b>已有规则：RateLimitingRules 参数中，Rules 列表中未包含的已有规则将被删除。</li>
     */
    public $Id;

    /**
     * @var string 精准速率限制的名称。
     */
    public $Name;

    /**
     * @var string 精准速率限制的具体内容，需符合表达式语法，详细规范参见产品文档。
     */
    public $Condition;

    /**
     * @var array 速率阈值请求特征的匹配方式， 当 Enabled 为 on 时，此字段必填。<br /><br />当条件有多个时，将组合多个条件共同进行统计计算，条件最多不可超过5条。取值有：<br/><li><b>http.request.ip</b>：客户端 IP；</li><li><b>http.request.xff_header_ip</b>：客户端 IP（优先匹配 XFF 头部）；</li><li><b>http.request.uri.path</b>：请求的访问路径；</li><li><b>http.request.cookies['session']</b>：名称为session的Cookie，其中session可替换为自己指定的参数；</li><li><b>http.request.headers['user-agent']</b>：名称为user-agent的HTTP头部，其中user-agent可替换为自己指定的参数；</li><li><b>http.request.ja3</b>：请求的JA3指纹；</li><li><b>http.request.uri.query['test']</b>：名称为test的URL查询参数，其中test可替换为自己指定的参数。</li> 
     */
    public $CountBy;

    /**
     * @var integer 精准速率限制在时间范围内的累计拦截次数，取值范围 1 ~ 100000。
     */
    public $MaxRequestThreshold;

    /**
     * @var string 统计的时间窗口，取值有：<li>1s：1秒；</li><li>5s：5秒；</li><li>10s：10秒；</li><li>20s：20秒；</li><li>30s：30秒；</li><li>40s：40秒；</li><li>50s：50秒；</li><li>1m：1分钟；</li><li>2m：2分钟；</li><li>5m：5分钟；</li><li>10m：10分钟；</li><li>1h：1小时。</li> 
     */
    public $CountingPeriod;

    /**
     * @var string Action 动作的持续时长，单位仅支持：<li>s：秒，取值 1 ~ 120；</li><li>m：分钟，取值 1 ~ 120；</li><li>h：小时，取值 1 ~ 48；</li><li>d：天，取值 1 ~ 30。</li>
     */
    public $ActionDuration;

    /**
     * @var SecurityAction 精准速率限制的处置方式。取值有：<li>Monitor：观察；</li><li>Deny：拦截，其中DenyActionParameters.Name支持Deny和ReturnCustomPage；</li><li>Challenge：挑战，其中ChallengeActionParameters.Name支持JSChallenge和ManagedChallenge；</li><li>Redirect：重定向至URL；</li>
     */
    public $Action;

    /**
     * @var integer 精准速率限制的优先级，范围是 0 ~ 100，默认为 0。
     */
    public $Priority;

    /**
     * @var string 精准速率限制规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
     */
    public $Enabled;

    /**
     * @param string $Id 精准速率限制的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li><b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li><b>删除</b>已有规则：RateLimitingRules 参数中，Rules 列表中未包含的已有规则将被删除。</li>
     * @param string $Name 精准速率限制的名称。
     * @param string $Condition 精准速率限制的具体内容，需符合表达式语法，详细规范参见产品文档。
     * @param array $CountBy 速率阈值请求特征的匹配方式， 当 Enabled 为 on 时，此字段必填。<br /><br />当条件有多个时，将组合多个条件共同进行统计计算，条件最多不可超过5条。取值有：<br/><li><b>http.request.ip</b>：客户端 IP；</li><li><b>http.request.xff_header_ip</b>：客户端 IP（优先匹配 XFF 头部）；</li><li><b>http.request.uri.path</b>：请求的访问路径；</li><li><b>http.request.cookies['session']</b>：名称为session的Cookie，其中session可替换为自己指定的参数；</li><li><b>http.request.headers['user-agent']</b>：名称为user-agent的HTTP头部，其中user-agent可替换为自己指定的参数；</li><li><b>http.request.ja3</b>：请求的JA3指纹；</li><li><b>http.request.uri.query['test']</b>：名称为test的URL查询参数，其中test可替换为自己指定的参数。</li> 
     * @param integer $MaxRequestThreshold 精准速率限制在时间范围内的累计拦截次数，取值范围 1 ~ 100000。
     * @param string $CountingPeriod 统计的时间窗口，取值有：<li>1s：1秒；</li><li>5s：5秒；</li><li>10s：10秒；</li><li>20s：20秒；</li><li>30s：30秒；</li><li>40s：40秒；</li><li>50s：50秒；</li><li>1m：1分钟；</li><li>2m：2分钟；</li><li>5m：5分钟；</li><li>10m：10分钟；</li><li>1h：1小时。</li> 
     * @param string $ActionDuration Action 动作的持续时长，单位仅支持：<li>s：秒，取值 1 ~ 120；</li><li>m：分钟，取值 1 ~ 120；</li><li>h：小时，取值 1 ~ 48；</li><li>d：天，取值 1 ~ 30。</li>
     * @param SecurityAction $Action 精准速率限制的处置方式。取值有：<li>Monitor：观察；</li><li>Deny：拦截，其中DenyActionParameters.Name支持Deny和ReturnCustomPage；</li><li>Challenge：挑战，其中ChallengeActionParameters.Name支持JSChallenge和ManagedChallenge；</li><li>Redirect：重定向至URL；</li>
     * @param integer $Priority 精准速率限制的优先级，范围是 0 ~ 100，默认为 0。
     * @param string $Enabled 精准速率限制规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
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

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
 * 负载均衡实例健康检查策略。
 *
 * @method string getType() 获取<p>健康检查策略，取值有：</p><li>HTTP；</li><li>HTTPS；</li><li>TCP；</li><li>UDP；</li><li>ICMP Ping；</li><li>NoCheck。</li>注意：NoCheck 表示不启用健康检查策略。
 * @method void setType(string $Type) 设置<p>健康检查策略，取值有：</p><li>HTTP；</li><li>HTTPS；</li><li>TCP；</li><li>UDP；</li><li>ICMP Ping；</li><li>NoCheck。</li>注意：NoCheck 表示不启用健康检查策略。
 * @method integer getPort() 获取<p>检查端口。当 Type=HTTP 或 Type=HTTPS 或 Type=TCP 或 Type=UDP 时为必填。</p>
 * @method void setPort(integer $Port) 设置<p>检查端口。当 Type=HTTP 或 Type=HTTPS 或 Type=TCP 或 Type=UDP 时为必填。</p>
 * @method integer getInterval() 获取<p>检查频率，表示多久发起一次健康检查任务，单位为秒。可配置 10-600 秒。</p>
 * @method void setInterval(integer $Interval) 设置<p>检查频率，表示多久发起一次健康检查任务，单位为秒。可配置 10-600 秒。</p>
 * @method integer getTimeout() 获取<p>每一次健康检查的超时时间，若健康检查消耗时间大于此值，则检查结果判定为“不健康”， 单位为秒，默认值为 5s，取值必须小于 Interval。</p>
 * @method void setTimeout(integer $Timeout) 设置<p>每一次健康检查的超时时间，若健康检查消耗时间大于此值，则检查结果判定为“不健康”， 单位为秒，默认值为 5s，取值必须小于 Interval。</p>
 * @method integer getHealthThreshold() 获取<p>健康阈值，表示连续几次健康检查结果为&quot;健康&quot;，则判断源站为&quot;健康&quot;，单位为次，默认 3 次，最小取值 1 次。</p>
 * @method void setHealthThreshold(integer $HealthThreshold) 设置<p>健康阈值，表示连续几次健康检查结果为&quot;健康&quot;，则判断源站为&quot;健康&quot;，单位为次，默认 3 次，最小取值 1 次。</p>
 * @method integer getCriticalThreshold() 获取<p>不健康阈值，表示连续几次健康检查结果为&quot;不健康&quot;，则判断源站为&quot;不健康&quot;，单位为次，默认 2 次。</p>
 * @method void setCriticalThreshold(integer $CriticalThreshold) 设置<p>不健康阈值，表示连续几次健康检查结果为&quot;不健康&quot;，则判断源站为&quot;不健康&quot;，单位为次，默认 2 次。</p>
 * @method string getPath() 获取<p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测路径，需要填写完整的 host/path，不包含协议部分，例如：www.example.com/test。</p>
 * @method void setPath(string $Path) 设置<p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测路径，需要填写完整的 host/path，不包含协议部分，例如：www.example.com/test。</p>
 * @method string getHostHeaderPolicy() 获取<p>探测请求 Host Header 策略，仅当 Type=HTTP 或 Type=HTTPS ，且实例类型为 HTTP 专用型（V2）时生效。取值有：</p><li>FollowCheckURL：遵循探测 URL 指定的 Host，即 HealthChecker.Path 字段中的 Host 部分将作为探测的 Host 地址；</li><li>FollowOriginGroup：遵循源站组配置的回源 Host Header，即探测时使用本次探测源站所在源站组的 OriginGroup.HostHeader 字段值作为探测 Host 地址，若该源站组未配置 HostHeader，则使用 HealthChecker.Path 字段中的 Host 部分作为探测的 Host 地址；</li><li>FollowOrigin：遵循源站地址，即探测时使用本次探测源站所在源站组中对应源站记录的 OriginGroup.Records[N].Record 字段值（即源站本身地址）作为探测的 Host 地址。</li>默认为 FollowCheckURL。
 * @method void setHostHeaderPolicy(string $HostHeaderPolicy) 设置<p>探测请求 Host Header 策略，仅当 Type=HTTP 或 Type=HTTPS ，且实例类型为 HTTP 专用型（V2）时生效。取值有：</p><li>FollowCheckURL：遵循探测 URL 指定的 Host，即 HealthChecker.Path 字段中的 Host 部分将作为探测的 Host 地址；</li><li>FollowOriginGroup：遵循源站组配置的回源 Host Header，即探测时使用本次探测源站所在源站组的 OriginGroup.HostHeader 字段值作为探测 Host 地址，若该源站组未配置 HostHeader，则使用 HealthChecker.Path 字段中的 Host 部分作为探测的 Host 地址；</li><li>FollowOrigin：遵循源站地址，即探测时使用本次探测源站所在源站组中对应源站记录的 OriginGroup.Records[N].Record 字段值（即源站本身地址）作为探测的 Host 地址。</li>默认为 FollowCheckURL。
 * @method string getMethod() 获取<p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示请求方法，取值有：</p><li>GET；</li><li>HEAD。</li>
 * @method void setMethod(string $Method) 设置<p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示请求方法，取值有：</p><li>GET；</li><li>HEAD。</li>
 * @method array getExpectedCodes() 获取<p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测节点向源站发起健康检查时，响应哪些状态码可用于认定探测结果为健康。</p>
 * @method void setExpectedCodes(array $ExpectedCodes) 设置<p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测节点向源站发起健康检查时，响应哪些状态码可用于认定探测结果为健康。</p>
 * @method array getHeaders() 获取<p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测请求携带的自定义  HTTP 请求头，至多可配置 10 个。</p>
 * @method void setHeaders(array $Headers) 设置<p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测请求携带的自定义  HTTP 请求头，至多可配置 10 个。</p>
 * @method string getFollowRedirect() 获取<p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示是否启用遵循 301/302 重定向。启用后，301/302 默认为&quot;健康&quot;的状态码，默认跳转 3 次。</p>
 * @method void setFollowRedirect(string $FollowRedirect) 设置<p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示是否启用遵循 301/302 重定向。启用后，301/302 默认为&quot;健康&quot;的状态码，默认跳转 3 次。</p>
 * @method string getSendContext() 获取<p>该参数仅当 Type=UDP 时有效，表示健康检查发送的内容。只允许 ASCII 可见字符，最大长度限制 500 个字符。</p>
 * @method void setSendContext(string $SendContext) 设置<p>该参数仅当 Type=UDP 时有效，表示健康检查发送的内容。只允许 ASCII 可见字符，最大长度限制 500 个字符。</p>
 * @method string getRecvContext() 获取<p>该参数仅当 Type=UDP 时有效，表示健康检查期望源站返回结果。只允许 ASCII 可见字符，最大长度限制 500 个字符。</p>
 * @method void setRecvContext(string $RecvContext) 设置<p>该参数仅当 Type=UDP 时有效，表示健康检查期望源站返回结果。只允许 ASCII 可见字符，最大长度限制 500 个字符。</p>
 * @method string getProbeCluster() 获取<p>健康检查探测集群。指定本负载均衡实例发起健康探测的集群区域范围，探测集群地区分布详见<a href="https://cloud.tencent.com/document/product/1552/104228">健康检查策略介绍</a>，仅 HTTP 专用型（V2）版本负载均衡实例支持设置。取值有：</p><li>global：由全球所有区域的探测集群发起探测，包括中国大陆区域以及非中国大陆区域，各个区域的集群独立维护各自的探测结果；</li><li>mainland_china：仅由中国大陆区域的探测集群发起探测，当前中国大陆区域共用一个探测集群，探测结果由中国大陆区域的探测集群维护，其他区域跟随中国大陆区域的集群的探测结果；</li><li>overseas：仅由非中国大陆区域的探测集群发起探测，当前非中国大陆区域包含多个地区的探测集群，探测结果由各个地区的探测集群独立维护，中国大陆区域的探测结果由所有其他地区的探测集群的探测结果汇总生成。</li>默认为 global。
 * @method void setProbeCluster(string $ProbeCluster) 设置<p>健康检查探测集群。指定本负载均衡实例发起健康探测的集群区域范围，探测集群地区分布详见<a href="https://cloud.tencent.com/document/product/1552/104228">健康检查策略介绍</a>，仅 HTTP 专用型（V2）版本负载均衡实例支持设置。取值有：</p><li>global：由全球所有区域的探测集群发起探测，包括中国大陆区域以及非中国大陆区域，各个区域的集群独立维护各自的探测结果；</li><li>mainland_china：仅由中国大陆区域的探测集群发起探测，当前中国大陆区域共用一个探测集群，探测结果由中国大陆区域的探测集群维护，其他区域跟随中国大陆区域的集群的探测结果；</li><li>overseas：仅由非中国大陆区域的探测集群发起探测，当前非中国大陆区域包含多个地区的探测集群，探测结果由各个地区的探测集群独立维护，中国大陆区域的探测结果由所有其他地区的探测集群的探测结果汇总生成。</li>默认为 global。
 */
class HealthChecker extends AbstractModel
{
    /**
     * @var string <p>健康检查策略，取值有：</p><li>HTTP；</li><li>HTTPS；</li><li>TCP；</li><li>UDP；</li><li>ICMP Ping；</li><li>NoCheck。</li>注意：NoCheck 表示不启用健康检查策略。
     */
    public $Type;

    /**
     * @var integer <p>检查端口。当 Type=HTTP 或 Type=HTTPS 或 Type=TCP 或 Type=UDP 时为必填。</p>
     */
    public $Port;

    /**
     * @var integer <p>检查频率，表示多久发起一次健康检查任务，单位为秒。可配置 10-600 秒。</p>
     */
    public $Interval;

    /**
     * @var integer <p>每一次健康检查的超时时间，若健康检查消耗时间大于此值，则检查结果判定为“不健康”， 单位为秒，默认值为 5s，取值必须小于 Interval。</p>
     */
    public $Timeout;

    /**
     * @var integer <p>健康阈值，表示连续几次健康检查结果为&quot;健康&quot;，则判断源站为&quot;健康&quot;，单位为次，默认 3 次，最小取值 1 次。</p>
     */
    public $HealthThreshold;

    /**
     * @var integer <p>不健康阈值，表示连续几次健康检查结果为&quot;不健康&quot;，则判断源站为&quot;不健康&quot;，单位为次，默认 2 次。</p>
     */
    public $CriticalThreshold;

    /**
     * @var string <p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测路径，需要填写完整的 host/path，不包含协议部分，例如：www.example.com/test。</p>
     */
    public $Path;

    /**
     * @var string <p>探测请求 Host Header 策略，仅当 Type=HTTP 或 Type=HTTPS ，且实例类型为 HTTP 专用型（V2）时生效。取值有：</p><li>FollowCheckURL：遵循探测 URL 指定的 Host，即 HealthChecker.Path 字段中的 Host 部分将作为探测的 Host 地址；</li><li>FollowOriginGroup：遵循源站组配置的回源 Host Header，即探测时使用本次探测源站所在源站组的 OriginGroup.HostHeader 字段值作为探测 Host 地址，若该源站组未配置 HostHeader，则使用 HealthChecker.Path 字段中的 Host 部分作为探测的 Host 地址；</li><li>FollowOrigin：遵循源站地址，即探测时使用本次探测源站所在源站组中对应源站记录的 OriginGroup.Records[N].Record 字段值（即源站本身地址）作为探测的 Host 地址。</li>默认为 FollowCheckURL。
     */
    public $HostHeaderPolicy;

    /**
     * @var string <p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示请求方法，取值有：</p><li>GET；</li><li>HEAD。</li>
     */
    public $Method;

    /**
     * @var array <p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测节点向源站发起健康检查时，响应哪些状态码可用于认定探测结果为健康。</p>
     */
    public $ExpectedCodes;

    /**
     * @var array <p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测请求携带的自定义  HTTP 请求头，至多可配置 10 个。</p>
     */
    public $Headers;

    /**
     * @var string <p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示是否启用遵循 301/302 重定向。启用后，301/302 默认为&quot;健康&quot;的状态码，默认跳转 3 次。</p>
     */
    public $FollowRedirect;

    /**
     * @var string <p>该参数仅当 Type=UDP 时有效，表示健康检查发送的内容。只允许 ASCII 可见字符，最大长度限制 500 个字符。</p>
     */
    public $SendContext;

    /**
     * @var string <p>该参数仅当 Type=UDP 时有效，表示健康检查期望源站返回结果。只允许 ASCII 可见字符，最大长度限制 500 个字符。</p>
     */
    public $RecvContext;

    /**
     * @var string <p>健康检查探测集群。指定本负载均衡实例发起健康探测的集群区域范围，探测集群地区分布详见<a href="https://cloud.tencent.com/document/product/1552/104228">健康检查策略介绍</a>，仅 HTTP 专用型（V2）版本负载均衡实例支持设置。取值有：</p><li>global：由全球所有区域的探测集群发起探测，包括中国大陆区域以及非中国大陆区域，各个区域的集群独立维护各自的探测结果；</li><li>mainland_china：仅由中国大陆区域的探测集群发起探测，当前中国大陆区域共用一个探测集群，探测结果由中国大陆区域的探测集群维护，其他区域跟随中国大陆区域的集群的探测结果；</li><li>overseas：仅由非中国大陆区域的探测集群发起探测，当前非中国大陆区域包含多个地区的探测集群，探测结果由各个地区的探测集群独立维护，中国大陆区域的探测结果由所有其他地区的探测集群的探测结果汇总生成。</li>默认为 global。
     */
    public $ProbeCluster;

    /**
     * @param string $Type <p>健康检查策略，取值有：</p><li>HTTP；</li><li>HTTPS；</li><li>TCP；</li><li>UDP；</li><li>ICMP Ping；</li><li>NoCheck。</li>注意：NoCheck 表示不启用健康检查策略。
     * @param integer $Port <p>检查端口。当 Type=HTTP 或 Type=HTTPS 或 Type=TCP 或 Type=UDP 时为必填。</p>
     * @param integer $Interval <p>检查频率，表示多久发起一次健康检查任务，单位为秒。可配置 10-600 秒。</p>
     * @param integer $Timeout <p>每一次健康检查的超时时间，若健康检查消耗时间大于此值，则检查结果判定为“不健康”， 单位为秒，默认值为 5s，取值必须小于 Interval。</p>
     * @param integer $HealthThreshold <p>健康阈值，表示连续几次健康检查结果为&quot;健康&quot;，则判断源站为&quot;健康&quot;，单位为次，默认 3 次，最小取值 1 次。</p>
     * @param integer $CriticalThreshold <p>不健康阈值，表示连续几次健康检查结果为&quot;不健康&quot;，则判断源站为&quot;不健康&quot;，单位为次，默认 2 次。</p>
     * @param string $Path <p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测路径，需要填写完整的 host/path，不包含协议部分，例如：www.example.com/test。</p>
     * @param string $HostHeaderPolicy <p>探测请求 Host Header 策略，仅当 Type=HTTP 或 Type=HTTPS ，且实例类型为 HTTP 专用型（V2）时生效。取值有：</p><li>FollowCheckURL：遵循探测 URL 指定的 Host，即 HealthChecker.Path 字段中的 Host 部分将作为探测的 Host 地址；</li><li>FollowOriginGroup：遵循源站组配置的回源 Host Header，即探测时使用本次探测源站所在源站组的 OriginGroup.HostHeader 字段值作为探测 Host 地址，若该源站组未配置 HostHeader，则使用 HealthChecker.Path 字段中的 Host 部分作为探测的 Host 地址；</li><li>FollowOrigin：遵循源站地址，即探测时使用本次探测源站所在源站组中对应源站记录的 OriginGroup.Records[N].Record 字段值（即源站本身地址）作为探测的 Host 地址。</li>默认为 FollowCheckURL。
     * @param string $Method <p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示请求方法，取值有：</p><li>GET；</li><li>HEAD。</li>
     * @param array $ExpectedCodes <p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测节点向源站发起健康检查时，响应哪些状态码可用于认定探测结果为健康。</p>
     * @param array $Headers <p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测请求携带的自定义  HTTP 请求头，至多可配置 10 个。</p>
     * @param string $FollowRedirect <p>该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示是否启用遵循 301/302 重定向。启用后，301/302 默认为&quot;健康&quot;的状态码，默认跳转 3 次。</p>
     * @param string $SendContext <p>该参数仅当 Type=UDP 时有效，表示健康检查发送的内容。只允许 ASCII 可见字符，最大长度限制 500 个字符。</p>
     * @param string $RecvContext <p>该参数仅当 Type=UDP 时有效，表示健康检查期望源站返回结果。只允许 ASCII 可见字符，最大长度限制 500 个字符。</p>
     * @param string $ProbeCluster <p>健康检查探测集群。指定本负载均衡实例发起健康探测的集群区域范围，探测集群地区分布详见<a href="https://cloud.tencent.com/document/product/1552/104228">健康检查策略介绍</a>，仅 HTTP 专用型（V2）版本负载均衡实例支持设置。取值有：</p><li>global：由全球所有区域的探测集群发起探测，包括中国大陆区域以及非中国大陆区域，各个区域的集群独立维护各自的探测结果；</li><li>mainland_china：仅由中国大陆区域的探测集群发起探测，当前中国大陆区域共用一个探测集群，探测结果由中国大陆区域的探测集群维护，其他区域跟随中国大陆区域的集群的探测结果；</li><li>overseas：仅由非中国大陆区域的探测集群发起探测，当前非中国大陆区域包含多个地区的探测集群，探测结果由各个地区的探测集群独立维护，中国大陆区域的探测结果由所有其他地区的探测集群的探测结果汇总生成。</li>默认为 global。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("HealthThreshold",$param) and $param["HealthThreshold"] !== null) {
            $this->HealthThreshold = $param["HealthThreshold"];
        }

        if (array_key_exists("CriticalThreshold",$param) and $param["CriticalThreshold"] !== null) {
            $this->CriticalThreshold = $param["CriticalThreshold"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("HostHeaderPolicy",$param) and $param["HostHeaderPolicy"] !== null) {
            $this->HostHeaderPolicy = $param["HostHeaderPolicy"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("ExpectedCodes",$param) and $param["ExpectedCodes"] !== null) {
            $this->ExpectedCodes = $param["ExpectedCodes"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new CustomizedHeader();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }

        if (array_key_exists("FollowRedirect",$param) and $param["FollowRedirect"] !== null) {
            $this->FollowRedirect = $param["FollowRedirect"];
        }

        if (array_key_exists("SendContext",$param) and $param["SendContext"] !== null) {
            $this->SendContext = $param["SendContext"];
        }

        if (array_key_exists("RecvContext",$param) and $param["RecvContext"] !== null) {
            $this->RecvContext = $param["RecvContext"];
        }

        if (array_key_exists("ProbeCluster",$param) and $param["ProbeCluster"] !== null) {
            $this->ProbeCluster = $param["ProbeCluster"];
        }
    }
}

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
 * @method string getType() 获取健康检查策略，取值有：
<li>HTTP；</li>
<li>HTTPS；</li>
<li>TCP；</li>
<li>UDP；</li>
<li>ICMP Ping；</li>
<li>NoCheck。</li>
注意：NoCheck 表示不启用健康检查策略。
 * @method void setType(string $Type) 设置健康检查策略，取值有：
<li>HTTP；</li>
<li>HTTPS；</li>
<li>TCP；</li>
<li>UDP；</li>
<li>ICMP Ping；</li>
<li>NoCheck。</li>
注意：NoCheck 表示不启用健康检查策略。
 * @method integer getPort() 获取检查端口。当 Type=HTTP 或 Type=HTTPS 或 Type=TCP 或 Type=UDP 时为必填。
 * @method void setPort(integer $Port) 设置检查端口。当 Type=HTTP 或 Type=HTTPS 或 Type=TCP 或 Type=UDP 时为必填。
 * @method integer getInterval() 获取检查频率，表示多久发起一次健康检查任务，单位为秒。可取值有：30，60，180，300 或 600。
 * @method void setInterval(integer $Interval) 设置检查频率，表示多久发起一次健康检查任务，单位为秒。可取值有：30，60，180，300 或 600。
 * @method integer getTimeout() 获取每一次健康检查的超时时间，若健康检查消耗时间大于此值，则检查结果判定为”不健康“， 单位为秒，默认值为 5s，取值必须小于 Interval。
 * @method void setTimeout(integer $Timeout) 设置每一次健康检查的超时时间，若健康检查消耗时间大于此值，则检查结果判定为”不健康“， 单位为秒，默认值为 5s，取值必须小于 Interval。
 * @method integer getHealthThreshold() 获取健康阈值，表示连续几次健康检查结果为"健康"，则判断源站为"健康"，单位为次，默认 3 次，最小取值 1 次。
 * @method void setHealthThreshold(integer $HealthThreshold) 设置健康阈值，表示连续几次健康检查结果为"健康"，则判断源站为"健康"，单位为次，默认 3 次，最小取值 1 次。
 * @method integer getCriticalThreshold() 获取不健康阈值，表示连续几次健康检查结果为"不健康"，则判断源站为"不健康"，单位为次，默认 2 次。
 * @method void setCriticalThreshold(integer $CriticalThreshold) 设置不健康阈值，表示连续几次健康检查结果为"不健康"，则判断源站为"不健康"，单位为次，默认 2 次。
 * @method string getPath() 获取该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测路径，需要填写完整的 host/path，不包含协议部分，例如：www.example.com/test。

 * @method void setPath(string $Path) 设置该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测路径，需要填写完整的 host/path，不包含协议部分，例如：www.example.com/test。

 * @method string getMethod() 获取该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示请求方法，取值有：
<li>GET；</li>
<li>HEAD。</li>
 * @method void setMethod(string $Method) 设置该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示请求方法，取值有：
<li>GET；</li>
<li>HEAD。</li>
 * @method array getExpectedCodes() 获取该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测节点向源站发起健康检查时，响应哪些状态码可用于认定探测结果为健康。
 * @method void setExpectedCodes(array $ExpectedCodes) 设置该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测节点向源站发起健康检查时，响应哪些状态码可用于认定探测结果为健康。
 * @method array getHeaders() 获取该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测请求携带的自定义  HTTP 请求头，至多可配置 10 个。
 * @method void setHeaders(array $Headers) 设置该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测请求携带的自定义  HTTP 请求头，至多可配置 10 个。
 * @method string getFollowRedirect() 获取该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示是否启用遵循 301/302 重定向。启用后，301/302 默认为"健康"的状态码，默认跳转 3 次。
 * @method void setFollowRedirect(string $FollowRedirect) 设置该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示是否启用遵循 301/302 重定向。启用后，301/302 默认为"健康"的状态码，默认跳转 3 次。
 * @method string getSendContext() 获取该参数仅当 Type=UDP 时有效，表示健康检查发送的内容。只允许 ASCII 可见字符，最大长度限制 500 个字符。
 * @method void setSendContext(string $SendContext) 设置该参数仅当 Type=UDP 时有效，表示健康检查发送的内容。只允许 ASCII 可见字符，最大长度限制 500 个字符。
 * @method string getRecvContext() 获取该参数仅当 Type=UDP 时有效，表示健康检查期望源站返回结果。只允许 ASCII 可见字符，最大长度限制 500 个字符。
 * @method void setRecvContext(string $RecvContext) 设置该参数仅当 Type=UDP 时有效，表示健康检查期望源站返回结果。只允许 ASCII 可见字符，最大长度限制 500 个字符。
 */
class HealthChecker extends AbstractModel
{
    /**
     * @var string 健康检查策略，取值有：
<li>HTTP；</li>
<li>HTTPS；</li>
<li>TCP；</li>
<li>UDP；</li>
<li>ICMP Ping；</li>
<li>NoCheck。</li>
注意：NoCheck 表示不启用健康检查策略。
     */
    public $Type;

    /**
     * @var integer 检查端口。当 Type=HTTP 或 Type=HTTPS 或 Type=TCP 或 Type=UDP 时为必填。
     */
    public $Port;

    /**
     * @var integer 检查频率，表示多久发起一次健康检查任务，单位为秒。可取值有：30，60，180，300 或 600。
     */
    public $Interval;

    /**
     * @var integer 每一次健康检查的超时时间，若健康检查消耗时间大于此值，则检查结果判定为”不健康“， 单位为秒，默认值为 5s，取值必须小于 Interval。
     */
    public $Timeout;

    /**
     * @var integer 健康阈值，表示连续几次健康检查结果为"健康"，则判断源站为"健康"，单位为次，默认 3 次，最小取值 1 次。
     */
    public $HealthThreshold;

    /**
     * @var integer 不健康阈值，表示连续几次健康检查结果为"不健康"，则判断源站为"不健康"，单位为次，默认 2 次。
     */
    public $CriticalThreshold;

    /**
     * @var string 该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测路径，需要填写完整的 host/path，不包含协议部分，例如：www.example.com/test。

     */
    public $Path;

    /**
     * @var string 该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示请求方法，取值有：
<li>GET；</li>
<li>HEAD。</li>
     */
    public $Method;

    /**
     * @var array 该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测节点向源站发起健康检查时，响应哪些状态码可用于认定探测结果为健康。
     */
    public $ExpectedCodes;

    /**
     * @var array 该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测请求携带的自定义  HTTP 请求头，至多可配置 10 个。
     */
    public $Headers;

    /**
     * @var string 该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示是否启用遵循 301/302 重定向。启用后，301/302 默认为"健康"的状态码，默认跳转 3 次。
     */
    public $FollowRedirect;

    /**
     * @var string 该参数仅当 Type=UDP 时有效，表示健康检查发送的内容。只允许 ASCII 可见字符，最大长度限制 500 个字符。
     */
    public $SendContext;

    /**
     * @var string 该参数仅当 Type=UDP 时有效，表示健康检查期望源站返回结果。只允许 ASCII 可见字符，最大长度限制 500 个字符。
     */
    public $RecvContext;

    /**
     * @param string $Type 健康检查策略，取值有：
<li>HTTP；</li>
<li>HTTPS；</li>
<li>TCP；</li>
<li>UDP；</li>
<li>ICMP Ping；</li>
<li>NoCheck。</li>
注意：NoCheck 表示不启用健康检查策略。
     * @param integer $Port 检查端口。当 Type=HTTP 或 Type=HTTPS 或 Type=TCP 或 Type=UDP 时为必填。
     * @param integer $Interval 检查频率，表示多久发起一次健康检查任务，单位为秒。可取值有：30，60，180，300 或 600。
     * @param integer $Timeout 每一次健康检查的超时时间，若健康检查消耗时间大于此值，则检查结果判定为”不健康“， 单位为秒，默认值为 5s，取值必须小于 Interval。
     * @param integer $HealthThreshold 健康阈值，表示连续几次健康检查结果为"健康"，则判断源站为"健康"，单位为次，默认 3 次，最小取值 1 次。
     * @param integer $CriticalThreshold 不健康阈值，表示连续几次健康检查结果为"不健康"，则判断源站为"不健康"，单位为次，默认 2 次。
     * @param string $Path 该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测路径，需要填写完整的 host/path，不包含协议部分，例如：www.example.com/test。

     * @param string $Method 该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示请求方法，取值有：
<li>GET；</li>
<li>HEAD。</li>
     * @param array $ExpectedCodes 该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测节点向源站发起健康检查时，响应哪些状态码可用于认定探测结果为健康。
     * @param array $Headers 该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示探测请求携带的自定义  HTTP 请求头，至多可配置 10 个。
     * @param string $FollowRedirect 该参数仅当 Type=HTTP 或 Type=HTTPS 时有效，表示是否启用遵循 301/302 重定向。启用后，301/302 默认为"健康"的状态码，默认跳转 3 次。
     * @param string $SendContext 该参数仅当 Type=UDP 时有效，表示健康检查发送的内容。只允许 ASCII 可见字符，最大长度限制 500 个字符。
     * @param string $RecvContext 该参数仅当 Type=UDP 时有效，表示健康检查期望源站返回结果。只允许 ASCII 可见字符，最大长度限制 500 个字符。
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
    }
}

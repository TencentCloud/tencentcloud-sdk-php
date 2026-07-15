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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyHealthCheckTemplate请求参数结构体
 *
 * @method string getHealthCheckTemplateId() 获取<p>健康检查模板 ID，格式为 hct- 后接字母数字。</p>
 * @method void setHealthCheckTemplateId(string $HealthCheckTemplateId) 设置<p>健康检查模板 ID，格式为 hct- 后接字母数字。</p>
 * @method boolean getDryRun() 获取<p>是否预览此次请求。</p><ul><li><strong>false</strong>（默认）：发送普通请求，直接修改健康检查模板。</li><li><strong>true</strong>：发送预览请求，检查修改健康检查模板的参数、格式、业务限制等是否符合要求。</li></ul>
 * @method void setDryRun(boolean $DryRun) 设置<p>是否预览此次请求。</p><ul><li><strong>false</strong>（默认）：发送普通请求，直接修改健康检查模板。</li><li><strong>true</strong>：发送预览请求，检查修改健康检查模板的参数、格式、业务限制等是否符合要求。</li></ul>
 * @method array getHealthCheckCodes() 获取<p>健康检查状态码。取值：</p><ul><li>当健康检查协议为<strong>HTTP/HTTPS</strong>时：<ul><li><strong>http_1xx</strong></li><li><strong>http_2xx</strong>（默认值）</li><li><strong>http_3xx</strong></li><li><strong>http_4xx</strong></li><li><strong>http_5xx</strong></li></ul></li><li>当健康检查协议为<strong>GRPC/GRPCS</strong>时：默认值为<strong>12</strong>，数值范围为<strong>0-99</strong>，输入值可为数值、多个数值或者范围以及相互组合，如：<ul><li><strong>&quot;20&quot;</strong></li><li><strong>&quot;0-99&quot;</strong></li></ul></li></ul>
 * @method void setHealthCheckCodes(array $HealthCheckCodes) 设置<p>健康检查状态码。取值：</p><ul><li>当健康检查协议为<strong>HTTP/HTTPS</strong>时：<ul><li><strong>http_1xx</strong></li><li><strong>http_2xx</strong>（默认值）</li><li><strong>http_3xx</strong></li><li><strong>http_4xx</strong></li><li><strong>http_5xx</strong></li></ul></li><li>当健康检查协议为<strong>GRPC/GRPCS</strong>时：默认值为<strong>12</strong>，数值范围为<strong>0-99</strong>，输入值可为数值、多个数值或者范围以及相互组合，如：<ul><li><strong>&quot;20&quot;</strong></li><li><strong>&quot;0-99&quot;</strong></li></ul></li></ul>
 * @method integer getHealthCheckHealthyThreshold() 获取<p>判定后端服务健康的阈值，当健康检查连续成功多少次后，后端服务的状态由<strong>不健康</strong>变为<strong>健康</strong>。<br>取值范围：<strong>2</strong>-<strong>10</strong>。<br>默认值：<strong>2</strong>。</p>
 * @method void setHealthCheckHealthyThreshold(integer $HealthCheckHealthyThreshold) 设置<p>判定后端服务健康的阈值，当健康检查连续成功多少次后，后端服务的状态由<strong>不健康</strong>变为<strong>健康</strong>。<br>取值范围：<strong>2</strong>-<strong>10</strong>。<br>默认值：<strong>2</strong>。</p>
 * @method string getHealthCheckHost() 获取<p>健康检查域名。<br>长度限制为 <strong>1-255</strong> 个字符。<br>可包含小写字母、数字、短划线（-）和半角句号（.）。</p><blockquote><p>仅当 <strong>HealthCheckProtocol</strong> 设置为 <strong>HTTP/HTTPS/GRPC/GRPCS</strong> 时，该参数生效。</p></blockquote>
 * @method void setHealthCheckHost(string $HealthCheckHost) 设置<p>健康检查域名。<br>长度限制为 <strong>1-255</strong> 个字符。<br>可包含小写字母、数字、短划线（-）和半角句号（.）。</p><blockquote><p>仅当 <strong>HealthCheckProtocol</strong> 设置为 <strong>HTTP/HTTPS/GRPC/GRPCS</strong> 时，该参数生效。</p></blockquote>
 * @method string getHealthCheckHttpVersion() 获取<p>健康检查 HTTP 协议版本，取值：</p><ul><li><strong>HTTP1.1</strong>（默认）</li><li><strong>HTTP1.0</strong> <blockquote><p>仅当<strong>HealthCheckProtocol</strong>设置为<strong>HTTP</strong> 或 <strong>HTTPS</strong> 时，该参数生效。</p></blockquote></li></ul>
 * @method void setHealthCheckHttpVersion(string $HealthCheckHttpVersion) 设置<p>健康检查 HTTP 协议版本，取值：</p><ul><li><strong>HTTP1.1</strong>（默认）</li><li><strong>HTTP1.0</strong> <blockquote><p>仅当<strong>HealthCheckProtocol</strong>设置为<strong>HTTP</strong> 或 <strong>HTTPS</strong> 时，该参数生效。</p></blockquote></li></ul>
 * @method integer getHealthCheckInterval() 获取<p>健康检查的时间间隔。单位：秒。 取值范围：<strong>2</strong>-<strong>300</strong>。 默认值：<strong>5</strong>。</p>
 * @method void setHealthCheckInterval(integer $HealthCheckInterval) 设置<p>健康检查的时间间隔。单位：秒。 取值范围：<strong>2</strong>-<strong>300</strong>。 默认值：<strong>5</strong>。</p>
 * @method string getHealthCheckMethod() 获取<p>健康检查方法，取值： - <strong>GET</strong> - <strong>HEAD</strong>（默认值） </p><blockquote><p>仅当<strong>HealthCheckProtocol</strong>设置为<strong>HTTP</strong> 或 <strong>HTTPS</strong> 时，该参数生效。</p></blockquote>
 * @method void setHealthCheckMethod(string $HealthCheckMethod) 设置<p>健康检查方法，取值： - <strong>GET</strong> - <strong>HEAD</strong>（默认值） </p><blockquote><p>仅当<strong>HealthCheckProtocol</strong>设置为<strong>HTTP</strong> 或 <strong>HTTPS</strong> 时，该参数生效。</p></blockquote>
 * @method string getHealthCheckPath() 获取<p>健康检查的转发规则路径。 长度为 <strong>1-80</strong> 个字符，只能使用字母、数字、字符<code>-/.%?#&amp;=</code>以及扩展字符<code>_;~!（)*[]@$^:&#39;,+</code>。 URL 必须以正斜线（/）开头。 </p><blockquote><p>仅当<strong>HealthCheckProtocol</strong>为<strong>HTTP/HTTPS/GRPC/GRPCS</strong>时，转发规则路径参数生效。</p></blockquote>
 * @method void setHealthCheckPath(string $HealthCheckPath) 设置<p>健康检查的转发规则路径。 长度为 <strong>1-80</strong> 个字符，只能使用字母、数字、字符<code>-/.%?#&amp;=</code>以及扩展字符<code>_;~!（)*[]@$^:&#39;,+</code>。 URL 必须以正斜线（/）开头。 </p><blockquote><p>仅当<strong>HealthCheckProtocol</strong>为<strong>HTTP/HTTPS/GRPC/GRPCS</strong>时，转发规则路径参数生效。</p></blockquote>
 * @method integer getHealthCheckPort() 获取<p>健康检查访问后端服务器的端口。  取值范围：<strong>0-65535</strong>。  默认值：<strong>0</strong>，表示后端服务器的端口。</p>
 * @method void setHealthCheckPort(integer $HealthCheckPort) 设置<p>健康检查访问后端服务器的端口。  取值范围：<strong>0-65535</strong>。  默认值：<strong>0</strong>，表示后端服务器的端口。</p>
 * @method string getHealthCheckProtocol() 获取<p>健康检查协议。取值：</p><ul><li><strong>HTTP</strong>（默认）：通过发送 HEAD 或 GET 请求模拟浏览器的访问行为来检查服务器应用是否健康。</li><li><strong>HTTPS</strong>：通过发送 HEAD 或 GET 请求模拟浏览器的访问行为来检查服务器应用是否健康。（数据加密，相比 HTTP 更安全。）</li><li><strong>TCP</strong>：通过发送 SYN 握手报文来检测服务器端口是否存活。</li><li><strong>GRPC</strong>：通过发送 POST 或 GET 请求来检查服务器应用是否健康。</li><li><strong>GRPCS</strong>：通过发送 POST 或 GET 请求来检查服务器应用是否健康。</li></ul>
 * @method void setHealthCheckProtocol(string $HealthCheckProtocol) 设置<p>健康检查协议。取值：</p><ul><li><strong>HTTP</strong>（默认）：通过发送 HEAD 或 GET 请求模拟浏览器的访问行为来检查服务器应用是否健康。</li><li><strong>HTTPS</strong>：通过发送 HEAD 或 GET 请求模拟浏览器的访问行为来检查服务器应用是否健康。（数据加密，相比 HTTP 更安全。）</li><li><strong>TCP</strong>：通过发送 SYN 握手报文来检测服务器端口是否存活。</li><li><strong>GRPC</strong>：通过发送 POST 或 GET 请求来检查服务器应用是否健康。</li><li><strong>GRPCS</strong>：通过发送 POST 或 GET 请求来检查服务器应用是否健康。</li></ul>
 * @method string getHealthCheckTemplateName() 获取<p>健康检查模板名称。长度为 <strong>1-255</strong> 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。</p>
 * @method void setHealthCheckTemplateName(string $HealthCheckTemplateName) 设置<p>健康检查模板名称。长度为 <strong>1-255</strong> 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。</p>
 * @method integer getHealthCheckTimeout() 获取<p>健康检查的响应超时时间。单位：秒。<br>取值范围：<strong>2</strong>-<strong>60</strong>。<br>默认值：<strong>2</strong>。</p>
 * @method void setHealthCheckTimeout(integer $HealthCheckTimeout) 设置<p>健康检查的响应超时时间。单位：秒。<br>取值范围：<strong>2</strong>-<strong>60</strong>。<br>默认值：<strong>2</strong>。</p>
 * @method integer getHealthCheckUnhealthyThreshold() 获取<p>判定后端服务不健康的阈值，当健康检查连续失败多少次后，后端服务的状态由<strong>健康</strong>变为<strong>不健康</strong>。<br>取值范围：<strong>2</strong>-<strong>10</strong>。<br>默认值：<strong>2</strong>。</p>
 * @method void setHealthCheckUnhealthyThreshold(integer $HealthCheckUnhealthyThreshold) 设置<p>判定后端服务不健康的阈值，当健康检查连续失败多少次后，后端服务的状态由<strong>健康</strong>变为<strong>不健康</strong>。<br>取值范围：<strong>2</strong>-<strong>10</strong>。<br>默认值：<strong>2</strong>。</p>
 */
class ModifyHealthCheckTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>健康检查模板 ID，格式为 hct- 后接字母数字。</p>
     */
    public $HealthCheckTemplateId;

    /**
     * @var boolean <p>是否预览此次请求。</p><ul><li><strong>false</strong>（默认）：发送普通请求，直接修改健康检查模板。</li><li><strong>true</strong>：发送预览请求，检查修改健康检查模板的参数、格式、业务限制等是否符合要求。</li></ul>
     */
    public $DryRun;

    /**
     * @var array <p>健康检查状态码。取值：</p><ul><li>当健康检查协议为<strong>HTTP/HTTPS</strong>时：<ul><li><strong>http_1xx</strong></li><li><strong>http_2xx</strong>（默认值）</li><li><strong>http_3xx</strong></li><li><strong>http_4xx</strong></li><li><strong>http_5xx</strong></li></ul></li><li>当健康检查协议为<strong>GRPC/GRPCS</strong>时：默认值为<strong>12</strong>，数值范围为<strong>0-99</strong>，输入值可为数值、多个数值或者范围以及相互组合，如：<ul><li><strong>&quot;20&quot;</strong></li><li><strong>&quot;0-99&quot;</strong></li></ul></li></ul>
     */
    public $HealthCheckCodes;

    /**
     * @var integer <p>判定后端服务健康的阈值，当健康检查连续成功多少次后，后端服务的状态由<strong>不健康</strong>变为<strong>健康</strong>。<br>取值范围：<strong>2</strong>-<strong>10</strong>。<br>默认值：<strong>2</strong>。</p>
     */
    public $HealthCheckHealthyThreshold;

    /**
     * @var string <p>健康检查域名。<br>长度限制为 <strong>1-255</strong> 个字符。<br>可包含小写字母、数字、短划线（-）和半角句号（.）。</p><blockquote><p>仅当 <strong>HealthCheckProtocol</strong> 设置为 <strong>HTTP/HTTPS/GRPC/GRPCS</strong> 时，该参数生效。</p></blockquote>
     */
    public $HealthCheckHost;

    /**
     * @var string <p>健康检查 HTTP 协议版本，取值：</p><ul><li><strong>HTTP1.1</strong>（默认）</li><li><strong>HTTP1.0</strong> <blockquote><p>仅当<strong>HealthCheckProtocol</strong>设置为<strong>HTTP</strong> 或 <strong>HTTPS</strong> 时，该参数生效。</p></blockquote></li></ul>
     */
    public $HealthCheckHttpVersion;

    /**
     * @var integer <p>健康检查的时间间隔。单位：秒。 取值范围：<strong>2</strong>-<strong>300</strong>。 默认值：<strong>5</strong>。</p>
     */
    public $HealthCheckInterval;

    /**
     * @var string <p>健康检查方法，取值： - <strong>GET</strong> - <strong>HEAD</strong>（默认值） </p><blockquote><p>仅当<strong>HealthCheckProtocol</strong>设置为<strong>HTTP</strong> 或 <strong>HTTPS</strong> 时，该参数生效。</p></blockquote>
     */
    public $HealthCheckMethod;

    /**
     * @var string <p>健康检查的转发规则路径。 长度为 <strong>1-80</strong> 个字符，只能使用字母、数字、字符<code>-/.%?#&amp;=</code>以及扩展字符<code>_;~!（)*[]@$^:&#39;,+</code>。 URL 必须以正斜线（/）开头。 </p><blockquote><p>仅当<strong>HealthCheckProtocol</strong>为<strong>HTTP/HTTPS/GRPC/GRPCS</strong>时，转发规则路径参数生效。</p></blockquote>
     */
    public $HealthCheckPath;

    /**
     * @var integer <p>健康检查访问后端服务器的端口。  取值范围：<strong>0-65535</strong>。  默认值：<strong>0</strong>，表示后端服务器的端口。</p>
     */
    public $HealthCheckPort;

    /**
     * @var string <p>健康检查协议。取值：</p><ul><li><strong>HTTP</strong>（默认）：通过发送 HEAD 或 GET 请求模拟浏览器的访问行为来检查服务器应用是否健康。</li><li><strong>HTTPS</strong>：通过发送 HEAD 或 GET 请求模拟浏览器的访问行为来检查服务器应用是否健康。（数据加密，相比 HTTP 更安全。）</li><li><strong>TCP</strong>：通过发送 SYN 握手报文来检测服务器端口是否存活。</li><li><strong>GRPC</strong>：通过发送 POST 或 GET 请求来检查服务器应用是否健康。</li><li><strong>GRPCS</strong>：通过发送 POST 或 GET 请求来检查服务器应用是否健康。</li></ul>
     */
    public $HealthCheckProtocol;

    /**
     * @var string <p>健康检查模板名称。长度为 <strong>1-255</strong> 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。</p>
     */
    public $HealthCheckTemplateName;

    /**
     * @var integer <p>健康检查的响应超时时间。单位：秒。<br>取值范围：<strong>2</strong>-<strong>60</strong>。<br>默认值：<strong>2</strong>。</p>
     */
    public $HealthCheckTimeout;

    /**
     * @var integer <p>判定后端服务不健康的阈值，当健康检查连续失败多少次后，后端服务的状态由<strong>健康</strong>变为<strong>不健康</strong>。<br>取值范围：<strong>2</strong>-<strong>10</strong>。<br>默认值：<strong>2</strong>。</p>
     */
    public $HealthCheckUnhealthyThreshold;

    /**
     * @param string $HealthCheckTemplateId <p>健康检查模板 ID，格式为 hct- 后接字母数字。</p>
     * @param boolean $DryRun <p>是否预览此次请求。</p><ul><li><strong>false</strong>（默认）：发送普通请求，直接修改健康检查模板。</li><li><strong>true</strong>：发送预览请求，检查修改健康检查模板的参数、格式、业务限制等是否符合要求。</li></ul>
     * @param array $HealthCheckCodes <p>健康检查状态码。取值：</p><ul><li>当健康检查协议为<strong>HTTP/HTTPS</strong>时：<ul><li><strong>http_1xx</strong></li><li><strong>http_2xx</strong>（默认值）</li><li><strong>http_3xx</strong></li><li><strong>http_4xx</strong></li><li><strong>http_5xx</strong></li></ul></li><li>当健康检查协议为<strong>GRPC/GRPCS</strong>时：默认值为<strong>12</strong>，数值范围为<strong>0-99</strong>，输入值可为数值、多个数值或者范围以及相互组合，如：<ul><li><strong>&quot;20&quot;</strong></li><li><strong>&quot;0-99&quot;</strong></li></ul></li></ul>
     * @param integer $HealthCheckHealthyThreshold <p>判定后端服务健康的阈值，当健康检查连续成功多少次后，后端服务的状态由<strong>不健康</strong>变为<strong>健康</strong>。<br>取值范围：<strong>2</strong>-<strong>10</strong>。<br>默认值：<strong>2</strong>。</p>
     * @param string $HealthCheckHost <p>健康检查域名。<br>长度限制为 <strong>1-255</strong> 个字符。<br>可包含小写字母、数字、短划线（-）和半角句号（.）。</p><blockquote><p>仅当 <strong>HealthCheckProtocol</strong> 设置为 <strong>HTTP/HTTPS/GRPC/GRPCS</strong> 时，该参数生效。</p></blockquote>
     * @param string $HealthCheckHttpVersion <p>健康检查 HTTP 协议版本，取值：</p><ul><li><strong>HTTP1.1</strong>（默认）</li><li><strong>HTTP1.0</strong> <blockquote><p>仅当<strong>HealthCheckProtocol</strong>设置为<strong>HTTP</strong> 或 <strong>HTTPS</strong> 时，该参数生效。</p></blockquote></li></ul>
     * @param integer $HealthCheckInterval <p>健康检查的时间间隔。单位：秒。 取值范围：<strong>2</strong>-<strong>300</strong>。 默认值：<strong>5</strong>。</p>
     * @param string $HealthCheckMethod <p>健康检查方法，取值： - <strong>GET</strong> - <strong>HEAD</strong>（默认值） </p><blockquote><p>仅当<strong>HealthCheckProtocol</strong>设置为<strong>HTTP</strong> 或 <strong>HTTPS</strong> 时，该参数生效。</p></blockquote>
     * @param string $HealthCheckPath <p>健康检查的转发规则路径。 长度为 <strong>1-80</strong> 个字符，只能使用字母、数字、字符<code>-/.%?#&amp;=</code>以及扩展字符<code>_;~!（)*[]@$^:&#39;,+</code>。 URL 必须以正斜线（/）开头。 </p><blockquote><p>仅当<strong>HealthCheckProtocol</strong>为<strong>HTTP/HTTPS/GRPC/GRPCS</strong>时，转发规则路径参数生效。</p></blockquote>
     * @param integer $HealthCheckPort <p>健康检查访问后端服务器的端口。  取值范围：<strong>0-65535</strong>。  默认值：<strong>0</strong>，表示后端服务器的端口。</p>
     * @param string $HealthCheckProtocol <p>健康检查协议。取值：</p><ul><li><strong>HTTP</strong>（默认）：通过发送 HEAD 或 GET 请求模拟浏览器的访问行为来检查服务器应用是否健康。</li><li><strong>HTTPS</strong>：通过发送 HEAD 或 GET 请求模拟浏览器的访问行为来检查服务器应用是否健康。（数据加密，相比 HTTP 更安全。）</li><li><strong>TCP</strong>：通过发送 SYN 握手报文来检测服务器端口是否存活。</li><li><strong>GRPC</strong>：通过发送 POST 或 GET 请求来检查服务器应用是否健康。</li><li><strong>GRPCS</strong>：通过发送 POST 或 GET 请求来检查服务器应用是否健康。</li></ul>
     * @param string $HealthCheckTemplateName <p>健康检查模板名称。长度为 <strong>1-255</strong> 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。</p>
     * @param integer $HealthCheckTimeout <p>健康检查的响应超时时间。单位：秒。<br>取值范围：<strong>2</strong>-<strong>60</strong>。<br>默认值：<strong>2</strong>。</p>
     * @param integer $HealthCheckUnhealthyThreshold <p>判定后端服务不健康的阈值，当健康检查连续失败多少次后，后端服务的状态由<strong>健康</strong>变为<strong>不健康</strong>。<br>取值范围：<strong>2</strong>-<strong>10</strong>。<br>默认值：<strong>2</strong>。</p>
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
        if (array_key_exists("HealthCheckTemplateId",$param) and $param["HealthCheckTemplateId"] !== null) {
            $this->HealthCheckTemplateId = $param["HealthCheckTemplateId"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("HealthCheckCodes",$param) and $param["HealthCheckCodes"] !== null) {
            $this->HealthCheckCodes = $param["HealthCheckCodes"];
        }

        if (array_key_exists("HealthCheckHealthyThreshold",$param) and $param["HealthCheckHealthyThreshold"] !== null) {
            $this->HealthCheckHealthyThreshold = $param["HealthCheckHealthyThreshold"];
        }

        if (array_key_exists("HealthCheckHost",$param) and $param["HealthCheckHost"] !== null) {
            $this->HealthCheckHost = $param["HealthCheckHost"];
        }

        if (array_key_exists("HealthCheckHttpVersion",$param) and $param["HealthCheckHttpVersion"] !== null) {
            $this->HealthCheckHttpVersion = $param["HealthCheckHttpVersion"];
        }

        if (array_key_exists("HealthCheckInterval",$param) and $param["HealthCheckInterval"] !== null) {
            $this->HealthCheckInterval = $param["HealthCheckInterval"];
        }

        if (array_key_exists("HealthCheckMethod",$param) and $param["HealthCheckMethod"] !== null) {
            $this->HealthCheckMethod = $param["HealthCheckMethod"];
        }

        if (array_key_exists("HealthCheckPath",$param) and $param["HealthCheckPath"] !== null) {
            $this->HealthCheckPath = $param["HealthCheckPath"];
        }

        if (array_key_exists("HealthCheckPort",$param) and $param["HealthCheckPort"] !== null) {
            $this->HealthCheckPort = $param["HealthCheckPort"];
        }

        if (array_key_exists("HealthCheckProtocol",$param) and $param["HealthCheckProtocol"] !== null) {
            $this->HealthCheckProtocol = $param["HealthCheckProtocol"];
        }

        if (array_key_exists("HealthCheckTemplateName",$param) and $param["HealthCheckTemplateName"] !== null) {
            $this->HealthCheckTemplateName = $param["HealthCheckTemplateName"];
        }

        if (array_key_exists("HealthCheckTimeout",$param) and $param["HealthCheckTimeout"] !== null) {
            $this->HealthCheckTimeout = $param["HealthCheckTimeout"];
        }

        if (array_key_exists("HealthCheckUnhealthyThreshold",$param) and $param["HealthCheckUnhealthyThreshold"] !== null) {
            $this->HealthCheckUnhealthyThreshold = $param["HealthCheckUnhealthyThreshold"];
        }
    }
}

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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标组健康检查详情
 *
 * @method boolean getHealthSwitch() 获取<p>是否开启健康检查。</p>
 * @method void setHealthSwitch(boolean $HealthSwitch) 设置<p>是否开启健康检查。</p>
 * @method string getProtocol() 获取<p>健康检查方式， 其中仅V2新版目标组类型支持该参数， 支持取值 TCP | HTTP | HTTPS | PING | CUSTOM，其中:<br><ur><li>当目标组后端转发协议为TCP时， 健康检查方式支持 TCP/HTTP/CUSTOM， 默认为TCP。</li><li>当目标组后端转发协议为UDP时， 健康检查方式支持 PING/CUSTOM，默认为PING。</li><li>当目标组后端转发协议为HTTP时， 健康检查方式支持 HTTP/TCP， 默认为HTTP。</li><li>当目标组后端转发协议为HTTPS时， 健康检查方式支持 HTTPS/TCP， 默认为HTTPS。</li><li>当目标组后端转发协议为GRPC时， 健康检查方式支持GRPC/TCP， 默认为GRPC。</li></ur></p>
 * @method void setProtocol(string $Protocol) 设置<p>健康检查方式， 其中仅V2新版目标组类型支持该参数， 支持取值 TCP | HTTP | HTTPS | PING | CUSTOM，其中:<br><ur><li>当目标组后端转发协议为TCP时， 健康检查方式支持 TCP/HTTP/CUSTOM， 默认为TCP。</li><li>当目标组后端转发协议为UDP时， 健康检查方式支持 PING/CUSTOM，默认为PING。</li><li>当目标组后端转发协议为HTTP时， 健康检查方式支持 HTTP/TCP， 默认为HTTP。</li><li>当目标组后端转发协议为HTTPS时， 健康检查方式支持 HTTPS/TCP， 默认为HTTPS。</li><li>当目标组后端转发协议为GRPC时， 健康检查方式支持GRPC/TCP， 默认为GRPC。</li></ur></p>
 * @method integer getPort() 获取<p>自定义探测相关参数。健康检查端口，默认为后端服务的端口，除非您希望指定特定端口，否则建议留空。（仅适用于TCP/UDP目标组）。</p>
 * @method void setPort(integer $Port) 设置<p>自定义探测相关参数。健康检查端口，默认为后端服务的端口，除非您希望指定特定端口，否则建议留空。（仅适用于TCP/UDP目标组）。</p>
 * @method integer getTimeout() 获取<p>健康检查超时时间。 </p><p>取值范围：[2, 60]</p><p>单位：秒</p><p>默认值：2</p><p>响应超时时间要小于检查间隔时间。</p>
 * @method void setTimeout(integer $Timeout) 设置<p>健康检查超时时间。 </p><p>取值范围：[2, 60]</p><p>单位：秒</p><p>默认值：2</p><p>响应超时时间要小于检查间隔时间。</p>
 * @method integer getGapTime() 获取<p>检测间隔时间。</p><p>取值范围：[1, 600]</p><p>单位：秒</p><p>默认值：5</p>
 * @method void setGapTime(integer $GapTime) 设置<p>检测间隔时间。</p><p>取值范围：[1, 600]</p><p>单位：秒</p><p>默认值：5</p>
 * @method integer getGoodLimit() 获取<p>检测健康阈值。</p><p>取值范围：[2, 10]</p><p>单位：次</p><p>默认值：3</p>
 * @method void setGoodLimit(integer $GoodLimit) 设置<p>检测健康阈值。</p><p>取值范围：[2, 10]</p><p>单位：次</p><p>默认值：3</p>
 * @method integer getBadLimit() 获取<p>检测不健康阈值。</p><p>取值范围：[2, 10]</p><p>单位：次</p><p>默认值：3</p>
 * @method void setBadLimit(integer $BadLimit) 设置<p>检测不健康阈值。</p><p>取值范围：[2, 10]</p><p>单位：次</p><p>默认值：3</p>
 * @method boolean getJumboFrame() 获取<p>目标组下的所有rs的探测包是否开启巨帧。默认开启。仅GWLB类型目标组支持该参数。</p>
 * @method void setJumboFrame(boolean $JumboFrame) 设置<p>目标组下的所有rs的探测包是否开启巨帧。默认开启。仅GWLB类型目标组支持该参数。</p>
 * @method integer getHttpCode() 获取<p>健康检查状态码（仅适用于HTTP/HTTPS目标组、TCP目标组的HTTP健康检查方式）。可选值：1~31，默认 31，其中：<url> <li>1 表示探测后返回值 1xx 代表健康。</li><li>2 表示返回 2xx 代表健康。</li><li>4 表示返回 3xx 代表健康。</li><li>8 表示返回 4xx 代表健康。</li><li>16 表示返回 5xx 代表健康。</li></url>若希望多种返回码都可代表健康，则将相应的值相加。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpCode(integer $HttpCode) 设置<p>健康检查状态码（仅适用于HTTP/HTTPS目标组、TCP目标组的HTTP健康检查方式）。可选值：1~31，默认 31，其中：<url> <li>1 表示探测后返回值 1xx 代表健康。</li><li>2 表示返回 2xx 代表健康。</li><li>4 表示返回 3xx 代表健康。</li><li>8 表示返回 4xx 代表健康。</li><li>16 表示返回 5xx 代表健康。</li></url>若希望多种返回码都可代表健康，则将相应的值相加。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpCheckDomain() 获取<p>健康检查域名， 其中：<ur><li>仅适用于HTTP/HTTPS目标组和TCP目标组的HTTP健康检查方式。</li><li>针对HTTP/HTTPS目标组，当使用HTTP健康检查方式时，该参数为必填项。</li></ur></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpCheckDomain(string $HttpCheckDomain) 设置<p>健康检查域名， 其中：<ur><li>仅适用于HTTP/HTTPS目标组和TCP目标组的HTTP健康检查方式。</li><li>针对HTTP/HTTPS目标组，当使用HTTP健康检查方式时，该参数为必填项。</li></ur></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpCheckPath() 获取<p>健康检查路径（仅适用于HTTP/HTTPS转发规则、TCP监听器的HTTP健康检查方式）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpCheckPath(string $HttpCheckPath) 设置<p>健康检查路径（仅适用于HTTP/HTTPS转发规则、TCP监听器的HTTP健康检查方式）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpCheckMethod() 获取<p>健康检查方法（仅适用于HTTP/HTTPS转发规则、TCP监听器的HTTP健康检查方式），默认值：HEAD，可选值HEAD或GET。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpCheckMethod(string $HttpCheckMethod) 设置<p>健康检查方法（仅适用于HTTP/HTTPS转发规则、TCP监听器的HTTP健康检查方式），默认值：HEAD，可选值HEAD或GET。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContextType() 获取<p>健康检查的输入格式，健康检查方式取CUSTOM时，必填此字段，可取值：HEX或TEXT，其中：<ur><li>TEXT：文本格式。</li><li>HEX：十六进制格式， SendContext和RecvContext的字符只能在0123456789ABCDEF中选取且长度必须是偶数位。</li><li>仅适用于TCP/UDP目标组。</li></ur></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContextType(string $ContextType) 设置<p>健康检查的输入格式，健康检查方式取CUSTOM时，必填此字段，可取值：HEX或TEXT，其中：<ur><li>TEXT：文本格式。</li><li>HEX：十六进制格式， SendContext和RecvContext的字符只能在0123456789ABCDEF中选取且长度必须是偶数位。</li><li>仅适用于TCP/UDP目标组。</li></ur></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSendContext() 获取<p>自定义探测相关参数。健康检查协议CheckType的值取CUSTOM时，必填此字段，代表健康检查发送的请求内容，只允许ASCII可见字符，最大长度限制500。（仅适用于TCP/UDP目标组）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSendContext(string $SendContext) 设置<p>自定义探测相关参数。健康检查协议CheckType的值取CUSTOM时，必填此字段，代表健康检查发送的请求内容，只允许ASCII可见字符，最大长度限制500。（仅适用于TCP/UDP目标组）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecvContext() 获取<p>自定义探测相关参数。健康检查协议CheckType的值取CUSTOM时，必填此字段，代表健康检查返回的结果，只允许ASCII可见字符，最大长度限制500。（仅适用于TCP/UDP目标组）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecvContext(string $RecvContext) 设置<p>自定义探测相关参数。健康检查协议CheckType的值取CUSTOM时，必填此字段，代表健康检查返回的结果，只允许ASCII可见字符，最大长度限制500。（仅适用于TCP/UDP目标组）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpVersion() 获取<p>HTTP版本, 其中：<ur><li>健康检查协议CheckType的值取HTTP时，必传此字段。</li><li>支持配置选项：HTTP/1.0, HTTP/1.1。</li><li>仅适用于TCP目标组。</li></ur></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpVersion(string $HttpVersion) 设置<p>HTTP版本, 其中：<ur><li>健康检查协议CheckType的值取HTTP时，必传此字段。</li><li>支持配置选项：HTTP/1.0, HTTP/1.1。</li><li>仅适用于TCP目标组。</li></ur></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtendedCode() 获取<p>GRPC健康检查状态码（仅适用于后端转发协议为GRPC的目标组）。默认值为 12，可输入值为数值、多个数值、或者范围，例如 20 或 20,25 或 0-99。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtendedCode(string $ExtendedCode) 设置<p>GRPC健康检查状态码（仅适用于后端转发协议为GRPC的目标组）。默认值为 12，可输入值为数值、多个数值、或者范围，例如 20 或 20,25 或 0-99。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TargetGroupHealthCheck extends AbstractModel
{
    /**
     * @var boolean <p>是否开启健康检查。</p>
     */
    public $HealthSwitch;

    /**
     * @var string <p>健康检查方式， 其中仅V2新版目标组类型支持该参数， 支持取值 TCP | HTTP | HTTPS | PING | CUSTOM，其中:<br><ur><li>当目标组后端转发协议为TCP时， 健康检查方式支持 TCP/HTTP/CUSTOM， 默认为TCP。</li><li>当目标组后端转发协议为UDP时， 健康检查方式支持 PING/CUSTOM，默认为PING。</li><li>当目标组后端转发协议为HTTP时， 健康检查方式支持 HTTP/TCP， 默认为HTTP。</li><li>当目标组后端转发协议为HTTPS时， 健康检查方式支持 HTTPS/TCP， 默认为HTTPS。</li><li>当目标组后端转发协议为GRPC时， 健康检查方式支持GRPC/TCP， 默认为GRPC。</li></ur></p>
     */
    public $Protocol;

    /**
     * @var integer <p>自定义探测相关参数。健康检查端口，默认为后端服务的端口，除非您希望指定特定端口，否则建议留空。（仅适用于TCP/UDP目标组）。</p>
     */
    public $Port;

    /**
     * @var integer <p>健康检查超时时间。 </p><p>取值范围：[2, 60]</p><p>单位：秒</p><p>默认值：2</p><p>响应超时时间要小于检查间隔时间。</p>
     */
    public $Timeout;

    /**
     * @var integer <p>检测间隔时间。</p><p>取值范围：[1, 600]</p><p>单位：秒</p><p>默认值：5</p>
     */
    public $GapTime;

    /**
     * @var integer <p>检测健康阈值。</p><p>取值范围：[2, 10]</p><p>单位：次</p><p>默认值：3</p>
     */
    public $GoodLimit;

    /**
     * @var integer <p>检测不健康阈值。</p><p>取值范围：[2, 10]</p><p>单位：次</p><p>默认值：3</p>
     */
    public $BadLimit;

    /**
     * @var boolean <p>目标组下的所有rs的探测包是否开启巨帧。默认开启。仅GWLB类型目标组支持该参数。</p>
     */
    public $JumboFrame;

    /**
     * @var integer <p>健康检查状态码（仅适用于HTTP/HTTPS目标组、TCP目标组的HTTP健康检查方式）。可选值：1~31，默认 31，其中：<url> <li>1 表示探测后返回值 1xx 代表健康。</li><li>2 表示返回 2xx 代表健康。</li><li>4 表示返回 3xx 代表健康。</li><li>8 表示返回 4xx 代表健康。</li><li>16 表示返回 5xx 代表健康。</li></url>若希望多种返回码都可代表健康，则将相应的值相加。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpCode;

    /**
     * @var string <p>健康检查域名， 其中：<ur><li>仅适用于HTTP/HTTPS目标组和TCP目标组的HTTP健康检查方式。</li><li>针对HTTP/HTTPS目标组，当使用HTTP健康检查方式时，该参数为必填项。</li></ur></p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpCheckDomain;

    /**
     * @var string <p>健康检查路径（仅适用于HTTP/HTTPS转发规则、TCP监听器的HTTP健康检查方式）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpCheckPath;

    /**
     * @var string <p>健康检查方法（仅适用于HTTP/HTTPS转发规则、TCP监听器的HTTP健康检查方式），默认值：HEAD，可选值HEAD或GET。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpCheckMethod;

    /**
     * @var string <p>健康检查的输入格式，健康检查方式取CUSTOM时，必填此字段，可取值：HEX或TEXT，其中：<ur><li>TEXT：文本格式。</li><li>HEX：十六进制格式， SendContext和RecvContext的字符只能在0123456789ABCDEF中选取且长度必须是偶数位。</li><li>仅适用于TCP/UDP目标组。</li></ur></p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContextType;

    /**
     * @var string <p>自定义探测相关参数。健康检查协议CheckType的值取CUSTOM时，必填此字段，代表健康检查发送的请求内容，只允许ASCII可见字符，最大长度限制500。（仅适用于TCP/UDP目标组）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SendContext;

    /**
     * @var string <p>自定义探测相关参数。健康检查协议CheckType的值取CUSTOM时，必填此字段，代表健康检查返回的结果，只允许ASCII可见字符，最大长度限制500。（仅适用于TCP/UDP目标组）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecvContext;

    /**
     * @var string <p>HTTP版本, 其中：<ur><li>健康检查协议CheckType的值取HTTP时，必传此字段。</li><li>支持配置选项：HTTP/1.0, HTTP/1.1。</li><li>仅适用于TCP目标组。</li></ur></p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpVersion;

    /**
     * @var string <p>GRPC健康检查状态码（仅适用于后端转发协议为GRPC的目标组）。默认值为 12，可输入值为数值、多个数值、或者范围，例如 20 或 20,25 或 0-99。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtendedCode;

    /**
     * @param boolean $HealthSwitch <p>是否开启健康检查。</p>
     * @param string $Protocol <p>健康检查方式， 其中仅V2新版目标组类型支持该参数， 支持取值 TCP | HTTP | HTTPS | PING | CUSTOM，其中:<br><ur><li>当目标组后端转发协议为TCP时， 健康检查方式支持 TCP/HTTP/CUSTOM， 默认为TCP。</li><li>当目标组后端转发协议为UDP时， 健康检查方式支持 PING/CUSTOM，默认为PING。</li><li>当目标组后端转发协议为HTTP时， 健康检查方式支持 HTTP/TCP， 默认为HTTP。</li><li>当目标组后端转发协议为HTTPS时， 健康检查方式支持 HTTPS/TCP， 默认为HTTPS。</li><li>当目标组后端转发协议为GRPC时， 健康检查方式支持GRPC/TCP， 默认为GRPC。</li></ur></p>
     * @param integer $Port <p>自定义探测相关参数。健康检查端口，默认为后端服务的端口，除非您希望指定特定端口，否则建议留空。（仅适用于TCP/UDP目标组）。</p>
     * @param integer $Timeout <p>健康检查超时时间。 </p><p>取值范围：[2, 60]</p><p>单位：秒</p><p>默认值：2</p><p>响应超时时间要小于检查间隔时间。</p>
     * @param integer $GapTime <p>检测间隔时间。</p><p>取值范围：[1, 600]</p><p>单位：秒</p><p>默认值：5</p>
     * @param integer $GoodLimit <p>检测健康阈值。</p><p>取值范围：[2, 10]</p><p>单位：次</p><p>默认值：3</p>
     * @param integer $BadLimit <p>检测不健康阈值。</p><p>取值范围：[2, 10]</p><p>单位：次</p><p>默认值：3</p>
     * @param boolean $JumboFrame <p>目标组下的所有rs的探测包是否开启巨帧。默认开启。仅GWLB类型目标组支持该参数。</p>
     * @param integer $HttpCode <p>健康检查状态码（仅适用于HTTP/HTTPS目标组、TCP目标组的HTTP健康检查方式）。可选值：1~31，默认 31，其中：<url> <li>1 表示探测后返回值 1xx 代表健康。</li><li>2 表示返回 2xx 代表健康。</li><li>4 表示返回 3xx 代表健康。</li><li>8 表示返回 4xx 代表健康。</li><li>16 表示返回 5xx 代表健康。</li></url>若希望多种返回码都可代表健康，则将相应的值相加。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpCheckDomain <p>健康检查域名， 其中：<ur><li>仅适用于HTTP/HTTPS目标组和TCP目标组的HTTP健康检查方式。</li><li>针对HTTP/HTTPS目标组，当使用HTTP健康检查方式时，该参数为必填项。</li></ur></p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpCheckPath <p>健康检查路径（仅适用于HTTP/HTTPS转发规则、TCP监听器的HTTP健康检查方式）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpCheckMethod <p>健康检查方法（仅适用于HTTP/HTTPS转发规则、TCP监听器的HTTP健康检查方式），默认值：HEAD，可选值HEAD或GET。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContextType <p>健康检查的输入格式，健康检查方式取CUSTOM时，必填此字段，可取值：HEX或TEXT，其中：<ur><li>TEXT：文本格式。</li><li>HEX：十六进制格式， SendContext和RecvContext的字符只能在0123456789ABCDEF中选取且长度必须是偶数位。</li><li>仅适用于TCP/UDP目标组。</li></ur></p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SendContext <p>自定义探测相关参数。健康检查协议CheckType的值取CUSTOM时，必填此字段，代表健康检查发送的请求内容，只允许ASCII可见字符，最大长度限制500。（仅适用于TCP/UDP目标组）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecvContext <p>自定义探测相关参数。健康检查协议CheckType的值取CUSTOM时，必填此字段，代表健康检查返回的结果，只允许ASCII可见字符，最大长度限制500。（仅适用于TCP/UDP目标组）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpVersion <p>HTTP版本, 其中：<ur><li>健康检查协议CheckType的值取HTTP时，必传此字段。</li><li>支持配置选项：HTTP/1.0, HTTP/1.1。</li><li>仅适用于TCP目标组。</li></ur></p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtendedCode <p>GRPC健康检查状态码（仅适用于后端转发协议为GRPC的目标组）。默认值为 12，可输入值为数值、多个数值、或者范围，例如 20 或 20,25 或 0-99。</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("HealthSwitch",$param) and $param["HealthSwitch"] !== null) {
            $this->HealthSwitch = $param["HealthSwitch"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("GapTime",$param) and $param["GapTime"] !== null) {
            $this->GapTime = $param["GapTime"];
        }

        if (array_key_exists("GoodLimit",$param) and $param["GoodLimit"] !== null) {
            $this->GoodLimit = $param["GoodLimit"];
        }

        if (array_key_exists("BadLimit",$param) and $param["BadLimit"] !== null) {
            $this->BadLimit = $param["BadLimit"];
        }

        if (array_key_exists("JumboFrame",$param) and $param["JumboFrame"] !== null) {
            $this->JumboFrame = $param["JumboFrame"];
        }

        if (array_key_exists("HttpCode",$param) and $param["HttpCode"] !== null) {
            $this->HttpCode = $param["HttpCode"];
        }

        if (array_key_exists("HttpCheckDomain",$param) and $param["HttpCheckDomain"] !== null) {
            $this->HttpCheckDomain = $param["HttpCheckDomain"];
        }

        if (array_key_exists("HttpCheckPath",$param) and $param["HttpCheckPath"] !== null) {
            $this->HttpCheckPath = $param["HttpCheckPath"];
        }

        if (array_key_exists("HttpCheckMethod",$param) and $param["HttpCheckMethod"] !== null) {
            $this->HttpCheckMethod = $param["HttpCheckMethod"];
        }

        if (array_key_exists("ContextType",$param) and $param["ContextType"] !== null) {
            $this->ContextType = $param["ContextType"];
        }

        if (array_key_exists("SendContext",$param) and $param["SendContext"] !== null) {
            $this->SendContext = $param["SendContext"];
        }

        if (array_key_exists("RecvContext",$param) and $param["RecvContext"] !== null) {
            $this->RecvContext = $param["RecvContext"];
        }

        if (array_key_exists("HttpVersion",$param) and $param["HttpVersion"] !== null) {
            $this->HttpVersion = $param["HttpVersion"];
        }

        if (array_key_exists("ExtendedCode",$param) and $param["ExtendedCode"] !== null) {
            $this->ExtendedCode = $param["ExtendedCode"];
        }
    }
}

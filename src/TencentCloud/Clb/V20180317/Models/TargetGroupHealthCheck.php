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
 * @method boolean getHealthSwitch() 获取是否开启健康检查。
 * @method void setHealthSwitch(boolean $HealthSwitch) 设置是否开启健康检查。
 * @method string getProtocol() 获取健康检查方式， 其中仅V2新版目标组类型支持该参数， 支持取值 TCP | HTTP | HTTPS | PING | CUSTOM，其中:
<ur><li>当目标组后端转发协议为TCP时， 健康检查方式支持 TCP/HTTP/CUSTOM， 默认为TCP。</li><li>当目标组后端转发协议为UDP时， 健康检查方式支持 PING/CUSTOM，默认为PING。</li><li>当目标组后端转发协议为HTTP时， 健康检查方式支持 HTTP/TCP， 默认为HTTP。</li><li>当目标组后端转发协议为HTTPS时， 健康检查方式支持 HTTPS/TCP， 默认为HTTPS。</li><li>当目标组后端转发协议为GRPC时， 健康检查方式支持GRPC/TCP， 默认为GRPC。</li></ur>
 * @method void setProtocol(string $Protocol) 设置健康检查方式， 其中仅V2新版目标组类型支持该参数， 支持取值 TCP | HTTP | HTTPS | PING | CUSTOM，其中:
<ur><li>当目标组后端转发协议为TCP时， 健康检查方式支持 TCP/HTTP/CUSTOM， 默认为TCP。</li><li>当目标组后端转发协议为UDP时， 健康检查方式支持 PING/CUSTOM，默认为PING。</li><li>当目标组后端转发协议为HTTP时， 健康检查方式支持 HTTP/TCP， 默认为HTTP。</li><li>当目标组后端转发协议为HTTPS时， 健康检查方式支持 HTTPS/TCP， 默认为HTTPS。</li><li>当目标组后端转发协议为GRPC时， 健康检查方式支持GRPC/TCP， 默认为GRPC。</li></ur>
 * @method integer getPort() 获取自定义探测相关参数。健康检查端口，默认为后端服务的端口，除非您希望指定特定端口，否则建议留空。（仅适用于TCP/UDP目标组）。

 * @method void setPort(integer $Port) 设置自定义探测相关参数。健康检查端口，默认为后端服务的端口，除非您希望指定特定端口，否则建议留空。（仅适用于TCP/UDP目标组）。

 * @method integer getTimeout() 获取健康检查超时时间。 默认为2秒。 可配置范围：2 - 30秒。
 * @method void setTimeout(integer $Timeout) 设置健康检查超时时间。 默认为2秒。 可配置范围：2 - 30秒。
 * @method integer getGapTime() 获取检测间隔时间。 默认为5秒。 可配置范围：2 - 300秒。
 * @method void setGapTime(integer $GapTime) 设置检测间隔时间。 默认为5秒。 可配置范围：2 - 300秒。
 * @method integer getGoodLimit() 获取检测健康阈值。 默认为3秒。 可配置范围：2 - 10次。
 * @method void setGoodLimit(integer $GoodLimit) 设置检测健康阈值。 默认为3秒。 可配置范围：2 - 10次。
 * @method integer getBadLimit() 获取检测不健康阈值。 默认为3秒。 可配置范围：2 - 10次。
 * @method void setBadLimit(integer $BadLimit) 设置检测不健康阈值。 默认为3秒。 可配置范围：2 - 10次。
 * @method boolean getJumboFrame() 获取目标组下的所有rs的探测包是否开启巨帧。默认开启。仅GWLB类型目标组支持该参数。
 * @method void setJumboFrame(boolean $JumboFrame) 设置目标组下的所有rs的探测包是否开启巨帧。默认开启。仅GWLB类型目标组支持该参数。
 * @method integer getHttpCode() 获取健康检查状态码（仅适用于HTTP/HTTPS目标组、TCP目标组的HTTP健康检查方式）。可选值：1~31，默认 31，其中：<url> <li>1 表示探测后返回值 1xx 代表健康。</li><li>2 表示返回 2xx 代表健康。</li><li>4 表示返回 3xx 代表健康。</li><li>8 表示返回 4xx 代表健康。</li><li>16 表示返回 5xx 代表健康。</li></url>若希望多种返回码都可代表健康，则将相应的值相加。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpCode(integer $HttpCode) 设置健康检查状态码（仅适用于HTTP/HTTPS目标组、TCP目标组的HTTP健康检查方式）。可选值：1~31，默认 31，其中：<url> <li>1 表示探测后返回值 1xx 代表健康。</li><li>2 表示返回 2xx 代表健康。</li><li>4 表示返回 3xx 代表健康。</li><li>8 表示返回 4xx 代表健康。</li><li>16 表示返回 5xx 代表健康。</li></url>若希望多种返回码都可代表健康，则将相应的值相加。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpCheckDomain() 获取健康检查域名， 其中：<ur><li>仅适用于HTTP/HTTPS目标组和TCP目标组的HTTP健康检查方式。</li><li>针对HTTP/HTTPS目标组，当使用HTTP健康检查方式时，该参数为必填项。</li></ur>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpCheckDomain(string $HttpCheckDomain) 设置健康检查域名， 其中：<ur><li>仅适用于HTTP/HTTPS目标组和TCP目标组的HTTP健康检查方式。</li><li>针对HTTP/HTTPS目标组，当使用HTTP健康检查方式时，该参数为必填项。</li></ur>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpCheckPath() 获取健康检查路径（仅适用于HTTP/HTTPS转发规则、TCP监听器的HTTP健康检查方式）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpCheckPath(string $HttpCheckPath) 设置健康检查路径（仅适用于HTTP/HTTPS转发规则、TCP监听器的HTTP健康检查方式）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpCheckMethod() 获取健康检查方法（仅适用于HTTP/HTTPS转发规则、TCP监听器的HTTP健康检查方式），默认值：HEAD，可选值HEAD或GET。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpCheckMethod(string $HttpCheckMethod) 设置健康检查方法（仅适用于HTTP/HTTPS转发规则、TCP监听器的HTTP健康检查方式），默认值：HEAD，可选值HEAD或GET。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContextType() 获取健康检查的输入格式，健康检查方式取CUSTOM时，必填此字段，可取值：HEX或TEXT，其中：<ur><li>TEXT：文本格式。</li><li>HEX：十六进制格式， SendContext和RecvContext的字符只能在0123456789ABCDEF中选取且长度必须是偶数位。</li><li>仅适用于TCP/UDP目标组。</li></ur>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContextType(string $ContextType) 设置健康检查的输入格式，健康检查方式取CUSTOM时，必填此字段，可取值：HEX或TEXT，其中：<ur><li>TEXT：文本格式。</li><li>HEX：十六进制格式， SendContext和RecvContext的字符只能在0123456789ABCDEF中选取且长度必须是偶数位。</li><li>仅适用于TCP/UDP目标组。</li></ur>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSendContext() 获取自定义探测相关参数。健康检查协议CheckType的值取CUSTOM时，必填此字段，代表健康检查发送的请求内容，只允许ASCII可见字符，最大长度限制500。（仅适用于TCP/UDP目标组）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSendContext(string $SendContext) 设置自定义探测相关参数。健康检查协议CheckType的值取CUSTOM时，必填此字段，代表健康检查发送的请求内容，只允许ASCII可见字符，最大长度限制500。（仅适用于TCP/UDP目标组）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecvContext() 获取自定义探测相关参数。健康检查协议CheckType的值取CUSTOM时，必填此字段，代表健康检查返回的结果，只允许ASCII可见字符，最大长度限制500。（仅适用于TCP/UDP目标组）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecvContext(string $RecvContext) 设置自定义探测相关参数。健康检查协议CheckType的值取CUSTOM时，必填此字段，代表健康检查返回的结果，只允许ASCII可见字符，最大长度限制500。（仅适用于TCP/UDP目标组）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpVersion() 获取HTTP版本, 其中：<ur><li>健康检查协议CheckType的值取HTTP时，必传此字段。</li><li>支持配置选项：HTTP/1.0, HTTP/1.1。</li><li>仅适用于TCP目标组。</li></ur>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpVersion(string $HttpVersion) 设置HTTP版本, 其中：<ur><li>健康检查协议CheckType的值取HTTP时，必传此字段。</li><li>支持配置选项：HTTP/1.0, HTTP/1.1。</li><li>仅适用于TCP目标组。</li></ur>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtendedCode() 获取GRPC健康检查状态码（仅适用于后端转发协议为GRPC的目标组）。默认值为 12，可输入值为数值、多个数值、或者范围，例如 20 或 20,25 或 0-99。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtendedCode(string $ExtendedCode) 设置GRPC健康检查状态码（仅适用于后端转发协议为GRPC的目标组）。默认值为 12，可输入值为数值、多个数值、或者范围，例如 20 或 20,25 或 0-99。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TargetGroupHealthCheck extends AbstractModel
{
    /**
     * @var boolean 是否开启健康检查。
     */
    public $HealthSwitch;

    /**
     * @var string 健康检查方式， 其中仅V2新版目标组类型支持该参数， 支持取值 TCP | HTTP | HTTPS | PING | CUSTOM，其中:
<ur><li>当目标组后端转发协议为TCP时， 健康检查方式支持 TCP/HTTP/CUSTOM， 默认为TCP。</li><li>当目标组后端转发协议为UDP时， 健康检查方式支持 PING/CUSTOM，默认为PING。</li><li>当目标组后端转发协议为HTTP时， 健康检查方式支持 HTTP/TCP， 默认为HTTP。</li><li>当目标组后端转发协议为HTTPS时， 健康检查方式支持 HTTPS/TCP， 默认为HTTPS。</li><li>当目标组后端转发协议为GRPC时， 健康检查方式支持GRPC/TCP， 默认为GRPC。</li></ur>
     */
    public $Protocol;

    /**
     * @var integer 自定义探测相关参数。健康检查端口，默认为后端服务的端口，除非您希望指定特定端口，否则建议留空。（仅适用于TCP/UDP目标组）。

     */
    public $Port;

    /**
     * @var integer 健康检查超时时间。 默认为2秒。 可配置范围：2 - 30秒。
     */
    public $Timeout;

    /**
     * @var integer 检测间隔时间。 默认为5秒。 可配置范围：2 - 300秒。
     */
    public $GapTime;

    /**
     * @var integer 检测健康阈值。 默认为3秒。 可配置范围：2 - 10次。
     */
    public $GoodLimit;

    /**
     * @var integer 检测不健康阈值。 默认为3秒。 可配置范围：2 - 10次。
     */
    public $BadLimit;

    /**
     * @var boolean 目标组下的所有rs的探测包是否开启巨帧。默认开启。仅GWLB类型目标组支持该参数。
     */
    public $JumboFrame;

    /**
     * @var integer 健康检查状态码（仅适用于HTTP/HTTPS目标组、TCP目标组的HTTP健康检查方式）。可选值：1~31，默认 31，其中：<url> <li>1 表示探测后返回值 1xx 代表健康。</li><li>2 表示返回 2xx 代表健康。</li><li>4 表示返回 3xx 代表健康。</li><li>8 表示返回 4xx 代表健康。</li><li>16 表示返回 5xx 代表健康。</li></url>若希望多种返回码都可代表健康，则将相应的值相加。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpCode;

    /**
     * @var string 健康检查域名， 其中：<ur><li>仅适用于HTTP/HTTPS目标组和TCP目标组的HTTP健康检查方式。</li><li>针对HTTP/HTTPS目标组，当使用HTTP健康检查方式时，该参数为必填项。</li></ur>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpCheckDomain;

    /**
     * @var string 健康检查路径（仅适用于HTTP/HTTPS转发规则、TCP监听器的HTTP健康检查方式）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpCheckPath;

    /**
     * @var string 健康检查方法（仅适用于HTTP/HTTPS转发规则、TCP监听器的HTTP健康检查方式），默认值：HEAD，可选值HEAD或GET。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpCheckMethod;

    /**
     * @var string 健康检查的输入格式，健康检查方式取CUSTOM时，必填此字段，可取值：HEX或TEXT，其中：<ur><li>TEXT：文本格式。</li><li>HEX：十六进制格式， SendContext和RecvContext的字符只能在0123456789ABCDEF中选取且长度必须是偶数位。</li><li>仅适用于TCP/UDP目标组。</li></ur>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContextType;

    /**
     * @var string 自定义探测相关参数。健康检查协议CheckType的值取CUSTOM时，必填此字段，代表健康检查发送的请求内容，只允许ASCII可见字符，最大长度限制500。（仅适用于TCP/UDP目标组）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SendContext;

    /**
     * @var string 自定义探测相关参数。健康检查协议CheckType的值取CUSTOM时，必填此字段，代表健康检查返回的结果，只允许ASCII可见字符，最大长度限制500。（仅适用于TCP/UDP目标组）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecvContext;

    /**
     * @var string HTTP版本, 其中：<ur><li>健康检查协议CheckType的值取HTTP时，必传此字段。</li><li>支持配置选项：HTTP/1.0, HTTP/1.1。</li><li>仅适用于TCP目标组。</li></ur>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpVersion;

    /**
     * @var string GRPC健康检查状态码（仅适用于后端转发协议为GRPC的目标组）。默认值为 12，可输入值为数值、多个数值、或者范围，例如 20 或 20,25 或 0-99。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtendedCode;

    /**
     * @param boolean $HealthSwitch 是否开启健康检查。
     * @param string $Protocol 健康检查方式， 其中仅V2新版目标组类型支持该参数， 支持取值 TCP | HTTP | HTTPS | PING | CUSTOM，其中:
<ur><li>当目标组后端转发协议为TCP时， 健康检查方式支持 TCP/HTTP/CUSTOM， 默认为TCP。</li><li>当目标组后端转发协议为UDP时， 健康检查方式支持 PING/CUSTOM，默认为PING。</li><li>当目标组后端转发协议为HTTP时， 健康检查方式支持 HTTP/TCP， 默认为HTTP。</li><li>当目标组后端转发协议为HTTPS时， 健康检查方式支持 HTTPS/TCP， 默认为HTTPS。</li><li>当目标组后端转发协议为GRPC时， 健康检查方式支持GRPC/TCP， 默认为GRPC。</li></ur>
     * @param integer $Port 自定义探测相关参数。健康检查端口，默认为后端服务的端口，除非您希望指定特定端口，否则建议留空。（仅适用于TCP/UDP目标组）。

     * @param integer $Timeout 健康检查超时时间。 默认为2秒。 可配置范围：2 - 30秒。
     * @param integer $GapTime 检测间隔时间。 默认为5秒。 可配置范围：2 - 300秒。
     * @param integer $GoodLimit 检测健康阈值。 默认为3秒。 可配置范围：2 - 10次。
     * @param integer $BadLimit 检测不健康阈值。 默认为3秒。 可配置范围：2 - 10次。
     * @param boolean $JumboFrame 目标组下的所有rs的探测包是否开启巨帧。默认开启。仅GWLB类型目标组支持该参数。
     * @param integer $HttpCode 健康检查状态码（仅适用于HTTP/HTTPS目标组、TCP目标组的HTTP健康检查方式）。可选值：1~31，默认 31，其中：<url> <li>1 表示探测后返回值 1xx 代表健康。</li><li>2 表示返回 2xx 代表健康。</li><li>4 表示返回 3xx 代表健康。</li><li>8 表示返回 4xx 代表健康。</li><li>16 表示返回 5xx 代表健康。</li></url>若希望多种返回码都可代表健康，则将相应的值相加。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpCheckDomain 健康检查域名， 其中：<ur><li>仅适用于HTTP/HTTPS目标组和TCP目标组的HTTP健康检查方式。</li><li>针对HTTP/HTTPS目标组，当使用HTTP健康检查方式时，该参数为必填项。</li></ur>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpCheckPath 健康检查路径（仅适用于HTTP/HTTPS转发规则、TCP监听器的HTTP健康检查方式）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpCheckMethod 健康检查方法（仅适用于HTTP/HTTPS转发规则、TCP监听器的HTTP健康检查方式），默认值：HEAD，可选值HEAD或GET。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContextType 健康检查的输入格式，健康检查方式取CUSTOM时，必填此字段，可取值：HEX或TEXT，其中：<ur><li>TEXT：文本格式。</li><li>HEX：十六进制格式， SendContext和RecvContext的字符只能在0123456789ABCDEF中选取且长度必须是偶数位。</li><li>仅适用于TCP/UDP目标组。</li></ur>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SendContext 自定义探测相关参数。健康检查协议CheckType的值取CUSTOM时，必填此字段，代表健康检查发送的请求内容，只允许ASCII可见字符，最大长度限制500。（仅适用于TCP/UDP目标组）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecvContext 自定义探测相关参数。健康检查协议CheckType的值取CUSTOM时，必填此字段，代表健康检查返回的结果，只允许ASCII可见字符，最大长度限制500。（仅适用于TCP/UDP目标组）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpVersion HTTP版本, 其中：<ur><li>健康检查协议CheckType的值取HTTP时，必传此字段。</li><li>支持配置选项：HTTP/1.0, HTTP/1.1。</li><li>仅适用于TCP目标组。</li></ur>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtendedCode GRPC健康检查状态码（仅适用于后端转发协议为GRPC的目标组）。默认值为 12，可输入值为数值、多个数值、或者范围，例如 20 或 20,25 或 0-99。
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

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
 * 健康检查模板信息
 *
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method array getHealthCheckCodes() 获取健康检查状态码。取值：
- 当健康检查协议为**HTTP/HTTPS**时：
	- **http_1xx**
	- **http_2xx**（默认值）
	-  **http_3xx**
	-  **http_4xx**
	-  **http_5xx**
- 当健康检查协议为**GRPC/GRPCS**时：默认值为**12**，数值范围为**0-99**，输入值可为数值、多个数值或者范围以及相互组合，如：
	- **"20"**
	- **"0-99"**
 * @method void setHealthCheckCodes(array $HealthCheckCodes) 设置健康检查状态码。取值：
- 当健康检查协议为**HTTP/HTTPS**时：
	- **http_1xx**
	- **http_2xx**（默认值）
	-  **http_3xx**
	-  **http_4xx**
	-  **http_5xx**
- 当健康检查协议为**GRPC/GRPCS**时：默认值为**12**，数值范围为**0-99**，输入值可为数值、多个数值或者范围以及相互组合，如：
	- **"20"**
	- **"0-99"**
 * @method integer getHealthCheckHealthyThreshold() 获取判定后端服务健康的阈值，当健康检查连续成功多少次后，后端服务的状态由**不健康**变为**健康**。
取值范围：**2**-**10**。
默认值：**2**。
 * @method void setHealthCheckHealthyThreshold(integer $HealthCheckHealthyThreshold) 设置判定后端服务健康的阈值，当健康检查连续成功多少次后，后端服务的状态由**不健康**变为**健康**。
取值范围：**2**-**10**。
默认值：**2**。
 * @method string getHealthCheckHost() 获取健康检查域名。
长度限制为 **1-255** 个字符。
可包含小写字母、数字、短划线（-）和半角句号（.）。

> 仅当 **HealthCheckProtocol** 设置为 **HTTP/HTTPS/GRPC/GRPCS** 时，该参数生效。
 * @method void setHealthCheckHost(string $HealthCheckHost) 设置健康检查域名。
长度限制为 **1-255** 个字符。
可包含小写字母、数字、短划线（-）和半角句号（.）。

> 仅当 **HealthCheckProtocol** 设置为 **HTTP/HTTPS/GRPC/GRPCS** 时，该参数生效。
 * @method string getHealthCheckHttpVersion() 获取健康检查 HTTP 协议版本，取值：
- **HTTP1.1**（默认）
- **HTTP1.0** 
> 仅当**HealthCheckProtocol**设置为**HTTP** 或 **HTTPS** 时，该参数生效。
 * @method void setHealthCheckHttpVersion(string $HealthCheckHttpVersion) 设置健康检查 HTTP 协议版本，取值：
- **HTTP1.1**（默认）
- **HTTP1.0** 
> 仅当**HealthCheckProtocol**设置为**HTTP** 或 **HTTPS** 时，该参数生效。
 * @method integer getHealthCheckInterval() 获取健康检查的时间间隔。单位：秒。
取值范围：**2**-**300**。
默认值：**5**。
 * @method void setHealthCheckInterval(integer $HealthCheckInterval) 设置健康检查的时间间隔。单位：秒。
取值范围：**2**-**300**。
默认值：**5**。
 * @method string getHealthCheckMethod() 获取健康检查方法，取值：
- **GET**
- **HEAD**（默认值）
> 仅当**HealthCheckProtocol**设置为**HTTP** 或 **HTTPS** 时，该参数生效。
 * @method void setHealthCheckMethod(string $HealthCheckMethod) 设置健康检查方法，取值：
- **GET**
- **HEAD**（默认值）
> 仅当**HealthCheckProtocol**设置为**HTTP** 或 **HTTPS** 时，该参数生效。
 * @method string getHealthCheckPath() 获取健康检查的转发规则路径。 长度为 **1-80** 个字符，只能使用字母、数字、字符`-/.%?#&=`以及扩展字符`_;~!（)*[]@$^:',+`。 URL 必须以正斜线（/）开头。 
> 仅当**HealthCheckProtocol**为**HTTP/HTTPS/GRPC/GRPCS**时，转发规则路径参数生效。
 * @method void setHealthCheckPath(string $HealthCheckPath) 设置健康检查的转发规则路径。 长度为 **1-80** 个字符，只能使用字母、数字、字符`-/.%?#&=`以及扩展字符`_;~!（)*[]@$^:',+`。 URL 必须以正斜线（/）开头。 
> 仅当**HealthCheckProtocol**为**HTTP/HTTPS/GRPC/GRPCS**时，转发规则路径参数生效。
 * @method integer getHealthCheckPort() 获取健康检查访问后端服务器的端口。

取值范围：**0-65535**。

默认值：**0**，表示后端服务器的端口。
 * @method void setHealthCheckPort(integer $HealthCheckPort) 设置健康检查访问后端服务器的端口。

取值范围：**0-65535**。

默认值：**0**，表示后端服务器的端口。
 * @method string getHealthCheckProtocol() 获取健康检查协议。取值：
- **HTTP**（默认）：通过发送 HEAD 或 GET 请求模拟浏览器的访问行为来检查服务器应用是否健康。
- **HTTPS**：通过发送 HEAD 或 GET 请求模拟浏览器的访问行为来检查服务器应用是否健康。（数据加密，相比 HTTP 更安全。）
- **TCP**：通过发送 SYN 握手报文来检测服务器端口是否存活。
- **GRPC**：通过发送 POST 或 GET 请求来检查服务器应用是否健康。
- **GRPCS**：通过发送 POST 或 GET 请求来检查服务器应用是否健康。
 * @method void setHealthCheckProtocol(string $HealthCheckProtocol) 设置健康检查协议。取值：
- **HTTP**（默认）：通过发送 HEAD 或 GET 请求模拟浏览器的访问行为来检查服务器应用是否健康。
- **HTTPS**：通过发送 HEAD 或 GET 请求模拟浏览器的访问行为来检查服务器应用是否健康。（数据加密，相比 HTTP 更安全。）
- **TCP**：通过发送 SYN 握手报文来检测服务器端口是否存活。
- **GRPC**：通过发送 POST 或 GET 请求来检查服务器应用是否健康。
- **GRPCS**：通过发送 POST 或 GET 请求来检查服务器应用是否健康。
 * @method string getHealthCheckTemplateId() 获取健康检查模板 ID，格式为 hct- 后接字母数字。所有接口（创建、查询、修改、删除）均使用 hct- 前缀。
 * @method void setHealthCheckTemplateId(string $HealthCheckTemplateId) 设置健康检查模板 ID，格式为 hct- 后接字母数字。所有接口（创建、查询、修改、删除）均使用 hct- 前缀。
 * @method string getHealthCheckTemplateName() 获取健康检查模板名称。长度为 **1-255** 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。
 * @method void setHealthCheckTemplateName(string $HealthCheckTemplateName) 设置健康检查模板名称。长度为 **1-255** 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。
 * @method integer getHealthCheckTimeout() 获取健康检查的响应超时时间。单位：秒。
取值范围：**2**-**60**。
默认值：**2**。
 * @method void setHealthCheckTimeout(integer $HealthCheckTimeout) 设置健康检查的响应超时时间。单位：秒。
取值范围：**2**-**60**。
默认值：**2**。
 * @method integer getHealthCheckUnhealthyThreshold() 获取判定后端服务不健康的阈值，当健康检查连续失败多少次后，后端服务的状态由**健康**变为**不健康**。
取值范围：**2**-**10**。
默认值：**2**。
 * @method void setHealthCheckUnhealthyThreshold(integer $HealthCheckUnhealthyThreshold) 设置判定后端服务不健康的阈值，当健康检查连续失败多少次后，后端服务的状态由**健康**变为**不健康**。
取值范围：**2**-**10**。
默认值：**2**。
 * @method string getModifyTime() 获取修改时间。
 * @method void setModifyTime(string $ModifyTime) 设置修改时间。
 * @method array getTags() 获取标签。
 * @method void setTags(array $Tags) 设置标签。
 */
class HealthCheckTemplate extends AbstractModel
{
    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var array 健康检查状态码。取值：
- 当健康检查协议为**HTTP/HTTPS**时：
	- **http_1xx**
	- **http_2xx**（默认值）
	-  **http_3xx**
	-  **http_4xx**
	-  **http_5xx**
- 当健康检查协议为**GRPC/GRPCS**时：默认值为**12**，数值范围为**0-99**，输入值可为数值、多个数值或者范围以及相互组合，如：
	- **"20"**
	- **"0-99"**
     */
    public $HealthCheckCodes;

    /**
     * @var integer 判定后端服务健康的阈值，当健康检查连续成功多少次后，后端服务的状态由**不健康**变为**健康**。
取值范围：**2**-**10**。
默认值：**2**。
     */
    public $HealthCheckHealthyThreshold;

    /**
     * @var string 健康检查域名。
长度限制为 **1-255** 个字符。
可包含小写字母、数字、短划线（-）和半角句号（.）。

> 仅当 **HealthCheckProtocol** 设置为 **HTTP/HTTPS/GRPC/GRPCS** 时，该参数生效。
     */
    public $HealthCheckHost;

    /**
     * @var string 健康检查 HTTP 协议版本，取值：
- **HTTP1.1**（默认）
- **HTTP1.0** 
> 仅当**HealthCheckProtocol**设置为**HTTP** 或 **HTTPS** 时，该参数生效。
     */
    public $HealthCheckHttpVersion;

    /**
     * @var integer 健康检查的时间间隔。单位：秒。
取值范围：**2**-**300**。
默认值：**5**。
     */
    public $HealthCheckInterval;

    /**
     * @var string 健康检查方法，取值：
- **GET**
- **HEAD**（默认值）
> 仅当**HealthCheckProtocol**设置为**HTTP** 或 **HTTPS** 时，该参数生效。
     */
    public $HealthCheckMethod;

    /**
     * @var string 健康检查的转发规则路径。 长度为 **1-80** 个字符，只能使用字母、数字、字符`-/.%?#&=`以及扩展字符`_;~!（)*[]@$^:',+`。 URL 必须以正斜线（/）开头。 
> 仅当**HealthCheckProtocol**为**HTTP/HTTPS/GRPC/GRPCS**时，转发规则路径参数生效。
     */
    public $HealthCheckPath;

    /**
     * @var integer 健康检查访问后端服务器的端口。

取值范围：**0-65535**。

默认值：**0**，表示后端服务器的端口。
     */
    public $HealthCheckPort;

    /**
     * @var string 健康检查协议。取值：
- **HTTP**（默认）：通过发送 HEAD 或 GET 请求模拟浏览器的访问行为来检查服务器应用是否健康。
- **HTTPS**：通过发送 HEAD 或 GET 请求模拟浏览器的访问行为来检查服务器应用是否健康。（数据加密，相比 HTTP 更安全。）
- **TCP**：通过发送 SYN 握手报文来检测服务器端口是否存活。
- **GRPC**：通过发送 POST 或 GET 请求来检查服务器应用是否健康。
- **GRPCS**：通过发送 POST 或 GET 请求来检查服务器应用是否健康。
     */
    public $HealthCheckProtocol;

    /**
     * @var string 健康检查模板 ID，格式为 hct- 后接字母数字。所有接口（创建、查询、修改、删除）均使用 hct- 前缀。
     */
    public $HealthCheckTemplateId;

    /**
     * @var string 健康检查模板名称。长度为 **1-255** 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。
     */
    public $HealthCheckTemplateName;

    /**
     * @var integer 健康检查的响应超时时间。单位：秒。
取值范围：**2**-**60**。
默认值：**2**。
     */
    public $HealthCheckTimeout;

    /**
     * @var integer 判定后端服务不健康的阈值，当健康检查连续失败多少次后，后端服务的状态由**健康**变为**不健康**。
取值范围：**2**-**10**。
默认值：**2**。
     */
    public $HealthCheckUnhealthyThreshold;

    /**
     * @var string 修改时间。
     */
    public $ModifyTime;

    /**
     * @var array 标签。
     */
    public $Tags;

    /**
     * @param string $CreateTime 创建时间。
     * @param array $HealthCheckCodes 健康检查状态码。取值：
- 当健康检查协议为**HTTP/HTTPS**时：
	- **http_1xx**
	- **http_2xx**（默认值）
	-  **http_3xx**
	-  **http_4xx**
	-  **http_5xx**
- 当健康检查协议为**GRPC/GRPCS**时：默认值为**12**，数值范围为**0-99**，输入值可为数值、多个数值或者范围以及相互组合，如：
	- **"20"**
	- **"0-99"**
     * @param integer $HealthCheckHealthyThreshold 判定后端服务健康的阈值，当健康检查连续成功多少次后，后端服务的状态由**不健康**变为**健康**。
取值范围：**2**-**10**。
默认值：**2**。
     * @param string $HealthCheckHost 健康检查域名。
长度限制为 **1-255** 个字符。
可包含小写字母、数字、短划线（-）和半角句号（.）。

> 仅当 **HealthCheckProtocol** 设置为 **HTTP/HTTPS/GRPC/GRPCS** 时，该参数生效。
     * @param string $HealthCheckHttpVersion 健康检查 HTTP 协议版本，取值：
- **HTTP1.1**（默认）
- **HTTP1.0** 
> 仅当**HealthCheckProtocol**设置为**HTTP** 或 **HTTPS** 时，该参数生效。
     * @param integer $HealthCheckInterval 健康检查的时间间隔。单位：秒。
取值范围：**2**-**300**。
默认值：**5**。
     * @param string $HealthCheckMethod 健康检查方法，取值：
- **GET**
- **HEAD**（默认值）
> 仅当**HealthCheckProtocol**设置为**HTTP** 或 **HTTPS** 时，该参数生效。
     * @param string $HealthCheckPath 健康检查的转发规则路径。 长度为 **1-80** 个字符，只能使用字母、数字、字符`-/.%?#&=`以及扩展字符`_;~!（)*[]@$^:',+`。 URL 必须以正斜线（/）开头。 
> 仅当**HealthCheckProtocol**为**HTTP/HTTPS/GRPC/GRPCS**时，转发规则路径参数生效。
     * @param integer $HealthCheckPort 健康检查访问后端服务器的端口。

取值范围：**0-65535**。

默认值：**0**，表示后端服务器的端口。
     * @param string $HealthCheckProtocol 健康检查协议。取值：
- **HTTP**（默认）：通过发送 HEAD 或 GET 请求模拟浏览器的访问行为来检查服务器应用是否健康。
- **HTTPS**：通过发送 HEAD 或 GET 请求模拟浏览器的访问行为来检查服务器应用是否健康。（数据加密，相比 HTTP 更安全。）
- **TCP**：通过发送 SYN 握手报文来检测服务器端口是否存活。
- **GRPC**：通过发送 POST 或 GET 请求来检查服务器应用是否健康。
- **GRPCS**：通过发送 POST 或 GET 请求来检查服务器应用是否健康。
     * @param string $HealthCheckTemplateId 健康检查模板 ID，格式为 hct- 后接字母数字。所有接口（创建、查询、修改、删除）均使用 hct- 前缀。
     * @param string $HealthCheckTemplateName 健康检查模板名称。长度为 **1-255** 个字符，可包含数字、大小写字母、中文、半角句号（.）、下划线（_）和短划线（-）。
     * @param integer $HealthCheckTimeout 健康检查的响应超时时间。单位：秒。
取值范围：**2**-**60**。
默认值：**2**。
     * @param integer $HealthCheckUnhealthyThreshold 判定后端服务不健康的阈值，当健康检查连续失败多少次后，后端服务的状态由**健康**变为**不健康**。
取值范围：**2**-**10**。
默认值：**2**。
     * @param string $ModifyTime 修改时间。
     * @param array $Tags 标签。
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
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

        if (array_key_exists("HealthCheckTemplateId",$param) and $param["HealthCheckTemplateId"] !== null) {
            $this->HealthCheckTemplateId = $param["HealthCheckTemplateId"];
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

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}

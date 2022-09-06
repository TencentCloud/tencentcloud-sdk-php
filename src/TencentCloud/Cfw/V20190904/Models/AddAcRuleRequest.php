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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddAcRule请求参数结构体
 *
 * @method string getOrderIndex() 获取-1表示优先级最低，1表示优先级最高
 * @method void setOrderIndex(string $OrderIndex) 设置-1表示优先级最低，1表示优先级最高
 * @method string getRuleAction() 获取访问控制策略中设置的流量通过云防火墙的方式。取值：
accept：放行
drop：拒绝
log：观察
 * @method void setRuleAction(string $RuleAction) 设置访问控制策略中设置的流量通过云防火墙的方式。取值：
accept：放行
drop：拒绝
log：观察
 * @method string getDirection() 获取访问控制策略的流量方向。取值：
in：外对内流量访问控制
out：内对外流量访问控制
 * @method void setDirection(string $Direction) 设置访问控制策略的流量方向。取值：
in：外对内流量访问控制
out：内对外流量访问控制
 * @method string getDescription() 获取访问控制策略的描述信息
 * @method void setDescription(string $Description) 设置访问控制策略的描述信息
 * @method string getSourceType() 获取访问控制策略中的源地址类型。取值：
net：源IP或网段（IP或者CIDR）
location：源区域
template：云防火墙地址模板
instance：实例id
vendor：云厂商
 * @method void setSourceType(string $SourceType) 设置访问控制策略中的源地址类型。取值：
net：源IP或网段（IP或者CIDR）
location：源区域
template：云防火墙地址模板
instance：实例id
vendor：云厂商
 * @method string getSourceContent() 获取访问控制策略中的源地址。取值：
当SourceType为net时，SourceContent为源IP地址或者CIDR地址。
例如：1.1.1.0/24

当SourceType为template时，SourceContent为源地址模板id。

当SourceType为location时，SourceContent为源区域。
例如["BJ11", "ZB"]

当SourceType为instance时，SourceContent为该实例id对应的公网ip。
例如ins-xxxxx

当SourceType为vendor时，SourceContent为所选择厂商的公网ip列表。
例如：aws,huawei,tencent,aliyun,azure,all代表以上五个
 * @method void setSourceContent(string $SourceContent) 设置访问控制策略中的源地址。取值：
当SourceType为net时，SourceContent为源IP地址或者CIDR地址。
例如：1.1.1.0/24

当SourceType为template时，SourceContent为源地址模板id。

当SourceType为location时，SourceContent为源区域。
例如["BJ11", "ZB"]

当SourceType为instance时，SourceContent为该实例id对应的公网ip。
例如ins-xxxxx

当SourceType为vendor时，SourceContent为所选择厂商的公网ip列表。
例如：aws,huawei,tencent,aliyun,azure,all代表以上五个
 * @method string getDestType() 获取访问控制策略中的目的地址类型。取值：
net：目的IP或者网段（IP或者CIDR）
location：源区域
template：云防火墙地址模板
instance：实例id
vendor：云厂商
domain: 域名或者ip
 * @method void setDestType(string $DestType) 设置访问控制策略中的目的地址类型。取值：
net：目的IP或者网段（IP或者CIDR）
location：源区域
template：云防火墙地址模板
instance：实例id
vendor：云厂商
domain: 域名或者ip
 * @method string getDestContent() 获取访问控制策略中的目的地址。取值：
当DestType为net时，DestContent为源IP地址或者CIDR地址。
例如：1.1.1.0/24

当DestType为template时，DestContent为源地址模板id。

当DestType为location时，DestContent为源区域。
例如["BJ11", "ZB"]

当DestType为instance时，DestContent为该实例id对应的公网ip。
例如ins-xxxxx

当DestType为domain时，DestContent为该实例id对应的域名规则。
例如*.qq.com

当DestType为vendor时，DestContent为所选择厂商的公网ip列表。
例如：aws,huawei,tencent,aliyun,azure,all代表以上五个
 * @method void setDestContent(string $DestContent) 设置访问控制策略中的目的地址。取值：
当DestType为net时，DestContent为源IP地址或者CIDR地址。
例如：1.1.1.0/24

当DestType为template时，DestContent为源地址模板id。

当DestType为location时，DestContent为源区域。
例如["BJ11", "ZB"]

当DestType为instance时，DestContent为该实例id对应的公网ip。
例如ins-xxxxx

当DestType为domain时，DestContent为该实例id对应的域名规则。
例如*.qq.com

当DestType为vendor时，DestContent为所选择厂商的公网ip列表。
例如：aws,huawei,tencent,aliyun,azure,all代表以上五个
 * @method string getPort() 获取访问控制策略的端口。取值：
-1/-1：全部端口
80,443：80或者443
 * @method void setPort(string $Port) 设置访问控制策略的端口。取值：
-1/-1：全部端口
80,443：80或者443
 * @method string getProtocol() 获取访问控制策略中流量访问的协议类型。取值：TCP，目前互联网边界规则只能支持TCP，不传参数默认就是TCP
 * @method void setProtocol(string $Protocol) 设置访问控制策略中流量访问的协议类型。取值：TCP，目前互联网边界规则只能支持TCP，不传参数默认就是TCP
 * @method string getApplicationName() 获取七层协议，取值：
HTTP/HTTPS
TLS/SSL
 * @method void setApplicationName(string $ApplicationName) 设置七层协议，取值：
HTTP/HTTPS
TLS/SSL
 * @method string getEnable() 获取是否启用规则，默认为启用，取值：
true为启用，false为不启用
 * @method void setEnable(string $Enable) 设置是否启用规则，默认为启用，取值：
true为启用，false为不启用
 */
class AddAcRuleRequest extends AbstractModel
{
    /**
     * @var string -1表示优先级最低，1表示优先级最高
     */
    public $OrderIndex;

    /**
     * @var string 访问控制策略中设置的流量通过云防火墙的方式。取值：
accept：放行
drop：拒绝
log：观察
     */
    public $RuleAction;

    /**
     * @var string 访问控制策略的流量方向。取值：
in：外对内流量访问控制
out：内对外流量访问控制
     */
    public $Direction;

    /**
     * @var string 访问控制策略的描述信息
     */
    public $Description;

    /**
     * @var string 访问控制策略中的源地址类型。取值：
net：源IP或网段（IP或者CIDR）
location：源区域
template：云防火墙地址模板
instance：实例id
vendor：云厂商
     */
    public $SourceType;

    /**
     * @var string 访问控制策略中的源地址。取值：
当SourceType为net时，SourceContent为源IP地址或者CIDR地址。
例如：1.1.1.0/24

当SourceType为template时，SourceContent为源地址模板id。

当SourceType为location时，SourceContent为源区域。
例如["BJ11", "ZB"]

当SourceType为instance时，SourceContent为该实例id对应的公网ip。
例如ins-xxxxx

当SourceType为vendor时，SourceContent为所选择厂商的公网ip列表。
例如：aws,huawei,tencent,aliyun,azure,all代表以上五个
     */
    public $SourceContent;

    /**
     * @var string 访问控制策略中的目的地址类型。取值：
net：目的IP或者网段（IP或者CIDR）
location：源区域
template：云防火墙地址模板
instance：实例id
vendor：云厂商
domain: 域名或者ip
     */
    public $DestType;

    /**
     * @var string 访问控制策略中的目的地址。取值：
当DestType为net时，DestContent为源IP地址或者CIDR地址。
例如：1.1.1.0/24

当DestType为template时，DestContent为源地址模板id。

当DestType为location时，DestContent为源区域。
例如["BJ11", "ZB"]

当DestType为instance时，DestContent为该实例id对应的公网ip。
例如ins-xxxxx

当DestType为domain时，DestContent为该实例id对应的域名规则。
例如*.qq.com

当DestType为vendor时，DestContent为所选择厂商的公网ip列表。
例如：aws,huawei,tencent,aliyun,azure,all代表以上五个
     */
    public $DestContent;

    /**
     * @var string 访问控制策略的端口。取值：
-1/-1：全部端口
80,443：80或者443
     */
    public $Port;

    /**
     * @var string 访问控制策略中流量访问的协议类型。取值：TCP，目前互联网边界规则只能支持TCP，不传参数默认就是TCP
     */
    public $Protocol;

    /**
     * @var string 七层协议，取值：
HTTP/HTTPS
TLS/SSL
     */
    public $ApplicationName;

    /**
     * @var string 是否启用规则，默认为启用，取值：
true为启用，false为不启用
     */
    public $Enable;

    /**
     * @param string $OrderIndex -1表示优先级最低，1表示优先级最高
     * @param string $RuleAction 访问控制策略中设置的流量通过云防火墙的方式。取值：
accept：放行
drop：拒绝
log：观察
     * @param string $Direction 访问控制策略的流量方向。取值：
in：外对内流量访问控制
out：内对外流量访问控制
     * @param string $Description 访问控制策略的描述信息
     * @param string $SourceType 访问控制策略中的源地址类型。取值：
net：源IP或网段（IP或者CIDR）
location：源区域
template：云防火墙地址模板
instance：实例id
vendor：云厂商
     * @param string $SourceContent 访问控制策略中的源地址。取值：
当SourceType为net时，SourceContent为源IP地址或者CIDR地址。
例如：1.1.1.0/24

当SourceType为template时，SourceContent为源地址模板id。

当SourceType为location时，SourceContent为源区域。
例如["BJ11", "ZB"]

当SourceType为instance时，SourceContent为该实例id对应的公网ip。
例如ins-xxxxx

当SourceType为vendor时，SourceContent为所选择厂商的公网ip列表。
例如：aws,huawei,tencent,aliyun,azure,all代表以上五个
     * @param string $DestType 访问控制策略中的目的地址类型。取值：
net：目的IP或者网段（IP或者CIDR）
location：源区域
template：云防火墙地址模板
instance：实例id
vendor：云厂商
domain: 域名或者ip
     * @param string $DestContent 访问控制策略中的目的地址。取值：
当DestType为net时，DestContent为源IP地址或者CIDR地址。
例如：1.1.1.0/24

当DestType为template时，DestContent为源地址模板id。

当DestType为location时，DestContent为源区域。
例如["BJ11", "ZB"]

当DestType为instance时，DestContent为该实例id对应的公网ip。
例如ins-xxxxx

当DestType为domain时，DestContent为该实例id对应的域名规则。
例如*.qq.com

当DestType为vendor时，DestContent为所选择厂商的公网ip列表。
例如：aws,huawei,tencent,aliyun,azure,all代表以上五个
     * @param string $Port 访问控制策略的端口。取值：
-1/-1：全部端口
80,443：80或者443
     * @param string $Protocol 访问控制策略中流量访问的协议类型。取值：TCP，目前互联网边界规则只能支持TCP，不传参数默认就是TCP
     * @param string $ApplicationName 七层协议，取值：
HTTP/HTTPS
TLS/SSL
     * @param string $Enable 是否启用规则，默认为启用，取值：
true为启用，false为不启用
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
        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceContent",$param) and $param["SourceContent"] !== null) {
            $this->SourceContent = $param["SourceContent"];
        }

        if (array_key_exists("DestType",$param) and $param["DestType"] !== null) {
            $this->DestType = $param["DestType"];
        }

        if (array_key_exists("DestContent",$param) and $param["DestContent"] !== null) {
            $this->DestContent = $param["DestContent"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}

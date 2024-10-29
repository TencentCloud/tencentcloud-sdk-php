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
 * VPC内网间规则
 *
 * @method string getSourceContent() 获取访问源示例：
net：IP/CIDR(192.168.0.2)
 * @method void setSourceContent(string $SourceContent) 设置访问源示例：
net：IP/CIDR(192.168.0.2)
 * @method string getSourceType() 获取访问源类型，类型可以为：net
 * @method void setSourceType(string $SourceType) 设置访问源类型，类型可以为：net
 * @method string getDestContent() 获取访问目的示例：
net：IP/CIDR(192.168.0.2)
domain：域名规则，例如*.qq.com
 * @method void setDestContent(string $DestContent) 设置访问目的示例：
net：IP/CIDR(192.168.0.2)
domain：域名规则，例如*.qq.com
 * @method string getDestType() 获取访问目的类型，类型可以为：net，domain，dnsparse
 * @method void setDestType(string $DestType) 设置访问目的类型，类型可以为：net，domain，dnsparse
 * @method string getProtocol() 获取协议，可选的值：
TCP
UDP
ICMP
ANY
HTTP
HTTPS
HTTP/HTTPS
SMTP
SMTPS
SMTP/SMTPS
FTP
DNS
TLS/SSL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置协议，可选的值：
TCP
UDP
ICMP
ANY
HTTP
HTTPS
HTTP/HTTPS
SMTP
SMTPS
SMTP/SMTPS
FTP
DNS
TLS/SSL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleAction() 获取访问控制策略中设置的流量通过云防火墙的方式。取值：
accept：放行
drop：拒绝
log：观察
 * @method void setRuleAction(string $RuleAction) 设置访问控制策略中设置的流量通过云防火墙的方式。取值：
accept：放行
drop：拒绝
log：观察
 * @method string getPort() 获取访问控制策略的端口。取值：
-1/-1：全部端口
80：80端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(string $Port) 设置访问控制策略的端口。取值：
-1/-1：全部端口
80：80端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method integer getOrderIndex() 获取规则顺序，-1表示最低，1表示最高
 * @method void setOrderIndex(integer $OrderIndex) 设置规则顺序，-1表示最低，1表示最高
 * @method string getEnable() 获取规则状态，true表示启用，false表示禁用
 * @method void setEnable(string $Enable) 设置规则状态，true表示启用，false表示禁用
 * @method string getEdgeId() 获取规则生效的范围，是在哪对vpc之间还是针对所有vpc间生效
 * @method void setEdgeId(string $EdgeId) 设置规则生效的范围，是在哪对vpc之间还是针对所有vpc间生效
 * @method integer getUuid() 获取规则对应的唯一id，添加规则时忽略该字段，修改该规则时需要填写Uuid;查询返回时会返回该参数
 * @method void setUuid(integer $Uuid) 设置规则对应的唯一id，添加规则时忽略该字段，修改该规则时需要填写Uuid;查询返回时会返回该参数
 * @method integer getDetectedTimes() 获取规则的命中次数，增删改查规则时无需传入此参数，主要用于返回查询结果数据
 * @method void setDetectedTimes(integer $DetectedTimes) 设置规则的命中次数，增删改查规则时无需传入此参数，主要用于返回查询结果数据
 * @method string getEdgeName() 获取EdgeId对应的这对VPC间防火墙的描述
 * @method void setEdgeName(string $EdgeName) 设置EdgeId对应的这对VPC间防火墙的描述
 * @method integer getInternalUuid() 获取内部使用的uuid，一般情况下不会使用到该字段
 * @method void setInternalUuid(integer $InternalUuid) 设置内部使用的uuid，一般情况下不会使用到该字段
 * @method integer getDeleted() 获取规则被删除：1，已删除；0，未删除
 * @method void setDeleted(integer $Deleted) 设置规则被删除：1，已删除；0，未删除
 * @method string getFwGroupId() 获取规则生效的防火墙实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFwGroupId(string $FwGroupId) 设置规则生效的防火墙实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFwGroupName() 获取防火墙名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFwGroupName(string $FwGroupName) 设置防火墙名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBetaList() 获取beta任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBetaList(array $BetaList) 设置beta任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamTemplateId() 获取端口协议组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamTemplateId(string $ParamTemplateId) 设置端口协议组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamTemplateName() 获取端口协议组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamTemplateName(string $ParamTemplateName) 设置端口协议组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetName() 获取访问目的名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetName(string $TargetName) 设置访问目的名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceName() 获取访问源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceName(string $SourceName) 设置访问源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIpVersion() 获取Ip版本，0：IPv4，1：IPv6，默认为IPv4
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpVersion(integer $IpVersion) 设置Ip版本，0：IPv4，1：IPv6，默认为IPv4
注意：此字段可能返回 null，表示取不到有效值。
 */
class VpcRuleItem extends AbstractModel
{
    /**
     * @var string 访问源示例：
net：IP/CIDR(192.168.0.2)
     */
    public $SourceContent;

    /**
     * @var string 访问源类型，类型可以为：net
     */
    public $SourceType;

    /**
     * @var string 访问目的示例：
net：IP/CIDR(192.168.0.2)
domain：域名规则，例如*.qq.com
     */
    public $DestContent;

    /**
     * @var string 访问目的类型，类型可以为：net，domain，dnsparse
     */
    public $DestType;

    /**
     * @var string 协议，可选的值：
TCP
UDP
ICMP
ANY
HTTP
HTTPS
HTTP/HTTPS
SMTP
SMTPS
SMTP/SMTPS
FTP
DNS
TLS/SSL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var string 访问控制策略中设置的流量通过云防火墙的方式。取值：
accept：放行
drop：拒绝
log：观察
     */
    public $RuleAction;

    /**
     * @var string 访问控制策略的端口。取值：
-1/-1：全部端口
80：80端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var integer 规则顺序，-1表示最低，1表示最高
     */
    public $OrderIndex;

    /**
     * @var string 规则状态，true表示启用，false表示禁用
     */
    public $Enable;

    /**
     * @var string 规则生效的范围，是在哪对vpc之间还是针对所有vpc间生效
     */
    public $EdgeId;

    /**
     * @var integer 规则对应的唯一id，添加规则时忽略该字段，修改该规则时需要填写Uuid;查询返回时会返回该参数
     */
    public $Uuid;

    /**
     * @var integer 规则的命中次数，增删改查规则时无需传入此参数，主要用于返回查询结果数据
     */
    public $DetectedTimes;

    /**
     * @var string EdgeId对应的这对VPC间防火墙的描述
     */
    public $EdgeName;

    /**
     * @var integer 内部使用的uuid，一般情况下不会使用到该字段
     */
    public $InternalUuid;

    /**
     * @var integer 规则被删除：1，已删除；0，未删除
     */
    public $Deleted;

    /**
     * @var string 规则生效的防火墙实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FwGroupId;

    /**
     * @var string 防火墙名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FwGroupName;

    /**
     * @var array beta任务详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BetaList;

    /**
     * @var string 端口协议组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamTemplateId;

    /**
     * @var string 端口协议组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamTemplateName;

    /**
     * @var string 访问目的名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetName;

    /**
     * @var string 访问源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceName;

    /**
     * @var integer Ip版本，0：IPv4，1：IPv6，默认为IPv4
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpVersion;

    /**
     * @param string $SourceContent 访问源示例：
net：IP/CIDR(192.168.0.2)
     * @param string $SourceType 访问源类型，类型可以为：net
     * @param string $DestContent 访问目的示例：
net：IP/CIDR(192.168.0.2)
domain：域名规则，例如*.qq.com
     * @param string $DestType 访问目的类型，类型可以为：net，domain，dnsparse
     * @param string $Protocol 协议，可选的值：
TCP
UDP
ICMP
ANY
HTTP
HTTPS
HTTP/HTTPS
SMTP
SMTPS
SMTP/SMTPS
FTP
DNS
TLS/SSL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleAction 访问控制策略中设置的流量通过云防火墙的方式。取值：
accept：放行
drop：拒绝
log：观察
     * @param string $Port 访问控制策略的端口。取值：
-1/-1：全部端口
80：80端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
     * @param integer $OrderIndex 规则顺序，-1表示最低，1表示最高
     * @param string $Enable 规则状态，true表示启用，false表示禁用
     * @param string $EdgeId 规则生效的范围，是在哪对vpc之间还是针对所有vpc间生效
     * @param integer $Uuid 规则对应的唯一id，添加规则时忽略该字段，修改该规则时需要填写Uuid;查询返回时会返回该参数
     * @param integer $DetectedTimes 规则的命中次数，增删改查规则时无需传入此参数，主要用于返回查询结果数据
     * @param string $EdgeName EdgeId对应的这对VPC间防火墙的描述
     * @param integer $InternalUuid 内部使用的uuid，一般情况下不会使用到该字段
     * @param integer $Deleted 规则被删除：1，已删除；0，未删除
     * @param string $FwGroupId 规则生效的防火墙实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FwGroupName 防火墙名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BetaList beta任务详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamTemplateId 端口协议组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamTemplateName 端口协议组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetName 访问目的名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceName 访问源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IpVersion Ip版本，0：IPv4，1：IPv6，默认为IPv4
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
        if (array_key_exists("SourceContent",$param) and $param["SourceContent"] !== null) {
            $this->SourceContent = $param["SourceContent"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("DestContent",$param) and $param["DestContent"] !== null) {
            $this->DestContent = $param["DestContent"];
        }

        if (array_key_exists("DestType",$param) and $param["DestType"] !== null) {
            $this->DestType = $param["DestType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("DetectedTimes",$param) and $param["DetectedTimes"] !== null) {
            $this->DetectedTimes = $param["DetectedTimes"];
        }

        if (array_key_exists("EdgeName",$param) and $param["EdgeName"] !== null) {
            $this->EdgeName = $param["EdgeName"];
        }

        if (array_key_exists("InternalUuid",$param) and $param["InternalUuid"] !== null) {
            $this->InternalUuid = $param["InternalUuid"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }

        if (array_key_exists("FwGroupId",$param) and $param["FwGroupId"] !== null) {
            $this->FwGroupId = $param["FwGroupId"];
        }

        if (array_key_exists("FwGroupName",$param) and $param["FwGroupName"] !== null) {
            $this->FwGroupName = $param["FwGroupName"];
        }

        if (array_key_exists("BetaList",$param) and $param["BetaList"] !== null) {
            $this->BetaList = [];
            foreach ($param["BetaList"] as $key => $value){
                $obj = new BetaInfoByACL();
                $obj->deserialize($value);
                array_push($this->BetaList, $obj);
            }
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("ParamTemplateName",$param) and $param["ParamTemplateName"] !== null) {
            $this->ParamTemplateName = $param["ParamTemplateName"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }
    }
}

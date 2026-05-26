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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Clb类型防护对象
 *
 * @method string getObjectId() 获取<p>对象ID</p>
 * @method void setObjectId(string $ObjectId) 设置<p>对象ID</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method array getPreciseDomains() 获取<p>精准域名列表</p>
 * @method void setPreciseDomains(array $PreciseDomains) 设置<p>精准域名列表</p>
 * @method integer getStatus() 获取<p>WAF功能开关状态，0关闭1开启</p>
 * @method void setStatus(integer $Status) 设置<p>WAF功能开关状态，0关闭1开启</p>
 * @method integer getClsStatus() 获取<p>WAF日志开关状态，0关闭1开启</p>
 * @method void setClsStatus(integer $ClsStatus) 设置<p>WAF日志开关状态，0关闭1开启</p>
 * @method string getVirtualDomain() 获取<p>CLB对象对应的虚拟域名</p>
 * @method void setVirtualDomain(string $VirtualDomain) 设置<p>CLB对象对应的虚拟域名</p>
 * @method string getObjectName() 获取<p>对象名称</p>
 * @method void setObjectName(string $ObjectName) 设置<p>对象名称</p>
 * @method array getPublicIp() 获取<p>公网地址</p>
 * @method void setPublicIp(array $PublicIp) 设置<p>公网地址</p>
 * @method array getPrivateIp() 获取<p>内网地址</p>
 * @method void setPrivateIp(array $PrivateIp) 设置<p>内网地址</p>
 * @method string getVpcName() 获取<p>VPC名称</p>
 * @method void setVpcName(string $VpcName) 设置<p>VPC名称</p>
 * @method string getVpc() 获取<p>VPC ID</p>
 * @method void setVpc(string $Vpc) 设置<p>VPC ID</p>
 * @method integer getInstanceLevel() 获取<p>waf实例等级，如果未绑定实例为0</p>
 * @method void setInstanceLevel(integer $InstanceLevel) 设置<p>waf实例等级，如果未绑定实例为0</p>
 * @method integer getPostCLSStatus() 获取<p>clb投递开关</p>
 * @method void setPostCLSStatus(integer $PostCLSStatus) 设置<p>clb投递开关</p>
 * @method integer getPostCKafkaStatus() 获取<p>kafka投递开关</p>
 * @method void setPostCKafkaStatus(integer $PostCKafkaStatus) 设置<p>kafka投递开关</p>
 * @method string getType() 获取<p>对象类型：CLB:负载均衡器，TSE:云原生网关</p>
 * @method void setType(string $Type) 设置<p>对象类型：CLB:负载均衡器，TSE:云原生网关</p>
 * @method string getRegion() 获取<p>对象地域</p>
 * @method void setRegion(string $Region) 设置<p>对象地域</p>
 * @method integer getProxy() 获取<p>代理状态: 0:不开启,1:以XFF的第一个IP地址作为客户端IP,2:以remote_addr作为客户端IP,3:从指定的头部字段获取客户端IP，字段通过IpHeaders字段给出</p>
 * @method void setProxy(integer $Proxy) 设置<p>代理状态: 0:不开启,1:以XFF的第一个IP地址作为客户端IP,2:以remote_addr作为客户端IP,3:从指定的头部字段获取客户端IP，字段通过IpHeaders字段给出</p>
 * @method array getIpHeaders() 获取<p>指定获取客户端IP的头部字段列表。IsCdn为3时有效</p>
 * @method void setIpHeaders(array $IpHeaders) 设置<p>指定获取客户端IP的头部字段列表。IsCdn为3时有效</p>
 * @method integer getBotStatus() 获取<p>bot防护开关</p>
 * @method void setBotStatus(integer $BotStatus) 设置<p>bot防护开关</p>
 * @method integer getApiStatus() 获取<p>api防护开关</p>
 * @method void setApiStatus(integer $ApiStatus) 设置<p>api防护开关</p>
 * @method integer getObjectFlowMode() 获取<p>对象接入模式，0表示镜像模式，1表示清洗模式，2表示体检模式，默认为清洗模式</p>
 * @method void setObjectFlowMode(integer $ObjectFlowMode) 设置<p>对象接入模式，0表示镜像模式，1表示清洗模式，2表示体检模式，默认为清洗模式</p>
 * @method integer getNumericalVpcId() 获取<p>数值形式的私有网络 ID</p>
 * @method void setNumericalVpcId(integer $NumericalVpcId) 设置<p>数值形式的私有网络 ID</p>
 * @method string getModifyTime() 获取<p>修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间</p>
 * @method string getAddTime() 获取<p>创建时间</p>
 * @method void setAddTime(string $AddTime) 设置<p>创建时间</p>
 * @method integer getMemberAppId() 获取<p>跨账号时，表示成员账号的appid</p>
 * @method void setMemberAppId(integer $MemberAppId) 设置<p>跨账号时，表示成员账号的appid</p>
 * @method string getMemberUin() 获取<p>跨账号时，表示成员账号的uin</p>
 * @method void setMemberUin(string $MemberUin) 设置<p>跨账号时，表示成员账号的uin</p>
 * @method string getMemberNickName() 获取<p>跨账号时，表示成员账号的昵称</p>
 * @method void setMemberNickName(string $MemberNickName) 设置<p>跨账号时，表示成员账号的昵称</p>
 * @method array getTagInfos() 获取<p>标签信息</p>
 * @method void setTagInfos(array $TagInfos) 设置<p>标签信息</p>
 * @method array getPreciseDomainDetails() 获取<p>精准域名信息</p>
 * @method void setPreciseDomainDetails(array $PreciseDomainDetails) 设置<p>精准域名信息</p>
 * @method integer getWafAccessStatus() 获取<p>waf接入状态</p>
 * @method void setWafAccessStatus(integer $WafAccessStatus) 设置<p>waf接入状态</p>
 */
class ClbObject extends AbstractModel
{
    /**
     * @var string <p>对象ID</p>
     */
    public $ObjectId;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var array <p>精准域名列表</p>
     */
    public $PreciseDomains;

    /**
     * @var integer <p>WAF功能开关状态，0关闭1开启</p>
     */
    public $Status;

    /**
     * @var integer <p>WAF日志开关状态，0关闭1开启</p>
     */
    public $ClsStatus;

    /**
     * @var string <p>CLB对象对应的虚拟域名</p>
     */
    public $VirtualDomain;

    /**
     * @var string <p>对象名称</p>
     */
    public $ObjectName;

    /**
     * @var array <p>公网地址</p>
     */
    public $PublicIp;

    /**
     * @var array <p>内网地址</p>
     */
    public $PrivateIp;

    /**
     * @var string <p>VPC名称</p>
     */
    public $VpcName;

    /**
     * @var string <p>VPC ID</p>
     */
    public $Vpc;

    /**
     * @var integer <p>waf实例等级，如果未绑定实例为0</p>
     */
    public $InstanceLevel;

    /**
     * @var integer <p>clb投递开关</p>
     */
    public $PostCLSStatus;

    /**
     * @var integer <p>kafka投递开关</p>
     */
    public $PostCKafkaStatus;

    /**
     * @var string <p>对象类型：CLB:负载均衡器，TSE:云原生网关</p>
     */
    public $Type;

    /**
     * @var string <p>对象地域</p>
     */
    public $Region;

    /**
     * @var integer <p>代理状态: 0:不开启,1:以XFF的第一个IP地址作为客户端IP,2:以remote_addr作为客户端IP,3:从指定的头部字段获取客户端IP，字段通过IpHeaders字段给出</p>
     */
    public $Proxy;

    /**
     * @var array <p>指定获取客户端IP的头部字段列表。IsCdn为3时有效</p>
     */
    public $IpHeaders;

    /**
     * @var integer <p>bot防护开关</p>
     */
    public $BotStatus;

    /**
     * @var integer <p>api防护开关</p>
     */
    public $ApiStatus;

    /**
     * @var integer <p>对象接入模式，0表示镜像模式，1表示清洗模式，2表示体检模式，默认为清洗模式</p>
     */
    public $ObjectFlowMode;

    /**
     * @var integer <p>数值形式的私有网络 ID</p>
     */
    public $NumericalVpcId;

    /**
     * @var string <p>修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>创建时间</p>
     */
    public $AddTime;

    /**
     * @var integer <p>跨账号时，表示成员账号的appid</p>
     */
    public $MemberAppId;

    /**
     * @var string <p>跨账号时，表示成员账号的uin</p>
     */
    public $MemberUin;

    /**
     * @var string <p>跨账号时，表示成员账号的昵称</p>
     */
    public $MemberNickName;

    /**
     * @var array <p>标签信息</p>
     */
    public $TagInfos;

    /**
     * @var array <p>精准域名信息</p>
     */
    public $PreciseDomainDetails;

    /**
     * @var integer <p>waf接入状态</p>
     */
    public $WafAccessStatus;

    /**
     * @param string $ObjectId <p>对象ID</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param array $PreciseDomains <p>精准域名列表</p>
     * @param integer $Status <p>WAF功能开关状态，0关闭1开启</p>
     * @param integer $ClsStatus <p>WAF日志开关状态，0关闭1开启</p>
     * @param string $VirtualDomain <p>CLB对象对应的虚拟域名</p>
     * @param string $ObjectName <p>对象名称</p>
     * @param array $PublicIp <p>公网地址</p>
     * @param array $PrivateIp <p>内网地址</p>
     * @param string $VpcName <p>VPC名称</p>
     * @param string $Vpc <p>VPC ID</p>
     * @param integer $InstanceLevel <p>waf实例等级，如果未绑定实例为0</p>
     * @param integer $PostCLSStatus <p>clb投递开关</p>
     * @param integer $PostCKafkaStatus <p>kafka投递开关</p>
     * @param string $Type <p>对象类型：CLB:负载均衡器，TSE:云原生网关</p>
     * @param string $Region <p>对象地域</p>
     * @param integer $Proxy <p>代理状态: 0:不开启,1:以XFF的第一个IP地址作为客户端IP,2:以remote_addr作为客户端IP,3:从指定的头部字段获取客户端IP，字段通过IpHeaders字段给出</p>
     * @param array $IpHeaders <p>指定获取客户端IP的头部字段列表。IsCdn为3时有效</p>
     * @param integer $BotStatus <p>bot防护开关</p>
     * @param integer $ApiStatus <p>api防护开关</p>
     * @param integer $ObjectFlowMode <p>对象接入模式，0表示镜像模式，1表示清洗模式，2表示体检模式，默认为清洗模式</p>
     * @param integer $NumericalVpcId <p>数值形式的私有网络 ID</p>
     * @param string $ModifyTime <p>修改时间</p>
     * @param string $AddTime <p>创建时间</p>
     * @param integer $MemberAppId <p>跨账号时，表示成员账号的appid</p>
     * @param string $MemberUin <p>跨账号时，表示成员账号的uin</p>
     * @param string $MemberNickName <p>跨账号时，表示成员账号的昵称</p>
     * @param array $TagInfos <p>标签信息</p>
     * @param array $PreciseDomainDetails <p>精准域名信息</p>
     * @param integer $WafAccessStatus <p>waf接入状态</p>
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
        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PreciseDomains",$param) and $param["PreciseDomains"] !== null) {
            $this->PreciseDomains = $param["PreciseDomains"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClsStatus",$param) and $param["ClsStatus"] !== null) {
            $this->ClsStatus = $param["ClsStatus"];
        }

        if (array_key_exists("VirtualDomain",$param) and $param["VirtualDomain"] !== null) {
            $this->VirtualDomain = $param["VirtualDomain"];
        }

        if (array_key_exists("ObjectName",$param) and $param["ObjectName"] !== null) {
            $this->ObjectName = $param["ObjectName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = $param["Vpc"];
        }

        if (array_key_exists("InstanceLevel",$param) and $param["InstanceLevel"] !== null) {
            $this->InstanceLevel = $param["InstanceLevel"];
        }

        if (array_key_exists("PostCLSStatus",$param) and $param["PostCLSStatus"] !== null) {
            $this->PostCLSStatus = $param["PostCLSStatus"];
        }

        if (array_key_exists("PostCKafkaStatus",$param) and $param["PostCKafkaStatus"] !== null) {
            $this->PostCKafkaStatus = $param["PostCKafkaStatus"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Proxy",$param) and $param["Proxy"] !== null) {
            $this->Proxy = $param["Proxy"];
        }

        if (array_key_exists("IpHeaders",$param) and $param["IpHeaders"] !== null) {
            $this->IpHeaders = $param["IpHeaders"];
        }

        if (array_key_exists("BotStatus",$param) and $param["BotStatus"] !== null) {
            $this->BotStatus = $param["BotStatus"];
        }

        if (array_key_exists("ApiStatus",$param) and $param["ApiStatus"] !== null) {
            $this->ApiStatus = $param["ApiStatus"];
        }

        if (array_key_exists("ObjectFlowMode",$param) and $param["ObjectFlowMode"] !== null) {
            $this->ObjectFlowMode = $param["ObjectFlowMode"];
        }

        if (array_key_exists("NumericalVpcId",$param) and $param["NumericalVpcId"] !== null) {
            $this->NumericalVpcId = $param["NumericalVpcId"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("MemberAppId",$param) and $param["MemberAppId"] !== null) {
            $this->MemberAppId = $param["MemberAppId"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("MemberNickName",$param) and $param["MemberNickName"] !== null) {
            $this->MemberNickName = $param["MemberNickName"];
        }

        if (array_key_exists("TagInfos",$param) and $param["TagInfos"] !== null) {
            $this->TagInfos = [];
            foreach ($param["TagInfos"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagInfos, $obj);
            }
        }

        if (array_key_exists("PreciseDomainDetails",$param) and $param["PreciseDomainDetails"] !== null) {
            $this->PreciseDomainDetails = [];
            foreach ($param["PreciseDomainDetails"] as $key => $value){
                $obj = new DomainInfo();
                $obj->deserialize($value);
                array_push($this->PreciseDomainDetails, $obj);
            }
        }

        if (array_key_exists("WafAccessStatus",$param) and $param["WafAccessStatus"] !== null) {
            $this->WafAccessStatus = $param["WafAccessStatus"];
        }
    }
}

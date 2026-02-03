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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网关服务
 *
 * @method string getServiceId() 获取服务ID
 * @method void setServiceId(string $ServiceId) 设置服务ID
 * @method string getDomain() 获取服务域名
 * @method void setDomain(string $Domain) 设置服务域名
 * @method integer getOpenTime() 获取开启时间
 * @method void setOpenTime(integer $OpenTime) 设置开启时间
 * @method integer getStatus() 获取绑定状态，1 绑定中；2绑定失败；3绑定成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置绑定状态，1 绑定中；2绑定失败；3绑定成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsPreempted() 获取是否被抢占, 被抢占表示域名被其他环境绑定了，需要解绑或者重新绑定。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPreempted(boolean $IsPreempted) 设置是否被抢占, 被抢占表示域名被其他环境绑定了，需要解绑或者重新绑定。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableRegion() 获取是否开启多地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableRegion(boolean $EnableRegion) 设置是否开启多地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCname() 获取cdn CName地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCname(string $Cname) 设置cdn CName地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnionStatus() 获取统一域名状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnionStatus(integer $UnionStatus) 设置统一域名状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCnameStatus() 获取CName状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCnameStatus(integer $CnameStatus) 设置CName状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertId() 获取证书Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertId(string $CertId) 设置证书Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getForceHttps() 获取是否强制https
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForceHttps(boolean $ForceHttps) 设置是否强制https
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIcpForbidStatus() 获取icp黑名单封禁状态，0-未封禁，1-封禁
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIcpForbidStatus(integer $IcpForbidStatus) 设置icp黑名单封禁状态，0-未封禁，1-封禁
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomRoutingRules() 获取自定义路由规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomRoutingRules(string $CustomRoutingRules) 设置自定义路由规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBindFlag() 获取绑定类型，1绑定cdn，2源站，4自定义
 * @method void setBindFlag(integer $BindFlag) 设置绑定类型，1绑定cdn，2源站，4自定义
 * @method string getOriginCname() 获取TcbIngress源站cname
 * @method void setOriginCname(string $OriginCname) 设置TcbIngress源站cname
 * @method string getCustomCname() 获取自定义cname
 * @method void setCustomCname(string $CustomCname) 设置自定义cname
 */
class CloudBaseGWService extends AbstractModel
{
    /**
     * @var string 服务ID
     */
    public $ServiceId;

    /**
     * @var string 服务域名
     */
    public $Domain;

    /**
     * @var integer 开启时间
     */
    public $OpenTime;

    /**
     * @var integer 绑定状态，1 绑定中；2绑定失败；3绑定成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var boolean 是否被抢占, 被抢占表示域名被其他环境绑定了，需要解绑或者重新绑定。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPreempted;

    /**
     * @var boolean 是否开启多地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableRegion;

    /**
     * @var string cdn CName地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cname;

    /**
     * @var integer 统一域名状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnionStatus;

    /**
     * @var integer CName状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CnameStatus;

    /**
     * @var string 证书Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertId;

    /**
     * @var boolean 是否强制https
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForceHttps;

    /**
     * @var integer icp黑名单封禁状态，0-未封禁，1-封禁
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IcpForbidStatus;

    /**
     * @var string 自定义路由规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomRoutingRules;

    /**
     * @var integer 绑定类型，1绑定cdn，2源站，4自定义
     */
    public $BindFlag;

    /**
     * @var string TcbIngress源站cname
     */
    public $OriginCname;

    /**
     * @var string 自定义cname
     */
    public $CustomCname;

    /**
     * @param string $ServiceId 服务ID
     * @param string $Domain 服务域名
     * @param integer $OpenTime 开启时间
     * @param integer $Status 绑定状态，1 绑定中；2绑定失败；3绑定成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsPreempted 是否被抢占, 被抢占表示域名被其他环境绑定了，需要解绑或者重新绑定。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableRegion 是否开启多地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cname cdn CName地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UnionStatus 统一域名状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CnameStatus CName状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertId 证书Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ForceHttps 是否强制https
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IcpForbidStatus icp黑名单封禁状态，0-未封禁，1-封禁
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomRoutingRules 自定义路由规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BindFlag 绑定类型，1绑定cdn，2源站，4自定义
     * @param string $OriginCname TcbIngress源站cname
     * @param string $CustomCname 自定义cname
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("OpenTime",$param) and $param["OpenTime"] !== null) {
            $this->OpenTime = $param["OpenTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsPreempted",$param) and $param["IsPreempted"] !== null) {
            $this->IsPreempted = $param["IsPreempted"];
        }

        if (array_key_exists("EnableRegion",$param) and $param["EnableRegion"] !== null) {
            $this->EnableRegion = $param["EnableRegion"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("UnionStatus",$param) and $param["UnionStatus"] !== null) {
            $this->UnionStatus = $param["UnionStatus"];
        }

        if (array_key_exists("CnameStatus",$param) and $param["CnameStatus"] !== null) {
            $this->CnameStatus = $param["CnameStatus"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("ForceHttps",$param) and $param["ForceHttps"] !== null) {
            $this->ForceHttps = $param["ForceHttps"];
        }

        if (array_key_exists("IcpForbidStatus",$param) and $param["IcpForbidStatus"] !== null) {
            $this->IcpForbidStatus = $param["IcpForbidStatus"];
        }

        if (array_key_exists("CustomRoutingRules",$param) and $param["CustomRoutingRules"] !== null) {
            $this->CustomRoutingRules = $param["CustomRoutingRules"];
        }

        if (array_key_exists("BindFlag",$param) and $param["BindFlag"] !== null) {
            $this->BindFlag = $param["BindFlag"];
        }

        if (array_key_exists("OriginCname",$param) and $param["OriginCname"] !== null) {
            $this->OriginCname = $param["OriginCname"];
        }

        if (array_key_exists("CustomCname",$param) and $param["CustomCname"] !== null) {
            $this->CustomCname = $param["CustomCname"];
        }
    }
}

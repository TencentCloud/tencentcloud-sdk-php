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
 * tcb 网关API
 *
 * @method string getServiceId() 获取服务ID
 * @method void setServiceId(string $ServiceId) 设置服务ID
 * @method string getAPIId() 获取API ID
 * @method void setAPIId(string $APIId) 设置API ID
 * @method string getPath() 获取API Path
 * @method void setPath(string $Path) 设置API Path
 * @method integer getType() 获取API 类型
 * @method void setType(integer $Type) 设置API 类型
 * @method string getName() 获取API 名
 * @method void setName(string $Name) 设置API 名
 * @method integer getCreateTime() 获取API创建时间
 * @method void setCreateTime(integer $CreateTime) 设置API创建时间
 * @method string getCustom() 获取自定义值通用字段：
Type为1时，该值为空。
Type为2时，该值为容器的代理IP:PORT数组。
 * @method void setCustom(string $Custom) 设置自定义值通用字段：
Type为1时，该值为空。
Type为2时，该值为容器的代理IP:PORT数组。
 * @method boolean getEnableAuth() 获取表示是否开启认证
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableAuth(boolean $EnableAuth) 设置表示是否开启认证
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvId() 获取云开发环境ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvId(string $EnvId) 设置云开发环境ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAccessType() 获取访问类型（该参数暂不对外暴露）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessType(integer $AccessType) 设置访问类型（该参数暂不对外暴露）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnionStatus() 获取统一发布状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnionStatus(integer $UnionStatus) 设置统一发布状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取域名（*表示所有域名）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置域名（*表示所有域名）
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getConflictFlag() 获取是否有路径冲突
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConflictFlag(boolean $ConflictFlag) 设置是否有路径冲突
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDomainStatus() 获取域名状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainStatus(integer $DomainStatus) 设置域名状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsShortPath() 获取是否开启路径透传，默认true表示短路径，即不开启(已弃用)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsShortPath(boolean $IsShortPath) 设置是否开启路径透传，默认true表示短路径，即不开启(已弃用)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPathTransmission() 获取路径透传，默认0关闭，1开启，2关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathTransmission(integer $PathTransmission) 设置路径透传，默认0关闭，1开启，2关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableCheckAcrossDomain() 获取跨域校验，默认0开启，1开启，2关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableCheckAcrossDomain(integer $EnableCheckAcrossDomain) 设置跨域校验，默认0开启，1开启，2关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStaticFileDirectory() 获取静态托管文件目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStaticFileDirectory(string $StaticFileDirectory) 设置静态托管文件目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method CloudBaseGWAPIQPSPolicy getQPSPolicy() 获取QPS策略
 * @method void setQPSPolicy(CloudBaseGWAPIQPSPolicy $QPSPolicy) 设置QPS策略
 */
class CloudBaseGWAPI extends AbstractModel
{
    /**
     * @var string 服务ID
     */
    public $ServiceId;

    /**
     * @var string API ID
     */
    public $APIId;

    /**
     * @var string API Path
     */
    public $Path;

    /**
     * @var integer API 类型
     */
    public $Type;

    /**
     * @var string API 名
     */
    public $Name;

    /**
     * @var integer API创建时间
     */
    public $CreateTime;

    /**
     * @var string 自定义值通用字段：
Type为1时，该值为空。
Type为2时，该值为容器的代理IP:PORT数组。
     */
    public $Custom;

    /**
     * @var boolean 表示是否开启认证
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableAuth;

    /**
     * @var string 云开发环境ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvId;

    /**
     * @var integer 访问类型（该参数暂不对外暴露）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessType;

    /**
     * @var integer 统一发布状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnionStatus;

    /**
     * @var string 域名（*表示所有域名）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var boolean 是否有路径冲突
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConflictFlag;

    /**
     * @var integer 域名状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainStatus;

    /**
     * @var boolean 是否开启路径透传，默认true表示短路径，即不开启(已弃用)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsShortPath;

    /**
     * @var integer 路径透传，默认0关闭，1开启，2关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathTransmission;

    /**
     * @var integer 跨域校验，默认0开启，1开启，2关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableCheckAcrossDomain;

    /**
     * @var string 静态托管文件目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StaticFileDirectory;

    /**
     * @var CloudBaseGWAPIQPSPolicy QPS策略
     */
    public $QPSPolicy;

    /**
     * @param string $ServiceId 服务ID
     * @param string $APIId API ID
     * @param string $Path API Path
     * @param integer $Type API 类型
     * @param string $Name API 名
     * @param integer $CreateTime API创建时间
     * @param string $Custom 自定义值通用字段：
Type为1时，该值为空。
Type为2时，该值为容器的代理IP:PORT数组。
     * @param boolean $EnableAuth 表示是否开启认证
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnvId 云开发环境ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AccessType 访问类型（该参数暂不对外暴露）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UnionStatus 统一发布状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 域名（*表示所有域名）
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ConflictFlag 是否有路径冲突
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DomainStatus 域名状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsShortPath 是否开启路径透传，默认true表示短路径，即不开启(已弃用)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PathTransmission 路径透传，默认0关闭，1开启，2关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableCheckAcrossDomain 跨域校验，默认0开启，1开启，2关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StaticFileDirectory 静态托管文件目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param CloudBaseGWAPIQPSPolicy $QPSPolicy QPS策略
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

        if (array_key_exists("APIId",$param) and $param["APIId"] !== null) {
            $this->APIId = $param["APIId"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Custom",$param) and $param["Custom"] !== null) {
            $this->Custom = $param["Custom"];
        }

        if (array_key_exists("EnableAuth",$param) and $param["EnableAuth"] !== null) {
            $this->EnableAuth = $param["EnableAuth"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("UnionStatus",$param) and $param["UnionStatus"] !== null) {
            $this->UnionStatus = $param["UnionStatus"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ConflictFlag",$param) and $param["ConflictFlag"] !== null) {
            $this->ConflictFlag = $param["ConflictFlag"];
        }

        if (array_key_exists("DomainStatus",$param) and $param["DomainStatus"] !== null) {
            $this->DomainStatus = $param["DomainStatus"];
        }

        if (array_key_exists("IsShortPath",$param) and $param["IsShortPath"] !== null) {
            $this->IsShortPath = $param["IsShortPath"];
        }

        if (array_key_exists("PathTransmission",$param) and $param["PathTransmission"] !== null) {
            $this->PathTransmission = $param["PathTransmission"];
        }

        if (array_key_exists("EnableCheckAcrossDomain",$param) and $param["EnableCheckAcrossDomain"] !== null) {
            $this->EnableCheckAcrossDomain = $param["EnableCheckAcrossDomain"];
        }

        if (array_key_exists("StaticFileDirectory",$param) and $param["StaticFileDirectory"] !== null) {
            $this->StaticFileDirectory = $param["StaticFileDirectory"];
        }

        if (array_key_exists("QPSPolicy",$param) and $param["QPSPolicy"] !== null) {
            $this->QPSPolicy = new CloudBaseGWAPIQPSPolicy();
            $this->QPSPolicy->deserialize($param["QPSPolicy"]);
        }
    }
}

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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getProductId() 获取产品ID
 * @method void setProductId(integer $ProductId) 设置产品ID
 * @method VPCSettings getVPCSettings() 获取VPC设置参数
 * @method void setVPCSettings(VPCSettings $VPCSettings) 设置VPC设置参数
 * @method array getSoftware() 获取软件列表
 * @method void setSoftware(array $Software) 设置软件列表
 * @method NewResourceSpec getResourceSpec() 获取资源描述
 * @method void setResourceSpec(NewResourceSpec $ResourceSpec) 设置资源描述
 * @method integer getSupportHA() 获取支持HA
 * @method void setSupportHA(integer $SupportHA) 设置支持HA
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getPayMode() 获取计费类型
 * @method void setPayMode(integer $PayMode) 设置计费类型
 * @method Placement getPlacement() 获取集群位置信息
 * @method void setPlacement(Placement $Placement) 设置集群位置信息
 * @method integer getTimeSpan() 获取时间长度
 * @method void setTimeSpan(integer $TimeSpan) 设置时间长度
 * @method string getTimeUnit() 获取时间单位
 * @method void setTimeUnit(string $TimeUnit) 设置时间单位
 * @method LoginSettings getLoginSettings() 获取登录配置
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置登录配置
 * @method COSSettings getCOSSettings() 获取COS设置参数
 * @method void setCOSSettings(COSSettings $COSSettings) 设置COS设置参数
 * @method string getSgId() 获取安全组ID
 * @method void setSgId(string $SgId) 设置安全组ID
 * @method array getPreExecutedFileSettings() 获取预执行脚本设置
 * @method void setPreExecutedFileSettings(array $PreExecutedFileSettings) 设置预执行脚本设置
 * @method integer getAutoRenew() 获取自动续费
 * @method void setAutoRenew(integer $AutoRenew) 设置自动续费
 * @method string getClientToken() 获取客户端Token
 * @method void setClientToken(string $ClientToken) 设置客户端Token
 * @method string getNeedMasterWan() 获取是否需要外网Ip。支持填NEED_MASTER_WAN，不支持使用NOT_NEED_MASTER_WAN，默认使用NEED_MASTER_WAN
 * @method void setNeedMasterWan(string $NeedMasterWan) 设置是否需要外网Ip。支持填NEED_MASTER_WAN，不支持使用NOT_NEED_MASTER_WAN，默认使用NEED_MASTER_WAN
 * @method integer getRemoteLoginAtCreate() 获取是否需要开启外网远程登录，即22号端口，在SgId不为空时，该选项无效
 * @method void setRemoteLoginAtCreate(integer $RemoteLoginAtCreate) 设置是否需要开启外网远程登录，即22号端口，在SgId不为空时，该选项无效
 * @method integer getCheckSecurity() 获取是否开启安全集群，0表示不开启，非0表示开启
 * @method void setCheckSecurity(integer $CheckSecurity) 设置是否开启安全集群，0表示不开启，非0表示开启
 * @method string getExtendFsField() 获取访问外部文件系统
 * @method void setExtendFsField(string $ExtendFsField) 设置访问外部文件系统
 */

/**
 *CreateInstance请求参数结构体
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var integer 产品ID
     */
    public $ProductId;

    /**
     * @var VPCSettings VPC设置参数
     */
    public $VPCSettings;

    /**
     * @var array 软件列表
     */
    public $Software;

    /**
     * @var NewResourceSpec 资源描述
     */
    public $ResourceSpec;

    /**
     * @var integer 支持HA
     */
    public $SupportHA;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 计费类型
     */
    public $PayMode;

    /**
     * @var Placement 集群位置信息
     */
    public $Placement;

    /**
     * @var integer 时间长度
     */
    public $TimeSpan;

    /**
     * @var string 时间单位
     */
    public $TimeUnit;

    /**
     * @var LoginSettings 登录配置
     */
    public $LoginSettings;

    /**
     * @var COSSettings COS设置参数
     */
    public $COSSettings;

    /**
     * @var string 安全组ID
     */
    public $SgId;

    /**
     * @var array 预执行脚本设置
     */
    public $PreExecutedFileSettings;

    /**
     * @var integer 自动续费
     */
    public $AutoRenew;

    /**
     * @var string 客户端Token
     */
    public $ClientToken;

    /**
     * @var string 是否需要外网Ip。支持填NEED_MASTER_WAN，不支持使用NOT_NEED_MASTER_WAN，默认使用NEED_MASTER_WAN
     */
    public $NeedMasterWan;

    /**
     * @var integer 是否需要开启外网远程登录，即22号端口，在SgId不为空时，该选项无效
     */
    public $RemoteLoginAtCreate;

    /**
     * @var integer 是否开启安全集群，0表示不开启，非0表示开启
     */
    public $CheckSecurity;

    /**
     * @var string 访问外部文件系统
     */
    public $ExtendFsField;
    /**
     * @param integer $ProductId 产品ID
     * @param VPCSettings $VPCSettings VPC设置参数
     * @param array $Software 软件列表
     * @param NewResourceSpec $ResourceSpec 资源描述
     * @param integer $SupportHA 支持HA
     * @param string $InstanceName 实例名称
     * @param integer $PayMode 计费类型
     * @param Placement $Placement 集群位置信息
     * @param integer $TimeSpan 时间长度
     * @param string $TimeUnit 时间单位
     * @param LoginSettings $LoginSettings 登录配置
     * @param COSSettings $COSSettings COS设置参数
     * @param string $SgId 安全组ID
     * @param array $PreExecutedFileSettings 预执行脚本设置
     * @param integer $AutoRenew 自动续费
     * @param string $ClientToken 客户端Token
     * @param string $NeedMasterWan 是否需要外网Ip。支持填NEED_MASTER_WAN，不支持使用NOT_NEED_MASTER_WAN，默认使用NEED_MASTER_WAN
     * @param integer $RemoteLoginAtCreate 是否需要开启外网远程登录，即22号端口，在SgId不为空时，该选项无效
     * @param integer $CheckSecurity 是否开启安全集群，0表示不开启，非0表示开启
     * @param string $ExtendFsField 访问外部文件系统
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("VPCSettings",$param) and $param["VPCSettings"] !== null) {
            $this->VPCSettings = new VPCSettings();
            $this->VPCSettings->deserialize($param["VPCSettings"]);
        }

        if (array_key_exists("Software",$param) and $param["Software"] !== null) {
            $this->Software = $param["Software"];
        }

        if (array_key_exists("ResourceSpec",$param) and $param["ResourceSpec"] !== null) {
            $this->ResourceSpec = new NewResourceSpec();
            $this->ResourceSpec->deserialize($param["ResourceSpec"]);
        }

        if (array_key_exists("SupportHA",$param) and $param["SupportHA"] !== null) {
            $this->SupportHA = $param["SupportHA"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("COSSettings",$param) and $param["COSSettings"] !== null) {
            $this->COSSettings = new COSSettings();
            $this->COSSettings->deserialize($param["COSSettings"]);
        }

        if (array_key_exists("SgId",$param) and $param["SgId"] !== null) {
            $this->SgId = $param["SgId"];
        }

        if (array_key_exists("PreExecutedFileSettings",$param) and $param["PreExecutedFileSettings"] !== null) {
            $this->PreExecutedFileSettings = [];
            foreach ($param["PreExecutedFileSettings"] as $key => $value){
                $obj = new PreExecuteFileSettings();
                $obj->deserialize($value);
                array_push($this->PreExecutedFileSettings, $obj);
            }
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("NeedMasterWan",$param) and $param["NeedMasterWan"] !== null) {
            $this->NeedMasterWan = $param["NeedMasterWan"];
        }

        if (array_key_exists("RemoteLoginAtCreate",$param) and $param["RemoteLoginAtCreate"] !== null) {
            $this->RemoteLoginAtCreate = $param["RemoteLoginAtCreate"];
        }

        if (array_key_exists("CheckSecurity",$param) and $param["CheckSecurity"] !== null) {
            $this->CheckSecurity = $param["CheckSecurity"];
        }

        if (array_key_exists("ExtendFsField",$param) and $param["ExtendFsField"] !== null) {
            $this->ExtendFsField = $param["ExtendFsField"];
        }
    }
}

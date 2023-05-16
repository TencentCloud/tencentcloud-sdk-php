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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境具体信息
 *
 * @method string getEnvName() 获取环境名称
 * @method void setEnvName(string $EnvName) 设置环境名称
 * @method array getVpcInfos() 获取环境对应的网络信息
 * @method void setVpcInfos(array $VpcInfos) 设置环境对应的网络信息
 * @method integer getStorageCapacity() 获取云硬盘容量
 * @method void setStorageCapacity(integer $StorageCapacity) 设置云硬盘容量
 * @method string getStatus() 获取运行状态
 * @method void setStatus(string $Status) 设置运行状态
 * @method string getAdminServiceIp() 获取Admin service 访问地址
 * @method void setAdminServiceIp(string $AdminServiceIp) 设置Admin service 访问地址
 * @method string getConfigServiceIp() 获取Config service访问地址
 * @method void setConfigServiceIp(string $ConfigServiceIp) 设置Config service访问地址
 * @method boolean getEnableConfigInternet() 获取是否开启config-server公网
 * @method void setEnableConfigInternet(boolean $EnableConfigInternet) 设置是否开启config-server公网
 * @method string getConfigInternetServiceIp() 获取config-server公网访问地址
 * @method void setConfigInternetServiceIp(string $ConfigInternetServiceIp) 设置config-server公网访问地址
 * @method string getSpecId() 获取规格ID
 * @method void setSpecId(string $SpecId) 设置规格ID
 * @method integer getEnvReplica() 获取环境的节点数
 * @method void setEnvReplica(integer $EnvReplica) 设置环境的节点数
 * @method integer getRunningCount() 获取环境运行的节点数
 * @method void setRunningCount(integer $RunningCount) 设置环境运行的节点数
 * @method string getAliasEnvName() 获取环境别名
 * @method void setAliasEnvName(string $AliasEnvName) 设置环境别名
 * @method string getEnvDesc() 获取环境描述
 * @method void setEnvDesc(string $EnvDesc) 设置环境描述
 * @method integer getClientBandWidth() 获取客户端带宽
 * @method void setClientBandWidth(integer $ClientBandWidth) 设置客户端带宽
 * @method boolean getEnableConfigIntranet() 获取客户端内网开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableConfigIntranet(boolean $EnableConfigIntranet) 设置客户端内网开关
注意：此字段可能返回 null，表示取不到有效值。
 */
class EnvInfo extends AbstractModel
{
    /**
     * @var string 环境名称
     */
    public $EnvName;

    /**
     * @var array 环境对应的网络信息
     */
    public $VpcInfos;

    /**
     * @var integer 云硬盘容量
     */
    public $StorageCapacity;

    /**
     * @var string 运行状态
     */
    public $Status;

    /**
     * @var string Admin service 访问地址
     */
    public $AdminServiceIp;

    /**
     * @var string Config service访问地址
     */
    public $ConfigServiceIp;

    /**
     * @var boolean 是否开启config-server公网
     */
    public $EnableConfigInternet;

    /**
     * @var string config-server公网访问地址
     */
    public $ConfigInternetServiceIp;

    /**
     * @var string 规格ID
     */
    public $SpecId;

    /**
     * @var integer 环境的节点数
     */
    public $EnvReplica;

    /**
     * @var integer 环境运行的节点数
     */
    public $RunningCount;

    /**
     * @var string 环境别名
     */
    public $AliasEnvName;

    /**
     * @var string 环境描述
     */
    public $EnvDesc;

    /**
     * @var integer 客户端带宽
     */
    public $ClientBandWidth;

    /**
     * @var boolean 客户端内网开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableConfigIntranet;

    /**
     * @param string $EnvName 环境名称
     * @param array $VpcInfos 环境对应的网络信息
     * @param integer $StorageCapacity 云硬盘容量
     * @param string $Status 运行状态
     * @param string $AdminServiceIp Admin service 访问地址
     * @param string $ConfigServiceIp Config service访问地址
     * @param boolean $EnableConfigInternet 是否开启config-server公网
     * @param string $ConfigInternetServiceIp config-server公网访问地址
     * @param string $SpecId 规格ID
     * @param integer $EnvReplica 环境的节点数
     * @param integer $RunningCount 环境运行的节点数
     * @param string $AliasEnvName 环境别名
     * @param string $EnvDesc 环境描述
     * @param integer $ClientBandWidth 客户端带宽
     * @param boolean $EnableConfigIntranet 客户端内网开关
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
        if (array_key_exists("EnvName",$param) and $param["EnvName"] !== null) {
            $this->EnvName = $param["EnvName"];
        }

        if (array_key_exists("VpcInfos",$param) and $param["VpcInfos"] !== null) {
            $this->VpcInfos = [];
            foreach ($param["VpcInfos"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcInfos, $obj);
            }
        }

        if (array_key_exists("StorageCapacity",$param) and $param["StorageCapacity"] !== null) {
            $this->StorageCapacity = $param["StorageCapacity"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AdminServiceIp",$param) and $param["AdminServiceIp"] !== null) {
            $this->AdminServiceIp = $param["AdminServiceIp"];
        }

        if (array_key_exists("ConfigServiceIp",$param) and $param["ConfigServiceIp"] !== null) {
            $this->ConfigServiceIp = $param["ConfigServiceIp"];
        }

        if (array_key_exists("EnableConfigInternet",$param) and $param["EnableConfigInternet"] !== null) {
            $this->EnableConfigInternet = $param["EnableConfigInternet"];
        }

        if (array_key_exists("ConfigInternetServiceIp",$param) and $param["ConfigInternetServiceIp"] !== null) {
            $this->ConfigInternetServiceIp = $param["ConfigInternetServiceIp"];
        }

        if (array_key_exists("SpecId",$param) and $param["SpecId"] !== null) {
            $this->SpecId = $param["SpecId"];
        }

        if (array_key_exists("EnvReplica",$param) and $param["EnvReplica"] !== null) {
            $this->EnvReplica = $param["EnvReplica"];
        }

        if (array_key_exists("RunningCount",$param) and $param["RunningCount"] !== null) {
            $this->RunningCount = $param["RunningCount"];
        }

        if (array_key_exists("AliasEnvName",$param) and $param["AliasEnvName"] !== null) {
            $this->AliasEnvName = $param["AliasEnvName"];
        }

        if (array_key_exists("EnvDesc",$param) and $param["EnvDesc"] !== null) {
            $this->EnvDesc = $param["EnvDesc"];
        }

        if (array_key_exists("ClientBandWidth",$param) and $param["ClientBandWidth"] !== null) {
            $this->ClientBandWidth = $param["ClientBandWidth"];
        }

        if (array_key_exists("EnableConfigIntranet",$param) and $param["EnableConfigIntranet"] !== null) {
            $this->EnableConfigIntranet = $param["EnableConfigIntranet"];
        }
    }
}

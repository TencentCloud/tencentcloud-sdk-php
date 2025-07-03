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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateFunctionConfiguration请求参数结构体
 *
 * @method string getFunctionName() 获取要修改的函数名称
 * @method void setFunctionName(string $FunctionName) 设置要修改的函数名称
 * @method string getDescription() 获取函数描述。最大支持 1000 个英文字母、数字、空格、逗号和英文句号，支持中文
 * @method void setDescription(string $Description) 设置函数描述。最大支持 1000 个英文字母、数字、空格、逗号和英文句号，支持中文
 * @method integer getMemorySize() 获取函数运行时内存大小，默认为 128 M，可选范64M、128 M-3072 M，以 128MB 为阶梯。
 * @method void setMemorySize(integer $MemorySize) 设置函数运行时内存大小，默认为 128 M，可选范64M、128 M-3072 M，以 128MB 为阶梯。
 * @method integer getTimeout() 获取函数最长执行时间，单位为秒，可选值范 1-900 秒，默认为 3 秒
 * @method void setTimeout(integer $Timeout) 设置函数最长执行时间，单位为秒，可选值范 1-900 秒，默认为 3 秒
 * @method string getRuntime() 获取函数运行环境，创建时指定，目前不支持修改。
 * @method void setRuntime(string $Runtime) 设置函数运行环境，创建时指定，目前不支持修改。
 * @method Environment getEnvironment() 获取函数的环境变量
 * @method void setEnvironment(Environment $Environment) 设置函数的环境变量
 * @method string getNamespace() 获取函数所属命名空间
默认值: default
 * @method void setNamespace(string $Namespace) 设置函数所属命名空间
默认值: default
 * @method VpcConfig getVpcConfig() 获取函数的私有网络配置
 * @method void setVpcConfig(VpcConfig $VpcConfig) 设置函数的私有网络配置
 * @method string getRole() 获取函数绑定的角色
 * @method void setRole(string $Role) 设置函数绑定的角色
 * @method string getInstallDependency() 获取[在线依赖安装](https://cloud.tencent.com/document/product/583/37920)，TRUE 表示安装，默认值为 FALSE。仅支持 Node.js 函数。
 * @method void setInstallDependency(string $InstallDependency) 设置[在线依赖安装](https://cloud.tencent.com/document/product/583/37920)，TRUE 表示安装，默认值为 FALSE。仅支持 Node.js 函数。
 * @method string getClsLogsetId() 获取日志投递到的cls日志集ID
 * @method void setClsLogsetId(string $ClsLogsetId) 设置日志投递到的cls日志集ID
 * @method string getClsTopicId() 获取日志投递到的cls Topic ID
 * @method void setClsTopicId(string $ClsTopicId) 设置日志投递到的cls Topic ID
 * @method string getPublish() 获取在更新时是否同步发布新版本，默认为：FALSE，不发布新版本
 * @method void setPublish(string $Publish) 设置在更新时是否同步发布新版本，默认为：FALSE，不发布新版本
 * @method string getL5Enable() 获取是否开启L5访问能力，TRUE 为开启，FALSE为关闭
 * @method void setL5Enable(string $L5Enable) 设置是否开启L5访问能力，TRUE 为开启，FALSE为关闭
 * @method array getLayers() 获取函数要关联的层版本列表，层的版本会按照在列表中顺序依次覆盖。
 * @method void setLayers(array $Layers) 设置函数要关联的层版本列表，层的版本会按照在列表中顺序依次覆盖。
 * @method DeadLetterConfig getDeadLetterConfig() 获取函数关联的死信队列信息
 * @method void setDeadLetterConfig(DeadLetterConfig $DeadLetterConfig) 设置函数关联的死信队列信息
 * @method PublicNetConfigIn getPublicNetConfig() 获取公网访问配置
 * @method void setPublicNetConfig(PublicNetConfigIn $PublicNetConfig) 设置公网访问配置
 * @method CfsConfig getCfsConfig() 获取文件系统配置入参，用于云函数绑定CFS文件系统
 * @method void setCfsConfig(CfsConfig $CfsConfig) 设置文件系统配置入参，用于云函数绑定CFS文件系统
 * @method integer getInitTimeout() 获取函数初始化执行超时时间
 * @method void setInitTimeout(integer $InitTimeout) 设置函数初始化执行超时时间
 * @method ProtocolParams getProtocolParams() 获取HTTP函数配置ProtocolType访问协议，当前协议可配置的参数
 * @method void setProtocolParams(ProtocolParams $ProtocolParams) 设置HTTP函数配置ProtocolType访问协议，当前协议可配置的参数
 * @method InstanceConcurrencyConfig getInstanceConcurrencyConfig() 获取单实例多并发配置。只支持Web函数。
 * @method void setInstanceConcurrencyConfig(InstanceConcurrencyConfig $InstanceConcurrencyConfig) 设置单实例多并发配置。只支持Web函数。
 * @method string getDnsCache() 获取是否开启Dns缓存能力。只支持EVENT函数。默认为FALSE，TRUE 为开启，FALSE为关闭
 * @method void setDnsCache(string $DnsCache) 设置是否开启Dns缓存能力。只支持EVENT函数。默认为FALSE，TRUE 为开启，FALSE为关闭
 * @method IntranetConfigIn getIntranetConfig() 获取内网访问配置
 * @method void setIntranetConfig(IntranetConfigIn $IntranetConfig) 设置内网访问配置
 * @method boolean getIgnoreSysLog() 获取忽略系统日志上报
 * @method void setIgnoreSysLog(boolean $IgnoreSysLog) 设置忽略系统日志上报
 */
class UpdateFunctionConfigurationRequest extends AbstractModel
{
    /**
     * @var string 要修改的函数名称
     */
    public $FunctionName;

    /**
     * @var string 函数描述。最大支持 1000 个英文字母、数字、空格、逗号和英文句号，支持中文
     */
    public $Description;

    /**
     * @var integer 函数运行时内存大小，默认为 128 M，可选范64M、128 M-3072 M，以 128MB 为阶梯。
     */
    public $MemorySize;

    /**
     * @var integer 函数最长执行时间，单位为秒，可选值范 1-900 秒，默认为 3 秒
     */
    public $Timeout;

    /**
     * @var string 函数运行环境，创建时指定，目前不支持修改。
     */
    public $Runtime;

    /**
     * @var Environment 函数的环境变量
     */
    public $Environment;

    /**
     * @var string 函数所属命名空间
默认值: default
     */
    public $Namespace;

    /**
     * @var VpcConfig 函数的私有网络配置
     */
    public $VpcConfig;

    /**
     * @var string 函数绑定的角色
     */
    public $Role;

    /**
     * @var string [在线依赖安装](https://cloud.tencent.com/document/product/583/37920)，TRUE 表示安装，默认值为 FALSE。仅支持 Node.js 函数。
     */
    public $InstallDependency;

    /**
     * @var string 日志投递到的cls日志集ID
     */
    public $ClsLogsetId;

    /**
     * @var string 日志投递到的cls Topic ID
     */
    public $ClsTopicId;

    /**
     * @var string 在更新时是否同步发布新版本，默认为：FALSE，不发布新版本
     */
    public $Publish;

    /**
     * @var string 是否开启L5访问能力，TRUE 为开启，FALSE为关闭
     */
    public $L5Enable;

    /**
     * @var array 函数要关联的层版本列表，层的版本会按照在列表中顺序依次覆盖。
     */
    public $Layers;

    /**
     * @var DeadLetterConfig 函数关联的死信队列信息
     */
    public $DeadLetterConfig;

    /**
     * @var PublicNetConfigIn 公网访问配置
     */
    public $PublicNetConfig;

    /**
     * @var CfsConfig 文件系统配置入参，用于云函数绑定CFS文件系统
     */
    public $CfsConfig;

    /**
     * @var integer 函数初始化执行超时时间
     */
    public $InitTimeout;

    /**
     * @var ProtocolParams HTTP函数配置ProtocolType访问协议，当前协议可配置的参数
     */
    public $ProtocolParams;

    /**
     * @var InstanceConcurrencyConfig 单实例多并发配置。只支持Web函数。
     */
    public $InstanceConcurrencyConfig;

    /**
     * @var string 是否开启Dns缓存能力。只支持EVENT函数。默认为FALSE，TRUE 为开启，FALSE为关闭
     */
    public $DnsCache;

    /**
     * @var IntranetConfigIn 内网访问配置
     */
    public $IntranetConfig;

    /**
     * @var boolean 忽略系统日志上报
     */
    public $IgnoreSysLog;

    /**
     * @param string $FunctionName 要修改的函数名称
     * @param string $Description 函数描述。最大支持 1000 个英文字母、数字、空格、逗号和英文句号，支持中文
     * @param integer $MemorySize 函数运行时内存大小，默认为 128 M，可选范64M、128 M-3072 M，以 128MB 为阶梯。
     * @param integer $Timeout 函数最长执行时间，单位为秒，可选值范 1-900 秒，默认为 3 秒
     * @param string $Runtime 函数运行环境，创建时指定，目前不支持修改。
     * @param Environment $Environment 函数的环境变量
     * @param string $Namespace 函数所属命名空间
默认值: default
     * @param VpcConfig $VpcConfig 函数的私有网络配置
     * @param string $Role 函数绑定的角色
     * @param string $InstallDependency [在线依赖安装](https://cloud.tencent.com/document/product/583/37920)，TRUE 表示安装，默认值为 FALSE。仅支持 Node.js 函数。
     * @param string $ClsLogsetId 日志投递到的cls日志集ID
     * @param string $ClsTopicId 日志投递到的cls Topic ID
     * @param string $Publish 在更新时是否同步发布新版本，默认为：FALSE，不发布新版本
     * @param string $L5Enable 是否开启L5访问能力，TRUE 为开启，FALSE为关闭
     * @param array $Layers 函数要关联的层版本列表，层的版本会按照在列表中顺序依次覆盖。
     * @param DeadLetterConfig $DeadLetterConfig 函数关联的死信队列信息
     * @param PublicNetConfigIn $PublicNetConfig 公网访问配置
     * @param CfsConfig $CfsConfig 文件系统配置入参，用于云函数绑定CFS文件系统
     * @param integer $InitTimeout 函数初始化执行超时时间
     * @param ProtocolParams $ProtocolParams HTTP函数配置ProtocolType访问协议，当前协议可配置的参数
     * @param InstanceConcurrencyConfig $InstanceConcurrencyConfig 单实例多并发配置。只支持Web函数。
     * @param string $DnsCache 是否开启Dns缓存能力。只支持EVENT函数。默认为FALSE，TRUE 为开启，FALSE为关闭
     * @param IntranetConfigIn $IntranetConfig 内网访问配置
     * @param boolean $IgnoreSysLog 忽略系统日志上报
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MemorySize",$param) and $param["MemorySize"] !== null) {
            $this->MemorySize = $param["MemorySize"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = new Environment();
            $this->Environment->deserialize($param["Environment"]);
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("VpcConfig",$param) and $param["VpcConfig"] !== null) {
            $this->VpcConfig = new VpcConfig();
            $this->VpcConfig->deserialize($param["VpcConfig"]);
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("InstallDependency",$param) and $param["InstallDependency"] !== null) {
            $this->InstallDependency = $param["InstallDependency"];
        }

        if (array_key_exists("ClsLogsetId",$param) and $param["ClsLogsetId"] !== null) {
            $this->ClsLogsetId = $param["ClsLogsetId"];
        }

        if (array_key_exists("ClsTopicId",$param) and $param["ClsTopicId"] !== null) {
            $this->ClsTopicId = $param["ClsTopicId"];
        }

        if (array_key_exists("Publish",$param) and $param["Publish"] !== null) {
            $this->Publish = $param["Publish"];
        }

        if (array_key_exists("L5Enable",$param) and $param["L5Enable"] !== null) {
            $this->L5Enable = $param["L5Enable"];
        }

        if (array_key_exists("Layers",$param) and $param["Layers"] !== null) {
            $this->Layers = [];
            foreach ($param["Layers"] as $key => $value){
                $obj = new LayerVersionSimple();
                $obj->deserialize($value);
                array_push($this->Layers, $obj);
            }
        }

        if (array_key_exists("DeadLetterConfig",$param) and $param["DeadLetterConfig"] !== null) {
            $this->DeadLetterConfig = new DeadLetterConfig();
            $this->DeadLetterConfig->deserialize($param["DeadLetterConfig"]);
        }

        if (array_key_exists("PublicNetConfig",$param) and $param["PublicNetConfig"] !== null) {
            $this->PublicNetConfig = new PublicNetConfigIn();
            $this->PublicNetConfig->deserialize($param["PublicNetConfig"]);
        }

        if (array_key_exists("CfsConfig",$param) and $param["CfsConfig"] !== null) {
            $this->CfsConfig = new CfsConfig();
            $this->CfsConfig->deserialize($param["CfsConfig"]);
        }

        if (array_key_exists("InitTimeout",$param) and $param["InitTimeout"] !== null) {
            $this->InitTimeout = $param["InitTimeout"];
        }

        if (array_key_exists("ProtocolParams",$param) and $param["ProtocolParams"] !== null) {
            $this->ProtocolParams = new ProtocolParams();
            $this->ProtocolParams->deserialize($param["ProtocolParams"]);
        }

        if (array_key_exists("InstanceConcurrencyConfig",$param) and $param["InstanceConcurrencyConfig"] !== null) {
            $this->InstanceConcurrencyConfig = new InstanceConcurrencyConfig();
            $this->InstanceConcurrencyConfig->deserialize($param["InstanceConcurrencyConfig"]);
        }

        if (array_key_exists("DnsCache",$param) and $param["DnsCache"] !== null) {
            $this->DnsCache = $param["DnsCache"];
        }

        if (array_key_exists("IntranetConfig",$param) and $param["IntranetConfig"] !== null) {
            $this->IntranetConfig = new IntranetConfigIn();
            $this->IntranetConfig->deserialize($param["IntranetConfig"]);
        }

        if (array_key_exists("IgnoreSysLog",$param) and $param["IgnoreSysLog"] !== null) {
            $this->IgnoreSysLog = $param["IgnoreSysLog"];
        }
    }
}

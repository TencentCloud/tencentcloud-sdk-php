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
 * UpdateFunctionConfiguration请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID</p>
 * @method string getFunctionName() 获取<p>要修改的函数名称</p>
 * @method void setFunctionName(string $FunctionName) 设置<p>要修改的函数名称</p>
 * @method string getDescription() 获取<p>函数描述。最大支持 1000 个英文字母、数字、空格、逗号和英文句号，支持中文</p>
 * @method void setDescription(string $Description) 设置<p>函数描述。最大支持 1000 个英文字母、数字、空格、逗号和英文句号，支持中文</p>
 * @method integer getMemorySize() 获取<p>函数运行时内存大小，默认为 128 M，可选范围64M、128 M-3072 M，以 128MB 为阶梯。</p>
 * @method void setMemorySize(integer $MemorySize) 设置<p>函数运行时内存大小，默认为 128 M，可选范围64M、128 M-3072 M，以 128MB 为阶梯。</p>
 * @method integer getTimeout() 获取<p>函数最长执行时间，单位为秒，可选值范围 1-900 秒，默认为 3 秒</p>
 * @method void setTimeout(integer $Timeout) 设置<p>函数最长执行时间，单位为秒，可选值范围 1-900 秒，默认为 3 秒</p>
 * @method FunctionEnvironment getEnvironment() 获取<p>函数的环境变量</p>
 * @method void setEnvironment(FunctionEnvironment $Environment) 设置<p>函数的环境变量</p>
 * @method FunctionVpcConfig getVpcConfig() 获取<p>函数的私有网络配置</p>
 * @method void setVpcConfig(FunctionVpcConfig $VpcConfig) 设置<p>函数的私有网络配置</p>
 * @method FunctionPublicNetConfig getPublicNetConfig() 获取<p>公网访问配置</p>
 * @method void setPublicNetConfig(FunctionPublicNetConfig $PublicNetConfig) 设置<p>公网访问配置</p>
 * @method string getRuntime() 获取<p>函数运行环境，创建时指定，目前不支持修改。</p>
 * @method void setRuntime(string $Runtime) 设置<p>函数运行环境，创建时指定，目前不支持修改。</p>
 * @method string getRole() 获取<p>函数绑定的角色</p>
 * @method void setRole(string $Role) 设置<p>函数绑定的角色</p>
 * @method string getInstallDependency() 获取<p>在线依赖安装，TRUE 表示安装，仅支持 Node.js 函数。 </p><p>默认值：FALSE</p>
 * @method void setInstallDependency(string $InstallDependency) 设置<p>在线依赖安装，TRUE 表示安装，仅支持 Node.js 函数。 </p><p>默认值：FALSE</p>
 * @method string getClsTopicId() 获取<p>日志投递到的cls日志集ID</p>
 * @method void setClsTopicId(string $ClsTopicId) 设置<p>日志投递到的cls日志集ID</p>
 * @method string getClsLogsetId() 获取<p>日志投递到的cls Topic ID</p>
 * @method void setClsLogsetId(string $ClsLogsetId) 设置<p>日志投递到的cls Topic ID</p>
 * @method string getPublish() 获取<p>在更新时是否同步发布新版本</p><p>默认值：FALSE</p>
 * @method void setPublish(string $Publish) 设置<p>在更新时是否同步发布新版本</p><p>默认值：FALSE</p>
 * @method string getL5Enable() 获取<p>是否开启L5访问能力，TRUE 为开启，FALSE为关闭</p>
 * @method void setL5Enable(string $L5Enable) 设置<p>是否开启L5访问能力，TRUE 为开启，FALSE为关闭</p>
 * @method array getLayers() 获取<p>函数要关联的层版本列表，层的版本会按照在列表中顺序依次覆盖。</p>
 * @method void setLayers(array $Layers) 设置<p>函数要关联的层版本列表，层的版本会按照在列表中顺序依次覆盖。</p>
 * @method integer getInitTimeout() 获取<p>函数初始化执行超时时间</p>
 * @method void setInitTimeout(integer $InitTimeout) 设置<p>函数初始化执行超时时间</p>
 * @method string getDnsCache() 获取<p>是否开启Dns缓存能力。只支持EVENT函数。</p><p>默认值：FALSE</p>
 * @method void setDnsCache(string $DnsCache) 设置<p>是否开启Dns缓存能力。只支持EVENT函数。</p><p>默认值：FALSE</p>
 * @method string getIgnoreSysLog() 获取<p>忽略系统日志上报</p>
 * @method void setIgnoreSysLog(string $IgnoreSysLog) 设置<p>忽略系统日志上报</p>
 * @method array getEipConfig() 获取<p>固定IP配置</p>
 * @method void setEipConfig(array $EipConfig) 设置<p>固定IP配置</p>
 */
class UpdateFunctionConfigurationRequest extends AbstractModel
{
    /**
     * @var string <p>环境ID</p>
     */
    public $EnvId;

    /**
     * @var string <p>要修改的函数名称</p>
     */
    public $FunctionName;

    /**
     * @var string <p>函数描述。最大支持 1000 个英文字母、数字、空格、逗号和英文句号，支持中文</p>
     */
    public $Description;

    /**
     * @var integer <p>函数运行时内存大小，默认为 128 M，可选范围64M、128 M-3072 M，以 128MB 为阶梯。</p>
     */
    public $MemorySize;

    /**
     * @var integer <p>函数最长执行时间，单位为秒，可选值范围 1-900 秒，默认为 3 秒</p>
     */
    public $Timeout;

    /**
     * @var FunctionEnvironment <p>函数的环境变量</p>
     */
    public $Environment;

    /**
     * @var FunctionVpcConfig <p>函数的私有网络配置</p>
     */
    public $VpcConfig;

    /**
     * @var FunctionPublicNetConfig <p>公网访问配置</p>
     */
    public $PublicNetConfig;

    /**
     * @var string <p>函数运行环境，创建时指定，目前不支持修改。</p>
     */
    public $Runtime;

    /**
     * @var string <p>函数绑定的角色</p>
     */
    public $Role;

    /**
     * @var string <p>在线依赖安装，TRUE 表示安装，仅支持 Node.js 函数。 </p><p>默认值：FALSE</p>
     */
    public $InstallDependency;

    /**
     * @var string <p>日志投递到的cls日志集ID</p>
     */
    public $ClsTopicId;

    /**
     * @var string <p>日志投递到的cls Topic ID</p>
     */
    public $ClsLogsetId;

    /**
     * @var string <p>在更新时是否同步发布新版本</p><p>默认值：FALSE</p>
     */
    public $Publish;

    /**
     * @var string <p>是否开启L5访问能力，TRUE 为开启，FALSE为关闭</p>
     */
    public $L5Enable;

    /**
     * @var array <p>函数要关联的层版本列表，层的版本会按照在列表中顺序依次覆盖。</p>
     */
    public $Layers;

    /**
     * @var integer <p>函数初始化执行超时时间</p>
     */
    public $InitTimeout;

    /**
     * @var string <p>是否开启Dns缓存能力。只支持EVENT函数。</p><p>默认值：FALSE</p>
     */
    public $DnsCache;

    /**
     * @var string <p>忽略系统日志上报</p>
     */
    public $IgnoreSysLog;

    /**
     * @var array <p>固定IP配置</p>
     */
    public $EipConfig;

    /**
     * @param string $EnvId <p>环境ID</p>
     * @param string $FunctionName <p>要修改的函数名称</p>
     * @param string $Description <p>函数描述。最大支持 1000 个英文字母、数字、空格、逗号和英文句号，支持中文</p>
     * @param integer $MemorySize <p>函数运行时内存大小，默认为 128 M，可选范围64M、128 M-3072 M，以 128MB 为阶梯。</p>
     * @param integer $Timeout <p>函数最长执行时间，单位为秒，可选值范围 1-900 秒，默认为 3 秒</p>
     * @param FunctionEnvironment $Environment <p>函数的环境变量</p>
     * @param FunctionVpcConfig $VpcConfig <p>函数的私有网络配置</p>
     * @param FunctionPublicNetConfig $PublicNetConfig <p>公网访问配置</p>
     * @param string $Runtime <p>函数运行环境，创建时指定，目前不支持修改。</p>
     * @param string $Role <p>函数绑定的角色</p>
     * @param string $InstallDependency <p>在线依赖安装，TRUE 表示安装，仅支持 Node.js 函数。 </p><p>默认值：FALSE</p>
     * @param string $ClsTopicId <p>日志投递到的cls日志集ID</p>
     * @param string $ClsLogsetId <p>日志投递到的cls Topic ID</p>
     * @param string $Publish <p>在更新时是否同步发布新版本</p><p>默认值：FALSE</p>
     * @param string $L5Enable <p>是否开启L5访问能力，TRUE 为开启，FALSE为关闭</p>
     * @param array $Layers <p>函数要关联的层版本列表，层的版本会按照在列表中顺序依次覆盖。</p>
     * @param integer $InitTimeout <p>函数初始化执行超时时间</p>
     * @param string $DnsCache <p>是否开启Dns缓存能力。只支持EVENT函数。</p><p>默认值：FALSE</p>
     * @param string $IgnoreSysLog <p>忽略系统日志上报</p>
     * @param array $EipConfig <p>固定IP配置</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
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

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = new FunctionEnvironment();
            $this->Environment->deserialize($param["Environment"]);
        }

        if (array_key_exists("VpcConfig",$param) and $param["VpcConfig"] !== null) {
            $this->VpcConfig = new FunctionVpcConfig();
            $this->VpcConfig->deserialize($param["VpcConfig"]);
        }

        if (array_key_exists("PublicNetConfig",$param) and $param["PublicNetConfig"] !== null) {
            $this->PublicNetConfig = new FunctionPublicNetConfig();
            $this->PublicNetConfig->deserialize($param["PublicNetConfig"]);
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("InstallDependency",$param) and $param["InstallDependency"] !== null) {
            $this->InstallDependency = $param["InstallDependency"];
        }

        if (array_key_exists("ClsTopicId",$param) and $param["ClsTopicId"] !== null) {
            $this->ClsTopicId = $param["ClsTopicId"];
        }

        if (array_key_exists("ClsLogsetId",$param) and $param["ClsLogsetId"] !== null) {
            $this->ClsLogsetId = $param["ClsLogsetId"];
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
                $obj = new FunctionLayer();
                $obj->deserialize($value);
                array_push($this->Layers, $obj);
            }
        }

        if (array_key_exists("InitTimeout",$param) and $param["InitTimeout"] !== null) {
            $this->InitTimeout = $param["InitTimeout"];
        }

        if (array_key_exists("DnsCache",$param) and $param["DnsCache"] !== null) {
            $this->DnsCache = $param["DnsCache"];
        }

        if (array_key_exists("IgnoreSysLog",$param) and $param["IgnoreSysLog"] !== null) {
            $this->IgnoreSysLog = $param["IgnoreSysLog"];
        }

        if (array_key_exists("EipConfig",$param) and $param["EipConfig"] !== null) {
            $this->EipConfig = [];
            foreach ($param["EipConfig"] as $key => $value){
                $obj = new FunctionEipConfigFixed();
                $obj->deserialize($value);
                array_push($this->EipConfig, $obj);
            }
        }
    }
}

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
 * CreateFunction请求参数结构体
 *
 * @method string getFunctionName() 获取<p>创建的函数名称</p>
 * @method void setFunctionName(string $FunctionName) 设置<p>创建的函数名称</p>
 * @method string getEnvId() 获取<p>环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID</p>
 * @method string getHandler() 获取<p>函数处理方法名称</p>
 * @method void setHandler(string $Handler) 设置<p>函数处理方法名称</p>
 * @method integer getMemorySize() 获取<p>函数运行时内存大小</p>
 * @method void setMemorySize(integer $MemorySize) 设置<p>函数运行时内存大小</p>
 * @method integer getTimeout() 获取<p>函数最长执行时间</p>
 * @method void setTimeout(integer $Timeout) 设置<p>函数最长执行时间</p>
 * @method string getUseGpu() 获取<p>此参数公司内部展示。是否使用GPU进行计算</p>
 * @method void setUseGpu(string $UseGpu) 设置<p>此参数公司内部展示。是否使用GPU进行计算</p>
 * @method string getInstallDependency() 获取<p>在线依赖安装</p>
 * @method void setInstallDependency(string $InstallDependency) 设置<p>在线依赖安装</p>
 * @method string getStamp() 获取<p>此参数公司内部展示。用于小程序，GPU集群，不对外</p>
 * @method void setStamp(string $Stamp) 设置<p>此参数公司内部展示。用于小程序，GPU集群，不对外</p>
 * @method string getRole() 获取<p>函数绑定的角色</p>
 * @method void setRole(string $Role) 设置<p>函数绑定的角色</p>
 * @method string getDescription() 获取<p>函数描述</p>
 * @method void setDescription(string $Description) 设置<p>函数描述</p>
 * @method string getRuntime() 获取<p>函数运行环境</p>
 * @method void setRuntime(string $Runtime) 设置<p>函数运行环境</p>
 * @method string getClsTopicId() 获取<p>函数日志投递到的CLS TopicID</p>
 * @method void setClsTopicId(string $ClsTopicId) 设置<p>函数日志投递到的CLS TopicID</p>
 * @method string getClsLogsetId() 获取<p>函数日志投递到的CLS LogsetID</p>
 * @method void setClsLogsetId(string $ClsLogsetId) 设置<p>函数日志投递到的CLS LogsetID</p>
 * @method CodeReq getCode() 获取<p>包含函数代码文件的zip格式文件</p>
 * @method void setCode(CodeReq $Code) 设置<p>包含函数代码文件的zip格式文件</p>
 * @method PrivateConfig getPrivateConfig() 获取<p>云函数配置项</p>
 * @method void setPrivateConfig(PrivateConfig $PrivateConfig) 设置<p>云函数配置项</p>
 * @method string getType() 获取<p>函数类型，默认值为Event，创建触发器函数请填写Event，创建HTTP函数级服务请填写HTTP</p>
 * @method void setType(string $Type) 设置<p>函数类型，默认值为Event，创建触发器函数请填写Event，创建HTTP函数级服务请填写HTTP</p>
 * @method string getProtocolType() 获取<p>HTTP函数支持的访问协议。当前支持WebSockets协议，值为WS</p>
 * @method void setProtocolType(string $ProtocolType) 设置<p>HTTP函数支持的访问协议。当前支持WebSockets协议，值为WS</p>
 * @method FunctionEnvironment getEnvironment() 获取<p>环境变量</p>
 * @method void setEnvironment(FunctionEnvironment $Environment) 设置<p>环境变量</p>
 * @method integer getInitTimeout() 获取<p>函数初始化超时时间，默认 65s，镜像部署函数默认 90s。</p>
 * @method void setInitTimeout(integer $InitTimeout) 设置<p>函数初始化超时时间，默认 65s，镜像部署函数默认 90s。</p>
 * @method string getCodeSource() 获取<p>代码来源，支持ZipFile, Cos, Demo 其中之一</p>
 * @method void setCodeSource(string $CodeSource) 设置<p>代码来源，支持ZipFile, Cos, Demo 其中之一</p>
 * @method FunctionVpcConfig getVpcConfig() 获取<p>函数的私有网络配置</p>
 * @method void setVpcConfig(FunctionVpcConfig $VpcConfig) 设置<p>函数的私有网络配置</p>
 * @method array getLayers() 获取<p>函数要关联的Layer版本列表，Layer会按照在列表中顺序依次覆盖。</p>
 * @method void setLayers(array $Layers) 设置<p>函数要关联的Layer版本列表，Layer会按照在列表中顺序依次覆盖。</p>
 * @method FunctionPublicNetConfig getPublicNetConfig() 获取<p>公网访问配置</p>
 * @method void setPublicNetConfig(FunctionPublicNetConfig $PublicNetConfig) 设置<p>公网访问配置</p>
 * @method string getAsyncRunEnable() 获取<p>是否开启异步属性，TRUE 为开启，FALSE为关闭</p>
 * @method void setAsyncRunEnable(string $AsyncRunEnable) 设置<p>是否开启异步属性，TRUE 为开启，FALSE为关闭</p>
 * @method string getTraceEnable() 获取<p>是否开启事件追踪，TRUE 为开启，FALSE为关闭</p>
 * @method void setTraceEnable(string $TraceEnable) 设置<p>是否开启事件追踪，TRUE 为开启，FALSE为关闭</p>
 * @method string getAutoCreateClsTopic() 获取<p>是否自动创建cls主题，TRUE 为开启，FALSE为关闭</p>
 * @method void setAutoCreateClsTopic(string $AutoCreateClsTopic) 设置<p>是否自动创建cls主题，TRUE 为开启，FALSE为关闭</p>
 * @method string getAutoDeployClsTopicIndex() 获取<p>是否自动创建cls索引，TRUE 为开启，FALSE为关闭</p>
 * @method void setAutoDeployClsTopicIndex(string $AutoDeployClsTopicIndex) 设置<p>是否自动创建cls索引，TRUE 为开启，FALSE为关闭</p>
 * @method string getDnsCache() 获取<p>是否开启Dns缓存能力。只支持EVENT函数。默认为FALSE，TRUE 为开启，FALSE为关闭</p>
 * @method void setDnsCache(string $DnsCache) 设置<p>是否开启Dns缓存能力。只支持EVENT函数。默认为FALSE，TRUE 为开启，FALSE为关闭</p>
 * @method FunctionEipConfigFixed getEipConfig() 获取<p>EipConfig固定ip配置</p>
 * @method void setEipConfig(FunctionEipConfigFixed $EipConfig) 设置<p>EipConfig固定ip配置</p>
 */
class CreateFunctionRequest extends AbstractModel
{
    /**
     * @var string <p>创建的函数名称</p>
     */
    public $FunctionName;

    /**
     * @var string <p>环境ID</p>
     */
    public $EnvId;

    /**
     * @var string <p>函数处理方法名称</p>
     */
    public $Handler;

    /**
     * @var integer <p>函数运行时内存大小</p>
     */
    public $MemorySize;

    /**
     * @var integer <p>函数最长执行时间</p>
     */
    public $Timeout;

    /**
     * @var string <p>此参数公司内部展示。是否使用GPU进行计算</p>
     */
    public $UseGpu;

    /**
     * @var string <p>在线依赖安装</p>
     */
    public $InstallDependency;

    /**
     * @var string <p>此参数公司内部展示。用于小程序，GPU集群，不对外</p>
     */
    public $Stamp;

    /**
     * @var string <p>函数绑定的角色</p>
     */
    public $Role;

    /**
     * @var string <p>函数描述</p>
     */
    public $Description;

    /**
     * @var string <p>函数运行环境</p>
     */
    public $Runtime;

    /**
     * @var string <p>函数日志投递到的CLS TopicID</p>
     */
    public $ClsTopicId;

    /**
     * @var string <p>函数日志投递到的CLS LogsetID</p>
     */
    public $ClsLogsetId;

    /**
     * @var CodeReq <p>包含函数代码文件的zip格式文件</p>
     */
    public $Code;

    /**
     * @var PrivateConfig <p>云函数配置项</p>
     */
    public $PrivateConfig;

    /**
     * @var string <p>函数类型，默认值为Event，创建触发器函数请填写Event，创建HTTP函数级服务请填写HTTP</p>
     */
    public $Type;

    /**
     * @var string <p>HTTP函数支持的访问协议。当前支持WebSockets协议，值为WS</p>
     */
    public $ProtocolType;

    /**
     * @var FunctionEnvironment <p>环境变量</p>
     */
    public $Environment;

    /**
     * @var integer <p>函数初始化超时时间，默认 65s，镜像部署函数默认 90s。</p>
     */
    public $InitTimeout;

    /**
     * @var string <p>代码来源，支持ZipFile, Cos, Demo 其中之一</p>
     */
    public $CodeSource;

    /**
     * @var FunctionVpcConfig <p>函数的私有网络配置</p>
     */
    public $VpcConfig;

    /**
     * @var array <p>函数要关联的Layer版本列表，Layer会按照在列表中顺序依次覆盖。</p>
     */
    public $Layers;

    /**
     * @var FunctionPublicNetConfig <p>公网访问配置</p>
     */
    public $PublicNetConfig;

    /**
     * @var string <p>是否开启异步属性，TRUE 为开启，FALSE为关闭</p>
     */
    public $AsyncRunEnable;

    /**
     * @var string <p>是否开启事件追踪，TRUE 为开启，FALSE为关闭</p>
     */
    public $TraceEnable;

    /**
     * @var string <p>是否自动创建cls主题，TRUE 为开启，FALSE为关闭</p>
     */
    public $AutoCreateClsTopic;

    /**
     * @var string <p>是否自动创建cls索引，TRUE 为开启，FALSE为关闭</p>
     */
    public $AutoDeployClsTopicIndex;

    /**
     * @var string <p>是否开启Dns缓存能力。只支持EVENT函数。默认为FALSE，TRUE 为开启，FALSE为关闭</p>
     */
    public $DnsCache;

    /**
     * @var FunctionEipConfigFixed <p>EipConfig固定ip配置</p>
     */
    public $EipConfig;

    /**
     * @param string $FunctionName <p>创建的函数名称</p>
     * @param string $EnvId <p>环境ID</p>
     * @param string $Handler <p>函数处理方法名称</p>
     * @param integer $MemorySize <p>函数运行时内存大小</p>
     * @param integer $Timeout <p>函数最长执行时间</p>
     * @param string $UseGpu <p>此参数公司内部展示。是否使用GPU进行计算</p>
     * @param string $InstallDependency <p>在线依赖安装</p>
     * @param string $Stamp <p>此参数公司内部展示。用于小程序，GPU集群，不对外</p>
     * @param string $Role <p>函数绑定的角色</p>
     * @param string $Description <p>函数描述</p>
     * @param string $Runtime <p>函数运行环境</p>
     * @param string $ClsTopicId <p>函数日志投递到的CLS TopicID</p>
     * @param string $ClsLogsetId <p>函数日志投递到的CLS LogsetID</p>
     * @param CodeReq $Code <p>包含函数代码文件的zip格式文件</p>
     * @param PrivateConfig $PrivateConfig <p>云函数配置项</p>
     * @param string $Type <p>函数类型，默认值为Event，创建触发器函数请填写Event，创建HTTP函数级服务请填写HTTP</p>
     * @param string $ProtocolType <p>HTTP函数支持的访问协议。当前支持WebSockets协议，值为WS</p>
     * @param FunctionEnvironment $Environment <p>环境变量</p>
     * @param integer $InitTimeout <p>函数初始化超时时间，默认 65s，镜像部署函数默认 90s。</p>
     * @param string $CodeSource <p>代码来源，支持ZipFile, Cos, Demo 其中之一</p>
     * @param FunctionVpcConfig $VpcConfig <p>函数的私有网络配置</p>
     * @param array $Layers <p>函数要关联的Layer版本列表，Layer会按照在列表中顺序依次覆盖。</p>
     * @param FunctionPublicNetConfig $PublicNetConfig <p>公网访问配置</p>
     * @param string $AsyncRunEnable <p>是否开启异步属性，TRUE 为开启，FALSE为关闭</p>
     * @param string $TraceEnable <p>是否开启事件追踪，TRUE 为开启，FALSE为关闭</p>
     * @param string $AutoCreateClsTopic <p>是否自动创建cls主题，TRUE 为开启，FALSE为关闭</p>
     * @param string $AutoDeployClsTopicIndex <p>是否自动创建cls索引，TRUE 为开启，FALSE为关闭</p>
     * @param string $DnsCache <p>是否开启Dns缓存能力。只支持EVENT函数。默认为FALSE，TRUE 为开启，FALSE为关闭</p>
     * @param FunctionEipConfigFixed $EipConfig <p>EipConfig固定ip配置</p>
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

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Handler",$param) and $param["Handler"] !== null) {
            $this->Handler = $param["Handler"];
        }

        if (array_key_exists("MemorySize",$param) and $param["MemorySize"] !== null) {
            $this->MemorySize = $param["MemorySize"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("UseGpu",$param) and $param["UseGpu"] !== null) {
            $this->UseGpu = $param["UseGpu"];
        }

        if (array_key_exists("InstallDependency",$param) and $param["InstallDependency"] !== null) {
            $this->InstallDependency = $param["InstallDependency"];
        }

        if (array_key_exists("Stamp",$param) and $param["Stamp"] !== null) {
            $this->Stamp = $param["Stamp"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("ClsTopicId",$param) and $param["ClsTopicId"] !== null) {
            $this->ClsTopicId = $param["ClsTopicId"];
        }

        if (array_key_exists("ClsLogsetId",$param) and $param["ClsLogsetId"] !== null) {
            $this->ClsLogsetId = $param["ClsLogsetId"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = new CodeReq();
            $this->Code->deserialize($param["Code"]);
        }

        if (array_key_exists("PrivateConfig",$param) and $param["PrivateConfig"] !== null) {
            $this->PrivateConfig = new PrivateConfig();
            $this->PrivateConfig->deserialize($param["PrivateConfig"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = new FunctionEnvironment();
            $this->Environment->deserialize($param["Environment"]);
        }

        if (array_key_exists("InitTimeout",$param) and $param["InitTimeout"] !== null) {
            $this->InitTimeout = $param["InitTimeout"];
        }

        if (array_key_exists("CodeSource",$param) and $param["CodeSource"] !== null) {
            $this->CodeSource = $param["CodeSource"];
        }

        if (array_key_exists("VpcConfig",$param) and $param["VpcConfig"] !== null) {
            $this->VpcConfig = new FunctionVpcConfig();
            $this->VpcConfig->deserialize($param["VpcConfig"]);
        }

        if (array_key_exists("Layers",$param) and $param["Layers"] !== null) {
            $this->Layers = [];
            foreach ($param["Layers"] as $key => $value){
                $obj = new FunctionLayer();
                $obj->deserialize($value);
                array_push($this->Layers, $obj);
            }
        }

        if (array_key_exists("PublicNetConfig",$param) and $param["PublicNetConfig"] !== null) {
            $this->PublicNetConfig = new FunctionPublicNetConfig();
            $this->PublicNetConfig->deserialize($param["PublicNetConfig"]);
        }

        if (array_key_exists("AsyncRunEnable",$param) and $param["AsyncRunEnable"] !== null) {
            $this->AsyncRunEnable = $param["AsyncRunEnable"];
        }

        if (array_key_exists("TraceEnable",$param) and $param["TraceEnable"] !== null) {
            $this->TraceEnable = $param["TraceEnable"];
        }

        if (array_key_exists("AutoCreateClsTopic",$param) and $param["AutoCreateClsTopic"] !== null) {
            $this->AutoCreateClsTopic = $param["AutoCreateClsTopic"];
        }

        if (array_key_exists("AutoDeployClsTopicIndex",$param) and $param["AutoDeployClsTopicIndex"] !== null) {
            $this->AutoDeployClsTopicIndex = $param["AutoDeployClsTopicIndex"];
        }

        if (array_key_exists("DnsCache",$param) and $param["DnsCache"] !== null) {
            $this->DnsCache = $param["DnsCache"];
        }

        if (array_key_exists("EipConfig",$param) and $param["EipConfig"] !== null) {
            $this->EipConfig = new FunctionEipConfigFixed();
            $this->EipConfig->deserialize($param["EipConfig"]);
        }
    }
}

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
 * @method string getModTime() 获取函数的最后修改时间
 * @method void setModTime(string $ModTime) 设置函数的最后修改时间
 * @method string getCodeInfo() 获取函数的代码
 * @method void setCodeInfo(string $CodeInfo) 设置函数的代码
 * @method string getDescription() 获取函数的描述信息
 * @method void setDescription(string $Description) 设置函数的描述信息
 * @method array getTriggers() 获取函数的触发器列表
 * @method void setTriggers(array $Triggers) 设置函数的触发器列表
 * @method string getHandler() 获取函数的入口
 * @method void setHandler(string $Handler) 设置函数的入口
 * @method integer getCodeSize() 获取函数代码大小
 * @method void setCodeSize(integer $CodeSize) 设置函数代码大小
 * @method integer getTimeout() 获取函数的超时时间
 * @method void setTimeout(integer $Timeout) 设置函数的超时时间
 * @method string getFunctionVersion() 获取函数的版本
 * @method void setFunctionVersion(string $FunctionVersion) 设置函数的版本
 * @method integer getMemorySize() 获取函数的最大可用内存
 * @method void setMemorySize(integer $MemorySize) 设置函数的最大可用内存
 * @method string getRuntime() 获取函数的运行环境
 * @method void setRuntime(string $Runtime) 设置函数的运行环境
 * @method string getFunctionName() 获取函数的名称
 * @method void setFunctionName(string $FunctionName) 设置函数的名称
 * @method VpcConfig getVpcConfig() 获取函数的私有网络
 * @method void setVpcConfig(VpcConfig $VpcConfig) 设置函数的私有网络
 * @method string getUseGpu() 获取是否使用GPU
 * @method void setUseGpu(string $UseGpu) 设置是否使用GPU
 * @method Environment getEnvironment() 获取函数的环境变量
 * @method void setEnvironment(Environment $Environment) 设置函数的环境变量
 * @method string getCodeResult() 获取代码是否正确
 * @method void setCodeResult(string $CodeResult) 设置代码是否正确
 * @method string getCodeError() 获取代码错误信息
 * @method void setCodeError(string $CodeError) 设置代码错误信息
 * @method integer getErrNo() 获取代码错误码
 * @method void setErrNo(integer $ErrNo) 设置代码错误码
 * @method string getNamespace() 获取函数的命名空间
 * @method void setNamespace(string $Namespace) 设置函数的命名空间
 * @method string getRole() 获取函数绑定的角色
 * @method void setRole(string $Role) 设置函数绑定的角色
 * @method string getInstallDependency() 获取是否自动安装依赖
 * @method void setInstallDependency(string $InstallDependency) 设置是否自动安装依赖
 * @method string getStatus() 获取函数状态
 * @method void setStatus(string $Status) 设置函数状态
 * @method string getStatusDesc() 获取状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
 * @method string getClsLogsetId() 获取日志投递到的Cls日志集
 * @method void setClsLogsetId(string $ClsLogsetId) 设置日志投递到的Cls日志集
 * @method string getClsTopicId() 获取日志投递到的Cls Topic
 * @method void setClsTopicId(string $ClsTopicId) 设置日志投递到的Cls Topic
 * @method string getFunctionId() 获取函数ID
 * @method void setFunctionId(string $FunctionId) 设置函数ID
 * @method array getTags() 获取函数的标签列表
 * @method void setTags(array $Tags) 设置函数的标签列表
 * @method EipOutConfig getEipConfig() 获取EipConfig配置
 * @method void setEipConfig(EipOutConfig $EipConfig) 设置EipConfig配置
 * @method AccessInfo getAccessInfo() 获取域名信息
 * @method void setAccessInfo(AccessInfo $AccessInfo) 设置域名信息
 * @method string getType() 获取函数类型，取值为HTTP或者Event
 * @method void setType(string $Type) 设置函数类型，取值为HTTP或者Event
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *GetFunction返回参数结构体
 */
class GetFunctionResponse extends AbstractModel
{
    /**
     * @var string 函数的最后修改时间
     */
    public $ModTime;

    /**
     * @var string 函数的代码
     */
    public $CodeInfo;

    /**
     * @var string 函数的描述信息
     */
    public $Description;

    /**
     * @var array 函数的触发器列表
     */
    public $Triggers;

    /**
     * @var string 函数的入口
     */
    public $Handler;

    /**
     * @var integer 函数代码大小
     */
    public $CodeSize;

    /**
     * @var integer 函数的超时时间
     */
    public $Timeout;

    /**
     * @var string 函数的版本
     */
    public $FunctionVersion;

    /**
     * @var integer 函数的最大可用内存
     */
    public $MemorySize;

    /**
     * @var string 函数的运行环境
     */
    public $Runtime;

    /**
     * @var string 函数的名称
     */
    public $FunctionName;

    /**
     * @var VpcConfig 函数的私有网络
     */
    public $VpcConfig;

    /**
     * @var string 是否使用GPU
     */
    public $UseGpu;

    /**
     * @var Environment 函数的环境变量
     */
    public $Environment;

    /**
     * @var string 代码是否正确
     */
    public $CodeResult;

    /**
     * @var string 代码错误信息
     */
    public $CodeError;

    /**
     * @var integer 代码错误码
     */
    public $ErrNo;

    /**
     * @var string 函数的命名空间
     */
    public $Namespace;

    /**
     * @var string 函数绑定的角色
     */
    public $Role;

    /**
     * @var string 是否自动安装依赖
     */
    public $InstallDependency;

    /**
     * @var string 函数状态
     */
    public $Status;

    /**
     * @var string 状态描述
     */
    public $StatusDesc;

    /**
     * @var string 日志投递到的Cls日志集
     */
    public $ClsLogsetId;

    /**
     * @var string 日志投递到的Cls Topic
     */
    public $ClsTopicId;

    /**
     * @var string 函数ID
     */
    public $FunctionId;

    /**
     * @var array 函数的标签列表
     */
    public $Tags;

    /**
     * @var EipOutConfig EipConfig配置
     */
    public $EipConfig;

    /**
     * @var AccessInfo 域名信息
     */
    public $AccessInfo;

    /**
     * @var string 函数类型，取值为HTTP或者Event
     */
    public $Type;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param string $ModTime 函数的最后修改时间
     * @param string $CodeInfo 函数的代码
     * @param string $Description 函数的描述信息
     * @param array $Triggers 函数的触发器列表
     * @param string $Handler 函数的入口
     * @param integer $CodeSize 函数代码大小
     * @param integer $Timeout 函数的超时时间
     * @param string $FunctionVersion 函数的版本
     * @param integer $MemorySize 函数的最大可用内存
     * @param string $Runtime 函数的运行环境
     * @param string $FunctionName 函数的名称
     * @param VpcConfig $VpcConfig 函数的私有网络
     * @param string $UseGpu 是否使用GPU
     * @param Environment $Environment 函数的环境变量
     * @param string $CodeResult 代码是否正确
     * @param string $CodeError 代码错误信息
     * @param integer $ErrNo 代码错误码
     * @param string $Namespace 函数的命名空间
     * @param string $Role 函数绑定的角色
     * @param string $InstallDependency 是否自动安装依赖
     * @param string $Status 函数状态
     * @param string $StatusDesc 状态描述
     * @param string $ClsLogsetId 日志投递到的Cls日志集
     * @param string $ClsTopicId 日志投递到的Cls Topic
     * @param string $FunctionId 函数ID
     * @param array $Tags 函数的标签列表
     * @param EipOutConfig $EipConfig EipConfig配置
     * @param AccessInfo $AccessInfo 域名信息
     * @param string $Type 函数类型，取值为HTTP或者Event
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("CodeInfo",$param) and $param["CodeInfo"] !== null) {
            $this->CodeInfo = $param["CodeInfo"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Triggers",$param) and $param["Triggers"] !== null) {
            $this->Triggers = [];
            foreach ($param["Triggers"] as $key => $value){
                $obj = new Trigger();
                $obj->deserialize($value);
                array_push($this->Triggers, $obj);
            }
        }

        if (array_key_exists("Handler",$param) and $param["Handler"] !== null) {
            $this->Handler = $param["Handler"];
        }

        if (array_key_exists("CodeSize",$param) and $param["CodeSize"] !== null) {
            $this->CodeSize = $param["CodeSize"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("FunctionVersion",$param) and $param["FunctionVersion"] !== null) {
            $this->FunctionVersion = $param["FunctionVersion"];
        }

        if (array_key_exists("MemorySize",$param) and $param["MemorySize"] !== null) {
            $this->MemorySize = $param["MemorySize"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("VpcConfig",$param) and $param["VpcConfig"] !== null) {
            $this->VpcConfig = new VpcConfig();
            $this->VpcConfig->deserialize($param["VpcConfig"]);
        }

        if (array_key_exists("UseGpu",$param) and $param["UseGpu"] !== null) {
            $this->UseGpu = $param["UseGpu"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = new Environment();
            $this->Environment->deserialize($param["Environment"]);
        }

        if (array_key_exists("CodeResult",$param) and $param["CodeResult"] !== null) {
            $this->CodeResult = $param["CodeResult"];
        }

        if (array_key_exists("CodeError",$param) and $param["CodeError"] !== null) {
            $this->CodeError = $param["CodeError"];
        }

        if (array_key_exists("ErrNo",$param) and $param["ErrNo"] !== null) {
            $this->ErrNo = $param["ErrNo"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("InstallDependency",$param) and $param["InstallDependency"] !== null) {
            $this->InstallDependency = $param["InstallDependency"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("ClsLogsetId",$param) and $param["ClsLogsetId"] !== null) {
            $this->ClsLogsetId = $param["ClsLogsetId"];
        }

        if (array_key_exists("ClsTopicId",$param) and $param["ClsTopicId"] !== null) {
            $this->ClsTopicId = $param["ClsTopicId"];
        }

        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("EipConfig",$param) and $param["EipConfig"] !== null) {
            $this->EipConfig = new EipOutConfig();
            $this->EipConfig->deserialize($param["EipConfig"]);
        }

        if (array_key_exists("AccessInfo",$param) and $param["AccessInfo"] !== null) {
            $this->AccessInfo = new AccessInfo();
            $this->AccessInfo->deserialize($param["AccessInfo"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

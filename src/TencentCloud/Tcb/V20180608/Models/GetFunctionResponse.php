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
 * GetFunction返回参数结构体
 *
 * @method string getModTime() 获取<p>函数最后修改时间</p>
 * @method void setModTime(string $ModTime) 设置<p>函数最后修改时间</p>
 * @method string getCodeInfo() 获取<p>函数代码（&gt;1M 不返回）</p>
 * @method void setCodeInfo(string $CodeInfo) 设置<p>函数代码（&gt;1M 不返回）</p>
 * @method string getDescription() 获取<p>函数描述</p>
 * @method void setDescription(string $Description) 设置<p>函数描述</p>
 * @method array getTriggers() 获取<p>触发器列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggers(array $Triggers) 设置<p>触发器列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHandler() 获取<p>入口函数</p>
 * @method void setHandler(string $Handler) 设置<p>入口函数</p>
 * @method integer getCodeSize() 获取<p>代码大小（字节）</p>
 * @method void setCodeSize(integer $CodeSize) 设置<p>代码大小（字节）</p>
 * @method integer getTimeout() 获取<p>超时时间（秒）</p>
 * @method void setTimeout(integer $Timeout) 设置<p>超时时间（秒）</p>
 * @method string getFunctionVersion() 获取<p>函数版本</p>
 * @method void setFunctionVersion(string $FunctionVersion) 设置<p>函数版本</p>
 * @method integer getMemorySize() 获取<p>内存大小（MB）</p>
 * @method void setMemorySize(integer $MemorySize) 设置<p>内存大小（MB）</p>
 * @method string getRuntime() 获取<p>运行环境</p>
 * @method void setRuntime(string $Runtime) 设置<p>运行环境</p>
 * @method string getFunctionName() 获取<p>函数名称</p>
 * @method void setFunctionName(string $FunctionName) 设置<p>函数名称</p>
 * @method FunctionVpcConfig getVpcConfig() 获取<p>VPC 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcConfig(FunctionVpcConfig $VpcConfig) 设置<p>VPC 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUseGpu() 获取<p>是否使用 GPU (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
 * @method void setUseGpu(string $UseGpu) 设置<p>是否使用 GPU (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
 * @method string getCodeResult() 获取<p>代码校验结果 (&quot;success&quot;/&quot;failed&quot;)</p>
 * @method void setCodeResult(string $CodeResult) 设置<p>代码校验结果 (&quot;success&quot;/&quot;failed&quot;)</p>
 * @method integer getErrNo() 获取<p>代码错误码</p>
 * @method void setErrNo(integer $ErrNo) 设置<p>代码错误码</p>
 * @method string getNamespace() 获取<p>命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>命名空间</p>
 * @method string getRole() 获取<p>角色</p>
 * @method void setRole(string $Role) 设置<p>角色</p>
 * @method string getInstallDependency() 获取<p>是否自动安装依赖 (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
 * @method void setInstallDependency(string $InstallDependency) 设置<p>是否自动安装依赖 (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
 * @method string getStatus() 获取<p>函数状态 (&quot;Active&quot;, &quot;Inactive&quot; 等)</p>
 * @method void setStatus(string $Status) 设置<p>函数状态 (&quot;Active&quot;, &quot;Inactive&quot; 等)</p>
 * @method string getFunctionId() 获取<p>函数 ID</p>
 * @method void setFunctionId(string $FunctionId) 设置<p>函数 ID</p>
 * @method array getTags() 获取<p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>函数类型 (&quot;HTTP&quot; 或 &quot;Event&quot;)</p>
 * @method void setType(string $Type) 设置<p>函数类型 (&quot;HTTP&quot; 或 &quot;Event&quot;)</p>
 * @method string getL5Enable() 获取<p>是否启用 L5 (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
 * @method void setL5Enable(string $L5Enable) 设置<p>是否启用 L5 (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
 * @method string getAddTime() 获取<p>函数创建时间</p>
 * @method void setAddTime(string $AddTime) 设置<p>函数创建时间</p>
 * @method string getOnsEnable() 获取<p>对应scf.GetFunction接口的OnsEnable，是否启用 Ons (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
 * @method void setOnsEnable(string $OnsEnable) 设置<p>对应scf.GetFunction接口的OnsEnable，是否启用 Ons (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
 * @method string getAvailableStatus() 获取<p>计费状态 (&quot;Available&quot; 等)</p>
 * @method void setAvailableStatus(string $AvailableStatus) 设置<p>计费状态 (&quot;Available&quot; 等)</p>
 * @method string getQualifier() 获取<p>函数版本（查询时传入的）</p>
 * @method void setQualifier(string $Qualifier) 设置<p>函数版本（查询时传入的）</p>
 * @method integer getInitTimeout() 获取<p>初始化超时时间（秒）</p>
 * @method void setInitTimeout(integer $InitTimeout) 设置<p>初始化超时时间（秒）</p>
 * @method string getAsyncRunEnable() 获取<p>是否开启异步 (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
 * @method void setAsyncRunEnable(string $AsyncRunEnable) 设置<p>是否开启异步 (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
 * @method string getTraceEnable() 获取<p>是否开启事件追踪 (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
 * @method void setTraceEnable(string $TraceEnable) 设置<p>是否开启事件追踪 (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
 * @method AgentRuntimeCodeImageConfig getImageConfig() 获取<p>镜像配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageConfig(AgentRuntimeCodeImageConfig $ImageConfig) 设置<p>镜像配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetFunctionResponse extends AbstractModel
{
    /**
     * @var string <p>函数最后修改时间</p>
     */
    public $ModTime;

    /**
     * @var string <p>函数代码（&gt;1M 不返回）</p>
     */
    public $CodeInfo;

    /**
     * @var string <p>函数描述</p>
     */
    public $Description;

    /**
     * @var array <p>触发器列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Triggers;

    /**
     * @var string <p>入口函数</p>
     */
    public $Handler;

    /**
     * @var integer <p>代码大小（字节）</p>
     */
    public $CodeSize;

    /**
     * @var integer <p>超时时间（秒）</p>
     */
    public $Timeout;

    /**
     * @var string <p>函数版本</p>
     */
    public $FunctionVersion;

    /**
     * @var integer <p>内存大小（MB）</p>
     */
    public $MemorySize;

    /**
     * @var string <p>运行环境</p>
     */
    public $Runtime;

    /**
     * @var string <p>函数名称</p>
     */
    public $FunctionName;

    /**
     * @var FunctionVpcConfig <p>VPC 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcConfig;

    /**
     * @var string <p>是否使用 GPU (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
     */
    public $UseGpu;

    /**
     * @var string <p>代码校验结果 (&quot;success&quot;/&quot;failed&quot;)</p>
     */
    public $CodeResult;

    /**
     * @var integer <p>代码错误码</p>
     */
    public $ErrNo;

    /**
     * @var string <p>命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>角色</p>
     */
    public $Role;

    /**
     * @var string <p>是否自动安装依赖 (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
     */
    public $InstallDependency;

    /**
     * @var string <p>函数状态 (&quot;Active&quot;, &quot;Inactive&quot; 等)</p>
     */
    public $Status;

    /**
     * @var string <p>函数 ID</p>
     */
    public $FunctionId;

    /**
     * @var array <p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>函数类型 (&quot;HTTP&quot; 或 &quot;Event&quot;)</p>
     */
    public $Type;

    /**
     * @var string <p>是否启用 L5 (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
     */
    public $L5Enable;

    /**
     * @var string <p>函数创建时间</p>
     */
    public $AddTime;

    /**
     * @var string <p>对应scf.GetFunction接口的OnsEnable，是否启用 Ons (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
     */
    public $OnsEnable;

    /**
     * @var string <p>计费状态 (&quot;Available&quot; 等)</p>
     */
    public $AvailableStatus;

    /**
     * @var string <p>函数版本（查询时传入的）</p>
     */
    public $Qualifier;

    /**
     * @var integer <p>初始化超时时间（秒）</p>
     */
    public $InitTimeout;

    /**
     * @var string <p>是否开启异步 (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
     */
    public $AsyncRunEnable;

    /**
     * @var string <p>是否开启事件追踪 (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
     */
    public $TraceEnable;

    /**
     * @var AgentRuntimeCodeImageConfig <p>镜像配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageConfig;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ModTime <p>函数最后修改时间</p>
     * @param string $CodeInfo <p>函数代码（&gt;1M 不返回）</p>
     * @param string $Description <p>函数描述</p>
     * @param array $Triggers <p>触发器列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Handler <p>入口函数</p>
     * @param integer $CodeSize <p>代码大小（字节）</p>
     * @param integer $Timeout <p>超时时间（秒）</p>
     * @param string $FunctionVersion <p>函数版本</p>
     * @param integer $MemorySize <p>内存大小（MB）</p>
     * @param string $Runtime <p>运行环境</p>
     * @param string $FunctionName <p>函数名称</p>
     * @param FunctionVpcConfig $VpcConfig <p>VPC 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UseGpu <p>是否使用 GPU (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
     * @param string $CodeResult <p>代码校验结果 (&quot;success&quot;/&quot;failed&quot;)</p>
     * @param integer $ErrNo <p>代码错误码</p>
     * @param string $Namespace <p>命名空间</p>
     * @param string $Role <p>角色</p>
     * @param string $InstallDependency <p>是否自动安装依赖 (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
     * @param string $Status <p>函数状态 (&quot;Active&quot;, &quot;Inactive&quot; 等)</p>
     * @param string $FunctionId <p>函数 ID</p>
     * @param array $Tags <p>标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>函数类型 (&quot;HTTP&quot; 或 &quot;Event&quot;)</p>
     * @param string $L5Enable <p>是否启用 L5 (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
     * @param string $AddTime <p>函数创建时间</p>
     * @param string $OnsEnable <p>对应scf.GetFunction接口的OnsEnable，是否启用 Ons (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
     * @param string $AvailableStatus <p>计费状态 (&quot;Available&quot; 等)</p>
     * @param string $Qualifier <p>函数版本（查询时传入的）</p>
     * @param integer $InitTimeout <p>初始化超时时间（秒）</p>
     * @param string $AsyncRunEnable <p>是否开启异步 (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
     * @param string $TraceEnable <p>是否开启事件追踪 (&quot;TRUE&quot;/&quot;FALSE&quot;)</p>
     * @param AgentRuntimeCodeImageConfig $ImageConfig <p>镜像配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
                $obj = new FunctionTrigger();
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
            $this->VpcConfig = new FunctionVpcConfig();
            $this->VpcConfig->deserialize($param["VpcConfig"]);
        }

        if (array_key_exists("UseGpu",$param) and $param["UseGpu"] !== null) {
            $this->UseGpu = $param["UseGpu"];
        }

        if (array_key_exists("CodeResult",$param) and $param["CodeResult"] !== null) {
            $this->CodeResult = $param["CodeResult"];
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("L5Enable",$param) and $param["L5Enable"] !== null) {
            $this->L5Enable = $param["L5Enable"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("OnsEnable",$param) and $param["OnsEnable"] !== null) {
            $this->OnsEnable = $param["OnsEnable"];
        }

        if (array_key_exists("AvailableStatus",$param) and $param["AvailableStatus"] !== null) {
            $this->AvailableStatus = $param["AvailableStatus"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("InitTimeout",$param) and $param["InitTimeout"] !== null) {
            $this->InitTimeout = $param["InitTimeout"];
        }

        if (array_key_exists("AsyncRunEnable",$param) and $param["AsyncRunEnable"] !== null) {
            $this->AsyncRunEnable = $param["AsyncRunEnable"];
        }

        if (array_key_exists("TraceEnable",$param) and $param["TraceEnable"] !== null) {
            $this->TraceEnable = $param["TraceEnable"];
        }

        if (array_key_exists("ImageConfig",$param) and $param["ImageConfig"] !== null) {
            $this->ImageConfig = new AgentRuntimeCodeImageConfig();
            $this->ImageConfig->deserialize($param["ImageConfig"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

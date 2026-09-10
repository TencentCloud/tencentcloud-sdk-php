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
 * 云函数
 *
 * @method string getModTime() 获取<p>修改时间</p>
 * @method void setModTime(string $ModTime) 设置<p>修改时间</p>
 * @method string getAddTime() 获取<p>创建时间</p>
 * @method void setAddTime(string $AddTime) 设置<p>创建时间</p>
 * @method string getRuntime() 获取<p>运行时</p>
 * @method void setRuntime(string $Runtime) 设置<p>运行时</p>
 * @method string getFunctionName() 获取<p>函数名称</p>
 * @method void setFunctionName(string $FunctionName) 设置<p>函数名称</p>
 * @method string getFunctionId() 获取<p>函数ID</p>
 * @method void setFunctionId(string $FunctionId) 设置<p>函数ID</p>
 * @method string getNamespace() 获取<p>命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>命名空间</p>
 * @method string getStatus() 获取<p>函数状态，状态值</p>
 * @method void setStatus(string $Status) 设置<p>函数状态，状态值</p>
 * @method string getStatusDesc() 获取<p>函数状态详情</p>
 * @method void setStatusDesc(string $StatusDesc) 设置<p>函数状态详情</p>
 * @method string getDescription() 获取<p>函数描述</p>
 * @method void setDescription(string $Description) 设置<p>函数描述</p>
 * @method array getTags() 获取<p>函数标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>函数标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>函数类型，取值为 HTTP 或者 Event</p>
 * @method void setType(string $Type) 设置<p>函数类型，取值为 HTTP 或者 Event</p>
 * @method array getStatusReasons() 获取<p>函数状态失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusReasons(array $StatusReasons) 设置<p>函数状态失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalProvisionedConcurrencyMem() 获取<p>函数所有版本预置并发内存总和</p>
 * @method void setTotalProvisionedConcurrencyMem(integer $TotalProvisionedConcurrencyMem) 设置<p>函数所有版本预置并发内存总和</p>
 * @method integer getReservedConcurrencyMem() 获取<p>函数并发保留内存</p>
 * @method void setReservedConcurrencyMem(integer $ReservedConcurrencyMem) 设置<p>函数并发保留内存</p>
 * @method string getAsyncRunEnable() 获取<p>函数异步属性，取值 TRUE 或者 FALSE</p>
 * @method void setAsyncRunEnable(string $AsyncRunEnable) 设置<p>函数异步属性，取值 TRUE 或者 FALSE</p>
 * @method string getTraceEnable() 获取<p>异步函数是否开启调用追踪，取值 TRUE 或者 FALSE</p>
 * @method void setTraceEnable(string $TraceEnable) 设置<p>异步函数是否开启调用追踪，取值 TRUE 或者 FALSE</p>
 */
class FunctionInfo extends AbstractModel
{
    /**
     * @var string <p>修改时间</p>
     */
    public $ModTime;

    /**
     * @var string <p>创建时间</p>
     */
    public $AddTime;

    /**
     * @var string <p>运行时</p>
     */
    public $Runtime;

    /**
     * @var string <p>函数名称</p>
     */
    public $FunctionName;

    /**
     * @var string <p>函数ID</p>
     */
    public $FunctionId;

    /**
     * @var string <p>命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>函数状态，状态值</p>
     */
    public $Status;

    /**
     * @var string <p>函数状态详情</p>
     */
    public $StatusDesc;

    /**
     * @var string <p>函数描述</p>
     */
    public $Description;

    /**
     * @var array <p>函数标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>函数类型，取值为 HTTP 或者 Event</p>
     */
    public $Type;

    /**
     * @var array <p>函数状态失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusReasons;

    /**
     * @var integer <p>函数所有版本预置并发内存总和</p>
     */
    public $TotalProvisionedConcurrencyMem;

    /**
     * @var integer <p>函数并发保留内存</p>
     */
    public $ReservedConcurrencyMem;

    /**
     * @var string <p>函数异步属性，取值 TRUE 或者 FALSE</p>
     */
    public $AsyncRunEnable;

    /**
     * @var string <p>异步函数是否开启调用追踪，取值 TRUE 或者 FALSE</p>
     */
    public $TraceEnable;

    /**
     * @param string $ModTime <p>修改时间</p>
     * @param string $AddTime <p>创建时间</p>
     * @param string $Runtime <p>运行时</p>
     * @param string $FunctionName <p>函数名称</p>
     * @param string $FunctionId <p>函数ID</p>
     * @param string $Namespace <p>命名空间</p>
     * @param string $Status <p>函数状态，状态值</p>
     * @param string $StatusDesc <p>函数状态详情</p>
     * @param string $Description <p>函数描述</p>
     * @param array $Tags <p>函数标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>函数类型，取值为 HTTP 或者 Event</p>
     * @param array $StatusReasons <p>函数状态失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalProvisionedConcurrencyMem <p>函数所有版本预置并发内存总和</p>
     * @param integer $ReservedConcurrencyMem <p>函数并发保留内存</p>
     * @param string $AsyncRunEnable <p>函数异步属性，取值 TRUE 或者 FALSE</p>
     * @param string $TraceEnable <p>异步函数是否开启调用追踪，取值 TRUE 或者 FALSE</p>
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

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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

        if (array_key_exists("StatusReasons",$param) and $param["StatusReasons"] !== null) {
            $this->StatusReasons = [];
            foreach ($param["StatusReasons"] as $key => $value){
                $obj = new StatusReason();
                $obj->deserialize($value);
                array_push($this->StatusReasons, $obj);
            }
        }

        if (array_key_exists("TotalProvisionedConcurrencyMem",$param) and $param["TotalProvisionedConcurrencyMem"] !== null) {
            $this->TotalProvisionedConcurrencyMem = $param["TotalProvisionedConcurrencyMem"];
        }

        if (array_key_exists("ReservedConcurrencyMem",$param) and $param["ReservedConcurrencyMem"] !== null) {
            $this->ReservedConcurrencyMem = $param["ReservedConcurrencyMem"];
        }

        if (array_key_exists("AsyncRunEnable",$param) and $param["AsyncRunEnable"] !== null) {
            $this->AsyncRunEnable = $param["AsyncRunEnable"];
        }

        if (array_key_exists("TraceEnable",$param) and $param["TraceEnable"] !== null) {
            $this->TraceEnable = $param["TraceEnable"];
        }
    }
}

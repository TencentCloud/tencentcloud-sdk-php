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
 * Invoke请求参数结构体
 *
 * @method string getFunctionName() 获取函数名称
 * @method void setFunctionName(string $FunctionName) 设置函数名称
 * @method string getInvocationType() 获取同步调用请使用[同步 Invoke 调用接口](https://cloud.tencent.com/document/product/583/58400) 或填写同步调用参数 RequestResponse ，建议使用同步调用接口以获取最佳性能；异步调用填写 Event；默认为同步。接口超时时间为 300s，更长超时时间请使用异步调用。
 * @method void setInvocationType(string $InvocationType) 设置同步调用请使用[同步 Invoke 调用接口](https://cloud.tencent.com/document/product/583/58400) 或填写同步调用参数 RequestResponse ，建议使用同步调用接口以获取最佳性能；异步调用填写 Event；默认为同步。接口超时时间为 300s，更长超时时间请使用异步调用。
 * @method string getQualifier() 获取触发函数的版本号或别名，默认值为 $LATEST
 * @method void setQualifier(string $Qualifier) 设置触发函数的版本号或别名，默认值为 $LATEST
 * @method string getClientContext() 获取运行函数时的参数，以json格式传入，同步调用最大支持 6MB，异步调用最大支持 128 KB。该字段信息对应函数 [event 入参](https://cloud.tencent.com/document/product/583/9210#.E5.87.BD.E6.95.B0.E5.85.A5.E5.8F.82.3Ca-id.3D.22input.22.3E.3C.2Fa.3E)。
 * @method void setClientContext(string $ClientContext) 设置运行函数时的参数，以json格式传入，同步调用最大支持 6MB，异步调用最大支持 128 KB。该字段信息对应函数 [event 入参](https://cloud.tencent.com/document/product/583/9210#.E5.87.BD.E6.95.B0.E5.85.A5.E5.8F.82.3Ca-id.3D.22input.22.3E.3C.2Fa.3E)。
 * @method string getLogType() 获取异步调用该字段返回为空。
 * @method void setLogType(string $LogType) 设置异步调用该字段返回为空。
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getRoutingKey() 获取函数灰度流量控制调用，以json格式传入，例如{"k":"v"}，注意kv都需要是字符串类型，最大支持的参数长度是1024字节
 * @method void setRoutingKey(string $RoutingKey) 设置函数灰度流量控制调用，以json格式传入，例如{"k":"v"}，注意kv都需要是字符串类型，最大支持的参数长度是1024字节
 */
class InvokeRequest extends AbstractModel
{
    /**
     * @var string 函数名称
     */
    public $FunctionName;

    /**
     * @var string 同步调用请使用[同步 Invoke 调用接口](https://cloud.tencent.com/document/product/583/58400) 或填写同步调用参数 RequestResponse ，建议使用同步调用接口以获取最佳性能；异步调用填写 Event；默认为同步。接口超时时间为 300s，更长超时时间请使用异步调用。
     */
    public $InvocationType;

    /**
     * @var string 触发函数的版本号或别名，默认值为 $LATEST
     */
    public $Qualifier;

    /**
     * @var string 运行函数时的参数，以json格式传入，同步调用最大支持 6MB，异步调用最大支持 128 KB。该字段信息对应函数 [event 入参](https://cloud.tencent.com/document/product/583/9210#.E5.87.BD.E6.95.B0.E5.85.A5.E5.8F.82.3Ca-id.3D.22input.22.3E.3C.2Fa.3E)。
     */
    public $ClientContext;

    /**
     * @var string 异步调用该字段返回为空。
     */
    public $LogType;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 函数灰度流量控制调用，以json格式传入，例如{"k":"v"}，注意kv都需要是字符串类型，最大支持的参数长度是1024字节
     */
    public $RoutingKey;

    /**
     * @param string $FunctionName 函数名称
     * @param string $InvocationType 同步调用请使用[同步 Invoke 调用接口](https://cloud.tencent.com/document/product/583/58400) 或填写同步调用参数 RequestResponse ，建议使用同步调用接口以获取最佳性能；异步调用填写 Event；默认为同步。接口超时时间为 300s，更长超时时间请使用异步调用。
     * @param string $Qualifier 触发函数的版本号或别名，默认值为 $LATEST
     * @param string $ClientContext 运行函数时的参数，以json格式传入，同步调用最大支持 6MB，异步调用最大支持 128 KB。该字段信息对应函数 [event 入参](https://cloud.tencent.com/document/product/583/9210#.E5.87.BD.E6.95.B0.E5.85.A5.E5.8F.82.3Ca-id.3D.22input.22.3E.3C.2Fa.3E)。
     * @param string $LogType 异步调用该字段返回为空。
     * @param string $Namespace 命名空间
     * @param string $RoutingKey 函数灰度流量控制调用，以json格式传入，例如{"k":"v"}，注意kv都需要是字符串类型，最大支持的参数长度是1024字节
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

        if (array_key_exists("InvocationType",$param) and $param["InvocationType"] !== null) {
            $this->InvocationType = $param["InvocationType"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("ClientContext",$param) and $param["ClientContext"] !== null) {
            $this->ClientContext = $param["ClientContext"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("RoutingKey",$param) and $param["RoutingKey"] !== null) {
            $this->RoutingKey = $param["RoutingKey"];
        }
    }
}

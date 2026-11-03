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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义安全护栏生效范围
 *
 * @method string getBindType() 获取<p>绑定方式：resource 显式指定业务资源；global 覆盖网关中当前支持的业务资源，由平台关联到其 Kong Route，并随受支持的资源变更协调绑定。不是创建一个独立的 Kong global 插件。相同 Route 不能同时被多个自定义护栏策略占用。</p>
 * @method void setBindType(string $BindType) 设置<p>绑定方式：resource 显式指定业务资源；global 覆盖网关中当前支持的业务资源，由平台关联到其 Kong Route，并随受支持的资源变更协调绑定。不是创建一个独立的 Kong global 插件。相同 Route 不能同时被多个自定义护栏策略占用。</p>
 * @method array getResources() 获取<p>BindType=resource 时必填，1～200 个资源，ResourceType/ResourceId 组合不得重复；global 时不应填写资源或传 []。Modify 传入 Scope 时替换整个范围，不是增量追加。暂不纳入 Dify/Custom Agent 和 Legacy SSE MCP。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResources(array $Resources) 设置<p>BindType=resource 时必填，1～200 个资源，ResourceType/ResourceId 组合不得重复；global 时不应填写资源或传 []。Modify 传入 Scope 时替换整个范围，不是增量追加。暂不纳入 Dify/Custom Agent 和 Legacy SSE MCP。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomGuardrailScopeInput extends AbstractModel
{
    /**
     * @var string <p>绑定方式：resource 显式指定业务资源；global 覆盖网关中当前支持的业务资源，由平台关联到其 Kong Route，并随受支持的资源变更协调绑定。不是创建一个独立的 Kong global 插件。相同 Route 不能同时被多个自定义护栏策略占用。</p>
     */
    public $BindType;

    /**
     * @var array <p>BindType=resource 时必填，1～200 个资源，ResourceType/ResourceId 组合不得重复；global 时不应填写资源或传 []。Modify 传入 Scope 时替换整个范围，不是增量追加。暂不纳入 Dify/Custom Agent 和 Legacy SSE MCP。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resources;

    /**
     * @param string $BindType <p>绑定方式：resource 显式指定业务资源；global 覆盖网关中当前支持的业务资源，由平台关联到其 Kong Route，并随受支持的资源变更协调绑定。不是创建一个独立的 Kong global 插件。相同 Route 不能同时被多个自定义护栏策略占用。</p>
     * @param array $Resources <p>BindType=resource 时必填，1～200 个资源，ResourceType/ResourceId 组合不得重复；global 时不应填写资源或传 []。Modify 传入 Scope 时替换整个范围，不是增量追加。暂不纳入 Dify/Custom Agent 和 Legacy SSE MCP。</p>
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
        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new CustomGuardrailResourceRefInput();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }
    }
}

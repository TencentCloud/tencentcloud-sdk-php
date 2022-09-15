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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 施压配置
 *
 * @method Concurrency getConcurrency() 获取并发施压模式的配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConcurrency(Concurrency $Concurrency) 设置并发施压模式的配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method RequestsPerSecond getRequestsPerSecond() 获取RPS施压模式的配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestsPerSecond(RequestsPerSecond $RequestsPerSecond) 设置RPS施压模式的配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScriptOrigin getScriptOrigin() 获取脚本内置压力模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptOrigin(ScriptOrigin $ScriptOrigin) 设置脚本内置压力模式
注意：此字段可能返回 null，表示取不到有效值。
 */
class LoadSpec extends AbstractModel
{
    /**
     * @var Concurrency 并发施压模式的配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Concurrency;

    /**
     * @var RequestsPerSecond RPS施压模式的配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestsPerSecond;

    /**
     * @var ScriptOrigin 脚本内置压力模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptOrigin;

    /**
     * @param Concurrency $Concurrency 并发施压模式的配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param RequestsPerSecond $RequestsPerSecond RPS施压模式的配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScriptOrigin $ScriptOrigin 脚本内置压力模式
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
        if (array_key_exists("Concurrency",$param) and $param["Concurrency"] !== null) {
            $this->Concurrency = new Concurrency();
            $this->Concurrency->deserialize($param["Concurrency"]);
        }

        if (array_key_exists("RequestsPerSecond",$param) and $param["RequestsPerSecond"] !== null) {
            $this->RequestsPerSecond = new RequestsPerSecond();
            $this->RequestsPerSecond->deserialize($param["RequestsPerSecond"]);
        }

        if (array_key_exists("ScriptOrigin",$param) and $param["ScriptOrigin"] !== null) {
            $this->ScriptOrigin = new ScriptOrigin();
            $this->ScriptOrigin->deserialize($param["ScriptOrigin"]);
        }
    }
}

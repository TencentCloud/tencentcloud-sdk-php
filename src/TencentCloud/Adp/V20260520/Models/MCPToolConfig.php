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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCPToolConfig
 *
 * @method array getInputs() 获取<p>输入参数</p>
 * @method void setInputs(array $Inputs) 设置<p>输入参数</p>
 * @method array getOutputs() 获取<p>输出参数</p>
 * @method void setOutputs(array $Outputs) 设置<p>输出参数</p>
 * @method MCPToolMeta getMeta() 获取<p>工具meta信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMeta(MCPToolMeta $Meta) 设置<p>工具meta信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportsApps() 获取<p>是否支持交互界面（MCP Apps），插件级标签  默认值：false</p>
 * @method void setSupportsApps(boolean $SupportsApps) 设置<p>是否支持交互界面（MCP Apps），插件级标签  默认值：false</p>
 */
class MCPToolConfig extends AbstractModel
{
    /**
     * @var array <p>输入参数</p>
     */
    public $Inputs;

    /**
     * @var array <p>输出参数</p>
     */
    public $Outputs;

    /**
     * @var MCPToolMeta <p>工具meta信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Meta;

    /**
     * @var boolean <p>是否支持交互界面（MCP Apps），插件级标签  默认值：false</p>
     */
    public $SupportsApps;

    /**
     * @param array $Inputs <p>输入参数</p>
     * @param array $Outputs <p>输出参数</p>
     * @param MCPToolMeta $Meta <p>工具meta信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportsApps <p>是否支持交互界面（MCP Apps），插件级标签  默认值：false</p>
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
        if (array_key_exists("Inputs",$param) and $param["Inputs"] !== null) {
            $this->Inputs = [];
            foreach ($param["Inputs"] as $key => $value){
                $obj = new RequestParam();
                $obj->deserialize($value);
                array_push($this->Inputs, $obj);
            }
        }

        if (array_key_exists("Outputs",$param) and $param["Outputs"] !== null) {
            $this->Outputs = [];
            foreach ($param["Outputs"] as $key => $value){
                $obj = new ResponseParam();
                $obj->deserialize($value);
                array_push($this->Outputs, $obj);
            }
        }

        if (array_key_exists("Meta",$param) and $param["Meta"] !== null) {
            $this->Meta = new MCPToolMeta();
            $this->Meta->deserialize($param["Meta"]);
        }

        if (array_key_exists("SupportsApps",$param) and $param["SupportsApps"] !== null) {
            $this->SupportsApps = $param["SupportsApps"];
        }
    }
}

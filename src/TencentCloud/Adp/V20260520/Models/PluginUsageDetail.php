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
 * 插件调用明细
 *
 * @method string getPluginName() 获取<p>连接器与工具名称</p>
 * @method void setPluginName(string $PluginName) 设置<p>连接器与工具名称</p>
 * @method array getResourceConsumptionList() 获取<p>插件单次调用计量：TOKEN 总量用 total_tokens（兼容空 Label），输入/输出用 input/output；其余消耗量按 Unit 区分，PU 的 Label 为 total_pu</p>
 * @method void setResourceConsumptionList(array $ResourceConsumptionList) 设置<p>插件单次调用计量：TOKEN 总量用 total_tokens（兼容空 Label），输入/输出用 input/output；其余消耗量按 Unit 区分，PU 的 Label 为 total_pu</p>
 * @method string getToolName() 获取<p>工具名称</p>
 * @method void setToolName(string $ToolName) 设置<p>工具名称</p>
 */
class PluginUsageDetail extends AbstractModel
{
    /**
     * @var string <p>连接器与工具名称</p>
     */
    public $PluginName;

    /**
     * @var array <p>插件单次调用计量：TOKEN 总量用 total_tokens（兼容空 Label），输入/输出用 input/output；其余消耗量按 Unit 区分，PU 的 Label 为 total_pu</p>
     */
    public $ResourceConsumptionList;

    /**
     * @var string <p>工具名称</p>
     */
    public $ToolName;

    /**
     * @param string $PluginName <p>连接器与工具名称</p>
     * @param array $ResourceConsumptionList <p>插件单次调用计量：TOKEN 总量用 total_tokens（兼容空 Label），输入/输出用 input/output；其余消耗量按 Unit 区分，PU 的 Label 为 total_pu</p>
     * @param string $ToolName <p>工具名称</p>
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
        if (array_key_exists("PluginName",$param) and $param["PluginName"] !== null) {
            $this->PluginName = $param["PluginName"];
        }

        if (array_key_exists("ResourceConsumptionList",$param) and $param["ResourceConsumptionList"] !== null) {
            $this->ResourceConsumptionList = [];
            foreach ($param["ResourceConsumptionList"] as $key => $value){
                $obj = new ResourceConsumption();
                $obj->deserialize($value);
                array_push($this->ResourceConsumptionList, $obj);
            }
        }

        if (array_key_exists("ToolName",$param) and $param["ToolName"] !== null) {
            $this->ToolName = $param["ToolName"];
        }
    }
}

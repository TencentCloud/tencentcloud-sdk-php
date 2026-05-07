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
 * 托管型AI 模型信息
 *
 * @method string getModel() 获取<p>模型名</p>
 * @method void setModel(string $Model) 设置<p>模型名</p>
 * @method boolean getEnableMCP() 获取<p>是否开启MCP</p>
 * @method void setEnableMCP(boolean $EnableMCP) 设置<p>是否开启MCP</p>
 * @method ManagedAIModelSpec getModelSpec() 获取<p>模型规格</p>
 * @method void setModelSpec(ManagedAIModelSpec $ModelSpec) 设置<p>模型规格</p>
 * @method array getModelChargingInfo() 获取<p>模型计费信息</p>
 * @method void setModelChargingInfo(array $ModelChargingInfo) 设置<p>模型计费信息</p>
 */
class ManagedAIModel extends AbstractModel
{
    /**
     * @var string <p>模型名</p>
     */
    public $Model;

    /**
     * @var boolean <p>是否开启MCP</p>
     */
    public $EnableMCP;

    /**
     * @var ManagedAIModelSpec <p>模型规格</p>
     */
    public $ModelSpec;

    /**
     * @var array <p>模型计费信息</p>
     */
    public $ModelChargingInfo;

    /**
     * @param string $Model <p>模型名</p>
     * @param boolean $EnableMCP <p>是否开启MCP</p>
     * @param ManagedAIModelSpec $ModelSpec <p>模型规格</p>
     * @param array $ModelChargingInfo <p>模型计费信息</p>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("EnableMCP",$param) and $param["EnableMCP"] !== null) {
            $this->EnableMCP = $param["EnableMCP"];
        }

        if (array_key_exists("ModelSpec",$param) and $param["ModelSpec"] !== null) {
            $this->ModelSpec = new ManagedAIModelSpec();
            $this->ModelSpec->deserialize($param["ModelSpec"]);
        }

        if (array_key_exists("ModelChargingInfo",$param) and $param["ModelChargingInfo"] !== null) {
            $this->ModelChargingInfo = [];
            foreach ($param["ModelChargingInfo"] as $key => $value){
                $obj = new ManagedAIModelChargingInfo();
                $obj->deserialize($value);
                array_push($this->ModelChargingInfo, $obj);
            }
        }
    }
}

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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务类型信息，供前端下拉筛选使用
 *
 * @method string getFlowName() 获取<p>任务类型名称，后续可以对 DescribeFlows 出参中的 FlowName 进行筛选</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowName(string $FlowName) 设置<p>任务类型名称，后续可以对 DescribeFlows 出参中的 FlowName 进行筛选</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowDesc() 获取<p>任务类型中文描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowDesc(string $FlowDesc) 设置<p>任务类型中文描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class FlowType extends AbstractModel
{
    /**
     * @var string <p>任务类型名称，后续可以对 DescribeFlows 出参中的 FlowName 进行筛选</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowName;

    /**
     * @var string <p>任务类型中文描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowDesc;

    /**
     * @param string $FlowName <p>任务类型名称，后续可以对 DescribeFlows 出参中的 FlowName 进行筛选</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowDesc <p>任务类型中文描述</p>
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
        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowDesc",$param) and $param["FlowDesc"] !== null) {
            $this->FlowDesc = $param["FlowDesc"];
        }
    }
}

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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同审查清单大类
 *
 * @method string getName() 获取<p>合同风险审查清单分组名称，每个分组下可以包含多个检查点</p>
 * @method void setName(string $Name) 设置<p>合同风险审查清单分组名称，每个分组下可以包含多个检查点</p>
 * @method array getPoints() 获取<p>合同风险审查清单检查点列表，每个检查点定义了一个具体的风险项</p>
 * @method void setPoints(array $Points) 设置<p>合同风险审查清单检查点列表，每个检查点定义了一个具体的风险项</p>
 */
class ChecklistCategory extends AbstractModel
{
    /**
     * @var string <p>合同风险审查清单分组名称，每个分组下可以包含多个检查点</p>
     */
    public $Name;

    /**
     * @var array <p>合同风险审查清单检查点列表，每个检查点定义了一个具体的风险项</p>
     */
    public $Points;

    /**
     * @param string $Name <p>合同风险审查清单分组名称，每个分组下可以包含多个检查点</p>
     * @param array $Points <p>合同风险审查清单检查点列表，每个检查点定义了一个具体的风险项</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Points",$param) and $param["Points"] !== null) {
            $this->Points = [];
            foreach ($param["Points"] as $key => $value){
                $obj = new ChecklistPoint();
                $obj->deserialize($value);
                array_push($this->Points, $obj);
            }
        }
    }
}

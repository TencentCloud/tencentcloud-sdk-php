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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 过滤条件。同一 Name 下多个 Values 为或关系；不同 Name 之间为且关系。支持的 Name：TaskID（任务ID精确）、TaskStatus（任务状态）、TaskType（任务类型）
 *
 * @method string getName() 获取过滤条件名称。取值：TaskID（任务ID，精确匹配）、TaskStatus（任务状态，Values: INIT/SCANNING/SUCCESS/FAILED）、TaskType（任务类型，Values: PERIODIC/MANUAL）
 * @method void setName(string $Name) 设置过滤条件名称。取值：TaskID（任务ID，精确匹配）、TaskStatus（任务状态，Values: INIT/SCANNING/SUCCESS/FAILED）、TaskType（任务类型，Values: PERIODIC/MANUAL）
 * @method array getValues() 获取过滤条件值列表
 * @method void setValues(array $Values) 设置过滤条件值列表
 * @method string getExactMatch() 获取是否精确匹配：1 精确匹配；默认模糊匹配
 * @method void setExactMatch(string $ExactMatch) 设置是否精确匹配：1 精确匹配；默认模糊匹配
 */
class Filters extends AbstractModel
{
    /**
     * @var string 过滤条件名称。取值：TaskID（任务ID，精确匹配）、TaskStatus（任务状态，Values: INIT/SCANNING/SUCCESS/FAILED）、TaskType（任务类型，Values: PERIODIC/MANUAL）
     */
    public $Name;

    /**
     * @var array 过滤条件值列表
     */
    public $Values;

    /**
     * @var string 是否精确匹配：1 精确匹配；默认模糊匹配
     */
    public $ExactMatch;

    /**
     * @param string $Name 过滤条件名称。取值：TaskID（任务ID，精确匹配）、TaskStatus（任务状态，Values: INIT/SCANNING/SUCCESS/FAILED）、TaskType（任务类型，Values: PERIODIC/MANUAL）
     * @param array $Values 过滤条件值列表
     * @param string $ExactMatch 是否精确匹配：1 精确匹配；默认模糊匹配
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("ExactMatch",$param) and $param["ExactMatch"] !== null) {
            $this->ExactMatch = $param["ExactMatch"];
        }
    }
}

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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 冲突处理里的详细描述
 *
 * @method string getConditionColumn() 获取条件覆盖的列
 * @method void setConditionColumn(string $ConditionColumn) 设置条件覆盖的列
 * @method string getConditionOperator() 获取条件覆盖操作，目前仅支持>
 * @method void setConditionOperator(string $ConditionOperator) 设置条件覆盖操作，目前仅支持>
 * @method string getConditionOrderInSrcAndDst() 获取条件覆盖优先级处理，支持类型有>,<,=
 * @method void setConditionOrderInSrcAndDst(string $ConditionOrderInSrcAndDst) 设置条件覆盖优先级处理，支持类型有>,<,=
 */
class ConflictHandleOption extends AbstractModel
{
    /**
     * @var string 条件覆盖的列
     */
    public $ConditionColumn;

    /**
     * @var string 条件覆盖操作，目前仅支持>
     */
    public $ConditionOperator;

    /**
     * @var string 条件覆盖优先级处理，支持类型有>,<,=
     */
    public $ConditionOrderInSrcAndDst;

    /**
     * @param string $ConditionColumn 条件覆盖的列
     * @param string $ConditionOperator 条件覆盖操作，目前仅支持>
     * @param string $ConditionOrderInSrcAndDst 条件覆盖优先级处理，支持类型有>,<,=
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
        if (array_key_exists("ConditionColumn",$param) and $param["ConditionColumn"] !== null) {
            $this->ConditionColumn = $param["ConditionColumn"];
        }

        if (array_key_exists("ConditionOperator",$param) and $param["ConditionOperator"] !== null) {
            $this->ConditionOperator = $param["ConditionOperator"];
        }

        if (array_key_exists("ConditionOrderInSrcAndDst",$param) and $param["ConditionOrderInSrcAndDst"] !== null) {
            $this->ConditionOrderInSrcAndDst = $param["ConditionOrderInSrcAndDst"];
        }
    }
}

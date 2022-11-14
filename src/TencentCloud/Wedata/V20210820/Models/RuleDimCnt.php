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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RuleDimCnt 规则维度统计
 *
 * @method integer getDim() 获取1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性
 * @method void setDim(integer $Dim) 设置1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性
 * @method integer getCnt() 获取count 数
 * @method void setCnt(integer $Cnt) 设置count 数
 */
class RuleDimCnt extends AbstractModel
{
    /**
     * @var integer 1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性
     */
    public $Dim;

    /**
     * @var integer count 数
     */
    public $Cnt;

    /**
     * @param integer $Dim 1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性
     * @param integer $Cnt count 数
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
        if (array_key_exists("Dim",$param) and $param["Dim"] !== null) {
            $this->Dim = $param["Dim"];
        }

        if (array_key_exists("Cnt",$param) and $param["Cnt"] !== null) {
            $this->Cnt = $param["Cnt"];
        }
    }
}

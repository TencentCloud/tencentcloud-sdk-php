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
 * DescribeBaselineTaskDagResponse
 *
 * @method BaselineDto getBaseline() 获取基线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaseline(BaselineDto $Baseline) 设置基线
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBaselineTaskDag() 获取基线任务dag
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaselineTaskDag(array $BaselineTaskDag) 设置基线任务dag
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeBaselineTaskDagResponse extends AbstractModel
{
    /**
     * @var BaselineDto 基线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Baseline;

    /**
     * @var array 基线任务dag
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaselineTaskDag;

    /**
     * @param BaselineDto $Baseline 基线
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BaselineTaskDag 基线任务dag
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
        if (array_key_exists("Baseline",$param) and $param["Baseline"] !== null) {
            $this->Baseline = new BaselineDto();
            $this->Baseline->deserialize($param["Baseline"]);
        }

        if (array_key_exists("BaselineTaskDag",$param) and $param["BaselineTaskDag"] !== null) {
            $this->BaselineTaskDag = [];
            foreach ($param["BaselineTaskDag"] as $key => $value){
                $obj = new BaselineTaskDto();
                $obj->deserialize($value);
                array_push($this->BaselineTaskDag, $obj);
            }
        }
    }
}

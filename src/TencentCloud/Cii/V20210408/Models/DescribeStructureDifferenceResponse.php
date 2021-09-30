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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStructureDifference返回参数结构体
 *
 * @method string getMainTaskId() 获取主任务号
 * @method void setMainTaskId(string $MainTaskId) 设置主任务号
 * @method integer getStatus() 获取结果状态：
0：返回成功
1：结果未生成
2：结果生成失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置结果状态：
0：返回成功
1：结果未生成
2：结果生成失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResults() 获取差异的结果数组
 * @method void setResults(array $Results) 设置差异的结果数组
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeStructureDifferenceResponse extends AbstractModel
{
    /**
     * @var string 主任务号
     */
    public $MainTaskId;

    /**
     * @var integer 结果状态：
0：返回成功
1：结果未生成
2：结果生成失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 差异的结果数组
     */
    public $Results;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MainTaskId 主任务号
     * @param integer $Status 结果状态：
0：返回成功
1：结果未生成
2：结果生成失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Results 差异的结果数组
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("MainTaskId",$param) and $param["MainTaskId"] !== null) {
            $this->MainTaskId = $param["MainTaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new PerStructDifference();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

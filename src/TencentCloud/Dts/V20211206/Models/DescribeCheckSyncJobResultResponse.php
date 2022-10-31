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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCheckSyncJobResult返回参数结构体
 *
 * @method string getStatus() 获取校验结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置校验结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStepCount() 获取步骤总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepCount(integer $StepCount) 设置步骤总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStepCur() 获取当前所在步骤
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepCur(integer $StepCur) 设置当前所在步骤
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProgress() 获取总体进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgress(integer $Progress) 设置总体进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStepInfos() 获取步骤信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepInfos(array $StepInfos) 设置步骤信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCheckSyncJobResultResponse extends AbstractModel
{
    /**
     * @var string 校验结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 步骤总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepCount;

    /**
     * @var integer 当前所在步骤
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepCur;

    /**
     * @var integer 总体进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Progress;

    /**
     * @var array 步骤信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepInfos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 校验结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StepCount 步骤总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StepCur 当前所在步骤
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Progress 总体进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StepInfos 步骤信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StepCount",$param) and $param["StepCount"] !== null) {
            $this->StepCount = $param["StepCount"];
        }

        if (array_key_exists("StepCur",$param) and $param["StepCur"] !== null) {
            $this->StepCur = $param["StepCur"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("StepInfos",$param) and $param["StepInfos"] !== null) {
            $this->StepInfos = [];
            foreach ($param["StepInfos"] as $key => $value){
                $obj = new StepInfo();
                $obj->deserialize($value);
                array_push($this->StepInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

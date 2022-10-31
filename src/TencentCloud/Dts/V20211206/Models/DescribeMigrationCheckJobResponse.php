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
 * DescribeMigrationCheckJob返回参数结构体
 *
 * @method string getStatus() 获取校验任务执行状态，如：notStarted(未开始)、running(校验中)、failed(校验任务失败)、success(任务成功)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置校验任务执行状态，如：notStarted(未开始)、running(校验中)、failed(校验任务失败)、success(任务成功)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBriefMsg() 获取校验任务结果输出简要信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBriefMsg(string $BriefMsg) 设置校验任务结果输出简要信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStepInfo() 获取检查步骤
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepInfo(array $StepInfo) 设置检查步骤
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckFlag() 获取校验结果，如：checkPass(校验通过)、checkNotPass(校验未通过)
 * @method void setCheckFlag(string $CheckFlag) 设置校验结果，如：checkPass(校验通过)、checkNotPass(校验未通过)
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMigrationCheckJobResponse extends AbstractModel
{
    /**
     * @var string 校验任务执行状态，如：notStarted(未开始)、running(校验中)、failed(校验任务失败)、success(任务成功)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 校验任务结果输出简要信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BriefMsg;

    /**
     * @var array 检查步骤
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepInfo;

    /**
     * @var string 校验结果，如：checkPass(校验通过)、checkNotPass(校验未通过)
     */
    public $CheckFlag;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 校验任务执行状态，如：notStarted(未开始)、running(校验中)、failed(校验任务失败)、success(任务成功)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BriefMsg 校验任务结果输出简要信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StepInfo 检查步骤
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckFlag 校验结果，如：checkPass(校验通过)、checkNotPass(校验未通过)
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

        if (array_key_exists("BriefMsg",$param) and $param["BriefMsg"] !== null) {
            $this->BriefMsg = $param["BriefMsg"];
        }

        if (array_key_exists("StepInfo",$param) and $param["StepInfo"] !== null) {
            $this->StepInfo = [];
            foreach ($param["StepInfo"] as $key => $value){
                $obj = new CheckStep();
                $obj->deserialize($value);
                array_push($this->StepInfo, $obj);
            }
        }

        if (array_key_exists("CheckFlag",$param) and $param["CheckFlag"] !== null) {
            $this->CheckFlag = $param["CheckFlag"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

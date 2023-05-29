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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SparkSQL批任务运行日志
 *
 * @method string getStep() 获取日志步骤：BEG/CS/DS/DSS/DSF/FINF/RTO/CANCEL/CT/DT/DTS/DTF/FINT/EXCE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStep(string $Step) 设置日志步骤：BEG/CS/DS/DSS/DSF/FINF/RTO/CANCEL/CT/DT/DTS/DTF/FINT/EXCE
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTime() 获取时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(string $Time) 设置时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取日志提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置日志提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOperate() 获取日志操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperate(array $Operate) 设置日志操作
注意：此字段可能返回 null，表示取不到有效值。
 */
class SparkSessionBatchLog extends AbstractModel
{
    /**
     * @var string 日志步骤：BEG/CS/DS/DSS/DSF/FINF/RTO/CANCEL/CT/DT/DTS/DTF/FINT/EXCE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Step;

    /**
     * @var string 时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var string 日志提示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var array 日志操作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operate;

    /**
     * @param string $Step 日志步骤：BEG/CS/DS/DSS/DSF/FINF/RTO/CANCEL/CT/DT/DTS/DTF/FINT/EXCE
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Time 时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 日志提示
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Operate 日志操作
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
        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = [];
            foreach ($param["Operate"] as $key => $value){
                $obj = new SparkSessionBatchLogOperate();
                $obj->deserialize($value);
                array_push($this->Operate, $obj);
            }
        }
    }
}

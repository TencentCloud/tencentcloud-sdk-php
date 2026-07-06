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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述作业发生的一个事件
 *
 * @method string getType() 获取<p>内部定义的事件类型</p>
 * @method void setType(string $Type) 设置<p>内部定义的事件类型</p>
 * @method string getDescription() 获取<p>事件类型的说明文字</p>
 * @method void setDescription(string $Description) 设置<p>事件类型的说明文字</p>
 * @method integer getTimestamp() 获取<p>事件发生的 Unix 时间戳（秒）</p>
 * @method void setTimestamp(integer $Timestamp) 设置<p>事件发生的 Unix 时间戳（秒）</p>
 * @method integer getRunningOrderId() 获取<p>事件发生时的运行 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningOrderId(integer $RunningOrderId) 设置<p>事件发生时的运行 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取<p>事件的一些可选说明</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置<p>事件的一些可选说明</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSolutionLink() 获取<p>异常事件的排查手册链接</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSolutionLink(string $SolutionLink) 设置<p>异常事件的排查手册链接</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCauseAnalysis() 获取<p>异常事件原因分析</p>
 * @method void setCauseAnalysis(string $CauseAnalysis) 设置<p>异常事件原因分析</p>
 * @method string getSolution() 获取<p>异常事件处理的参考方案</p>
 * @method void setSolution(string $Solution) 设置<p>异常事件处理的参考方案</p>
 */
class JobEvent extends AbstractModel
{
    /**
     * @var string <p>内部定义的事件类型</p>
     */
    public $Type;

    /**
     * @var string <p>事件类型的说明文字</p>
     */
    public $Description;

    /**
     * @var integer <p>事件发生的 Unix 时间戳（秒）</p>
     */
    public $Timestamp;

    /**
     * @var integer <p>事件发生时的运行 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningOrderId;

    /**
     * @var string <p>事件的一些可选说明</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string <p>异常事件的排查手册链接</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SolutionLink;

    /**
     * @var string <p>异常事件原因分析</p>
     */
    public $CauseAnalysis;

    /**
     * @var string <p>异常事件处理的参考方案</p>
     */
    public $Solution;

    /**
     * @param string $Type <p>内部定义的事件类型</p>
     * @param string $Description <p>事件类型的说明文字</p>
     * @param integer $Timestamp <p>事件发生的 Unix 时间戳（秒）</p>
     * @param integer $RunningOrderId <p>事件发生时的运行 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message <p>事件的一些可选说明</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SolutionLink <p>异常事件的排查手册链接</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CauseAnalysis <p>异常事件原因分析</p>
     * @param string $Solution <p>异常事件处理的参考方案</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("RunningOrderId",$param) and $param["RunningOrderId"] !== null) {
            $this->RunningOrderId = $param["RunningOrderId"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("SolutionLink",$param) and $param["SolutionLink"] !== null) {
            $this->SolutionLink = $param["SolutionLink"];
        }

        if (array_key_exists("CauseAnalysis",$param) and $param["CauseAnalysis"] !== null) {
            $this->CauseAnalysis = $param["CauseAnalysis"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }
    }
}

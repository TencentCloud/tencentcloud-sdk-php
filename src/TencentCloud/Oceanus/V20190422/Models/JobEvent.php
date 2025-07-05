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
 * @method string getType() 获取内部定义的事件类型
 * @method void setType(string $Type) 设置内部定义的事件类型
 * @method string getDescription() 获取事件类型的说明文字
 * @method void setDescription(string $Description) 设置事件类型的说明文字
 * @method integer getTimestamp() 获取事件发生的 Unix 时间戳（秒）
 * @method void setTimestamp(integer $Timestamp) 设置事件发生的 Unix 时间戳（秒）
 * @method integer getRunningOrderId() 获取事件发生时的运行 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningOrderId(integer $RunningOrderId) 设置事件发生时的运行 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取事件的一些可选说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置事件的一些可选说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSolutionLink() 获取异常事件的排查手册链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSolutionLink(string $SolutionLink) 设置异常事件的排查手册链接
注意：此字段可能返回 null，表示取不到有效值。
 */
class JobEvent extends AbstractModel
{
    /**
     * @var string 内部定义的事件类型
     */
    public $Type;

    /**
     * @var string 事件类型的说明文字
     */
    public $Description;

    /**
     * @var integer 事件发生的 Unix 时间戳（秒）
     */
    public $Timestamp;

    /**
     * @var integer 事件发生时的运行 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningOrderId;

    /**
     * @var string 事件的一些可选说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 异常事件的排查手册链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SolutionLink;

    /**
     * @param string $Type 内部定义的事件类型
     * @param string $Description 事件类型的说明文字
     * @param integer $Timestamp 事件发生的 Unix 时间戳（秒）
     * @param integer $RunningOrderId 事件发生时的运行 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 事件的一些可选说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SolutionLink 异常事件的排查手册链接
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
    }
}

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
 * 检查步骤
 *
 * @method integer getStepNo() 获取步骤编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepNo(integer $StepNo) 设置步骤编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStepId() 获取步骤Id， 如：ConnectDBCheck、VersionCheck、SrcPrivilegeCheck等，具体校验项和源目标实例相关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepId(string $StepId) 设置步骤Id， 如：ConnectDBCheck、VersionCheck、SrcPrivilegeCheck等，具体校验项和源目标实例相关
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStepName() 获取步骤名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepName(string $StepName) 设置步骤名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStepStatus() 获取此检查步骤的结果，pass(校验通过)、failed(校验失败)、notStarted(校验还未开始进行)、blocked(检验阻塞)、warning(校验有告警，但仍通过)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepStatus(string $StepStatus) 设置此检查步骤的结果，pass(校验通过)、failed(校验失败)、notStarted(校验还未开始进行)、blocked(检验阻塞)、warning(校验有告警，但仍通过)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStepMessage() 获取此检查步骤的错误消息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepMessage(string $StepMessage) 设置此检查步骤的错误消息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDetailCheckItems() 获取每个检查步骤里的具体检查项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetailCheckItems(array $DetailCheckItems) 设置每个检查步骤里的具体检查项
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasSkipped() 获取是否已跳过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasSkipped(boolean $HasSkipped) 设置是否已跳过
注意：此字段可能返回 null，表示取不到有效值。
 */
class CheckStep extends AbstractModel
{
    /**
     * @var integer 步骤编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepNo;

    /**
     * @var string 步骤Id， 如：ConnectDBCheck、VersionCheck、SrcPrivilegeCheck等，具体校验项和源目标实例相关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepId;

    /**
     * @var string 步骤名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepName;

    /**
     * @var string 此检查步骤的结果，pass(校验通过)、failed(校验失败)、notStarted(校验还未开始进行)、blocked(检验阻塞)、warning(校验有告警，但仍通过)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepStatus;

    /**
     * @var string 此检查步骤的错误消息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepMessage;

    /**
     * @var array 每个检查步骤里的具体检查项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetailCheckItems;

    /**
     * @var boolean 是否已跳过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasSkipped;

    /**
     * @param integer $StepNo 步骤编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StepId 步骤Id， 如：ConnectDBCheck、VersionCheck、SrcPrivilegeCheck等，具体校验项和源目标实例相关
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StepName 步骤名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StepStatus 此检查步骤的结果，pass(校验通过)、failed(校验失败)、notStarted(校验还未开始进行)、blocked(检验阻塞)、warning(校验有告警，但仍通过)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StepMessage 此检查步骤的错误消息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DetailCheckItems 每个检查步骤里的具体检查项
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasSkipped 是否已跳过
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
        if (array_key_exists("StepNo",$param) and $param["StepNo"] !== null) {
            $this->StepNo = $param["StepNo"];
        }

        if (array_key_exists("StepId",$param) and $param["StepId"] !== null) {
            $this->StepId = $param["StepId"];
        }

        if (array_key_exists("StepName",$param) and $param["StepName"] !== null) {
            $this->StepName = $param["StepName"];
        }

        if (array_key_exists("StepStatus",$param) and $param["StepStatus"] !== null) {
            $this->StepStatus = $param["StepStatus"];
        }

        if (array_key_exists("StepMessage",$param) and $param["StepMessage"] !== null) {
            $this->StepMessage = $param["StepMessage"];
        }

        if (array_key_exists("DetailCheckItems",$param) and $param["DetailCheckItems"] !== null) {
            $this->DetailCheckItems = [];
            foreach ($param["DetailCheckItems"] as $key => $value){
                $obj = new DetailCheckItem();
                $obj->deserialize($value);
                array_push($this->DetailCheckItems, $obj);
            }
        }

        if (array_key_exists("HasSkipped",$param) and $param["HasSkipped"] !== null) {
            $this->HasSkipped = $param["HasSkipped"];
        }
    }
}

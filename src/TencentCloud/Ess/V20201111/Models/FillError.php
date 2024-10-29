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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量补充签署人时，补充失败的报错说明
 *
 * @method string getRecipientId() 获取为签署方经办人在签署合同中的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。与入参中补充的签署人角色ID对应，批量补充部分失败返回对应的错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecipientId(string $RecipientId) 设置为签署方经办人在签署合同中的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。与入参中补充的签署人角色ID对应，批量补充部分失败返回对应的错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrMessage() 获取补充失败错误说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrMessage(string $ErrMessage) 设置补充失败错误说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowId() 获取合同流程ID，为32位字符串。	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowId(string $FlowId) 设置合同流程ID，为32位字符串。	
注意：此字段可能返回 null，表示取不到有效值。
 */
class FillError extends AbstractModel
{
    /**
     * @var string 为签署方经办人在签署合同中的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。与入参中补充的签署人角色ID对应，批量补充部分失败返回对应的错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecipientId;

    /**
     * @var string 补充失败错误说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrMessage;

    /**
     * @var string 合同流程ID，为32位字符串。	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowId;

    /**
     * @param string $RecipientId 为签署方经办人在签署合同中的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。与入参中补充的签署人角色ID对应，批量补充部分失败返回对应的错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrMessage 补充失败错误说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowId 合同流程ID，为32位字符串。	
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
        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }

        if (array_key_exists("ErrMessage",$param) and $param["ErrMessage"] !== null) {
            $this->ErrMessage = $param["ErrMessage"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }
    }
}

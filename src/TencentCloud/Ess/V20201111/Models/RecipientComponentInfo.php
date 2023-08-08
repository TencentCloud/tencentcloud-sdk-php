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
 * 参与方填写控件信息
 *
 * @method string getRecipientId() 获取参与方Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecipientId(string $RecipientId) 设置参与方Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecipientFillStatus() 获取参与方填写状态
0-未填写
1-已填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecipientFillStatus(string $RecipientFillStatus) 设置参与方填写状态
0-未填写
1-已填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsPromoter() 获取是否为发起方
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPromoter(boolean $IsPromoter) 设置是否为发起方
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getComponents() 获取填写控件列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponents(array $Components) 设置填写控件列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecipientComponentInfo extends AbstractModel
{
    /**
     * @var string 参与方Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecipientId;

    /**
     * @var string 参与方填写状态
0-未填写
1-已填写
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecipientFillStatus;

    /**
     * @var boolean 是否为发起方
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPromoter;

    /**
     * @var array 填写控件列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Components;

    /**
     * @param string $RecipientId 参与方Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecipientFillStatus 参与方填写状态
0-未填写
1-已填写
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsPromoter 是否为发起方
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Components 填写控件列表
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

        if (array_key_exists("RecipientFillStatus",$param) and $param["RecipientFillStatus"] !== null) {
            $this->RecipientFillStatus = $param["RecipientFillStatus"];
        }

        if (array_key_exists("IsPromoter",$param) and $param["IsPromoter"] !== null) {
            $this->IsPromoter = $param["IsPromoter"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new FilledComponent();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }
    }
}

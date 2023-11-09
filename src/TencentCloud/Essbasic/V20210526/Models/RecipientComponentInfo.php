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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参与方填写控件信息
 *
 * @method string getRecipientId() 获取参与方的角色ID
 * @method void setRecipientId(string $RecipientId) 设置参与方的角色ID
 * @method string getRecipientFillStatus() 获取参与方填写状态

<ul><li> **0** : 还没有填写</li>
<li> **1** : 已经填写</li></ul>
 * @method void setRecipientFillStatus(string $RecipientFillStatus) 设置参与方填写状态

<ul><li> **0** : 还没有填写</li>
<li> **1** : 已经填写</li></ul>
 * @method boolean getIsPromoter() 获取此角色是否是发起方角色

<ul><li> **true** : 是发起方角色</li>
<li> **false** : 不是发起方角色</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPromoter(boolean $IsPromoter) 设置此角色是否是发起方角色

<ul><li> **true** : 是发起方角色</li>
<li> **false** : 不是发起方角色</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getComponents() 获取此角色的填写控件列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponents(array $Components) 设置此角色的填写控件列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecipientComponentInfo extends AbstractModel
{
    /**
     * @var string 参与方的角色ID
     */
    public $RecipientId;

    /**
     * @var string 参与方填写状态

<ul><li> **0** : 还没有填写</li>
<li> **1** : 已经填写</li></ul>
     */
    public $RecipientFillStatus;

    /**
     * @var boolean 此角色是否是发起方角色

<ul><li> **true** : 是发起方角色</li>
<li> **false** : 不是发起方角色</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPromoter;

    /**
     * @var array 此角色的填写控件列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Components;

    /**
     * @param string $RecipientId 参与方的角色ID
     * @param string $RecipientFillStatus 参与方填写状态

<ul><li> **0** : 还没有填写</li>
<li> **1** : 已经填写</li></ul>
     * @param boolean $IsPromoter 此角色是否是发起方角色

<ul><li> **true** : 是发起方角色</li>
<li> **false** : 不是发起方角色</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Components 此角色的填写控件列表
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

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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BuildLog
 *
 * @method integer getTotal() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDelivered() 获取触达ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelivered(integer $Delivered) 设置触达ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取文档
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置文档
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getMore() 获取是否更多
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMore(boolean $More) 设置是否更多
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudBaseRunBuildLog extends AbstractModel
{
    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var integer 触达ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Delivered;

    /**
     * @var string 文档
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var boolean 是否更多
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $More;

    /**
     * @param integer $Total 总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Delivered 触达ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text 文档
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $More 是否更多
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Delivered",$param) and $param["Delivered"] !== null) {
            $this->Delivered = $param["Delivered"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("More",$param) and $param["More"] !== null) {
            $this->More = $param["More"];
        }
    }
}

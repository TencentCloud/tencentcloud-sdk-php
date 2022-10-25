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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 附加项信息
 *
 * @method integer getAttachmentAmount() 获取附加项金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachmentAmount(integer $AttachmentAmount) 设置附加项金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttachmentType() 获取附加项类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachmentType(string $AttachmentType) 设置附加项类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttachmentName() 获取附加项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachmentName(string $AttachmentName) 设置附加项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttachmentCode() 获取附加项编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachmentCode(string $AttachmentCode) 设置附加项编号
注意：此字段可能返回 null，表示取不到有效值。
 */
class OldAttachmentInfo extends AbstractModel
{
    /**
     * @var integer 附加项金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachmentAmount;

    /**
     * @var string 附加项类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachmentType;

    /**
     * @var string 附加项名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachmentName;

    /**
     * @var string 附加项编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachmentCode;

    /**
     * @param integer $AttachmentAmount 附加项金额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttachmentType 附加项类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttachmentName 附加项名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttachmentCode 附加项编号
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
        if (array_key_exists("AttachmentAmount",$param) and $param["AttachmentAmount"] !== null) {
            $this->AttachmentAmount = $param["AttachmentAmount"];
        }

        if (array_key_exists("AttachmentType",$param) and $param["AttachmentType"] !== null) {
            $this->AttachmentType = $param["AttachmentType"];
        }

        if (array_key_exists("AttachmentName",$param) and $param["AttachmentName"] !== null) {
            $this->AttachmentName = $param["AttachmentName"];
        }

        if (array_key_exists("AttachmentCode",$param) and $param["AttachmentCode"] !== null) {
            $this->AttachmentCode = $param["AttachmentCode"];
        }
    }
}

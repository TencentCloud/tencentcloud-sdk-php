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
 * 模板中指定的印章信息
 *
 * @method string getSealId() 获取印章ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSealId(string $SealId) 设置印章ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSealType() 获取印章类型。LEGAL_PERSON_SEAL: 法定代表人章；
ORGANIZATIONSEAL：企业印章；
OFFICIAL：企业公章；
CONTRACT：合同专用章
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSealType(string $SealType) 设置印章类型。LEGAL_PERSON_SEAL: 法定代表人章；
ORGANIZATIONSEAL：企业印章；
OFFICIAL：企业公章；
CONTRACT：合同专用章
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSealName() 获取印章名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSealName(string $SealName) 设置印章名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class SealInfo extends AbstractModel
{
    /**
     * @var string 印章ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SealId;

    /**
     * @var string 印章类型。LEGAL_PERSON_SEAL: 法定代表人章；
ORGANIZATIONSEAL：企业印章；
OFFICIAL：企业公章；
CONTRACT：合同专用章
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SealType;

    /**
     * @var string 印章名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SealName;

    /**
     * @param string $SealId 印章ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SealType 印章类型。LEGAL_PERSON_SEAL: 法定代表人章；
ORGANIZATIONSEAL：企业印章；
OFFICIAL：企业公章；
CONTRACT：合同专用章
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SealName 印章名称
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
        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }

        if (array_key_exists("SealType",$param) and $param["SealType"] !== null) {
            $this->SealType = $param["SealType"];
        }

        if (array_key_exists("SealName",$param) and $param["SealName"] !== null) {
            $this->SealName = $param["SealName"];
        }
    }
}

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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 组织身份策略
 *
 * @method integer getPolicyId() 获取CAM预设策略ID。PolicyType 为预设策略时有效且必选
 * @method void setPolicyId(integer $PolicyId) 设置CAM预设策略ID。PolicyType 为预设策略时有效且必选
 * @method string getPolicyName() 获取CAM预设策略名称。PolicyType 为预设策略时有效且必选
 * @method void setPolicyName(string $PolicyName) 设置CAM预设策略名称。PolicyType 为预设策略时有效且必选
 * @method integer getPolicyType() 获取策略类型。取值 1-自定义策略  2-预设策略；默认值2
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyType(integer $PolicyType) 设置策略类型。取值 1-自定义策略  2-预设策略；默认值2
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyDocument() 获取自定义策略内容，遵循CAM策略语法。PolicyType 为自定义策略时有效且必选
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyDocument(string $PolicyDocument) 设置自定义策略内容，遵循CAM策略语法。PolicyType 为自定义策略时有效且必选
注意：此字段可能返回 null，表示取不到有效值。
 */
class IdentityPolicy extends AbstractModel
{
    /**
     * @var integer CAM预设策略ID。PolicyType 为预设策略时有效且必选
     */
    public $PolicyId;

    /**
     * @var string CAM预设策略名称。PolicyType 为预设策略时有效且必选
     */
    public $PolicyName;

    /**
     * @var integer 策略类型。取值 1-自定义策略  2-预设策略；默认值2
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyType;

    /**
     * @var string 自定义策略内容，遵循CAM策略语法。PolicyType 为自定义策略时有效且必选
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyDocument;

    /**
     * @param integer $PolicyId CAM预设策略ID。PolicyType 为预设策略时有效且必选
     * @param string $PolicyName CAM预设策略名称。PolicyType 为预设策略时有效且必选
     * @param integer $PolicyType 策略类型。取值 1-自定义策略  2-预设策略；默认值2
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyDocument 自定义策略内容，遵循CAM策略语法。PolicyType 为自定义策略时有效且必选
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }
    }
}

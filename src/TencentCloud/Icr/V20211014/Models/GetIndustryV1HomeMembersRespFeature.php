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
namespace TencentCloud\Icr\V20211014\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取成员列表接口回包Feature
 *
 * @method string getFeatureName() 获取功能名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeatureName(string $FeatureName) 设置功能名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getID() 获取功能ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(string $ID) 设置功能ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class GetIndustryV1HomeMembersRespFeature extends AbstractModel
{
    /**
     * @var string 功能名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FeatureName;

    /**
     * @var string 功能ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @param string $FeatureName 功能名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ID 功能ID
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
        if (array_key_exists("FeatureName",$param) and $param["FeatureName"] !== null) {
            $this->FeatureName = $param["FeatureName"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}

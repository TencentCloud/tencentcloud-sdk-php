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
 * 获取成员列表回包Industry
 *
 * @method string getID() 获取行业ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(string $ID) 设置行业ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndustryName() 获取行业名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndustryName(string $IndustryName) 设置行业名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class GetIndustryV1HomeMembersRespIndustry extends AbstractModel
{
    /**
     * @var string 行业ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string 行业名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndustryName;

    /**
     * @param string $ID 行业ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndustryName 行业名称
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("IndustryName",$param) and $param["IndustryName"] !== null) {
            $this->IndustryName = $param["IndustryName"];
        }
    }
}

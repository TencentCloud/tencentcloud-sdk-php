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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全模板绑定域名状态
 *
 * @method string getZoneId() 获取站点ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEntityStatus() 获取实例状态列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntityStatus(array $EntityStatus) 设置实例状态列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TemplateScope extends AbstractModel
{
    /**
     * @var string 站点ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var array 实例状态列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EntityStatus;

    /**
     * @param string $ZoneId 站点ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EntityStatus 实例状态列表。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("EntityStatus",$param) and $param["EntityStatus"] !== null) {
            $this->EntityStatus = [];
            foreach ($param["EntityStatus"] as $key => $value){
                $obj = new EntityStatus();
                $obj->deserialize($value);
                array_push($this->EntityStatus, $obj);
            }
        }
    }
}

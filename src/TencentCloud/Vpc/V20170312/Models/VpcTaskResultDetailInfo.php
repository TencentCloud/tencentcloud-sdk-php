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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Vpc任务结果详细信息。
 *
 * @method string getResourceId() 获取资源ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置资源ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态。
注意：此字段可能返回 null，表示取不到有效值。
 */
class VpcTaskResultDetailInfo extends AbstractModel
{
    /**
     * @var string 资源ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var string 状态。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $ResourceId 资源ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态。
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

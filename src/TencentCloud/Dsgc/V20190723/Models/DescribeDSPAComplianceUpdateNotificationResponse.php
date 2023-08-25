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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPAComplianceUpdateNotification返回参数结构体
 *
 * @method boolean getIsUpdated() 获取模板是否更新
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUpdated(boolean $IsUpdated) 设置模板是否更新
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskNameSet() 获取任务名称集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskNameSet(array $TaskNameSet) 设置任务名称集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDSPAComplianceUpdateNotificationResponse extends AbstractModel
{
    /**
     * @var boolean 模板是否更新
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUpdated;

    /**
     * @var array 任务名称集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskNameSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $IsUpdated 模板是否更新
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskNameSet 任务名称集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("IsUpdated",$param) and $param["IsUpdated"] !== null) {
            $this->IsUpdated = $param["IsUpdated"];
        }

        if (array_key_exists("TaskNameSet",$param) and $param["TaskNameSet"] !== null) {
            $this->TaskNameSet = $param["TaskNameSet"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 采集器状态统计
 *
 * @method string getStatus() 获取agent状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置agent状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取对应状态的agent总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置对应状态的agent总数
注意：此字段可能返回 null，表示取不到有效值。
 */
class CvmAgentStatus extends AbstractModel
{
    /**
     * @var string agent状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 对应状态的agent总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @param string $Status agent状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 对应状态的agent总数
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}

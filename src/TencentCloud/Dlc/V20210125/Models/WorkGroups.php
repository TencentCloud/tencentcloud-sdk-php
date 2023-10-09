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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作组集合
 *
 * @method array getWorkGroupSet() 获取工作组信息集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkGroupSet(array $WorkGroupSet) 设置工作组信息集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取工作组总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置工作组总数
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkGroups extends AbstractModel
{
    /**
     * @var array 工作组信息集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkGroupSet;

    /**
     * @var integer 工作组总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @param array $WorkGroupSet 工作组信息集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 工作组总数
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
        if (array_key_exists("WorkGroupSet",$param) and $param["WorkGroupSet"] !== null) {
            $this->WorkGroupSet = [];
            foreach ($param["WorkGroupSet"] as $key => $value){
                $obj = new WorkGroupMessage();
                $obj->deserialize($value);
                array_push($this->WorkGroupSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}

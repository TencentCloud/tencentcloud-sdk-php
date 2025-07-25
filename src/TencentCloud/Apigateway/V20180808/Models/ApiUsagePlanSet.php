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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * api绑定使用计划列表
 *
 * @method integer getTotalCount() 获取API 绑定的使用计划总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置API 绑定的使用计划总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApiUsagePlanList() 获取API 绑定使用计划列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiUsagePlanList(array $ApiUsagePlanList) 设置API 绑定使用计划列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiUsagePlanSet extends AbstractModel
{
    /**
     * @var integer API 绑定的使用计划总数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var array API 绑定使用计划列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiUsagePlanList;

    /**
     * @param integer $TotalCount API 绑定的使用计划总数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApiUsagePlanList API 绑定使用计划列表。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ApiUsagePlanList",$param) and $param["ApiUsagePlanList"] !== null) {
            $this->ApiUsagePlanList = [];
            foreach ($param["ApiUsagePlanList"] as $key => $value){
                $obj = new ApiUsagePlan();
                $obj->deserialize($value);
                array_push($this->ApiUsagePlanList, $obj);
            }
        }
    }
}

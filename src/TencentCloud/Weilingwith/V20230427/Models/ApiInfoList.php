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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API列表
 *
 * @method array getApiInfo() 获取API列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiInfo(array $ApiInfo) 设置API列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取数据总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置数据总条数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiInfoList extends AbstractModel
{
    /**
     * @var array API列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiInfo;

    /**
     * @var integer 数据总条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @param array $ApiInfo API列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 数据总条数
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
        if (array_key_exists("ApiInfo",$param) and $param["ApiInfo"] !== null) {
            $this->ApiInfo = [];
            foreach ($param["ApiInfo"] as $key => $value){
                $obj = new ApiInfo();
                $obj->deserialize($value);
                array_push($this->ApiInfo, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}

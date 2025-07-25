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
 * 应用信息集
 *
 * @method integer getTotalCount() 获取数量
 * @method void setTotalCount(integer $TotalCount) 设置数量
 * @method array getApiAppApiSet() 获取应用绑定的Api信息数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiAppApiSet(array $ApiAppApiSet) 设置应用绑定的Api信息数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiAppApiInfos extends AbstractModel
{
    /**
     * @var integer 数量
     */
    public $TotalCount;

    /**
     * @var array 应用绑定的Api信息数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiAppApiSet;

    /**
     * @param integer $TotalCount 数量
     * @param array $ApiAppApiSet 应用绑定的Api信息数组
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

        if (array_key_exists("ApiAppApiSet",$param) and $param["ApiAppApiSet"] !== null) {
            $this->ApiAppApiSet = [];
            foreach ($param["ApiAppApiSet"] as $key => $value){
                $obj = new ApiAppApiInfo();
                $obj->deserialize($value);
                array_push($this->ApiAppApiSet, $obj);
            }
        }
    }
}

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
 * 策略集合
 *
 * @method array getPolicySet() 获取策略集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicySet(array $PolicySet) 设置策略集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取策略总数
 * @method void setTotalCount(integer $TotalCount) 设置策略总数
 */
class Policys extends AbstractModel
{
    /**
     * @var array 策略集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicySet;

    /**
     * @var integer 策略总数
     */
    public $TotalCount;

    /**
     * @param array $PolicySet 策略集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 策略总数
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
        if (array_key_exists("PolicySet",$param) and $param["PolicySet"] !== null) {
            $this->PolicySet = [];
            foreach ($param["PolicySet"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->PolicySet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}

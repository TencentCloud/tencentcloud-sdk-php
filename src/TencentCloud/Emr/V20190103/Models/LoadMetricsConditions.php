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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 负载指标
 *
 * @method array getLoadMetrics() 获取触发规则条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadMetrics(array $LoadMetrics) 设置触发规则条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMatch() 获取0:所有条件满足
1：满足任意一个
 * @method void setMatch(integer $Match) 设置0:所有条件满足
1：满足任意一个
 */
class LoadMetricsConditions extends AbstractModel
{
    /**
     * @var array 触发规则条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadMetrics;

    /**
     * @var integer 0:所有条件满足
1：满足任意一个
     */
    public $Match;

    /**
     * @param array $LoadMetrics 触发规则条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Match 0:所有条件满足
1：满足任意一个
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
        if (array_key_exists("LoadMetrics",$param) and $param["LoadMetrics"] !== null) {
            $this->LoadMetrics = [];
            foreach ($param["LoadMetrics"] as $key => $value){
                $obj = new LoadMetricsCondition();
                $obj->deserialize($value);
                array_push($this->LoadMetrics, $obj);
            }
        }

        if (array_key_exists("Match",$param) and $param["Match"] !== null) {
            $this->Match = $param["Match"];
        }
    }
}

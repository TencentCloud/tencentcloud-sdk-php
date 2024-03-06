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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 意愿核身点头确认模式结果
 *
 * @method array getDetails() 获取意愿核身结果详细数据，与每段点头确认过程一一对应
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetails(array $Details) 设置意愿核身结果详细数据，与每段点头确认过程一一对应
注意：此字段可能返回 null，表示取不到有效值。
 */
class IntentionActionResult extends AbstractModel
{
    /**
     * @var array 意愿核身结果详细数据，与每段点头确认过程一一对应
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Details;

    /**
     * @param array $Details 意愿核身结果详细数据，与每段点头确认过程一一对应
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
        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new IntentionActionResultDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }
    }
}

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
 * 规则触发条件
 *
 * @method integer getCompareMethod() 获取条件比较方法，1表示大于，2表示小于，3表示大于等于，4表示小于等于。
 * @method void setCompareMethod(integer $CompareMethod) 设置条件比较方法，1表示大于，2表示小于，3表示大于等于，4表示小于等于。
 * @method float getThreshold() 获取条件阈值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThreshold(float $Threshold) 设置条件阈值。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TriggerCondition extends AbstractModel
{
    /**
     * @var integer 条件比较方法，1表示大于，2表示小于，3表示大于等于，4表示小于等于。
     */
    public $CompareMethod;

    /**
     * @var float 条件阈值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Threshold;

    /**
     * @param integer $CompareMethod 条件比较方法，1表示大于，2表示小于，3表示大于等于，4表示小于等于。
     * @param float $Threshold 条件阈值。
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
        if (array_key_exists("CompareMethod",$param) and $param["CompareMethod"] !== null) {
            $this->CompareMethod = $param["CompareMethod"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }
    }
}

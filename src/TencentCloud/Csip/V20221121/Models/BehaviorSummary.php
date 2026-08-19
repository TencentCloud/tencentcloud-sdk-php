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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户行为概览
 *
 * @method array getBehaviorInfo() 获取具体行为数据，用于渲染曲线图
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBehaviorInfo(array $BehaviorInfo) 设置具体行为数据，用于渲染曲线图
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAbnormalCount() 获取异常行为个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbnormalCount(integer $AbnormalCount) 设置异常行为个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAccess() 获取是否接入
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAccess(boolean $IsAccess) 设置是否接入
注意：此字段可能返回 null，表示取不到有效值。
 */
class BehaviorSummary extends AbstractModel
{
    /**
     * @var array 具体行为数据，用于渲染曲线图
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BehaviorInfo;

    /**
     * @var integer 异常行为个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AbnormalCount;

    /**
     * @var boolean 是否接入
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAccess;

    /**
     * @param array $BehaviorInfo 具体行为数据，用于渲染曲线图
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AbnormalCount 异常行为个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAccess 是否接入
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
        if (array_key_exists("BehaviorInfo",$param) and $param["BehaviorInfo"] !== null) {
            $this->BehaviorInfo = [];
            foreach ($param["BehaviorInfo"] as $key => $value){
                $obj = new BehaviorInfo();
                $obj->deserialize($value);
                array_push($this->BehaviorInfo, $obj);
            }
        }

        if (array_key_exists("AbnormalCount",$param) and $param["AbnormalCount"] !== null) {
            $this->AbnormalCount = $param["AbnormalCount"];
        }

        if (array_key_exists("IsAccess",$param) and $param["IsAccess"] !== null) {
            $this->IsAccess = $param["IsAccess"];
        }
    }
}

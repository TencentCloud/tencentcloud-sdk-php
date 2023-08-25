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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSensitiveRDBDataDistribution返回参数结构体
 *
 * @method array getLevelDistribution() 获取分级分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevelDistribution(array $LevelDistribution) 设置分级分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCategoryDistribution() 获取分类分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryDistribution(array $CategoryDistribution) 设置分类分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRuleDistribution() 获取敏感规则分布详情列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleDistribution(array $RuleDistribution) 设置敏感规则分布详情列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveDataNum() 获取计算占比字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveDataNum(integer $SensitiveDataNum) 设置计算占比字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSensitiveRDBDataDistributionResponse extends AbstractModel
{
    /**
     * @var array 分级分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LevelDistribution;

    /**
     * @var array 分类分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryDistribution;

    /**
     * @var array 敏感规则分布详情列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleDistribution;

    /**
     * @var integer 计算占比字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveDataNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $LevelDistribution 分级分布
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CategoryDistribution 分类分布
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RuleDistribution 敏感规则分布详情列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveDataNum 计算占比字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("LevelDistribution",$param) and $param["LevelDistribution"] !== null) {
            $this->LevelDistribution = [];
            foreach ($param["LevelDistribution"] as $key => $value){
                $obj = new Note();
                $obj->deserialize($value);
                array_push($this->LevelDistribution, $obj);
            }
        }

        if (array_key_exists("CategoryDistribution",$param) and $param["CategoryDistribution"] !== null) {
            $this->CategoryDistribution = [];
            foreach ($param["CategoryDistribution"] as $key => $value){
                $obj = new Note();
                $obj->deserialize($value);
                array_push($this->CategoryDistribution, $obj);
            }
        }

        if (array_key_exists("RuleDistribution",$param) and $param["RuleDistribution"] !== null) {
            $this->RuleDistribution = [];
            foreach ($param["RuleDistribution"] as $key => $value){
                $obj = new RuleDistribution();
                $obj->deserialize($value);
                array_push($this->RuleDistribution, $obj);
            }
        }

        if (array_key_exists("SensitiveDataNum",$param) and $param["SensitiveDataNum"] !== null) {
            $this->SensitiveDataNum = $param["SensitiveDataNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

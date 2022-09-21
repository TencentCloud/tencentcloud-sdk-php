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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 带类型树的已分类人物信息
 *
 * @method string getL1ClassifyName() 获取一级分类名称(分类信息参见自定义人物类型)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setL1ClassifyName(string $L1ClassifyName) 设置一级分类名称(分类信息参见自定义人物类型)
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getL2ClassifiedPersonInfoSet() 获取已分类人物信息数组(所有分类类型为二级分类)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setL2ClassifiedPersonInfoSet(array $L2ClassifiedPersonInfoSet) 设置已分类人物信息数组(所有分类类型为二级分类)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSource() 获取检测结果来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(integer $Source) 设置检测结果来源
注意：此字段可能返回 null，表示取不到有效值。
 */
class MultiLevelPersonInfo extends AbstractModel
{
    /**
     * @var string 一级分类名称(分类信息参见自定义人物类型)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $L1ClassifyName;

    /**
     * @var array 已分类人物信息数组(所有分类类型为二级分类)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $L2ClassifiedPersonInfoSet;

    /**
     * @var integer 检测结果来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @param string $L1ClassifyName 一级分类名称(分类信息参见自定义人物类型)
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $L2ClassifiedPersonInfoSet 已分类人物信息数组(所有分类类型为二级分类)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Source 检测结果来源
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
        if (array_key_exists("L1ClassifyName",$param) and $param["L1ClassifyName"] !== null) {
            $this->L1ClassifyName = $param["L1ClassifyName"];
        }

        if (array_key_exists("L2ClassifiedPersonInfoSet",$param) and $param["L2ClassifiedPersonInfoSet"] !== null) {
            $this->L2ClassifiedPersonInfoSet = [];
            foreach ($param["L2ClassifiedPersonInfoSet"] as $key => $value){
                $obj = new ClassifiedPersonInfo();
                $obj->deserialize($value);
                array_push($this->L2ClassifiedPersonInfoSet, $obj);
            }
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}

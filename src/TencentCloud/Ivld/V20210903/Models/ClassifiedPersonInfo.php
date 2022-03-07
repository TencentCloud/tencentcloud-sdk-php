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
 * 已分类的人物信息
 *
 * @method string getClassifyName() 获取人物分类名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassifyName(string $ClassifyName) 设置人物分类名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPersonInfoSet() 获取符合特定分类的人物信息数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPersonInfoSet(array $PersonInfoSet) 设置符合特定分类的人物信息数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClassifiedPersonInfo extends AbstractModel
{
    /**
     * @var string 人物分类名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassifyName;

    /**
     * @var array 符合特定分类的人物信息数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PersonInfoSet;

    /**
     * @param string $ClassifyName 人物分类名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PersonInfoSet 符合特定分类的人物信息数组
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
        if (array_key_exists("ClassifyName",$param) and $param["ClassifyName"] !== null) {
            $this->ClassifyName = $param["ClassifyName"];
        }

        if (array_key_exists("PersonInfoSet",$param) and $param["PersonInfoSet"] !== null) {
            $this->PersonInfoSet = [];
            foreach ($param["PersonInfoSet"] as $key => $value){
                $obj = new PersonInfo();
                $obj->deserialize($value);
                array_push($this->PersonInfoSet, $obj);
            }
        }
    }
}

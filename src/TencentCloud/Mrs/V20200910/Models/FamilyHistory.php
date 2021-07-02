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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 家族史
 *
 * @method string getRelativeMember() 获取家族成员
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelativeMember(string $RelativeMember) 设置家族成员
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRelativeCancer() 获取家族肿瘤史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelativeCancer(string $RelativeCancer) 设置家族肿瘤史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGenetic() 获取家族遗传史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGenetic(string $Genetic) 设置家族遗传史
注意：此字段可能返回 null，表示取不到有效值。
 */
class FamilyHistory extends AbstractModel
{
    /**
     * @var string 家族成员
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelativeMember;

    /**
     * @var string 家族肿瘤史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelativeCancer;

    /**
     * @var string 家族遗传史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Genetic;

    /**
     * @param string $RelativeMember 家族成员
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RelativeCancer 家族肿瘤史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Genetic 家族遗传史
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
        if (array_key_exists("RelativeMember",$param) and $param["RelativeMember"] !== null) {
            $this->RelativeMember = $param["RelativeMember"];
        }

        if (array_key_exists("RelativeCancer",$param) and $param["RelativeCancer"] !== null) {
            $this->RelativeCancer = $param["RelativeCancer"];
        }

        if (array_key_exists("Genetic",$param) and $param["Genetic"] !== null) {
            $this->Genetic = $param["Genetic"];
        }
    }
}

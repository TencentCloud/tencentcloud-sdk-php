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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 知识库容量饼图详情
 *
 * @method string getAppName() 获取当前应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppName(string $AppName) 设置当前应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsedCharSize() 获取当前应用使用的字符数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedCharSize(string $UsedCharSize) 设置当前应用使用的字符数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getProportion() 获取当前应用对于总用量的占比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProportion(float $Proportion) 设置当前应用对于总用量的占比
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getKnowledgeType() 获取知识库类型:0默认1共享
 * @method void setKnowledgeType(integer $KnowledgeType) 设置知识库类型:0默认1共享
 */
class KnowledgeCapacityPieGraphDetail extends AbstractModel
{
    /**
     * @var string 当前应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppName;

    /**
     * @var string 当前应用使用的字符数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedCharSize;

    /**
     * @var float 当前应用对于总用量的占比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Proportion;

    /**
     * @var integer 知识库类型:0默认1共享
     */
    public $KnowledgeType;

    /**
     * @param string $AppName 当前应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UsedCharSize 当前应用使用的字符数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Proportion 当前应用对于总用量的占比
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $KnowledgeType 知识库类型:0默认1共享
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("UsedCharSize",$param) and $param["UsedCharSize"] !== null) {
            $this->UsedCharSize = $param["UsedCharSize"];
        }

        if (array_key_exists("Proportion",$param) and $param["Proportion"] !== null) {
            $this->Proportion = $param["Proportion"];
        }

        if (array_key_exists("KnowledgeType",$param) and $param["KnowledgeType"] !== null) {
            $this->KnowledgeType = $param["KnowledgeType"];
        }
    }
}

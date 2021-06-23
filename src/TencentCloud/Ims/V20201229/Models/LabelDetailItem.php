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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于返回分类模型命中子标签的详细结果
 *
 * @method integer getId() 获取该字段用于返回识别对象的ID以方便识别和区分。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置该字段用于返回识别对象的ID以方便识别和区分。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取该字段用于返回识命中的子标签名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置该字段用于返回识命中的子标签名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScore() 获取该字段用于返回对应子标签命中的分值，取值为**0-100**，如：*Porn-SexBehavior 99* 则代表相应识别内容命中色情-性行为标签的分值为99。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(integer $Score) 设置该字段用于返回对应子标签命中的分值，取值为**0-100**，如：*Porn-SexBehavior 99* 则代表相应识别内容命中色情-性行为标签的分值为99。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LabelDetailItem extends AbstractModel
{
    /**
     * @var integer 该字段用于返回识别对象的ID以方便识别和区分。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 该字段用于返回识命中的子标签名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 该字段用于返回对应子标签命中的分值，取值为**0-100**，如：*Porn-SexBehavior 99* 则代表相应识别内容命中色情-性行为标签的分值为99。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @param integer $Id 该字段用于返回识别对象的ID以方便识别和区分。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 该字段用于返回识命中的子标签名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Score 该字段用于返回对应子标签命中的分值，取值为**0-100**，如：*Porn-SexBehavior 99* 则代表相应识别内容命中色情-性行为标签的分值为99。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}

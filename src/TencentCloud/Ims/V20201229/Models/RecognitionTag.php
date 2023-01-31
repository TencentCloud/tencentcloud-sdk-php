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
 * 识别类型标签信息
 *
 * @method string getName() 获取标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScore() 获取置信分：0～100，数值越大表示置信度越高
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(integer $Score) 设置置信分：0～100，数值越大表示置信度越高
注意：此字段可能返回 null，表示取不到有效值。
 * @method Location getLocation() 获取标签位置信息，若模型无位置信息，则可能为零值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(Location $Location) 设置标签位置信息，若模型无位置信息，则可能为零值
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecognitionTag extends AbstractModel
{
    /**
     * @var string 标签名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 置信分：0～100，数值越大表示置信度越高
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @var Location 标签位置信息，若模型无位置信息，则可能为零值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @param string $Name 标签名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Score 置信分：0～100，数值越大表示置信度越高
注意：此字段可能返回 null，表示取不到有效值。
     * @param Location $Location 标签位置信息，若模型无位置信息，则可能为零值
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new Location();
            $this->Location->deserialize($param["Location"]);
        }
    }
}

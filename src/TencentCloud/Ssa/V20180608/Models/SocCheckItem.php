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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SocCheckItem类型
 *
 * @method string getName() 获取名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLevelId() 获取唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevelId(string $LevelId) 设置唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessCount() 获取成功数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessCount(integer $SuccessCount) 设置成功数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailCount() 获取失败数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailCount(integer $FailCount) 设置失败数
注意：此字段可能返回 null，表示取不到有效值。
 */
class SocCheckItem extends AbstractModel
{
    /**
     * @var string 名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 唯一id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LevelId;

    /**
     * @var integer 成功数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessCount;

    /**
     * @var integer 失败数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailCount;

    /**
     * @param string $Name 名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LevelId 唯一id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessCount 成功数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailCount 失败数
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

        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }
    }
}

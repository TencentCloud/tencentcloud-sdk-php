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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 结构化复核差异接口的修改的项
 *
 * @method string getPath() 获取修改的字段的路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置修改的字段的路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMachine() 获取机器结果的值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachine(string $Machine) 设置机器结果的值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManual() 获取人工结果的值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManual(string $Manual) 设置人工结果的值
注意：此字段可能返回 null，表示取不到有效值。
 */
class StructureModifyItem extends AbstractModel
{
    /**
     * @var string 修改的字段的路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string 机器结果的值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Machine;

    /**
     * @var string 人工结果的值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Manual;

    /**
     * @param string $Path 修改的字段的路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Machine 机器结果的值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Manual 人工结果的值
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Machine",$param) and $param["Machine"] !== null) {
            $this->Machine = $param["Machine"];
        }

        if (array_key_exists("Manual",$param) and $param["Manual"] !== null) {
            $this->Manual = $param["Manual"];
        }
    }
}

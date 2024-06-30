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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeCall分类统计数据
 *
 * @method integer getPkgType() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgType(integer $PkgType) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAll() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAll(integer $All) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUsed() 获取已使用数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsed(integer $Used) 设置已使用数
注意：此字段可能返回 null，表示取不到有效值。
 */
class TWeCallCategoryPkgInfo extends AbstractModel
{
    /**
     * @var integer 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgType;

    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $All;

    /**
     * @var integer 已使用数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Used;

    /**
     * @param integer $PkgType 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $All 总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Used 已使用数
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
        if (array_key_exists("PkgType",$param) and $param["PkgType"] !== null) {
            $this->PkgType = $param["PkgType"];
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }
    }
}

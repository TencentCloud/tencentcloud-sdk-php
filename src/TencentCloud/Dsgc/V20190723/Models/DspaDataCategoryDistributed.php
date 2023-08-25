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
 * DSPA数据分类分布
 *
 * @method integer getCategoryId() 获取数据分类ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryId(integer $CategoryId) 设置数据分类ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategoryName() 获取数据分类名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryName(string $CategoryName) 设置数据分类名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取数据分类统计个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置数据分类统计个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategoryFullPath() 获取分类路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryFullPath(string $CategoryFullPath) 设置分类路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspaDataCategoryDistributed extends AbstractModel
{
    /**
     * @var integer 数据分类ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryId;

    /**
     * @var string 数据分类名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryName;

    /**
     * @var integer 数据分类统计个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var string 分类路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryFullPath;

    /**
     * @param integer $CategoryId 数据分类ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CategoryName 数据分类名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 数据分类统计个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CategoryFullPath 分类路径
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
        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("CategoryFullPath",$param) and $param["CategoryFullPath"] !== null) {
            $this->CategoryFullPath = $param["CategoryFullPath"];
        }
    }
}

<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询列表返回数据
 *
 * @method array getKeyWordLibList() 获取关键词表列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyWordLibList(array $KeyWordLibList) 设置关键词表列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取关键词列表总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置关键词列表总数
注意：此字段可能返回 null，表示取不到有效值。
 */
class KeyWordLibListData extends AbstractModel
{
    /**
     * @var array 关键词表列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyWordLibList;

    /**
     * @var integer 关键词列表总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @param array $KeyWordLibList 关键词表列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 关键词列表总数
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
        if (array_key_exists("KeyWordLibList",$param) and $param["KeyWordLibList"] !== null) {
            $this->KeyWordLibList = [];
            foreach ($param["KeyWordLibList"] as $key => $value){
                $obj = new KeyWordLib();
                $obj->deserialize($value);
                array_push($this->KeyWordLibList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}

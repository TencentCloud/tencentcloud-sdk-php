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
 * 关键词表信息
 *
 * @method string getKeyWordLibId() 获取关键词表ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyWordLibId(string $KeyWordLibId) 设置关键词表ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取关键词表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置关键词表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKeyWordList() 获取关键词列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyWordList(array $KeyWordList) 设置关键词列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class KeyWordLib extends AbstractModel
{
    /**
     * @var string 关键词表ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyWordLibId;

    /**
     * @var string 关键词表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array 关键词列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyWordList;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $KeyWordLibId 关键词表ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 关键词表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KeyWordList 关键词列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("KeyWordLibId",$param) and $param["KeyWordLibId"] !== null) {
            $this->KeyWordLibId = $param["KeyWordLibId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("KeyWordList",$param) and $param["KeyWordList"] !== null) {
            $this->KeyWordList = $param["KeyWordList"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

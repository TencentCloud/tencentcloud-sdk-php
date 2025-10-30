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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 普通索引信息列表
 *
 * @method string getIndexName() 获取普通索引名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexName(string $IndexName) 设置普通索引名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsShardComplete() 获取分片状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsShardComplete(integer $IsShardComplete) 设置分片状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class CommonIndexInfo extends AbstractModel
{
    /**
     * @var string 普通索引名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexName;

    /**
     * @var integer 分片状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsShardComplete;

    /**
     * @param string $IndexName 普通索引名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsShardComplete 分片状态
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
        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("IsShardComplete",$param) and $param["IsShardComplete"] !== null) {
            $this->IsShardComplete = $param["IsShardComplete"];
        }
    }
}

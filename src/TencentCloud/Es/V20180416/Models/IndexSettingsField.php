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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 索引配置字段
 *
 * @method string getNumberOfShards() 获取索引主分片数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumberOfShards(string $NumberOfShards) 设置索引主分片数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNumberOfReplicas() 获取索引副本分片数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumberOfReplicas(string $NumberOfReplicas) 设置索引副本分片数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRefreshInterval() 获取索引刷新频率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefreshInterval(string $RefreshInterval) 设置索引刷新频率
注意：此字段可能返回 null，表示取不到有效值。
 */
class IndexSettingsField extends AbstractModel
{
    /**
     * @var string 索引主分片数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumberOfShards;

    /**
     * @var string 索引副本分片数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumberOfReplicas;

    /**
     * @var string 索引刷新频率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefreshInterval;

    /**
     * @param string $NumberOfShards 索引主分片数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NumberOfReplicas 索引副本分片数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RefreshInterval 索引刷新频率
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
        if (array_key_exists("NumberOfShards",$param) and $param["NumberOfShards"] !== null) {
            $this->NumberOfShards = $param["NumberOfShards"];
        }

        if (array_key_exists("NumberOfReplicas",$param) and $param["NumberOfReplicas"] !== null) {
            $this->NumberOfReplicas = $param["NumberOfReplicas"];
        }

        if (array_key_exists("RefreshInterval",$param) and $param["RefreshInterval"] !== null) {
            $this->RefreshInterval = $param["RefreshInterval"];
        }
    }
}

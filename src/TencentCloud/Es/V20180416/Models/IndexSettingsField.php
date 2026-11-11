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
 * 索引配置字段
 *
 * @method string getNumberOfShards() 获取<p>索引主分片数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumberOfShards(string $NumberOfShards) 设置<p>索引主分片数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNumberOfReplicas() 获取<p>索引副本分片数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumberOfReplicas(string $NumberOfReplicas) 设置<p>索引副本分片数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRefreshInterval() 获取<p>索引刷新频率</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefreshInterval(string $RefreshInterval) 设置<p>索引刷新频率</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDynamic() 获取<p>动态字段识别开关</p>
 * @method void setDynamic(string $Dynamic) 设置<p>动态字段识别开关</p>
 * @method string getTotalFieldsLimit() 获取<p>索引字段数上限</p>
 * @method void setTotalFieldsLimit(string $TotalFieldsLimit) 设置<p>索引字段数上限</p>
 */
class IndexSettingsField extends AbstractModel
{
    /**
     * @var string <p>索引主分片数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumberOfShards;

    /**
     * @var string <p>索引副本分片数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumberOfReplicas;

    /**
     * @var string <p>索引刷新频率</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefreshInterval;

    /**
     * @var string <p>动态字段识别开关</p>
     */
    public $Dynamic;

    /**
     * @var string <p>索引字段数上限</p>
     */
    public $TotalFieldsLimit;

    /**
     * @param string $NumberOfShards <p>索引主分片数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NumberOfReplicas <p>索引副本分片数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RefreshInterval <p>索引刷新频率</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Dynamic <p>动态字段识别开关</p>
     * @param string $TotalFieldsLimit <p>索引字段数上限</p>
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

        if (array_key_exists("Dynamic",$param) and $param["Dynamic"] !== null) {
            $this->Dynamic = $param["Dynamic"];
        }

        if (array_key_exists("TotalFieldsLimit",$param) and $param["TotalFieldsLimit"] !== null) {
            $this->TotalFieldsLimit = $param["TotalFieldsLimit"];
        }
    }
}

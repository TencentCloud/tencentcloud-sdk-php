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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * token长度路由参数
 *
 * @method integer getMinTokens() 获取<p>Token 区间下限</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinTokens(integer $MinTokens) 设置<p>Token 区间下限</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxTokens() 获取<p>Token 区间上限</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxTokens(integer $MaxTokens) 设置<p>Token 区间上限</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTargetModels() 获取<p>模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetModels(array $TargetModels) 设置<p>模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TokenLengthRouteDTO extends AbstractModel
{
    /**
     * @var integer <p>Token 区间下限</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinTokens;

    /**
     * @var integer <p>Token 区间上限</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxTokens;

    /**
     * @var array <p>模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetModels;

    /**
     * @param integer $MinTokens <p>Token 区间下限</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxTokens <p>Token 区间上限</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TargetModels <p>模型</p>
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
        if (array_key_exists("MinTokens",$param) and $param["MinTokens"] !== null) {
            $this->MinTokens = $param["MinTokens"];
        }

        if (array_key_exists("MaxTokens",$param) and $param["MaxTokens"] !== null) {
            $this->MaxTokens = $param["MaxTokens"];
        }

        if (array_key_exists("TargetModels",$param) and $param["TargetModels"] !== null) {
            $this->TargetModels = [];
            foreach ($param["TargetModels"] as $key => $value){
                $obj = new TargetModelDTO();
                $obj->deserialize($value);
                array_push($this->TargetModels, $obj);
            }
        }
    }
}

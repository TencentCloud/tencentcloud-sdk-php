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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 搜索引擎参考来源索引
 *
 * @method integer getPosition() 获取参考来源位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPosition(integer $Position) 设置参考来源位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndex() 获取参考来源索引顺序
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(string $Index) 设置参考来源索引顺序
注意：此字段可能返回 null，表示取不到有效值。
 */
class QuoteInfo extends AbstractModel
{
    /**
     * @var integer 参考来源位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Position;

    /**
     * @var string 参考来源索引顺序
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @param integer $Position 参考来源位置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Index 参考来源索引顺序
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
        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}

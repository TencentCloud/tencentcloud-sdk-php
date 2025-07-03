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
 * 自定义变量和标签关系数据
 *
 * @method string getApiVarId() 获取自定义变量id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiVarId(string $ApiVarId) 设置自定义变量id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttrBizId() 获取标签id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttrBizId(string $AttrBizId) 设置标签id
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiVarAttrInfo extends AbstractModel
{
    /**
     * @var string 自定义变量id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiVarId;

    /**
     * @var string 标签id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttrBizId;

    /**
     * @param string $ApiVarId 自定义变量id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttrBizId 标签id
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
        if (array_key_exists("ApiVarId",$param) and $param["ApiVarId"] !== null) {
            $this->ApiVarId = $param["ApiVarId"];
        }

        if (array_key_exists("AttrBizId",$param) and $param["AttrBizId"] !== null) {
            $this->AttrBizId = $param["AttrBizId"];
        }
    }
}

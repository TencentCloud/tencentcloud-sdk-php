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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理代码的信息
 *
 * @method CosPathInfo getCosPathInfo() 获取推理代码所在的cos详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosPathInfo(CosPathInfo $CosPathInfo) 设置推理代码所在的cos详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class InferCodeInfo extends AbstractModel
{
    /**
     * @var CosPathInfo 推理代码所在的cos详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosPathInfo;

    /**
     * @param CosPathInfo $CosPathInfo 推理代码所在的cos详情
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
        if (array_key_exists("CosPathInfo",$param) and $param["CosPathInfo"] !== null) {
            $this->CosPathInfo = new CosPathInfo();
            $this->CosPathInfo->deserialize($param["CosPathInfo"]);
        }
    }
}

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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自动伸缩组高级设置
 *
 * @method ComputeResourceAdvanceParams getComputeResourceAdvanceParams() 获取计算资源高级设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComputeResourceAdvanceParams(ComputeResourceAdvanceParams $ComputeResourceAdvanceParams) 设置计算资源高级设置
注意：此字段可能返回 null，表示取不到有效值。
 */
class AutoScaleGroupAdvanceAttrs extends AbstractModel
{
    /**
     * @var ComputeResourceAdvanceParams 计算资源高级设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComputeResourceAdvanceParams;

    /**
     * @param ComputeResourceAdvanceParams $ComputeResourceAdvanceParams 计算资源高级设置
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
        if (array_key_exists("ComputeResourceAdvanceParams",$param) and $param["ComputeResourceAdvanceParams"] !== null) {
            $this->ComputeResourceAdvanceParams = new ComputeResourceAdvanceParams();
            $this->ComputeResourceAdvanceParams->deserialize($param["ComputeResourceAdvanceParams"]);
        }
    }
}

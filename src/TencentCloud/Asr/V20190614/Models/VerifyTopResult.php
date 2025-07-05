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
 * 说话人验证1:N返回结果
 *
 * @method array getVerifyTops() 获取对比打分结果，按照打分降序排列返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifyTops(array $VerifyTops) 设置对比打分结果，按照打分降序排列返回
注意：此字段可能返回 null，表示取不到有效值。
 */
class VerifyTopResult extends AbstractModel
{
    /**
     * @var array 对比打分结果，按照打分降序排列返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifyTops;

    /**
     * @param array $VerifyTops 对比打分结果，按照打分降序排列返回
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
        if (array_key_exists("VerifyTops",$param) and $param["VerifyTops"] !== null) {
            $this->VerifyTops = [];
            foreach ($param["VerifyTops"] as $key => $value){
                $obj = new VerifyTop();
                $obj->deserialize($value);
                array_push($this->VerifyTops, $obj);
            }
        }
    }
}

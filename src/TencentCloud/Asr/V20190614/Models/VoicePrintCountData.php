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
 * 统计返回[说话人注册数量](https://cloud.tencent.com/document/product/1093/96061#3.-.E8.BE.93.E5.87.BA.E5.8F.82.E6.95.B0)
 *
 * @method integer getTotal() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVoicePrintList() 获取说话人id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoicePrintList(array $VoicePrintList) 设置说话人id列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class VoicePrintCountData extends AbstractModel
{
    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var array 说话人id列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoicePrintList;

    /**
     * @param integer $Total 总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VoicePrintList 说话人id列表
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("VoicePrintList",$param) and $param["VoicePrintList"] !== null) {
            $this->VoicePrintList = [];
            foreach ($param["VoicePrintList"] as $key => $value){
                $obj = new VoicePrintBaseData();
                $obj->deserialize($value);
                array_push($this->VoicePrintList, $obj);
            }
        }
    }
}

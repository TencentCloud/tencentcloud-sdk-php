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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 诊断结论
 *
 * @method BaseInfo getText() 获取诊断结论文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(BaseInfo $Text) 设置诊断结论文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInfos() 获取诊断结论详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInfos(array $Infos) 设置诊断结论详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class SummaryInfo extends AbstractModel
{
    /**
     * @var BaseInfo 诊断结论文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var array 诊断结论详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Infos;

    /**
     * @param BaseInfo $Text 诊断结论文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Infos 诊断结论详情
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = new BaseInfo();
            $this->Text->deserialize($param["Text"]);
        }

        if (array_key_exists("Infos",$param) and $param["Infos"] !== null) {
            $this->Infos = [];
            foreach ($param["Infos"] as $key => $value){
                $obj = new DetailInformation();
                $obj->deserialize($value);
                array_push($this->Infos, $obj);
            }
        }
    }
}

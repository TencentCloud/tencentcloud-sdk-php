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
 * 应用使用知识库容量详情
 *
 * @method string getAppName() 获取应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppName(string $AppName) 设置应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsedCharSize() 获取已用字符数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedCharSize(string $UsedCharSize) 设置已用字符数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getProportion() 获取使用占比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProportion(float $Proportion) 设置使用占比
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExceedCharSize() 获取超量字符数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExceedCharSize(string $ExceedCharSize) 设置超量字符数
注意：此字段可能返回 null，表示取不到有效值。
 */
class KnowledgeDetail extends AbstractModel
{
    /**
     * @var string 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppName;

    /**
     * @var string 已用字符数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedCharSize;

    /**
     * @var float 使用占比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Proportion;

    /**
     * @var string 超量字符数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExceedCharSize;

    /**
     * @param string $AppName 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UsedCharSize 已用字符数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Proportion 使用占比
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExceedCharSize 超量字符数
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("UsedCharSize",$param) and $param["UsedCharSize"] !== null) {
            $this->UsedCharSize = $param["UsedCharSize"];
        }

        if (array_key_exists("Proportion",$param) and $param["Proportion"] !== null) {
            $this->Proportion = $param["Proportion"];
        }

        if (array_key_exists("ExceedCharSize",$param) and $param["ExceedCharSize"] !== null) {
            $this->ExceedCharSize = $param["ExceedCharSize"];
        }
    }
}

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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeCall信息
 *
 * @method string getModelId() 获取小程序ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelId(string $ModelId) 设置小程序ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSn() 获取Sn信息，SN格式：产品ID_设备名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSn(string $Sn) 设置Sn信息，SN格式：产品ID_设备名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActiveNum() 获取激活数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActiveNum(integer $ActiveNum) 设置激活数
注意：此字段可能返回 null，表示取不到有效值。
 */
class TWeCallInfo extends AbstractModel
{
    /**
     * @var string 小程序ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelId;

    /**
     * @var string Sn信息，SN格式：产品ID_设备名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sn;

    /**
     * @var integer 激活数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActiveNum;

    /**
     * @param string $ModelId 小程序ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sn Sn信息，SN格式：产品ID_设备名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActiveNum 激活数
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("Sn",$param) and $param["Sn"] !== null) {
            $this->Sn = $param["Sn"];
        }

        if (array_key_exists("ActiveNum",$param) and $param["ActiveNum"] !== null) {
            $this->ActiveNum = $param["ActiveNum"];
        }
    }
}

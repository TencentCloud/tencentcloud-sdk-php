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
 * 微信物联网硬件信息
 *
 * @method string getSN() 获取sn信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSN(string $SN) 设置sn信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSNTicket() 获取票据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSNTicket(string $SNTicket) 设置票据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelId() 获取模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelId(string $ModelId) 设置模板ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class WXIoTDeviceInfo extends AbstractModel
{
    /**
     * @var string sn信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SN;

    /**
     * @var string 票据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SNTicket;

    /**
     * @var string 模板ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelId;

    /**
     * @param string $SN sn信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SNTicket 票据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelId 模板ID
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
        if (array_key_exists("SN",$param) and $param["SN"] !== null) {
            $this->SN = $param["SN"];
        }

        if (array_key_exists("SNTicket",$param) and $param["SNTicket"] !== null) {
            $this->SNTicket = $param["SNTicket"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }
    }
}

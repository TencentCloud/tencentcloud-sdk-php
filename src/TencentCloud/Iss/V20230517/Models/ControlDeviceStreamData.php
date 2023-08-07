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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取开流地址返回数据
 *
 * @method string getFlv() 获取flv 流地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlv(string $Flv) 设置flv 流地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHls() 获取hls 流地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHls(string $Hls) 设置hls 流地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRtmp() 获取rtmp 流地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRtmp(string $Rtmp) 设置rtmp 流地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class ControlDeviceStreamData extends AbstractModel
{
    /**
     * @var string flv 流地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Flv;

    /**
     * @var string hls 流地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hls;

    /**
     * @var string rtmp 流地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rtmp;

    /**
     * @param string $Flv flv 流地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Hls hls 流地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Rtmp rtmp 流地址
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
        if (array_key_exists("Flv",$param) and $param["Flv"] !== null) {
            $this->Flv = $param["Flv"];
        }

        if (array_key_exists("Hls",$param) and $param["Hls"] !== null) {
            $this->Hls = $param["Hls"];
        }

        if (array_key_exists("Rtmp",$param) and $param["Rtmp"] !== null) {
            $this->Rtmp = $param["Rtmp"];
        }
    }
}

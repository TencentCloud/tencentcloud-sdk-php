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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEmbedToken返回参数结构体
 *
 * @method string getExtra() 获取额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtra(string $Extra) 设置额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method EmbedTokenInfo getData() 获取数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(EmbedTokenInfo $Data) 设置数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsg() 获取结果描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsg(string $Msg) 设置结果描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateEmbedTokenResponse extends AbstractModel
{
    /**
     * @var string 额外信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extra;

    /**
     * @var EmbedTokenInfo 数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var string 结果描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Msg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Extra 额外信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param EmbedTokenInfo $Data 数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Msg 结果描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new EmbedTokenInfo();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

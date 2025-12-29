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
 * 暴露端口信息
 *
 * @method boolean getEnable() 获取是否开启暴露容器服务端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(boolean $Enable) 设置是否开启暴露容器服务端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取vpc id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置vpc id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClbId() 获取clb id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClbId(string $ClbId) 设置clb id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClbHost() 获取clb domain
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClbHost(string $ClbHost) 设置clb domain
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExposePortConfig extends AbstractModel
{
    /**
     * @var boolean 是否开启暴露容器服务端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var string vpc id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string clb id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClbId;

    /**
     * @var string clb domain
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClbHost;

    /**
     * @param boolean $Enable 是否开启暴露容器服务端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId vpc id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClbId clb id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClbHost clb domain
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ClbId",$param) and $param["ClbId"] !== null) {
            $this->ClbId = $param["ClbId"];
        }

        if (array_key_exists("ClbHost",$param) and $param["ClbHost"] !== null) {
            $this->ClbHost = $param["ClbHost"];
        }
    }
}

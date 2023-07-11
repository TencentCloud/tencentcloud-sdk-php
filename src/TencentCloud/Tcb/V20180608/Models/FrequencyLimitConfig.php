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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全网关版本路由信息限额配置
 *
 * @method string getLimitObject() 获取限额对象 "ConnectionsLimit" 或 "QPSLimit"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimitObject(string $LimitObject) 设置限额对象 "ConnectionsLimit" 或 "QPSLimit"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLimitConfig() 获取限额配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimitConfig(string $LimitConfig) 设置限额配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class FrequencyLimitConfig extends AbstractModel
{
    /**
     * @var string 限额对象 "ConnectionsLimit" 或 "QPSLimit"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LimitObject;

    /**
     * @var string 限额配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LimitConfig;

    /**
     * @param string $LimitObject 限额对象 "ConnectionsLimit" 或 "QPSLimit"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LimitConfig 限额配置
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
        if (array_key_exists("LimitObject",$param) and $param["LimitObject"] !== null) {
            $this->LimitObject = $param["LimitObject"];
        }

        if (array_key_exists("LimitConfig",$param) and $param["LimitConfig"] !== null) {
            $this->LimitConfig = $param["LimitConfig"];
        }
    }
}

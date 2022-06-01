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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户端IP头部
 *
 * @method string getSwitch() 获取客户端IP头部配置开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置客户端IP头部配置开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHeaderName() 获取回源客户端IP请求头名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaderName(string $HeaderName) 设置回源客户端IP请求头名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClientIp extends AbstractModel
{
    /**
     * @var string 客户端IP头部配置开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var string 回源客户端IP请求头名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeaderName;

    /**
     * @param string $Switch 客户端IP头部配置开关
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HeaderName 回源客户端IP请求头名称
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("HeaderName",$param) and $param["HeaderName"] !== null) {
            $this->HeaderName = $param["HeaderName"];
        }
    }
}

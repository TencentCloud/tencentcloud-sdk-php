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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 聊天接入点。EndpointType 现在就引入枚举：当前仅返回一个 PUBLIC 元素，将来新增私网端点与 VPC 属性为纯增量。
 *
 * @method string getEndpointType() 获取接入点类型：PUBLIC（公网）/ PRIVATE（私网，预留）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpointType(string $EndpointType) 设置接入点类型：PUBLIC（公网）/ PRIVATE（私网，预留）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取接入点地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置接入点地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChatEndpoint extends AbstractModel
{
    /**
     * @var string 接入点类型：PUBLIC（公网）/ PRIVATE（私网，预留）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndpointType;

    /**
     * @var string 接入点地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @param string $EndpointType 接入点类型：PUBLIC（公网）/ PRIVATE（私网，预留）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 接入点地址
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
        if (array_key_exists("EndpointType",$param) and $param["EndpointType"] !== null) {
            $this->EndpointType = $param["EndpointType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}

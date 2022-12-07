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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 群机器人订阅配置
 *
 * @method string getHookType() 获取群机器人类型，当前支持飞书
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHookType(string $HookType) 设置群机器人类型，当前支持飞书
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHookAddress() 获取群机器人webhook地址，配置方式参考https://cloud.tencent.com/document/product/1254/70736
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHookAddress(string $HookAddress) 设置群机器人webhook地址，配置方式参考https://cloud.tencent.com/document/product/1254/70736
注意：此字段可能返回 null，表示取不到有效值。
 */
class SubscribeWebHook extends AbstractModel
{
    /**
     * @var string 群机器人类型，当前支持飞书
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HookType;

    /**
     * @var string 群机器人webhook地址，配置方式参考https://cloud.tencent.com/document/product/1254/70736
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HookAddress;

    /**
     * @param string $HookType 群机器人类型，当前支持飞书
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HookAddress 群机器人webhook地址，配置方式参考https://cloud.tencent.com/document/product/1254/70736
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
        if (array_key_exists("HookType",$param) and $param["HookType"] !== null) {
            $this->HookType = $param["HookType"];
        }

        if (array_key_exists("HookAddress",$param) and $param["HookAddress"] !== null) {
            $this->HookAddress = $param["HookAddress"];
        }
    }
}

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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 敏感数据检测配置
 *
 * @method string getAction() 获取<p>执行动作</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置<p>执行动作</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInterceptMessage() 获取<p>响应拦截内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterceptMessage(string $InterceptMessage) 设置<p>响应拦截内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCheckItems() 获取<p>检测项</p><p>枚举值：</p><ul><li>birthday： 生日</li><li>email： 邮箱</li><li>identity_number： 身份证</li><li>phone_number： 电话号码</li><li>secret： 秘钥</li><li>password： 密码</li><li>private_key： 私钥</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckItems(array $CheckItems) 设置<p>检测项</p><p>枚举值：</p><ul><li>birthday： 生日</li><li>email： 邮箱</li><li>identity_number： 身份证</li><li>phone_number： 电话号码</li><li>secret： 秘钥</li><li>password： 密码</li><li>private_key： 私钥</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SensitiveDataCheckConfigDTO extends AbstractModel
{
    /**
     * @var string <p>执行动作</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var string <p>响应拦截内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InterceptMessage;

    /**
     * @var array <p>检测项</p><p>枚举值：</p><ul><li>birthday： 生日</li><li>email： 邮箱</li><li>identity_number： 身份证</li><li>phone_number： 电话号码</li><li>secret： 秘钥</li><li>password： 密码</li><li>private_key： 私钥</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckItems;

    /**
     * @param string $Action <p>执行动作</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InterceptMessage <p>响应拦截内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CheckItems <p>检测项</p><p>枚举值：</p><ul><li>birthday： 生日</li><li>email： 邮箱</li><li>identity_number： 身份证</li><li>phone_number： 电话号码</li><li>secret： 秘钥</li><li>password： 密码</li><li>private_key： 私钥</li></ul>
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("InterceptMessage",$param) and $param["InterceptMessage"] !== null) {
            $this->InterceptMessage = $param["InterceptMessage"];
        }

        if (array_key_exists("CheckItems",$param) and $param["CheckItems"] !== null) {
            $this->CheckItems = $param["CheckItems"];
        }
    }
}

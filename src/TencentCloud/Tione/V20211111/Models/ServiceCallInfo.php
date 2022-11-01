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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务的调用信息，服务组下唯一
 *
 * @method string getServiceGroupId() 获取服务组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceGroupId(string $ServiceGroupId) 设置服务组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInnerHttpAddr() 获取内网http调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerHttpAddr(string $InnerHttpAddr) 设置内网http调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInnerHttpsAddr() 获取内网https调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerHttpsAddr(string $InnerHttpsAddr) 设置内网https调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOuterHttpAddr() 获取内网http调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOuterHttpAddr(string $OuterHttpAddr) 设置内网http调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOuterHttpsAddr() 获取内网https调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOuterHttpsAddr(string $OuterHttpsAddr) 设置内网https调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppKey() 获取调用key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppKey(string $AppKey) 设置调用key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppSecret() 获取调用secret
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppSecret(string $AppSecret) 设置调用secret
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceCallInfo extends AbstractModel
{
    /**
     * @var string 服务组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceGroupId;

    /**
     * @var string 内网http调用地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerHttpAddr;

    /**
     * @var string 内网https调用地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerHttpsAddr;

    /**
     * @var string 内网http调用地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OuterHttpAddr;

    /**
     * @var string 内网https调用地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OuterHttpsAddr;

    /**
     * @var string 调用key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppKey;

    /**
     * @var string 调用secret
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppSecret;

    /**
     * @param string $ServiceGroupId 服务组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InnerHttpAddr 内网http调用地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InnerHttpsAddr 内网https调用地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OuterHttpAddr 内网http调用地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OuterHttpsAddr 内网https调用地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppKey 调用key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppSecret 调用secret
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
        if (array_key_exists("ServiceGroupId",$param) and $param["ServiceGroupId"] !== null) {
            $this->ServiceGroupId = $param["ServiceGroupId"];
        }

        if (array_key_exists("InnerHttpAddr",$param) and $param["InnerHttpAddr"] !== null) {
            $this->InnerHttpAddr = $param["InnerHttpAddr"];
        }

        if (array_key_exists("InnerHttpsAddr",$param) and $param["InnerHttpsAddr"] !== null) {
            $this->InnerHttpsAddr = $param["InnerHttpsAddr"];
        }

        if (array_key_exists("OuterHttpAddr",$param) and $param["OuterHttpAddr"] !== null) {
            $this->OuterHttpAddr = $param["OuterHttpAddr"];
        }

        if (array_key_exists("OuterHttpsAddr",$param) and $param["OuterHttpsAddr"] !== null) {
            $this->OuterHttpsAddr = $param["OuterHttpsAddr"];
        }

        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("AppSecret",$param) and $param["AppSecret"] !== null) {
            $this->AppSecret = $param["AppSecret"];
        }
    }
}

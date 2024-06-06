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
 * V2版本的服务调用信息
 *
 * @method string getServiceGroupId() 获取服务组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceGroupId(string $ServiceGroupId) 设置服务组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInternetEndpoint() 获取服务的公网调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternetEndpoint(string $InternetEndpoint) 设置服务的公网调用地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAuthorizationEnable() 获取鉴权是否开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorizationEnable(boolean $AuthorizationEnable) 设置鉴权是否开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthToken() 获取鉴权token，仅当AuthorizationEnable为true时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthToken(string $AuthToken) 设置鉴权token，仅当AuthorizationEnable为true时有效
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceCallInfoV2 extends AbstractModel
{
    /**
     * @var string 服务组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceGroupId;

    /**
     * @var string 服务的公网调用地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternetEndpoint;

    /**
     * @var boolean 鉴权是否开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorizationEnable;

    /**
     * @var string 鉴权token，仅当AuthorizationEnable为true时有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthToken;

    /**
     * @param string $ServiceGroupId 服务组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InternetEndpoint 服务的公网调用地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AuthorizationEnable 鉴权是否开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthToken 鉴权token，仅当AuthorizationEnable为true时有效
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

        if (array_key_exists("InternetEndpoint",$param) and $param["InternetEndpoint"] !== null) {
            $this->InternetEndpoint = $param["InternetEndpoint"];
        }

        if (array_key_exists("AuthorizationEnable",$param) and $param["AuthorizationEnable"] !== null) {
            $this->AuthorizationEnable = $param["AuthorizationEnable"];
        }

        if (array_key_exists("AuthToken",$param) and $param["AuthToken"] !== null) {
            $this->AuthToken = $param["AuthToken"];
        }
    }
}

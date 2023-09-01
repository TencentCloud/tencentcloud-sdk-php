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
 * 内网调用信息
 *
 * @method IngressPrivateLinkInfo getIngressPrivateLinkInfo() 获取私有连接通道信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIngressPrivateLinkInfo(IngressPrivateLinkInfo $IngressPrivateLinkInfo) 设置私有连接通道信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServiceEIPInfo() 获取共享弹性网卡信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceEIPInfo(array $ServiceEIPInfo) 设置共享弹性网卡信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class IntranetCallInfo extends AbstractModel
{
    /**
     * @var IngressPrivateLinkInfo 私有连接通道信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IngressPrivateLinkInfo;

    /**
     * @var array 共享弹性网卡信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceEIPInfo;

    /**
     * @param IngressPrivateLinkInfo $IngressPrivateLinkInfo 私有连接通道信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ServiceEIPInfo 共享弹性网卡信息
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
        if (array_key_exists("IngressPrivateLinkInfo",$param) and $param["IngressPrivateLinkInfo"] !== null) {
            $this->IngressPrivateLinkInfo = new IngressPrivateLinkInfo();
            $this->IngressPrivateLinkInfo->deserialize($param["IngressPrivateLinkInfo"]);
        }

        if (array_key_exists("ServiceEIPInfo",$param) and $param["ServiceEIPInfo"] !== null) {
            $this->ServiceEIPInfo = [];
            foreach ($param["ServiceEIPInfo"] as $key => $value){
                $obj = new ServiceEIPInfo();
                $obj->deserialize($value);
                array_push($this->ServiceEIPInfo, $obj);
            }
        }
    }
}

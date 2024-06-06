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
 * @method array getDefaultInnerCallInfos() 获取默认内网调用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultInnerCallInfos(array $DefaultInnerCallInfos) 设置默认内网调用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPrivateLinkInfos() 获取私有连接信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateLinkInfos(array $PrivateLinkInfos) 设置私有连接信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPrivateLinkInfosV2() 获取基于新网关的私有连接信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateLinkInfosV2(array $PrivateLinkInfosV2) 设置基于新网关的私有连接信息
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
     * @var array 默认内网调用信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultInnerCallInfos;

    /**
     * @var array 私有连接信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateLinkInfos;

    /**
     * @var array 基于新网关的私有连接信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateLinkInfosV2;

    /**
     * @param IngressPrivateLinkInfo $IngressPrivateLinkInfo 私有连接通道信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ServiceEIPInfo 共享弹性网卡信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DefaultInnerCallInfos 默认内网调用信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PrivateLinkInfos 私有连接信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PrivateLinkInfosV2 基于新网关的私有连接信息
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

        if (array_key_exists("DefaultInnerCallInfos",$param) and $param["DefaultInnerCallInfos"] !== null) {
            $this->DefaultInnerCallInfos = [];
            foreach ($param["DefaultInnerCallInfos"] as $key => $value){
                $obj = new DefaultInnerCallInfo();
                $obj->deserialize($value);
                array_push($this->DefaultInnerCallInfos, $obj);
            }
        }

        if (array_key_exists("PrivateLinkInfos",$param) and $param["PrivateLinkInfos"] !== null) {
            $this->PrivateLinkInfos = [];
            foreach ($param["PrivateLinkInfos"] as $key => $value){
                $obj = new PrivateLinkInfo();
                $obj->deserialize($value);
                array_push($this->PrivateLinkInfos, $obj);
            }
        }

        if (array_key_exists("PrivateLinkInfosV2",$param) and $param["PrivateLinkInfosV2"] !== null) {
            $this->PrivateLinkInfosV2 = [];
            foreach ($param["PrivateLinkInfosV2"] as $key => $value){
                $obj = new PrivateLinkInfo();
                $obj->deserialize($value);
                array_push($this->PrivateLinkInfosV2, $obj);
            }
        }
    }
}

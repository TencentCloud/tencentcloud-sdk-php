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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询域名详情数据
 *
 * @method string getId() 获取域名ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置域名ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPlayDomain() 获取播放域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlayDomain(string $PlayDomain) 设置播放域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInternalDomain() 获取CNAME 记录值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternalDomain(string $InternalDomain) 设置CNAME 记录值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHaveCert() 获取是否上传证书（0：否，1：是）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHaveCert(integer $HaveCert) 设置是否上传证书（0：否，1：是）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取服务节点 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置服务节点 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取服务节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置服务节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置用户ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeDomainData extends AbstractModel
{
    /**
     * @var string 域名ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 播放域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlayDomain;

    /**
     * @var string CNAME 记录值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternalDomain;

    /**
     * @var integer 是否上传证书（0：否，1：是）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HaveCert;

    /**
     * @var string 服务节点 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 服务节点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var integer 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @param string $Id 域名ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PlayDomain 播放域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InternalDomain CNAME 记录值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HaveCert 是否上传证书（0：否，1：是）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 服务节点 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 服务节点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 用户ID
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("PlayDomain",$param) and $param["PlayDomain"] !== null) {
            $this->PlayDomain = $param["PlayDomain"];
        }

        if (array_key_exists("InternalDomain",$param) and $param["InternalDomain"] !== null) {
            $this->InternalDomain = $param["InternalDomain"];
        }

        if (array_key_exists("HaveCert",$param) and $param["HaveCert"] !== null) {
            $this->HaveCert = $param["HaveCert"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}

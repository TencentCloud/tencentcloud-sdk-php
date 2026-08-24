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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跨云信息
 *
 * @method string getSourceCloudName() 获取源端云名称（跨云对端云名称）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceCloudName(string $SourceCloudName) 设置源端云名称（跨云对端云名称）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetCloudName() 获取目标端云名称（跨云本端云名称）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetCloudName(string $TargetCloudName) 设置目标端云名称（跨云本端云名称）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSourceAppId() 获取源端云AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceAppId(integer $SourceAppId) 设置源端云AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceUin() 获取源端云主账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceUin(string $SourceUin) 设置源端云主账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceSubAccountUin() 获取源端云子账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceSubAccountUin(string $SourceSubAccountUin) 设置源端云子账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceUserName() 获取源端云用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceUserName(string $SourceUserName) 设置源端云用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetAppId() 获取目标端云AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetAppId(integer $TargetAppId) 设置目标端云AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetUin() 获取目标端云主账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetUin(string $TargetUin) 设置目标端云主账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetSubAccountUin() 获取目标端云子账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetSubAccountUin(string $TargetSubAccountUin) 设置目标端云子账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPeerRegionName() 获取对端云的地域显示名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeerRegionName(string $PeerRegionName) 设置对端云的地域显示名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPeerZoneName() 获取对端云的可用区显示名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeerZoneName(string $PeerZoneName) 设置对端云的可用区显示名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPeerVpcName() 获取对端云的VPC显示名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeerVpcName(string $PeerVpcName) 设置对端云的VPC显示名
注意：此字段可能返回 null，表示取不到有效值。
 */
class CrossCloudDetails extends AbstractModel
{
    /**
     * @var string 源端云名称（跨云对端云名称）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceCloudName;

    /**
     * @var string 目标端云名称（跨云本端云名称）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetCloudName;

    /**
     * @var integer 源端云AppId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceAppId;

    /**
     * @var string 源端云主账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceUin;

    /**
     * @var string 源端云子账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceSubAccountUin;

    /**
     * @var string 源端云用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceUserName;

    /**
     * @var integer 目标端云AppId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetAppId;

    /**
     * @var string 目标端云主账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetUin;

    /**
     * @var string 目标端云子账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetSubAccountUin;

    /**
     * @var string 对端云的地域显示名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeerRegionName;

    /**
     * @var string 对端云的可用区显示名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeerZoneName;

    /**
     * @var string 对端云的VPC显示名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeerVpcName;

    /**
     * @param string $SourceCloudName 源端云名称（跨云对端云名称）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetCloudName 目标端云名称（跨云本端云名称）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SourceAppId 源端云AppId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceUin 源端云主账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceSubAccountUin 源端云子账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceUserName 源端云用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetAppId 目标端云AppId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetUin 目标端云主账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetSubAccountUin 目标端云子账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PeerRegionName 对端云的地域显示名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PeerZoneName 对端云的可用区显示名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PeerVpcName 对端云的VPC显示名
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
        if (array_key_exists("SourceCloudName",$param) and $param["SourceCloudName"] !== null) {
            $this->SourceCloudName = $param["SourceCloudName"];
        }

        if (array_key_exists("TargetCloudName",$param) and $param["TargetCloudName"] !== null) {
            $this->TargetCloudName = $param["TargetCloudName"];
        }

        if (array_key_exists("SourceAppId",$param) and $param["SourceAppId"] !== null) {
            $this->SourceAppId = $param["SourceAppId"];
        }

        if (array_key_exists("SourceUin",$param) and $param["SourceUin"] !== null) {
            $this->SourceUin = $param["SourceUin"];
        }

        if (array_key_exists("SourceSubAccountUin",$param) and $param["SourceSubAccountUin"] !== null) {
            $this->SourceSubAccountUin = $param["SourceSubAccountUin"];
        }

        if (array_key_exists("SourceUserName",$param) and $param["SourceUserName"] !== null) {
            $this->SourceUserName = $param["SourceUserName"];
        }

        if (array_key_exists("TargetAppId",$param) and $param["TargetAppId"] !== null) {
            $this->TargetAppId = $param["TargetAppId"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("TargetSubAccountUin",$param) and $param["TargetSubAccountUin"] !== null) {
            $this->TargetSubAccountUin = $param["TargetSubAccountUin"];
        }

        if (array_key_exists("PeerRegionName",$param) and $param["PeerRegionName"] !== null) {
            $this->PeerRegionName = $param["PeerRegionName"];
        }

        if (array_key_exists("PeerZoneName",$param) and $param["PeerZoneName"] !== null) {
            $this->PeerZoneName = $param["PeerZoneName"];
        }

        if (array_key_exists("PeerVpcName",$param) and $param["PeerVpcName"] !== null) {
            $this->PeerVpcName = $param["PeerVpcName"];
        }
    }
}

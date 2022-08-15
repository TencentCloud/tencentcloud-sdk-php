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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像信息
 *
 * @method string getDigest() 获取哈希值
 * @method void setDigest(string $Digest) 设置哈希值
 * @method integer getSize() 获取镜像体积（单位：字节）
 * @method void setSize(integer $Size) 设置镜像体积（单位：字节）
 * @method string getImageVersion() 获取Tag名称
 * @method void setImageVersion(string $ImageVersion) 设置Tag名称
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getKind() 获取制品类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKind(string $Kind) 设置制品类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKmsSignature() 获取KMS 签名信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKmsSignature(string $KmsSignature) 设置KMS 签名信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class TcrImageInfo extends AbstractModel
{
    /**
     * @var string 哈希值
     */
    public $Digest;

    /**
     * @var integer 镜像体积（单位：字节）
     */
    public $Size;

    /**
     * @var string Tag名称
     */
    public $ImageVersion;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 制品类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Kind;

    /**
     * @var string KMS 签名信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KmsSignature;

    /**
     * @param string $Digest 哈希值
     * @param integer $Size 镜像体积（单位：字节）
     * @param string $ImageVersion Tag名称
     * @param string $UpdateTime 更新时间
     * @param string $Kind 制品类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KmsSignature KMS 签名信息
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
        if (array_key_exists("Digest",$param) and $param["Digest"] !== null) {
            $this->Digest = $param["Digest"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            $this->ImageVersion = $param["ImageVersion"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("KmsSignature",$param) and $param["KmsSignature"] !== null) {
            $this->KmsSignature = $param["KmsSignature"];
        }
    }
}

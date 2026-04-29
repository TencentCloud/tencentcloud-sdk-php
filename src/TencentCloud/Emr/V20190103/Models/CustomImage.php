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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义镜像信息
 *
 * @method string getImageSourceType() 获取镜像来源。支持企业版镜像（tcr）、个人版镜像（ccrPersonal）、个人版共有镜像（ccrAllPersonal)
 * @method void setImageSourceType(string $ImageSourceType) 设置镜像来源。支持企业版镜像（tcr）、个人版镜像（ccrPersonal）、个人版共有镜像（ccrAllPersonal)
 * @method ImageInfo getImageInfo() 获取镜像信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置镜像信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImagePullSecret getImagePullSecret() 获取镜像获取密钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImagePullSecret(ImagePullSecret $ImagePullSecret) 设置镜像获取密钥
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomImage extends AbstractModel
{
    /**
     * @var string 镜像来源。支持企业版镜像（tcr）、个人版镜像（ccrPersonal）、个人版共有镜像（ccrAllPersonal)
     */
    public $ImageSourceType;

    /**
     * @var ImageInfo 镜像信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageInfo;

    /**
     * @var ImagePullSecret 镜像获取密钥
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImagePullSecret;

    /**
     * @param string $ImageSourceType 镜像来源。支持企业版镜像（tcr）、个人版镜像（ccrPersonal）、个人版共有镜像（ccrAllPersonal)
     * @param ImageInfo $ImageInfo 镜像信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImagePullSecret $ImagePullSecret 镜像获取密钥
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
        if (array_key_exists("ImageSourceType",$param) and $param["ImageSourceType"] !== null) {
            $this->ImageSourceType = $param["ImageSourceType"];
        }

        if (array_key_exists("ImageInfo",$param) and $param["ImageInfo"] !== null) {
            $this->ImageInfo = new ImageInfo();
            $this->ImageInfo->deserialize($param["ImageInfo"]);
        }

        if (array_key_exists("ImagePullSecret",$param) and $param["ImagePullSecret"] !== null) {
            $this->ImagePullSecret = new ImagePullSecret();
            $this->ImagePullSecret->deserialize($param["ImagePullSecret"]);
        }
    }
}

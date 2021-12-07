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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表示镜像资产专属的详情。
 *
 * @method string getImageId() 获取镜像在主机上的ID。
 * @method void setImageId(string $ImageId) 设置镜像在主机上的ID。
 * @method string getImageName() 获取镜像的名称。
 * @method void setImageName(string $ImageName) 设置镜像的名称。
 * @method string getImageTag() 获取镜像的Tag。
 * @method void setImageTag(string $ImageTag) 设置镜像的Tag。
 * @method string getRepository() 获取镜像所在远程仓库的路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepository(string $Repository) 设置镜像所在远程仓库的路径。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ComplianceImageDetailInfo extends AbstractModel
{
    /**
     * @var string 镜像在主机上的ID。
     */
    public $ImageId;

    /**
     * @var string 镜像的名称。
     */
    public $ImageName;

    /**
     * @var string 镜像的Tag。
     */
    public $ImageTag;

    /**
     * @var string 镜像所在远程仓库的路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Repository;

    /**
     * @param string $ImageId 镜像在主机上的ID。
     * @param string $ImageName 镜像的名称。
     * @param string $ImageTag 镜像的Tag。
     * @param string $Repository 镜像所在远程仓库的路径。
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("Repository",$param) and $param["Repository"] !== null) {
            $this->Repository = $param["Repository"];
        }
    }
}

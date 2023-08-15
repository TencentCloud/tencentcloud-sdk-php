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
 * DuplicateImage请求参数结构体
 *
 * @method string getRegistryId() 获取实例id
 * @method void setRegistryId(string $RegistryId) 设置实例id
 * @method string getSourceNamespace() 获取源命名空间名称
 * @method void setSourceNamespace(string $SourceNamespace) 设置源命名空间名称
 * @method string getSourceRepo() 获取源镜像仓库名称
 * @method void setSourceRepo(string $SourceRepo) 设置源镜像仓库名称
 * @method string getSourceReference() 获取源镜像tag或digest值，目前仅支持tag
 * @method void setSourceReference(string $SourceReference) 设置源镜像tag或digest值，目前仅支持tag
 * @method string getDestinationTag() 获取目标镜像版本
 * @method void setDestinationTag(string $DestinationTag) 设置目标镜像版本
 * @method string getDestinationNamespace() 获取目标命名空间，不填默认与源一致
 * @method void setDestinationNamespace(string $DestinationNamespace) 设置目标命名空间，不填默认与源一致
 * @method string getDestinationRepo() 获取目标镜像仓库，不填默认与源一致
 * @method void setDestinationRepo(string $DestinationRepo) 设置目标镜像仓库，不填默认与源一致
 * @method boolean getOverride() 获取是否覆盖
 * @method void setOverride(boolean $Override) 设置是否覆盖
 */
class DuplicateImageRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $RegistryId;

    /**
     * @var string 源命名空间名称
     */
    public $SourceNamespace;

    /**
     * @var string 源镜像仓库名称
     */
    public $SourceRepo;

    /**
     * @var string 源镜像tag或digest值，目前仅支持tag
     */
    public $SourceReference;

    /**
     * @var string 目标镜像版本
     */
    public $DestinationTag;

    /**
     * @var string 目标命名空间，不填默认与源一致
     */
    public $DestinationNamespace;

    /**
     * @var string 目标镜像仓库，不填默认与源一致
     */
    public $DestinationRepo;

    /**
     * @var boolean 是否覆盖
     */
    public $Override;

    /**
     * @param string $RegistryId 实例id
     * @param string $SourceNamespace 源命名空间名称
     * @param string $SourceRepo 源镜像仓库名称
     * @param string $SourceReference 源镜像tag或digest值，目前仅支持tag
     * @param string $DestinationTag 目标镜像版本
     * @param string $DestinationNamespace 目标命名空间，不填默认与源一致
     * @param string $DestinationRepo 目标镜像仓库，不填默认与源一致
     * @param boolean $Override 是否覆盖
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("SourceNamespace",$param) and $param["SourceNamespace"] !== null) {
            $this->SourceNamespace = $param["SourceNamespace"];
        }

        if (array_key_exists("SourceRepo",$param) and $param["SourceRepo"] !== null) {
            $this->SourceRepo = $param["SourceRepo"];
        }

        if (array_key_exists("SourceReference",$param) and $param["SourceReference"] !== null) {
            $this->SourceReference = $param["SourceReference"];
        }

        if (array_key_exists("DestinationTag",$param) and $param["DestinationTag"] !== null) {
            $this->DestinationTag = $param["DestinationTag"];
        }

        if (array_key_exists("DestinationNamespace",$param) and $param["DestinationNamespace"] !== null) {
            $this->DestinationNamespace = $param["DestinationNamespace"];
        }

        if (array_key_exists("DestinationRepo",$param) and $param["DestinationRepo"] !== null) {
            $this->DestinationRepo = $param["DestinationRepo"];
        }

        if (array_key_exists("Override",$param) and $param["Override"] !== null) {
            $this->Override = $param["Override"];
        }
    }
}

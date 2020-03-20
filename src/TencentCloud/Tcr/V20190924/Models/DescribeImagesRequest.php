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
 * @method string getRegistryId() 获取实例ID
 * @method void setRegistryId(string $RegistryId) 设置实例ID
 * @method string getRepositoryName() 获取镜像仓库名称
 * @method void setRepositoryName(string $RepositoryName) 设置镜像仓库名称
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method integer getLimit() 获取每页个数，用于分页，默认20
 * @method void setLimit(integer $Limit) 设置每页个数，用于分页，默认20
 * @method integer getOffset() 获取页数，默认值为1
 * @method void setOffset(integer $Offset) 设置页数，默认值为1
 * @method string getImageVersion() 获取镜像版本(Tag)，置空则返回仓库内全部的容器镜像
 * @method void setImageVersion(string $ImageVersion) 设置镜像版本(Tag)，置空则返回仓库内全部的容器镜像
 */

/**
 *DescribeImages请求参数结构体
 */
class DescribeImagesRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $RegistryId;

    /**
     * @var string 镜像仓库名称
     */
    public $RepositoryName;

    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @var integer 每页个数，用于分页，默认20
     */
    public $Limit;

    /**
     * @var integer 页数，默认值为1
     */
    public $Offset;

    /**
     * @var string 镜像版本(Tag)，置空则返回仓库内全部的容器镜像
     */
    public $ImageVersion;
    /**
     * @param string $RegistryId 实例ID
     * @param string $RepositoryName 镜像仓库名称
     * @param string $NamespaceName 命名空间名称
     * @param integer $Limit 每页个数，用于分页，默认20
     * @param integer $Offset 页数，默认值为1
     * @param string $ImageVersion 镜像版本(Tag)，置空则返回仓库内全部的容器镜像
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

        if (array_key_exists("RepositoryName",$param) and $param["RepositoryName"] !== null) {
            $this->RepositoryName = $param["RepositoryName"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            $this->ImageVersion = $param["ImageVersion"];
        }
    }
}

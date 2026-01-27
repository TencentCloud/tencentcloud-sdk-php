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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRepository请求参数结构体
 *
 * @method string getRegistryId() 获取<p>实例Id</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>实例Id</p>
 * @method string getNamespaceName() 获取<p>命名空间的名称</p>
 * @method void setNamespaceName(string $NamespaceName) 设置<p>命名空间的名称</p>
 * @method string getRepositoryName() 获取<p>镜像仓库的名称</p>
 * @method void setRepositoryName(string $RepositoryName) 设置<p>镜像仓库的名称</p>
 * @method boolean getForceDelete() 获取<p>默认值为true，表示无论仓库是否存在镜像都直接删除；false代表删除仓库前需检查是否存在镜像。</p>
 * @method void setForceDelete(boolean $ForceDelete) 设置<p>默认值为true，表示无论仓库是否存在镜像都直接删除；false代表删除仓库前需检查是否存在镜像。</p>
 */
class DeleteRepositoryRequest extends AbstractModel
{
    /**
     * @var string <p>实例Id</p>
     */
    public $RegistryId;

    /**
     * @var string <p>命名空间的名称</p>
     */
    public $NamespaceName;

    /**
     * @var string <p>镜像仓库的名称</p>
     */
    public $RepositoryName;

    /**
     * @var boolean <p>默认值为true，表示无论仓库是否存在镜像都直接删除；false代表删除仓库前需检查是否存在镜像。</p>
     */
    public $ForceDelete;

    /**
     * @param string $RegistryId <p>实例Id</p>
     * @param string $NamespaceName <p>命名空间的名称</p>
     * @param string $RepositoryName <p>镜像仓库的名称</p>
     * @param boolean $ForceDelete <p>默认值为true，表示无论仓库是否存在镜像都直接删除；false代表删除仓库前需检查是否存在镜像。</p>
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

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("RepositoryName",$param) and $param["RepositoryName"] !== null) {
            $this->RepositoryName = $param["RepositoryName"];
        }

        if (array_key_exists("ForceDelete",$param) and $param["ForceDelete"] !== null) {
            $this->ForceDelete = $param["ForceDelete"];
        }
    }
}

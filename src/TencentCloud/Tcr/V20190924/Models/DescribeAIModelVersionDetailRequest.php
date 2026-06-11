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
 * DescribeAIModelVersionDetail请求参数结构体
 *
 * @method string getRegistryId() 获取<p>TCR实例ID</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>TCR实例ID</p>
 * @method string getNamespaceName() 获取<p>命名空间</p>
 * @method void setNamespaceName(string $NamespaceName) 设置<p>命名空间</p>
 * @method string getRepositoryName() 获取<p>仓库名</p>
 * @method void setRepositoryName(string $RepositoryName) 设置<p>仓库名</p>
 * @method string getReference() 获取<p>版本</p>
 * @method void setReference(string $Reference) 设置<p>版本</p>
 */
class DescribeAIModelVersionDetailRequest extends AbstractModel
{
    /**
     * @var string <p>TCR实例ID</p>
     */
    public $RegistryId;

    /**
     * @var string <p>命名空间</p>
     */
    public $NamespaceName;

    /**
     * @var string <p>仓库名</p>
     */
    public $RepositoryName;

    /**
     * @var string <p>版本</p>
     */
    public $Reference;

    /**
     * @param string $RegistryId <p>TCR实例ID</p>
     * @param string $NamespaceName <p>命名空间</p>
     * @param string $RepositoryName <p>仓库名</p>
     * @param string $Reference <p>版本</p>
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

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }
    }
}

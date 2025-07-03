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
 * CreateRepository请求参数结构体
 *
 * @method string getRegistryId() 获取实例ID
 * @method void setRegistryId(string $RegistryId) 设置实例ID
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method string getRepositoryName() 获取仓库名称，需满足以下规则：
1. 长度需 ​大于2且小于245个字符 
2. 仅允许小写字母、数字及符号 . _ -
 * @method void setRepositoryName(string $RepositoryName) 设置仓库名称，需满足以下规则：
1. 长度需 ​大于2且小于245个字符 
2. 仅允许小写字母、数字及符号 . _ -
 * @method string getBriefDescription() 获取仓库简短描述
 * @method void setBriefDescription(string $BriefDescription) 设置仓库简短描述
 * @method string getDescription() 获取仓库详细描述
 * @method void setDescription(string $Description) 设置仓库详细描述
 */
class CreateRepositoryRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $RegistryId;

    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @var string 仓库名称，需满足以下规则：
1. 长度需 ​大于2且小于245个字符 
2. 仅允许小写字母、数字及符号 . _ -
     */
    public $RepositoryName;

    /**
     * @var string 仓库简短描述
     */
    public $BriefDescription;

    /**
     * @var string 仓库详细描述
     */
    public $Description;

    /**
     * @param string $RegistryId 实例ID
     * @param string $NamespaceName 命名空间名称
     * @param string $RepositoryName 仓库名称，需满足以下规则：
1. 长度需 ​大于2且小于245个字符 
2. 仅允许小写字母、数字及符号 . _ -
     * @param string $BriefDescription 仓库简短描述
     * @param string $Description 仓库详细描述
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

        if (array_key_exists("BriefDescription",$param) and $param["BriefDescription"] !== null) {
            $this->BriefDescription = $param["BriefDescription"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}

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
 * 删除模型结构体
 *
 * @method string getNamespaceName() 获取
 * @method void setNamespaceName(string $NamespaceName) 设置
 * @method string getRepositoryName() 获取
 * @method void setRepositoryName(string $RepositoryName) 设置
 * @method string getReference() 获取
 * @method void setReference(string $Reference) 设置
 */
class DeleteModelItem extends AbstractModel
{
    /**
     * @var string 
     */
    public $NamespaceName;

    /**
     * @var string 
     */
    public $RepositoryName;

    /**
     * @var string 
     */
    public $Reference;

    /**
     * @param string $NamespaceName 
     * @param string $RepositoryName 
     * @param string $Reference 
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

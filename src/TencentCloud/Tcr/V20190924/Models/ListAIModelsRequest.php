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
 * ListAIModels请求参数结构体
 *
 * @method string getRegistryId() 获取<p>TCR实例ID</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>TCR实例ID</p>
 * @method string getNamespace() 获取<p>命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>命名空间</p>
 * @method string getModelName() 获取<p>模型名称</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method integer getLimit() 获取<p>最大限制</p>
 * @method void setLimit(integer $Limit) 设置<p>最大限制</p>
 * @method string getSearchKey() 获取<p>模糊搜索</p>
 * @method void setSearchKey(string $SearchKey) 设置<p>模糊搜索</p>
 */
class ListAIModelsRequest extends AbstractModel
{
    /**
     * @var string <p>TCR实例ID</p>
     */
    public $RegistryId;

    /**
     * @var string <p>命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>模型名称</p>
     */
    public $ModelName;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var integer <p>最大限制</p>
     */
    public $Limit;

    /**
     * @var string <p>模糊搜索</p>
     */
    public $SearchKey;

    /**
     * @param string $RegistryId <p>TCR实例ID</p>
     * @param string $Namespace <p>命名空间</p>
     * @param string $ModelName <p>模型名称</p>
     * @param integer $Offset <p>偏移量</p>
     * @param integer $Limit <p>最大限制</p>
     * @param string $SearchKey <p>模糊搜索</p>
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }
    }
}

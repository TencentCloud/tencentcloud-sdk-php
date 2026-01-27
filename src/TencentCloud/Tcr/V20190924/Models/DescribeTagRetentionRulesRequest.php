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
 * DescribeTagRetentionRules请求参数结构体
 *
 * @method string getRegistryId() 获取<p>主实例iD</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>主实例iD</p>
 * @method string getNamespaceName() 获取<p>命名空间的名称</p>
 * @method void setNamespaceName(string $NamespaceName) 设置<p>命名空间的名称</p>
 * @method integer getLimit() 获取<p>分页PageSize</p>
 * @method void setLimit(integer $Limit) 设置<p>分页PageSize</p>
 * @method integer getOffset() 获取<p>分页Page</p>
 * @method void setOffset(integer $Offset) 设置<p>分页Page</p>
 */
class DescribeTagRetentionRulesRequest extends AbstractModel
{
    /**
     * @var string <p>主实例iD</p>
     */
    public $RegistryId;

    /**
     * @var string <p>命名空间的名称</p>
     */
    public $NamespaceName;

    /**
     * @var integer <p>分页PageSize</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页Page</p>
     */
    public $Offset;

    /**
     * @param string $RegistryId <p>主实例iD</p>
     * @param string $NamespaceName <p>命名空间的名称</p>
     * @param integer $Limit <p>分页PageSize</p>
     * @param integer $Offset <p>分页Page</p>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}

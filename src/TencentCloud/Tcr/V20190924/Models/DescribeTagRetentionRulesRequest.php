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
 * @method string getRegistryId() 获取主实例iD
 * @method void setRegistryId(string $RegistryId) 设置主实例iD
 * @method string getNamespaceName() 获取命名空间的名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间的名称
 * @method integer getLimit() 获取分页PageSize
 * @method void setLimit(integer $Limit) 设置分页PageSize
 * @method integer getOffset() 获取分页Page
 * @method void setOffset(integer $Offset) 设置分页Page
 */
class DescribeTagRetentionRulesRequest extends AbstractModel
{
    /**
     * @var string 主实例iD
     */
    public $RegistryId;

    /**
     * @var string 命名空间的名称
     */
    public $NamespaceName;

    /**
     * @var integer 分页PageSize
     */
    public $Limit;

    /**
     * @var integer 分页Page
     */
    public $Offset;

    /**
     * @param string $RegistryId 主实例iD
     * @param string $NamespaceName 命名空间的名称
     * @param integer $Limit 分页PageSize
     * @param integer $Offset 分页Page
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

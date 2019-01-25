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
namespace TencentCloud\Bmeip\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAclName() 获取ACL 名称，支持模糊查找
 * @method void setAclName(string $AclName) 设置ACL 名称，支持模糊查找
 * @method array getAclIds() 获取ACL 实例 ID 列表，数组下标从 0 开始
 * @method void setAclIds(array $AclIds) 设置ACL 实例 ID 列表，数组下标从 0 开始
 * @method integer getOffset() 获取分页参数。偏移量，默认为 0
 * @method void setOffset(integer $Offset) 设置分页参数。偏移量，默认为 0
 * @method integer getLimit() 获取分页参数。每一页的 EIPACL 列表数目
 * @method void setLimit(integer $Limit) 设置分页参数。每一页的 EIPACL 列表数目
 */

/**
 *DescribeEipAcls请求参数结构体
 */
class DescribeEipAclsRequest extends AbstractModel
{
    /**
     * @var string ACL 名称，支持模糊查找
     */
    public $AclName;

    /**
     * @var array ACL 实例 ID 列表，数组下标从 0 开始
     */
    public $AclIds;

    /**
     * @var integer 分页参数。偏移量，默认为 0
     */
    public $Offset;

    /**
     * @var integer 分页参数。每一页的 EIPACL 列表数目
     */
    public $Limit;
    /**
     * @param string $AclName ACL 名称，支持模糊查找
     * @param array $AclIds ACL 实例 ID 列表，数组下标从 0 开始
     * @param integer $Offset 分页参数。偏移量，默认为 0
     * @param integer $Limit 分页参数。每一页的 EIPACL 列表数目
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AclName",$param) and $param["AclName"] !== null) {
            $this->AclName = $param["AclName"];
        }

        if (array_key_exists("AclIds",$param) and $param["AclIds"] !== null) {
            $this->AclIds = $param["AclIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

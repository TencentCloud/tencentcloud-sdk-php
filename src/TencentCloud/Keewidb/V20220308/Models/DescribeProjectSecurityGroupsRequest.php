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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjectSecurityGroups请求参数结构体
 *
 * @method string getProduct() 获取数据库引擎名称。该产品固定为 keewidb。
 * @method void setProduct(string $Product) 设置数据库引擎名称。该产品固定为 keewidb。
 * @method integer getProjectId() 获取项目 ID。
登录 [账号中心](https://console.cloud.tencent.com/developer)，在<b>项目管理</b>中可获取项目 ID。
 * @method void setProjectId(integer $ProjectId) 设置项目 ID。
登录 [账号中心](https://console.cloud.tencent.com/developer)，在<b>项目管理</b>中可获取项目 ID。
 * @method integer getOffset() 获取分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
 * @method void setOffset(integer $Offset) 设置分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
 * @method integer getLimit() 获取每页安全组的数量限制。默认为 20，最多输出100条。
 * @method void setLimit(integer $Limit) 设置每页安全组的数量限制。默认为 20，最多输出100条。
 * @method string getSearchKey() 获取搜索关键词，支持根据安全组 ID 或者安全组名称搜索。
 * @method void setSearchKey(string $SearchKey) 设置搜索关键词，支持根据安全组 ID 或者安全组名称搜索。
 */
class DescribeProjectSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string 数据库引擎名称。该产品固定为 keewidb。
     */
    public $Product;

    /**
     * @var integer 项目 ID。
登录 [账号中心](https://console.cloud.tencent.com/developer)，在<b>项目管理</b>中可获取项目 ID。
     */
    public $ProjectId;

    /**
     * @var integer 分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
     */
    public $Offset;

    /**
     * @var integer 每页安全组的数量限制。默认为 20，最多输出100条。
     */
    public $Limit;

    /**
     * @var string 搜索关键词，支持根据安全组 ID 或者安全组名称搜索。
     */
    public $SearchKey;

    /**
     * @param string $Product 数据库引擎名称。该产品固定为 keewidb。
     * @param integer $ProjectId 项目 ID。
登录 [账号中心](https://console.cloud.tencent.com/developer)，在<b>项目管理</b>中可获取项目 ID。
     * @param integer $Offset 分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
     * @param integer $Limit 每页安全组的数量限制。默认为 20，最多输出100条。
     * @param string $SearchKey 搜索关键词，支持根据安全组 ID 或者安全组名称搜索。
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjectSecurityGroups请求参数结构体
 *
 * @method string getProduct() 获取数据库引擎名称，本接口取值：redis。
 * @method void setProduct(string $Product) 设置数据库引擎名称，本接口取值：redis。
 * @method integer getProjectId() 获取项目 ID，请登录[Redis控制台的项目管理](https://console.cloud.tencent.com/project)页面，在**项目名称**中复制项目 ID。
 * @method void setProjectId(integer $ProjectId) 设置项目 ID，请登录[Redis控制台的项目管理](https://console.cloud.tencent.com/project)页面，在**项目名称**中复制项目 ID。
 * @method integer getOffset() 获取偏移量，取值为Limit的整数倍。
 * @method void setOffset(integer $Offset) 设置偏移量，取值为Limit的整数倍。
 * @method integer getLimit() 获取拉取数量限制，默认 20。
 * @method void setLimit(integer $Limit) 设置拉取数量限制，默认 20。
 * @method string getSearchKey() 获取搜索条件，支持安全组 ID 或者安全组名称。
 * @method void setSearchKey(string $SearchKey) 设置搜索条件，支持安全组 ID 或者安全组名称。
 */
class DescribeProjectSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string 数据库引擎名称，本接口取值：redis。
     */
    public $Product;

    /**
     * @var integer 项目 ID，请登录[Redis控制台的项目管理](https://console.cloud.tencent.com/project)页面，在**项目名称**中复制项目 ID。
     */
    public $ProjectId;

    /**
     * @var integer 偏移量，取值为Limit的整数倍。
     */
    public $Offset;

    /**
     * @var integer 拉取数量限制，默认 20。
     */
    public $Limit;

    /**
     * @var string 搜索条件，支持安全组 ID 或者安全组名称。
     */
    public $SearchKey;

    /**
     * @param string $Product 数据库引擎名称，本接口取值：redis。
     * @param integer $ProjectId 项目 ID，请登录[Redis控制台的项目管理](https://console.cloud.tencent.com/project)页面，在**项目名称**中复制项目 ID。
     * @param integer $Offset 偏移量，取值为Limit的整数倍。
     * @param integer $Limit 拉取数量限制，默认 20。
     * @param string $SearchKey 搜索条件，支持安全组 ID 或者安全组名称。
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

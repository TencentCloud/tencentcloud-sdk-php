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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjectSecurityGroups请求参数结构体
 *
 * @method string getProduct() 获取数据库引擎名称，本接口取值：dcdb。
 * @method void setProduct(string $Product) 设置数据库引擎名称，本接口取值：dcdb。
 * @method integer getProjectId() 获取项目ID。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。
 */
class DescribeProjectSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string 数据库引擎名称，本接口取值：dcdb。
     */
    public $Product;

    /**
     * @var integer 项目ID。
     */
    public $ProjectId;

    /**
     * @param string $Product 数据库引擎名称，本接口取值：dcdb。
     * @param integer $ProjectId 项目ID。
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
    }
}

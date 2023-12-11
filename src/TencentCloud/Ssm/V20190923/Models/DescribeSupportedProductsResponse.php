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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSupportedProducts返回参数结构体
 *
 * @method array getProducts() 获取支持的所有云产品列表。
每种云产品与凭据类型的对应关系如下：
当SecretType为1时，支持的云产品列表包括：Mysql、Tdsql-mysql、Tdsql_C_Mysql；
当SecretType为2时，支持的产品列表为：Cvm；
当SecretType为3时，支持的产品列表为：Cam（此功能的使用需要联系云助手单独开始白名单）；
当SecretType为4时，支持的产品列表为：Redis。
 * @method void setProducts(array $Products) 设置支持的所有云产品列表。
每种云产品与凭据类型的对应关系如下：
当SecretType为1时，支持的云产品列表包括：Mysql、Tdsql-mysql、Tdsql_C_Mysql；
当SecretType为2时，支持的产品列表为：Cvm；
当SecretType为3时，支持的产品列表为：Cam（此功能的使用需要联系云助手单独开始白名单）；
当SecretType为4时，支持的产品列表为：Redis。
 * @method integer getTotalCount() 获取支持的产品个数
 * @method void setTotalCount(integer $TotalCount) 设置支持的产品个数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSupportedProductsResponse extends AbstractModel
{
    /**
     * @var array 支持的所有云产品列表。
每种云产品与凭据类型的对应关系如下：
当SecretType为1时，支持的云产品列表包括：Mysql、Tdsql-mysql、Tdsql_C_Mysql；
当SecretType为2时，支持的产品列表为：Cvm；
当SecretType为3时，支持的产品列表为：Cam（此功能的使用需要联系云助手单独开始白名单）；
当SecretType为4时，支持的产品列表为：Redis。
     */
    public $Products;

    /**
     * @var integer 支持的产品个数
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Products 支持的所有云产品列表。
每种云产品与凭据类型的对应关系如下：
当SecretType为1时，支持的云产品列表包括：Mysql、Tdsql-mysql、Tdsql_C_Mysql；
当SecretType为2时，支持的产品列表为：Cvm；
当SecretType为3时，支持的产品列表为：Cam（此功能的使用需要联系云助手单独开始白名单）；
当SecretType为4时，支持的产品列表为：Redis。
     * @param integer $TotalCount 支持的产品个数
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Products",$param) and $param["Products"] !== null) {
            $this->Products = $param["Products"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBDiagReportUrls请求参数结构体
 *
 * @method string getProduct() 获取<p>服务产品类型，支持值包括：&quot;mysql&quot; - 云数据库 MySQL，&quot;redis&quot; - 云数据库 Redis，&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;mongodb&quot; - 云数据库 MongoDB，&quot;postgres&quot; - 云数据库 PostgreSQL。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型，支持值包括：&quot;mysql&quot; - 云数据库 MySQL，&quot;redis&quot; - 云数据库 Redis，&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;mongodb&quot; - 云数据库 MongoDB，&quot;postgres&quot; - 云数据库 PostgreSQL。</p>
 * @method array getAsyncRequestIds() 获取<p>异步任务ID列表。</p>
 * @method void setAsyncRequestIds(array $AsyncRequestIds) 设置<p>异步任务ID列表。</p>
 */
class CreateDBDiagReportUrlsRequest extends AbstractModel
{
    /**
     * @var string <p>服务产品类型，支持值包括：&quot;mysql&quot; - 云数据库 MySQL，&quot;redis&quot; - 云数据库 Redis，&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;mongodb&quot; - 云数据库 MongoDB，&quot;postgres&quot; - 云数据库 PostgreSQL。</p>
     */
    public $Product;

    /**
     * @var array <p>异步任务ID列表。</p>
     */
    public $AsyncRequestIds;

    /**
     * @param string $Product <p>服务产品类型，支持值包括：&quot;mysql&quot; - 云数据库 MySQL，&quot;redis&quot; - 云数据库 Redis，&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;mongodb&quot; - 云数据库 MongoDB，&quot;postgres&quot; - 云数据库 PostgreSQL。</p>
     * @param array $AsyncRequestIds <p>异步任务ID列表。</p>
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

        if (array_key_exists("AsyncRequestIds",$param) and $param["AsyncRequestIds"] !== null) {
            $this->AsyncRequestIds = $param["AsyncRequestIds"];
        }
    }
}

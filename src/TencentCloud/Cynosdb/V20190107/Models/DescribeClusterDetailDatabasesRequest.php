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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterDetailDatabases请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method integer getOffset() 获取<p>偏移量，默认0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认0</p>
 * @method integer getLimit() 获取<p>返回数量，默认20,最大100</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认20,最大100</p>
 * @method string getDbName() 获取<p>数据库名称，通过该字段进行子串匹配</p>
 * @method void setDbName(string $DbName) 设置<p>数据库名称，通过该字段进行子串匹配</p>
 */
class DescribeClusterDetailDatabasesRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>偏移量，默认0</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认20,最大100</p>
     */
    public $Limit;

    /**
     * @var string <p>数据库名称，通过该字段进行子串匹配</p>
     */
    public $DbName;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param integer $Offset <p>偏移量，默认0</p>
     * @param integer $Limit <p>返回数量，默认20,最大100</p>
     * @param string $DbName <p>数据库名称，通过该字段进行子串匹配</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }
    }
}

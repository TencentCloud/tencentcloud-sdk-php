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
 * DescribeClusterDatabases请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群id</p>
 * @method array getFuzzyDBNames() 获取<p>DB库名（支持模糊匹配）</p>
 * @method void setFuzzyDBNames(array $FuzzyDBNames) 设置<p>DB库名（支持模糊匹配）</p>
 * @method integer getOffset() 获取<p>分页偏移</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移</p>
 * @method integer getLimit() 获取<p>分页限制数量</p>
 * @method void setLimit(integer $Limit) 设置<p>分页限制数量</p>
 */
class DescribeClusterDatabasesRequest extends AbstractModel
{
    /**
     * @var string <p>集群id</p>
     */
    public $ClusterId;

    /**
     * @var array <p>DB库名（支持模糊匹配）</p>
     */
    public $FuzzyDBNames;

    /**
     * @var integer <p>分页偏移</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页限制数量</p>
     */
    public $Limit;

    /**
     * @param string $ClusterId <p>集群id</p>
     * @param array $FuzzyDBNames <p>DB库名（支持模糊匹配）</p>
     * @param integer $Offset <p>分页偏移</p>
     * @param integer $Limit <p>分页限制数量</p>
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

        if (array_key_exists("FuzzyDBNames",$param) and $param["FuzzyDBNames"] !== null) {
            $this->FuzzyDBNames = $param["FuzzyDBNames"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchClusterDatabases请求参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getDatabase() 获取数据库名
 * @method void setDatabase(string $Database) 设置数据库名
 * @method integer getMatchType() 获取是否精确搜索。
0: 模糊搜索 1:精确搜索 
默认为0
 * @method void setMatchType(integer $MatchType) 设置是否精确搜索。
0: 模糊搜索 1:精确搜索 
默认为0
 */
class SearchClusterDatabasesRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 数据库名
     */
    public $Database;

    /**
     * @var integer 是否精确搜索。
0: 模糊搜索 1:精确搜索 
默认为0
     */
    public $MatchType;

    /**
     * @param string $ClusterId 集群id
     * @param string $Database 数据库名
     * @param integer $MatchType 是否精确搜索。
0: 模糊搜索 1:精确搜索 
默认为0
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

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }
    }
}

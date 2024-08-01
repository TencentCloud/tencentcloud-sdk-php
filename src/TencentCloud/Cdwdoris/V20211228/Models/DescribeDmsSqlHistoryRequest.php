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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDmsSqlHistory请求参数结构体
 *
 * @method array getQueryNode() 获取查询节点ip
 * @method void setQueryNode(array $QueryNode) 设置查询节点ip
 * @method array getQueryStatus() 获取运行状态
 * @method void setQueryStatus(array $QueryStatus) 设置运行状态
 * @method string getQuerySql() 获取模糊搜索sql
 * @method void setQuerySql(string $QuerySql) 设置模糊搜索sql
 * @method string getQueryErrMsg() 获取根据报错原因搜索
 * @method void setQueryErrMsg(string $QueryErrMsg) 设置根据报错原因搜索
 */
class DescribeDmsSqlHistoryRequest extends AbstractModel
{
    /**
     * @var array 查询节点ip
     */
    public $QueryNode;

    /**
     * @var array 运行状态
     */
    public $QueryStatus;

    /**
     * @var string 模糊搜索sql
     */
    public $QuerySql;

    /**
     * @var string 根据报错原因搜索
     */
    public $QueryErrMsg;

    /**
     * @param array $QueryNode 查询节点ip
     * @param array $QueryStatus 运行状态
     * @param string $QuerySql 模糊搜索sql
     * @param string $QueryErrMsg 根据报错原因搜索
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
        if (array_key_exists("QueryNode",$param) and $param["QueryNode"] !== null) {
            $this->QueryNode = $param["QueryNode"];
        }

        if (array_key_exists("QueryStatus",$param) and $param["QueryStatus"] !== null) {
            $this->QueryStatus = $param["QueryStatus"];
        }

        if (array_key_exists("QuerySql",$param) and $param["QuerySql"] !== null) {
            $this->QuerySql = $param["QuerySql"];
        }

        if (array_key_exists("QueryErrMsg",$param) and $param["QueryErrMsg"] !== null) {
            $this->QueryErrMsg = $param["QueryErrMsg"];
        }
    }
}

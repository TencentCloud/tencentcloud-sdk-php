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
 * DescribeAccounts请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method array getAccountNames() 获取需要过滤的账户列表
 * @method void setAccountNames(array $AccountNames) 设置需要过滤的账户列表
 * @method string getDbType() 获取数据库类型，取值范围: 
<li> MYSQL </li>
该参数已废用
 * @method void setDbType(string $DbType) 设置数据库类型，取值范围: 
<li> MYSQL </li>
该参数已废用
 * @method array getHosts() 获取需要过滤的账户列表
 * @method void setHosts(array $Hosts) 设置需要过滤的账户列表
 * @method integer getLimit() 获取限制量
 * @method void setLimit(integer $Limit) 设置限制量
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 */
class DescribeAccountsRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var array 需要过滤的账户列表
     */
    public $AccountNames;

    /**
     * @var string 数据库类型，取值范围: 
<li> MYSQL </li>
该参数已废用
     */
    public $DbType;

    /**
     * @var array 需要过滤的账户列表
     */
    public $Hosts;

    /**
     * @var integer 限制量
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @param string $ClusterId 集群ID
     * @param array $AccountNames 需要过滤的账户列表
     * @param string $DbType 数据库类型，取值范围: 
<li> MYSQL </li>
该参数已废用
     * @param array $Hosts 需要过滤的账户列表
     * @param integer $Limit 限制量
     * @param integer $Offset 偏移量
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

        if (array_key_exists("AccountNames",$param) and $param["AccountNames"] !== null) {
            $this->AccountNames = $param["AccountNames"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}

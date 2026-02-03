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
 * DescribeLibraDBClusterAccounts请求参数结构体
 *
 * @method string getClusterId() 获取分析集群id
 * @method void setClusterId(string $ClusterId) 设置分析集群id
 * @method array getAccountNames() 获取账号名
 * @method void setAccountNames(array $AccountNames) 设置账号名
 * @method string getAccountRegular() 获取模糊匹配关键字
 * @method void setAccountRegular(string $AccountRegular) 设置模糊匹配关键字
 * @method array getHosts() 获取主机名
 * @method void setHosts(array $Hosts) 设置主机名
 * @method integer getLimit() 获取限制
 * @method void setLimit(integer $Limit) 设置限制
 * @method integer getOffset() 获取偏移
 * @method void setOffset(integer $Offset) 设置偏移
 */
class DescribeLibraDBClusterAccountsRequest extends AbstractModel
{
    /**
     * @var string 分析集群id
     */
    public $ClusterId;

    /**
     * @var array 账号名
     */
    public $AccountNames;

    /**
     * @var string 模糊匹配关键字
     */
    public $AccountRegular;

    /**
     * @var array 主机名
     */
    public $Hosts;

    /**
     * @var integer 限制
     */
    public $Limit;

    /**
     * @var integer 偏移
     */
    public $Offset;

    /**
     * @param string $ClusterId 分析集群id
     * @param array $AccountNames 账号名
     * @param string $AccountRegular 模糊匹配关键字
     * @param array $Hosts 主机名
     * @param integer $Limit 限制
     * @param integer $Offset 偏移
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

        if (array_key_exists("AccountRegular",$param) and $param["AccountRegular"] !== null) {
            $this->AccountRegular = $param["AccountRegular"];
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

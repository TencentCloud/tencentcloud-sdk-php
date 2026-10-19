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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccounts请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。</p>
 * @method integer getOffset() 获取<p>记录偏移量，默认值为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>记录偏移量，默认值为0。</p>
 * @method integer getLimit() 获取<p>单次请求返回的数量，默认值为20，最小值为1，最大值为100。</p>
 * @method void setLimit(integer $Limit) 设置<p>单次请求返回的数量，默认值为20，最小值为1，最大值为100。</p>
 * @method string getAccountRegexp() 获取<p>匹配账号名的正则表达式，规则同 MySQL 官网。</p>
 * @method void setAccountRegexp(string $AccountRegexp) 设置<p>匹配账号名的正则表达式，规则同 MySQL 官网。</p>
 * @method string getSortBy() 获取<p>默认无排序，支持：ASC、DESC、asc、desc</p>
 * @method void setSortBy(string $SortBy) 设置<p>默认无排序，支持：ASC、DESC、asc、desc</p>
 * @method string getOrderBy() 获取<p>待排序的时间字段，可选：CreateTime(账号创建时间)、ModifyTime(账号更新时间)、ModifyPasswordTime(密码修改时间)</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>待排序的时间字段，可选：CreateTime(账号创建时间)、ModifyTime(账号更新时间)、ModifyPasswordTime(密码修改时间)</p>
 * @method string getHostRegexp() 获取<p>匹配账号主机地址（Host）的正则表达式，规则同 MySQL 官网</p>
 * @method void setHostRegexp(string $HostRegexp) 设置<p>匹配账号主机地址（Host）的正则表达式，规则同 MySQL 官网</p>
 */
class DescribeAccountsRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>记录偏移量，默认值为0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>单次请求返回的数量，默认值为20，最小值为1，最大值为100。</p>
     */
    public $Limit;

    /**
     * @var string <p>匹配账号名的正则表达式，规则同 MySQL 官网。</p>
     */
    public $AccountRegexp;

    /**
     * @var string <p>默认无排序，支持：ASC、DESC、asc、desc</p>
     */
    public $SortBy;

    /**
     * @var string <p>待排序的时间字段，可选：CreateTime(账号创建时间)、ModifyTime(账号更新时间)、ModifyPasswordTime(密码修改时间)</p>
     */
    public $OrderBy;

    /**
     * @var string <p>匹配账号主机地址（Host）的正则表达式，规则同 MySQL 官网</p>
     */
    public $HostRegexp;

    /**
     * @param string $InstanceId <p>实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。</p>
     * @param integer $Offset <p>记录偏移量，默认值为0。</p>
     * @param integer $Limit <p>单次请求返回的数量，默认值为20，最小值为1，最大值为100。</p>
     * @param string $AccountRegexp <p>匹配账号名的正则表达式，规则同 MySQL 官网。</p>
     * @param string $SortBy <p>默认无排序，支持：ASC、DESC、asc、desc</p>
     * @param string $OrderBy <p>待排序的时间字段，可选：CreateTime(账号创建时间)、ModifyTime(账号更新时间)、ModifyPasswordTime(密码修改时间)</p>
     * @param string $HostRegexp <p>匹配账号主机地址（Host）的正则表达式，规则同 MySQL 官网</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AccountRegexp",$param) and $param["AccountRegexp"] !== null) {
            $this->AccountRegexp = $param["AccountRegexp"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("HostRegexp",$param) and $param["HostRegexp"] !== null) {
            $this->HostRegexp = $param["HostRegexp"];
        }
    }
}

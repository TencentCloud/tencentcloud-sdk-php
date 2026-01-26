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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRenewInstances请求参数结构体
 *
 * @method integer getMaxResults() 获取每页的最大实例条数。 取值范围：1~100。
 * @method void setMaxResults(integer $MaxResults) 设置每页的最大实例条数。 取值范围：1~100。
 * @method string getNextToken() 获取查询返回结果下一页的令牌。首次调用 API 不需要NextToken。
 * @method void setNextToken(string $NextToken) 设置查询返回结果下一页的令牌。首次调用 API 不需要NextToken。
 * @method boolean getReverse() 获取获取实例的排序方向。枚举值如下：
false=正序（默认）
true=倒序
 * @method void setReverse(boolean $Reverse) 设置获取实例的排序方向。枚举值如下：
false=正序（默认）
true=倒序
 * @method array getRenewFlagList() 获取续费标识。多个值用英文逗号分隔。枚举值如下：
NOTIFY_AND_MANUAL_RENEW：手动续费
NOTIFY_AND_AUTO_RENEW：自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW：到期不续
 * @method void setRenewFlagList(array $RenewFlagList) 设置续费标识。多个值用英文逗号分隔。枚举值如下：
NOTIFY_AND_MANUAL_RENEW：手动续费
NOTIFY_AND_AUTO_RENEW：自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW：到期不续
 * @method array getInstanceIdList() 获取实例ID。多个ID用英文逗号分隔，最多不超过100个。
 * @method void setInstanceIdList(array $InstanceIdList) 设置实例ID。多个ID用英文逗号分隔，最多不超过100个。
 * @method string getExpireTimeStart() 获取到期时间段起，格式为yyyy-MM-dd HH:mm:ss。
 * @method void setExpireTimeStart(string $ExpireTimeStart) 设置到期时间段起，格式为yyyy-MM-dd HH:mm:ss。
 * @method string getExpireTimeEnd() 获取到期时间段止，格式为yyyy-MM-dd HH:mm:ss。
 * @method void setExpireTimeEnd(string $ExpireTimeEnd) 设置到期时间段止，格式为yyyy-MM-dd HH:mm:ss。
 */
class DescribeRenewInstancesRequest extends AbstractModel
{
    /**
     * @var integer 每页的最大实例条数。 取值范围：1~100。
     */
    public $MaxResults;

    /**
     * @var string 查询返回结果下一页的令牌。首次调用 API 不需要NextToken。
     */
    public $NextToken;

    /**
     * @var boolean 获取实例的排序方向。枚举值如下：
false=正序（默认）
true=倒序
     */
    public $Reverse;

    /**
     * @var array 续费标识。多个值用英文逗号分隔。枚举值如下：
NOTIFY_AND_MANUAL_RENEW：手动续费
NOTIFY_AND_AUTO_RENEW：自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW：到期不续
     */
    public $RenewFlagList;

    /**
     * @var array 实例ID。多个ID用英文逗号分隔，最多不超过100个。
     */
    public $InstanceIdList;

    /**
     * @var string 到期时间段起，格式为yyyy-MM-dd HH:mm:ss。
     */
    public $ExpireTimeStart;

    /**
     * @var string 到期时间段止，格式为yyyy-MM-dd HH:mm:ss。
     */
    public $ExpireTimeEnd;

    /**
     * @param integer $MaxResults 每页的最大实例条数。 取值范围：1~100。
     * @param string $NextToken 查询返回结果下一页的令牌。首次调用 API 不需要NextToken。
     * @param boolean $Reverse 获取实例的排序方向。枚举值如下：
false=正序（默认）
true=倒序
     * @param array $RenewFlagList 续费标识。多个值用英文逗号分隔。枚举值如下：
NOTIFY_AND_MANUAL_RENEW：手动续费
NOTIFY_AND_AUTO_RENEW：自动续费
DISABLE_NOTIFY_AND_MANUAL_RENEW：到期不续
     * @param array $InstanceIdList 实例ID。多个ID用英文逗号分隔，最多不超过100个。
     * @param string $ExpireTimeStart 到期时间段起，格式为yyyy-MM-dd HH:mm:ss。
     * @param string $ExpireTimeEnd 到期时间段止，格式为yyyy-MM-dd HH:mm:ss。
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
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("Reverse",$param) and $param["Reverse"] !== null) {
            $this->Reverse = $param["Reverse"];
        }

        if (array_key_exists("RenewFlagList",$param) and $param["RenewFlagList"] !== null) {
            $this->RenewFlagList = $param["RenewFlagList"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("ExpireTimeStart",$param) and $param["ExpireTimeStart"] !== null) {
            $this->ExpireTimeStart = $param["ExpireTimeStart"];
        }

        if (array_key_exists("ExpireTimeEnd",$param) and $param["ExpireTimeEnd"] !== null) {
            $this->ExpireTimeEnd = $param["ExpireTimeEnd"];
        }
    }
}

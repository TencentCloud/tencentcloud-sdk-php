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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUsage请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
</ul>
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
</ul>
 * @method string getStartDate() 获取查询日期范围的开始时间, 查询会包含此日期的数据 , 格式为yyyy-mm-dd (例如：2021-03-21)

注: `查询日期范围区间长度大于90天`。
 * @method void setStartDate(string $StartDate) 设置查询日期范围的开始时间, 查询会包含此日期的数据 , 格式为yyyy-mm-dd (例如：2021-03-21)

注: `查询日期范围区间长度大于90天`。
 * @method string getEndDate() 获取查询日期范围的结束时间, 查询会包含此日期的数据 , 格式为yyyy-mm-dd (例如：2021-04-21)

注: `查询日期范围区间长度大于90天`。
 * @method void setEndDate(string $EndDate) 设置查询日期范围的结束时间, 查询会包含此日期的数据 , 格式为yyyy-mm-dd (例如：2021-04-21)

注: `查询日期范围区间长度大于90天`。
 * @method boolean getNeedAggregate() 获取是否汇总数据，默认不汇总。
<ul><li> **true** :  汇总数据,  即每个企业一条数据, 对日志范围内的数据相加</li>
<li> **false** :  不会总数据,  返回企业每日明细,   按日期返回每个企业的数据(如果企业对应天数没有操作则无此企业此日期的数据)</li></ul>

 * @method void setNeedAggregate(boolean $NeedAggregate) 设置是否汇总数据，默认不汇总。
<ul><li> **true** :  汇总数据,  即每个企业一条数据, 对日志范围内的数据相加</li>
<li> **false** :  不会总数据,  返回企业每日明细,   按日期返回每个企业的数据(如果企业对应天数没有操作则无此企业此日期的数据)</li></ul>

 * @method integer getLimit() 获取指定每页返回的数据条数，和Offset参数配合使用。

注: `默认值为1000，单页做大值为1000`
 * @method void setLimit(integer $Limit) 设置指定每页返回的数据条数，和Offset参数配合使用。

注: `默认值为1000，单页做大值为1000`
 * @method integer getOffset() 获取查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。

注：`offset从0开始，即第一页为0。`
 * @method void setOffset(integer $Offset) 设置查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。

注：`offset从0开始，即第一页为0。`
 * @method UserInfo getOperator() 获取暂未开放
 * @method void setOperator(UserInfo $Operator) 设置暂未开放
 */
class DescribeUsageRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
</ul>
     */
    public $Agent;

    /**
     * @var string 查询日期范围的开始时间, 查询会包含此日期的数据 , 格式为yyyy-mm-dd (例如：2021-03-21)

注: `查询日期范围区间长度大于90天`。
     */
    public $StartDate;

    /**
     * @var string 查询日期范围的结束时间, 查询会包含此日期的数据 , 格式为yyyy-mm-dd (例如：2021-04-21)

注: `查询日期范围区间长度大于90天`。
     */
    public $EndDate;

    /**
     * @var boolean 是否汇总数据，默认不汇总。
<ul><li> **true** :  汇总数据,  即每个企业一条数据, 对日志范围内的数据相加</li>
<li> **false** :  不会总数据,  返回企业每日明细,   按日期返回每个企业的数据(如果企业对应天数没有操作则无此企业此日期的数据)</li></ul>

     */
    public $NeedAggregate;

    /**
     * @var integer 指定每页返回的数据条数，和Offset参数配合使用。

注: `默认值为1000，单页做大值为1000`
     */
    public $Limit;

    /**
     * @var integer 查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。

注：`offset从0开始，即第一页为0。`
     */
    public $Offset;

    /**
     * @var UserInfo 暂未开放
     * @deprecated
     */
    public $Operator;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
</ul>
     * @param string $StartDate 查询日期范围的开始时间, 查询会包含此日期的数据 , 格式为yyyy-mm-dd (例如：2021-03-21)

注: `查询日期范围区间长度大于90天`。
     * @param string $EndDate 查询日期范围的结束时间, 查询会包含此日期的数据 , 格式为yyyy-mm-dd (例如：2021-04-21)

注: `查询日期范围区间长度大于90天`。
     * @param boolean $NeedAggregate 是否汇总数据，默认不汇总。
<ul><li> **true** :  汇总数据,  即每个企业一条数据, 对日志范围内的数据相加</li>
<li> **false** :  不会总数据,  返回企业每日明细,   按日期返回每个企业的数据(如果企业对应天数没有操作则无此企业此日期的数据)</li></ul>

     * @param integer $Limit 指定每页返回的数据条数，和Offset参数配合使用。

注: `默认值为1000，单页做大值为1000`
     * @param integer $Offset 查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。

注：`offset从0开始，即第一页为0。`
     * @param UserInfo $Operator 暂未开放
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("NeedAggregate",$param) and $param["NeedAggregate"] !== null) {
            $this->NeedAggregate = $param["NeedAggregate"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}

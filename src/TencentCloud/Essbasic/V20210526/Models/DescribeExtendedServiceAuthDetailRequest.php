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
 * DescribeExtendedServiceAuthDetail请求参数结构体
 *
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
 * @method string getExtendServiceType() 获取<p>要查询的扩展服务类型。<br>如下所示：</p><p>枚举值：</p><ul><li>AUTO_SIGN： 企业授权签署</li><li>BATCH_SIGN： 批量签署</li></ul>
 * @method void setExtendServiceType(string $ExtendServiceType) 设置<p>要查询的扩展服务类型。<br>如下所示：</p><p>枚举值：</p><ul><li>AUTO_SIGN： 企业授权签署</li><li>BATCH_SIGN： 批量签署</li></ul>
 * @method integer getLimit() 获取<p>指定每页返回的数据条数，和Offset参数配合使用。 注：<code>1.默认值为20，单页做大值为200。</code></p>
 * @method void setLimit(integer $Limit) 设置<p>指定每页返回的数据条数，和Offset参数配合使用。 注：<code>1.默认值为20，单页做大值为200。</code></p>
 * @method integer getOffset() 获取<p>查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。 注：<code>1.offset从0开始，即第一页为0。</code> <code>2.默认从第一页返回。</code></p>
 * @method void setOffset(integer $Offset) 设置<p>查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。 注：<code>1.offset从0开始，即第一页为0。</code> <code>2.默认从第一页返回。</code></p>
 */
class DescribeExtendedServiceAuthDetailRequest extends AbstractModel
{
    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
     */
    public $Agent;

    /**
     * @var string <p>要查询的扩展服务类型。<br>如下所示：</p><p>枚举值：</p><ul><li>AUTO_SIGN： 企业授权签署</li><li>BATCH_SIGN： 批量签署</li></ul>
     */
    public $ExtendServiceType;

    /**
     * @var integer <p>指定每页返回的数据条数，和Offset参数配合使用。 注：<code>1.默认值为20，单页做大值为200。</code></p>
     */
    public $Limit;

    /**
     * @var integer <p>查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。 注：<code>1.offset从0开始，即第一页为0。</code> <code>2.默认从第一页返回。</code></p>
     */
    public $Offset;

    /**
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
     * @param string $ExtendServiceType <p>要查询的扩展服务类型。<br>如下所示：</p><p>枚举值：</p><ul><li>AUTO_SIGN： 企业授权签署</li><li>BATCH_SIGN： 批量签署</li></ul>
     * @param integer $Limit <p>指定每页返回的数据条数，和Offset参数配合使用。 注：<code>1.默认值为20，单页做大值为200。</code></p>
     * @param integer $Offset <p>查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。 注：<code>1.offset从0开始，即第一页为0。</code> <code>2.默认从第一页返回。</code></p>
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

        if (array_key_exists("ExtendServiceType",$param) and $param["ExtendServiceType"] !== null) {
            $this->ExtendServiceType = $param["ExtendServiceType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}

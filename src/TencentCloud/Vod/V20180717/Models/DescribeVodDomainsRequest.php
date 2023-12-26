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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVodDomains请求参数结构体
 *
 * @method array getDomains() 获取域名列表。当该字段不填时，则默认列出所有域名信息。本字段限制如下：
<li>域名个数度最大为 20。</li>
 * @method void setDomains(array $Domains) 设置域名列表。当该字段不填时，则默认列出所有域名信息。本字段限制如下：
<li>域名个数度最大为 20。</li>
 * @method integer getLimit() 获取分页拉取的最大返回结果数。默认值：20。
 * @method void setLimit(integer $Limit) 设置分页拉取的最大返回结果数。默认值：20。
 * @method integer getOffset() 获取分页拉取的起始偏移量。默认值：0。
 * @method void setOffset(integer $Offset) 设置分页拉取的起始偏移量。默认值：0。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 */
class DescribeVodDomainsRequest extends AbstractModel
{
    /**
     * @var array 域名列表。当该字段不填时，则默认列出所有域名信息。本字段限制如下：
<li>域名个数度最大为 20。</li>
     */
    public $Domains;

    /**
     * @var integer 分页拉取的最大返回结果数。默认值：20。
     */
    public $Limit;

    /**
     * @var integer 分页拉取的起始偏移量。默认值：0。
     */
    public $Offset;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @param array $Domains 域名列表。当该字段不填时，则默认列出所有域名信息。本字段限制如下：
<li>域名个数度最大为 20。</li>
     * @param integer $Limit 分页拉取的最大返回结果数。默认值：20。
     * @param integer $Offset 分页拉取的起始偏移量。默认值：0。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
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
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}

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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetCustomerGatewayClusterList请求参数结构体
 *
 * @method string getKeyword() 获取<p>按集群名称模糊匹配的关键字。最大 64 字符。</p>
 * @method void setKeyword(string $Keyword) 设置<p>按集群名称模糊匹配的关键字。最大 64 字符。</p>
 * @method integer getPageNumber() 获取<p>当前查看页码。</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>当前查看页码。</p>
 * @method integer getPageSize() 获取<p>每页显示记录数。</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页显示记录数。</p>
 */
class GetCustomerGatewayClusterListRequest extends AbstractModel
{
    /**
     * @var string <p>按集群名称模糊匹配的关键字。最大 64 字符。</p>
     */
    public $Keyword;

    /**
     * @var integer <p>当前查看页码。</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页显示记录数。</p>
     */
    public $PageSize;

    /**
     * @param string $Keyword <p>按集群名称模糊匹配的关键字。最大 64 字符。</p>
     * @param integer $PageNumber <p>当前查看页码。</p>
     * @param integer $PageSize <p>每页显示记录数。</p>
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
        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}

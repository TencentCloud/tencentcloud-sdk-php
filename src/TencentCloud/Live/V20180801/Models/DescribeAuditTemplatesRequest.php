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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditTemplates请求参数结构体
 *
 * @method boolean getWithTextAudit() 获取<p>是否过滤出文本审核，false不过滤，true过滤。</p>
 * @method void setWithTextAudit(boolean $WithTextAudit) 设置<p>是否过滤出文本审核，false不过滤，true过滤。</p>
 * @method integer getPageNum() 获取<p>页码。</p>
 * @method void setPageNum(integer $PageNum) 设置<p>页码。</p>
 * @method integer getPageSize() 获取<p>每页数量。</p><p>取值范围：[5, 100]</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量。</p><p>取值范围：[5, 100]</p>
 */
class DescribeAuditTemplatesRequest extends AbstractModel
{
    /**
     * @var boolean <p>是否过滤出文本审核，false不过滤，true过滤。</p>
     */
    public $WithTextAudit;

    /**
     * @var integer <p>页码。</p>
     */
    public $PageNum;

    /**
     * @var integer <p>每页数量。</p><p>取值范围：[5, 100]</p>
     */
    public $PageSize;

    /**
     * @param boolean $WithTextAudit <p>是否过滤出文本审核，false不过滤，true过滤。</p>
     * @param integer $PageNum <p>页码。</p>
     * @param integer $PageSize <p>每页数量。</p><p>取值范围：[5, 100]</p>
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
        if (array_key_exists("WithTextAudit",$param) and $param["WithTextAudit"] !== null) {
            $this->WithTextAudit = $param["WithTextAudit"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}

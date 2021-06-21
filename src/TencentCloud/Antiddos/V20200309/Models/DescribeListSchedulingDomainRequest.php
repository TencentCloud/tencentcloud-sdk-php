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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeListSchedulingDomain请求参数结构体
 *
 * @method integer getOffset() 获取页起始偏移，取值为(页码-1)*一页条数
 * @method void setOffset(integer $Offset) 设置页起始偏移，取值为(页码-1)*一页条数
 * @method integer getLimit() 获取一页条数，当Limit=0时，默认一页条数为20;最大取值为100
 * @method void setLimit(integer $Limit) 设置一页条数，当Limit=0时，默认一页条数为20;最大取值为100
 * @method string getFilterDomain() 获取调度域名搜索
 * @method void setFilterDomain(string $FilterDomain) 设置调度域名搜索
 */
class DescribeListSchedulingDomainRequest extends AbstractModel
{
    /**
     * @var integer 页起始偏移，取值为(页码-1)*一页条数
     */
    public $Offset;

    /**
     * @var integer 一页条数，当Limit=0时，默认一页条数为20;最大取值为100
     */
    public $Limit;

    /**
     * @var string 调度域名搜索
     */
    public $FilterDomain;

    /**
     * @param integer $Offset 页起始偏移，取值为(页码-1)*一页条数
     * @param integer $Limit 一页条数，当Limit=0时，默认一页条数为20;最大取值为100
     * @param string $FilterDomain 调度域名搜索
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FilterDomain",$param) and $param["FilterDomain"] !== null) {
            $this->FilterDomain = $param["FilterDomain"];
        }
    }
}

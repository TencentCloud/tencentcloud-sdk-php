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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRecordLineCategoryList请求参数结构体
 *
 * @method string getDomain() 获取要查询线路列表的域名。
 * @method void setDomain(string $Domain) 设置要查询线路列表的域名。
 * @method integer getDomainId() 获取要查询线路列表的域名 ID。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain。可以通过接口 DescribeDomainList 查到所有的 Domain 以及 DomainId。
 * @method void setDomainId(integer $DomainId) 设置要查询线路列表的域名 ID。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain。可以通过接口 DescribeDomainList 查到所有的 Domain 以及 DomainId。
 */
class DescribeRecordLineCategoryListRequest extends AbstractModel
{
    /**
     * @var string 要查询线路列表的域名。
     */
    public $Domain;

    /**
     * @var integer 要查询线路列表的域名 ID。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain。可以通过接口 DescribeDomainList 查到所有的 Domain 以及 DomainId。
     */
    public $DomainId;

    /**
     * @param string $Domain 要查询线路列表的域名。
     * @param integer $DomainId 要查询线路列表的域名 ID。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain。可以通过接口 DescribeDomainList 查到所有的 Domain 以及 DomainId。
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}

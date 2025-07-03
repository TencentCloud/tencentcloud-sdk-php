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
 * ModifyRecordToGroup请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getGroupId() 获取分组 ID，可通过DescribeRecordGroupList接口获取所有记录分组
 * @method void setGroupId(integer $GroupId) 设置分组 ID，可通过DescribeRecordGroupList接口获取所有记录分组
 * @method string getRecordId() 获取记录 ID，多个 ID 用竖线“|”分割，可以通过接口DescribeRecordList查到所有的解析记录列表以及对应的RecordId
 * @method void setRecordId(string $RecordId) 设置记录 ID，多个 ID 用竖线“|”分割，可以通过接口DescribeRecordList查到所有的解析记录列表以及对应的RecordId
 * @method integer getDomainId() 获取域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId
 * @method void setDomainId(integer $DomainId) 设置域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId
 */
class ModifyRecordToGroupRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 分组 ID，可通过DescribeRecordGroupList接口获取所有记录分组
     */
    public $GroupId;

    /**
     * @var string 记录 ID，多个 ID 用竖线“|”分割，可以通过接口DescribeRecordList查到所有的解析记录列表以及对应的RecordId
     */
    public $RecordId;

    /**
     * @var integer 域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId
     */
    public $DomainId;

    /**
     * @param string $Domain 域名
     * @param integer $GroupId 分组 ID，可通过DescribeRecordGroupList接口获取所有记录分组
     * @param string $RecordId 记录 ID，多个 ID 用竖线“|”分割，可以通过接口DescribeRecordList查到所有的解析记录列表以及对应的RecordId
     * @param integer $DomainId 域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}

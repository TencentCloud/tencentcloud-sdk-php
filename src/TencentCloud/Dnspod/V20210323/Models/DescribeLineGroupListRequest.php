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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLineGroupList请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getOffset() 获取偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认值为0。
 * @method integer getLength() 获取限制数量，传0或不传会返回所有。
 * @method void setLength(integer $Length) 设置限制数量，传0或不传会返回所有。
 * @method string getSortType() 获取按自定义线路分组名称排序的方向。升序传asc，降序传desc。
 * @method void setSortType(string $SortType) 设置按自定义线路分组名称排序的方向。升序传asc，降序传desc。
 * @method integer getDomainId() 获取域名ID，如果传了DomainId，系统将会忽略Domain参数，优先使用DomainId
 * @method void setDomainId(integer $DomainId) 设置域名ID，如果传了DomainId，系统将会忽略Domain参数，优先使用DomainId
 */
class DescribeLineGroupListRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 限制数量，传0或不传会返回所有。
     */
    public $Length;

    /**
     * @var string 按自定义线路分组名称排序的方向。升序传asc，降序传desc。
     */
    public $SortType;

    /**
     * @var integer 域名ID，如果传了DomainId，系统将会忽略Domain参数，优先使用DomainId
     */
    public $DomainId;

    /**
     * @param string $Domain 域名
     * @param integer $Offset 偏移量，默认值为0。
     * @param integer $Length 限制数量，传0或不传会返回所有。
     * @param string $SortType 按自定义线路分组名称排序的方向。升序传asc，降序传desc。
     * @param integer $DomainId 域名ID，如果传了DomainId，系统将会忽略Domain参数，优先使用DomainId
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}

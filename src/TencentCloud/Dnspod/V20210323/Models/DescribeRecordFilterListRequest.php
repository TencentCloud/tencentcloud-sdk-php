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
 * DescribeRecordFilterList请求参数结构体
 *
 * @method string getDomain() 获取要获取的解析记录所属的域名。
 * @method void setDomain(string $Domain) 设置要获取的解析记录所属的域名。
 * @method integer getDomainId() 获取要获取的解析记录所属的域名 Id，如果传了 DomainId，系统将会忽略 Domain 参数。 可以通过接口 DescribeDomainList 查到所有的 Domain 以及 DomainId。
 * @method void setDomainId(integer $DomainId) 设置要获取的解析记录所属的域名 Id，如果传了 DomainId，系统将会忽略 Domain 参数。 可以通过接口 DescribeDomainList 查到所有的 Domain 以及 DomainId。
 * @method string getSubDomain() 获取根据解析记录的主机头获取解析记录。默认模糊匹配。可以通过设置 IsExactSubdomain 参数为 true 进行精确查找。
 * @method void setSubDomain(string $SubDomain) 设置根据解析记录的主机头获取解析记录。默认模糊匹配。可以通过设置 IsExactSubdomain 参数为 true 进行精确查找。
 * @method array getRecordType() 获取获取某些类型的解析记录，如 A，CNAME，NS，AAAA，显性URL，隐性URL，CAA，SPF等。
 * @method void setRecordType(array $RecordType) 设置获取某些类型的解析记录，如 A，CNAME，NS，AAAA，显性URL，隐性URL，CAA，SPF等。
 * @method array getRecordLine() 获取获取某些线路ID的解析记录。可以通过接口 DescribeRecordLineList 查看当前域名允许的线路信息。
 * @method void setRecordLine(array $RecordLine) 设置获取某些线路ID的解析记录。可以通过接口 DescribeRecordLineList 查看当前域名允许的线路信息。
 * @method array getGroupId() 获取获取某些分组下的解析记录时，传这个分组 Id。可以通过接口 DescribeRecordGroupList 接口 GroupId 字段获取。
 * @method void setGroupId(array $GroupId) 设置获取某些分组下的解析记录时，传这个分组 Id。可以通过接口 DescribeRecordGroupList 接口 GroupId 字段获取。
 * @method string getKeyword() 获取通过关键字搜索解析记录，当前支持搜索主机头和记录值
 * @method void setKeyword(string $Keyword) 设置通过关键字搜索解析记录，当前支持搜索主机头和记录值
 * @method string getSortField() 获取排序字段，支持 NAME，LINE，TYPE，VALUE，WEIGHT，MX，TTL，UPDATED_ON 几个字段。
NAME：解析记录的主机头
LINE：解析记录线路
TYPE：解析记录类型
VALUE：解析记录值
WEIGHT：权重
MX：MX 优先级
TTL：解析记录缓存时间
UPDATED_ON：解析记录更新时间

 * @method void setSortField(string $SortField) 设置排序字段，支持 NAME，LINE，TYPE，VALUE，WEIGHT，MX，TTL，UPDATED_ON 几个字段。
NAME：解析记录的主机头
LINE：解析记录线路
TYPE：解析记录类型
VALUE：解析记录值
WEIGHT：权重
MX：MX 优先级
TTL：解析记录缓存时间
UPDATED_ON：解析记录更新时间

 * @method string getSortType() 获取排序方式，升序：ASC，降序：DESC。默认值为ASC。
 * @method void setSortType(string $SortType) 设置排序方式，升序：ASC，降序：DESC。默认值为ASC。
 * @method integer getOffset() 获取偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认值为0。
 * @method integer getLimit() 获取限制数量，当前Limit最大支持3000。默认值为100。
 * @method void setLimit(integer $Limit) 设置限制数量，当前Limit最大支持3000。默认值为100。
 * @method string getRecordValue() 获取根据解析记录的值获取解析记录
 * @method void setRecordValue(string $RecordValue) 设置根据解析记录的值获取解析记录
 * @method array getRecordStatus() 获取根据解析记录的状态获取解析记录。可取值为 ENABLE，DISABLE。
ENABLE：正常 
DISABLE：暂停 
 * @method void setRecordStatus(array $RecordStatus) 设置根据解析记录的状态获取解析记录。可取值为 ENABLE，DISABLE。
ENABLE：正常 
DISABLE：暂停 
 * @method integer getWeightBegin() 获取要获取解析记录权重查询区间起点。
 * @method void setWeightBegin(integer $WeightBegin) 设置要获取解析记录权重查询区间起点。
 * @method integer getWeightEnd() 获取要获取解析记录权重查询区间终点。
 * @method void setWeightEnd(integer $WeightEnd) 设置要获取解析记录权重查询区间终点。
 * @method integer getMXBegin() 获取要获取解析记录 MX 优先级查询区间起点。
 * @method void setMXBegin(integer $MXBegin) 设置要获取解析记录 MX 优先级查询区间起点。
 * @method integer getMXEnd() 获取要获取解析记录 MX 优先级查询区间终点。
 * @method void setMXEnd(integer $MXEnd) 设置要获取解析记录 MX 优先级查询区间终点。
 * @method integer getTTLBegin() 获取要获取解析记录 TTL 查询区间起点。
 * @method void setTTLBegin(integer $TTLBegin) 设置要获取解析记录 TTL 查询区间起点。
 * @method integer getTTLEnd() 获取要获取解析记录 TTL 查询区间终点。
 * @method void setTTLEnd(integer $TTLEnd) 设置要获取解析记录 TTL 查询区间终点。
 * @method string getUpdatedAtBegin() 获取要获取解析记录更新时间查询区间起点。
 * @method void setUpdatedAtBegin(string $UpdatedAtBegin) 设置要获取解析记录更新时间查询区间起点。
 * @method string getUpdatedAtEnd() 获取要获取解析记录更新时间查询区间终点。
 * @method void setUpdatedAtEnd(string $UpdatedAtEnd) 设置要获取解析记录更新时间查询区间终点。
 * @method string getRemark() 获取根据解析记录的备注获取解析记录。
 * @method void setRemark(string $Remark) 设置根据解析记录的备注获取解析记录。
 * @method boolean getIsExactSubDomain() 获取是否根据 Subdomain 参数进行精确查找。
 * @method void setIsExactSubDomain(boolean $IsExactSubDomain) 设置是否根据 Subdomain 参数进行精确查找。
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 */
class DescribeRecordFilterListRequest extends AbstractModel
{
    /**
     * @var string 要获取的解析记录所属的域名。
     */
    public $Domain;

    /**
     * @var integer 要获取的解析记录所属的域名 Id，如果传了 DomainId，系统将会忽略 Domain 参数。 可以通过接口 DescribeDomainList 查到所有的 Domain 以及 DomainId。
     */
    public $DomainId;

    /**
     * @var string 根据解析记录的主机头获取解析记录。默认模糊匹配。可以通过设置 IsExactSubdomain 参数为 true 进行精确查找。
     */
    public $SubDomain;

    /**
     * @var array 获取某些类型的解析记录，如 A，CNAME，NS，AAAA，显性URL，隐性URL，CAA，SPF等。
     */
    public $RecordType;

    /**
     * @var array 获取某些线路ID的解析记录。可以通过接口 DescribeRecordLineList 查看当前域名允许的线路信息。
     */
    public $RecordLine;

    /**
     * @var array 获取某些分组下的解析记录时，传这个分组 Id。可以通过接口 DescribeRecordGroupList 接口 GroupId 字段获取。
     */
    public $GroupId;

    /**
     * @var string 通过关键字搜索解析记录，当前支持搜索主机头和记录值
     */
    public $Keyword;

    /**
     * @var string 排序字段，支持 NAME，LINE，TYPE，VALUE，WEIGHT，MX，TTL，UPDATED_ON 几个字段。
NAME：解析记录的主机头
LINE：解析记录线路
TYPE：解析记录类型
VALUE：解析记录值
WEIGHT：权重
MX：MX 优先级
TTL：解析记录缓存时间
UPDATED_ON：解析记录更新时间

     */
    public $SortField;

    /**
     * @var string 排序方式，升序：ASC，降序：DESC。默认值为ASC。
     */
    public $SortType;

    /**
     * @var integer 偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 限制数量，当前Limit最大支持3000。默认值为100。
     */
    public $Limit;

    /**
     * @var string 根据解析记录的值获取解析记录
     */
    public $RecordValue;

    /**
     * @var array 根据解析记录的状态获取解析记录。可取值为 ENABLE，DISABLE。
ENABLE：正常 
DISABLE：暂停 
     */
    public $RecordStatus;

    /**
     * @var integer 要获取解析记录权重查询区间起点。
     */
    public $WeightBegin;

    /**
     * @var integer 要获取解析记录权重查询区间终点。
     */
    public $WeightEnd;

    /**
     * @var integer 要获取解析记录 MX 优先级查询区间起点。
     */
    public $MXBegin;

    /**
     * @var integer 要获取解析记录 MX 优先级查询区间终点。
     */
    public $MXEnd;

    /**
     * @var integer 要获取解析记录 TTL 查询区间起点。
     */
    public $TTLBegin;

    /**
     * @var integer 要获取解析记录 TTL 查询区间终点。
     */
    public $TTLEnd;

    /**
     * @var string 要获取解析记录更新时间查询区间起点。
     */
    public $UpdatedAtBegin;

    /**
     * @var string 要获取解析记录更新时间查询区间终点。
     */
    public $UpdatedAtEnd;

    /**
     * @var string 根据解析记录的备注获取解析记录。
     */
    public $Remark;

    /**
     * @var boolean 是否根据 Subdomain 参数进行精确查找。
     */
    public $IsExactSubDomain;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @param string $Domain 要获取的解析记录所属的域名。
     * @param integer $DomainId 要获取的解析记录所属的域名 Id，如果传了 DomainId，系统将会忽略 Domain 参数。 可以通过接口 DescribeDomainList 查到所有的 Domain 以及 DomainId。
     * @param string $SubDomain 根据解析记录的主机头获取解析记录。默认模糊匹配。可以通过设置 IsExactSubdomain 参数为 true 进行精确查找。
     * @param array $RecordType 获取某些类型的解析记录，如 A，CNAME，NS，AAAA，显性URL，隐性URL，CAA，SPF等。
     * @param array $RecordLine 获取某些线路ID的解析记录。可以通过接口 DescribeRecordLineList 查看当前域名允许的线路信息。
     * @param array $GroupId 获取某些分组下的解析记录时，传这个分组 Id。可以通过接口 DescribeRecordGroupList 接口 GroupId 字段获取。
     * @param string $Keyword 通过关键字搜索解析记录，当前支持搜索主机头和记录值
     * @param string $SortField 排序字段，支持 NAME，LINE，TYPE，VALUE，WEIGHT，MX，TTL，UPDATED_ON 几个字段。
NAME：解析记录的主机头
LINE：解析记录线路
TYPE：解析记录类型
VALUE：解析记录值
WEIGHT：权重
MX：MX 优先级
TTL：解析记录缓存时间
UPDATED_ON：解析记录更新时间

     * @param string $SortType 排序方式，升序：ASC，降序：DESC。默认值为ASC。
     * @param integer $Offset 偏移量，默认值为0。
     * @param integer $Limit 限制数量，当前Limit最大支持3000。默认值为100。
     * @param string $RecordValue 根据解析记录的值获取解析记录
     * @param array $RecordStatus 根据解析记录的状态获取解析记录。可取值为 ENABLE，DISABLE。
ENABLE：正常 
DISABLE：暂停 
     * @param integer $WeightBegin 要获取解析记录权重查询区间起点。
     * @param integer $WeightEnd 要获取解析记录权重查询区间终点。
     * @param integer $MXBegin 要获取解析记录 MX 优先级查询区间起点。
     * @param integer $MXEnd 要获取解析记录 MX 优先级查询区间终点。
     * @param integer $TTLBegin 要获取解析记录 TTL 查询区间起点。
     * @param integer $TTLEnd 要获取解析记录 TTL 查询区间终点。
     * @param string $UpdatedAtBegin 要获取解析记录更新时间查询区间起点。
     * @param string $UpdatedAtEnd 要获取解析记录更新时间查询区间终点。
     * @param string $Remark 根据解析记录的备注获取解析记录。
     * @param boolean $IsExactSubDomain 是否根据 Subdomain 参数进行精确查找。
     * @param integer $ProjectId 项目ID
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

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("RecordLine",$param) and $param["RecordLine"] !== null) {
            $this->RecordLine = $param["RecordLine"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("SortField",$param) and $param["SortField"] !== null) {
            $this->SortField = $param["SortField"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("RecordValue",$param) and $param["RecordValue"] !== null) {
            $this->RecordValue = $param["RecordValue"];
        }

        if (array_key_exists("RecordStatus",$param) and $param["RecordStatus"] !== null) {
            $this->RecordStatus = $param["RecordStatus"];
        }

        if (array_key_exists("WeightBegin",$param) and $param["WeightBegin"] !== null) {
            $this->WeightBegin = $param["WeightBegin"];
        }

        if (array_key_exists("WeightEnd",$param) and $param["WeightEnd"] !== null) {
            $this->WeightEnd = $param["WeightEnd"];
        }

        if (array_key_exists("MXBegin",$param) and $param["MXBegin"] !== null) {
            $this->MXBegin = $param["MXBegin"];
        }

        if (array_key_exists("MXEnd",$param) and $param["MXEnd"] !== null) {
            $this->MXEnd = $param["MXEnd"];
        }

        if (array_key_exists("TTLBegin",$param) and $param["TTLBegin"] !== null) {
            $this->TTLBegin = $param["TTLBegin"];
        }

        if (array_key_exists("TTLEnd",$param) and $param["TTLEnd"] !== null) {
            $this->TTLEnd = $param["TTLEnd"];
        }

        if (array_key_exists("UpdatedAtBegin",$param) and $param["UpdatedAtBegin"] !== null) {
            $this->UpdatedAtBegin = $param["UpdatedAtBegin"];
        }

        if (array_key_exists("UpdatedAtEnd",$param) and $param["UpdatedAtEnd"] !== null) {
            $this->UpdatedAtEnd = $param["UpdatedAtEnd"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("IsExactSubDomain",$param) and $param["IsExactSubDomain"] !== null) {
            $this->IsExactSubDomain = $param["IsExactSubDomain"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}

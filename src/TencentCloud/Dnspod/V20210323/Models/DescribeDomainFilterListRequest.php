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
 * DescribeDomainFilterList请求参数结构体
 *
 * @method string getType() 获取根据域名分组类型获取域名。可取值为 ALL，MINE，SHARE，RECENT。
ALL：全部
MINE：我的域名
SHARE：共享给我的域名
RECENT：最近操作过的域名
 * @method void setType(string $Type) 设置根据域名分组类型获取域名。可取值为 ALL，MINE，SHARE，RECENT。
ALL：全部
MINE：我的域名
SHARE：共享给我的域名
RECENT：最近操作过的域名
 * @method integer getOffset() 获取记录开始的偏移, 第一条记录为 0, 依次类推。默认值为 0。
 * @method void setOffset(integer $Offset) 设置记录开始的偏移, 第一条记录为 0, 依次类推。默认值为 0。
 * @method integer getLimit() 获取要获取的域名数量, 比如获取 20 个, 则为 20。默认值为 5000。如果账户中的域名数量超过了 5000, 将会强制分页并且只返回前 5000 条, 这时需要通过 Offset 和 Limit 参数去获取其它域名。
 * @method void setLimit(integer $Limit) 设置要获取的域名数量, 比如获取 20 个, 则为 20。默认值为 5000。如果账户中的域名数量超过了 5000, 将会强制分页并且只返回前 5000 条, 这时需要通过 Offset 和 Limit 参数去获取其它域名。
 * @method array getGroupId() 获取根据域名分组 id 获取域名，可通过 DescribeDomain 或 DescribeDomainList 接口 GroupId 字段获取。
 * @method void setGroupId(array $GroupId) 设置根据域名分组 id 获取域名，可通过 DescribeDomain 或 DescribeDomainList 接口 GroupId 字段获取。
 * @method string getKeyword() 获取根据关键字获取域名。
 * @method void setKeyword(string $Keyword) 设置根据关键字获取域名。
 * @method string getSortField() 获取排序字段。可取值为 NAME，STATUS，RECORDS，GRADE，UPDATED_ON。
NAME：域名名称
STATUS：域名状态
RECORDS：记录数量
GRADE：套餐等级
UPDATED_ON：更新时间
 * @method void setSortField(string $SortField) 设置排序字段。可取值为 NAME，STATUS，RECORDS，GRADE，UPDATED_ON。
NAME：域名名称
STATUS：域名状态
RECORDS：记录数量
GRADE：套餐等级
UPDATED_ON：更新时间
 * @method string getSortType() 获取排序类型，升序：ASC，降序：DESC。
 * @method void setSortType(string $SortType) 设置排序类型，升序：ASC，降序：DESC。
 * @method array getStatus() 获取根据域名状态获取域名。可取值为 ENABLE，LOCK，PAUSE，SPAM。
ENABLE：正常
LOCK：锁定
PAUSE：暂停
SPAM：封禁
 * @method void setStatus(array $Status) 设置根据域名状态获取域名。可取值为 ENABLE，LOCK，PAUSE，SPAM。
ENABLE：正常
LOCK：锁定
PAUSE：暂停
SPAM：封禁
 * @method array getPackage() 获取根据套餐获取域名，可通过 DescribeDomain 或 DescribeDomainList 接口 Grade 字段获取。
 * @method void setPackage(array $Package) 设置根据套餐获取域名，可通过 DescribeDomain 或 DescribeDomainList 接口 Grade 字段获取。
 * @method string getRemark() 获取根据备注信息获取域名。
 * @method void setRemark(string $Remark) 设置根据备注信息获取域名。
 * @method string getUpdatedAtBegin() 获取要获取域名的更新时间起始时间点，如 '2021-05-01 03:00:00'。
 * @method void setUpdatedAtBegin(string $UpdatedAtBegin) 设置要获取域名的更新时间起始时间点，如 '2021-05-01 03:00:00'。
 * @method string getUpdatedAtEnd() 获取要获取域名的更新时间终止时间点，如 '2021-05-10 20:00:00'。
 * @method void setUpdatedAtEnd(string $UpdatedAtEnd) 设置要获取域名的更新时间终止时间点，如 '2021-05-10 20:00:00'。
 * @method integer getRecordCountBegin() 获取要获取域名的记录数查询区间起点。
 * @method void setRecordCountBegin(integer $RecordCountBegin) 设置要获取域名的记录数查询区间起点。
 * @method integer getRecordCountEnd() 获取要获取域名的记录数查询区间终点。
 * @method void setRecordCountEnd(integer $RecordCountEnd) 设置要获取域名的记录数查询区间终点。
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method array getTags() 获取标签过滤
 * @method void setTags(array $Tags) 设置标签过滤
 */
class DescribeDomainFilterListRequest extends AbstractModel
{
    /**
     * @var string 根据域名分组类型获取域名。可取值为 ALL，MINE，SHARE，RECENT。
ALL：全部
MINE：我的域名
SHARE：共享给我的域名
RECENT：最近操作过的域名
     */
    public $Type;

    /**
     * @var integer 记录开始的偏移, 第一条记录为 0, 依次类推。默认值为 0。
     */
    public $Offset;

    /**
     * @var integer 要获取的域名数量, 比如获取 20 个, 则为 20。默认值为 5000。如果账户中的域名数量超过了 5000, 将会强制分页并且只返回前 5000 条, 这时需要通过 Offset 和 Limit 参数去获取其它域名。
     */
    public $Limit;

    /**
     * @var array 根据域名分组 id 获取域名，可通过 DescribeDomain 或 DescribeDomainList 接口 GroupId 字段获取。
     */
    public $GroupId;

    /**
     * @var string 根据关键字获取域名。
     */
    public $Keyword;

    /**
     * @var string 排序字段。可取值为 NAME，STATUS，RECORDS，GRADE，UPDATED_ON。
NAME：域名名称
STATUS：域名状态
RECORDS：记录数量
GRADE：套餐等级
UPDATED_ON：更新时间
     */
    public $SortField;

    /**
     * @var string 排序类型，升序：ASC，降序：DESC。
     */
    public $SortType;

    /**
     * @var array 根据域名状态获取域名。可取值为 ENABLE，LOCK，PAUSE，SPAM。
ENABLE：正常
LOCK：锁定
PAUSE：暂停
SPAM：封禁
     */
    public $Status;

    /**
     * @var array 根据套餐获取域名，可通过 DescribeDomain 或 DescribeDomainList 接口 Grade 字段获取。
     */
    public $Package;

    /**
     * @var string 根据备注信息获取域名。
     */
    public $Remark;

    /**
     * @var string 要获取域名的更新时间起始时间点，如 '2021-05-01 03:00:00'。
     */
    public $UpdatedAtBegin;

    /**
     * @var string 要获取域名的更新时间终止时间点，如 '2021-05-10 20:00:00'。
     */
    public $UpdatedAtEnd;

    /**
     * @var integer 要获取域名的记录数查询区间起点。
     */
    public $RecordCountBegin;

    /**
     * @var integer 要获取域名的记录数查询区间终点。
     */
    public $RecordCountEnd;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var array 标签过滤
     */
    public $Tags;

    /**
     * @param string $Type 根据域名分组类型获取域名。可取值为 ALL，MINE，SHARE，RECENT。
ALL：全部
MINE：我的域名
SHARE：共享给我的域名
RECENT：最近操作过的域名
     * @param integer $Offset 记录开始的偏移, 第一条记录为 0, 依次类推。默认值为 0。
     * @param integer $Limit 要获取的域名数量, 比如获取 20 个, 则为 20。默认值为 5000。如果账户中的域名数量超过了 5000, 将会强制分页并且只返回前 5000 条, 这时需要通过 Offset 和 Limit 参数去获取其它域名。
     * @param array $GroupId 根据域名分组 id 获取域名，可通过 DescribeDomain 或 DescribeDomainList 接口 GroupId 字段获取。
     * @param string $Keyword 根据关键字获取域名。
     * @param string $SortField 排序字段。可取值为 NAME，STATUS，RECORDS，GRADE，UPDATED_ON。
NAME：域名名称
STATUS：域名状态
RECORDS：记录数量
GRADE：套餐等级
UPDATED_ON：更新时间
     * @param string $SortType 排序类型，升序：ASC，降序：DESC。
     * @param array $Status 根据域名状态获取域名。可取值为 ENABLE，LOCK，PAUSE，SPAM。
ENABLE：正常
LOCK：锁定
PAUSE：暂停
SPAM：封禁
     * @param array $Package 根据套餐获取域名，可通过 DescribeDomain 或 DescribeDomainList 接口 Grade 字段获取。
     * @param string $Remark 根据备注信息获取域名。
     * @param string $UpdatedAtBegin 要获取域名的更新时间起始时间点，如 '2021-05-01 03:00:00'。
     * @param string $UpdatedAtEnd 要获取域名的更新时间终止时间点，如 '2021-05-10 20:00:00'。
     * @param integer $RecordCountBegin 要获取域名的记录数查询区间起点。
     * @param integer $RecordCountEnd 要获取域名的记录数查询区间终点。
     * @param integer $ProjectId 项目ID
     * @param array $Tags 标签过滤
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Package",$param) and $param["Package"] !== null) {
            $this->Package = $param["Package"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("UpdatedAtBegin",$param) and $param["UpdatedAtBegin"] !== null) {
            $this->UpdatedAtBegin = $param["UpdatedAtBegin"];
        }

        if (array_key_exists("UpdatedAtEnd",$param) and $param["UpdatedAtEnd"] !== null) {
            $this->UpdatedAtEnd = $param["UpdatedAtEnd"];
        }

        if (array_key_exists("RecordCountBegin",$param) and $param["RecordCountBegin"] !== null) {
            $this->RecordCountBegin = $param["RecordCountBegin"];
        }

        if (array_key_exists("RecordCountEnd",$param) and $param["RecordCountEnd"] !== null) {
            $this->RecordCountEnd = $param["RecordCountEnd"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItemFilter();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}

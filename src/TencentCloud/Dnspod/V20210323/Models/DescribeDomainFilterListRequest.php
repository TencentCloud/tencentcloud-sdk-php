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
 * DescribeDomainFilterList请求参数结构体
 *
 * @method string getType() 获取<p>根据域名分组类型获取域名。可取值为 ALL，MINE，SHARE，RECENT。<br>ALL：全部<br>MINE：我的域名<br>SHARE：共享给我的域名<br>RECENT：最近操作过的域名</p>
 * @method void setType(string $Type) 设置<p>根据域名分组类型获取域名。可取值为 ALL，MINE，SHARE，RECENT。<br>ALL：全部<br>MINE：我的域名<br>SHARE：共享给我的域名<br>RECENT：最近操作过的域名</p>
 * @method integer getOffset() 获取<p>记录开始的偏移, 第一条记录为 0, 依次类推。默认值为 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>记录开始的偏移, 第一条记录为 0, 依次类推。默认值为 0。</p>
 * @method integer getLimit() 获取<p>要获取的域名数量, 比如获取 20 个, 则为 20。默认值为 5000。如果账户中的域名数量超过了 5000, 将会强制分页并且只返回前 5000 条, 这时需要通过 Offset 和 Limit 参数去获取其它域名。</p>
 * @method void setLimit(integer $Limit) 设置<p>要获取的域名数量, 比如获取 20 个, 则为 20。默认值为 5000。如果账户中的域名数量超过了 5000, 将会强制分页并且只返回前 5000 条, 这时需要通过 Offset 和 Limit 参数去获取其它域名。</p>
 * @method array getGroupId() 获取<p>根据域名分组 id 获取域名</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1427/56172">DescribeDomainList</a></p>
 * @method void setGroupId(array $GroupId) 设置<p>根据域名分组 id 获取域名</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1427/56172">DescribeDomainList</a></p>
 * @method string getKeyword() 获取<p>根据关键字获取域名。</p>
 * @method void setKeyword(string $Keyword) 设置<p>根据关键字获取域名。</p>
 * @method string getSortField() 获取<p>排序字段。可取值为 NAME，STATUS，RECORDS，GRADE，UPDATED_ON。<br>NAME：域名名称<br>STATUS：域名状态<br>RECORDS：记录数量<br>GRADE：套餐等级<br>UPDATED_ON：更新时间</p>
 * @method void setSortField(string $SortField) 设置<p>排序字段。可取值为 NAME，STATUS，RECORDS，GRADE，UPDATED_ON。<br>NAME：域名名称<br>STATUS：域名状态<br>RECORDS：记录数量<br>GRADE：套餐等级<br>UPDATED_ON：更新时间</p>
 * @method string getSortType() 获取<p>排序类型，升序：ASC，降序：DESC。</p>
 * @method void setSortType(string $SortType) 设置<p>排序类型，升序：ASC，降序：DESC。</p>
 * @method array getStatus() 获取<p>根据域名状态获取域名。可取值为 ENABLE，LOCK，PAUSE，SPAM。<br>ENABLE：正常<br>LOCK：锁定<br>PAUSE：暂停<br>SPAM：封禁</p>
 * @method void setStatus(array $Status) 设置<p>根据域名状态获取域名。可取值为 ENABLE，LOCK，PAUSE，SPAM。<br>ENABLE：正常<br>LOCK：锁定<br>PAUSE：暂停<br>SPAM：封禁</p>
 * @method array getPackage() 获取<p>根据套餐获取域名，可通过 DescribeDomain 或 DescribeDomainList 接口 Grade 字段获取。</p>
 * @method void setPackage(array $Package) 设置<p>根据套餐获取域名，可通过 DescribeDomain 或 DescribeDomainList 接口 Grade 字段获取。</p>
 * @method string getRemark() 获取<p>根据备注信息获取域名。</p>
 * @method void setRemark(string $Remark) 设置<p>根据备注信息获取域名。</p>
 * @method string getUpdatedAtBegin() 获取<p>要获取域名的更新时间起始时间点，如 &#39;2021-05-01 03:00:00&#39;。</p>
 * @method void setUpdatedAtBegin(string $UpdatedAtBegin) 设置<p>要获取域名的更新时间起始时间点，如 &#39;2021-05-01 03:00:00&#39;。</p>
 * @method string getUpdatedAtEnd() 获取<p>要获取域名的更新时间终止时间点，如 &#39;2021-05-10 20:00:00&#39;。</p>
 * @method void setUpdatedAtEnd(string $UpdatedAtEnd) 设置<p>要获取域名的更新时间终止时间点，如 &#39;2021-05-10 20:00:00&#39;。</p>
 * @method integer getRecordCountBegin() 获取<p>要获取域名的记录数查询区间起点。</p>
 * @method void setRecordCountBegin(integer $RecordCountBegin) 设置<p>要获取域名的记录数查询区间起点。</p>
 * @method integer getRecordCountEnd() 获取<p>要获取域名的记录数查询区间终点。</p>
 * @method void setRecordCountEnd(integer $RecordCountEnd) 设置<p>要获取域名的记录数查询区间终点。</p>
 * @method integer getProjectId() 获取<p>项目ID，&quot;账号中心-项目管理&quot;拿到项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID，&quot;账号中心-项目管理&quot;拿到项目ID</p>
 * @method array getTags() 获取<p>标签过滤</p>
 * @method void setTags(array $Tags) 设置<p>标签过滤</p>
 */
class DescribeDomainFilterListRequest extends AbstractModel
{
    /**
     * @var string <p>根据域名分组类型获取域名。可取值为 ALL，MINE，SHARE，RECENT。<br>ALL：全部<br>MINE：我的域名<br>SHARE：共享给我的域名<br>RECENT：最近操作过的域名</p>
     */
    public $Type;

    /**
     * @var integer <p>记录开始的偏移, 第一条记录为 0, 依次类推。默认值为 0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>要获取的域名数量, 比如获取 20 个, 则为 20。默认值为 5000。如果账户中的域名数量超过了 5000, 将会强制分页并且只返回前 5000 条, 这时需要通过 Offset 和 Limit 参数去获取其它域名。</p>
     */
    public $Limit;

    /**
     * @var array <p>根据域名分组 id 获取域名</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1427/56172">DescribeDomainList</a></p>
     */
    public $GroupId;

    /**
     * @var string <p>根据关键字获取域名。</p>
     */
    public $Keyword;

    /**
     * @var string <p>排序字段。可取值为 NAME，STATUS，RECORDS，GRADE，UPDATED_ON。<br>NAME：域名名称<br>STATUS：域名状态<br>RECORDS：记录数量<br>GRADE：套餐等级<br>UPDATED_ON：更新时间</p>
     */
    public $SortField;

    /**
     * @var string <p>排序类型，升序：ASC，降序：DESC。</p>
     */
    public $SortType;

    /**
     * @var array <p>根据域名状态获取域名。可取值为 ENABLE，LOCK，PAUSE，SPAM。<br>ENABLE：正常<br>LOCK：锁定<br>PAUSE：暂停<br>SPAM：封禁</p>
     */
    public $Status;

    /**
     * @var array <p>根据套餐获取域名，可通过 DescribeDomain 或 DescribeDomainList 接口 Grade 字段获取。</p>
     */
    public $Package;

    /**
     * @var string <p>根据备注信息获取域名。</p>
     */
    public $Remark;

    /**
     * @var string <p>要获取域名的更新时间起始时间点，如 &#39;2021-05-01 03:00:00&#39;。</p>
     */
    public $UpdatedAtBegin;

    /**
     * @var string <p>要获取域名的更新时间终止时间点，如 &#39;2021-05-10 20:00:00&#39;。</p>
     */
    public $UpdatedAtEnd;

    /**
     * @var integer <p>要获取域名的记录数查询区间起点。</p>
     */
    public $RecordCountBegin;

    /**
     * @var integer <p>要获取域名的记录数查询区间终点。</p>
     */
    public $RecordCountEnd;

    /**
     * @var integer <p>项目ID，&quot;账号中心-项目管理&quot;拿到项目ID</p>
     */
    public $ProjectId;

    /**
     * @var array <p>标签过滤</p>
     */
    public $Tags;

    /**
     * @param string $Type <p>根据域名分组类型获取域名。可取值为 ALL，MINE，SHARE，RECENT。<br>ALL：全部<br>MINE：我的域名<br>SHARE：共享给我的域名<br>RECENT：最近操作过的域名</p>
     * @param integer $Offset <p>记录开始的偏移, 第一条记录为 0, 依次类推。默认值为 0。</p>
     * @param integer $Limit <p>要获取的域名数量, 比如获取 20 个, 则为 20。默认值为 5000。如果账户中的域名数量超过了 5000, 将会强制分页并且只返回前 5000 条, 这时需要通过 Offset 和 Limit 参数去获取其它域名。</p>
     * @param array $GroupId <p>根据域名分组 id 获取域名</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1427/56172">DescribeDomainList</a></p>
     * @param string $Keyword <p>根据关键字获取域名。</p>
     * @param string $SortField <p>排序字段。可取值为 NAME，STATUS，RECORDS，GRADE，UPDATED_ON。<br>NAME：域名名称<br>STATUS：域名状态<br>RECORDS：记录数量<br>GRADE：套餐等级<br>UPDATED_ON：更新时间</p>
     * @param string $SortType <p>排序类型，升序：ASC，降序：DESC。</p>
     * @param array $Status <p>根据域名状态获取域名。可取值为 ENABLE，LOCK，PAUSE，SPAM。<br>ENABLE：正常<br>LOCK：锁定<br>PAUSE：暂停<br>SPAM：封禁</p>
     * @param array $Package <p>根据套餐获取域名，可通过 DescribeDomain 或 DescribeDomainList 接口 Grade 字段获取。</p>
     * @param string $Remark <p>根据备注信息获取域名。</p>
     * @param string $UpdatedAtBegin <p>要获取域名的更新时间起始时间点，如 &#39;2021-05-01 03:00:00&#39;。</p>
     * @param string $UpdatedAtEnd <p>要获取域名的更新时间终止时间点，如 &#39;2021-05-10 20:00:00&#39;。</p>
     * @param integer $RecordCountBegin <p>要获取域名的记录数查询区间起点。</p>
     * @param integer $RecordCountEnd <p>要获取域名的记录数查询区间终点。</p>
     * @param integer $ProjectId <p>项目ID，&quot;账号中心-项目管理&quot;拿到项目ID</p>
     * @param array $Tags <p>标签过滤</p>
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

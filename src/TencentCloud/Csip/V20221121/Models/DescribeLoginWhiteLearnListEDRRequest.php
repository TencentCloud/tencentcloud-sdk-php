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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLoginWhiteLearnListEDR请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getFilters() 获取<p>过滤条件数组（多个 Filter 间为 AND 关系）。支持 Name：Keyword 或 Location（常用登录地模糊）、Remark、ModifyBeginTime、ModifyEndTime（时间格式 2006-01-02 15:04:05）；未知 Name 忽略不报错</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件数组（多个 Filter 间为 AND 关系）。支持 Name：Keyword 或 Location（常用登录地模糊）、Remark、ModifyBeginTime、ModifyEndTime（时间格式 2006-01-02 15:04:05）；未知 Name 忽略不报错</p>
 * @method integer getLimit() 获取<p>分页大小，默认 10，上限 100；传 0 或大于 100 时按默认/上限返回</p>
 * @method void setLimit(integer $Limit) 设置<p>分页大小，默认 10，上限 100；传 0 或大于 100 时按默认/上限返回</p>
 * @method integer getOffset() 获取<p>分页偏移，默认 0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移，默认 0</p>
 * @method string getOrder() 获取<p>排序方向：ASC-正序 DESC-倒序（大小写不敏感），默认 DESC</p>
 * @method void setOrder(string $Order) 设置<p>排序方向：ASC-正序 DESC-倒序（大小写不敏感），默认 DESC</p>
 * @method string getBy() 获取<p>排序字段：CreateTime-创建时间 ModifyTime-修改时间，默认 ModifyTime；传非法值返回 InvalidParameter</p>
 * @method void setBy(string $By) 设置<p>排序字段：CreateTime-创建时间 ModifyTime-修改时间，默认 ModifyTime；传非法值返回 InvalidParameter</p>
 */
class DescribeLoginWhiteLearnListEDRRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>过滤条件数组（多个 Filter 间为 AND 关系）。支持 Name：Keyword 或 Location（常用登录地模糊）、Remark、ModifyBeginTime、ModifyEndTime（时间格式 2006-01-02 15:04:05）；未知 Name 忽略不报错</p>
     */
    public $Filters;

    /**
     * @var integer <p>分页大小，默认 10，上限 100；传 0 或大于 100 时按默认/上限返回</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移，默认 0</p>
     */
    public $Offset;

    /**
     * @var string <p>排序方向：ASC-正序 DESC-倒序（大小写不敏感），默认 DESC</p>
     */
    public $Order;

    /**
     * @var string <p>排序字段：CreateTime-创建时间 ModifyTime-修改时间，默认 ModifyTime；传非法值返回 InvalidParameter</p>
     */
    public $By;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $Filters <p>过滤条件数组（多个 Filter 间为 AND 关系）。支持 Name：Keyword 或 Location（常用登录地模糊）、Remark、ModifyBeginTime、ModifyEndTime（时间格式 2006-01-02 15:04:05）；未知 Name 忽略不报错</p>
     * @param integer $Limit <p>分页大小，默认 10，上限 100；传 0 或大于 100 时按默认/上限返回</p>
     * @param integer $Offset <p>分页偏移，默认 0</p>
     * @param string $Order <p>排序方向：ASC-正序 DESC-倒序（大小写不敏感），默认 DESC</p>
     * @param string $By <p>排序字段：CreateTime-创建时间 ModifyTime-修改时间，默认 ModifyTime；传非法值返回 InvalidParameter</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new EDRFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}

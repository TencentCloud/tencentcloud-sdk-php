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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGroupList请求参数结构体
 *
 * @method integer getSdkAppId() 获取低代码平台应用ID
 * @method void setSdkAppId(integer $SdkAppId) 设置低代码平台应用ID
 * @method integer getPage() 获取分页查询当前页数，默认从1开始递增。
 * @method void setPage(integer $Page) 设置分页查询当前页数，默认从1开始递增。
 * @method integer getLimit() 获取每页数据量，默认20，最大1000。
 * @method void setLimit(integer $Limit) 设置每页数据量，默认20，最大1000。
 * @method string getTeacherId() 获取主讲人ID筛选群组，与MemberId有且只有一个,都传时以此字段获取
 * @method void setTeacherId(string $TeacherId) 设置主讲人ID筛选群组，与MemberId有且只有一个,都传时以此字段获取
 * @method string getMemberId() 获取成员ID刷选群组，与TeacherId有且只有一个
 * @method void setMemberId(string $MemberId) 设置成员ID刷选群组，与TeacherId有且只有一个
 */
class DescribeGroupListRequest extends AbstractModel
{
    /**
     * @var integer 低代码平台应用ID
     */
    public $SdkAppId;

    /**
     * @var integer 分页查询当前页数，默认从1开始递增。
     */
    public $Page;

    /**
     * @var integer 每页数据量，默认20，最大1000。
     */
    public $Limit;

    /**
     * @var string 主讲人ID筛选群组，与MemberId有且只有一个,都传时以此字段获取
     */
    public $TeacherId;

    /**
     * @var string 成员ID刷选群组，与TeacherId有且只有一个
     */
    public $MemberId;

    /**
     * @param integer $SdkAppId 低代码平台应用ID
     * @param integer $Page 分页查询当前页数，默认从1开始递增。
     * @param integer $Limit 每页数据量，默认20，最大1000。
     * @param string $TeacherId 主讲人ID筛选群组，与MemberId有且只有一个,都传时以此字段获取
     * @param string $MemberId 成员ID刷选群组，与TeacherId有且只有一个
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TeacherId",$param) and $param["TeacherId"] !== null) {
            $this->TeacherId = $param["TeacherId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}

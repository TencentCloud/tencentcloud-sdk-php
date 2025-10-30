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
 * DescribeAlertList请求参数结构体
 *
 * @method Filter getFilter() 获取标签搜索筛选
 * @method void setFilter(Filter $Filter) 设置标签搜索筛选
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method array getOperatedMemberId() 获取被调用的集团账号的成员id
 * @method void setOperatedMemberId(array $OperatedMemberId) 设置被调用的集团账号的成员id
 * @method integer getAssetType() 获取0:默认全部 1:资产ID 2:域名
 * @method void setAssetType(integer $AssetType) 设置0:默认全部 1:资产ID 2:域名
 */
class DescribeAlertListRequest extends AbstractModel
{
    /**
     * @var Filter 标签搜索筛选
     */
    public $Filter;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var array 被调用的集团账号的成员id
     */
    public $OperatedMemberId;

    /**
     * @var integer 0:默认全部 1:资产ID 2:域名
     */
    public $AssetType;

    /**
     * @param Filter $Filter 标签搜索筛选
     * @param array $MemberId 集团账号的成员id
     * @param array $OperatedMemberId 被调用的集团账号的成员id
     * @param integer $AssetType 0:默认全部 1:资产ID 2:域名
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
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("OperatedMemberId",$param) and $param["OperatedMemberId"] !== null) {
            $this->OperatedMemberId = $param["OperatedMemberId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }
    }
}

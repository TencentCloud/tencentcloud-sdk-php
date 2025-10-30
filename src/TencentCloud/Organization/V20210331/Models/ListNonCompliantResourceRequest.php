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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListNonCompliantResource请求参数结构体
 *
 * @method integer getMaxResults() 获取限制数目。取值范围：1~50。
 * @method void setMaxResults(integer $MaxResults) 设置限制数目。取值范围：1~50。
 * @method integer getMemberUin() 获取成员Uin。
 * @method void setMemberUin(integer $MemberUin) 设置成员Uin。
 * @method string getPaginationToken() 获取从上一页的响应中获取的下一页的Token值。
如果是第一次请求，设置为空。
 * @method void setPaginationToken(string $PaginationToken) 设置从上一页的响应中获取的下一页的Token值。
如果是第一次请求，设置为空。
 * @method string getTagKey() 获取标签键。
 * @method void setTagKey(string $TagKey) 设置标签键。
 */
class ListNonCompliantResourceRequest extends AbstractModel
{
    /**
     * @var integer 限制数目。取值范围：1~50。
     */
    public $MaxResults;

    /**
     * @var integer 成员Uin。
     */
    public $MemberUin;

    /**
     * @var string 从上一页的响应中获取的下一页的Token值。
如果是第一次请求，设置为空。
     */
    public $PaginationToken;

    /**
     * @var string 标签键。
     */
    public $TagKey;

    /**
     * @param integer $MaxResults 限制数目。取值范围：1~50。
     * @param integer $MemberUin 成员Uin。
     * @param string $PaginationToken 从上一页的响应中获取的下一页的Token值。
如果是第一次请求，设置为空。
     * @param string $TagKey 标签键。
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
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("PaginationToken",$param) and $param["PaginationToken"] !== null) {
            $this->PaginationToken = $param["PaginationToken"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }
    }
}

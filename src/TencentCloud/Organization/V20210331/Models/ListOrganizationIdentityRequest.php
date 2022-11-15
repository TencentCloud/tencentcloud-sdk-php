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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListOrganizationIdentity请求参数结构体
 *
 * @method integer getOffset() 获取偏移量。
 * @method void setOffset(integer $Offset) 设置偏移量。
 * @method integer getLimit() 获取限制数目。最大50
 * @method void setLimit(integer $Limit) 设置限制数目。最大50
 * @method string getSearchKey() 获取名称搜索关键字。
 * @method void setSearchKey(string $SearchKey) 设置名称搜索关键字。
 * @method integer getIdentityId() 获取身份ID搜索。
 * @method void setIdentityId(integer $IdentityId) 设置身份ID搜索。
 */
class ListOrganizationIdentityRequest extends AbstractModel
{
    /**
     * @var integer 偏移量。
     */
    public $Offset;

    /**
     * @var integer 限制数目。最大50
     */
    public $Limit;

    /**
     * @var string 名称搜索关键字。
     */
    public $SearchKey;

    /**
     * @var integer 身份ID搜索。
     */
    public $IdentityId;

    /**
     * @param integer $Offset 偏移量。
     * @param integer $Limit 限制数目。最大50
     * @param string $SearchKey 名称搜索关键字。
     * @param integer $IdentityId 身份ID搜索。
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("IdentityId",$param) and $param["IdentityId"] !== null) {
            $this->IdentityId = $param["IdentityId"];
        }
    }
}

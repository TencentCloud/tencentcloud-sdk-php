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
 * DescribeSdkAppIdUsers请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用ID
 * @method void setSdkAppId(integer $SdkAppId) 设置应用ID
 * @method integer getPage() 获取分页，默认值为1
 * @method void setPage(integer $Page) 设置分页，默认值为1
 * @method integer getLimit() 获取分页数据限制，默认值为20
 * @method void setLimit(integer $Limit) 设置分页数据限制，默认值为20
 */
class DescribeSdkAppIdUsersRequest extends AbstractModel
{
    /**
     * @var integer 应用ID
     */
    public $SdkAppId;

    /**
     * @var integer 分页，默认值为1
     */
    public $Page;

    /**
     * @var integer 分页数据限制，默认值为20
     */
    public $Limit;

    /**
     * @param integer $SdkAppId 应用ID
     * @param integer $Page 分页，默认值为1
     * @param integer $Limit 分页数据限制，默认值为20
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
    }
}

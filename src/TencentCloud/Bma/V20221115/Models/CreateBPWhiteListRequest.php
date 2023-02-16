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
namespace TencentCloud\Bma\V20221115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBPWhiteList请求参数结构体
 *
 * @method integer getCompanyId() 获取企业Id
 * @method void setCompanyId(integer $CompanyId) 设置企业Id
 * @method integer getWhiteListType() 获取白名单类型：0-网站 1-应用 2-公众号 3-小程
 * @method void setWhiteListType(integer $WhiteListType) 设置白名单类型：0-网站 1-应用 2-公众号 3-小程
 * @method array getWhiteLists() 获取白名单名称
 * @method void setWhiteLists(array $WhiteLists) 设置白名单名称
 */
class CreateBPWhiteListRequest extends AbstractModel
{
    /**
     * @var integer 企业Id
     */
    public $CompanyId;

    /**
     * @var integer 白名单类型：0-网站 1-应用 2-公众号 3-小程
     */
    public $WhiteListType;

    /**
     * @var array 白名单名称
     */
    public $WhiteLists;

    /**
     * @param integer $CompanyId 企业Id
     * @param integer $WhiteListType 白名单类型：0-网站 1-应用 2-公众号 3-小程
     * @param array $WhiteLists 白名单名称
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
        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("WhiteListType",$param) and $param["WhiteListType"] !== null) {
            $this->WhiteListType = $param["WhiteListType"];
        }

        if (array_key_exists("WhiteLists",$param) and $param["WhiteLists"] !== null) {
            $this->WhiteLists = $param["WhiteLists"];
        }
    }
}

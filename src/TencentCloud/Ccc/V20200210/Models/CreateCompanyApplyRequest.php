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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCompanyApply请求参数结构体
 *
 * @method CompanyApplyInfo getCompanyInfo() 获取企业资质信息
 * @method void setCompanyInfo(CompanyApplyInfo $CompanyInfo) 设置企业资质信息
 */
class CreateCompanyApplyRequest extends AbstractModel
{
    /**
     * @var CompanyApplyInfo 企业资质信息
     */
    public $CompanyInfo;

    /**
     * @param CompanyApplyInfo $CompanyInfo 企业资质信息
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
        if (array_key_exists("CompanyInfo",$param) and $param["CompanyInfo"] !== null) {
            $this->CompanyInfo = new CompanyApplyInfo();
            $this->CompanyInfo->deserialize($param["CompanyInfo"]);
        }
    }
}

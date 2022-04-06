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
namespace TencentCloud\Bsca\V20210811\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 许可证详细信息。
 *
 * @method LicenseSummary getLicenseSummary() 获取许可证概览信息
 * @method void setLicenseSummary(LicenseSummary $LicenseSummary) 设置许可证概览信息
 * @method LicenseDetail getLicenseDetail() 获取许可证详细信息
 * @method void setLicenseDetail(LicenseDetail $LicenseDetail) 设置许可证详细信息
 */
class LicenseUnion extends AbstractModel
{
    /**
     * @var LicenseSummary 许可证概览信息
     */
    public $LicenseSummary;

    /**
     * @var LicenseDetail 许可证详细信息
     */
    public $LicenseDetail;

    /**
     * @param LicenseSummary $LicenseSummary 许可证概览信息
     * @param LicenseDetail $LicenseDetail 许可证详细信息
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
        if (array_key_exists("LicenseSummary",$param) and $param["LicenseSummary"] !== null) {
            $this->LicenseSummary = new LicenseSummary();
            $this->LicenseSummary->deserialize($param["LicenseSummary"]);
        }

        if (array_key_exists("LicenseDetail",$param) and $param["LicenseDetail"] !== null) {
            $this->LicenseDetail = new LicenseDetail();
            $this->LicenseDetail->deserialize($param["LicenseDetail"]);
        }
    }
}

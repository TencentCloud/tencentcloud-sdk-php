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
namespace TencentCloud\Cloudapp\V20220530\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IssueLicense请求参数结构体
 *
 * @method string getCloudappId() 获取<p>云应用实例 ID</p>
 * @method void setCloudappId(string $CloudappId) 设置<p>云应用实例 ID</p>
 * @method string getLicenseId() 获取<p>云应用颁发的 License 授权 ID。系统中唯一，伙伴可通过 License 颁发的订阅接口中获取</p>
 * @method void setLicenseId(string $LicenseId) 设置<p>云应用颁发的 License 授权 ID。系统中唯一，伙伴可通过 License 颁发的订阅接口中获取</p>
 * @method PartnerLicenseData getLicenseData() 获取<p>License 的详细数据</p>
 * @method void setLicenseData(PartnerLicenseData $LicenseData) 设置<p>License 的详细数据</p>
 * @method string getActivateMode() 获取<p>License 的激活模式</p>枚举值：<ul><li> immediate ： 立即激活</li><li> scheduled： 指定时间激活</li></ul>
 * @method void setActivateMode(string $ActivateMode) 设置<p>License 的激活模式</p>枚举值：<ul><li> immediate ： 立即激活</li><li> scheduled： 指定时间激活</li></ul>
 * @method string getActivateAt() 获取<p>激活时间，指定时间激活时需要传该字段</p>
 * @method void setActivateAt(string $ActivateAt) 设置<p>激活时间，指定时间激活时需要传该字段</p>
 */
class IssueLicenseRequest extends AbstractModel
{
    /**
     * @var string <p>云应用实例 ID</p>
     */
    public $CloudappId;

    /**
     * @var string <p>云应用颁发的 License 授权 ID。系统中唯一，伙伴可通过 License 颁发的订阅接口中获取</p>
     */
    public $LicenseId;

    /**
     * @var PartnerLicenseData <p>License 的详细数据</p>
     */
    public $LicenseData;

    /**
     * @var string <p>License 的激活模式</p>枚举值：<ul><li> immediate ： 立即激活</li><li> scheduled： 指定时间激活</li></ul>
     */
    public $ActivateMode;

    /**
     * @var string <p>激活时间，指定时间激活时需要传该字段</p>
     */
    public $ActivateAt;

    /**
     * @param string $CloudappId <p>云应用实例 ID</p>
     * @param string $LicenseId <p>云应用颁发的 License 授权 ID。系统中唯一，伙伴可通过 License 颁发的订阅接口中获取</p>
     * @param PartnerLicenseData $LicenseData <p>License 的详细数据</p>
     * @param string $ActivateMode <p>License 的激活模式</p>枚举值：<ul><li> immediate ： 立即激活</li><li> scheduled： 指定时间激活</li></ul>
     * @param string $ActivateAt <p>激活时间，指定时间激活时需要传该字段</p>
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
        if (array_key_exists("CloudappId",$param) and $param["CloudappId"] !== null) {
            $this->CloudappId = $param["CloudappId"];
        }

        if (array_key_exists("LicenseId",$param) and $param["LicenseId"] !== null) {
            $this->LicenseId = $param["LicenseId"];
        }

        if (array_key_exists("LicenseData",$param) and $param["LicenseData"] !== null) {
            $this->LicenseData = new PartnerLicenseData();
            $this->LicenseData->deserialize($param["LicenseData"]);
        }

        if (array_key_exists("ActivateMode",$param) and $param["ActivateMode"] !== null) {
            $this->ActivateMode = $param["ActivateMode"];
        }

        if (array_key_exists("ActivateAt",$param) and $param["ActivateAt"] !== null) {
            $this->ActivateAt = $param["ActivateAt"];
        }
    }
}

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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLicenseUsageData请求参数结构体
 *
 * @method string getStartTime() 获取起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method void setStartTime(string $StartTime) 设置起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method string getEndTime() 获取结束日期，需大于等于起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method void setEndTime(string $EndTime) 设置结束日期，需大于等于起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method string getLicenseType() 获取License 类型，默认为 CommercialDRMLicense 。目前支持的 License 类型包括：
<li> CommercialDRMLicense: 商业级 DRM License</li>
<li> JITEncryptionDRMLicense: 即时加密 DRM License</li>
 * @method void setLicenseType(string $LicenseType) 设置License 类型，默认为 CommercialDRMLicense 。目前支持的 License 类型包括：
<li> CommercialDRMLicense: 商业级 DRM License</li>
<li> JITEncryptionDRMLicense: 即时加密 DRM License</li>
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 */
class DescribeLicenseUsageDataRequest extends AbstractModel
{
    /**
     * @var string 起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
     */
    public $StartTime;

    /**
     * @var string 结束日期，需大于等于起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
     */
    public $EndTime;

    /**
     * @var string License 类型，默认为 CommercialDRMLicense 。目前支持的 License 类型包括：
<li> CommercialDRMLicense: 商业级 DRM License</li>
<li> JITEncryptionDRMLicense: 即时加密 DRM License</li>
     */
    public $LicenseType;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @param string $StartTime 起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
     * @param string $EndTime 结束日期，需大于等于起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#52)。
     * @param string $LicenseType License 类型，默认为 CommercialDRMLicense 。目前支持的 License 类型包括：
<li> CommercialDRMLicense: 商业级 DRM License</li>
<li> JITEncryptionDRMLicense: 即时加密 DRM License</li>
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}

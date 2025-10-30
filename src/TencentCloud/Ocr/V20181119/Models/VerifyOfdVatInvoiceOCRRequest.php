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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyOfdVatInvoiceOCR请求参数结构体
 *
 * @method string getOfdFileUrl() 获取OFD文件的 Url 地址。
 * @method void setOfdFileUrl(string $OfdFileUrl) 设置OFD文件的 Url 地址。
 * @method string getOfdFileBase64() 获取OFD文件的 Base64 值。OfdFileUrl 和 OfdFileBase64 必传其一，若两者都传，只使用OfdFileUrl。
 * @method void setOfdFileBase64(string $OfdFileBase64) 设置OFD文件的 Base64 值。OfdFileUrl 和 OfdFileBase64 必传其一，若两者都传，只使用OfdFileUrl。
 * @method integer getOfdPageNumber() 获取需要识别的OFD发票页面的对应页码，默认值为1。 示例值：1
 * @method void setOfdPageNumber(integer $OfdPageNumber) 设置需要识别的OFD发票页面的对应页码，默认值为1。 示例值：1
 */
class VerifyOfdVatInvoiceOCRRequest extends AbstractModel
{
    /**
     * @var string OFD文件的 Url 地址。
     */
    public $OfdFileUrl;

    /**
     * @var string OFD文件的 Base64 值。OfdFileUrl 和 OfdFileBase64 必传其一，若两者都传，只使用OfdFileUrl。
     */
    public $OfdFileBase64;

    /**
     * @var integer 需要识别的OFD发票页面的对应页码，默认值为1。 示例值：1
     */
    public $OfdPageNumber;

    /**
     * @param string $OfdFileUrl OFD文件的 Url 地址。
     * @param string $OfdFileBase64 OFD文件的 Base64 值。OfdFileUrl 和 OfdFileBase64 必传其一，若两者都传，只使用OfdFileUrl。
     * @param integer $OfdPageNumber 需要识别的OFD发票页面的对应页码，默认值为1。 示例值：1
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
        if (array_key_exists("OfdFileUrl",$param) and $param["OfdFileUrl"] !== null) {
            $this->OfdFileUrl = $param["OfdFileUrl"];
        }

        if (array_key_exists("OfdFileBase64",$param) and $param["OfdFileBase64"] !== null) {
            $this->OfdFileBase64 = $param["OfdFileBase64"];
        }

        if (array_key_exists("OfdPageNumber",$param) and $param["OfdPageNumber"] !== null) {
            $this->OfdPageNumber = $param["OfdPageNumber"];
        }
    }
}

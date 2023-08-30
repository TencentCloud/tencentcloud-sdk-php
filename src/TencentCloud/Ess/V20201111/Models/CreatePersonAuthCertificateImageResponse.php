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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePersonAuthCertificateImage返回参数结构体
 *
 * @method string getAuthCertUrl() 获取个人用户证明证书的下载链接
 * @method void setAuthCertUrl(string $AuthCertUrl) 设置个人用户证明证书的下载链接
 * @method string getImageCertId() 获取证书图片上的证书编号，20位数字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageCertId(string $ImageCertId) 设置证书图片上的证书编号，20位数字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSerialNumber() 获取图片证明对应的CA证书序列号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerialNumber(string $SerialNumber) 设置图片证明对应的CA证书序列号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getValidFrom() 获取CA证书颁发时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValidFrom(integer $ValidFrom) 设置CA证书颁发时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getValidTo() 获取CA证书有效截止时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValidTo(integer $ValidTo) 设置CA证书有效截止时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreatePersonAuthCertificateImageResponse extends AbstractModel
{
    /**
     * @var string 个人用户证明证书的下载链接
     */
    public $AuthCertUrl;

    /**
     * @var string 证书图片上的证书编号，20位数字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageCertId;

    /**
     * @var string 图片证明对应的CA证书序列号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SerialNumber;

    /**
     * @var integer CA证书颁发时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValidFrom;

    /**
     * @var integer CA证书有效截止时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValidTo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AuthCertUrl 个人用户证明证书的下载链接
     * @param string $ImageCertId 证书图片上的证书编号，20位数字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SerialNumber 图片证明对应的CA证书序列号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ValidFrom CA证书颁发时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ValidTo CA证书有效截止时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AuthCertUrl",$param) and $param["AuthCertUrl"] !== null) {
            $this->AuthCertUrl = $param["AuthCertUrl"];
        }

        if (array_key_exists("ImageCertId",$param) and $param["ImageCertId"] !== null) {
            $this->ImageCertId = $param["ImageCertId"];
        }

        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("ValidFrom",$param) and $param["ValidFrom"] !== null) {
            $this->ValidFrom = $param["ValidFrom"];
        }

        if (array_key_exists("ValidTo",$param) and $param["ValidTo"] !== null) {
            $this->ValidTo = $param["ValidTo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

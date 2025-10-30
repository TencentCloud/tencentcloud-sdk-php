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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SyncImages请求参数结构体
 *
 * @method array getImageIds() 获取镜像ID列表 ，镜像ID可以通过如下方式获取：<br><li>通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回的`ImageId`获取，镜像ID对应的镜像状态必须为`NORMAL`。</li><li>通过[镜像控制台](https://console.cloud.tencent.com/cvm/image)获取。</li>
 * @method void setImageIds(array $ImageIds) 设置镜像ID列表 ，镜像ID可以通过如下方式获取：<br><li>通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回的`ImageId`获取，镜像ID对应的镜像状态必须为`NORMAL`。</li><li>通过[镜像控制台](https://console.cloud.tencent.com/cvm/image)获取。</li>
 * @method array getDestinationRegions() 获取目的同步地域列表，必须满足如下限制：<br><li>必须是一个合法的Region。</li><li>如果是自定义镜像，则目标同步地域不能为源地域。</li><li>如果是共享镜像，则目的同步地域仅支持源地域，表示将共享镜像复制为源地域的自定义镜像。</li><li>如果是自定义镜像复制为加密自定义镜像，则目的同步地域仅支持源地域，表示将自定义镜像复制为源地域的加密自定义镜像。</li><li>暂不支持部分地域同步，请参考[复制镜像](https://cloud.tencent.com/document/product/213/4943#.E5.A4.8D.E5.88.B6.E8.AF.B4.E6.98.8E)。</li>具体地域参数请参考[Region](https://cloud.tencent.com/document/product/213/6091)。
 * @method void setDestinationRegions(array $DestinationRegions) 设置目的同步地域列表，必须满足如下限制：<br><li>必须是一个合法的Region。</li><li>如果是自定义镜像，则目标同步地域不能为源地域。</li><li>如果是共享镜像，则目的同步地域仅支持源地域，表示将共享镜像复制为源地域的自定义镜像。</li><li>如果是自定义镜像复制为加密自定义镜像，则目的同步地域仅支持源地域，表示将自定义镜像复制为源地域的加密自定义镜像。</li><li>暂不支持部分地域同步，请参考[复制镜像](https://cloud.tencent.com/document/product/213/4943#.E5.A4.8D.E5.88.B6.E8.AF.B4.E6.98.8E)。</li>具体地域参数请参考[Region](https://cloud.tencent.com/document/product/213/6091)。
 * @method boolean getDryRun() 获取检测是否支持发起同步镜像。
默认值: false
 * @method void setDryRun(boolean $DryRun) 设置检测是否支持发起同步镜像。
默认值: false
 * @method string getImageName() 获取目标镜像名称。默认使用源镜像名称。
最多支持 60 个字符。
 * @method void setImageName(string $ImageName) 设置目标镜像名称。默认使用源镜像名称。
最多支持 60 个字符。
 * @method boolean getImageSetRequired() 获取是否需要返回目的地域的镜像ID。
默认值: false
 * @method void setImageSetRequired(boolean $ImageSetRequired) 设置是否需要返回目的地域的镜像ID。
默认值: false
 * @method boolean getEncrypt() 获取是否复制为加密自定义镜像。
默认值为 false。
复制加密自定义镜像仅支持同地域， 即 DestinationRegions 仅支持填写指定镜像所在地域。
 * @method void setEncrypt(boolean $Encrypt) 设置是否复制为加密自定义镜像。
默认值为 false。
复制加密自定义镜像仅支持同地域， 即 DestinationRegions 仅支持填写指定镜像所在地域。
 * @method string getKmsKeyId() 获取加密自定义镜像使用的 KMS 密钥 ID。
仅当复制加密镜像时，即 Encrypt 为 true 时，此参数有效；
不指定 KmsKeyId，默认使用 CBS 云产品 KMS 密钥。
KMS 密钥 ID 通过[KMS 控制台](https://console.cloud.tencent.com/kms2)获取。
 * @method void setKmsKeyId(string $KmsKeyId) 设置加密自定义镜像使用的 KMS 密钥 ID。
仅当复制加密镜像时，即 Encrypt 为 true 时，此参数有效；
不指定 KmsKeyId，默认使用 CBS 云产品 KMS 密钥。
KMS 密钥 ID 通过[KMS 控制台](https://console.cloud.tencent.com/kms2)获取。
 */
class SyncImagesRequest extends AbstractModel
{
    /**
     * @var array 镜像ID列表 ，镜像ID可以通过如下方式获取：<br><li>通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回的`ImageId`获取，镜像ID对应的镜像状态必须为`NORMAL`。</li><li>通过[镜像控制台](https://console.cloud.tencent.com/cvm/image)获取。</li>
     */
    public $ImageIds;

    /**
     * @var array 目的同步地域列表，必须满足如下限制：<br><li>必须是一个合法的Region。</li><li>如果是自定义镜像，则目标同步地域不能为源地域。</li><li>如果是共享镜像，则目的同步地域仅支持源地域，表示将共享镜像复制为源地域的自定义镜像。</li><li>如果是自定义镜像复制为加密自定义镜像，则目的同步地域仅支持源地域，表示将自定义镜像复制为源地域的加密自定义镜像。</li><li>暂不支持部分地域同步，请参考[复制镜像](https://cloud.tencent.com/document/product/213/4943#.E5.A4.8D.E5.88.B6.E8.AF.B4.E6.98.8E)。</li>具体地域参数请参考[Region](https://cloud.tencent.com/document/product/213/6091)。
     */
    public $DestinationRegions;

    /**
     * @var boolean 检测是否支持发起同步镜像。
默认值: false
     */
    public $DryRun;

    /**
     * @var string 目标镜像名称。默认使用源镜像名称。
最多支持 60 个字符。
     */
    public $ImageName;

    /**
     * @var boolean 是否需要返回目的地域的镜像ID。
默认值: false
     */
    public $ImageSetRequired;

    /**
     * @var boolean 是否复制为加密自定义镜像。
默认值为 false。
复制加密自定义镜像仅支持同地域， 即 DestinationRegions 仅支持填写指定镜像所在地域。
     */
    public $Encrypt;

    /**
     * @var string 加密自定义镜像使用的 KMS 密钥 ID。
仅当复制加密镜像时，即 Encrypt 为 true 时，此参数有效；
不指定 KmsKeyId，默认使用 CBS 云产品 KMS 密钥。
KMS 密钥 ID 通过[KMS 控制台](https://console.cloud.tencent.com/kms2)获取。
     */
    public $KmsKeyId;

    /**
     * @param array $ImageIds 镜像ID列表 ，镜像ID可以通过如下方式获取：<br><li>通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回的`ImageId`获取，镜像ID对应的镜像状态必须为`NORMAL`。</li><li>通过[镜像控制台](https://console.cloud.tencent.com/cvm/image)获取。</li>
     * @param array $DestinationRegions 目的同步地域列表，必须满足如下限制：<br><li>必须是一个合法的Region。</li><li>如果是自定义镜像，则目标同步地域不能为源地域。</li><li>如果是共享镜像，则目的同步地域仅支持源地域，表示将共享镜像复制为源地域的自定义镜像。</li><li>如果是自定义镜像复制为加密自定义镜像，则目的同步地域仅支持源地域，表示将自定义镜像复制为源地域的加密自定义镜像。</li><li>暂不支持部分地域同步，请参考[复制镜像](https://cloud.tencent.com/document/product/213/4943#.E5.A4.8D.E5.88.B6.E8.AF.B4.E6.98.8E)。</li>具体地域参数请参考[Region](https://cloud.tencent.com/document/product/213/6091)。
     * @param boolean $DryRun 检测是否支持发起同步镜像。
默认值: false
     * @param string $ImageName 目标镜像名称。默认使用源镜像名称。
最多支持 60 个字符。
     * @param boolean $ImageSetRequired 是否需要返回目的地域的镜像ID。
默认值: false
     * @param boolean $Encrypt 是否复制为加密自定义镜像。
默认值为 false。
复制加密自定义镜像仅支持同地域， 即 DestinationRegions 仅支持填写指定镜像所在地域。
     * @param string $KmsKeyId 加密自定义镜像使用的 KMS 密钥 ID。
仅当复制加密镜像时，即 Encrypt 为 true 时，此参数有效；
不指定 KmsKeyId，默认使用 CBS 云产品 KMS 密钥。
KMS 密钥 ID 通过[KMS 控制台](https://console.cloud.tencent.com/kms2)获取。
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
        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("DestinationRegions",$param) and $param["DestinationRegions"] !== null) {
            $this->DestinationRegions = $param["DestinationRegions"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageSetRequired",$param) and $param["ImageSetRequired"] !== null) {
            $this->ImageSetRequired = $param["ImageSetRequired"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }
    }
}

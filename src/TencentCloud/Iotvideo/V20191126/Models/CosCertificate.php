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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 申请上传证书回包
 *
 * @method string getStorageBucket() 获取cos存储桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageBucket(string $StorageBucket) 设置cos存储桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageRegion() 获取cos存储园区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageRegion(string $StorageRegion) 设置cos存储园区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStoragePath() 获取存储路径，录制场景下该值为存储目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoragePath(string $StoragePath) 设置存储路径，录制场景下该值为存储目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method CertificateInfo getTempCertificate() 获取证书信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTempCertificate(CertificateInfo $TempCertificate) 设置证书信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionKey() 获取SessionKey
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionKey(string $SessionKey) 设置SessionKey
注意：此字段可能返回 null，表示取不到有效值。
 */
class CosCertificate extends AbstractModel
{
    /**
     * @var string cos存储桶
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageBucket;

    /**
     * @var string cos存储园区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageRegion;

    /**
     * @var string 存储路径，录制场景下该值为存储目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoragePath;

    /**
     * @var CertificateInfo 证书信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TempCertificate;

    /**
     * @var string SessionKey
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionKey;

    /**
     * @param string $StorageBucket cos存储桶
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageRegion cos存储园区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StoragePath 存储路径，录制场景下该值为存储目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param CertificateInfo $TempCertificate 证书信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionKey SessionKey
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("StorageBucket",$param) and $param["StorageBucket"] !== null) {
            $this->StorageBucket = $param["StorageBucket"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("StoragePath",$param) and $param["StoragePath"] !== null) {
            $this->StoragePath = $param["StoragePath"];
        }

        if (array_key_exists("TempCertificate",$param) and $param["TempCertificate"] !== null) {
            $this->TempCertificate = new CertificateInfo();
            $this->TempCertificate->deserialize($param["TempCertificate"]);
        }

        if (array_key_exists("SessionKey",$param) and $param["SessionKey"] !== null) {
            $this->SessionKey = $param["SessionKey"];
        }
    }
}

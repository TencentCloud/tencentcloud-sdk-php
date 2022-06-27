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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子商户资质文件查询
 *
 * @method string getUploadStatus() 获取上传状态
 * @method void setUploadStatus(string $UploadStatus) 设置上传状态
 * @method string getUploadMessage() 获取上传描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUploadMessage(string $UploadMessage) 设置上传描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryOpenBankSubMerchantCredentialResult extends AbstractModel
{
    /**
     * @var string 上传状态
     */
    public $UploadStatus;

    /**
     * @var string 上传描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UploadMessage;

    /**
     * @param string $UploadStatus 上传状态
     * @param string $UploadMessage 上传描述
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
        if (array_key_exists("UploadStatus",$param) and $param["UploadStatus"] !== null) {
            $this->UploadStatus = $param["UploadStatus"];
        }

        if (array_key_exists("UploadMessage",$param) and $param["UploadMessage"] !== null) {
            $this->UploadMessage = $param["UploadMessage"];
        }
    }
}

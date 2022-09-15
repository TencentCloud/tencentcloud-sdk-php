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
 * 上传子商户资质文件返回值
 *
 * @method string getUploadStatus() 获取上传状态
SUCCESS：上传成功
FAILED：上传失败
PROCESSING:上传中
 * @method void setUploadStatus(string $UploadStatus) 设置上传状态
SUCCESS：上传成功
FAILED：上传失败
PROCESSING:上传中
 * @method string getUploadMessage() 获取上传描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUploadMessage(string $UploadMessage) 设置上传描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelApplyId() 获取渠道上传流水号
 * @method void setChannelApplyId(string $ChannelApplyId) 设置渠道上传流水号
 */
class UploadOpenBankSubMerchantCredentialResult extends AbstractModel
{
    /**
     * @var string 上传状态
SUCCESS：上传成功
FAILED：上传失败
PROCESSING:上传中
     */
    public $UploadStatus;

    /**
     * @var string 上传描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UploadMessage;

    /**
     * @var string 渠道上传流水号
     */
    public $ChannelApplyId;

    /**
     * @param string $UploadStatus 上传状态
SUCCESS：上传成功
FAILED：上传失败
PROCESSING:上传中
     * @param string $UploadMessage 上传描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelApplyId 渠道上传流水号
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

        if (array_key_exists("ChannelApplyId",$param) and $param["ChannelApplyId"] !== null) {
            $this->ChannelApplyId = $param["ChannelApplyId"];
        }
    }
}

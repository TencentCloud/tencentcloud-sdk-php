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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckFaceIdentify返回参数结构体
 *
 * @method integer getResult() 获取核身结果; 0:通过,1:不通过
 * @method void setResult(integer $Result) 设置核身结果; 0:通过,1:不通过
 * @method string getDescription() 获取核身结果描述
 * @method void setDescription(string $Description) 设置核身结果描述
 * @method string getChannelName() 获取渠道名
 * @method void setChannelName(string $ChannelName) 设置渠道名
 * @method integer getVerifiedOn() 获取认证通过时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifiedOn(integer $VerifiedOn) 设置认证通过时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSerialNumber() 获取核身流水号
 * @method void setSerialNumber(string $SerialNumber) 设置核身流水号
 * @method string getVerifyServerIp() 获取渠道核身服务器IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifyServerIp(string $VerifyServerIp) 设置渠道核身服务器IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhotoFileName() 获取核身照片文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhotoFileName(string $PhotoFileName) 设置核身照片文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhotoFileData() 获取核身照片内容base64(文件格式见文件名后缀,一般为jpg)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhotoFileData(string $PhotoFileData) 设置核身照片内容base64(文件格式见文件名后缀,一般为jpg)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CheckFaceIdentifyResponse extends AbstractModel
{
    /**
     * @var integer 核身结果; 0:通过,1:不通过
     */
    public $Result;

    /**
     * @var string 核身结果描述
     */
    public $Description;

    /**
     * @var string 渠道名
     */
    public $ChannelName;

    /**
     * @var integer 认证通过时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifiedOn;

    /**
     * @var string 核身流水号
     */
    public $SerialNumber;

    /**
     * @var string 渠道核身服务器IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifyServerIp;

    /**
     * @var string 核身照片文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhotoFileName;

    /**
     * @var string 核身照片内容base64(文件格式见文件名后缀,一般为jpg)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhotoFileData;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Result 核身结果; 0:通过,1:不通过
     * @param string $Description 核身结果描述
     * @param string $ChannelName 渠道名
     * @param integer $VerifiedOn 认证通过时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SerialNumber 核身流水号
     * @param string $VerifyServerIp 渠道核身服务器IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PhotoFileName 核身照片文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PhotoFileData 核身照片内容base64(文件格式见文件名后缀,一般为jpg)
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("VerifiedOn",$param) and $param["VerifiedOn"] !== null) {
            $this->VerifiedOn = $param["VerifiedOn"];
        }

        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("VerifyServerIp",$param) and $param["VerifyServerIp"] !== null) {
            $this->VerifyServerIp = $param["VerifyServerIp"];
        }

        if (array_key_exists("PhotoFileName",$param) and $param["PhotoFileName"] !== null) {
            $this->PhotoFileName = $param["PhotoFileName"];
        }

        if (array_key_exists("PhotoFileData",$param) and $param["PhotoFileData"] !== null) {
            $this->PhotoFileData = $param["PhotoFileData"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

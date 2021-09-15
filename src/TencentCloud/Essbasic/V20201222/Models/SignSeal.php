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
 * 此结构体 (SignSeal) 用于描述签名/印章信息。
 *
 * @method string getComponentId() 获取签署控件ID
 * @method void setComponentId(string $ComponentId) 设置签署控件ID
 * @method string getSignType() 获取签署印章类型:
SIGN_SIGNATURE - 签名
SIGN_SEAL - 印章
SIGN_DATE - 日期
SIGN_IMAGE - 图片
 * @method void setSignType(string $SignType) 设置签署印章类型:
SIGN_SIGNATURE - 签名
SIGN_SEAL - 印章
SIGN_DATE - 日期
SIGN_IMAGE - 图片
 * @method integer getFileIndex() 获取合同文件ID
 * @method void setFileIndex(integer $FileIndex) 设置合同文件ID
 * @method string getSealId() 获取印章ID，仅当 SignType 为 SIGN_SEAL 时必填
 * @method void setSealId(string $SealId) 设置印章ID，仅当 SignType 为 SIGN_SEAL 时必填
 * @method string getSealContent() 获取签名内容，仅当 SignType 为SIGN_SIGNATURE或SIGN_IMAGE 时必填，base64编码
 * @method void setSealContent(string $SealContent) 设置签名内容，仅当 SignType 为SIGN_SIGNATURE或SIGN_IMAGE 时必填，base64编码
 */
class SignSeal extends AbstractModel
{
    /**
     * @var string 签署控件ID
     */
    public $ComponentId;

    /**
     * @var string 签署印章类型:
SIGN_SIGNATURE - 签名
SIGN_SEAL - 印章
SIGN_DATE - 日期
SIGN_IMAGE - 图片
     */
    public $SignType;

    /**
     * @var integer 合同文件ID
     */
    public $FileIndex;

    /**
     * @var string 印章ID，仅当 SignType 为 SIGN_SEAL 时必填
     */
    public $SealId;

    /**
     * @var string 签名内容，仅当 SignType 为SIGN_SIGNATURE或SIGN_IMAGE 时必填，base64编码
     */
    public $SealContent;

    /**
     * @param string $ComponentId 签署控件ID
     * @param string $SignType 签署印章类型:
SIGN_SIGNATURE - 签名
SIGN_SEAL - 印章
SIGN_DATE - 日期
SIGN_IMAGE - 图片
     * @param integer $FileIndex 合同文件ID
     * @param string $SealId 印章ID，仅当 SignType 为 SIGN_SEAL 时必填
     * @param string $SealContent 签名内容，仅当 SignType 为SIGN_SIGNATURE或SIGN_IMAGE 时必填，base64编码
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
        if (array_key_exists("ComponentId",$param) and $param["ComponentId"] !== null) {
            $this->ComponentId = $param["ComponentId"];
        }

        if (array_key_exists("SignType",$param) and $param["SignType"] !== null) {
            $this->SignType = $param["SignType"];
        }

        if (array_key_exists("FileIndex",$param) and $param["FileIndex"] !== null) {
            $this->FileIndex = $param["FileIndex"];
        }

        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }

        if (array_key_exists("SealContent",$param) and $param["SealContent"] !== null) {
            $this->SealContent = $param["SealContent"];
        }
    }
}

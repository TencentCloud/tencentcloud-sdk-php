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
 * CreateSeal请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息
 * @method void setCaller(Caller $Caller) 设置调用方信息
 * @method string getSealType() 获取印章类型：
1. PERSONAL - 个人私章
2. OFFICIAL - 公章
3. SPECIAL_FINANCIAL - 财务专用章
4. CONTRACT - 合同专用章
5. LEGAL_REPRESENTATIVE - 法定代表人章
6. SPECIAL_NATIONWIDE_INVOICE - 发票专用章
7. OTHER-其他
 * @method void setSealType(string $SealType) 设置印章类型：
1. PERSONAL - 个人私章
2. OFFICIAL - 公章
3. SPECIAL_FINANCIAL - 财务专用章
4. CONTRACT - 合同专用章
5. LEGAL_REPRESENTATIVE - 法定代表人章
6. SPECIAL_NATIONWIDE_INVOICE - 发票专用章
7. OTHER-其他
 * @method string getSealName() 获取印章名称
 * @method void setSealName(string $SealName) 设置印章名称
 * @method string getSourceIp() 获取请求创建印章的客户端IP
 * @method void setSourceIp(string $SourceIp) 设置请求创建印章的客户端IP
 * @method string getImage() 获取印章图片，base64编码（与FileId参数二选一，同时传入参数时优先使用Image参数）
 * @method void setImage(string $Image) 设置印章图片，base64编码（与FileId参数二选一，同时传入参数时优先使用Image参数）
 * @method string getFileId() 获取印章文件图片ID（与Image参数二选一，同时传入参数时优先使用Image参数）
 * @method void setFileId(string $FileId) 设置印章文件图片ID（与Image参数二选一，同时传入参数时优先使用Image参数）
 * @method string getUserId() 获取需要创建印章的用户ID
 * @method void setUserId(string $UserId) 设置需要创建印章的用户ID
 * @method boolean getIsDefault() 获取是否是默认印章 true：是，false：否
 * @method void setIsDefault(boolean $IsDefault) 设置是否是默认印章 true：是，false：否
 */
class CreateSealRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息
     */
    public $Caller;

    /**
     * @var string 印章类型：
1. PERSONAL - 个人私章
2. OFFICIAL - 公章
3. SPECIAL_FINANCIAL - 财务专用章
4. CONTRACT - 合同专用章
5. LEGAL_REPRESENTATIVE - 法定代表人章
6. SPECIAL_NATIONWIDE_INVOICE - 发票专用章
7. OTHER-其他
     */
    public $SealType;

    /**
     * @var string 印章名称
     */
    public $SealName;

    /**
     * @var string 请求创建印章的客户端IP
     */
    public $SourceIp;

    /**
     * @var string 印章图片，base64编码（与FileId参数二选一，同时传入参数时优先使用Image参数）
     */
    public $Image;

    /**
     * @var string 印章文件图片ID（与Image参数二选一，同时传入参数时优先使用Image参数）
     */
    public $FileId;

    /**
     * @var string 需要创建印章的用户ID
     */
    public $UserId;

    /**
     * @var boolean 是否是默认印章 true：是，false：否
     */
    public $IsDefault;

    /**
     * @param Caller $Caller 调用方信息
     * @param string $SealType 印章类型：
1. PERSONAL - 个人私章
2. OFFICIAL - 公章
3. SPECIAL_FINANCIAL - 财务专用章
4. CONTRACT - 合同专用章
5. LEGAL_REPRESENTATIVE - 法定代表人章
6. SPECIAL_NATIONWIDE_INVOICE - 发票专用章
7. OTHER-其他
     * @param string $SealName 印章名称
     * @param string $SourceIp 请求创建印章的客户端IP
     * @param string $Image 印章图片，base64编码（与FileId参数二选一，同时传入参数时优先使用Image参数）
     * @param string $FileId 印章文件图片ID（与Image参数二选一，同时传入参数时优先使用Image参数）
     * @param string $UserId 需要创建印章的用户ID
     * @param boolean $IsDefault 是否是默认印章 true：是，false：否
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
        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = new Caller();
            $this->Caller->deserialize($param["Caller"]);
        }

        if (array_key_exists("SealType",$param) and $param["SealType"] !== null) {
            $this->SealType = $param["SealType"];
        }

        if (array_key_exists("SealName",$param) and $param["SealName"] !== null) {
            $this->SealName = $param["SealName"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}

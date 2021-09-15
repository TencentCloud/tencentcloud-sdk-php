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
 * ModifySeal请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息
 * @method void setCaller(Caller $Caller) 设置调用方信息
 * @method string getSourceIp() 获取请求更新印章的客户端IP
 * @method void setSourceIp(string $SourceIp) 设置请求更新印章的客户端IP
 * @method string getSealId() 获取电子印章ID。若为空，则修改个人/机构的默认印章。
 * @method void setSealId(string $SealId) 设置电子印章ID。若为空，则修改个人/机构的默认印章。
 * @method string getSealName() 获取电子印章名称
 * @method void setSealName(string $SealName) 设置电子印章名称
 * @method string getImage() 获取印章图片，base64编码（与FileId参数二选一，同时传入参数时优先使用Image参数）
 * @method void setImage(string $Image) 设置印章图片，base64编码（与FileId参数二选一，同时传入参数时优先使用Image参数）
 * @method string getFileId() 获取印章图片文件ID（与Image参数二选一，同时传入参数时优先使用Image参数）
 * @method void setFileId(string $FileId) 设置印章图片文件ID（与Image参数二选一，同时传入参数时优先使用Image参数）
 * @method string getUserId() 获取需要更新印章的用户ID
 * @method void setUserId(string $UserId) 设置需要更新印章的用户ID
 */
class ModifySealRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息
     */
    public $Caller;

    /**
     * @var string 请求更新印章的客户端IP
     */
    public $SourceIp;

    /**
     * @var string 电子印章ID。若为空，则修改个人/机构的默认印章。
     */
    public $SealId;

    /**
     * @var string 电子印章名称
     */
    public $SealName;

    /**
     * @var string 印章图片，base64编码（与FileId参数二选一，同时传入参数时优先使用Image参数）
     */
    public $Image;

    /**
     * @var string 印章图片文件ID（与Image参数二选一，同时传入参数时优先使用Image参数）
     */
    public $FileId;

    /**
     * @var string 需要更新印章的用户ID
     */
    public $UserId;

    /**
     * @param Caller $Caller 调用方信息
     * @param string $SourceIp 请求更新印章的客户端IP
     * @param string $SealId 电子印章ID。若为空，则修改个人/机构的默认印章。
     * @param string $SealName 电子印章名称
     * @param string $Image 印章图片，base64编码（与FileId参数二选一，同时传入参数时优先使用Image参数）
     * @param string $FileId 印章图片文件ID（与Image参数二选一，同时传入参数时优先使用Image参数）
     * @param string $UserId 需要更新印章的用户ID
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

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }

        if (array_key_exists("SealName",$param) and $param["SealName"] !== null) {
            $this->SealName = $param["SealName"];
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
    }
}

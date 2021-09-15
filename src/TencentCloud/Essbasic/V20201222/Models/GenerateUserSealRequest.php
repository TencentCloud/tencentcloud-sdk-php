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
 * GenerateUserSeal请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息
 * @method void setCaller(Caller $Caller) 设置调用方信息
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method string getSourceIp() 获取请求生成个人印章的客户端IP
 * @method void setSourceIp(string $SourceIp) 设置请求生成个人印章的客户端IP
 * @method string getSealName() 获取电子印章名称
 * @method void setSealName(string $SealName) 设置电子印章名称
 * @method boolean getIsDefault() 获取是否是默认印章 true：是，false：否
 * @method void setIsDefault(boolean $IsDefault) 设置是否是默认印章 true：是，false：否
 */
class GenerateUserSealRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息
     */
    public $Caller;

    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var string 请求生成个人印章的客户端IP
     */
    public $SourceIp;

    /**
     * @var string 电子印章名称
     */
    public $SealName;

    /**
     * @var boolean 是否是默认印章 true：是，false：否
     */
    public $IsDefault;

    /**
     * @param Caller $Caller 调用方信息
     * @param string $UserId 用户ID
     * @param string $SourceIp 请求生成个人印章的客户端IP
     * @param string $SealName 电子印章名称
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

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("SealName",$param) and $param["SealName"] !== null) {
            $this->SealName = $param["SealName"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}

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
 * DeleteSeal请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息
 * @method void setCaller(Caller $Caller) 设置调用方信息
 * @method string getSealId() 获取印章ID
 * @method void setSealId(string $SealId) 设置印章ID
 * @method string getSourceIp() 获取请求删除印章的客户端IP
 * @method void setSourceIp(string $SourceIp) 设置请求删除印章的客户端IP
 * @method string getUserId() 获取用户唯一标识，默认为空时删除企业印章，如非空则删除个人印章
 * @method void setUserId(string $UserId) 设置用户唯一标识，默认为空时删除企业印章，如非空则删除个人印章
 */
class DeleteSealRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息
     */
    public $Caller;

    /**
     * @var string 印章ID
     */
    public $SealId;

    /**
     * @var string 请求删除印章的客户端IP
     */
    public $SourceIp;

    /**
     * @var string 用户唯一标识，默认为空时删除企业印章，如非空则删除个人印章
     */
    public $UserId;

    /**
     * @param Caller $Caller 调用方信息
     * @param string $SealId 印章ID
     * @param string $SourceIp 请求删除印章的客户端IP
     * @param string $UserId 用户唯一标识，默认为空时删除企业印章，如非空则删除个人印章
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

        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}

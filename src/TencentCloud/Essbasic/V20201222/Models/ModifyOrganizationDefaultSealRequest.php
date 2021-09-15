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
 * ModifyOrganizationDefaultSeal请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息
 * @method void setCaller(Caller $Caller) 设置调用方信息
 * @method string getSealId() 获取重新指定的默认印章ID
 * @method void setSealId(string $SealId) 设置重新指定的默认印章ID
 * @method string getSourceIp() 获取请求重新指定企业默认印章的客户端IP
 * @method void setSourceIp(string $SourceIp) 设置请求重新指定企业默认印章的客户端IP
 */
class ModifyOrganizationDefaultSealRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息
     */
    public $Caller;

    /**
     * @var string 重新指定的默认印章ID
     */
    public $SealId;

    /**
     * @var string 请求重新指定企业默认印章的客户端IP
     */
    public $SourceIp;

    /**
     * @param Caller $Caller 调用方信息
     * @param string $SealId 重新指定的默认印章ID
     * @param string $SourceIp 请求重新指定企业默认印章的客户端IP
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
    }
}

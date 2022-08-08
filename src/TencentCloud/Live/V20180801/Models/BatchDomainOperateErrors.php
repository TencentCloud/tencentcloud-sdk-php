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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量操作域名相关接口，若其中个别域名操作失败将会跳过，相应的域名错误信息将统一汇总在此类型中
 *
 * @method string getDomainName() 获取操作失败的域名。
 * @method void setDomainName(string $DomainName) 设置操作失败的域名。
 * @method string getCode() 获取API3.0错误码。
 * @method void setCode(string $Code) 设置API3.0错误码。
 * @method string getMessage() 获取API3.0错误信息。
 * @method void setMessage(string $Message) 设置API3.0错误信息。
 */
class BatchDomainOperateErrors extends AbstractModel
{
    /**
     * @var string 操作失败的域名。
     */
    public $DomainName;

    /**
     * @var string API3.0错误码。
     */
    public $Code;

    /**
     * @var string API3.0错误信息。
     */
    public $Message;

    /**
     * @param string $DomainName 操作失败的域名。
     * @param string $Code API3.0错误码。
     * @param string $Message API3.0错误信息。
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}

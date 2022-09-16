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
 * AuthenticateDomainOwner请求参数结构体
 *
 * @method string getDomainName() 获取要验证的域名。
 * @method void setDomainName(string $DomainName) 设置要验证的域名。
 * @method string getVerifyType() 获取验证类型。可取值：
dnsCheck ：立即验证配置 dns 的解析记录是否与待验证内容一致，成功则保存记录。
fileCheck ：立即验证 web 文件是否与待验证内容一致，成功则保存记录。
dbCheck :  检查是否已经验证成功过。
 * @method void setVerifyType(string $VerifyType) 设置验证类型。可取值：
dnsCheck ：立即验证配置 dns 的解析记录是否与待验证内容一致，成功则保存记录。
fileCheck ：立即验证 web 文件是否与待验证内容一致，成功则保存记录。
dbCheck :  检查是否已经验证成功过。
 */
class AuthenticateDomainOwnerRequest extends AbstractModel
{
    /**
     * @var string 要验证的域名。
     */
    public $DomainName;

    /**
     * @var string 验证类型。可取值：
dnsCheck ：立即验证配置 dns 的解析记录是否与待验证内容一致，成功则保存记录。
fileCheck ：立即验证 web 文件是否与待验证内容一致，成功则保存记录。
dbCheck :  检查是否已经验证成功过。
     */
    public $VerifyType;

    /**
     * @param string $DomainName 要验证的域名。
     * @param string $VerifyType 验证类型。可取值：
dnsCheck ：立即验证配置 dns 的解析记录是否与待验证内容一致，成功则保存记录。
fileCheck ：立即验证 web 文件是否与待验证内容一致，成功则保存记录。
dbCheck :  检查是否已经验证成功过。
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

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }
    }
}

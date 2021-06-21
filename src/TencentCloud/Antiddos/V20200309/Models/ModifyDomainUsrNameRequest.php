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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDomainUsrName请求参数结构体
 *
 * @method string getDomainName() 获取用户CNAME
 * @method void setDomainName(string $DomainName) 设置用户CNAME
 * @method string getDomainUserName() 获取域名名称
 * @method void setDomainUserName(string $DomainUserName) 设置域名名称
 */
class ModifyDomainUsrNameRequest extends AbstractModel
{
    /**
     * @var string 用户CNAME
     */
    public $DomainName;

    /**
     * @var string 域名名称
     */
    public $DomainUserName;

    /**
     * @param string $DomainName 用户CNAME
     * @param string $DomainUserName 域名名称
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

        if (array_key_exists("DomainUserName",$param) and $param["DomainUserName"] !== null) {
            $this->DomainUserName = $param["DomainUserName"];
        }
    }
}

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
 * DescribeL7RulesBySSLCertId请求参数结构体
 *
 * @method string getStatus() 获取域名状态，可取bindable, binded, opened, closed, all，all表示全部状态
 * @method void setStatus(string $Status) 设置域名状态，可取bindable, binded, opened, closed, all，all表示全部状态
 * @method array getCertIds() 获取证书ID列表
 * @method void setCertIds(array $CertIds) 设置证书ID列表
 */
class DescribeL7RulesBySSLCertIdRequest extends AbstractModel
{
    /**
     * @var string 域名状态，可取bindable, binded, opened, closed, all，all表示全部状态
     */
    public $Status;

    /**
     * @var array 证书ID列表
     */
    public $CertIds;

    /**
     * @param string $Status 域名状态，可取bindable, binded, opened, closed, all，all表示全部状态
     * @param array $CertIds 证书ID列表
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CertIds",$param) and $param["CertIds"] !== null) {
            $this->CertIds = $param["CertIds"];
        }
    }
}

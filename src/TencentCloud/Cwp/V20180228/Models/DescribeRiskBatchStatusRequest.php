<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRiskBatchStatus请求参数结构体
 *
 * @method string getRiskType() 获取操作事件类型，文件查杀：MALWARE，异常登录：HOST_LOGIN，密码破解：BRUTE_ATTACK，恶意请求：MALICIOUS_REQUEST，高危命令：BASH_EVENT，本地提权：PRIVILEGE_EVENT，反弹shell：REVERSE_SHELL
 * @method void setRiskType(string $RiskType) 设置操作事件类型，文件查杀：MALWARE，异常登录：HOST_LOGIN，密码破解：BRUTE_ATTACK，恶意请求：MALICIOUS_REQUEST，高危命令：BASH_EVENT，本地提权：PRIVILEGE_EVENT，反弹shell：REVERSE_SHELL
 */
class DescribeRiskBatchStatusRequest extends AbstractModel
{
    /**
     * @var string 操作事件类型，文件查杀：MALWARE，异常登录：HOST_LOGIN，密码破解：BRUTE_ATTACK，恶意请求：MALICIOUS_REQUEST，高危命令：BASH_EVENT，本地提权：PRIVILEGE_EVENT，反弹shell：REVERSE_SHELL
     */
    public $RiskType;

    /**
     * @param string $RiskType 操作事件类型，文件查杀：MALWARE，异常登录：HOST_LOGIN，密码破解：BRUTE_ATTACK，恶意请求：MALICIOUS_REQUEST，高危命令：BASH_EVENT，本地提权：PRIVILEGE_EVENT，反弹shell：REVERSE_SHELL
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
        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }
    }
}

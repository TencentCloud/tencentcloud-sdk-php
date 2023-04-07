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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEventByTable返回参数结构体
 *
 * @method string getType() 获取告警类型，爆破bruteattack，高危命令bash，恶意文件malware，恶意请求risk_dns，本地提权privilege_escalation，反弹shell reverse_shell，内存马java_shell
 * @method void setType(string $Type) 设置告警类型，爆破bruteattack，高危命令bash，恶意文件malware，恶意请求risk_dns，本地提权privilege_escalation，反弹shell reverse_shell，内存马java_shell
 * @method string getValue() 获取事件内容的json编码字符串，字段结构对齐事件表
 * @method void setValue(string $Value) 设置事件内容的json编码字符串，字段结构对齐事件表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEventByTableResponse extends AbstractModel
{
    /**
     * @var string 告警类型，爆破bruteattack，高危命令bash，恶意文件malware，恶意请求risk_dns，本地提权privilege_escalation，反弹shell reverse_shell，内存马java_shell
     */
    public $Type;

    /**
     * @var string 事件内容的json编码字符串，字段结构对齐事件表
     */
    public $Value;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Type 告警类型，爆破bruteattack，高危命令bash，恶意文件malware，恶意请求risk_dns，本地提权privilege_escalation，反弹shell reverse_shell，内存马java_shell
     * @param string $Value 事件内容的json编码字符串，字段结构对齐事件表
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

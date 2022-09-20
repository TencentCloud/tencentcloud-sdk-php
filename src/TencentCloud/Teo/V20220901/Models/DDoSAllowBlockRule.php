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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS黑白名单规则详情
 *
 * @method string getIp() 获取客户端IP，支持格式有：单IP、IP范围、网段、网段范围。例如"1.1.1.1","1.1.1.2-1.1.1.3","1.2.1.0/24-1.2.2.0/24"。
 * @method void setIp(string $Ip) 设置客户端IP，支持格式有：单IP、IP范围、网段、网段范围。例如"1.1.1.1","1.1.1.2-1.1.1.3","1.2.1.0/24-1.2.2.0/24"。
 * @method string getType() 获取类型，取值有：
<li> block ：丢弃 ；</li><li> allow ：允许。</li>
 * @method void setType(string $Type) 设置类型，取值有：
<li> block ：丢弃 ；</li><li> allow ：允许。</li>
 * @method integer getUpdateTime() 获取10位时间戳，例如1199116800。不填写系统取当前时间。
 * @method void setUpdateTime(integer $UpdateTime) 设置10位时间戳，例如1199116800。不填写系统取当前时间。
 */
class DDoSAllowBlockRule extends AbstractModel
{
    /**
     * @var string 客户端IP，支持格式有：单IP、IP范围、网段、网段范围。例如"1.1.1.1","1.1.1.2-1.1.1.3","1.2.1.0/24-1.2.2.0/24"。
     */
    public $Ip;

    /**
     * @var string 类型，取值有：
<li> block ：丢弃 ；</li><li> allow ：允许。</li>
     */
    public $Type;

    /**
     * @var integer 10位时间戳，例如1199116800。不填写系统取当前时间。
     */
    public $UpdateTime;

    /**
     * @param string $Ip 客户端IP，支持格式有：单IP、IP范围、网段、网段范围。例如"1.1.1.1","1.1.1.2-1.1.1.3","1.2.1.0/24-1.2.2.0/24"。
     * @param string $Type 类型，取值有：
<li> block ：丢弃 ；</li><li> allow ：允许。</li>
     * @param integer $UpdateTime 10位时间戳，例如1199116800。不填写系统取当前时间。
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

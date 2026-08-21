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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 接收机器人信息
 *
 * @method integer getID() 获取<p>机器人 ID</p>
 * @method void setID(integer $ID) 设置<p>机器人 ID</p>
 * @method string getName() 获取<p>机器人名称<br>入参限制：长度 1-20 个字符</p>
 * @method void setName(string $Name) 设置<p>机器人名称<br>入参限制：长度 1-20 个字符</p>
 * @method string getType() 获取<p>机器人类型<br>枚举值：<br>WEBHOOK：webhook 类型<br>SCF：云函数类型</p>
 * @method void setType(string $Type) 设置<p>机器人类型<br>枚举值：<br>WEBHOOK：webhook 类型<br>SCF：云函数类型</p>
 * @method string getWebhookAddr() 获取<p>Webhook 地址，仅 Type=WEBHOOK 时返回，否则为空串</p>
 * @method void setWebhookAddr(string $WebhookAddr) 设置<p>Webhook 地址，仅 Type=WEBHOOK 时返回，否则为空串</p>
 * @method string getSCFRegion() 获取<p>云函数地域，仅 Type=SCF 时返回</p>
 * @method void setSCFRegion(string $SCFRegion) 设置<p>云函数地域，仅 Type=SCF 时返回</p>
 * @method string getNamespace() 获取<p>云函数命名空间，仅 Type=SCF 时返回</p>
 * @method void setNamespace(string $Namespace) 设置<p>云函数命名空间，仅 Type=SCF 时返回</p>
 * @method string getFunctionName() 获取<p>云函数函数名，仅 Type=SCF 时返回</p>
 * @method void setFunctionName(string $FunctionName) 设置<p>云函数函数名，仅 Type=SCF 时返回</p>
 * @method string getFunctionVersion() 获取<p>云函数函数版本，仅 Type=SCF 时返回</p>
 * @method void setFunctionVersion(string $FunctionVersion) 设置<p>云函数函数版本，仅 Type=SCF 时返回</p>
 * @method string getAlias() 获取<p>云函数函数别名，仅 Type=SCF 时返回</p>
 * @method void setAlias(string $Alias) 设置<p>云函数函数别名，仅 Type=SCF 时返回</p>
 */
class WebhookReceiver extends AbstractModel
{
    /**
     * @var integer <p>机器人 ID</p>
     */
    public $ID;

    /**
     * @var string <p>机器人名称<br>入参限制：长度 1-20 个字符</p>
     */
    public $Name;

    /**
     * @var string <p>机器人类型<br>枚举值：<br>WEBHOOK：webhook 类型<br>SCF：云函数类型</p>
     */
    public $Type;

    /**
     * @var string <p>Webhook 地址，仅 Type=WEBHOOK 时返回，否则为空串</p>
     */
    public $WebhookAddr;

    /**
     * @var string <p>云函数地域，仅 Type=SCF 时返回</p>
     */
    public $SCFRegion;

    /**
     * @var string <p>云函数命名空间，仅 Type=SCF 时返回</p>
     */
    public $Namespace;

    /**
     * @var string <p>云函数函数名，仅 Type=SCF 时返回</p>
     */
    public $FunctionName;

    /**
     * @var string <p>云函数函数版本，仅 Type=SCF 时返回</p>
     */
    public $FunctionVersion;

    /**
     * @var string <p>云函数函数别名，仅 Type=SCF 时返回</p>
     */
    public $Alias;

    /**
     * @param integer $ID <p>机器人 ID</p>
     * @param string $Name <p>机器人名称<br>入参限制：长度 1-20 个字符</p>
     * @param string $Type <p>机器人类型<br>枚举值：<br>WEBHOOK：webhook 类型<br>SCF：云函数类型</p>
     * @param string $WebhookAddr <p>Webhook 地址，仅 Type=WEBHOOK 时返回，否则为空串</p>
     * @param string $SCFRegion <p>云函数地域，仅 Type=SCF 时返回</p>
     * @param string $Namespace <p>云函数命名空间，仅 Type=SCF 时返回</p>
     * @param string $FunctionName <p>云函数函数名，仅 Type=SCF 时返回</p>
     * @param string $FunctionVersion <p>云函数函数版本，仅 Type=SCF 时返回</p>
     * @param string $Alias <p>云函数函数别名，仅 Type=SCF 时返回</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("WebhookAddr",$param) and $param["WebhookAddr"] !== null) {
            $this->WebhookAddr = $param["WebhookAddr"];
        }

        if (array_key_exists("SCFRegion",$param) and $param["SCFRegion"] !== null) {
            $this->SCFRegion = $param["SCFRegion"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("FunctionVersion",$param) and $param["FunctionVersion"] !== null) {
            $this->FunctionVersion = $param["FunctionVersion"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}

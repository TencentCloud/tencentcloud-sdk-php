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
 * ModifyWebhookReceiver请求参数结构体
 *
 * @method string getName() 获取<p>机器人名称<br>入参限制：长度 1-20 个字符，租户内唯一</p>
 * @method void setName(string $Name) 设置<p>机器人名称<br>入参限制：长度 1-20 个字符，租户内唯一</p>
 * @method string getType() 获取<p>机器人类型<br>枚举值：<br>WEBHOOK：webhook 类型<br>SCF：云函数类型</p>
 * @method void setType(string $Type) 设置<p>机器人类型<br>枚举值：<br>WEBHOOK：webhook 类型<br>SCF：云函数类型</p>
 * @method integer getID() 获取<p>机器人 ID。大于 0 表示修改已有记录；等于 0 或不传表示新增<br>默认值：0</p>
 * @method void setID(integer $ID) 设置<p>机器人 ID。大于 0 表示修改已有记录；等于 0 或不传表示新增<br>默认值：0</p>
 * @method string getWebhookAddr() 获取<p>Webhook 地址<br>入参限制：Type=WEBHOOK 时必填，长度 1-2048，必须为合法 http(s) URL，且不允许内网地址</p>
 * @method void setWebhookAddr(string $WebhookAddr) 设置<p>Webhook 地址<br>入参限制：Type=WEBHOOK 时必填，长度 1-2048，必须为合法 http(s) URL，且不允许内网地址</p>
 * @method string getSCFRegion() 获取<p>云函数地域，例如 ap-guangzhou<br>入参限制：Type=SCF 时必填</p>
 * @method void setSCFRegion(string $SCFRegion) 设置<p>云函数地域，例如 ap-guangzhou<br>入参限制：Type=SCF 时必填</p>
 * @method string getNamespace() 获取<p>云函数命名空间<br>入参限制：Type=SCF 时必填<br>取值参考：通过 DescribeSCFNamespaceList 接口获取</p>
 * @method void setNamespace(string $Namespace) 设置<p>云函数命名空间<br>入参限制：Type=SCF 时必填<br>取值参考：通过 DescribeSCFNamespaceList 接口获取</p>
 * @method string getFunctionName() 获取<p>云函数名称<br>入参限制：Type=SCF 时必填<br>取值参考：通过 DescribeSCFFunctionList 接口获取</p>
 * @method void setFunctionName(string $FunctionName) 设置<p>云函数名称<br>入参限制：Type=SCF 时必填<br>取值参考：通过 DescribeSCFFunctionList 接口获取</p>
 * @method string getFunctionVersion() 获取<p>云函数版本<br>入参限制：Type=SCF 时必填，例如 $LATEST<br>取值参考：通过 DescribeSCFFunctionVersionList 接口获取</p>
 * @method void setFunctionVersion(string $FunctionVersion) 设置<p>云函数版本<br>入参限制：Type=SCF 时必填，例如 $LATEST<br>取值参考：通过 DescribeSCFFunctionVersionList 接口获取</p>
 * @method string getAlias() 获取<p>云函数别名<br>入参限制：Type=SCF 时必填，例如 $DEFAULT<br>取值参考：通过 DescribeSCFAliasList 接口获取</p>
 * @method void setAlias(string $Alias) 设置<p>云函数别名<br>入参限制：Type=SCF 时必填，例如 $DEFAULT<br>取值参考：通过 DescribeSCFAliasList 接口获取</p>
 */
class ModifyWebhookReceiverRequest extends AbstractModel
{
    /**
     * @var string <p>机器人名称<br>入参限制：长度 1-20 个字符，租户内唯一</p>
     */
    public $Name;

    /**
     * @var string <p>机器人类型<br>枚举值：<br>WEBHOOK：webhook 类型<br>SCF：云函数类型</p>
     */
    public $Type;

    /**
     * @var integer <p>机器人 ID。大于 0 表示修改已有记录；等于 0 或不传表示新增<br>默认值：0</p>
     */
    public $ID;

    /**
     * @var string <p>Webhook 地址<br>入参限制：Type=WEBHOOK 时必填，长度 1-2048，必须为合法 http(s) URL，且不允许内网地址</p>
     */
    public $WebhookAddr;

    /**
     * @var string <p>云函数地域，例如 ap-guangzhou<br>入参限制：Type=SCF 时必填</p>
     */
    public $SCFRegion;

    /**
     * @var string <p>云函数命名空间<br>入参限制：Type=SCF 时必填<br>取值参考：通过 DescribeSCFNamespaceList 接口获取</p>
     */
    public $Namespace;

    /**
     * @var string <p>云函数名称<br>入参限制：Type=SCF 时必填<br>取值参考：通过 DescribeSCFFunctionList 接口获取</p>
     */
    public $FunctionName;

    /**
     * @var string <p>云函数版本<br>入参限制：Type=SCF 时必填，例如 $LATEST<br>取值参考：通过 DescribeSCFFunctionVersionList 接口获取</p>
     */
    public $FunctionVersion;

    /**
     * @var string <p>云函数别名<br>入参限制：Type=SCF 时必填，例如 $DEFAULT<br>取值参考：通过 DescribeSCFAliasList 接口获取</p>
     */
    public $Alias;

    /**
     * @param string $Name <p>机器人名称<br>入参限制：长度 1-20 个字符，租户内唯一</p>
     * @param string $Type <p>机器人类型<br>枚举值：<br>WEBHOOK：webhook 类型<br>SCF：云函数类型</p>
     * @param integer $ID <p>机器人 ID。大于 0 表示修改已有记录；等于 0 或不传表示新增<br>默认值：0</p>
     * @param string $WebhookAddr <p>Webhook 地址<br>入参限制：Type=WEBHOOK 时必填，长度 1-2048，必须为合法 http(s) URL，且不允许内网地址</p>
     * @param string $SCFRegion <p>云函数地域，例如 ap-guangzhou<br>入参限制：Type=SCF 时必填</p>
     * @param string $Namespace <p>云函数命名空间<br>入参限制：Type=SCF 时必填<br>取值参考：通过 DescribeSCFNamespaceList 接口获取</p>
     * @param string $FunctionName <p>云函数名称<br>入参限制：Type=SCF 时必填<br>取值参考：通过 DescribeSCFFunctionList 接口获取</p>
     * @param string $FunctionVersion <p>云函数版本<br>入参限制：Type=SCF 时必填，例如 $LATEST<br>取值参考：通过 DescribeSCFFunctionVersionList 接口获取</p>
     * @param string $Alias <p>云函数别名<br>入参限制：Type=SCF 时必填，例如 $DEFAULT<br>取值参考：通过 DescribeSCFAliasList 接口获取</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
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

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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateChannelOrganizationInfoChangeUrl请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括子客企业及应用编、号等详细内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括子客企业及应用编、号等详细内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。
 * @method integer getChangeType() 获取企业信息变更类型，可选类型如下：
<ul><li>**1**：企业超管变更</li><li>**2**：企业基础信息变更</li></ul>
 * @method void setChangeType(integer $ChangeType) 设置企业信息变更类型，可选类型如下：
<ul><li>**1**：企业超管变更</li><li>**2**：企业基础信息变更</li></ul>
 */
class CreateChannelOrganizationInfoChangeUrlRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括子客企业及应用编、号等详细内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。
     */
    public $Agent;

    /**
     * @var integer 企业信息变更类型，可选类型如下：
<ul><li>**1**：企业超管变更</li><li>**2**：企业基础信息变更</li></ul>
     */
    public $ChangeType;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括子客企业及应用编、号等详细内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。
     * @param integer $ChangeType 企业信息变更类型，可选类型如下：
<ul><li>**1**：企业超管变更</li><li>**2**：企业基础信息变更</li></ul>
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ChangeType",$param) and $param["ChangeType"] !== null) {
            $this->ChangeType = $param["ChangeType"];
        }
    }
}

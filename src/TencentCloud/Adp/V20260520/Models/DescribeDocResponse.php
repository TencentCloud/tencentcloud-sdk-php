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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDoc返回参数结构体
 *
 * @method DocLink getDocLink() 获取<p>文档链接（外部链接 + COS 链接）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocLink(DocLink $DocLink) 设置<p>文档链接（外部链接 + COS 链接）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DocParseConfig getParseConfig() 获取<p>解析配置（分割规则、内容过滤等）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParseConfig(DocParseConfig $ParseConfig) 设置<p>解析配置（分割规则、内容过滤等）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DocSummary getSummary() 获取<p>文档基础信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSummary(DocSummary $Summary) 设置<p>文档基础信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DocSwitch getSwitch() 获取<p>开关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(DocSwitch $Switch) 设置<p>开关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DocUpdatePeriod getUpdatePeriod() 获取<p>更新周期配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatePeriod(DocUpdatePeriod $UpdatePeriod) 设置<p>更新周期配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method UserAccessConfig getUserAccessConfig() 获取<p>用户访问配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAccessConfig(UserAccessConfig $UserAccessConfig) 设置<p>用户访问配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDocResponse extends AbstractModel
{
    /**
     * @var DocLink <p>文档链接（外部链接 + COS 链接）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocLink;

    /**
     * @var DocParseConfig <p>解析配置（分割规则、内容过滤等）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParseConfig;

    /**
     * @var DocSummary <p>文档基础信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Summary;

    /**
     * @var DocSwitch <p>开关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var DocUpdatePeriod <p>更新周期配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatePeriod;

    /**
     * @var UserAccessConfig <p>用户访问配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAccessConfig;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param DocLink $DocLink <p>文档链接（外部链接 + COS 链接）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DocParseConfig $ParseConfig <p>解析配置（分割规则、内容过滤等）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DocSummary $Summary <p>文档基础信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DocSwitch $Switch <p>开关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DocUpdatePeriod $UpdatePeriod <p>更新周期配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param UserAccessConfig $UserAccessConfig <p>用户访问配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DocLink",$param) and $param["DocLink"] !== null) {
            $this->DocLink = new DocLink();
            $this->DocLink->deserialize($param["DocLink"]);
        }

        if (array_key_exists("ParseConfig",$param) and $param["ParseConfig"] !== null) {
            $this->ParseConfig = new DocParseConfig();
            $this->ParseConfig->deserialize($param["ParseConfig"]);
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = new DocSummary();
            $this->Summary->deserialize($param["Summary"]);
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = new DocSwitch();
            $this->Switch->deserialize($param["Switch"]);
        }

        if (array_key_exists("UpdatePeriod",$param) and $param["UpdatePeriod"] !== null) {
            $this->UpdatePeriod = new DocUpdatePeriod();
            $this->UpdatePeriod->deserialize($param["UpdatePeriod"]);
        }

        if (array_key_exists("UserAccessConfig",$param) and $param["UserAccessConfig"] !== null) {
            $this->UserAccessConfig = new UserAccessConfig();
            $this->UserAccessConfig->deserialize($param["UserAccessConfig"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

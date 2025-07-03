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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccessIndex返回参数结构体
 *
 * @method boolean getStatus() 获取是否生效，true表示生效，false表示未生效
 * @method void setStatus(boolean $Status) 设置是否生效，true表示生效，false表示未生效
 * @method AccessRuleInfo getRule() 获取索引配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRule(AccessRuleInfo $Rule) 设置索引配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取索引修改时间，初始值为索引创建时间。
 * @method void setModifyTime(string $ModifyTime) 设置索引修改时间，初始值为索引创建时间。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAccessIndexResponse extends AbstractModel
{
    /**
     * @var boolean 是否生效，true表示生效，false表示未生效
     */
    public $Status;

    /**
     * @var AccessRuleInfo 索引配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rule;

    /**
     * @var string 索引修改时间，初始值为索引创建时间。
     */
    public $ModifyTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $Status 是否生效，true表示生效，false表示未生效
     * @param AccessRuleInfo $Rule 索引配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 索引修改时间，初始值为索引创建时间。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new AccessRuleInfo();
            $this->Rule->deserialize($param["Rule"]);
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

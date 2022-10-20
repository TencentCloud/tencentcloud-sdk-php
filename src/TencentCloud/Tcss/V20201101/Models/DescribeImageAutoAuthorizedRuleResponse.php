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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageAutoAuthorizedRule返回参数结构体
 *
 * @method integer getIsEnabled() 获取规则是否生效，0:不生效，1:已生效
 * @method void setIsEnabled(integer $IsEnabled) 设置规则是否生效，0:不生效，1:已生效
 * @method string getRangeType() 获取授权范围类别，MANUAL:自选主机节点，ALL:全部镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRangeType(string $RangeType) 设置授权范围类别，MANUAL:自选主机节点，ALL:全部镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHostCount() 获取授权范围是自选主机时的主机数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostCount(integer $HostCount) 设置授权范围是自选主机时的主机数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxDailyCount() 获取每天最大的镜像授权数限制, 0表示无限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxDailyCount(integer $MaxDailyCount) 设置每天最大的镜像授权数限制, 0表示无限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleId() 获取规则id，用未设置时为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置规则id，用未设置时为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeImageAutoAuthorizedRuleResponse extends AbstractModel
{
    /**
     * @var integer 规则是否生效，0:不生效，1:已生效
     */
    public $IsEnabled;

    /**
     * @var string 授权范围类别，MANUAL:自选主机节点，ALL:全部镜像
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RangeType;

    /**
     * @var integer 授权范围是自选主机时的主机数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostCount;

    /**
     * @var integer 每天最大的镜像授权数限制, 0表示无限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxDailyCount;

    /**
     * @var integer 规则id，用未设置时为0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $IsEnabled 规则是否生效，0:不生效，1:已生效
     * @param string $RangeType 授权范围类别，MANUAL:自选主机节点，ALL:全部镜像
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HostCount 授权范围是自选主机时的主机数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxDailyCount 每天最大的镜像授权数限制, 0表示无限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleId 规则id，用未设置时为0
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("RangeType",$param) and $param["RangeType"] !== null) {
            $this->RangeType = $param["RangeType"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("MaxDailyCount",$param) and $param["MaxDailyCount"] !== null) {
            $this->MaxDailyCount = $param["MaxDailyCount"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

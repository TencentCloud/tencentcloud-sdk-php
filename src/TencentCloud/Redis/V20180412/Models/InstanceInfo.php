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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例信息
 *
 * @method string getInstanceName() 获取<p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectId() 获取<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubStatus() 获取<p>流程中的实例返回的子状态。</p><p>枚举值：</p><ul><li>0： 磁盘只读，</li></ul>
 * @method void setSubStatus(integer $SubStatus) 设置<p>流程中的实例返回的子状态。</p><p>枚举值：</p><ul><li>0： 磁盘只读，</li></ul>
 * @method string getRegion() 获取<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取<p>区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置<p>区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDegradeStrategy() 获取<p>降级策略，单位：毫秒，实例P99达到降级策略后，审计数据自动丢弃，优先保障业务的可用性,默认值：500毫秒，范围值：300-1000毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDegradeStrategy(integer $DegradeStrategy) 设置<p>降级策略，单位：毫秒，实例P99达到降级策略后，审计数据自动丢弃，优先保障业务的可用性,默认值：500毫秒，范围值：300-1000毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceTags() 获取<p>标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceTags(array $InstanceTags) 设置<p>标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取<p>架构版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置<p>架构版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string <p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var integer <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var integer <p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer <p>流程中的实例返回的子状态。</p><p>枚举值：</p><ul><li>0： 磁盘只读，</li></ul>
     */
    public $SubStatus;

    /**
     * @var string <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string <p>区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var integer <p>降级策略，单位：毫秒，实例P99达到降级策略后，审计数据自动丢弃，优先保障业务的可用性,默认值：500毫秒，范围值：300-1000毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DegradeStrategy;

    /**
     * @var array <p>标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceTags;

    /**
     * @var integer <p>架构版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @param string $InstanceName <p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectId <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubStatus <p>流程中的实例返回的子状态。</p><p>枚举值：</p><ul><li>0： 磁盘只读，</li></ul>
     * @param string $Region <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone <p>区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DegradeStrategy <p>降级策略，单位：毫秒，实例P99达到降级策略后，审计数据自动丢弃，优先保障业务的可用性,默认值：500毫秒，范围值：300-1000毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceTags <p>标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type <p>架构版本</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = $param["SubStatus"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DegradeStrategy",$param) and $param["DegradeStrategy"] !== null) {
            $this->DegradeStrategy = $param["DegradeStrategy"];
        }

        if (array_key_exists("InstanceTags",$param) and $param["InstanceTags"] !== null) {
            $this->InstanceTags = [];
            foreach ($param["InstanceTags"] as $key => $value){
                $obj = new InstanceTagInfo();
                $obj->deserialize($value);
                array_push($this->InstanceTags, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}

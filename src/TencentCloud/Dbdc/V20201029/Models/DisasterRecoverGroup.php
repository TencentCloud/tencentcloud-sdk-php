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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DB Custom 置放群组信息。
 *
 * @method string getDisasterRecoverGroupId() 获取<p>置放群组ID</p>
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) 设置<p>置放群组ID</p>
 * @method string getName() 获取<p>置放群组名称</p>
 * @method void setName(string $Name) 设置<p>置放群组名称</p>
 * @method string getType() 获取<p>置放群组类型</p><p>枚举值：</p><ul><li>HOST： 物理机</li></ul>
 * @method void setType(string $Type) 设置<p>置放群组类型</p><p>枚举值：</p><ul><li>HOST： 物理机</li></ul>
 * @method string getStatus() 获取<p>置放群组状态</p><p>枚举值：</p><ul><li>Creating： 创建中</li><li>Available： 正常可使用</li><li>CreateFailed： 创建失败</li><li>Deleting： 删除中</li><li>Modifying： 变更中</li></ul>
 * @method void setStatus(string $Status) 设置<p>置放群组状态</p><p>枚举值：</p><ul><li>Creating： 创建中</li><li>Available： 正常可使用</li><li>CreateFailed： 创建失败</li><li>Deleting： 删除中</li><li>Modifying： 变更中</li></ul>
 * @method integer getNodeQuotaTotal() 获取<p>置放群组内最大容纳节点数</p>
 * @method void setNodeQuotaTotal(integer $NodeQuotaTotal) 设置<p>置放群组内最大容纳节点数</p>
 * @method integer getCurrentNum() 获取<p>置放群组内当前节点数</p>
 * @method void setCurrentNum(integer $CurrentNum) 设置<p>置放群组内当前节点数</p>
 * @method integer getAffinity() 获取<p>亲和度</p><p>取值范围：[1, 10]</p>
 * @method void setAffinity(integer $Affinity) 设置<p>亲和度</p><p>取值范围：[1, 10]</p>
 * @method string getStrategy() 获取<p>置放群组策略</p><p>枚举值：</p><ul><li>SPREAD： 分散置放群组</li></ul>
 * @method void setStrategy(string $Strategy) 设置<p>置放群组策略</p><p>枚举值：</p><ul><li>SPREAD： 分散置放群组</li></ul>
 * @method string getCreatedTime() 获取<p>创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
 * @method array getTags() 获取<p>标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodeIds() 获取<p>置放群组内 DB Custom 节点数量</p>
 * @method void setNodeIds(array $NodeIds) 设置<p>置放群组内 DB Custom 节点数量</p>
 */
class DisasterRecoverGroup extends AbstractModel
{
    /**
     * @var string <p>置放群组ID</p>
     */
    public $DisasterRecoverGroupId;

    /**
     * @var string <p>置放群组名称</p>
     */
    public $Name;

    /**
     * @var string <p>置放群组类型</p><p>枚举值：</p><ul><li>HOST： 物理机</li></ul>
     */
    public $Type;

    /**
     * @var string <p>置放群组状态</p><p>枚举值：</p><ul><li>Creating： 创建中</li><li>Available： 正常可使用</li><li>CreateFailed： 创建失败</li><li>Deleting： 删除中</li><li>Modifying： 变更中</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>置放群组内最大容纳节点数</p>
     */
    public $NodeQuotaTotal;

    /**
     * @var integer <p>置放群组内当前节点数</p>
     */
    public $CurrentNum;

    /**
     * @var integer <p>亲和度</p><p>取值范围：[1, 10]</p>
     */
    public $Affinity;

    /**
     * @var string <p>置放群组策略</p><p>枚举值：</p><ul><li>SPREAD： 分散置放群组</li></ul>
     */
    public $Strategy;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var array <p>标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array <p>置放群组内 DB Custom 节点数量</p>
     */
    public $NodeIds;

    /**
     * @param string $DisasterRecoverGroupId <p>置放群组ID</p>
     * @param string $Name <p>置放群组名称</p>
     * @param string $Type <p>置放群组类型</p><p>枚举值：</p><ul><li>HOST： 物理机</li></ul>
     * @param string $Status <p>置放群组状态</p><p>枚举值：</p><ul><li>Creating： 创建中</li><li>Available： 正常可使用</li><li>CreateFailed： 创建失败</li><li>Deleting： 删除中</li><li>Modifying： 变更中</li></ul>
     * @param integer $NodeQuotaTotal <p>置放群组内最大容纳节点数</p>
     * @param integer $CurrentNum <p>置放群组内当前节点数</p>
     * @param integer $Affinity <p>亲和度</p><p>取值范围：[1, 10]</p>
     * @param string $Strategy <p>置放群组策略</p><p>枚举值：</p><ul><li>SPREAD： 分散置放群组</li></ul>
     * @param string $CreatedTime <p>创建时间</p>
     * @param array $Tags <p>标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NodeIds <p>置放群组内 DB Custom 节点数量</p>
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
        if (array_key_exists("DisasterRecoverGroupId",$param) and $param["DisasterRecoverGroupId"] !== null) {
            $this->DisasterRecoverGroupId = $param["DisasterRecoverGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NodeQuotaTotal",$param) and $param["NodeQuotaTotal"] !== null) {
            $this->NodeQuotaTotal = $param["NodeQuotaTotal"];
        }

        if (array_key_exists("CurrentNum",$param) and $param["CurrentNum"] !== null) {
            $this->CurrentNum = $param["CurrentNum"];
        }

        if (array_key_exists("Affinity",$param) and $param["Affinity"] !== null) {
            $this->Affinity = $param["Affinity"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("NodeIds",$param) and $param["NodeIds"] !== null) {
            $this->NodeIds = $param["NodeIds"];
        }
    }
}

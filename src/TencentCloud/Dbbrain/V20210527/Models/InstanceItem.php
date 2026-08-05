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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库实例基本信息
 *
 * @method string getInstanceId() 获取<p>实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。</p>
 * @method string getProduct() 获取<p>数据库类型，如 mysql、cynosdb、mariadb、dcdb、mongodb、postgres、redis、dbbrain-mysql、tdstore。</p>
 * @method void setProduct(string $Product) 设置<p>数据库类型，如 mysql、cynosdb、mariadb、dcdb、mongodb、postgres、redis、dbbrain-mysql、tdstore。</p>
 * @method string getRegion() 获取<p>地域英文ID。</p>
 * @method void setRegion(string $Region) 设置<p>地域英文ID。</p>
 * @method string getClusterId() 获取<p>集群ID，仅集群类产品返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID，仅集群类产品返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineVersion() 获取<p>引擎版本。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineVersion(string $EngineVersion) 设置<p>引擎版本。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>实例状态，1表示运行中。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>实例状态，1表示运行中。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>实例创建时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>实例创建时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeadlineTime() 获取<p>实例到期时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadlineTime(string $DeadlineTime) 设置<p>实例到期时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceItem extends AbstractModel
{
    /**
     * @var string <p>实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>数据库类型，如 mysql、cynosdb、mariadb、dcdb、mongodb、postgres、redis、dbbrain-mysql、tdstore。</p>
     */
    public $Product;

    /**
     * @var string <p>地域英文ID。</p>
     */
    public $Region;

    /**
     * @var string <p>集群ID，仅集群类产品返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string <p>引擎版本。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineVersion;

    /**
     * @var integer <p>实例状态，1表示运行中。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>实例创建时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>实例到期时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadlineTime;

    /**
     * @param string $InstanceId <p>实例ID。</p>
     * @param string $Product <p>数据库类型，如 mysql、cynosdb、mariadb、dcdb、mongodb、postgres、redis、dbbrain-mysql、tdstore。</p>
     * @param string $Region <p>地域英文ID。</p>
     * @param string $ClusterId <p>集群ID，仅集群类产品返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineVersion <p>引擎版本。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>实例状态，1表示运行中。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>实例创建时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeadlineTime <p>实例到期时间。</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }
    }
}

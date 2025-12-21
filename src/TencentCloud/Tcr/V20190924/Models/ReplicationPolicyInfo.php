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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例复制/实例同步策略信息ID
 *
 * @method integer getID() 获取策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(integer $ID) 设置策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取策略名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置策略名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取策略描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置策略描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFilters() 获取策略过滤条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilters(array $Filters) 设置策略过滤条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOverride() 获取是否覆盖对端同名镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOverride(boolean $Override) 设置是否覆盖对端同名镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnabled() 获取是否开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnabled(boolean $Enabled) 设置是否开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcResource() 获取源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcResource(string $SrcResource) 设置源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDestResource() 获取目的资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestResource(string $DestResource) 设置目的资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTime(string $CreationTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReplicationPolicyInfo extends AbstractModel
{
    /**
     * @var integer 策略ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string 策略名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 策略描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array 策略过滤条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Filters;

    /**
     * @var boolean 是否覆盖对端同名镜像
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Override;

    /**
     * @var boolean 是否开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enabled;

    /**
     * @var string 源信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcResource;

    /**
     * @var string 目的资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DestResource;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param integer $ID 策略ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 策略名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 策略描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Filters 策略过滤条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Override 是否覆盖对端同名镜像
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Enabled 是否开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcResource 源信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DestResource 目的资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new PolicyFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Override",$param) and $param["Override"] !== null) {
            $this->Override = $param["Override"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("SrcResource",$param) and $param["SrcResource"] !== null) {
            $this->SrcResource = $param["SrcResource"];
        }

        if (array_key_exists("DestResource",$param) and $param["DestResource"] !== null) {
            $this->DestResource = $param["DestResource"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

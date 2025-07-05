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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生实例详情
 *
 * @method integer getID() 获取ID值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(integer $ID) 设置ID值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取cdwch-cn或者其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置cdwch-cn或者其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取cdwch-cn或者其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置cdwch-cn或者其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取Running
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置Running
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusDesc() 获取运行中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusDesc(string $StatusDesc) 设置运行中
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceStateInfo getInstanceStateInfo() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceStateInfo(InstanceStateInfo $InstanceStateInfo) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceID() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceID(string $InstanceID) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResources() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResources(array $Resources) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 */
class CnInstanceInfo extends AbstractModel
{
    /**
     * @var integer ID值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string cdwch-cn或者其他
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string cdwch-cn或者其他
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string Running
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 运行中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusDesc;

    /**
     * @var InstanceStateInfo 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceStateInfo;

    /**
     * @var string -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceID;

    /**
     * @var array 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resources;

    /**
     * @param integer $ID ID值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType cdwch-cn或者其他
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName cdwch-cn或者其他
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status Running
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusDesc 运行中
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceStateInfo $InstanceStateInfo 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceID -
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Resources 无
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

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("InstanceStateInfo",$param) and $param["InstanceStateInfo"] !== null) {
            $this->InstanceStateInfo = new InstanceStateInfo();
            $this->InstanceStateInfo->deserialize($param["InstanceStateInfo"]);
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new CNResource();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }
    }
}

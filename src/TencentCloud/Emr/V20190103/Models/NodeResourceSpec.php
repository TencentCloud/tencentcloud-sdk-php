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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源详情
 *
 * @method string getInstanceType() 获取规格类型，如S2.MEDIUM8
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置规格类型，如S2.MEDIUM8
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSystemDisk() 获取系统盘，系统盘个数不超过1块
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemDisk(array $SystemDisk) 设置系统盘，系统盘个数不超过1块
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取需要绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置需要绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataDisk() 获取云数据盘，云数据盘总个数不超过15块
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataDisk(array $DataDisk) 设置云数据盘，云数据盘总个数不超过15块
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLocalDataDisk() 获取本地数据盘
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalDataDisk(array $LocalDataDisk) 设置本地数据盘
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodeResourceSpec extends AbstractModel
{
    /**
     * @var string 规格类型，如S2.MEDIUM8
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var array 系统盘，系统盘个数不超过1块
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemDisk;

    /**
     * @var array 需要绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array 云数据盘，云数据盘总个数不超过15块
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataDisk;

    /**
     * @var array 本地数据盘
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalDataDisk;

    /**
     * @param string $InstanceType 规格类型，如S2.MEDIUM8
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SystemDisk 系统盘，系统盘个数不超过1块
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 需要绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataDisk 云数据盘，云数据盘总个数不超过15块
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LocalDataDisk 本地数据盘
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = [];
            foreach ($param["SystemDisk"] as $key => $value){
                $obj = new DiskSpecInfo();
                $obj->deserialize($value);
                array_push($this->SystemDisk, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $this->DataDisk = [];
            foreach ($param["DataDisk"] as $key => $value){
                $obj = new DiskSpecInfo();
                $obj->deserialize($value);
                array_push($this->DataDisk, $obj);
            }
        }

        if (array_key_exists("LocalDataDisk",$param) and $param["LocalDataDisk"] !== null) {
            $this->LocalDataDisk = [];
            foreach ($param["LocalDataDisk"] as $key => $value){
                $obj = new DiskSpecInfo();
                $obj->deserialize($value);
                array_push($this->LocalDataDisk, $obj);
            }
        }
    }
}

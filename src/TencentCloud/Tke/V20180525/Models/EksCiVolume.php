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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EKS Instance Volume,  可选包括CbsVolume和NfsVolume
 *
 * @method array getCbsVolumes() 获取Cbs Volume
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCbsVolumes(array $CbsVolumes) 设置Cbs Volume
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNfsVolumes() 获取Nfs Volume
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNfsVolumes(array $NfsVolumes) 设置Nfs Volume
注意：此字段可能返回 null，表示取不到有效值。
 */
class EksCiVolume extends AbstractModel
{
    /**
     * @var array Cbs Volume
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CbsVolumes;

    /**
     * @var array Nfs Volume
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NfsVolumes;

    /**
     * @param array $CbsVolumes Cbs Volume
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NfsVolumes Nfs Volume
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
        if (array_key_exists("CbsVolumes",$param) and $param["CbsVolumes"] !== null) {
            $this->CbsVolumes = [];
            foreach ($param["CbsVolumes"] as $key => $value){
                $obj = new CbsVolume();
                $obj->deserialize($value);
                array_push($this->CbsVolumes, $obj);
            }
        }

        if (array_key_exists("NfsVolumes",$param) and $param["NfsVolumes"] !== null) {
            $this->NfsVolumes = [];
            foreach ($param["NfsVolumes"] as $key => $value){
                $obj = new NfsVolume();
                $obj->deserialize($value);
                array_push($this->NfsVolumes, $obj);
            }
        }
    }
}

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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 同步字典数据
 *
 * @method string getHospitalId() 获取医院ID
 * @method void setHospitalId(string $HospitalId) 设置医院ID
 * @method integer getDictType() 获取字典类型 1-给药频次 2-给药途径 3-科室 4-诊断
 * @method void setDictType(integer $DictType) 设置字典类型 1-给药频次 2-给药途径 3-科室 4-诊断
 * @method array getDicts() 获取字典数据
 * @method void setDicts(array $Dicts) 设置字典数据
 */
class SyncDictData extends AbstractModel
{
    /**
     * @var string 医院ID
     */
    public $HospitalId;

    /**
     * @var integer 字典类型 1-给药频次 2-给药途径 3-科室 4-诊断
     */
    public $DictType;

    /**
     * @var array 字典数据
     */
    public $Dicts;

    /**
     * @param string $HospitalId 医院ID
     * @param integer $DictType 字典类型 1-给药频次 2-给药途径 3-科室 4-诊断
     * @param array $Dicts 字典数据
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
        if (array_key_exists("HospitalId",$param) and $param["HospitalId"] !== null) {
            $this->HospitalId = $param["HospitalId"];
        }

        if (array_key_exists("DictType",$param) and $param["DictType"] !== null) {
            $this->DictType = $param["DictType"];
        }

        if (array_key_exists("Dicts",$param) and $param["Dicts"] !== null) {
            $this->Dicts = [];
            foreach ($param["Dicts"] as $key => $value){
                $obj = new Dict();
                $obj->deserialize($value);
                array_push($this->Dicts, $obj);
            }
        }
    }
}

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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机房管理单元
 *
 * @method integer getIdcUnitId() 获取机房管理单元 ID
 * @method void setIdcUnitId(integer $IdcUnitId) 设置机房管理单元 ID
 * @method string getIdcUnitName() 获取机房管理单元名称
 * @method void setIdcUnitName(string $IdcUnitName) 设置机房管理单元名称
 * @method array getCageSet() 获取围笼列表
 * @method void setCageSet(array $CageSet) 设置围笼列表
 */
class IdcUnit extends AbstractModel
{
    /**
     * @var integer 机房管理单元 ID
     */
    public $IdcUnitId;

    /**
     * @var string 机房管理单元名称
     */
    public $IdcUnitName;

    /**
     * @var array 围笼列表
     */
    public $CageSet;

    /**
     * @param integer $IdcUnitId 机房管理单元 ID
     * @param string $IdcUnitName 机房管理单元名称
     * @param array $CageSet 围笼列表
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
        if (array_key_exists("IdcUnitId",$param) and $param["IdcUnitId"] !== null) {
            $this->IdcUnitId = $param["IdcUnitId"];
        }

        if (array_key_exists("IdcUnitName",$param) and $param["IdcUnitName"] !== null) {
            $this->IdcUnitName = $param["IdcUnitName"];
        }

        if (array_key_exists("CageSet",$param) and $param["CageSet"] !== null) {
            $this->CageSet = [];
            foreach ($param["CageSet"] as $key => $value){
                $obj = new Cage();
                $obj->deserialize($value);
                array_push($this->CageSet, $obj);
            }
        }
    }
}

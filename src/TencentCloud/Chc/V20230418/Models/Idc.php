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
 * 机房信息
 *
 * @method string getIdcName() 获取机房名称
 * @method void setIdcName(string $IdcName) 设置机房名称
 * @method integer getIdcId() 获取机房ID
 * @method void setIdcId(integer $IdcId) 设置机房ID
 * @method array getIdcUnitSet() 获取机房管理单元详情列表
 * @method void setIdcUnitSet(array $IdcUnitSet) 设置机房管理单元详情列表
 */
class Idc extends AbstractModel
{
    /**
     * @var string 机房名称
     */
    public $IdcName;

    /**
     * @var integer 机房ID
     */
    public $IdcId;

    /**
     * @var array 机房管理单元详情列表
     */
    public $IdcUnitSet;

    /**
     * @param string $IdcName 机房名称
     * @param integer $IdcId 机房ID
     * @param array $IdcUnitSet 机房管理单元详情列表
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
        if (array_key_exists("IdcName",$param) and $param["IdcName"] !== null) {
            $this->IdcName = $param["IdcName"];
        }

        if (array_key_exists("IdcId",$param) and $param["IdcId"] !== null) {
            $this->IdcId = $param["IdcId"];
        }

        if (array_key_exists("IdcUnitSet",$param) and $param["IdcUnitSet"] !== null) {
            $this->IdcUnitSet = [];
            foreach ($param["IdcUnitSet"] as $key => $value){
                $obj = new IdcUnit();
                $obj->deserialize($value);
                array_push($this->IdcUnitSet, $obj);
            }
        }
    }
}

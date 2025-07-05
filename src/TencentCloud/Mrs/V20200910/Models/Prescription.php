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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 处方单
 *
 * @method array getMedicineList() 获取药品列表
 * @method void setMedicineList(array $MedicineList) 设置药品列表
 * @method integer getPage() 获取数据在原PDF文件中的第几页
 * @method void setPage(integer $Page) 设置数据在原PDF文件中的第几页
 */
class Prescription extends AbstractModel
{
    /**
     * @var array 药品列表
     */
    public $MedicineList;

    /**
     * @var integer 数据在原PDF文件中的第几页
     */
    public $Page;

    /**
     * @param array $MedicineList 药品列表
     * @param integer $Page 数据在原PDF文件中的第几页
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
        if (array_key_exists("MedicineList",$param) and $param["MedicineList"] !== null) {
            $this->MedicineList = [];
            foreach ($param["MedicineList"] as $key => $value){
                $obj = new Medicine();
                $obj->deserialize($value);
                array_push($this->MedicineList, $obj);
            }
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
    }
}

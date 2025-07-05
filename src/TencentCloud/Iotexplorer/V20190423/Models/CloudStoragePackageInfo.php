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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云存套餐包信息
 *
 * @method string getPackageId() 获取套餐包id
 * @method void setPackageId(string $PackageId) 设置套餐包id
 * @method string getPackageName() 获取套餐包名字
 * @method void setPackageName(string $PackageName) 设置套餐包名字
 * @method integer getNum() 获取套餐包数量
 * @method void setNum(integer $Num) 设置套餐包数量
 * @method integer getUsedNum() 获取已使用数量
 * @method void setUsedNum(integer $UsedNum) 设置已使用数量
 */
class CloudStoragePackageInfo extends AbstractModel
{
    /**
     * @var string 套餐包id
     */
    public $PackageId;

    /**
     * @var string 套餐包名字
     */
    public $PackageName;

    /**
     * @var integer 套餐包数量
     */
    public $Num;

    /**
     * @var integer 已使用数量
     */
    public $UsedNum;

    /**
     * @param string $PackageId 套餐包id
     * @param string $PackageName 套餐包名字
     * @param integer $Num 套餐包数量
     * @param integer $UsedNum 已使用数量
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
        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("UsedNum",$param) and $param["UsedNum"] !== null) {
            $this->UsedNum = $param["UsedNum"];
        }
    }
}

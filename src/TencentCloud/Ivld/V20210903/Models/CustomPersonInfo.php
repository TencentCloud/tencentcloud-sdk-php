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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义人物信息
 *
 * @method string getPersonId() 获取自定义人物Id
 * @method void setPersonId(string $PersonId) 设置自定义人物Id
 * @method string getName() 获取自定义人物姓名
 * @method void setName(string $Name) 设置自定义人物姓名
 * @method string getBasicInfo() 获取自定义人物简介信息
 * @method void setBasicInfo(string $BasicInfo) 设置自定义人物简介信息
 * @method string getL1Category() 获取一级自定义人物类型
 * @method void setL1Category(string $L1Category) 设置一级自定义人物类型
 * @method string getL2Category() 获取二级自定义人物类型
 * @method void setL2Category(string $L2Category) 设置二级自定义人物类型
 * @method array getImageInfoSet() 获取自定义人物图片信息
 * @method void setImageInfoSet(array $ImageInfoSet) 设置自定义人物图片信息
 * @method string getCreateTime() 获取自定义人物创建时间
 * @method void setCreateTime(string $CreateTime) 设置自定义人物创建时间
 */
class CustomPersonInfo extends AbstractModel
{
    /**
     * @var string 自定义人物Id
     */
    public $PersonId;

    /**
     * @var string 自定义人物姓名
     */
    public $Name;

    /**
     * @var string 自定义人物简介信息
     */
    public $BasicInfo;

    /**
     * @var string 一级自定义人物类型
     */
    public $L1Category;

    /**
     * @var string 二级自定义人物类型
     */
    public $L2Category;

    /**
     * @var array 自定义人物图片信息
     */
    public $ImageInfoSet;

    /**
     * @var string 自定义人物创建时间
     */
    public $CreateTime;

    /**
     * @param string $PersonId 自定义人物Id
     * @param string $Name 自定义人物姓名
     * @param string $BasicInfo 自定义人物简介信息
     * @param string $L1Category 一级自定义人物类型
     * @param string $L2Category 二级自定义人物类型
     * @param array $ImageInfoSet 自定义人物图片信息
     * @param string $CreateTime 自定义人物创建时间
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BasicInfo",$param) and $param["BasicInfo"] !== null) {
            $this->BasicInfo = $param["BasicInfo"];
        }

        if (array_key_exists("L1Category",$param) and $param["L1Category"] !== null) {
            $this->L1Category = $param["L1Category"];
        }

        if (array_key_exists("L2Category",$param) and $param["L2Category"] !== null) {
            $this->L2Category = $param["L2Category"];
        }

        if (array_key_exists("ImageInfoSet",$param) and $param["ImageInfoSet"] !== null) {
            $this->ImageInfoSet = [];
            foreach ($param["ImageInfoSet"] as $key => $value){
                $obj = new PersonImageInfo();
                $obj->deserialize($value);
                array_push($this->ImageInfoSet, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}

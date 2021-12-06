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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用购买信息
 *
 * @method integer getSdkAppId() 获取应用ID
 * @method void setSdkAppId(integer $SdkAppId) 设置应用ID
 * @method string getName() 获取应用名称
 * @method void setName(string $Name) 设置应用名称
 * @method integer getStaffBuyNum() 获取坐席购买数（还在有效期内）
 * @method void setStaffBuyNum(integer $StaffBuyNum) 设置坐席购买数（还在有效期内）
 * @method array getStaffBuyList() 获取坐席购买列表 （还在有效期内）
 * @method void setStaffBuyList(array $StaffBuyList) 设置坐席购买列表 （还在有效期内）
 * @method array getPhoneNumBuyList() 获取号码购买列表
 * @method void setPhoneNumBuyList(array $PhoneNumBuyList) 设置号码购买列表
 */
class SdkAppIdBuyInfo extends AbstractModel
{
    /**
     * @var integer 应用ID
     */
    public $SdkAppId;

    /**
     * @var string 应用名称
     */
    public $Name;

    /**
     * @var integer 坐席购买数（还在有效期内）
     */
    public $StaffBuyNum;

    /**
     * @var array 坐席购买列表 （还在有效期内）
     */
    public $StaffBuyList;

    /**
     * @var array 号码购买列表
     */
    public $PhoneNumBuyList;

    /**
     * @param integer $SdkAppId 应用ID
     * @param string $Name 应用名称
     * @param integer $StaffBuyNum 坐席购买数（还在有效期内）
     * @param array $StaffBuyList 坐席购买列表 （还在有效期内）
     * @param array $PhoneNumBuyList 号码购买列表
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StaffBuyNum",$param) and $param["StaffBuyNum"] !== null) {
            $this->StaffBuyNum = $param["StaffBuyNum"];
        }

        if (array_key_exists("StaffBuyList",$param) and $param["StaffBuyList"] !== null) {
            $this->StaffBuyList = [];
            foreach ($param["StaffBuyList"] as $key => $value){
                $obj = new StaffBuyInfo();
                $obj->deserialize($value);
                array_push($this->StaffBuyList, $obj);
            }
        }

        if (array_key_exists("PhoneNumBuyList",$param) and $param["PhoneNumBuyList"] !== null) {
            $this->PhoneNumBuyList = [];
            foreach ($param["PhoneNumBuyList"] as $key => $value){
                $obj = new PhoneNumBuyInfo();
                $obj->deserialize($value);
                array_push($this->PhoneNumBuyList, $obj);
            }
        }
    }
}

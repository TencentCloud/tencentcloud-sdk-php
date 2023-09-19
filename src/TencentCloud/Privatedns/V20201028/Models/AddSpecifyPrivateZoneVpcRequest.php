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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddSpecifyPrivateZoneVpc请求参数结构体
 *
 * @method string getZoneId() 获取私有域id
 * @method void setZoneId(string $ZoneId) 设置私有域id
 * @method array getVpcSet() 获取本次新增的vpc信息
 * @method void setVpcSet(array $VpcSet) 设置本次新增的vpc信息
 * @method array getAccountVpcSet() 获取本次新增关联账户vpc信息
 * @method void setAccountVpcSet(array $AccountVpcSet) 设置本次新增关联账户vpc信息
 */
class AddSpecifyPrivateZoneVpcRequest extends AbstractModel
{
    /**
     * @var string 私有域id
     */
    public $ZoneId;

    /**
     * @var array 本次新增的vpc信息
     */
    public $VpcSet;

    /**
     * @var array 本次新增关联账户vpc信息
     */
    public $AccountVpcSet;

    /**
     * @param string $ZoneId 私有域id
     * @param array $VpcSet 本次新增的vpc信息
     * @param array $AccountVpcSet 本次新增关联账户vpc信息
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("VpcSet",$param) and $param["VpcSet"] !== null) {
            $this->VpcSet = [];
            foreach ($param["VpcSet"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcSet, $obj);
            }
        }

        if (array_key_exists("AccountVpcSet",$param) and $param["AccountVpcSet"] !== null) {
            $this->AccountVpcSet = [];
            foreach ($param["AccountVpcSet"] as $key => $value){
                $obj = new AccountVpcInfo();
                $obj->deserialize($value);
                array_push($this->AccountVpcSet, $obj);
            }
        }
    }
}

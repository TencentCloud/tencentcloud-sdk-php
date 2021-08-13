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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateChooseVpcs请求参数结构体
 *
 * @method array getVpcList() 获取vpc列表
 * @method void setVpcList(array $VpcList) 设置vpc列表
 * @method array getAllZoneList() 获取zone列表
 * @method void setAllZoneList(array $AllZoneList) 设置zone列表
 */
class CreateChooseVpcsRequest extends AbstractModel
{
    /**
     * @var array vpc列表
     */
    public $VpcList;

    /**
     * @var array zone列表
     */
    public $AllZoneList;

    /**
     * @param array $VpcList vpc列表
     * @param array $AllZoneList zone列表
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
        if (array_key_exists("VpcList",$param) and $param["VpcList"] !== null) {
            $this->VpcList = $param["VpcList"];
        }

        if (array_key_exists("AllZoneList",$param) and $param["AllZoneList"] !== null) {
            $this->AllZoneList = [];
            foreach ($param["AllZoneList"] as $key => $value){
                $obj = new VpcZoneData();
                $obj->deserialize($value);
                array_push($this->AllZoneList, $obj);
            }
        }
    }
}

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
 * VPC防火墙接入的网络实例类型及数量
 *
 * @method string getJoinType() 获取接入实例类型，VPC、DIRECTCONNECT、 VPNGW 等
 * @method void setJoinType(string $JoinType) 设置接入实例类型，VPC、DIRECTCONNECT、 VPNGW 等
 * @method integer getNum() 获取接入的对应网络实例类型的数量
 * @method void setNum(integer $Num) 设置接入的对应网络实例类型的数量
 */
class VpcFwJoinInstanceType extends AbstractModel
{
    /**
     * @var string 接入实例类型，VPC、DIRECTCONNECT、 VPNGW 等
     */
    public $JoinType;

    /**
     * @var integer 接入的对应网络实例类型的数量
     */
    public $Num;

    /**
     * @param string $JoinType 接入实例类型，VPC、DIRECTCONNECT、 VPNGW 等
     * @param integer $Num 接入的对应网络实例类型的数量
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
        if (array_key_exists("JoinType",$param) and $param["JoinType"] !== null) {
            $this->JoinType = $param["JoinType"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }
    }
}

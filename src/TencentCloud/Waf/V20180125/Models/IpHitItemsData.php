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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 封装参数
 *
 * @method array getRes() 获取数组封装
 * @method void setRes(array $Res) 设置数组封装
 * @method integer getTotalCount() 获取总数目
 * @method void setTotalCount(integer $TotalCount) 设置总数目
 */
class IpHitItemsData extends AbstractModel
{
    /**
     * @var array 数组封装
     */
    public $Res;

    /**
     * @var integer 总数目
     */
    public $TotalCount;

    /**
     * @param array $Res 数组封装
     * @param integer $TotalCount 总数目
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
        if (array_key_exists("Res",$param) and $param["Res"] !== null) {
            $this->Res = [];
            foreach ($param["Res"] as $key => $value){
                $obj = new IpHitItem();
                $obj->deserialize($value);
                array_push($this->Res, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}

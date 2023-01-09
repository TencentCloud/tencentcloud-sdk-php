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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实时会话统计详情。
 *
 * @method array getItems() 获取会话详情数组。
 * @method void setItems(array $Items) 设置会话详情数组。
 * @method integer getAllConnSum() 获取总连接数。
 * @method void setAllConnSum(integer $AllConnSum) 设置总连接数。
 * @method integer getActiveConnSum() 获取总活跃连接数。
 * @method void setActiveConnSum(integer $ActiveConnSum) 设置总活跃连接数。
 */
class ProcessStatistic extends AbstractModel
{
    /**
     * @var array 会话详情数组。
     */
    public $Items;

    /**
     * @var integer 总连接数。
     */
    public $AllConnSum;

    /**
     * @var integer 总活跃连接数。
     */
    public $ActiveConnSum;

    /**
     * @param array $Items 会话详情数组。
     * @param integer $AllConnSum 总连接数。
     * @param integer $ActiveConnSum 总活跃连接数。
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new SessionItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("AllConnSum",$param) and $param["AllConnSum"] !== null) {
            $this->AllConnSum = $param["AllConnSum"];
        }

        if (array_key_exists("ActiveConnSum",$param) and $param["ActiveConnSum"] !== null) {
            $this->ActiveConnSum = $param["ActiveConnSum"];
        }
    }
}

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
 * 数据封装
 *
 * @method array getRes() 获取cc规则
 * @method void setRes(array $Res) 设置cc规则
 * @method integer getTotalCount() 获取规则数目
 * @method void setTotalCount(integer $TotalCount) 设置规则数目
 */
class CCRuleData extends AbstractModel
{
    /**
     * @var array cc规则
     */
    public $Res;

    /**
     * @var integer 规则数目
     */
    public $TotalCount;

    /**
     * @param array $Res cc规则
     * @param integer $TotalCount 规则数目
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
                $obj = new CCRuleItem();
                $obj->deserialize($value);
                array_push($this->Res, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}

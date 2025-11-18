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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CC规则总览
 *
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method array getRes() 获取规则
 * @method void setRes(array $Res) 设置规则
 * @method integer getLimit() 获取规则限制总数
 * @method void setLimit(integer $Limit) 设置规则限制总数
 * @method integer getAvailable() 获取规则剩余多少可用
 * @method void setAvailable(integer $Available) 设置规则剩余多少可用
 */
class CCRuleLists extends AbstractModel
{
    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var array 规则
     */
    public $Res;

    /**
     * @var integer 规则限制总数
     */
    public $Limit;

    /**
     * @var integer 规则剩余多少可用
     */
    public $Available;

    /**
     * @param integer $TotalCount 总数
     * @param array $Res 规则
     * @param integer $Limit 规则限制总数
     * @param integer $Available 规则剩余多少可用
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Res",$param) and $param["Res"] !== null) {
            $this->Res = [];
            foreach ($param["Res"] as $key => $value){
                $obj = new CCRuleItems();
                $obj->deserialize($value);
                array_push($this->Res, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }
    }
}

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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检查项结果详情列表
 *
 * @method array getList() 获取具体检查项详情
 * @method void setList(array $List) 设置具体检查项详情
 * @method integer getTotal() 获取检查结果总数
 * @method void setTotal(integer $Total) 设置检查结果总数
 * @method integer getLowTotal() 获取低危个数
 * @method void setLowTotal(integer $LowTotal) 设置低危个数
 * @method integer getMiddleTotal() 获取中危个数
 * @method void setMiddleTotal(integer $MiddleTotal) 设置中危个数
 * @method integer getHighTotal() 获取高危个数
 * @method void setHighTotal(integer $HighTotal) 设置高危个数
 * @method integer getNormalTotal() 获取正常个数
 * @method void setNormalTotal(integer $NormalTotal) 设置正常个数
 */
class DescribeSocCheckResultListRspRsp extends AbstractModel
{
    /**
     * @var array 具体检查项详情
     */
    public $List;

    /**
     * @var integer 检查结果总数
     */
    public $Total;

    /**
     * @var integer 低危个数
     */
    public $LowTotal;

    /**
     * @var integer 中危个数
     */
    public $MiddleTotal;

    /**
     * @var integer 高危个数
     */
    public $HighTotal;

    /**
     * @var integer 正常个数
     */
    public $NormalTotal;

    /**
     * @param array $List 具体检查项详情
     * @param integer $Total 检查结果总数
     * @param integer $LowTotal 低危个数
     * @param integer $MiddleTotal 中危个数
     * @param integer $HighTotal 高危个数
     * @param integer $NormalTotal 正常个数
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
        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new SocCheckResult();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("LowTotal",$param) and $param["LowTotal"] !== null) {
            $this->LowTotal = $param["LowTotal"];
        }

        if (array_key_exists("MiddleTotal",$param) and $param["MiddleTotal"] !== null) {
            $this->MiddleTotal = $param["MiddleTotal"];
        }

        if (array_key_exists("HighTotal",$param) and $param["HighTotal"] !== null) {
            $this->HighTotal = $param["HighTotal"];
        }

        if (array_key_exists("NormalTotal",$param) and $param["NormalTotal"] !== null) {
            $this->NormalTotal = $param["NormalTotal"];
        }
    }
}

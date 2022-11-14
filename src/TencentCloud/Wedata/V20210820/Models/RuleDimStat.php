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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则维度数统计
 *
 * @method integer getTotalCnt() 获取总数
 * @method void setTotalCnt(integer $TotalCnt) 设置总数
 * @method array getDimCntList() 获取维度统计数
 * @method void setDimCntList(array $DimCntList) 设置维度统计数
 */
class RuleDimStat extends AbstractModel
{
    /**
     * @var integer 总数
     */
    public $TotalCnt;

    /**
     * @var array 维度统计数
     */
    public $DimCntList;

    /**
     * @param integer $TotalCnt 总数
     * @param array $DimCntList 维度统计数
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
        if (array_key_exists("TotalCnt",$param) and $param["TotalCnt"] !== null) {
            $this->TotalCnt = $param["TotalCnt"];
        }

        if (array_key_exists("DimCntList",$param) and $param["DimCntList"] !== null) {
            $this->DimCntList = [];
            foreach ($param["DimCntList"] as $key => $value){
                $obj = new RuleDimCnt();
                $obj->deserialize($value);
                array_push($this->DimCntList, $obj);
            }
        }
    }
}

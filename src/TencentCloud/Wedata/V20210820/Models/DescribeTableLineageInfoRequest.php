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
 * DescribeTableLineageInfo请求参数结构体
 *
 * @method string getDirection() 获取查询方向，INPUT,OUTPUT,BOTH枚举值
 * @method void setDirection(string $Direction) 设置查询方向，INPUT,OUTPUT,BOTH枚举值
 * @method TableLineageInfo getData() 获取表信息
 * @method void setData(TableLineageInfo $Data) 设置表信息
 * @method integer getInputDepth() 获取单次查询入度,默认 1
 * @method void setInputDepth(integer $InputDepth) 设置单次查询入度,默认 1
 * @method integer getOutputDepth() 获取单次查询出度,默认 1
 * @method void setOutputDepth(integer $OutputDepth) 设置单次查询出度,默认 1
 * @method array getExtParams() 获取额外参数（传递调用方信息）
 * @method void setExtParams(array $ExtParams) 设置额外参数（传递调用方信息）
 * @method boolean getIgnoreTemp() 获取是否过滤临时表,默认true
 * @method void setIgnoreTemp(boolean $IgnoreTemp) 设置是否过滤临时表,默认true
 * @method boolean getRecursiveSecond() 获取是否递归查询二级节点数目，默认为true
 * @method void setRecursiveSecond(boolean $RecursiveSecond) 设置是否递归查询二级节点数目，默认为true
 */
class DescribeTableLineageInfoRequest extends AbstractModel
{
    /**
     * @var string 查询方向，INPUT,OUTPUT,BOTH枚举值
     */
    public $Direction;

    /**
     * @var TableLineageInfo 表信息
     */
    public $Data;

    /**
     * @var integer 单次查询入度,默认 1
     */
    public $InputDepth;

    /**
     * @var integer 单次查询出度,默认 1
     */
    public $OutputDepth;

    /**
     * @var array 额外参数（传递调用方信息）
     */
    public $ExtParams;

    /**
     * @var boolean 是否过滤临时表,默认true
     */
    public $IgnoreTemp;

    /**
     * @var boolean 是否递归查询二级节点数目，默认为true
     */
    public $RecursiveSecond;

    /**
     * @param string $Direction 查询方向，INPUT,OUTPUT,BOTH枚举值
     * @param TableLineageInfo $Data 表信息
     * @param integer $InputDepth 单次查询入度,默认 1
     * @param integer $OutputDepth 单次查询出度,默认 1
     * @param array $ExtParams 额外参数（传递调用方信息）
     * @param boolean $IgnoreTemp 是否过滤临时表,默认true
     * @param boolean $RecursiveSecond 是否递归查询二级节点数目，默认为true
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
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new TableLineageInfo();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("InputDepth",$param) and $param["InputDepth"] !== null) {
            $this->InputDepth = $param["InputDepth"];
        }

        if (array_key_exists("OutputDepth",$param) and $param["OutputDepth"] !== null) {
            $this->OutputDepth = $param["OutputDepth"];
        }

        if (array_key_exists("ExtParams",$param) and $param["ExtParams"] !== null) {
            $this->ExtParams = [];
            foreach ($param["ExtParams"] as $key => $value){
                $obj = new LineageParamRecord();
                $obj->deserialize($value);
                array_push($this->ExtParams, $obj);
            }
        }

        if (array_key_exists("IgnoreTemp",$param) and $param["IgnoreTemp"] !== null) {
            $this->IgnoreTemp = $param["IgnoreTemp"];
        }

        if (array_key_exists("RecursiveSecond",$param) and $param["RecursiveSecond"] !== null) {
            $this->RecursiveSecond = $param["RecursiveSecond"];
        }
    }
}

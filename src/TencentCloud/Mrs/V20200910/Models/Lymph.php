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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 淋巴
 *
 * @method string getSrc() 获取原文
 * @method void setSrc(string $Src) 设置原文
 * @method array getIndex() 获取原文位置
 * @method void setIndex(array $Index) 设置原文位置
 * @method Part getPart() 获取部位
 * @method void setPart(Part $Part) 设置部位
 * @method integer getTotal() 获取总数
 * @method void setTotal(integer $Total) 设置总数
 * @method integer getTransferNum() 获取转移数
 * @method void setTransferNum(integer $TransferNum) 设置转移数
 */
class Lymph extends AbstractModel
{
    /**
     * @var string 原文
     */
    public $Src;

    /**
     * @var array 原文位置
     */
    public $Index;

    /**
     * @var Part 部位
     */
    public $Part;

    /**
     * @var integer 总数
     */
    public $Total;

    /**
     * @var integer 转移数
     */
    public $TransferNum;

    /**
     * @param string $Src 原文
     * @param array $Index 原文位置
     * @param Part $Part 部位
     * @param integer $Total 总数
     * @param integer $TransferNum 转移数
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
        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Part",$param) and $param["Part"] !== null) {
            $this->Part = new Part();
            $this->Part->deserialize($param["Part"]);
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TransferNum",$param) and $param["TransferNum"] !== null) {
            $this->TransferNum = $param["TransferNum"];
        }
    }
}

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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SRT FEC 高级配置
 *
 * @method boolean getEnable() 获取是否开启 FEC
 * @method void setEnable(boolean $Enable) 设置是否开启 FEC
 * @method integer getCols() 获取FEC 数据包 Layout 列数量. 取值范围>0
 * @method void setCols(integer $Cols) 设置FEC 数据包 Layout 列数量. 取值范围>0
 * @method integer getRows() 获取FEC 数据包 Layout 行数量. 取值范围 >=2 或者 <=-2
 * @method void setRows(integer $Rows) 设置FEC 数据包 Layout 行数量. 取值范围 >=2 或者 <=-2
 * @method string getARQ() 获取FEC 开启的情况下，ARQ的策略。取值 "always", "onreq", "never"
 * @method void setARQ(string $ARQ) 设置FEC 开启的情况下，ARQ的策略。取值 "always", "onreq", "never"
 * @method string getLayout() 获取FEC 数据包 Layout 组织形式，取值 "even", "staircase" 
 * @method void setLayout(string $Layout) 设置FEC 数据包 Layout 组织形式，取值 "even", "staircase" 
 */
class SRTFECFullOptions extends AbstractModel
{
    /**
     * @var boolean 是否开启 FEC
     */
    public $Enable;

    /**
     * @var integer FEC 数据包 Layout 列数量. 取值范围>0
     */
    public $Cols;

    /**
     * @var integer FEC 数据包 Layout 行数量. 取值范围 >=2 或者 <=-2
     */
    public $Rows;

    /**
     * @var string FEC 开启的情况下，ARQ的策略。取值 "always", "onreq", "never"
     */
    public $ARQ;

    /**
     * @var string FEC 数据包 Layout 组织形式，取值 "even", "staircase" 
     */
    public $Layout;

    /**
     * @param boolean $Enable 是否开启 FEC
     * @param integer $Cols FEC 数据包 Layout 列数量. 取值范围>0
     * @param integer $Rows FEC 数据包 Layout 行数量. 取值范围 >=2 或者 <=-2
     * @param string $ARQ FEC 开启的情况下，ARQ的策略。取值 "always", "onreq", "never"
     * @param string $Layout FEC 数据包 Layout 组织形式，取值 "even", "staircase" 
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Cols",$param) and $param["Cols"] !== null) {
            $this->Cols = $param["Cols"];
        }

        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = $param["Rows"];
        }

        if (array_key_exists("ARQ",$param) and $param["ARQ"] !== null) {
            $this->ARQ = $param["ARQ"];
        }

        if (array_key_exists("Layout",$param) and $param["Layout"] !== null) {
            $this->Layout = $param["Layout"];
        }
    }
}

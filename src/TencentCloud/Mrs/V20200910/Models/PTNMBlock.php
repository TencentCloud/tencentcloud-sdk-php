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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PTNM分期
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getSrc() 获取原文
 * @method void setSrc(string $Src) 设置原文
 * @method string getPTNMM() 获取PTNM分期
 * @method void setPTNMM(string $PTNMM) 设置PTNM分期
 * @method string getPTNMN() 获取PTNM分期
 * @method void setPTNMN(string $PTNMN) 设置PTNM分期
 * @method string getPTNMT() 获取PTNM分期
 * @method void setPTNMT(string $PTNMT) 设置PTNM分期
 */
class PTNMBlock extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 原文
     */
    public $Src;

    /**
     * @var string PTNM分期
     */
    public $PTNMM;

    /**
     * @var string PTNM分期
     */
    public $PTNMN;

    /**
     * @var string PTNM分期
     */
    public $PTNMT;

    /**
     * @param string $Name 名称
     * @param string $Src 原文
     * @param string $PTNMM PTNM分期
     * @param string $PTNMN PTNM分期
     * @param string $PTNMT PTNM分期
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("PTNMM",$param) and $param["PTNMM"] !== null) {
            $this->PTNMM = $param["PTNMM"];
        }

        if (array_key_exists("PTNMN",$param) and $param["PTNMN"] !== null) {
            $this->PTNMN = $param["PTNMN"];
        }

        if (array_key_exists("PTNMT",$param) and $param["PTNMT"] !== null) {
            $this->PTNMT = $param["PTNMT"];
        }
    }
}

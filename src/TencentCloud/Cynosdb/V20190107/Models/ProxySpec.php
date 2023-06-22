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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库代理规格
 *
 * @method integer getCpu() 获取数据库代理cpu核数
 * @method void setCpu(integer $Cpu) 设置数据库代理cpu核数
 * @method integer getMem() 获取数据库代理内存
 * @method void setMem(integer $Mem) 设置数据库代理内存
 */
class ProxySpec extends AbstractModel
{
    /**
     * @var integer 数据库代理cpu核数
     */
    public $Cpu;

    /**
     * @var integer 数据库代理内存
     */
    public $Mem;

    /**
     * @param integer $Cpu 数据库代理cpu核数
     * @param integer $Mem 数据库代理内存
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
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }
    }
}

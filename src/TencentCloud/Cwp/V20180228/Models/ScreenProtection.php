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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大屏可视化攻防状态
 *
 * @method string getName() 获取类型值：文件查杀，暴力破解，漏洞扫描，基线检测
 * @method void setName(string $Name) 设置类型值：文件查杀，暴力破解，漏洞扫描，基线检测
 * @method integer getStatus() 获取文件查杀:  0:从未检测过，或0资产付费情况, 1:已检测，存在恶意文件, 2:已检测，未开启隔离防护, 3:已检测且已开启防护且无风险；
暴力破解: 0:未开启防护（0付费资产情况）1:已开启自动阻断；
漏洞扫描: 0:从未检测过，或0资产付费情况, 1:存在漏洞风险, 2:无风险；
基线检测: 0:从未检测过，或0资产付费情况, 1:存在基线风险,2:无风险；
 * @method void setStatus(integer $Status) 设置文件查杀:  0:从未检测过，或0资产付费情况, 1:已检测，存在恶意文件, 2:已检测，未开启隔离防护, 3:已检测且已开启防护且无风险；
暴力破解: 0:未开启防护（0付费资产情况）1:已开启自动阻断；
漏洞扫描: 0:从未检测过，或0资产付费情况, 1:存在漏洞风险, 2:无风险；
基线检测: 0:从未检测过，或0资产付费情况, 1:存在基线风险,2:无风险；
 */
class ScreenProtection extends AbstractModel
{
    /**
     * @var string 类型值：文件查杀，暴力破解，漏洞扫描，基线检测
     */
    public $Name;

    /**
     * @var integer 文件查杀:  0:从未检测过，或0资产付费情况, 1:已检测，存在恶意文件, 2:已检测，未开启隔离防护, 3:已检测且已开启防护且无风险；
暴力破解: 0:未开启防护（0付费资产情况）1:已开启自动阻断；
漏洞扫描: 0:从未检测过，或0资产付费情况, 1:存在漏洞风险, 2:无风险；
基线检测: 0:从未检测过，或0资产付费情况, 1:存在基线风险,2:无风险；
     */
    public $Status;

    /**
     * @param string $Name 类型值：文件查杀，暴力破解，漏洞扫描，基线检测
     * @param integer $Status 文件查杀:  0:从未检测过，或0资产付费情况, 1:已检测，存在恶意文件, 2:已检测，未开启隔离防护, 3:已检测且已开启防护且无风险；
暴力破解: 0:未开启防护（0付费资产情况）1:已开启自动阻断；
漏洞扫描: 0:从未检测过，或0资产付费情况, 1:存在漏洞风险, 2:无风险；
基线检测: 0:从未检测过，或0资产付费情况, 1:存在基线风险,2:无风险；
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

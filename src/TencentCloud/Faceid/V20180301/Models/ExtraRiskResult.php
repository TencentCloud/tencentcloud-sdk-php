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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExtraRiskResult
 *
 * @method string getStatus() 获取<p>本次附加检查的完成度，回答“这次结果可否采信”。</p><p>枚举值：</p><ul><li>Completed： 本次请求所需的检查均已给出结论（命中或通过）</li><li>Partial： 至少一项检查未能给出结论：依赖不可用、数据不足、入参不完整或非法。结果仅供参考，不代表安全</li></ul>
 * @method void setStatus(string $Status) 设置<p>本次附加检查的完成度，回答“这次结果可否采信”。</p><p>枚举值：</p><ul><li>Completed： 本次请求所需的检查均已给出结论（命中或通过）</li><li>Partial： 至少一项检查未能给出结论：依赖不可用、数据不足、入参不完整或非法。结果仅供参考，不代表安全</li></ul>
 * @method string getRiskLevel() 获取<p>附加风险等级，可能为空字符串</p><p>枚举值：</p><ul><li>High： 存在已生效的风险命中项（此时 RiskDetailList 非空）</li><li>Low： 检查已完成，且确认无命中</li><li>&quot;&quot;（空字符串）    ： 未识别：本次没有任何一项检查能给出结论，或检查未全部完成。既不代表有风险，也不代表安全</li></ul>
 * @method void setRiskLevel(string $RiskLevel) 设置<p>附加风险等级，可能为空字符串</p><p>枚举值：</p><ul><li>High： 存在已生效的风险命中项（此时 RiskDetailList 非空）</li><li>Low： 检查已完成，且确认无命中</li><li>&quot;&quot;（空字符串）    ： 未识别：本次没有任何一项检查能给出结论，或检查未全部完成。既不代表有风险，也不代表安全</li></ul>
 * @method array getBlackListResult() 获取<p>命中的风险项列表，未命中时为空数组 []</p>
 * @method void setBlackListResult(array $BlackListResult) 设置<p>命中的风险项列表，未命中时为空数组 []</p>
 * @method array getRiskDetailList() 获取<p>人脸黑名单命中明细，未命中时为空数组 []</p>
 * @method void setRiskDetailList(array $RiskDetailList) 设置<p>人脸黑名单命中明细，未命中时为空数组 []</p>
 */
class ExtraRiskResult extends AbstractModel
{
    /**
     * @var string <p>本次附加检查的完成度，回答“这次结果可否采信”。</p><p>枚举值：</p><ul><li>Completed： 本次请求所需的检查均已给出结论（命中或通过）</li><li>Partial： 至少一项检查未能给出结论：依赖不可用、数据不足、入参不完整或非法。结果仅供参考，不代表安全</li></ul>
     */
    public $Status;

    /**
     * @var string <p>附加风险等级，可能为空字符串</p><p>枚举值：</p><ul><li>High： 存在已生效的风险命中项（此时 RiskDetailList 非空）</li><li>Low： 检查已完成，且确认无命中</li><li>&quot;&quot;（空字符串）    ： 未识别：本次没有任何一项检查能给出结论，或检查未全部完成。既不代表有风险，也不代表安全</li></ul>
     */
    public $RiskLevel;

    /**
     * @var array <p>命中的风险项列表，未命中时为空数组 []</p>
     */
    public $BlackListResult;

    /**
     * @var array <p>人脸黑名单命中明细，未命中时为空数组 []</p>
     */
    public $RiskDetailList;

    /**
     * @param string $Status <p>本次附加检查的完成度，回答“这次结果可否采信”。</p><p>枚举值：</p><ul><li>Completed： 本次请求所需的检查均已给出结论（命中或通过）</li><li>Partial： 至少一项检查未能给出结论：依赖不可用、数据不足、入参不完整或非法。结果仅供参考，不代表安全</li></ul>
     * @param string $RiskLevel <p>附加风险等级，可能为空字符串</p><p>枚举值：</p><ul><li>High： 存在已生效的风险命中项（此时 RiskDetailList 非空）</li><li>Low： 检查已完成，且确认无命中</li><li>&quot;&quot;（空字符串）    ： 未识别：本次没有任何一项检查能给出结论，或检查未全部完成。既不代表有风险，也不代表安全</li></ul>
     * @param array $BlackListResult <p>命中的风险项列表，未命中时为空数组 []</p>
     * @param array $RiskDetailList <p>人脸黑名单命中明细，未命中时为空数组 []</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("BlackListResult",$param) and $param["BlackListResult"] !== null) {
            $this->BlackListResult = [];
            foreach ($param["BlackListResult"] as $key => $value){
                $obj = new BlackListItem();
                $obj->deserialize($value);
                array_push($this->BlackListResult, $obj);
            }
        }

        if (array_key_exists("RiskDetailList",$param) and $param["RiskDetailList"] !== null) {
            $this->RiskDetailList = [];
            foreach ($param["RiskDetailList"] as $key => $value){
                $obj = new RiskDetailItem();
                $obj->deserialize($value);
                array_push($this->RiskDetailList, $obj);
            }
        }
    }
}

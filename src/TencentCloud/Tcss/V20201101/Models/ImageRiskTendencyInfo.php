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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运行时安全事件趋势信息
 *
 * @method array getImageRiskSet() 获取趋势列表
 * @method void setImageRiskSet(array $ImageRiskSet) 设置趋势列表
 * @method string getImageRiskType() 获取风险类型：
IRT_VULNERABILITY : 安全漏洞
IRT_MALWARE_VIRUS: 木马病毒
IRT_RISK:敏感信息
 * @method void setImageRiskType(string $ImageRiskType) 设置风险类型：
IRT_VULNERABILITY : 安全漏洞
IRT_MALWARE_VIRUS: 木马病毒
IRT_RISK:敏感信息
 */
class ImageRiskTendencyInfo extends AbstractModel
{
    /**
     * @var array 趋势列表
     */
    public $ImageRiskSet;

    /**
     * @var string 风险类型：
IRT_VULNERABILITY : 安全漏洞
IRT_MALWARE_VIRUS: 木马病毒
IRT_RISK:敏感信息
     */
    public $ImageRiskType;

    /**
     * @param array $ImageRiskSet 趋势列表
     * @param string $ImageRiskType 风险类型：
IRT_VULNERABILITY : 安全漏洞
IRT_MALWARE_VIRUS: 木马病毒
IRT_RISK:敏感信息
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
        if (array_key_exists("ImageRiskSet",$param) and $param["ImageRiskSet"] !== null) {
            $this->ImageRiskSet = [];
            foreach ($param["ImageRiskSet"] as $key => $value){
                $obj = new RunTimeTendencyInfo();
                $obj->deserialize($value);
                array_push($this->ImageRiskSet, $obj);
            }
        }

        if (array_key_exists("ImageRiskType",$param) and $param["ImageRiskType"] !== null) {
            $this->ImageRiskType = $param["ImageRiskType"];
        }
    }
}

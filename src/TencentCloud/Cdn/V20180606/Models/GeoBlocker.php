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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 区域访问控制配置，默认为关闭状态
 *
 * @method string getSwitch() 获取IP 黑白名单配置开关，取值有
on：开启
off：关闭
 * @method void setSwitch(string $Switch) 设置IP 黑白名单配置开关，取值有
on：开启
off：关闭
 * @method array getBlockRules() 获取[
    {
      "BlockType": "whitelist",
      "RulePaths": [
        "*"
      ],
      "RuleType": "all",
      "Districts": [
        "CN-HK"
      ]
    }
  ]
 * @method void setBlockRules(array $BlockRules) 设置[
    {
      "BlockType": "whitelist",
      "RulePaths": [
        "*"
      ],
      "RuleType": "all",
      "Districts": [
        "CN-HK"
      ]
    }
  ]
 */
class GeoBlocker extends AbstractModel
{
    /**
     * @var string IP 黑白名单配置开关，取值有
on：开启
off：关闭
     */
    public $Switch;

    /**
     * @var array [
    {
      "BlockType": "whitelist",
      "RulePaths": [
        "*"
      ],
      "RuleType": "all",
      "Districts": [
        "CN-HK"
      ]
    }
  ]
     */
    public $BlockRules;

    /**
     * @param string $Switch IP 黑白名单配置开关，取值有
on：开启
off：关闭
     * @param array $BlockRules [
    {
      "BlockType": "whitelist",
      "RulePaths": [
        "*"
      ],
      "RuleType": "all",
      "Districts": [
        "CN-HK"
      ]
    }
  ]
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("BlockRules",$param) and $param["BlockRules"] !== null) {
            $this->BlockRules = [];
            foreach ($param["BlockRules"] as $key => $value){
                $obj = new GeoBlockStrategy();
                $obj->deserialize($value);
                array_push($this->BlockRules, $obj);
            }
        }
    }
}

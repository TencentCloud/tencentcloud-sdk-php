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
 * DescribeVulDefenceEventTendency返回参数结构体
 *
 * @method array getDefendedList() 获取漏洞防御事件趋势
 * @method void setDefendedList(array $DefendedList) 设置漏洞防御事件趋势
 * @method array getAttackList() 获取漏洞攻击事件趋势
 * @method void setAttackList(array $AttackList) 设置漏洞攻击事件趋势
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulDefenceEventTendencyResponse extends AbstractModel
{
    /**
     * @var array 漏洞防御事件趋势
     */
    public $DefendedList;

    /**
     * @var array 漏洞攻击事件趋势
     */
    public $AttackList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DefendedList 漏洞防御事件趋势
     * @param array $AttackList 漏洞攻击事件趋势
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DefendedList",$param) and $param["DefendedList"] !== null) {
            $this->DefendedList = [];
            foreach ($param["DefendedList"] as $key => $value){
                $obj = new VulDefenceEventTendency();
                $obj->deserialize($value);
                array_push($this->DefendedList, $obj);
            }
        }

        if (array_key_exists("AttackList",$param) and $param["AttackList"] !== null) {
            $this->AttackList = [];
            foreach ($param["AttackList"] as $key => $value){
                $obj = new VulDefenceEventTendency();
                $obj->deserialize($value);
                array_push($this->AttackList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

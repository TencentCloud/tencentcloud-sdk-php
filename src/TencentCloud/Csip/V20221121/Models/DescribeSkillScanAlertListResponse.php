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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSkillScanAlertList返回参数结构体
 *
 * @method integer getTotalCount() 获取符合条件的告警总数
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的告警总数
 * @method array getAlertList() 获取告警列表
 * @method void setAlertList(array $AlertList) 设置告警列表
 * @method array getRuleCatalog() 获取融合规则目录全集（rule_id → rule_name），前端据此翻译 AlertList[].HitRules[].RuleID。语言通过云API公共参数 Language 切换
 * @method void setRuleCatalog(array $RuleCatalog) 设置融合规则目录全集（rule_id → rule_name），前端据此翻译 AlertList[].HitRules[].RuleID。语言通过云API公共参数 Language 切换
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSkillScanAlertListResponse extends AbstractModel
{
    /**
     * @var integer 符合条件的告警总数
     */
    public $TotalCount;

    /**
     * @var array 告警列表
     */
    public $AlertList;

    /**
     * @var array 融合规则目录全集（rule_id → rule_name），前端据此翻译 AlertList[].HitRules[].RuleID。语言通过云API公共参数 Language 切换
     */
    public $RuleCatalog;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 符合条件的告警总数
     * @param array $AlertList 告警列表
     * @param array $RuleCatalog 融合规则目录全集（rule_id → rule_name），前端据此翻译 AlertList[].HitRules[].RuleID。语言通过云API公共参数 Language 切换
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("AlertList",$param) and $param["AlertList"] !== null) {
            $this->AlertList = [];
            foreach ($param["AlertList"] as $key => $value){
                $obj = new SkillScanAlertItem();
                $obj->deserialize($value);
                array_push($this->AlertList, $obj);
            }
        }

        if (array_key_exists("RuleCatalog",$param) and $param["RuleCatalog"] !== null) {
            $this->RuleCatalog = [];
            foreach ($param["RuleCatalog"] as $key => $value){
                $obj = new SkillRuleCatalogItem();
                $obj->deserialize($value);
                array_push($this->RuleCatalog, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

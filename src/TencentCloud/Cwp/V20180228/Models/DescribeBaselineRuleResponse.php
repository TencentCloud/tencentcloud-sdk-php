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
 * DescribeBaselineRule返回参数结构体
 *
 * @method integer getTotalCount() 获取分页查询记录总数
 * @method void setTotalCount(integer $TotalCount) 设置分页查询记录总数
 * @method array getBaselineRuleList() 获取基线检测项列表
 * @method void setBaselineRuleList(array $BaselineRuleList) 设置基线检测项列表
 * @method boolean getShowRuleRemark() 获取是否显示说明列：true-是，false-否
 * @method void setShowRuleRemark(boolean $ShowRuleRemark) 设置是否显示说明列：true-是，false-否
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBaselineRuleResponse extends AbstractModel
{
    /**
     * @var integer 分页查询记录总数
     */
    public $TotalCount;

    /**
     * @var array 基线检测项列表
     */
    public $BaselineRuleList;

    /**
     * @var boolean 是否显示说明列：true-是，false-否
     */
    public $ShowRuleRemark;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 分页查询记录总数
     * @param array $BaselineRuleList 基线检测项列表
     * @param boolean $ShowRuleRemark 是否显示说明列：true-是，false-否
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

        if (array_key_exists("BaselineRuleList",$param) and $param["BaselineRuleList"] !== null) {
            $this->BaselineRuleList = [];
            foreach ($param["BaselineRuleList"] as $key => $value){
                $obj = new BaselineRuleInfo();
                $obj->deserialize($value);
                array_push($this->BaselineRuleList, $obj);
            }
        }

        if (array_key_exists("ShowRuleRemark",$param) and $param["ShowRuleRemark"] !== null) {
            $this->ShowRuleRemark = $param["ShowRuleRemark"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

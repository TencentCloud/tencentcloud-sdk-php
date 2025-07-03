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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 灰度规则列表
 *
 * @method array getCanaryRuleList() 获取灰度规则
 * @method void setCanaryRuleList(array $CanaryRuleList) 设置灰度规则
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 */
class CloudAPIGatewayCanaryRuleList extends AbstractModel
{
    /**
     * @var array 灰度规则
     */
    public $CanaryRuleList;

    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @param array $CanaryRuleList 灰度规则
     * @param integer $TotalCount 总数
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
        if (array_key_exists("CanaryRuleList",$param) and $param["CanaryRuleList"] !== null) {
            $this->CanaryRuleList = [];
            foreach ($param["CanaryRuleList"] as $key => $value){
                $obj = new CloudNativeAPIGatewayCanaryRule();
                $obj->deserialize($value);
                array_push($this->CanaryRuleList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}

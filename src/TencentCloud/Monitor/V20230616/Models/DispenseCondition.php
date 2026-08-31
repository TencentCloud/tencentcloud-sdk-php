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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转发过滤条件信息
 *
 * @method string getExtMetric() 获取对外指标名
 * @method void setExtMetric(string $ExtMetric) 设置对外指标名
 * @method array getDispenseFilters() 获取过滤条件表
 * @method void setDispenseFilters(array $DispenseFilters) 设置过滤条件表
 * @method integer getConditionId() 获取过滤条件id
 * @method void setConditionId(integer $ConditionId) 设置过滤条件id
 */
class DispenseCondition extends AbstractModel
{
    /**
     * @var string 对外指标名
     */
    public $ExtMetric;

    /**
     * @var array 过滤条件表
     */
    public $DispenseFilters;

    /**
     * @var integer 过滤条件id
     */
    public $ConditionId;

    /**
     * @param string $ExtMetric 对外指标名
     * @param array $DispenseFilters 过滤条件表
     * @param integer $ConditionId 过滤条件id
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
        if (array_key_exists("ExtMetric",$param) and $param["ExtMetric"] !== null) {
            $this->ExtMetric = $param["ExtMetric"];
        }

        if (array_key_exists("DispenseFilters",$param) and $param["DispenseFilters"] !== null) {
            $this->DispenseFilters = [];
            foreach ($param["DispenseFilters"] as $key => $value){
                $obj = new DispenseFilter();
                $obj->deserialize($value);
                array_push($this->DispenseFilters, $obj);
            }
        }

        if (array_key_exists("ConditionId",$param) and $param["ConditionId"] !== null) {
            $this->ConditionId = $param["ConditionId"];
        }
    }
}

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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参数限流的规则
 *
 * @method array getFilters() 获取请求匹配条件
 * @method void setFilters(array $Filters) 设置请求匹配条件
 * @method array getLimitBy() 获取参数限流依据组合
 * @method void setLimitBy(array $LimitBy) 设置参数限流依据组合
 * @method array getQpsThresholds() 获取限流阈值
 * @method void setQpsThresholds(array $QpsThresholds) 设置限流阈值
 * @method array getAccurateQpsThresholds() 获取精确限流阈值
 * @method void setAccurateQpsThresholds(array $AccurateQpsThresholds) 设置精确限流阈值
 */
class LimitRule extends AbstractModel
{
    /**
     * @var array 请求匹配条件
     */
    public $Filters;

    /**
     * @var array 参数限流依据组合
     */
    public $LimitBy;

    /**
     * @var array 限流阈值
     */
    public $QpsThresholds;

    /**
     * @var array 精确限流阈值
     */
    public $AccurateQpsThresholds;

    /**
     * @param array $Filters 请求匹配条件
     * @param array $LimitBy 参数限流依据组合
     * @param array $QpsThresholds 限流阈值
     * @param array $AccurateQpsThresholds 精确限流阈值
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RuleFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("LimitBy",$param) and $param["LimitBy"] !== null) {
            $this->LimitBy = [];
            foreach ($param["LimitBy"] as $key => $value){
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->LimitBy, $obj);
            }
        }

        if (array_key_exists("QpsThresholds",$param) and $param["QpsThresholds"] !== null) {
            $this->QpsThresholds = [];
            foreach ($param["QpsThresholds"] as $key => $value){
                $obj = new QpsThreshold();
                $obj->deserialize($value);
                array_push($this->QpsThresholds, $obj);
            }
        }

        if (array_key_exists("AccurateQpsThresholds",$param) and $param["AccurateQpsThresholds"] !== null) {
            $this->AccurateQpsThresholds = [];
            foreach ($param["AccurateQpsThresholds"] as $key => $value){
                $obj = new AccurateQpsThreshold();
                $obj->deserialize($value);
                array_push($this->AccurateQpsThresholds, $obj);
            }
        }
    }
}

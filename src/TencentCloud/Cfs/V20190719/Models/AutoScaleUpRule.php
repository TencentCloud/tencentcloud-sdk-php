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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自动扩容规则
 *
 * @method string getStatus() 获取自动扩容策略开启，关闭
 * @method void setStatus(string $Status) 设置自动扩容策略开启，关闭
 * @method integer getScaleThreshold() 获取集群用量占比，到达这个值后开始扩容,范围[10-90]
 * @method void setScaleThreshold(integer $ScaleThreshold) 设置集群用量占比，到达这个值后开始扩容,范围[10-90]
 * @method integer getTargetThreshold() 获取扩容后使用量跟集群总量比例,范围[10-90]
 * @method void setTargetThreshold(integer $TargetThreshold) 设置扩容后使用量跟集群总量比例,范围[10-90]
 */
class AutoScaleUpRule extends AbstractModel
{
    /**
     * @var string 自动扩容策略开启，关闭
     */
    public $Status;

    /**
     * @var integer 集群用量占比，到达这个值后开始扩容,范围[10-90]
     */
    public $ScaleThreshold;

    /**
     * @var integer 扩容后使用量跟集群总量比例,范围[10-90]
     */
    public $TargetThreshold;

    /**
     * @param string $Status 自动扩容策略开启，关闭
     * @param integer $ScaleThreshold 集群用量占比，到达这个值后开始扩容,范围[10-90]
     * @param integer $TargetThreshold 扩容后使用量跟集群总量比例,范围[10-90]
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

        if (array_key_exists("ScaleThreshold",$param) and $param["ScaleThreshold"] !== null) {
            $this->ScaleThreshold = $param["ScaleThreshold"];
        }

        if (array_key_exists("TargetThreshold",$param) and $param["TargetThreshold"] !== null) {
            $this->TargetThreshold = $param["TargetThreshold"];
        }
    }
}

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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标组基础配置
 *
 * @method string getTargetGroupId() 获取目标组 ID，格式为 lbtg- 后接 8 位字母数字。
 * @method void setTargetGroupId(string $TargetGroupId) 设置目标组 ID，格式为 lbtg- 后接 8 位字母数字。
 * @method integer getWeight() 获取权重，取值范围：[0, 100]，默认为 10。
 * @method void setWeight(integer $Weight) 设置权重，取值范围：[0, 100]，默认为 10。
 */
class TargetGroupTuple extends AbstractModel
{
    /**
     * @var string 目标组 ID，格式为 lbtg- 后接 8 位字母数字。
     */
    public $TargetGroupId;

    /**
     * @var integer 权重，取值范围：[0, 100]，默认为 10。
     */
    public $Weight;

    /**
     * @param string $TargetGroupId 目标组 ID，格式为 lbtg- 后接 8 位字母数字。
     * @param integer $Weight 权重，取值范围：[0, 100]，默认为 10。
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
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}

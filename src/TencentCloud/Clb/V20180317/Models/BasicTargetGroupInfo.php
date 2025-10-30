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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监听器或者转发规则绑定的目标组基本信息
 *
 * @method string getTargetGroupId() 获取目标组ID
 * @method void setTargetGroupId(string $TargetGroupId) 设置目标组ID
 * @method string getTargetGroupName() 获取目标组名称
 * @method void setTargetGroupName(string $TargetGroupName) 设置目标组名称
 * @method integer getWeight() 获取目标组权重
 * @method void setWeight(integer $Weight) 设置目标组权重
 */
class BasicTargetGroupInfo extends AbstractModel
{
    /**
     * @var string 目标组ID
     */
    public $TargetGroupId;

    /**
     * @var string 目标组名称
     */
    public $TargetGroupName;

    /**
     * @var integer 目标组权重
     */
    public $Weight;

    /**
     * @param string $TargetGroupId 目标组ID
     * @param string $TargetGroupName 目标组名称
     * @param integer $Weight 目标组权重
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

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}

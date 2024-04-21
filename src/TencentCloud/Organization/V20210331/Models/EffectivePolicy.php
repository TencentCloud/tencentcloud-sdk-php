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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 有效策略。
 *
 * @method integer getTargetId() 获取目标ID。
 * @method void setTargetId(integer $TargetId) 设置目标ID。
 * @method string getPolicyContent() 获取有效策略内容。
 * @method void setPolicyContent(string $PolicyContent) 设置有效策略内容。
 * @method integer getLastUpdatedTimestamp() 获取有效策略更新时间。
 * @method void setLastUpdatedTimestamp(integer $LastUpdatedTimestamp) 设置有效策略更新时间。
 */
class EffectivePolicy extends AbstractModel
{
    /**
     * @var integer 目标ID。
     */
    public $TargetId;

    /**
     * @var string 有效策略内容。
     */
    public $PolicyContent;

    /**
     * @var integer 有效策略更新时间。
     */
    public $LastUpdatedTimestamp;

    /**
     * @param integer $TargetId 目标ID。
     * @param string $PolicyContent 有效策略内容。
     * @param integer $LastUpdatedTimestamp 有效策略更新时间。
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
        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("PolicyContent",$param) and $param["PolicyContent"] !== null) {
            $this->PolicyContent = $param["PolicyContent"];
        }

        if (array_key_exists("LastUpdatedTimestamp",$param) and $param["LastUpdatedTimestamp"] !== null) {
            $this->LastUpdatedTimestamp = $param["LastUpdatedTimestamp"];
        }
    }
}

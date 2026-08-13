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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchCasterToEmergency请求参数结构体
 *
 * @method integer getCasterId() 获取<p>导播台ID。</p>
 * @method void setCasterId(integer $CasterId) 设置<p>导播台ID。</p>
 * @method boolean getFromBeginning() 获取<p>是否启用从头开始播放功能，仅对单点播输入源生效</p><p>默认值：false</p>
 * @method void setFromBeginning(boolean $FromBeginning) 设置<p>是否启用从头开始播放功能，仅对单点播输入源生效</p><p>默认值：false</p>
 */
class SwitchCasterToEmergencyRequest extends AbstractModel
{
    /**
     * @var integer <p>导播台ID。</p>
     */
    public $CasterId;

    /**
     * @var boolean <p>是否启用从头开始播放功能，仅对单点播输入源生效</p><p>默认值：false</p>
     */
    public $FromBeginning;

    /**
     * @param integer $CasterId <p>导播台ID。</p>
     * @param boolean $FromBeginning <p>是否启用从头开始播放功能，仅对单点播输入源生效</p><p>默认值：false</p>
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
        if (array_key_exists("CasterId",$param) and $param["CasterId"] !== null) {
            $this->CasterId = $param["CasterId"];
        }

        if (array_key_exists("FromBeginning",$param) and $param["FromBeginning"] !== null) {
            $this->FromBeginning = $param["FromBeginning"];
        }
    }
}

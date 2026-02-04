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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播智能字幕输入结构体
 *
 * @method integer getDefinition() 获取智能字幕模板 ID 。	
 * @method void setDefinition(integer $Definition) 设置智能字幕模板 ID 。	
 * @method string getUserExtPara() 获取用户扩展字段，一般场景不用填。
 * @method void setUserExtPara(string $UserExtPara) 设置用户扩展字段，一般场景不用填。
 */
class LiveSmartSubtitlesTaskInput extends AbstractModel
{
    /**
     * @var integer 智能字幕模板 ID 。	
     */
    public $Definition;

    /**
     * @var string 用户扩展字段，一般场景不用填。
     */
    public $UserExtPara;

    /**
     * @param integer $Definition 智能字幕模板 ID 。	
     * @param string $UserExtPara 用户扩展字段，一般场景不用填。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("UserExtPara",$param) and $param["UserExtPara"] !== null) {
            $this->UserExtPara = $param["UserExtPara"];
        }
    }
}

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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI安全助手会话信息
 *
 * @method string getTitle() 获取标题
 * @method void setTitle(string $Title) 设置标题
 * @method string getSessionID() 获取会话ID
 * @method void setSessionID(string $SessionID) 设置会话ID
 * @method integer getModifyTime() 获取最后修改的时间戳
 * @method void setModifyTime(integer $ModifyTime) 设置最后修改的时间戳
 * @method boolean getIsPinned() 获取是否置顶
 * @method void setIsPinned(boolean $IsPinned) 设置是否置顶
 */
class AIAnalysisSession extends AbstractModel
{
    /**
     * @var string 标题
     */
    public $Title;

    /**
     * @var string 会话ID
     */
    public $SessionID;

    /**
     * @var integer 最后修改的时间戳
     */
    public $ModifyTime;

    /**
     * @var boolean 是否置顶
     */
    public $IsPinned;

    /**
     * @param string $Title 标题
     * @param string $SessionID 会话ID
     * @param integer $ModifyTime 最后修改的时间戳
     * @param boolean $IsPinned 是否置顶
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("SessionID",$param) and $param["SessionID"] !== null) {
            $this->SessionID = $param["SessionID"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("IsPinned",$param) and $param["IsPinned"] !== null) {
            $this->IsPinned = $param["IsPinned"];
        }
    }
}

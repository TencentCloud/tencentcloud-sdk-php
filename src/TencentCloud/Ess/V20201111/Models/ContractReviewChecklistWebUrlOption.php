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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同审查清单个性化参数，用于控制页面的展示内容
 *
 * @method boolean getDisableCreateChecklist() 获取禁用新建清单功能。默认 false，设置为 true 会隐藏界面的新建按钮。
 * @method void setDisableCreateChecklist(boolean $DisableCreateChecklist) 设置禁用新建清单功能。默认 false，设置为 true 会隐藏界面的新建按钮。
 */
class ContractReviewChecklistWebUrlOption extends AbstractModel
{
    /**
     * @var boolean 禁用新建清单功能。默认 false，设置为 true 会隐藏界面的新建按钮。
     */
    public $DisableCreateChecklist;

    /**
     * @param boolean $DisableCreateChecklist 禁用新建清单功能。默认 false，设置为 true 会隐藏界面的新建按钮。
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
        if (array_key_exists("DisableCreateChecklist",$param) and $param["DisableCreateChecklist"] !== null) {
            $this->DisableCreateChecklist = $param["DisableCreateChecklist"];
        }
    }
}

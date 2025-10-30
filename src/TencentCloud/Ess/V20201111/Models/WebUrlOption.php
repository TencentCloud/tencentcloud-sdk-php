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
 * 提取web嵌入页面个性化设置
 *
 * @method boolean getDisableLinkPreview() 获取禁用链接预览
 * @method void setDisableLinkPreview(boolean $DisableLinkPreview) 设置禁用链接预览
 * @method boolean getDisableTaskEditing() 获取禁用任务编辑
 * @method void setDisableTaskEditing(boolean $DisableTaskEditing) 设置禁用任务编辑
 * @method boolean getDisableTaskResultEditing() 获取禁用任务结果编辑
 * @method void setDisableTaskResultEditing(boolean $DisableTaskResultEditing) 设置禁用任务结果编辑
 */
class WebUrlOption extends AbstractModel
{
    /**
     * @var boolean 禁用链接预览
     */
    public $DisableLinkPreview;

    /**
     * @var boolean 禁用任务编辑
     */
    public $DisableTaskEditing;

    /**
     * @var boolean 禁用任务结果编辑
     */
    public $DisableTaskResultEditing;

    /**
     * @param boolean $DisableLinkPreview 禁用链接预览
     * @param boolean $DisableTaskEditing 禁用任务编辑
     * @param boolean $DisableTaskResultEditing 禁用任务结果编辑
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
        if (array_key_exists("DisableLinkPreview",$param) and $param["DisableLinkPreview"] !== null) {
            $this->DisableLinkPreview = $param["DisableLinkPreview"];
        }

        if (array_key_exists("DisableTaskEditing",$param) and $param["DisableTaskEditing"] !== null) {
            $this->DisableTaskEditing = $param["DisableTaskEditing"];
        }

        if (array_key_exists("DisableTaskResultEditing",$param) and $param["DisableTaskResultEditing"] !== null) {
            $this->DisableTaskResultEditing = $param["DisableTaskResultEditing"];
        }
    }
}

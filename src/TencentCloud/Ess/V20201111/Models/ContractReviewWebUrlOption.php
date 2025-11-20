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
 * 合同审查个性化参数，用于控制页面的展示内容
 *
 * @method boolean getDisableTemporaryStore() 获取禁用暂存。 默认 false，设置为 true 会隐藏界面上的临时保存按钮
 * @method void setDisableTemporaryStore(boolean $DisableTemporaryStore) 设置禁用暂存。 默认 false，设置为 true 会隐藏界面上的临时保存按钮
 * @method boolean getDisableExport() 获取禁用导出。默认 false，设置为 true 会隐藏界面上的导出按钮
 * @method void setDisableExport(boolean $DisableExport) 设置禁用导出。默认 false，设置为 true 会隐藏界面上的导出按钮
 * @method boolean getDisableReviewAgain() 获取禁用重新审查。默认 false，设置为 true 会隐藏界面上的重新审查按钮
 * @method void setDisableReviewAgain(boolean $DisableReviewAgain) 设置禁用重新审查。默认 false，设置为 true 会隐藏界面上的重新审查按钮
 * @method boolean getDisableWxQrcode() 获取禁用二维码分享。默认 false，设置为 true 会隐藏界面上的分享二维码
 * @method void setDisableWxQrcode(boolean $DisableWxQrcode) 设置禁用二维码分享。默认 false，设置为 true 会隐藏界面上的分享二维码
 */
class ContractReviewWebUrlOption extends AbstractModel
{
    /**
     * @var boolean 禁用暂存。 默认 false，设置为 true 会隐藏界面上的临时保存按钮
     */
    public $DisableTemporaryStore;

    /**
     * @var boolean 禁用导出。默认 false，设置为 true 会隐藏界面上的导出按钮
     */
    public $DisableExport;

    /**
     * @var boolean 禁用重新审查。默认 false，设置为 true 会隐藏界面上的重新审查按钮
     */
    public $DisableReviewAgain;

    /**
     * @var boolean 禁用二维码分享。默认 false，设置为 true 会隐藏界面上的分享二维码
     */
    public $DisableWxQrcode;

    /**
     * @param boolean $DisableTemporaryStore 禁用暂存。 默认 false，设置为 true 会隐藏界面上的临时保存按钮
     * @param boolean $DisableExport 禁用导出。默认 false，设置为 true 会隐藏界面上的导出按钮
     * @param boolean $DisableReviewAgain 禁用重新审查。默认 false，设置为 true 会隐藏界面上的重新审查按钮
     * @param boolean $DisableWxQrcode 禁用二维码分享。默认 false，设置为 true 会隐藏界面上的分享二维码
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
        if (array_key_exists("DisableTemporaryStore",$param) and $param["DisableTemporaryStore"] !== null) {
            $this->DisableTemporaryStore = $param["DisableTemporaryStore"];
        }

        if (array_key_exists("DisableExport",$param) and $param["DisableExport"] !== null) {
            $this->DisableExport = $param["DisableExport"];
        }

        if (array_key_exists("DisableReviewAgain",$param) and $param["DisableReviewAgain"] !== null) {
            $this->DisableReviewAgain = $param["DisableReviewAgain"];
        }

        if (array_key_exists("DisableWxQrcode",$param) and $param["DisableWxQrcode"] !== null) {
            $this->DisableWxQrcode = $param["DisableWxQrcode"];
        }
    }
}

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
 * @method boolean getDisableTemporaryStore() 获取<p>禁用暂存。 默认 false，设置为 true 会隐藏界面上的临时保存按钮</p>
 * @method void setDisableTemporaryStore(boolean $DisableTemporaryStore) 设置<p>禁用暂存。 默认 false，设置为 true 会隐藏界面上的临时保存按钮</p>
 * @method boolean getDisableExport() 获取<p>禁用导出。默认 false，设置为 true 会隐藏界面上的导出按钮</p>
 * @method void setDisableExport(boolean $DisableExport) 设置<p>禁用导出。默认 false，设置为 true 会隐藏界面上的导出按钮</p>
 * @method boolean getDisableReviewAgain() 获取<p>禁用重新审查。默认 false，设置为 true 会隐藏界面上的重新审查按钮</p>
 * @method void setDisableReviewAgain(boolean $DisableReviewAgain) 设置<p>禁用重新审查。默认 false，设置为 true 会隐藏界面上的重新审查按钮</p>
 * @method boolean getDisableWxQrcode() 获取<p>禁用二维码分享。默认 false，设置为 true 会隐藏界面上的分享二维码</p>
 * @method void setDisableWxQrcode(boolean $DisableWxQrcode) 设置<p>禁用二维码分享。默认 false，设置为 true 会隐藏界面上的分享二维码</p>
 * @method boolean getDisableIgnoreRisk() 获取<p>禁用忽略风险。默认false，设置为true，会根据用户合同审查忽略风险权限点决定是否禁用忽略选项。</p>
 * @method void setDisableIgnoreRisk(boolean $DisableIgnoreRisk) 设置<p>禁用忽略风险。默认false，设置为true，会根据用户合同审查忽略风险权限点决定是否禁用忽略选项。</p>
 * @method boolean getDisableRevisedRisk() 获取<p>关闭原文修改。默认false，设置为true，根据用户合同审查修订操作权限点决定能否修改、一键修订原文。</p>
 * @method void setDisableRevisedRisk(boolean $DisableRevisedRisk) 设置<p>关闭原文修改。默认false，设置为true，根据用户合同审查修订操作权限点决定能否修改、一键修订原文。</p>
 */
class ContractReviewWebUrlOption extends AbstractModel
{
    /**
     * @var boolean <p>禁用暂存。 默认 false，设置为 true 会隐藏界面上的临时保存按钮</p>
     */
    public $DisableTemporaryStore;

    /**
     * @var boolean <p>禁用导出。默认 false，设置为 true 会隐藏界面上的导出按钮</p>
     */
    public $DisableExport;

    /**
     * @var boolean <p>禁用重新审查。默认 false，设置为 true 会隐藏界面上的重新审查按钮</p>
     */
    public $DisableReviewAgain;

    /**
     * @var boolean <p>禁用二维码分享。默认 false，设置为 true 会隐藏界面上的分享二维码</p>
     */
    public $DisableWxQrcode;

    /**
     * @var boolean <p>禁用忽略风险。默认false，设置为true，会根据用户合同审查忽略风险权限点决定是否禁用忽略选项。</p>
     */
    public $DisableIgnoreRisk;

    /**
     * @var boolean <p>关闭原文修改。默认false，设置为true，根据用户合同审查修订操作权限点决定能否修改、一键修订原文。</p>
     */
    public $DisableRevisedRisk;

    /**
     * @param boolean $DisableTemporaryStore <p>禁用暂存。 默认 false，设置为 true 会隐藏界面上的临时保存按钮</p>
     * @param boolean $DisableExport <p>禁用导出。默认 false，设置为 true 会隐藏界面上的导出按钮</p>
     * @param boolean $DisableReviewAgain <p>禁用重新审查。默认 false，设置为 true 会隐藏界面上的重新审查按钮</p>
     * @param boolean $DisableWxQrcode <p>禁用二维码分享。默认 false，设置为 true 会隐藏界面上的分享二维码</p>
     * @param boolean $DisableIgnoreRisk <p>禁用忽略风险。默认false，设置为true，会根据用户合同审查忽略风险权限点决定是否禁用忽略选项。</p>
     * @param boolean $DisableRevisedRisk <p>关闭原文修改。默认false，设置为true，根据用户合同审查修订操作权限点决定能否修改、一键修订原文。</p>
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

        if (array_key_exists("DisableIgnoreRisk",$param) and $param["DisableIgnoreRisk"] !== null) {
            $this->DisableIgnoreRisk = $param["DisableIgnoreRisk"];
        }

        if (array_key_exists("DisableRevisedRisk",$param) and $param["DisableRevisedRisk"] !== null) {
            $this->DisableRevisedRisk = $param["DisableRevisedRisk"];
        }
    }
}

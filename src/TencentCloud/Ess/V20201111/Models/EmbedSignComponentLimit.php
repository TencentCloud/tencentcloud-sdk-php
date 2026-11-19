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
 * 签署控件的类型和范围限制条件，用于控制**嵌入式文件**发起页面上，拖拽签署区时可使用的控件类型和具体的印章或签名方式。
 *
 * @method string getComponentType() 获取<p>控件类型，支持以下类型</p><ul><li>SIGN_SEAL : 印章控件</li><li>SIGN_PAGING_SEAL : 骑缝章控件</li><li>SIGN_SIGNATURE : 用户签名控件</li><li>SIGN_PAGING_SIGNATURE : 用户签名骑缝控件</li></ul>
 * @method void setComponentType(string $ComponentType) 设置<p>控件类型，支持以下类型</p><ul><li>SIGN_SEAL : 印章控件</li><li>SIGN_PAGING_SEAL : 骑缝章控件</li><li>SIGN_SIGNATURE : 用户签名控件</li><li>SIGN_PAGING_SIGNATURE : 用户签名骑缝控件</li></ul>
 * @method array getComponentValue() 获取<p>签署控件类型的值，用于限制签署时印章或者签名的选择范围</p><p>1.当 ComponentType 是 SIGN_SEAL 或者 SIGN_PAGING_SEAL 时，可指定印章类型。具体场景与规则说明如下：</p><p>指定印章类型:可传入以下枚举值来限制印章类型</p><ul><li> <b>OFFICIAL</b> :  企业公章</li><li> <b>CONTRACT</b> : 合同专用章</li><li> <b>FINANCE</b> : 财务专用章</li><li> <b>PERSONNEL</b> : 人事专用章</li><li> <b>OTHER</b> : 其他</li></ul><p>2.当ComponentType 是 SIGN_SIGNATURE 或者 SIGN_PAGING_SIGNATURE 时可传入以下类型（支持多个）</p><ul><li>HANDWRITE : 需要实时手写的手写签名</li><li>OCR_ESIGN : OCR印章（智慧手写签名）</li><li>IMG_ESIGN : 图片印章</li><li>ESIGN : 个人印章</li><li>SYSTEM_ESIGN : 系统印章</li></ul><br>
 * @method void setComponentValue(array $ComponentValue) 设置<p>签署控件类型的值，用于限制签署时印章或者签名的选择范围</p><p>1.当 ComponentType 是 SIGN_SEAL 或者 SIGN_PAGING_SEAL 时，可指定印章类型。具体场景与规则说明如下：</p><p>指定印章类型:可传入以下枚举值来限制印章类型</p><ul><li> <b>OFFICIAL</b> :  企业公章</li><li> <b>CONTRACT</b> : 合同专用章</li><li> <b>FINANCE</b> : 财务专用章</li><li> <b>PERSONNEL</b> : 人事专用章</li><li> <b>OTHER</b> : 其他</li></ul><p>2.当ComponentType 是 SIGN_SIGNATURE 或者 SIGN_PAGING_SIGNATURE 时可传入以下类型（支持多个）</p><ul><li>HANDWRITE : 需要实时手写的手写签名</li><li>OCR_ESIGN : OCR印章（智慧手写签名）</li><li>IMG_ESIGN : 图片印章</li><li>ESIGN : 个人印章</li><li>SYSTEM_ESIGN : 系统印章</li></ul><br>
 */
class EmbedSignComponentLimit extends AbstractModel
{
    /**
     * @var string <p>控件类型，支持以下类型</p><ul><li>SIGN_SEAL : 印章控件</li><li>SIGN_PAGING_SEAL : 骑缝章控件</li><li>SIGN_SIGNATURE : 用户签名控件</li><li>SIGN_PAGING_SIGNATURE : 用户签名骑缝控件</li></ul>
     */
    public $ComponentType;

    /**
     * @var array <p>签署控件类型的值，用于限制签署时印章或者签名的选择范围</p><p>1.当 ComponentType 是 SIGN_SEAL 或者 SIGN_PAGING_SEAL 时，可指定印章类型。具体场景与规则说明如下：</p><p>指定印章类型:可传入以下枚举值来限制印章类型</p><ul><li> <b>OFFICIAL</b> :  企业公章</li><li> <b>CONTRACT</b> : 合同专用章</li><li> <b>FINANCE</b> : 财务专用章</li><li> <b>PERSONNEL</b> : 人事专用章</li><li> <b>OTHER</b> : 其他</li></ul><p>2.当ComponentType 是 SIGN_SIGNATURE 或者 SIGN_PAGING_SIGNATURE 时可传入以下类型（支持多个）</p><ul><li>HANDWRITE : 需要实时手写的手写签名</li><li>OCR_ESIGN : OCR印章（智慧手写签名）</li><li>IMG_ESIGN : 图片印章</li><li>ESIGN : 个人印章</li><li>SYSTEM_ESIGN : 系统印章</li></ul><br>
     */
    public $ComponentValue;

    /**
     * @param string $ComponentType <p>控件类型，支持以下类型</p><ul><li>SIGN_SEAL : 印章控件</li><li>SIGN_PAGING_SEAL : 骑缝章控件</li><li>SIGN_SIGNATURE : 用户签名控件</li><li>SIGN_PAGING_SIGNATURE : 用户签名骑缝控件</li></ul>
     * @param array $ComponentValue <p>签署控件类型的值，用于限制签署时印章或者签名的选择范围</p><p>1.当 ComponentType 是 SIGN_SEAL 或者 SIGN_PAGING_SEAL 时，可指定印章类型。具体场景与规则说明如下：</p><p>指定印章类型:可传入以下枚举值来限制印章类型</p><ul><li> <b>OFFICIAL</b> :  企业公章</li><li> <b>CONTRACT</b> : 合同专用章</li><li> <b>FINANCE</b> : 财务专用章</li><li> <b>PERSONNEL</b> : 人事专用章</li><li> <b>OTHER</b> : 其他</li></ul><p>2.当ComponentType 是 SIGN_SIGNATURE 或者 SIGN_PAGING_SIGNATURE 时可传入以下类型（支持多个）</p><ul><li>HANDWRITE : 需要实时手写的手写签名</li><li>OCR_ESIGN : OCR印章（智慧手写签名）</li><li>IMG_ESIGN : 图片印章</li><li>ESIGN : 个人印章</li><li>SYSTEM_ESIGN : 系统印章</li></ul><br>
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
        if (array_key_exists("ComponentType",$param) and $param["ComponentType"] !== null) {
            $this->ComponentType = $param["ComponentType"];
        }

        if (array_key_exists("ComponentValue",$param) and $param["ComponentValue"] !== null) {
            $this->ComponentValue = $param["ComponentValue"];
        }
    }
}

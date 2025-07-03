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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 体检报告-眼科-裸眼视力
 *
 * @method KeyValueItem getLeftEyeVisual() 获取左眼视力
 * @method void setLeftEyeVisual(KeyValueItem $LeftEyeVisual) 设置左眼视力
 * @method KeyValueItem getText() 获取裸眼视力
 * @method void setText(KeyValueItem $Text) 设置裸眼视力
 * @method KeyValueItem getRightEyeVisual() 获取右眼视力
 * @method void setRightEyeVisual(KeyValueItem $RightEyeVisual) 设置右眼视力
 */
class OphthalmologyBareEyeSight extends AbstractModel
{
    /**
     * @var KeyValueItem 左眼视力
     */
    public $LeftEyeVisual;

    /**
     * @var KeyValueItem 裸眼视力
     */
    public $Text;

    /**
     * @var KeyValueItem 右眼视力
     */
    public $RightEyeVisual;

    /**
     * @param KeyValueItem $LeftEyeVisual 左眼视力
     * @param KeyValueItem $Text 裸眼视力
     * @param KeyValueItem $RightEyeVisual 右眼视力
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
        if (array_key_exists("LeftEyeVisual",$param) and $param["LeftEyeVisual"] !== null) {
            $this->LeftEyeVisual = new KeyValueItem();
            $this->LeftEyeVisual->deserialize($param["LeftEyeVisual"]);
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = new KeyValueItem();
            $this->Text->deserialize($param["Text"]);
        }

        if (array_key_exists("RightEyeVisual",$param) and $param["RightEyeVisual"] !== null) {
            $this->RightEyeVisual = new KeyValueItem();
            $this->RightEyeVisual->deserialize($param["RightEyeVisual"]);
        }
    }
}

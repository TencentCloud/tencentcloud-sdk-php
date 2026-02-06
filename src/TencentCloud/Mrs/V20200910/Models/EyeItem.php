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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 眼科结构体
 *
 * @method EyeChildItem getLeft() 获取<p>左眼</p>
 * @method void setLeft(EyeChildItem $Left) 设置<p>左眼</p>
 * @method EyeChildItem getRight() 获取<p>右眼</p>
 * @method void setRight(EyeChildItem $Right) 设置<p>右眼</p>
 * @method BaseItem2 getPd() 获取<p>瞳距</p>
 * @method void setPd(BaseItem2 $Pd) 设置<p>瞳距</p>
 * @method EyeFinalItem getRightFinal() 获取<p>右眼平均后结果</p>
 * @method void setRightFinal(EyeFinalItem $RightFinal) 设置<p>右眼平均后结果</p>
 * @method EyeFinalItem getLeftFinal() 获取<p>左眼平均后结果</p>
 * @method void setLeftFinal(EyeFinalItem $LeftFinal) 设置<p>左眼平均后结果</p>
 */
class EyeItem extends AbstractModel
{
    /**
     * @var EyeChildItem <p>左眼</p>
     */
    public $Left;

    /**
     * @var EyeChildItem <p>右眼</p>
     */
    public $Right;

    /**
     * @var BaseItem2 <p>瞳距</p>
     */
    public $Pd;

    /**
     * @var EyeFinalItem <p>右眼平均后结果</p>
     */
    public $RightFinal;

    /**
     * @var EyeFinalItem <p>左眼平均后结果</p>
     */
    public $LeftFinal;

    /**
     * @param EyeChildItem $Left <p>左眼</p>
     * @param EyeChildItem $Right <p>右眼</p>
     * @param BaseItem2 $Pd <p>瞳距</p>
     * @param EyeFinalItem $RightFinal <p>右眼平均后结果</p>
     * @param EyeFinalItem $LeftFinal <p>左眼平均后结果</p>
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
        if (array_key_exists("Left",$param) and $param["Left"] !== null) {
            $this->Left = new EyeChildItem();
            $this->Left->deserialize($param["Left"]);
        }

        if (array_key_exists("Right",$param) and $param["Right"] !== null) {
            $this->Right = new EyeChildItem();
            $this->Right->deserialize($param["Right"]);
        }

        if (array_key_exists("Pd",$param) and $param["Pd"] !== null) {
            $this->Pd = new BaseItem2();
            $this->Pd->deserialize($param["Pd"]);
        }

        if (array_key_exists("RightFinal",$param) and $param["RightFinal"] !== null) {
            $this->RightFinal = new EyeFinalItem();
            $this->RightFinal->deserialize($param["RightFinal"]);
        }

        if (array_key_exists("LeftFinal",$param) and $param["LeftFinal"] !== null) {
            $this->LeftFinal = new EyeFinalItem();
            $this->LeftFinal->deserialize($param["LeftFinal"]);
        }
    }
}

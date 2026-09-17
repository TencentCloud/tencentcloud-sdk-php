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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 卡证告警信息返回
 *
 * @method integer getBorderCheck() 获取<p>证件边缘是否完整<br>0：正常<br>1：边缘不完整</p>
 * @method void setBorderCheck(integer $BorderCheck) 设置<p>证件边缘是否完整<br>0：正常<br>1：边缘不完整</p>
 * @method integer getOcclusionCheck() 获取<p>证件是否被遮挡<br>0：正常<br>1：有遮挡</p>
 * @method void setOcclusionCheck(integer $OcclusionCheck) 设置<p>证件是否被遮挡<br>0：正常<br>1：有遮挡</p>
 * @method integer getCopyCheck() 获取<p>是否复印<br>0:正常<br>1:复印件</p>
 * @method void setCopyCheck(integer $CopyCheck) 设置<p>是否复印<br>0:正常<br>1:复印件</p>
 * @method integer getReshootCheck() 获取<p>是否屏幕翻拍<br>0:正常<br>1:翻拍</p>
 * @method void setReshootCheck(integer $ReshootCheck) 设置<p>是否屏幕翻拍<br>0:正常<br>1:翻拍</p>
 * @method integer getPSCheck() 获取<p>证件是否有PS<br>0：正常<br>1：有PS</p>
 * @method void setPSCheck(integer $PSCheck) 设置<p>证件是否有PS<br>0：正常<br>1：有PS</p>
 * @method integer getBlurCheck() 获取<p>是否模糊：<br>0:正常<br>1:模糊</p>
 * @method void setBlurCheck(integer $BlurCheck) 设置<p>是否模糊：<br>0:正常<br>1:模糊</p>
 * @method float getBlurScore() 获取<p>模糊分数， 范围：0.0-1.0，分数越高越模糊，建议阈值为0.5</p>
 * @method void setBlurScore(float $BlurScore) 设置<p>模糊分数， 范围：0.0-1.0，分数越高越模糊，建议阈值为0.5</p>
 * @method integer getElectronCheck() 获取<p>是否电子身份证<br>0：否<br>1：是电子身份证</p>
 * @method void setElectronCheck(integer $ElectronCheck) 设置<p>是否电子身份证<br>0：否<br>1：是电子身份证</p>
 * @method integer getReflectCheck() 获取<p>是否存在反光</p><p>枚举值：</p><ul><li>0： 正常</li><li>1： 反光</li></ul><p>默认值：0</p>
 * @method void setReflectCheck(integer $ReflectCheck) 设置<p>是否存在反光</p><p>枚举值：</p><ul><li>0： 正常</li><li>1： 反光</li></ul><p>默认值：0</p>
 */
class CardWarnInfo extends AbstractModel
{
    /**
     * @var integer <p>证件边缘是否完整<br>0：正常<br>1：边缘不完整</p>
     */
    public $BorderCheck;

    /**
     * @var integer <p>证件是否被遮挡<br>0：正常<br>1：有遮挡</p>
     */
    public $OcclusionCheck;

    /**
     * @var integer <p>是否复印<br>0:正常<br>1:复印件</p>
     */
    public $CopyCheck;

    /**
     * @var integer <p>是否屏幕翻拍<br>0:正常<br>1:翻拍</p>
     */
    public $ReshootCheck;

    /**
     * @var integer <p>证件是否有PS<br>0：正常<br>1：有PS</p>
     */
    public $PSCheck;

    /**
     * @var integer <p>是否模糊：<br>0:正常<br>1:模糊</p>
     */
    public $BlurCheck;

    /**
     * @var float <p>模糊分数， 范围：0.0-1.0，分数越高越模糊，建议阈值为0.5</p>
     */
    public $BlurScore;

    /**
     * @var integer <p>是否电子身份证<br>0：否<br>1：是电子身份证</p>
     */
    public $ElectronCheck;

    /**
     * @var integer <p>是否存在反光</p><p>枚举值：</p><ul><li>0： 正常</li><li>1： 反光</li></ul><p>默认值：0</p>
     */
    public $ReflectCheck;

    /**
     * @param integer $BorderCheck <p>证件边缘是否完整<br>0：正常<br>1：边缘不完整</p>
     * @param integer $OcclusionCheck <p>证件是否被遮挡<br>0：正常<br>1：有遮挡</p>
     * @param integer $CopyCheck <p>是否复印<br>0:正常<br>1:复印件</p>
     * @param integer $ReshootCheck <p>是否屏幕翻拍<br>0:正常<br>1:翻拍</p>
     * @param integer $PSCheck <p>证件是否有PS<br>0：正常<br>1：有PS</p>
     * @param integer $BlurCheck <p>是否模糊：<br>0:正常<br>1:模糊</p>
     * @param float $BlurScore <p>模糊分数， 范围：0.0-1.0，分数越高越模糊，建议阈值为0.5</p>
     * @param integer $ElectronCheck <p>是否电子身份证<br>0：否<br>1：是电子身份证</p>
     * @param integer $ReflectCheck <p>是否存在反光</p><p>枚举值：</p><ul><li>0： 正常</li><li>1： 反光</li></ul><p>默认值：0</p>
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
        if (array_key_exists("BorderCheck",$param) and $param["BorderCheck"] !== null) {
            $this->BorderCheck = $param["BorderCheck"];
        }

        if (array_key_exists("OcclusionCheck",$param) and $param["OcclusionCheck"] !== null) {
            $this->OcclusionCheck = $param["OcclusionCheck"];
        }

        if (array_key_exists("CopyCheck",$param) and $param["CopyCheck"] !== null) {
            $this->CopyCheck = $param["CopyCheck"];
        }

        if (array_key_exists("ReshootCheck",$param) and $param["ReshootCheck"] !== null) {
            $this->ReshootCheck = $param["ReshootCheck"];
        }

        if (array_key_exists("PSCheck",$param) and $param["PSCheck"] !== null) {
            $this->PSCheck = $param["PSCheck"];
        }

        if (array_key_exists("BlurCheck",$param) and $param["BlurCheck"] !== null) {
            $this->BlurCheck = $param["BlurCheck"];
        }

        if (array_key_exists("BlurScore",$param) and $param["BlurScore"] !== null) {
            $this->BlurScore = $param["BlurScore"];
        }

        if (array_key_exists("ElectronCheck",$param) and $param["ElectronCheck"] !== null) {
            $this->ElectronCheck = $param["ElectronCheck"];
        }

        if (array_key_exists("ReflectCheck",$param) and $param["ReflectCheck"] !== null) {
            $this->ReflectCheck = $param["ReflectCheck"];
        }
    }
}

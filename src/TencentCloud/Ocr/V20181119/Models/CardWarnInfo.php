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
 * @method integer getBorderCheck() 获取证件边缘是否完整
0：正常
1：边缘不完整
 * @method void setBorderCheck(integer $BorderCheck) 设置证件边缘是否完整
0：正常
1：边缘不完整
 * @method integer getOcclusionCheck() 获取证件是否被遮挡
0：正常
1：有遮挡
 * @method void setOcclusionCheck(integer $OcclusionCheck) 设置证件是否被遮挡
0：正常
1：有遮挡
 * @method integer getCopyCheck() 获取是否复印
0:正常
1:复印件
 * @method void setCopyCheck(integer $CopyCheck) 设置是否复印
0:正常
1:复印件
 * @method integer getReshootCheck() 获取是否屏幕翻拍
0:正常
1:翻拍
 * @method void setReshootCheck(integer $ReshootCheck) 设置是否屏幕翻拍
0:正常
1:翻拍
 * @method integer getPSCheck() 获取证件是否有PS
0：正常
1：有PS
 * @method void setPSCheck(integer $PSCheck) 设置证件是否有PS
0：正常
1：有PS
 * @method integer getBlurCheck() 获取是否模糊：
0:正常
1:模糊
 * @method void setBlurCheck(integer $BlurCheck) 设置是否模糊：
0:正常
1:模糊
 * @method float getBlurScore() 获取模糊分数， 范围：0.0-1.0，分数越高越模糊，建议阈值为0.5
 * @method void setBlurScore(float $BlurScore) 设置模糊分数， 范围：0.0-1.0，分数越高越模糊，建议阈值为0.5
 * @method integer getElectronCheck() 获取是否电子身份证
0：否
1：是电子身份证
 * @method void setElectronCheck(integer $ElectronCheck) 设置是否电子身份证
0：否
1：是电子身份证
 */
class CardWarnInfo extends AbstractModel
{
    /**
     * @var integer 证件边缘是否完整
0：正常
1：边缘不完整
     */
    public $BorderCheck;

    /**
     * @var integer 证件是否被遮挡
0：正常
1：有遮挡
     */
    public $OcclusionCheck;

    /**
     * @var integer 是否复印
0:正常
1:复印件
     */
    public $CopyCheck;

    /**
     * @var integer 是否屏幕翻拍
0:正常
1:翻拍
     */
    public $ReshootCheck;

    /**
     * @var integer 证件是否有PS
0：正常
1：有PS
     */
    public $PSCheck;

    /**
     * @var integer 是否模糊：
0:正常
1:模糊
     */
    public $BlurCheck;

    /**
     * @var float 模糊分数， 范围：0.0-1.0，分数越高越模糊，建议阈值为0.5
     */
    public $BlurScore;

    /**
     * @var integer 是否电子身份证
0：否
1：是电子身份证
     */
    public $ElectronCheck;

    /**
     * @param integer $BorderCheck 证件边缘是否完整
0：正常
1：边缘不完整
     * @param integer $OcclusionCheck 证件是否被遮挡
0：正常
1：有遮挡
     * @param integer $CopyCheck 是否复印
0:正常
1:复印件
     * @param integer $ReshootCheck 是否屏幕翻拍
0:正常
1:翻拍
     * @param integer $PSCheck 证件是否有PS
0：正常
1：有PS
     * @param integer $BlurCheck 是否模糊：
0:正常
1:模糊
     * @param float $BlurScore 模糊分数， 范围：0.0-1.0，分数越高越模糊，建议阈值为0.5
     * @param integer $ElectronCheck 是否电子身份证
0：否
1：是电子身份证
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
    }
}

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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplySdkVerificationToken请求参数结构体
 *
 * @method boolean getNeedVerifyIdCard() 获取是否需要身份证鉴伪，如果不需要，则仅做证件OCR。当前仅IdCardType为HK支持鉴伪。
 * @method void setNeedVerifyIdCard(boolean $NeedVerifyIdCard) 设置是否需要身份证鉴伪，如果不需要，则仅做证件OCR。当前仅IdCardType为HK支持鉴伪。
 * @method string getIdCardType() 获取卡证类型，当前仅支持HK（香港身份证），ML（马来西亚身份证），PhilippinesVoteID（菲律宾选民卡），PhilippinesDrivingLicense（菲律宾驾驶证）。默认为HK。
 * @method void setIdCardType(string $IdCardType) 设置卡证类型，当前仅支持HK（香港身份证），ML（马来西亚身份证），PhilippinesVoteID（菲律宾选民卡），PhilippinesDrivingLicense（菲律宾驾驶证）。默认为HK。
 * @method boolean getDisableChangeOcrResult() 获取是否允许用户修改ocr结果，默认false，允许。
 * @method void setDisableChangeOcrResult(boolean $DisableChangeOcrResult) 设置是否允许用户修改ocr结果，默认false，允许。
 * @method boolean getDisableCheckOcrWarnings() 获取是否关闭OCR告警，默认false，不关闭。如果为false开启OCR告警，我们会根据Ocr的告警信息进行拦截，当NeedVerifyIdCard为true时该字段将为true。
 * @method void setDisableCheckOcrWarnings(boolean $DisableCheckOcrWarnings) 设置是否关闭OCR告警，默认false，不关闭。如果为false开启OCR告警，我们会根据Ocr的告警信息进行拦截，当NeedVerifyIdCard为true时该字段将为true。
 * @method string getExtra() 获取透传字段，在获取验证结果时返回，最长1024位。
 * @method void setExtra(string $Extra) 设置透传字段，在获取验证结果时返回，最长1024位。
 */
class ApplySdkVerificationTokenRequest extends AbstractModel
{
    /**
     * @var boolean 是否需要身份证鉴伪，如果不需要，则仅做证件OCR。当前仅IdCardType为HK支持鉴伪。
     */
    public $NeedVerifyIdCard;

    /**
     * @var string 卡证类型，当前仅支持HK（香港身份证），ML（马来西亚身份证），PhilippinesVoteID（菲律宾选民卡），PhilippinesDrivingLicense（菲律宾驾驶证）。默认为HK。
     */
    public $IdCardType;

    /**
     * @var boolean 是否允许用户修改ocr结果，默认false，允许。
     */
    public $DisableChangeOcrResult;

    /**
     * @var boolean 是否关闭OCR告警，默认false，不关闭。如果为false开启OCR告警，我们会根据Ocr的告警信息进行拦截，当NeedVerifyIdCard为true时该字段将为true。
     */
    public $DisableCheckOcrWarnings;

    /**
     * @var string 透传字段，在获取验证结果时返回，最长1024位。
     */
    public $Extra;

    /**
     * @param boolean $NeedVerifyIdCard 是否需要身份证鉴伪，如果不需要，则仅做证件OCR。当前仅IdCardType为HK支持鉴伪。
     * @param string $IdCardType 卡证类型，当前仅支持HK（香港身份证），ML（马来西亚身份证），PhilippinesVoteID（菲律宾选民卡），PhilippinesDrivingLicense（菲律宾驾驶证）。默认为HK。
     * @param boolean $DisableChangeOcrResult 是否允许用户修改ocr结果，默认false，允许。
     * @param boolean $DisableCheckOcrWarnings 是否关闭OCR告警，默认false，不关闭。如果为false开启OCR告警，我们会根据Ocr的告警信息进行拦截，当NeedVerifyIdCard为true时该字段将为true。
     * @param string $Extra 透传字段，在获取验证结果时返回，最长1024位。
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
        if (array_key_exists("NeedVerifyIdCard",$param) and $param["NeedVerifyIdCard"] !== null) {
            $this->NeedVerifyIdCard = $param["NeedVerifyIdCard"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("DisableChangeOcrResult",$param) and $param["DisableChangeOcrResult"] !== null) {
            $this->DisableChangeOcrResult = $param["DisableChangeOcrResult"];
        }

        if (array_key_exists("DisableCheckOcrWarnings",$param) and $param["DisableCheckOcrWarnings"] !== null) {
            $this->DisableCheckOcrWarnings = $param["DisableCheckOcrWarnings"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }
    }
}
